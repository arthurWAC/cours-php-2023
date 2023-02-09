<?php

// Valeurs directes
$a = 3;
$b = $a;
$b++;

echo '$a: ' . $a;
echo '<br />';
echo '$b: ' . $b;

echo '<br />';
echo '<br />';



// Références
$t1 = new Truc(3);
$t2 = $t1;

$t2->val = 4;

echo '$t1: ' . $t1->val;
echo '<br />';
echo '$t2: ' . $t2->val;

class Truc
{
    public function __construct(
        public int $val
    ) {}
}

