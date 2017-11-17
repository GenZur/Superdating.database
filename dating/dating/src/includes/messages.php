<?php
  //messages here
  $sent = $connection->prepare("SELECT * FROM messages WHERE sender = '$user'");
  $sent->execute();
  $sentMessages = $sent->fetchAll();
  //var_dump($sentMessages);
  foreach ($sentMessages as $message) {
?>
    <div class="message">
      <p>SENT</p>
      <p><?php echo $message['title'] ?></p>
      <p><?php echo $message['message'] ?></p>
    </div>
<?php
  }
  $received = $connection->prepare("SELECT * FROM messages WHERE receiver = '$user'");
  $received->execute();
  $receivedMessages = $received->fetchAll();
  //var_dump($receivedMessages);
  foreach ($receivedMessages as $message) {
?>
    <div class="message">
      <p>SENT</p>
      <p><?php echo $message['title'] ?></p>
      <p><?php echo $message['message'] ?></p>
    </div>
<?php
  }
?>
