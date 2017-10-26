<?php include"db_connect.php"; ?>
<?php session_start(); ?>
<?php 
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        
     // Same value but cleaned   
        $username  =  mysqli_real_escape_string($dbConnect, $username); 
        $password  =  mysqli_real_escape_string($dbConnect, $password);     
        $query = "SELECT * FROM users WHERE username = '$username' ";
        $select_username_query = mysqli_query ($dbConnect, $query);
        
        
        if(!$select_username_query){
            die("QUERY FAILED" . mysqli_error($dbConnect));
        }
        
        while($row = mysqli_fetch_array($select_username_query)){
            $db_id = $row['user_id'];
            $db_username = $row['username'];
            $db_password = $row['user_password'];
            $db_firstname = $row['user_firstname'];
            $db_lastname = $row['user_lastname'];
            $db_role = $row['user_role'];
        }
        
        if ($username === $db_username && $password === $db_password){
            
             $_SESSION['username'] = $db_username;
            $_SESSION['user_firstname'] = $db_firstname;
            $_SESSION['user_lastname'] = $db_lastname;
            $_SESSION['user_role'] = $db_role;
            
            
             
            header("Location: ../admin/");
     
        }else {
            header("Location: ../index.php");
        }
    }




?>