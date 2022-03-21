<?php

if (isset($_GET['m'])) 
{
    $m = $_GET['m'];

    switch($m)
    {
        case 'loggedout':
            $message = "<p class='error'>You have been logged out. Please log in!</p>";
            break;

        case 'autolog':
            $message = "<p class='error'>You have been logged out due to inactivity. Please log in again!</p>";
            break;

        case 'notloggedin':
            $message = "<p class='error'>Sorry you are not logged in. Please log in!</p>";

        case 'itemmarkedassold':
            $message = "<p class='noError'>Congrats on your job posting!</p>";
            
        case 'notrightuser':
            $message = "<p class='error'>Sorry, this is not your ad. Try again!</p>"; 

        default:
            $message .= $m;
            break;
    }
}