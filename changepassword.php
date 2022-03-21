<?php


$page_title="Change Password";

session_start();
require ("includes/connect.php");

include ("includes/header.php");
// $u_id = $_SESSION['user_id'];

if (isset($_POST['change-btn']))
{
    $password = trim($_POST['password']);
    $newPassword = trim($_POST['newPassword']);
    $passgo = TRUE;

    if($password == "")
    {
        $invalidOP = "<p class='valError'>*Please enter your old password*</p>";  
        $passgo = FALSE;
    }

    if($newPassword == "")
    {
        $invalidNP = "<p class='valError'>*Please enter a new password*</p>";  
        $passgo = FALSE;
    }  
    elseif ((strlen($newPassword) < 6))
    {
        $invalidNP = "<p class='valError'>*Password too short. Try again!*</p>";   
        $passgo = FALSE;         
    }
    elseif (!preg_match("#[0-9]+#",$newPassword))
    {
        $invalidNP = "<p class='valError'>*Your password must contain number(s). Try again!*</p>";    
        $passgo = FALSE;         
    }
    elseif (!preg_match("#[A-Z]+#",$newPassword)) 
    {
        $invalidNP = "<p class='valError'>*Your password must contain at least 1 capital letter. Try again!*</p>";   
        $passgo = FALSE;         
    }
    else
    {
        if (!preg_match("#[a-z]+#",$newPassword))
        {
            $invalidNP = "<p class='valError'>*Your password must contain at least 1 lowercase letter. Try again!*</p>";   
            $passgo = FALSE;         
        }  
    }

    if($password && $newPassword && $passgo == TRUE)
    {
        $hash = password_verify($password, PASSWORD_DEFAULT);
        $newHash = password_hash($newPassword, PASSWORD_DEFAULT);
        // $u_id = $_SESSION['u_id'];

        $sql = "SELECT u_id, password FROM users WHERE u_id = " .$_SESSION['user_id']."";
        $res = $conn->query($sql);


        if($res->num_rows > 0)
        {
            $row = $res->fetch_assoc();

            // echo $sql;

            if(password_verify($password, $row['password']))
            {
                
                
                        $_SESSION['user_id'] = $row['u_id'];
                        $_SESSION['bchsdbhsdbfb-micky'] = session_id();

                        $newHash = password_hash($newPassword, PASSWORD_DEFAULT);

                        $update_sql = "UPDATE users SET password = '$newHash' WHERE u_id = " .$_SESSION['user_id']."";

                        if($conn->query($update_sql))
                        {
                            $message = "<p class='valNoError'>Password has been updated!</p>";
                            $password = $newPassword = "";
        
                           
                        }
                        else
                        {
                            $message = "<p class='valError'>There was a problem updating the password. Please try again! </p>";
                        }
                
            }
            else
            {
                $message = "<p class='valError'>Password does not match. Please try again! </p>";
            }
        }
    } 
}

?>

<div class="change-password">
    <h2>Change you Password</h2>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="change-password-form form">

        <?php if($message): ?>
            <div class="msg">
                <?php echo $message; ?>
            </div>
        <?php endif ; ?>
    
        <div>
            <label for="password">Current Password</label>
            <input type="text" id="password" name="password" value="<?php echo $password; ?>">
            <?php if ($invalidOP) echo $invalidOP; ?> 
        </div>
    
        <div>
            <label for="newPassword">New Password</label>
            <input type="text" id="newPassword" name="newPassword" value="<?php echo $newPassword; ?>">
            <?php if ($invalidNP) echo $invalidNP; ?> 
        </div>
    
        <!-- <input type="hidden" name="hidden_id" value="<?php if(isset($id)) echo $id; ?>"> -->
    
        <div>
            <input type="submit" name="change-btn" value="Change Password!">
        </div>
    </form>
</div>

<?php include ("includes/footer.php"); ?>