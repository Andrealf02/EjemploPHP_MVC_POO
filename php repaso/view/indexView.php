<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Ejemplo MVC POO PHP</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <style>

        </style>
    </head>
    <body>
        <form action="<?php echo $helper->url("user","create");?>" method="post" class="col-lg-5">
            <h3>Add User</h3>
            </hr>
            Nombre: <input type="text" name="name" class="form-control"/>
            Apellido: <input type="surname" name="surname" class="form-control"/>
            Email: <input type="email" name="email" class="form-control"/>
            Pass: <input type="password" name="pass" class="form-control"/>
            <input type="text" value="value" class="btn btn-success"/>
        </form>
        <?php if(isset($allproducts) && count($allproducts)>=1) {?>
            <div class="col-lg-7">
                <h3>Productos</h3>
                <hr/>
            </div>
            <section class="col-lg-7 producto" style="height:400px;overflow-y:scroll;">
                <?php foreach($allproducts as $product) {?>
                    <?php echo $product->id; ?> -
                    <?php echo $product->name; ?> -
                    <?php echo $product->price; ?> -
                    <?php echo $product->mark; ?>
                    <hr/>
                <?php } ?>
            </section>
        <?php } ?>


    </body>
</html>