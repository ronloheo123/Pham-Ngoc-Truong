<?php

namespace App\Controllers\Modules;

class Jkl
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
