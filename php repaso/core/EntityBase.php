<?php

class EntityBase{
    private $table, $db, $connect;

    public function __construct($table, $adapter){
        $this->table=(string) $table;
        $this->connect = null;
        $this->db = $adapter;
    }

    public function getConnect(){
        return $this->connect;
    }
    public function db(){
        return $this->db;
    }

    public function getAll()
    {
        $query =$this->db->query("SELECT * FROM $this->table ORDER BY id DESC");

        while($row = $query->fetch_object()){
            $resultSet[]=$row;
        }
        return $resultSet;
    }
    public function getById($id){
        $query=$this->db->query("SELECT * FROM $this->table WHERE id=$id");
        if($row=$query->fetch_object()){
            $resultSet =$row;
        }
        return $resultSet;
    }
    public function getBy($column, $value){
        $query=$this->db->query("SELECT * FROM $this->table WHERE $column='$value'");
        if($row=$query->fetch_object()){
            $resultSet =$row;
        }
        return $resultSet;
    }
    public function deleteById($id){
        $query=$this->db->query("DELETE  FROM $this->table WHERE id=$id");
        return $query;

    }
    public function deleteBy($column,$value){
        $query=$this->db->query("DELETE  FROM $this->table WHERE $column='$value'");
        return $query;
    }

}
?>