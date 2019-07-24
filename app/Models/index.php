<?php


namespace App\Models;


class index
{
    public function default(){
    $default = [
            'This is an MVC project',
            'This is index Model',
            'Used by index Controllers',
            'using:',
            'composer',
            'Route'
        ];
        return $default;
    }

}