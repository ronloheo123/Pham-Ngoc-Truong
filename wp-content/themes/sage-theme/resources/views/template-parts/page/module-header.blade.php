<header id="header" class="module header font-poppins w-full relative ">
    <div class="tong lg:h-717 sm:h-1070 2xl:h-768 bg-white">
        <div class="bg-cover sm:h-1070 2xl:h-770 xx:h-927 lg:h-817 bg-white w-full relative" style="background-image: url({{$data->module['image3']->url}})">
            <div class="NoiDung">
                <div class="Tren row xx:h-44 xx:pl-393 xx:pt-5 2xl:h-46 2xl:pl-21 2xl:pt-6 border-b-1 border-white sm:h-57">
                    <div class="logo xx:w-20-per xx:ml-0 xx:pl-0  xx:pt-2 sm:ml-40 sm:mt-20 lg:pl-20 lg:pt-3 2xl:mt-0 2xl:pl-6 2xl:pt-15">
                        <img src="{{$data->module['image1']->url}}" alt="{{$data->module['image1']->alt}}">
                    </div>
                    <div class="content hidden lg:flex xx:pl-91 row xx:pt-0 xx:w-80-per text-white 2xl:pt-17 2xl:pl-267 lg:pt-23 lg:pl-31">
                        <div class="content1 hover:text-yellow xx:w-70">
                            <button>
                                <a class="no-underline" href="{{$data->module['link1']->url}}" target="{{$data->module['link1']->target}}">{{$data->module['link1']->title}}</a>
                            </button>
                        </div>
                        <div class="content2 xx:w-85 2xl:pl-37 hover:text-yellow lg:pl-10">
                            <button>
                                <a class="no-underline" href="{{$data->module['link2']->url}}" target="{{$data->module['link2']->target}}">{{$data->module['link2']->title}}</a>
                            </button>
                        </div>
                        <div class="content3 xx:w-1/4 2xl:pl-32 hover:text-yellow lg:pl-25">
                            <button>
                                <a class="no-underline" href="{{$data->module['link3']->url}}" target="{{$data->module['link3']->target}}">{{$data->module['link3']->title}}</a>
                            </button>
                        </div>
                        <div class="content4 xx:w-1/4 pl-35 xx:pl-5 hover:text-yellow">
                            <button>
                                <a class="no-underline" href="{{$data->module['link4']->url}}" target="{{$data->module['link4']->target}}">{{$data->module['link4']->title}}</a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="Duoi text-white row xx:pl-20-per relative 2xl:pl-68 2xl:pt-19">
                    <div class="alpha 2xl:pt-0 2xl:w-1100  2xl:pl-0 xx:pt-5 sm:pl-76 sm:mt-73 lg:pl-60 lg:pr-508 lg:mt-47 ">
                        <div class="tieude 2xl:pr-5 sm:-mt-42 sm:text-50 sm:mr-75 sm:text-center  lg:text-left lg:pt-35 ">
                            {!!$data->module['content1']!!}
                        </div>
                        <div class="noidung 2xl:pt-8 2xl:pr-82 2xl:-mt-20 ">
                            {!!$data->module['content2']!!}
                        </div>
                        <div class="nut bg-orange hover:text-yellow text-center rounded-full 2xl:mt-5 2xl:w-233 2xl:h-24 sm:w-245 sm:p-5 sm:mt-5 sm:h-26 sm:ml-63 lg:ml-0 ">
                            <button>
                                {!!$data->module['content3']!!}
                            </button>
                        </div>
                    </div>
                    <div class="hinh sm:left-100 sm:top-392 sm:w-909 absolute 2xl:w-1030 2xl:left-635 2xl:top-77   xx:left-900 xx:w-1030 lg:left-458 lg:top-88 lg:w-768">
                        <img src="{{$data->module['image2']->url}}" alt="{{$data->module['image2']->alt}}">
                    </div>
                </div>
            </div>
            <div class="menu  text-right absolute sm:top-25 sm:right-62 sm:text-26 lg:hidden">
                <button><span class="icomoon icon-Group-997"></span></button>
                
                <div class="div1 text-white bg-blue-100 rounded-full text-center"> <button>ABOUT US</button></div>
                <br>
                <div class="div2 text-white bg-yellow rounded-full text-center"> <button>LEADERSHIP</button></div>
                <br>
                <div class="div3 text-white bg-green-300 rounded-full text-center"> <button>CAREERS</button></div>
                <br>
                <div class="div4 text-white bg-orange rounded-full text-center"> <button>CONTACT US</button></div>
            </div>
        </div>
    </div>
</header>

