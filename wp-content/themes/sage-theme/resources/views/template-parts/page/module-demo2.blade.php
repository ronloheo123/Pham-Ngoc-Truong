@php
    $class = 'h4';
@endphp



<div class="container">
    <h3>
        {{App :: getNameModule(2)}}: demo 2
    </h3>
    @include('partials/demo/item',[
        'class' => $class,
        'num1'=> $data->num1,
        'num2'=> $data->num2 ,
        'num3'=> $data->num3 ,
        'sub' => $data->sub
    ])
</div>