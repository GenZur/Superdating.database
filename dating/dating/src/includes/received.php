<?php
  $received = $connection->prepare("SELECT * FROM messages WHERE receiver = '$user'");
  $received->execute();
  $receivedMessages = $received->fetchAll();
  //var_dump($receivedMessages);
  foreach ($receivedMessages as $message) {
  ?>
          <div class="message">
            <p>From: <?php echo $message['sender'] ?></p>
            <p>About: <?php echo $message['title'] ?></p>
            <p>Message: <?php echo $message['message'] ?></p>
          </div>
<?php
  }
?>
