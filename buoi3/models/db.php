<?php
require_once 'env.php';

class db
{
    function getConnect()
    {
        $connect = new PDO("mysql:host=" . DBHOST . ";dbname=" . DBNAME . ";charset=" . DBCHAR, DBUSER, DBPASS);
        try {
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $connect;
    }

    function getData($query, $getAll = true)
    {
        $connect = $this->getConnect();
        $stmt = $connect->prepare($query);
        $stmt->execute();
        if ($getAll) {
            return  $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return  $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
