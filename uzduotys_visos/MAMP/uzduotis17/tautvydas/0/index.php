<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
        // define variables and set to empty values
        $nameErr = $emailErr = $genderErr = $websiteErr = "";
        $name = $email = $gender = $comment = $website = "";

        ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          Name: <input type="text" name="name" value="<?php echo $name;?>">
          <span class="error">* <?php echo $nameErr;?></span>
          <br><br>
          E-mail: <input type="text" name="email" value="<?php echo $email;?>">
          <span class="error">* <?php echo $emailErr;?></span>
          <br><br>
          Website: <input type="text" name="website" value="<?php echo $website;?>">
          <span class="error"><?php echo $websiteErr;?></span>
          <br><br>
          Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
          <br><br>
          Gender:
          <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
          <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
          <span class="error">* <?php echo $genderErr;?></span>
          <br><br>
          <input type="submit" name="submit" value="Submit">
        </form>


 <?php
        print_r($_POST);
  ?>


    </body>
</html>
