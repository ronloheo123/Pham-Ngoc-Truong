@php

  
    $class = 'h2';
@endphp



<div class="container">
    <h3>
        {{App :: getNameModule(1)}}: demo 1
    </h3>
    {{Page::fiterDemo([
        'class' => $class,
        'num1'=> $data->num1,
        'num2'=> $data->num2 ,
        'num3'=> $data->num3 ,
        'sub' => $data->sub
    ])}}
</div>