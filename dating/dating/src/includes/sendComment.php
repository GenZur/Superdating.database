<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$sender = $_POST['sender'];
$title = $_POST['title'];
$message = $_POST['message'];

if(!empty($sender) && !empty($title) && !empty($message))
{
        //connection with PDO to database
        $servername = "localhost";
        $username = "root";
        $password = "";

        try
        {
            //SETUP connection
            $conn = new PDO("mysql:host=$servername;dbname=dating", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("INSERT INTO comments (sender, title, message) VALUES (:sender, :title, :message)");
            $stmt->bindParam(':sender', $sender);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':message', $message);
            $stmt->execute();
            echo 'Message sent!';
        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
}
else
{
    die('Please set all the fields!');
}
?>
<script>
setTimeout(
  function goBack() {
    window.history.back();
  },2000
)
</script>
