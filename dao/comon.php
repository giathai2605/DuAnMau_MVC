<?php

function executeQuery($sqlQuery, $check)
{
    $connect = new PDO("mysql:host=127.0.0.1;dbname=duanmau-ph26876;charset=utf8", "root", "");
    $stmt = $connect->prepare($sqlQuery);
    $stmt->execute();
    $data = [];
    return $check ? $data = $stmt->fetchAll() : $data = $stmt->fetch();
}
