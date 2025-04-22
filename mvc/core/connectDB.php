<?php 
class connectDB{

    public  $connect;
    protected $servername = "localhost";
    protected $dbname = "btl";
    protected  $username = "root";
    protected $password = "";

    // contructor 
    function __construct()
    {
         // create connecting 
         $connect = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
         // check connection
         if($connect->connect_error){
             echo "loi ket noi";
             die("không thể kết nối".$connect->connect_error);
             
         }else{
          
             $this->connect = $connect;
             mysqli_select_db($this->connect, $this->dbname);
             mysqli_query($this->connect , "SET NAMES UTF8");
         }
    }
}
?>