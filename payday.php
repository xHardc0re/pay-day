<?php

$payDate = strtotime('2023-08-15'); // Define the target date
$currentDate = time();

if ($currentDate < $payDate) {
    // Calculate the remaining seconds until the date
    $remainingSeconds = $payDate - $currentDate;

    // Calculate the delay based on the remaining seconds
    $delayInSeconds = $remainingSeconds * 0.0001; // Adjust this value as needed

    // Delay the page load
    usleep($delayInSeconds * 1000000); // Convert seconds to microseconds
} else {
    // Calculate the seconds since the date passed
    $secondsSincepayDate = $currentDate - $payDate;

    // Calculate an increased delay based on the seconds since the date passed
    $increasedDelayInSeconds = $secondsSincepayDate * 0.0005; // Adjust this value as needed

    // Delay the page load with the increased delay
    usleep($increasedDelayInSeconds * 1000000); // Convert seconds to microseconds
}

?>
