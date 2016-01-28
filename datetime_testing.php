<!DOCTYPE html>
<html>
    <head>
        <title>Small Things</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            error_reporting(E_ALL);
            // simple date
            $date = new DateTime();
            
            // timezone changes time after setting
            $date_timezone = new DateTime();
            $date_timezone->setTimezone(new DateTimeZone('America/Anchorage'));
            
            // date setted after timezone setted in that timezone
            $date_after_timezone = new DateTime();
            $date_after_timezone->setTimezone(new DateTimeZone('America/Anchorage'));
            $date_after_timezone->setDate(2015, 11, 1);
            
            $date_to_monday = new DateTime();
            $date_to_monday = $date_to_monday->modify('Monday this week');

            echo "<pre>";
            
            //echo $date->format('Y-m-d H:i:s') . PHP_EOL . $date->getOffset() . PHP_EOL;

            //echo $date_timezone->format('Y-m-d H:i:s') . PHP_EOL;
            
            //echo $date_after_timezone->format('Y-m-d H:i:s') . PHP_EOL;
            
            //echo $date_from_timezone->format('Y-m-d H:i:s') . PHP_EOL;
            
            echo "asdasd" . $date_to_monday->format('Y-m-d H:i:s') .PHP_EOL;
            
            
            $d = new DateTime();
            $d->setTimestamp($d->getTimestamp() + 1209600);
            echo $d->format(DateTime::COOKIE);
        ?>
    </body>
</html>
