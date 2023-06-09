<?php
class Personnage 
{
    public function __construct()
    {
        echo 'coucou';
    }

    public function hello(string $name):string
    {
        return 'Bonjour' . $name;
    }
}
