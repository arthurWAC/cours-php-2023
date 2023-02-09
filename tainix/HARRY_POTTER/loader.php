<?php

function my_autoloader($class)
{
    require './classes/' . $class . '.php';
}

spl_autoload_register('my_autoloader');

// new Levi
// Je connais pas, j'appelle spl_autoload
// Je cherche dans ./classes/Levi.php
// Je l'ai trouvé super, je la garde de côté