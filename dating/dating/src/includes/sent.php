<?php
  $sent = $connection->prepare("SELECT * FROM messages WHERE sender = '$user'");
  $sent->execute();
  $sentMessages = $sent->fetchAll();
  //var_dump($sentMessages);
  foreach ($sentMessages as $message) {
?>
        <div class="message">
          <p>To: <?php echo $message['receiver'] ?></p>
          <p>About: <?php echo $message['title'] ?></p>
          <p>Message: <?php echo $message['message'] ?></p>
        </div>
<?php
  }
?>
