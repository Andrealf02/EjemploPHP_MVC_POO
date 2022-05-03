<?php
class HelpView{
    public function url($controller=CONTROLLER_DEFAULT,$accion=ACTION_DEFAULT){
        $urlString="index.php?controller".$controller."$accion".$accion;

        return $urlString;
    }
}