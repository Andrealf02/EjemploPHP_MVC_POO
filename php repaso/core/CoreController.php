<?php
class CoreController{
   public function __construct(){
       require_once 'EntityBase.php';
       require_once 'ModelCore.php';

       foreach (glob('model/*.php')as $fille){
           require_once $fille;
       }

    }
    public function view($vista,$datos){
       foreach ($datos as $id_asssoc => $valor){
           $($id_asssoc)=$valor;
       }

       require_once 'core/HelpView.php';
       $helper= new helpView();

       require_once 'view/'.$vista.'View.php';
    }

    public function redirect($controller=CONTROLLER_DEFAULT,$action=ACTION_DEFAULT){
       header("Location:index.php?controller=".$controller."$action");
    }

}