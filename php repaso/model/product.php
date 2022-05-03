<?php
class Product extends EntityBase {
    private $id;
    private $name;
    private $price;
    private $mark;

    public function __construct($table, $adapter)
    {
        $table="products";
        parent::__construct($table, $adapter);
    }
    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getMark(){
        return $this->mark;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function setPrice($price){
        $this->price = $price;
    }
    public function setMark($mark)
    {
        $this->mark = $mark;
    }
    public function save(){
        $query = "INSERT INTO products (id, name, price, mark)    
        VALUES(NULL
               '".$this->name."',
               '".$this->price."',
               '".$this->mark."')";
        $save=$this->db()->query($query);
        return $save;

    }


}