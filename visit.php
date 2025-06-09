<?php
// Set the timezone
date_default_timezone_set("Asia/Kolkata"); // Change this to your timezone

// Check if the 'lastVisit' cookie is set
if (isset($_COOKIE['lastVisit'])) 
{
    // Retrieve and display the last visit date-time
    $lastVisit = $_COOKIE['lastVisit'];
    echo "Your last visit was on: " . $lastVisit;
} else {
    echo "This is your first visit!";
}

// Update the 'lastVisit' cookie with the current date and time
$currentVisit = date("Y-m-d H:i:s");
setcookie('lastVisit', $currentVisit, time() + (365 * 24 * 60 * 60)); // Cookie expires in 1 year
?>
