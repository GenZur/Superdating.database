<?php
  $comments = $connection->prepare("SELECT * FROM comments");
  $comments->execute();
  $supercomments = $comments->fetchAll();
  //var_dump($supercomments);
  foreach ($supercomments as $comment) {
?>
        <div class="comment">
          <p>From: <?php echo $comment['sender']; ?></p>
          <p>About: <?php echo $comment['title']; ?></p>
          <p>Message: <?php echo $comment['message'] ?></p>
        </div>
<?php
  }
?>
