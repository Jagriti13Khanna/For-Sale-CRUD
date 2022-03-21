<?php
$page_title="Job Delete";
session_start();
include("includes/connect.php");

if (isset($_GET['id']) && is_numeric($_GET['id']))
{
    $id = $_GET['id'];

    if(!isset($_SESSION['minnislongrandomstring-1']))
    {
        header("Location: index.php?m=notloggedin");
    }
    else
    {
        $sql = "SELECT u_id FROM job_ads WHERE a_id = $id AND u_id = " . $_SESSION['user_id'];
        $res = $conn->query($sql);
        
        if ($res->num_rows > 0)
        {
            $update_sql = "UPDATE job_ads set deleted_yn = 'Y' WHERE a_id = $id";
            
            if($conn->query($update_sql))
            {
                header("Location: myads.php?m=addeletedpermanently");
            }
            else
            {
                $string = $conn->error;
                header("Location: myads.php?m=$string");
            }
        }
        else
        {
            header("Location: myads.php?m=notrightuser");
        }
    }
}

?>