<head id='ciroueInject'></head><?php

// Inclusion de la classe correspondante au paramètre passé.
function loadClass($classe)
{
  require 'classes/'.$classe . '.php'; 
}

// Enregistrement de la fonction en autoload pour qu'elle 
// soit appelée dès qu'on instanciera une classe non déclarée.
spl_autoload_register('loadClass');