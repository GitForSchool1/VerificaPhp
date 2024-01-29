<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panoramica vendite</title>
    <?php
        include_once "biglietto.php";
        include_once "categoria.php";
        include_once "cliente.php";
        include_once "evento.php";
        include_once "EventoDao.php";
        
        $array = EventoDao::readAll();
    ?>
</head>
<body>
    <h1>Panoramica Vendite</h1>
    <table>
        <tr>
            <th>
                ID
            </th>
            <th>
                Evento
            </th>
            <th>
                Biglietti venduti
            </th>
        </tr>
        <?php 
            foreach($array as $info){
                echo $info->toHtml();
            }
        
        
        
        ?>
    </table>
</body>
</html>