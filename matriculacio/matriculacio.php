<?php
    $matricula = array(
        "M2 - Bases de Dades" => array('UF2'),
        "M3 - Programació" => array('UF4', 'UF5', 'UF6'),
        "M5 - Entorns de Desenvolupament" => array('UF1', 'UF2', 'UF3'),
        "M6 - Desenvolupament web en entorn client" => array('UF1', 'UF2', 'UF3'),
        "M7 - Desenvolupament web en entorn servidor" => array('UF1', 'UF2', 'UF3'),
        "M8 - Desplegament d'aplicacions web" => array('UF1', 'UF2', 'UF3'),
        "M9 - Disseny d'interfícies web" => array('UF1', 'UF2', 'UF3')
    );
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>

<?php
    foreach ($matricula as $value => $key){
        echo "

        <tr>
        <th>$value</th>
    
";
        foreach ($key as $value => $name){
            echo "
            
                <td>$name <input type='checkbox'></td>
            
            ";
        }
    echo "</tr>";
    }
    echo " </table>";
?>
</body>
</html>
