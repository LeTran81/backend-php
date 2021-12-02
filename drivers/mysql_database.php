<?php

class mysql_database extends database{
    protected $connection;
    protected $table;
    public function __construct()
    {
        global $db_host, $db_user,$db_pass,$db_name;
        $this->connection = new mysqli(
            $db_host,
            $db_user,
            $db_pass,
            $db_name
        );
        if($this->connection->connect_errno){ 
            die('Khong the ket noi co so du lieu');
        }
    }

    public function table($table){
        $this->table = $table;
        return $this;
    }

    public function get($limit = 10, $offset = 0){
        $sql = "select * from $this->table limit ? offset ?";
        $query = $this->connection->prepare($sql);
        $query->bind_param('ii',$limit,$offset);
        $query->execute();
        $resutl = $query->get_result();

        $data = [];

        while($row = $resutl->fetch_object()){
            $data[] = $row;
        }
        return $data;
    } 
    public function insert($data){
        $sql = "insert into $this->table";

        $sql .= "(".implode(',', array_keys($data)).')';
        $sql .= "values ";

        $questionMarks = array_fill(0,count($data),'?');

        $sql .= "(".implode(',', array_values($questionMarks)).')';

        $query = $this->connection->prepare($sql);

        $query->bind_param(str_repeat('s',count($data)), ...array_values($data));
        $result = $query->execute();
        return $result;
    }
    public function update(){
        $sql = "update $this->table set ";
        
    }
    public function delete(){
        
    }
}