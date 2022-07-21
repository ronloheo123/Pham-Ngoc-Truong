<section class="module2 relative lg:bottom-177 2xl:bottom-122 font-poppins">
    <div class="container ">
        <div class="row w-full">
            <div class="trai relative w-full h-900 lg:w-1/2">
                <div class="anh  w-full z-2 absolute sm:left-25 sm:top-66 lg:left-23 lg:w-531 2xl:left-48 2xl:w-1000 2xl:top-62 xx:left-84 xx:top-137">
                    <img src="{{$data->module['image1']->url}}" alt="{{$data->module['image1']->alt}}">
                </div>
                <div class="nen z-1 absolute bg-gray-400 w-full lg:w-488 lg:h-650 h-560 2xl:w-658 2xl:h-700 xx:-left-262 xx:w-909 xx:top-77 xx:h-775"></div>
            </div>
            <div class="phai w-full lg:w-1/2 lg:mt-50 xx:mt-90">
                <div class="noidung sm:mt-50 sm:ml-15 lg:mt-0 pl-50 2xl:mt-50 2xl:ml-27">
                    <div class="dau pr-250 lg:pr-0 2xl:pr-27 animate-bounce">
                        {!!$data->module['header']!!}
                    </div>
                    <div class="than lg:mt-40 2xl:mt-16">
                        <div class="than1 pr-10 lg:pr-35">
                            {!!$data->module['content1']!!}
                        </div>
                        <div class="than2 lg:pr-38">
                            {!!$data->module['content2']!!}
                        </div>
                        <div class="than3 pr-23 lg:pr-28">
                            {!!$data->module['content3']!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>