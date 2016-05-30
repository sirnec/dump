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

        $start = new DateTime('2016-02');
        $start->modify("first day of this month");
        $start->modify($start->format('l') == 'Sunday' ? 'mon last week' : 'mon this week');
        $start->setTime(0, 0, 0);

        $end = new DateTime('2016-02');
        $end->modify("last day of this month");
        $end->modify('sun this week');
        $end->setTime(23, 59, 59);

        echo $start->format('Y-m-d') . PHP_EOL . $end->format('Y-m-d');
        
        //$end = new DateTime($now);
        //$end->modify("last day of this month");
        //echo $end->format('Y-m-d H:i:s');

        //echo $date->format('Y-m-d H:i:s') . PHP_EOL . $date->getOffset() . PHP_EOL;

        //echo $date_timezone->format('Y-m-d H:i:s') . PHP_EOL;

        //echo $date_after_timezone->format('Y-m-d H:i:s') . PHP_EOL;

        //echo $date_from_timezone->format('Y-m-d H:i:s') . PHP_EOL;

        //echo "asdasd" . $date_to_monday->format('Y-m-d H:i:s') .PHP_EOL;


        $d = new DateTime();
        $d->setTimestamp($d->getTimestamp() + 1209600);
        //echo $d->format(DateTime::COOKIE);
        ?>
    </body>
</html>
