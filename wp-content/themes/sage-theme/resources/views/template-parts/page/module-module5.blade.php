<section class="Mode5 relative sm:top-400 lg:-top-303 2xl:-top-30 font-poppins">
    <div class="container">
        <div class="row relative ">
            <div class="trai bg-blue-400 w-full pl-50 pr-50 lg:w-1/2">
                <div class="tieude animate-bounce">
                    {!!$data->module['content1']!!}
                </div>
                <div class="noidung1">
                    {!!$data->module['content2']!!}
                </div>
                <div class="noidung2">
                    {!!$data->module['content3']!!}
                </div>
            </div>
            <div class="slick_slide1 bg-blue-400 w-full h-650 lg:w-1/2 ">                  
                    <div class="anh1 pl-44">
                      <img src="{{$data->module['image1']->url}}" alt="{{$data->module['image1']->alt}}">
                    </div>
                    <div class="anh2 pl-44">
                      <img src="{{$data->module['image2']->url}}" alt="{{$data->module['image2']->alt}}">
                    </div>                 
            </div>
            <div class="button_slick1 row absolute bg-blue-400 w-50 h-50 left-326 bottom-60 lg:left-750 lg:bottom-200 2xl:left-1030 2xl:bottom-60">         
            </div>
        </div>
    </div>
</section>