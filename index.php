<html>
<?php
error_reporting(-1);

$players = 0;

include_once 'status.class.php';
$status = new MinecraftServerStatus();

$servers = array('us.mineplex.com', 'eu.mineplex.com', 'us.the-nebula.net');

foreach($servers as $server) {
   $response = $status->getStatus($server);
    if($response) $players += $response['players']; 
}

?>
<head>
<title>
Your Server / Network Website Here
</title>
<style type="text/css">
h1 {
  font-family: arial;
}
</style>
</head>
<body>
<h1 align="center">There are <b><?php echo $players; ?></b> players on <b>Your Bungee IP here.</h1>
<----/ Your content here. /---->
</body>
</html>
