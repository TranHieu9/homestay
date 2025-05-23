<?php
error_reporting(E_ALL & ~E_WARNING); // Câu lệnh chặn thông báo(Cách sử dụng là đáp vào đầu trang sau <?php  )
 class app{
    protected $controler="home_index"; 
    protected $method ="home"; 
    protected $param=[];



     function __construct()
     {
        $arr  = $this->getAddress();
        // kiem tra su ton tai cua file 
        if(file_exists("./mvc/controlers/".$arr[0].".php")){
           $this->controler = $arr[0];
           unset($arr[0]);
        }
       // mặc định sẽ là  trang home 
        require_once "./mvc/controlers/".$this->controler.".php";
        $this->controler = new $this->controler;
        // xử lý các action 
        if( isset($arr[1])){
            if( method_exists( $this->controler,$arr[1] )){
                $this->method = $arr[1];    
                unset($arr[1]);
            }
            
        }
        // xu ly param hay các than số được truyền vào
        $this->param = $arr?array_values($arr):[];
        call_user_func_array([$this->controler,$this->method],$this->param);

     }

     function getAddress(){
         if(  isset($_GET["url"])  ){
             return explode("/",filter_var(trim($_GET["url"],"/")));
         }
     }
 }
?>