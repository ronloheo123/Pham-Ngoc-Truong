<?php

namespace App\Services;

trait Filters
{
    public static function fiterDemo($input){ 
        $data = (object) $input;
        include  \App\template_path(
            \App\locate_template('partials/filters/demo-item.blade.php',$data)
        );
    }
}
