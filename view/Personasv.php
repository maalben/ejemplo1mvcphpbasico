<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Personas</title>
</head>
<body>

<h1>Lista de personas registradas</h1>

<table>
    <thead> <!-- Encabezado de la tabla -->
        <tr> <!-- Fila -->
            <th>Id</th> <!-- Columnas-->
            <th>Nombre</th> <!-- Columnas-->
            <th>Edad</th> <!-- Columnas-->
        </tr>
    </thead>
    <tbody>

    <?php foreach($consulta as $dato): ?> 

        <tr>
            <td><?php echo $dato['id']; ?></td>
            <td><?php echo $dato['nombre']; ?></td>
            <td><?php echo $dato['edad']; ?></td>
        </tr>
        
    <?php endforeach; ?>

    </tbody>
</table>
    
</body>
</html>