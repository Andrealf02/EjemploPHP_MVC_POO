<?php
class userModel extends modelCore{
    protected $table;

    public function __construct($adapter)
    {
        $this->table = "user";
        parent::__construct($this->table ,$adapter);
    }
    public function getOneUser(){
        $query="SELECT * FROM usuarios WHERE email='a.franconetti@assemblerschool.com'";
        $user=$this->ejecutarSql($query);
        return $user;
    }
}