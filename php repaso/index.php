//MVC
<?php

        require_once 'config/global.php';

        require_once 'core/CoreController.php';

        require_once 'core/controllerFront.func.php';

        if(isset($_GET["controller"])){
            $controllerObj = controllerpush($_GET["controller"]);
            actionPush($controllerObj);
        }else{
            $controllerObj = controllerpush(CONTROLLER_DEFAULT);

        }
            actionPush($controllerObj);
?>


