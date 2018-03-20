
<?php

if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username ='".$username."' AND password='".$password."' LIMIT 1";
        $res = mysqli_query($sql);
        if(mysqli_num_rows($res) == 1 ) {
            echo "You have successfully logged in.";
        } else {
            echo "Invalid login information."; 
        }
    } else {
        echo "Not working.";
    }
	
?>