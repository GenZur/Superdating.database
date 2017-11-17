<?php
  $servername = 'localhost';
  $username = 'root';
  $password = '';
  try {
    $connection = new PDO("mysql:host=$servername;dbname=dating", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  catch(PDOException $e){
      echo "connection to db failed: " . $e->getMessage();
  }
  //profiles
  $profile = $connection->prepare("SELECT * FROM superclient");
  $profile->execute();
  $superclient = $profile->fetchAll();
  //var_dump();
  foreach ($superclient as $client) {
?>
      <div class="profile">
        <img src="<?php echo $client['image'] ?>" alt="">
        <p>Nickname: <?php echo $client['nickname'] ?></p>
        <p>Name: <?php echo $client['name'] ?></p>
        <p>Born on: <?php echo $client['age'] ?></p>
        <p>Superpower: <?php echo $client['superpower'] ?></p>
        <p>Likes: <?php echo $client['likes'] ?></p>
      </div>
<?php
  }
?>
