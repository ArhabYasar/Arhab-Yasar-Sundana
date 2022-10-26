<?php
class DbConfig  //Pemberian nama kelas
{
    private $_host = 'localhost';   //variable untuk database
    private $_username = 'root';    //variable 
    private $_password = '';    //variable
    private $_database = 'dbrpl12'; //variable

    protected $connection;  //mengatur hak akses pada method agar bisa diakses

    public function __construct()   //
    {

        if (!isset($this->connection)){    //
            
            $this->connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);     //

            if (!$this->connection){    //
                echo 'Cannot connect to database server';   //
                exit;   //
            }
        }

        return $this->connection;      //akhiran PHP
    }
}
$conn =  mysqli_connect("localhost","root","","dbrpl12");


function query($query) {
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}