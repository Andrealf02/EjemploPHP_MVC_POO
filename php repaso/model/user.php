<?php
class user extends entityBase{
    private  $id, $nombre, $apellido, $email, $pass;

    public function __construct($adapter)
    {
        $table="usuarios";
        parent::__construct($table, $adapter);
    }
    public function getId(){
        return $this->id;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->pass;
    }
    public function setId($id){
        $this->id =$id;
    }
    public function setNombre($nombre){
        $this->nombre =  $nombre;
    }
    public function setApellido($apellido){
        $this->apellido = $apellido;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setPassword($pass){
        $this->pass = $pass;
    }

    public function save(){
        $query = 'INSER INTO usuarios (id, nombre , email, password)'
            .'VALUES(NULL,'
            ."'".$this->nombre."',"
            ."'".$this->apellido."',"
            ."'".$this->email."',"
            ."'".$this->pass."',"
            ."')";
        $save=$this->db()->query($query);
        return $save;
    }


}