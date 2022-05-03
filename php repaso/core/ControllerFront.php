<?php
class ControllerFront{
    public function controllerpush($controller){
        $controller=ucwords($controller);
        $strFileController='controller/'.$controller."php";

        if(!is_file($strFileController)){
            $strFileController='controller/'.ucwords(CONTROLLER_DEFAULT).'Controller.php';
        }
        require_once $strFileController;
        $controllerObj = new $controller();
        return $controllerObj;
    }


    public function actionPush($controllerObj, $action){

        $controllerObj->$action();
    }
    public function throwAction($controllerObj, $action){
        if(isset($_GET["action"]) && method_exists($controllerObj, $_GET["action"])){
                $this->actionPush($controllerObj, $action);
        }else{
            $this->actionPush($controllerObj, ACTION_DEFAULT);
        }
    }
}