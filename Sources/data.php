<?php
    class database{
        //khai bao acc thuoc tinh
        private $conn=null;
        private $host="localhost";
        private $user="root";
        private $pass="";
        private $data="web";
        private $result=null;
    }
    //Xay dung cac phuong thuc
     private function connect(){
        $this ->conn=new mysqli($this ->host, $this ->user, $this ->pass, $this ->data)
         or die(' Ket noi that bai.');
        $this ->conn->query('SET NAMES UTF8');
    }
    public  function select(){
        $this ->connect();
        $this ->result=$this ->conn->query($sql);
    }
    public function fetch(){
        if($this ->result->num_rows > 0){
            $rows=$this ->result->fetch_assoc();
        }else{
            $rows=0;
        }
        return $rows;
    }
    //Phuong thuc insert, update, delete
    public function command($sql){
        $this ->connect();
        $this ->conn->query($sql);
    }