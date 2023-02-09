<?php

class Test
{
    public static function control(string $name, $value1, $value2): void
    {
        if ($value1 == $value2) {
            echo '<p style="color: green;">'. $name .' OK</p>';
        } else {
            echo '<p style="color: red;">'. $name .' KO => ' . 
            $value1 . ' est différent de ' . $value2 .
            '</p>';
        }
    } 
}