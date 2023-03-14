
<?php
    //incluimos archivo de funciones
    include 'functions.php';

    //obtener la accion a realizar
    $action = $_POST['action'];

    //obtener los valores del formulario
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];

    //accion guardar
    if($action == 'guardar'){

        saveData($name, $lastname, $age);

        //redirigir a index
        header('Location: index.php');
    }

    //acction editar
    if($action == 'editar'){
        $cod = $_POST['cod'];

        //actualizar los datos
        updateData($cod, $name, $lastname, $age);

        //redirigir a index
        header('Location: index.php');
    }
    if($action == 'eliminar'){
        $cod = $_POST['cod'];

        //actualizar los datos
        deleteData($cod);

        //redirigir a index
        header('Location: index.php');
    }
?>
