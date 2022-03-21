<?php

if(isset($_POST['login-btn'])) {
    $user = trim($_POST['email']);    
    $pswd = trim($_POST['password']);

    
    if($user && $pswd)
    {
        $login_sql = "SELECT u_id, first_name, password from users WHERE user_name = '$user' OR email = '$user'";
        $login_result = $conn->query($login_sql);
        if($login_result->num_rows > 0)
        {
            $row = $login_result->fetch_assoc();
    
            if (password_verify($pswd, $row['password']))
            {
                // session_start();
                $_SESSION['first_name'] = $row['first_name'];
                $_SESSION['user_id'] = $row['u_id'];
                $_SESSION['minnislongrandomstring-2'] = session_id();
    
                $_SESSION['time'] = time();
    
                $update_sql = "UPDATE users SET date_last_login = NOW() WHERE u_id = " . $_SESSION['user_id'];
                if($conn->query($update_sql))
                {
                    $message = "<p class='valNoError'>Log in successful!</p>";
                }
                else
                {
                    $message = "<p>There was a problem logging in. Please try again! $conn->error</p>";
                }
            }
            else
            {
                $invalidPswd .= "<p class='valError'>Password did not match. Try again! $conn->error</p>"; 
            }
        }
        else
        {
            $invalidUser .= "<p class='valError'>Username does not exist. Try again! $conn->error</p>";
        }
    }
    else
    {
        if ($user == "")
        {
            $invalidUser = "<p class='valError'>*Username/Email cannot be empty. Please add the username.*</p>";
        }

        if  ($pswd == "")
        {
            $invalidPswd = "<p class='valError'>*Password cannot be empty. Please add the password.*</p>";
        }
    }
}

?>