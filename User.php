<?php

include "Crud.php";
include_once "DBconnect.php";

class User implements Crud{
    private $user_id;
    private $first_name;
    private $last_name;
    private $user_city;

    /**
     * User constructor.
     * @param $first_name
     * @param $last_name
     * @param $user_city
     */
    public function __construct($first_name, $last_name, $user_city)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->user_city = $user_city;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }





    public function save()
    {
        $con = new DBconnect();
        $fn = $this->first_name;
        $ln = $this->last_name;
        $city = $this->user_city;

        $stmt = "INSERT INTO users (first_name,last_name,user_city)
                 VALUES ('$fn','$ln','$city')";
//        $con = new DBconnect();
          $res = mysqli_query($con->conn,$stmt);

//        $ms = new mysqli(DBServer,username,password,DBName);
//        $res = $ms->query($stmt);

//        $result = query("INSERT INTO users
//    (first_name,last_name,user_city) VALUES('$fn','$ln','$city')");
//        return $result;
//            INSERT INTO users (first_name,last_name,user_city)
//            VALUES('$fn,$ln,$city') ") or die(mysqli_error());
        return $res;
        // TODO: Implement save() method.
    }

    public function readAll()
    {

        // TODO: Implement readAll() method.
    }

    public function readUnique()
    {
        // TODO: Implement readUnique() method.
    }

    public function search()
    {
        // TODO: Implement search() method.
    }

    public function update()
    {
        // TODO: Implement update() method.
    }

    public function removeOne()
    {
        // TODO: Implement removeOne() method.
    }

    public function removeAll()
    {
        // TODO: Implement removeAll() method.
    }
}
