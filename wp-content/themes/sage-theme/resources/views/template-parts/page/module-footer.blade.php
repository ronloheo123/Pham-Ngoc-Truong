<footer id="footer" class="module footer w-full relative font-poppins">
    <div class="tong">
      <div class="bg-cover h-300 w-full relative" style="background-image: url({{$data->module['image1']->url}})">
        <div class="hinh1  absolute top-30-per left-35-per 2xl:left-5-per 2xl:top-62-per lg:left-1-per lg:top-48-per ">
            <img src="{{$data->module['image2']->url}}" alt="{{$data->module['image2']->alt}}">
        </div>
        <div class="hinh2  absolute top-40-per left-38-per 2xl:left-6-per 2xl:top-74-per lg:left-2-per lg:top-57-per  ">
            <img src="{{$data->module['image3']->url}}" alt="{{$data->module['image3']->alt}}">
        </div>
        <div class="content row w-full  absolute top-48-per pl-5-per 2xl:w-64-per 2xl:left-21-per 2xl:top-71-per  lg:pl-0  lg:top-336 lg:left-254 lg:w-860">
          <div class="chu1 w-1/3 text-white lg:w-216">
            {!!$data->module['content1']!!}
          </div>
          <div class="chu2 w-1/3 text-white lg:w-311 ">
            {!!$data->module['content2']!!}
          </div>
          <div class="chu3 w-1/3 text-white">
            {!!$data->module['content3']!!}
          </div>
        </div>
        <div class="nut hover:text-yellow border-4 border-white text-white  rounded-full  absolute top-60-per left-38-per text-center w-20-per 2xl:left-82-per 2xl:top-71-per 2xl:w-15-per lg:left-75-per lg:top-47-per">
          <button>  {!!$data->module['content4']!!}</button>
        </div>
        <div class="cuoi text-white absolute top-70-per left-33-per 2xl:left-4-per 2xl:top-82-per lg:left-1-per">
            {!!$data->module['content5']!!}
        </div>
      </div>
    </div>
  </footer>
  
  
  
  
  
  
  
  
  
  
  
  <!-- <div class="row">
        <ul class="list-none col p-0 w-1/2 lg:w-2/3">
        </ul>
        <div class="footer-item-col col w-1/2 lg:w-1/3">
          {!! App::getFooterAddress() !!}
        </div>
      </div>
    </div>
    <div class="container text-center footer-bottom">
      <div class="footer-copyright last-mb-none p-3">
        {!! App::getCopyRight() !!}
      </div>
    </div>
  </footer>
  --------------------------------------------------------------------------------------------
                      --endblock---
  <noscript>
  <div id="mod-noscript" class="mod-noscript bg-black text-white fixed inset-0 z-200">
      <div class="table w-full h-full">
        <div class="table-cell align-middle text-center">
          <div class="container last-mb-none">
            <h3>To use web better, please enable Javascript.</h3>
          </div>
        </div>
      </div>
    </div>
  </noscript> -->