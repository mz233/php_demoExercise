<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = 'utf-8'>
    <title>exercise1</title>
</head>
<body>
    <?php
        $mexico = array(
            'YU' => 'Yucantan',
            'BC' => 'Baja California',
            'OA' => 'Oaxaca'
        );

        $us = array(
            'MD' => 'Maryland',
            'IL' => 'Illiniois',
        );

        $canana = array('Qc' => 'Quebec');

        $n_america = array(
            'Mexico' => $mexico,
            'United States' => $us,
            'Canada' => $canana
        );
    foreach($n_america as $country => $city){
            echo "<h2>".$country."</h2>";

            foreach($city as $a=>$b){
                echo "<ul>";
                echo $a."-".$b."<br>";
                echo "</ul>";
            }
    }

    $str = "mz_is_god";
    $str1_array = explode('_',$str);
    foreach($str1_array as $a){
        echo $a." ";
    }
    $str2 = implode('_',$str1_array);
    echo $str2;
    ?>
</body>
</html>