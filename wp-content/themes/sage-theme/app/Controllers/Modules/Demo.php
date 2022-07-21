<?php

namespace App\Controllers\Modules;

// use App\Services\Queries;

class demo
{
    public function dataModule($module)
    {
        return(object)[
            'module' => $module,
            'num1'=> 1,
            'num2'=> 1,
            'num3'=> 1 + 1,
            'sub'=>"một + một = hai"
            // 'title' => $module['title'],
            // 'desc' => $module['desc'],
            // 'demo' => $this->getdemo(),
        ];
    }

    // protected function getdemo()
    // {   
    //     return Queries::testdemo();
    // }
}