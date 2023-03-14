<?php
    include 'functions.php';

    //obtenermos los datos del archivo de texto
    $data = getData();

?>

<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $cod => $record) { ?>
            <tr>
                <td><?= $record['name'] ?></td>
                <td><?= $record['lastname'] ?></td>
                <td><?= $record['age'] ?></td>
                <td>
                    <a href="form.php?cod=<?= $cod ?>">Editar</a>
                </td>
                <td>
                    <!--formulario para eliminar -->
                    <form action="crud.php" method="POST">
                        <input type="hidden" name="action" value="eliminar" />
                        <input type="hidden" name="cod" value="<?= $cod ?>" />
                        <button type="submit" onclick="return confirm('Esta seguro que desea eliminar?')">Eliminar</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

