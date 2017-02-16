<?php 

require(dirname(__FILE__).'/../../../vendor/autoload.php');

$pusher = new Pusher('f98c77f6aea9e4b0fd0c', '2b1a3973cb136390c2bb', '303123');

// trigger on my_channel' an event called 'my_event' with this payload:
//if(isset($_POST['message'])){
$text = $_POST['message'];

$text = htmlspecialchars($_POST['message']);

$data['message'] = $text;

$pusher->trigger('notifications', 'new_notification', $data);

//}