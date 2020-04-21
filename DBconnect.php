<?php
define('DBServer','localhost');
define('DBName', 'ics104811');
define('username','root');
define('password','');

class DBconnect
{
    public $conn;

    /**
     * DBconnect constructor.
     */
    public function __construct()
    {
        $this->conn = mysqli_connect(
            DBServer,
            username,
            password,
            DBName)
        or die(mysqli_error());
    }

    public function closeDB(){
        mysqli_close($this->conn);
    }
}