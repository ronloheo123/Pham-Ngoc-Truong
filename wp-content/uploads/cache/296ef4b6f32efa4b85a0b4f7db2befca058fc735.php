<section class="Mode7 relative sm:top-5 font-poppins">
    <div class="container pl-30 relative z-3">
        <span class="icomoon icon-iconC absolute z-1 text-70xl left-auto right-5"></span>
        <div class=" row w-full relative z-3">
            <div class="TRAI w-full 2xl:w-1/2 ">
                <div class="gach text-orange">
                    <?php echo $data->module['de']; ?>

                </div>
                <div class=" bg-white rounded-3xl shadow-2xl ">
                    <div class="hinh"><img class="rounded-t-3xl" src="<?= \App\asset_path('images/May-27.jpg'); ?>" alt="hinh" style="width:100%;height:320px"></div>
                    <div class="dau1 pl-8">
                        <?php echo $data->module['header1']; ?>

                    </div>
                    <div class="than1 pl-8">
                        <?php echo $data->module['content1']; ?>

                        <div class="more1" style="display:none">
                            <?php echo $data->module['content11']; ?>

                        </div>
                        <div class="nut1 text-orange">
                            <button>      <?php echo $data->module['nut1']; ?> </button> <span class="icomoon icon-chevron-right"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="PHAI w-full mt-10 2xl:w-1/2 2xl:pl-10 2xl:pt-15">
                <div class="col bg-white rounded-3xl shadow-2xl">
                    <div class="dau2">
                        <?php echo $data->module['header2']; ?>

                    </div>
                    <div class="than2">
                        <?php echo $data->module['content2']; ?>

                        <div class="more2" style="display: none">
                            <?php echo $data->module['content22']; ?>

                        </div>
                        <div class="nut2 text-orange">
                            <button>   <?php echo $data->module['nut2']; ?> </button> <span class="icomoon icon-chevron-right"></span>
                        </div>
                    </div>
                </div>
                <div class="col  bg-white rounded-3xl mt-10 shadow-2xl">
                    <div class="dau3">
                        <?php echo $data->module['header3']; ?>

                    </div>
                    <div class="than3">
                        <?php echo $data->module['content3']; ?>

                        <div class="more3" style="display: none">
                            <?php echo $data->module['content33']; ?>

                        </div>
                        <div class="nut3 text-orange">
                            <button>  <?php echo $data->module['nut3']; ?> </button> <span class="icomoon icon-chevron-right"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>