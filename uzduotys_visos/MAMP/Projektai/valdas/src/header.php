<?php

$categories=array("living_room", "office", "for_kids", "kitchen", "accesories");




 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
    <title>WEB shop</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,900" rel="stylesheet">
    <link rel="stylesheet" href="./libs/icomoon/style.css">
    <!-- <link rel="stylesheet" href="./libs/css/home-page.css">
    <link rel="stylesheet" href="./libs/css/contacts.css">
    <link rel="stylesheet" href="./libs/css/products.css">
    <link rel="stylesheet" href="./libs/css/product.css">
    <link rel="stylesheet" href="./libs/css/menu.css">
    <link rel="stylesheet" href="./libs/css/gallery.css"> -->
    <link rel="stylesheet" href="./libs/css/main.css">
</head>

<body>

    <nav>
        <a href="index.php" id="logo-a" class="menu-button"><img id="logo" src="./assets/logo.png" alt=""></a>
        <menu>
            <a href="index.php" class="menu-button"><i id="home-page" class="menu-item material-icons">home</i></a>
            <a href="products.php" class="menu-button"><i id="products-page" class="menu-item material-icons">shopping_basket</i></a>
            <a id="search-button" onclick="searchToggle(event)"><i class="menu-item material-icons">search</i></a>
            <a href="contacts.php" class="menu-button"><i id="contacts" class="menu-item material-icons"><i class="material-icons">local_phone</i></i></a>
        </menu>
        <a class="login-button" href="#"><i class="menu-item material-icons">system_update_alt</i></a>
    </nav>

    <div class="login">
        <?php if (isset($_COOKIE['customer'])) { ?>
            <div class="admin-panel">
                <a href="new_product.php" class="admin-tool">
                    <i class="material-icons">add</i>
                    <h4>Add new product</h4>
                </a>
                <a href="manage_products.php" class="admin-tool">
                    <i class="material-icons">storage</i>
                    <h4>Manage products</h4>
                </a>
                <a href="./login.php?logout=1" class="admin-tool">
                    <i class="material-icons">person_pin</i>
                    <h4>Log out</h4>
                </a>
            </div>

        <?php } else {?>

            <div class="login-block">
                <form id="login" class="w100"  method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input class="form-input" id="username" type="text" name="username" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-input" id="password" type="password" name="password" value="" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="button">Log in</button>
                    </div>
                </form>
            </div>
        <?php } ?>
    </div>

    <div id="search">
        <div class="search-container" onclick="searchToggle(); closeLogin()">
            <div class="search-block">
                <form class="search-form" action="" method="post" onclick="event.stopPropagation()">
                    <input id="search-input" type="text" name="q" value="">
                    <a class=""><span>X</span></a>
                    <label for="search-input">Type product you are looking for</label>
                </form>
                <div class="products-search-block">

                    <!--Paieskos rezultatai  -->

                </div>
            </div>
        </div>
    </div>

    <div class="aside-toggle" onclick="toggleAsideButton(); toggleAside()">
        <i id="hamburger" class="material-icons">menu</i>
        <i id="close" class="material-icons">close</i>
    </div>

    <aside>
        <div class="categories">

            <?php foreach ($categories as $category) { ?>

            <a class="categories-item" href="./products.php?category=<?php echo $category; ?>">
                <div class="categories-item-text">
                    <?php echo str_replace('_', ' ', $category); ?>
                </div>
                <div class="categories-logo">
                    <?php include "./assets/svg-icons/" . $category . ".svg"?>
                </div>
            </a>

            <?php } ?>
        </div>

        <a class="aside-show-all" href="products.php">
            <div>
                show all categories
                <hr>
            </div>
        </a>
    </aside>

    <main onclick="closeAside(); closeLogin();">
