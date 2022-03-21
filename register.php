<?php

require ("includes/connect.php");

include ("includes/header.php");

if (isset($_POST['register-btn']))
{
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $user_name = trim($_POST['user_name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $pass_go = true;

    if ($user_name || $email)
    {
        $check_sql = "SELECT u_id FROM users WHERE email = '$email' OR user_name = '$user_name'";
        $check_res = $conn->query($check_sql);

        if ($check_res->num_rows > 0)
        {
            $message = "<p class='valNoError'>That email or username is already taken. Please choose another.</p>";
            $pass_go = false;
        }
    }

    if(!$first_name || !$last_name || !$user_name || !$email || !$password )
    {
        //First Name
        if ($first_name == "")
        {
            $invalidFN = "<p class='valError'>*First Name cannot be empty.*";
        }
        else
        {
            $first_name= filter_var($first_name, FILTER_SANITIZE_STRING);
        }

        //Last Name
        if ($last_name == "")
        {
            $invalidLN = "<p class='valError'>*Last Name cannot be empty.*";
        }
        else
        {
            $last_name= filter_var($last_name, FILTER_SANITIZE_STRING);
        }

        //Username
        if ($user_name == "")
        {
            $invalidUN = "<p class='valError'>*User Name cannot be empty.*";
        }
        else
        {
            $user_name= filter_var($user_name, FILTER_SANITIZE_STRING);

            if(strpos($user_name, " ") !== FALSE )
            {
                $invalidUN = "<p class='valError'>*User Name cannot contain spaces.*";
            }
        }

        //Email
        if ($email == "")
        {
            $invalidEmail = "<p class='valError'>*Email cannot be empty. Please enter the email.*</p>";
        }
        else 
        {
            $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$^";

            $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        
            if(!preg_match($pattern, $email))
            {
                $invalidEmail = "<p class='valError'>*Email failed validation. Try again!*</p>";
            }
        }

        //Password
        if ($password == "")
        {
            $invalidPswd = "<p class='valError'>*Password cannot be empty. Please enter a password.*</p>";
        }
        else
        {
            if ((strlen($password) < 6))
            {
                $invalidPswd = "<p class='valError'>*Password too short. Try again!*</p>";            
            }

            if (!preg_match("#[0-9]+#",$password))
            {
                $invalidPswd = "<p class='valError'>*Your password must contain number(s). Try again!*</p>"; 
            }

            if(!preg_match("#[A-Z]+#",$password)) 
            {
                $invalidPswd = "<p class='valError'>*Your password must contain at least 1 capital letter. Try again!*</p>";
            }

            if(!preg_match("#[a-z]+#",$password))
            {
                $invalidPswd = "<p class='valError'>*Your password must contain at least 1 lowercase letter. Try again!*</p>";
            }
        }
        $pass_go = false;
    }

    if ($pass_go == true)
    {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        
        $insert_sql = "INSERT INTO users (first_name, last_name, user_name, email, password) VALUES ('$first_name', '$last_name', '$user_name', '$email', '$hash')";

        if($conn->query($insert_sql))
        {
            $message = "<p class='valNoError'>Registeration was successful. You may now add job postings ads!</p>";
            $first_name = $last_name = $user_name = $email = $password = "";
        }
        else
        {
            $message = "<p class='valError'>There was a problem registering. Please try again! </p>";
        }
    }
}

?>

<div class="register">
    
    <h2>Want to post an ad? Register yourself first!</h2>
    
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="register-form form">
    
        <?php if($message): ?>
            <div class="msg">
                <?php echo $message; ?>
            </div>
        <?php endif ; ?>
    
        <div>
            <label for="first_name">First name</label>
            <input type="text" id="first_name" name="first_name" value="<?php echo $first_name; ?>">
            <?php if ($invalidFN) echo $invalidFN; ?> 
        </div>
    
        <div>
            <label for="last_name">Last name</label>
            <input type="text" id="last_name" name="last_name" value="<?php echo $last_name; ?>">
            <?php if ($invalidLN) echo $invalidLN; ?> 
        </div>
    
        <div>
            <label for="user_name">User name</label>
            <input type="text" id="user_name" name="user_name" value="<?php echo $user_name; ?>">
             <?php if ($invalidUN) echo $invalidUN; ?> 
        </div>
    
        <div>
            <label for="email">Email</label>
            <input type="text" id="email" name="email" value="<?php echo $email; ?>">
             <?php if ($invalidEmail) echo $invalidEmail; ?> 
        </div>
    
        <div>
            <label for="password">Password</label>
            <input type="text" id="password" name="password" value="<?php echo $password; ?>">
             <?php if ($invalidPswd) echo $invalidPswd; ?> 
        </div>
    
        <div><input type="submit" name="register-btn" value="Register!"></div>
    
    </form>
</div>

<?php include ("includes/footer.php"); ?>