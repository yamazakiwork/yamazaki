<?php
    require_once __DIR__."/functions.php";
    $pdo = connect();
    $statment = $pdo->prepare("INSERT INTO form(name, tel, email, title, content) VALUES(:name, :tel, :email, :title, :content)");
    $statment->bindValue(":name",escape($_POST["name"]), PDO::PARAM_STR);
    $statment->bindValue(":tel",escape($_POST["tel"]), PDO::PARAM_INT);
    $statment->bindValue(":email",escape($_POST["email"]), PDO::PARAM_STR);
    $statment->bindValue(":title",escape($_POST["title"]), PDO::PARAM_STR);
    $statment->bindValue(":content",escape($_POST["content"]), PDO::PARAM_STR);
    $statment->execute();
    $newId = $pdo->lastInsertId();
    php_log($statment);
    $pdo = null;
    header("Location:./complete.php");