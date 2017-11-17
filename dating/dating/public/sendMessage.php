<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
$title = $_POST['title'];
$message = $_POST['message'];
if(!empty($title) && !empty($message))
{
        //connection with PDO to database
        $servername = "localhost";
        $username = "root";
        $password = "";

        try
        {
            //SETUP connection
            $conn = new PDO("mysql:host=$servername;dbname=superdating", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("INSERT INTO messages (title, content) VALUES (:title, :message)");
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':message',$message);
            $stmt->execute();
            $_SESSION["message"] = sprintf("The team %s was saved", $name);
            header('Location: index.php#message');
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
