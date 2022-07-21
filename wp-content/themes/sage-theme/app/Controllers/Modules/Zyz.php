<?php

namespace App\Controllers\Modules;

class Zyz
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
