<?php

use Couchbase\User;

class usercontroller extends CoreController{


    public function __construct()
    {
        parent::__construct();
        $this->connect= new Connect();
        $this->adapter = $this->connect->conexion();
    }
    public function index(){
        //creamos el objeto usuario
        $user=new User();

        //conseguimos todos los usuarios
        $allusers=$user->getAll();

        //cargamos la vista index y le pasamos valores
        $this->view("index", array(
            "alluser"=>$allusers,
            "allproducts" =>$allproducts,
            "Hola"=>"Video EJEMPLO MVC PHP"
        ));
    }
    public function create(){
        if(isset($_POST["name"])){
            $user= new user();
            $name=$_POST["name"];
            $surname=$_POST["surname"];
            $email=$_POST["email"];
            $pass=$_POST["password"];

            $user->setName($name);
            $user->setSurname($surname);
            $user->setEmail($email);
            $user->setPassword($pass);

            $save=$user->save();
        }
        $this->redirect("user","index");
    }
        public function delete(){

            if(isset($_GET[$id])) {

                $id=(int)$_GET[$id];

                $user = new User;
                $user->deleteById($id);

                $this->redirect();

            }
        }
        public function hola{
        $users= new userModel($this->adapter);
        $usu=$users->getOneUser();
        var_dump($usu);
    }
}