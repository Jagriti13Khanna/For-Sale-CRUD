<?php

if (isset($_SESSION['time']))
{
    $current_time = time();

    $expiry = 15 * 60;

    if ($current_time > $_SESSION['time'] + $expiry)
    {
        session_destroy();
        header("location:index.php?m=autolog");
    }
    else
    {
        $_SESSION['time'] = time();
    }
}

?>