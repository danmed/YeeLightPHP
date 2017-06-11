<?php
*/ Get Bulb IP and the action you want to perform */
$bulb = $_GET['bulb'];
$action = $_GET['action'];

*/ Set transition and duration globally*/
$effect = "smooth"
$duration = "500"

*/ Build command to send to yeecli */
$command = 'yee --ip=' . $bulb . ' -e ' . $effect . ' -d ' . $duration . ' ' . $action;

*/ Execute command */
$output = shell_exec($command);

*/ Echo the result */
echo "<pre>$output</pre>";
?>
