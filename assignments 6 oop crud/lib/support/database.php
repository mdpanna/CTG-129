<?php

abstract class Database{
    private $host="localhost";
    private $user="root";
    private $password="";
    private $db="oop_db";
    private $connect;
    
    
    private function connection(){
        return $this->connect=new mysqli($this->host,$this->user,$this->password,$this->db);
    }
    
    
    protected function create($data){
        $this->connection()->query($data);
    }
    protected function selectAll($table,$order='DESC'){
        return  $this->connection()->query("SELECT * FROM $table ORDER BY id $order");
        
        
    } 
    protected function selectbydata($table,$where,$data){
        return  $this->connection()->query("SELECT * FROM $table WHERE $where='$data'");
        
        
    }
    protected function delete($table,$where,$data){
        return  $this->connection()->query("DELETE FROM $table WHERE $where='$data'");

    }
    protected function update($data){
        return  $this->connection()->query($data);

    }
}

?>