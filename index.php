<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            //Date modification
            $date_to_monday = new DateTime();
            $date_to_monday->modify('Monday this week');
            
            echo "asdasd" . $date_to_monday->format('Y-m-d H:i:s') . PHP_EOL ;
            
            echo "<br>";
            // setTimestamp
            $date = new DateTime();
            $date->setTimestamp(1404883248);
            
            var_dump($date);
            
            var_dump(CURL_SSLVERSION_TLSv1_1);
        ?>
    </body>
</html>
