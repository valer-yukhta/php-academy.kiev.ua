<?php
$s = 100;
$t = 20;
$speed = $s/$t;
$speeds = ($s*10)/($t*36);
          echo "Cкорость автомобиля на заданном участке $speed км/час или " . round($speeds, 2) . " м/с";
?>
