<?php
  include_once '../src/includes/head.php';
  $user = 'wonderwoman774';
  echo "Welcome back " . $user;
?>

    <div class="profiles">
      <h2>Profiles</h2>
<?php
  include_once '../src/includes/profiles.php';
?>
    </div>
    <div class="messages">
      <div class="sent">
        <h2>Sent</h2>
<?php
  include_once '../src/includes/sent.php';
?>
      </div>
      <div class="received">
        <h2>Received</h2>
<?php
  include_once '../src/includes/received.php';
  //echo getcwd() . "\n";
?>
      </div>
    </div>
    <div class="send">
      <h2>Send a message</h2>
      <form action="../src/includes/SendMessage.php" method="POST" enctype="multipart/form-data">
        <input id="receiver" type="text" name="receiver" placeholder="Recepient">
        <input id="title" type="text" name="title" placeholder="About">
        <input id="message" type="text" name="message" placeholder="Message">
        <input id="sender" type="hidden" name="sender" value="wonderwoman774">
        <input type="submit" value="Submit">
      </form>
    </div>
    <div class="comments">
      <h2>Comments</h2>
<?php
  include_once '../src/includes/comments.php';
?>
    </div>
    <div class="send-comment send">
      <h2>Post to wall</h2>
      <form action="../src/includes/sendComment.php" method="POST" enctype="multipart/form-data">
        <input id="sender" type="hidden" name="sender" value="batboy83">
        <input id="title" type="text" name="title" placeholder="About">
        <input id="message" type="text" name="message" placeholder="Message">
        <input type="submit" value="Submit">
      </form>
    </div>
<?php
  include_once '../src/includes/tail.php';
?>


<?php
// current directory
  //echo getcwd() . "\n";
?>
