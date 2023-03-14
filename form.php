

<?php
    //llamada archivo funciones
    include 'functions.php';

    //evaluar si se va a editar o a guardar
    if(isset($_GET['cod'])){
        $cod = $_GET['cod'];
        $data = getData();
        $record = $data[$cod];
        $action = 'editar';
    }else{
        $record = [
            'name' => '',
            'lastname' => '',
            'age' => ''
        ];
        $action = 'guardar';
    }    

?>

<form action="crud.php" method="POST">
    <input type="text" name="action" value="<?= $action ?>" />
    <?php  if($action=='editar'){?>
        <input type="text" name="cod" value="<?= $cod ?>" />
    <?php } ?>

    <br />
    Nombre:
    <input type="text" name="name" value="<?= $record['name'] ?>" /><br />
    Apellido:
    <input type="text" name="lastname" value="<?= $record['lastname'] ?>"/><br />
    Edad:
    <input type="number" name="age" value="<?= $record['age'] ?>"/><br />
    <button type="submit">Guardar</button>
</form>


