<?php

*/ Build array of bulbs as below */


$bulbs = array
  (
  array("LAURA-LAMP","192.168.2.210","smooth","500"),
  array("DAN-LAMP","192.168.2.211","smooth","500")
  );

*/ Get Bulb IP and the action you want to perform */
IF (ISSET($_GET['bulb']))
  {
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
  }


for ($row = 0; $row < 4; $row++) {
  for ($col = 0; $col < 4; $col++) {
    echo "<li>".$bulbs[$row][$col]."</li>";
  }
}


?>
