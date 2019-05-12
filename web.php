<?php
$data = file_get_contents("php://input");
file_put_contents('/tmp/a.log',$data);
$events = json_decode($data, true);

foreach ($events as $event) {
  // Here, you now have each event and can process them how you like
}

