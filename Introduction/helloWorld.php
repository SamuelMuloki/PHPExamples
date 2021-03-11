<?php
    $name = "Samuel Muloki"; // $ is used to instantiate a variable
    
    function getAgeDiff($birthDate) {
        $tz = new DateTimeZone("Africa/kampala");
        $age = DateTime::createFromFormat("d/m/Y", $birthDate, $tz)
        ->diff(new DateTime('now', $tz))
        ->y;

        return $age;
    }
    echo "Hi, My name is " . $name . ", Software Engineer from Kampala Uganda and my age is " . getAgeDiff("25/09/1995");
?>
