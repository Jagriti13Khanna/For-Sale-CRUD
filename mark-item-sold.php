<?php
$page_title="Item Sold";
session_start();
include("includes/connect.php");
include("messages.php");

if (isset($_GET['id']) && is_numeric($_GET['id']))
{
    $id = $_GET['id'];

    if(!isset($_SESSION['minnislongrandomstring-2']))
    {
        header("Location: index.php?m=notloggedin");
    }
    else
    {
        $sql = "SELECT u_id FROM for_sale WHERE ad_id = $id AND u_id = " . $_SESSION['user_id'];
        $res = $conn->query($sql);
        
        if ($res->num_rows > 0)
        {
            $update_sql = "UPDATE for_sale set item_sold_yn = 'Y' WHERE ad_id = $id";
            
            if($conn->query($update_sql))
            {
                $ref = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_PATH);
                header("Location: $ref?m=itemmarkedassold");
                echo $message;
            }
            else
            {
                $string = $conn->error;
                header("Location: index.php?m=$string");
            }
        }
        else
        {
            header("Location: index.php?m=notrightuser");
        }
    }
}

?>