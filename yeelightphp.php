<?PHP  

//Get Bulb IP and the action you want to perform
  $bulb = $_GET['bulb'];
  $action = $_GET['action'];

//Set transition and duration
  $effect = $_GET['effect'];
  $duration = $_GET['duration'];

//Build command to send to yeecli
  $command = 'yee --ip=' . $bulb . ' -e ' . $effect . ' -d ' . $duration . ' ' . $action;

//Execute command
  $output = shell_exec($command);

//Echo the result
  echo "<center><pre>$output</pre>";

?>
