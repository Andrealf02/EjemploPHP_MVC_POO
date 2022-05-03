<?php

    class Connect {
        public function __construct() {
            require_once 'connect.php';
            require_once 'EntityBase.php';
            require_once 'ModelCore.php';

            //Incluir todos los modelos
            foreach(glob("model/*.php") as $file){
                require_once $file;
            }
        }

        //Plugins y funcionalidades

        public function view($vista,$datos){
            foreach ($datos as $id_assoc => $valor) {
                ${$id_assoc}=$valor;
            }

            require_once 'core/AyudaVistas.php';
            $helper=new HelpView();

            require_once 'view/'.$vista.'View.php';
        }

        public function redirect($controlador=CONTROLLER_DEFAULT,$accion=ACTION_DEFAULT){
            header("Location:index.php?controller=".$controlador."&action=".$accion);
        }

        //Métodos para los controladores


};
