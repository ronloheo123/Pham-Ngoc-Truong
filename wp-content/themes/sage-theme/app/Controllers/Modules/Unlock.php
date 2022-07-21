<?php

namespace App\Controllers\Modules;

class Unlock
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
