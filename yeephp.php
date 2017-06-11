<?php
*/ Get Bulb IP and the action you want to perform */
$bulb = $_GET['bulb'];
$action = $_GET['action'];

*/ Build command to send to yeecli */
$command = 'yee --ip=' . $bulb . ' ' . $action;

*/ Execute command */
$output = shell_exec($command);

*/ Echo the result */
echo "<pre>$output</pre>";
?>
