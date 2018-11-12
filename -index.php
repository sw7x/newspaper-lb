<?php include 'header.php';?>

<?php include 'navigation.php';?>

<style>

    .sidebar-nav{
        position: relative;
       // top: 33%;
        //right: 0px;
        border-radius: 2px;
        overflow: hidden;
        z-index: 9999;



       // width: 0px;



    }




    .floating-sidebar-btn-div{
        position: fixed;
        top: 25%;
        right: 0px;

    }

    .floating-sidebar-btn-div btn{


    }


    .category-list-div{
        right: 0px;
        position: fixed;
        top: 33%;

        -webkit-transition: right 1s ease;
        -moz-transition: right 1s ease;
        -o-transition: right 1s ease;
        transition: right 1s ease;



    }


    .category-list-div.in{
        right: -100px;

    }



    .sidebar-nav ul{}
    .sidebar-nav ul li{width : 85px;    text-align: center;}
    .sidebar-nav ul li a{padding: 10px 2px 10px 2px;
        color : #fff;
        font-size: 14px;
        font-weight: bold;
    }

    .sidebar-nav ul li a:hover,
    .sidebar-nav ul li a.current{
        background: #fff;
        color: #f58220;


    }




    .sidebar-nav ul li a:active,
    .sidebar-nav ul li a:focus{
       /*outline-color: -webkit-focus-ring-color;*/
        /*outline-style: auto;*/
        /*outline-width: 5px;*/


        /*background: #fff;*/
        /*color: #f58220;*/
    }


    .arrow-down {
        width: 40px;
        height: 40px;
        background: #f58220;
        position: relative;
        border: 0px;
        border-radius: 2px;
    }

    .arrow-down.active {
        //background: blue;
    }

    .arrow-down:before, .arrow-down:after {
        content: "";
        display: block;
        width: 20px;
        height: 5px;
        background: white;
        position: absolute;
        top: 20px;
        transition: transform .5s;
    }

    .arrow-down:before {

        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;

        right: 10px;
        top: 23px;
        transform: rotate(-45deg);

    }

    .arrow-down:after {

        right: 10px;
        transform: rotate(45deg);
        top: 12px;


    }

    .arrow-down.active:before {
        transform: rotate(45deg);
    }

    .arrow-down.active:after {
        transform: rotate(-45deg);
    }







</style>






    <div class="sidebar-nav" id="floating-sidebar-nav">

        <div class="floating-sidebar-btn-div">
            <button type="button" class="arrow-down" onclick="this.classList.toggle('active')"></button>
        </div>

        <div class="category-list-div">
            <ul class="nav">
                <li style="background: #f4791f;"><a href="#news-cat-1">ක්&zwj;රීඩා</a></li>
                <li style="background: #ad2090;"><a href="#news-cat-2">සමුදුර</a></li>
                <li style="background: #20a5e0;"><a href="#news-cat-3" title="">ෆැමිලි ඩොක්ටර්</a></li>
                <li style="background: #efbb0e;"><a href="#news-cat-4">රසමසවුළු</a></li>
                <li style="background: #9fc113;"><a href="#news-cat-5">විලාසිතා</a></li>
                <li style="background: #e08d61;"><a href="#news-cat-6">රිද්ම</a></li>
            </ul>
        </div>

    </div>









    <section  class="container" id="home-page-top-news-section">
        <div class="row home-page-top-news-section-row">

            <div class="clearfix content-div">
                <div class="clearfix ">






                    <div class="col-md-4 left-side-div">
                        <?php include 'aside.php';?>
                    </div>



                    <div class="col-md-8 right-side-div">

                        <div class="top-feature-div">





                            <div class="row">

                                <div class="col-md-7 big-img-div" >

                                    <div class="">
                                        <div class="top-feature-heading-wrapper">
                                            <div  class="top-feature-heading">
                                                <h2><a href="" title="">right S නවතම පුවත්</a></h2>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mainSlider">

                                        <ul class="nav nav-pills" role="tablist">
                                            <li role="presentation" class="active"><a href="#newsTab" aria-controls="home" role="tab" data-toggle="tab">news</a></li>
                                            <li role="presentation"><a href="#cartoonTab" aria-controls="cartoon" role="tab" data-toggle="tab">cartoon</a></li>
                                            <!-- -->
                                            <li role="presentation"><a href="#videoTab" aria-controls="video" role="tab" data-toggle="tab">video</a></li>
                                        </ul>

                                        <div class="tab-content clearfix">



                                            <div role="tabpanel" class="tab-pane fade in active clearfix" id="newsTab">
                                                <div id="news-carousel" class="owl-carousel owl-theme"  style="display: block;">
                                                    <div class="item">

                                                        <div class="snippet-heading">
                                                            <h3><a href="" title="">නවතම 1 පුවත්</a></h3>
                                                        </div>

                                                        <div class="snippet-content">
                                                            <div class="">
                                                                <a href="" title="">
                                                                    <img class="img-responsive" width="100%" src="https://placeimg.com/320/200/nature" alt="Chania">
                                                                </a>
                                                            </div>

                                                            <div class="clearfix infoDiv row-5px">
                                                                <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                                                                <div class="right col-md-2 nopadding"><i class="fa fa-comments" aria-hidden="true"> 22</i></div>
                                                            </div>

                                                            <div class="snippet-text-div">
                                                                <p class="snippet-text">OK, so images can get quite complicated as we have a few variables to work with! For example the image below has had a caption entered</p>
                                                            </div>

                                                            <div class="read-more-link">
                                                                <a class="" href="111" title="">Read More</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- -->
                                                    <div class="item">

                                                        <div class="snippet-heading">
                                                            <h3><a href="" title="">නවතම 2 පුවත්</a></h3>
                                                        </div>

                                                        <div class="snippet-content">
                                                            <div class="">
                                                                <a href="" title="">
                                                                    <img class="img-responsive" width="100%" src="https://placeimg.com/320/200/people" alt="Chania">
                                                                </a>
                                                            </div>

                                                            <div class="clearfix infoDiv row-5px">
                                                                <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                                                                <div class="right col-md-2 nopadding"><i class="fa fa-comments" aria-hidden="true"> 32</i></div>
                                                            </div>

                                                            <div class="snippet-text-div">
                                                                <p class="snippet-text">OK, so images can get quite complicated as we have a few variables to work with! For example the image below has had a caption entered</p>
                                                            </div>

                                                            <div class="read-more-link">
                                                                <a class="" href="222" title="">Read More</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="item">

                                                        <div class="snippet-heading">
                                                            <h3><a href="" title="">නවතම 3 පුවත්</a></h3>
                                                        </div>

                                                        <div class="snippet-content">
                                                            <div class="">
                                                                <a href="" title="">
                                                                    <img class="img-responsive" width="100%" src="https://placeimg.com/320/200" alt="Chania">
                                                                </a>
                                                            </div>

                                                            <div class="clearfix infoDiv row-5px">
                                                                <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                                                                <div class="right col-md-2 nopadding"><i class="fa fa-comments" aria-hidden="true"> 42</i></div>
                                                            </div>

                                                            <div class="snippet-text-div">
                                                                <p class="snippet-text">OK, so images can get quite complicated as we have a few variables to work with! For example the image below has had a caption entered</p>
                                                            </div>

                                                            <div class="read-more-link">
                                                                <a class="" href="222" title="">Read More</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div role="tabpanel" class="tab-pane fade" id="cartoonTab">
                                                <div id="cartoon-carousel" class="owl-carousel owl-theme">
                                                    <div class="item"><a href=""><img class="img-responsive" src="https://placeimg.com/320/320/nature" alt="" width=""></a></div>
                                                    <div class="item"><a href=""><img class="img-responsive" src="https://placeimg.com/320/320/tech" alt="" width=""></a></div>
                                                    <div class="item"><a href=""><img class="img-responsive" src="https://placeimg.com/320/320/people" alt="" width=""></a></div>
                                                    <div class="item"><a href=""><img class="img-responsive" src="https://placeimg.com/320/320/arch" alt="" width=""></a></div>
                                                </div>
                                            </div>

                                            <!-- -->
                                            <div role="tabpanel" class="tab-pane fade" id="videoTab">
                                                <div id="video-carousel" class="owl-carousel owl-theme">

                                                    <div class="item">
                                                        <div class="videoWrapper">
                                                            <iframe width="" height="" allowfullscreen src="http://www.youtube.com/embed/xDMP3i36naA" frameborder="0"></iframe>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="videoWrapper">
                                                            <iframe width="" height="" allowfullscreen src="http://www.youtube.com/embed/tWSXB1Bw5cE" frameborder="0"></iframe>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="videoWrapper">
                                                            <iframe width="" height="" allowfullscreen src="http://www.youtube.com/embed/CevxZvSJLk8" frameborder="0"></iframe>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>





                                        </div>

                                    </div>


                                    <div class="">
                                        <img style="width: 100%;" class="img-responsive" src="https://dummyimage.com/360x175&text=Advertisement" alt="Chania">
                                    </div>







                                    <div class="secondary-news-snippet-wrapper">

                                        <div class="row heading-row">
                                            <div class="col-md-12">
                                                <div class="news-type-heading-wrapper">
                                                    <div  class="news-type-heading">
                                                        <h2><a href="" title="">ව්‍යාපාරික පුවත්</a></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <?php
                                        for ($i=0;$i<5;$i++):
                                            $cls = ($i==4)?'last':'';
                                        ?>
                                        <div class="row secondary-news-feature-div <?php echo $cls;?>">
                                            <div class="col-md-12">
                                                <div class="snippet-container ">


                                                    <div class="snippet-heading">
                                                        <h3><a href="" title="">1 නවතම පුවත්</a></h3>
                                                    </div>

                                                    <div class="snippet-content clearfix">

                                                        <div class="imgDiv col-md-4 nopadding">
                                                            <a href="" title="">
                                                                <img class="img-responsive" width="100%" src="https://placeimg.com/320/275/nature" alt="Chania">
                                                            </a>
                                                        </div>

                                                        <div class="col-md-8 nopadding">
                                                            <div class="clearfix infoDiv">
                                                                <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                                                                <div class="right col-md-2 nopadding"><i class="fa fa-comments" aria-hidden="true"> 42</i></div>
                                                            </div>

                                                            <div class="snippet-text-div">
                                                                <p class="snippet-text">ss OK, so images can get quite complicated as we have a had a caption entered OK, so images can get quite complicated as</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        endfor;
                                        ?>

                                        <div class="read-more-link">
                                            <a class="" href="" title="">Read More</a>
                                        </div>


                                    </div>
                                </div>











                                <div class="col-md-5 small-img-div">
                                    <?php include 'aside-news-2.php';?>
                                </div>

                            </div>


                            <div class="row">
                                <div class="col-md-4"><div class=""><img class="img-responsive" src="https://dummyimage.com/360x175&text=Advertisement" alt="Chania"></div></div>
                                <div class="col-md-4"><div class=""><img class="img-responsive" src="https://dummyimage.com/360x175&text=Advertisement" alt="Chania"></div></div>
                                <div class="col-md-4"><div class=""><img class="img-responsive" src="https://dummyimage.com/360x175&text=Advertisement" alt="Chania"></div></div>
                            </div>


                            <div class="row">
                                <div class="col-md-12"><div class=""><img class="img-responsive" src="https://dummyimage.com/1140x75&text=Advertisement" alt="Chania"></div></div>
                            </div>

                        </div>







                        <section  class="normal-feature-news-container clearfix">

                            <?php for ($i=0;$i<1;$i++):
                            $t=0;
                            $cls = ($i==0)?'last':'';
                            //break;
                                // var_dump ($t);
                            ?>

                            <div class="normal-feature-wrapper clearfix ">


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="news-type-heading-wrapper">
                                            <div  class="news-type-heading">
                                                <h2><a href="" title=""><?php echo $i;?> Gossip</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="news-snippet-wrapper">

                                    <div class="row normal-news-feature-div">
                                        <div class="col-md-12">
                                            <div class="snippet-container full-snippet">


                                                <div class="snippet-heading">
                                                    <h3><a href="" title="">1 නවතම පුවත්</a></h3>
                                                </div>

                                                <div class="snippet-content clearfix">

                                                    <div class="imgDiv col-md-4 nopadding">
                                                        <a href="" title="">
                                                            <img class="img-responsive" width="100%" src="https://placeimg.com/320/275/nature" alt="Chania">
                                                        </a>
                                                    </div>

                                                    <div class="col-md-8 nopadding">
                                                        <div class="clearfix infoDiv">
                                                            <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                                                            <div class="right col-md-2 nopadding"><i class="fa fa-comments" aria-hidden="true"> 42</i></div>
                                                        </div>

                                                        <div class="snippet-text-div">
                                                            <p class="snippet-text">ss OK, so images can get quite complicated as we have a few variables to work with! For example the image below has
                                                                had a caption entered OK, so images can get quite complicated as we have a few variables to work with! For example the image below has
                                                                OK, so images can get quite complicated as we have a few variables</p>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="read-more-link">
                                                    <a class="" href="" title="">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="row normal-news-feature-div clearfix">

                                        <div class="col-md-6">
                                            <div class="snippet-container ">

                                                <div class="snippet-heading">
                                                    <h3><a href="" title="">නවතම පුවත්</a></h3>
                                                </div>

                                                <div class="clearfix infoDiv">
                                                    <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                                                    <div class="right col-md-2 nopadding"><i class="fa fa-comments" aria-hidden="true"> 42</i></div>
                                                </div>



                                                <div class="snippet-content clearfix">

                                                    <div class="imgDiv col-md-4 nopadding">
                                                        <a href="" title="">
                                                            <img class="img-responsive" width="100%" src="https://placeimg.com/320/275/nature" alt="Chania">
                                                        </a>
                                                    </div>

                                                    <div class="col-md-8 nopadding">


                                                        <div class="snippet-text-div">
                                                            <p class="snippet-text">ss OK, so images can get quite complicated as we have a few variables to work with! For example the image below</p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="snippet-container ">

                                                <div class="snippet-heading">
                                                    <h3><a href="" title="">නවතම පුවත්</a></h3>
                                                </div>

                                                <div class="clearfix infoDiv">
                                                    <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                                                    <div class="right col-md-2 nopadding"><i class="fa fa-comments" aria-hidden="true"> 42</i></div>
                                                </div>



                                                <div class="snippet-content clearfix">

                                                    <div class="imgDiv col-md-4 nopadding">
                                                        <a href="" title="">
                                                            <img class="img-responsive" width="100%" src="https://placeimg.com/320/275/nature" alt="Chania">
                                                        </a>
                                                    </div>

                                                    <div class="col-md-8 nopadding">


                                                        <div class="snippet-text-div">
                                                            <p class="snippet-text">ss OK, so images can get quite complicated as we have a few variables to work with! For example the image below</p>
                                                        </div>
                                                    </div>
                                                </div>



                                            </div>
                                        </div>

                                    </div>

                                    <div class="row normal-news-feature-div clearfix">

                                        <div class="col-md-6">
                                            <div class="snippet-container ">

                                                <div class="snippet-heading">
                                                    <h3><a href="" title="">නවතම පුවත්</a></h3>
                                                </div>

                                                <div class="clearfix infoDiv">
                                                    <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                                                    <div class="right col-md-2 nopadding"><i class="fa fa-comments" aria-hidden="true"> 42</i></div>
                                                </div>



                                                <div class="snippet-content clearfix">

                                                    <div class="imgDiv col-md-4 nopadding">
                                                        <a href="" title="">
                                                            <img class="img-responsive" width="100%" src="https://placeimg.com/320/275/nature" alt="Chania">
                                                        </a>
                                                    </div>

                                                    <div class="col-md-8 nopadding">


                                                        <div class="snippet-text-div">
                                                            <p class="snippet-text">ss OK, so images can get quite complicated as we have a few variables to work with! For example the image below</p>
                                                        </div>
                                                    </div>
                                                </div>



                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="snippet-container ">

                                                <div class="snippet-heading">
                                                    <h3><a href="" title="">නවතම පුවත්</a></h3>
                                                </div>

                                                <div class="clearfix infoDiv">
                                                    <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                                                    <div class="right col-md-2 nopadding"><i class="fa fa-comments" aria-hidden="true"> 42</i></div>
                                                </div>



                                                <div class="snippet-content clearfix">

                                                    <div class="imgDiv col-md-4 nopadding">
                                                        <a href="" title="">
                                                            <img class="img-responsive" width="100%" src="https://placeimg.com/320/275/nature" alt="Chania">
                                                        </a>
                                                    </div>

                                                    <div class="col-md-8 nopadding">


                                                        <div class="snippet-text-div">
                                                            <p class="snippet-text">ss OK, so images can get quite complicated as we have a few variables to work with! For example the image below</p>
                                                        </div>
                                                    </div>
                                                </div>



                                            </div>
                                        </div>

                                    </div>

                                    <div class="row normal-news-feature-div clearfix">

                                        <div class="col-md-6">
                                            <div class="snippet-container ">

                                                <div class="snippet-heading">
                                                    <h3><a href="" title="">නවතම පුවත්</a></h3>
                                                </div>

                                                <div class="clearfix infoDiv">
                                                    <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                                                    <div class="right col-md-2 nopadding"><i class="fa fa-comments" aria-hidden="true"> 42</i></div>
                                                </div>



                                                <div class="snippet-content clearfix">

                                                    <div class="imgDiv col-md-4 nopadding">
                                                        <a href="" title="">
                                                            <img class="img-responsive" width="100%" src="https://placeimg.com/320/275/nature" alt="Chania">
                                                        </a>
                                                    </div>

                                                    <div class="col-md-8 nopadding">


                                                        <div class="snippet-text-div">
                                                            <p class="snippet-text">ss OK, so images can get quite complicated as we have a few variables to work with! For example the image below</p>
                                                        </div>
                                                    </div>
                                                </div>



                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="snippet-container ">

                                                <div class="snippet-heading">
                                                    <h3><a href="" title="">නවතම පුවත්</a></h3>
                                                </div>

                                                <div class="clearfix infoDiv">
                                                    <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                                                    <div class="right col-md-2 nopadding"><i class="fa fa-comments" aria-hidden="true"> 42</i></div>
                                                </div>



                                                <div class="snippet-content clearfix">

                                                    <div class="imgDiv col-md-4 nopadding">
                                                        <a href="" title="">
                                                            <img class="img-responsive" width="100%" src="https://placeimg.com/320/275/nature" alt="Chania">
                                                        </a>
                                                    </div>

                                                    <div class="col-md-8 nopadding">


                                                        <div class="snippet-text-div">
                                                            <p class="snippet-text">ss OK, so images can get quite complicated as we have a few variables to work with! For example the image below</p>
                                                        </div>
                                                    </div>
                                                </div>



                                            </div>
                                        </div>

                                    </div>

                                    <div class="row normal-news-feature-div clearfix">

                                        <div class="col-md-6">
                                            <div class="snippet-container ">

                                                <div class="snippet-heading">
                                                    <h3><a href="" title="">නවතම පුවත්</a></h3>
                                                </div>

                                                <div class="clearfix infoDiv">
                                                    <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                                                    <div class="right col-md-2 nopadding"><i class="fa fa-comments" aria-hidden="true"> 42</i></div>
                                                </div>



                                                <div class="snippet-content clearfix">

                                                    <div class="imgDiv col-md-4 nopadding">
                                                        <a href="" title="">
                                                            <img class="img-responsive" width="100%" src="https://placeimg.com/320/275/nature" alt="Chania">
                                                        </a>
                                                    </div>

                                                    <div class="col-md-8 nopadding">


                                                        <div class="snippet-text-div">
                                                            <p class="snippet-text">ss OK, so images can get quite complicated as we have a few variables to work with! For example the image below</p>
                                                        </div>
                                                    </div>
                                                </div>



                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="snippet-container">

                                                <div class="snippet-heading">
                                                    <h3><a href="" title="">නවතම පුවත්</a></h3>
                                                </div>

                                                <div class="snippet-content">

                                                    <div>
                                                        <div class="clearfix infoDiv">
                                                            <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                                                            <div class="right col-md-2 nopadding"><i class="fa fa-comments" aria-hidden="true"> 42</i></div>
                                                        </div>

                                                        <div class="snippet-text-div">
                                                            <p class="snippet-text">OK, so images can get quite complicated as we have a few variables to work with! For example the image below has had a caption entered</p>
                                                        </div>
                                                    </div>

                                                </div>



                                            </div>
                                        </div>

                                    </div>


                                    <div class="read-more-link">
                                        <a class="" href="" title="">More News</a>
                                    </div>

                                </div>


                                <div class="clearfix row" style="margin-bottom: 10px">
                                    <div class="col-md-4"><div class=""><img class="img-responsive" src="https://dummyimage.com/360x125&text=Advertisement" alt="Chania"></div></div>
                                    <div class="col-md-4"><div class=""><img class="img-responsive" src="https://dummyimage.com/360x125&text=Advertisement" alt="Chania"></div></div>
                                    <div class="col-md-4"><div class=""><img class="img-responsive" src="https://dummyimage.com/360x125&text=Advertisement" alt="Chania"></div></div>
                                </div>


                                <div class="clearfix row" style="margin-bottom: 10px">
                                    <div class="col-md-12"><div class=""><img class="img-responsive" src="https://dummyimage.com/1140x125&text=Advertisement" alt="Chania"></div></div>
                                </div>

                            </div>

                            <?php endfor;?>

                        </section>



                        <section  class="normal-feature-news-container clearfix">

                                <div class="normal-feature-wrapper clearfix ">


                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="news-type-heading-wrapper">
                                                <div  class="news-type-heading">
                                                    <h2><a href="" title="">Engeneration1</a></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="news-snippet-wrapper">

                                        <div class="row normal-news-feature-div">
                                            <div class="col-md-12">
                                                <div class="snippet-container full-snippet">


                                                    <div class="snippet-heading">
                                                        <h3><a href="" title="">1 නවතම පුවත්</a></h3>
                                                    </div>

                                                    <div class="snippet-content clearfix">

                                                        <div class="imgDiv col-md-4 nopadding">
                                                            <a href="" title="">
                                                                <img class="img-responsive" width="100%" src="https://placeimg.com/320/275/nature" alt="Chania">
                                                            </a>
                                                        </div>

                                                        <div class="col-md-8 nopadding">
                                                            <div class="clearfix infoDiv">
                                                                <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                                                                <div class="right col-md-2 nopadding"><i class="fa fa-comments" aria-hidden="true"> 42</i></div>
                                                            </div>

                                                            <div class="snippet-text-div">
                                                                <p class="snippet-text">ss OK, so images can get quite complicated as we have a few variables to work with! For example the image below has
                                                                    had a caption entered OK, so images can get quite complicated as we have a few variables to work with! For example the image below has
                                                                    OK, so images can get quite complicated as we have a few variables</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="read-more-link">
                                            <a class="" href="" title="">More News</a>
                                        </div>

                                    </div>

                                    <!--
                                    <div class="clearfix row" style="margin-bottom: 10px">
                                        <div class="col-md-4"><div class=""><img class="img-responsive" src="https://dummyimage.com/360x125&text=Advertisement" alt="Chania"></div></div>
                                        <div class="col-md-4"><div class=""><img class="img-responsive" src="https://dummyimage.com/360x125&text=Advertisement" alt="Chania"></div></div>
                                        <div class="col-md-4"><div class=""><img class="img-responsive" src="https://dummyimage.com/360x125&text=Advertisement" alt="Chania"></div></div>
                                    </div>
                                    -->


                                    <div class="clearfix row" style="margin-bottom: 10px">
                                        <div class="col-md-12"><div class=""><img class="img-responsive" src="https://dummyimage.com/1140x125&text=Advertisement" alt="Chania"></div></div>
                                    </div>

                                </div>



                        </section>



                    </div>


                </div>
            </div>
        </div>

    </section>



    <?php //include 'snippets-v2.php';?>



    <section  class="container home-page-adv-section">
        <div class="row home-page-category-news-section-row category-feature-heading-wrapper" style="margin-bottom: 10px">
            <div class="col-md-12"><div class=""><img class="img-responsive" src="https://dummyimage.com/1140x125&text=Advertisement" alt="Chania"></div></div>
        </div>
    </section>

    <section  class="container v2 home-page-category-news-section" id="news-cat-1">


        <div class="row home-page-category-news-section-row category-feature-heading-wrapper">
            <div class="col-md-12 home-page-category-news-section-div content-div">

                <div class="category-feature-heading">
                    <h2><a href="" title="">DD1 නවතම පුවත්</a></h2>
                    <div  class="category-feature-heading-img" style="background-image: url('https://placeimg.com/360/400/rand');">
                    </div>
                </div>

            </div>
        </div>


        <div class="row home-page-category-news-section-row">
            <div class="home-page-category-news-section-div content-div">

                <div  class="left top-feature-heading-wrapper col-md-4">

                    <div class="snippet-container">

                        <div id="feature-news-slider" class="feature-news-slider owl-carousel owl-theme">
                            <div class="item">

                                <div class="snippet-heading">
                                    <h3><a href="" title="">qq1 නවතම පුවත්</a></h3>
                                </div>

                                <div class="snippet-content">
                                    <div class="imgDiv">
                                        <a href="" title="">
                                            <img class="img-responsive" width="100%" src="https://placeimg.com/320/200/nature" alt="Chania">
                                        </a>
                                    </div>

                                    <div class="clearfix infoDiv">
                                        <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                                        <div class="right col-md-2 nopadding"><i class="fa fa-comments" aria-hidden="true"> 22</i></div>
                                    </div>

                                    <div class="snippet-text-div">
                                        <p class="snippet-text">OK, so images can get quite complicated as we have a few variables to work with! For example the image below has had a caption entered</p>
                                        <p class="snippet-text">OK, so images can get quite complicated as we have a few variables to work with! For example the image below has had a caption entered</p>
                                    </div>

                                    <div class="read-more-link">
                                        <a class="" href="111" title="">Read More</a>
                                    </div>
                                </div>
                            </div>

                            <!-- -->
                            <div class="item">

                                <div class="snippet-heading">
                                    <h3><a href="" title="">qq2 නවතම පුවත්</a></h3>
                                </div>

                                <div class="snippet-content">
                                    <div class="imgDiv">
                                        <a href="" title="">
                                            <img class="img-responsive" width="100%" src="https://placeimg.com/320/200/people" alt="Chania">
                                        </a>
                                    </div>

                                    <div class="clearfix infoDiv">
                                        <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                                        <div class="right col-md-2 nopadding"><i class="fa fa-comments" aria-hidden="true"> 32</i></div>
                                    </div>

                                    <div class="snippet-text-div">
                                        <p class="snippet-text">OK, so images can get quite complicated as we have a few variables to work with! For example the image below has had a caption entered</p>
                                        <p class="snippet-text">OK, so images can get quite complicated as we have a few variables to work with! For example the image below has had a caption entered</p>
                                    </div>

                                    <div class="read-more-link">
                                        <a class="" href="222" title="">Read More</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">

                                <div class="snippet-heading">
                                    <h3><a href="" title="">qq2 නවතම පුවත්</a></h3>
                                </div>

                                <div class="snippet-content">
                                    <div class="imgDiv">
                                        <a href="" title="">
                                            <img class="img-responsive" width="100%" src="https://placeimg.com/320/200" alt="Chania">
                                        </a>
                                    </div>

                                    <div class="clearfix infoDiv">
                                        <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                                        <div class="right col-md-2 nopadding"><i class="fa fa-comments" aria-hidden="true"> 42</i></div>
                                    </div>

                                    <div class="snippet-text-div">
                                        <p class="snippet-text">OK, so images can get quite complicated as we have a few variables to work with! For example the image below has had a caption entered</p>
                                        <p class="snippet-text">OK, so images can get quite complicated as we have a few variables to work with! For example the image below has had a caption entered</p>
                                    </div>

                                    <div class="read-more-link">
                                        <a class="" href="222" title="">Read More</a>
                                    </div>
                                </div>
                            </div>




                        </div>

                    </div>

                </div>

                <div class="middle top-feature-heading-wrapper col-md-4">

                    <div class="snippet-container">

                        <div class="snippet-content clearfix nopadding">
                            <div class="snippet-heading">
                                <h3><a href="" title="">නවතම පුවත්</a></h3>
                            </div>

                            <div class="clearfix infoDiv">
                                <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                                <div class="right col-md-2 nopadding"><i class="fa fa-comments" aria-hidden="true"> 12</i></div>
                            </div>

                            <div class="imgDiv col-md-4 nopadding">
                                <a href="" title="">
                                    <img class="img-responsive" width="100%" src="https://placeimg.com/320/320/people" alt="Chania">
                                </a>
                            </div>

                            <div class="col-md-8 clearfix nopadding">





                                <div class="snippet-text-div">
                                    <p class="snippet-text">OK, so images can get quite complicated as we have a few variables to work with! For example the image below has had a caption entered</p>
                                </div>
                            </div>



                        </div>

                    </div>

                    <div class="snippet-container">

                        <div class="snippet-content clearfix nopadding">

                            <div class="snippet-heading">
                                <h3><a href="" title="">නවතම පුවත්</a></h3>
                            </div>
                            <div class="clearfix infoDiv">
                                <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                                <div class="right col-md-2 nopadding"><i class="fa fa-comments" aria-hidden="true"> 12</i></div>
                            </div>

                            <div class="imgDiv col-md-4 nopadding">
                                <a href="" title="">
                                    <img class="img-responsive" width="100%" src="https://placeimg.com/320/320/people" alt="Chania">
                                </a>
                            </div>

                            <div class="col-md-8 clearfix nopadding">


                                <div class="snippet-text-div">
                                    <p class="snippet-text">OK, so images can get quite complicated as we have a few variables to work with! For example the image below has had a caption entered</p>
                                </div>
                            </div>



                        </div>

                    </div>

                    <div class="read-more-link">
                        <a class="" href="" title="">More Articles...</a>
                    </div>

                </div>

                <div class="right top-feature-heading-wrapper col-md-4">

                    <div class="snippet-container">

                        <div class="snippet-content clearfix nopadding">
                            <div class="snippet-heading">
                                <h3><a href="" title="">නවතම පුවත්</a></h3>
                            </div>

                            <div class="clearfix infoDiv">
                                <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                                <div class="right col-md-2 nopadding"><i class="fa fa-comments" aria-hidden="true"> 12</i></div>
                            </div>

                            <div class="imgDiv col-md-4 nopadding">
                                <a href="" title="">
                                    <img class="img-responsive" width="100%" src="https://placeimg.com/320/320/people" alt="Chania">
                                </a>
                            </div>

                            <div class="col-md-8 clearfix nopadding">





                                <div class="snippet-text-div">
                                    <p class="snippet-text">OK, so images can get quite complicated as we have a few variables to work with! For example the image below has had a caption entered</p>
                                </div>
                            </div>



                        </div>

                    </div>

                    <div class="snippet-container">

                        <div class="snippet-content clearfix nopadding">
                            <div class="snippet-heading">
                                <h3><a href="" title="">නවතම පුවත්</a></h3>
                            </div>

                            <div class="clearfix infoDiv">
                                <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                                <div class="right col-md-2 nopadding"><i class="fa fa-comments" aria-hidden="true"> 12</i></div>
                            </div>


                            <div class="czol-md-8 clearfix nopadding">

                                <div class="snippet-text-div">
                                    <p class="snippet-text">OK, so images can get quite complicated as we have a few variables to work with! For example the image below has had a caption entered</p>
                                </div>
                            </div>



                        </div>

                    </div>

                    <div class="read-more-link">
                        <a class="" href="" title="">More Articles...</a>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!---->





    <section  class="container home-page-adv-section" >
        <div class="row home-page-category-news-section-row category-feature-heading-wrapper" style="margin-bottom: 10px">
            <div class="col-md-4"><div class=""><img class="img-responsive" src="https://dummyimage.com/360x125&text=Advertisement" alt="Chania"></div></div>
            <div class="col-md-4"><div class=""><img class="img-responsive" src="https://dummyimage.com/360x125&text=Advertisement" alt="Chania"></div></div>
            <div class="col-md-4"><div class=""><img class="img-responsive" src="https://dummyimage.com/360x125&text=Advertisement" alt="Chania"></div></div>
        </div>
    </section>

    <section  class="container v2 home-page-category-news-section" id="news-cat-2">


        <div class="row home-page-category-news-section-row category-feature-heading-wrapper">
            <div class="col-md-12 home-page-category-news-section-div content-div">

                <div class="category-feature-heading">
                    <h2><a href="" title="">DD2 නවතම පුවත්</a></h2>
                    <div  class="category-feature-heading-img" style="background-image: url('https://placeimg.com/360/400/rand');">
                    </div>
                </div>

            </div>
        </div>


        <div class="row home-page-category-news-section-row">
            <div class="home-page-category-news-section-div content-div">

                <div  class="left top-feature-heading-wrapper col-md-4">

                    <div id="" class="advertisement-half-div">
                        <img class="img-responsive" src="https://dummyimage.com/360x700&text=Advertisement" alt="Chania">
                    </div>

                </div>

                <div class="middle top-feature-heading-wrapper col-md-4">

                    <div class="snippet-container">

                        <div class="snippet-content clearfix nopadding">
                            <div class="snippet-heading">
                                <h3><a href="" title="">නවතම පුවත්</a></h3>
                            </div>

                            <div class="clearfix infoDiv">
                                <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                                <div class="right col-md-2 nopadding"><i class="fa fa-comments" aria-hidden="true"> 12</i></div>
                            </div>

                            <div class="imgDiv col-md-4 nopadding">
                                <a href="" title="">
                                    <img class="img-responsive" width="100%" src="https://placeimg.com/320/320/people" alt="Chania">
                                </a>
                            </div>

                            <div class="col-md-8 clearfix nopadding">





                                <div class="snippet-text-div">
                                    <p class="snippet-text">OK, so images can get quite complicated as we have a few variables to work with! For example the image below has had a caption entered</p>
                                </div>
                            </div>



                        </div>

                    </div>

                    <div class="snippet-container">

                        <div class="snippet-content clearfix nopadding">

                            <div class="snippet-heading">
                                <h3><a href="" title="">නවතම පුවත්</a></h3>
                            </div>
                            <div class="clearfix infoDiv">
                                <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                                <div class="right col-md-2 nopadding"><i class="fa fa-comments" aria-hidden="true"> 12</i></div>
                            </div>

                            <div class="imgDiv col-md-4 nopadding">
                                <a href="" title="">
                                    <img class="img-responsive" width="100%" src="https://placeimg.com/320/320/people" alt="Chania">
                                </a>
                            </div>

                            <div class="col-md-8 clearfix nopadding">


                                <div class="snippet-text-div">
                                    <p class="snippet-text">OK, so images can get quite complicated as we have a few variables to work with! For example the image below has had a caption entered</p>
                                </div>
                            </div>



                        </div>

                    </div>

                    <div class="read-more-link">
                        <a class="" href="" title="">More Articles...</a>
                    </div>

                </div>

                <div class="right top-feature-heading-wrapper col-md-4">

                    <div class="snippet-container">

                        <div class="snippet-content clearfix nopadding">
                            <div class="snippet-heading">
                                <h3><a href="" title="">නවතම පුවත්</a></h3>
                            </div>

                            <div class="clearfix infoDiv">
                                <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                                <div class="right col-md-2 nopadding"><i class="fa fa-comments" aria-hidden="true"> 12</i></div>
                            </div>

                            <div class="imgDiv col-md-4 nopadding">
                                <a href="" title="">
                                    <img class="img-responsive" width="100%" src="https://placeimg.com/320/320/people" alt="Chania">
                                </a>
                            </div>

                            <div class="col-md-8 clearfix nopadding">





                                <div class="snippet-text-div">
                                    <p class="snippet-text">OK, so images can get quite complicated as we have a few variables to work with! For example the image below has had a caption entered</p>
                                </div>
                            </div>



                        </div>

                    </div>

                    <div class="snippet-container">

                        <div class="snippet-content clearfix nopadding">
                            <div class="snippet-heading">
                                <h3><a href="" title="">නවතම පුවත්</a></h3>
                            </div>

                            <div class="clearfix infoDiv">
                                <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                                <div class="right col-md-2 nopadding"><i class="fa fa-comments" aria-hidden="true"> 12</i></div>
                            </div>


                            <div class="czol-md-8 clearfix nopadding">

                                <div class="snippet-text-div">
                                    <p class="snippet-text">OK, so images can get quite complicated as we have a few variables to work with! For example the image below has had a caption entered</p>
                                </div>
                            </div>



                        </div>

                    </div>

                    <div class="read-more-link">
                        <a class="" href="" title="">More Articles...</a>
                    </div>

                </div>

            </div>
        </div>

    </section>
    <!---->



    <section  class="container home-page-adv-section">
        <div class="row home-page-category-news-section-row category-feature-heading-wrapper" style="margin-bottom: 10px">
            <div class="col-md-12"><div class=""><img class="img-responsive" src="https://dummyimage.com/1140x125&text=Advertisement" alt="Chania"></div></div>
        </div>
    </section>

    <section  class="container v2 home-page-category-news-section" id="news-cat-3">


        <div class="row home-page-category-news-section-row category-feature-heading-wrapper">
            <div class="col-md-12 home-page-category-news-section-div content-div">

                <div class="category-feature-heading">
                    <h2><a href="" title="">DD3 නවතම පුවත්</a></h2>
                    <div  class="category-feature-heading-img" style="background-image: url('https://placeimg.com/360/400/rand');">
                    </div>
                </div>

            </div>
        </div>


        <div class="row home-page-category-news-section-row category-feature-heading-wrapper">
            <div class="home-page-category-news-section-div content-div">

                <div  class="left top-feature-heading-wrapper col-md-2">
                    <div id="" class="advertisement-half-div">
                        <img class="img-responsive" src="https://dummyimage.com/360x700&text=Advertisement" alt="Chania">
                    </div>
                </div>

                <div class="middle top-feature-heading-wrapper col-md-4">

                    <div class="snippet-container">

                        <div class="snippet-content clearfix nopadding">
                            <div class="snippet-heading">
                                <h3><a href="" title="">නවතම පුවත්</a></h3>
                            </div>

                            <div class="clearfix infoDiv">
                                <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                                <div class="right col-md-2 nopadding"><i class="fa fa-comments" aria-hidden="true"> 12</i></div>
                            </div>

                            <div class="imgDiv col-md-4 nopadding">
                                <a href="" title="">
                                    <img class="img-responsive" width="100%" src="https://placeimg.com/320/320/people" alt="Chania">
                                </a>
                            </div>

                            <div class="col-md-8 clearfix nopadding">





                                <div class="snippet-text-div">
                                    <p class="snippet-text">OK, so images can get quite complicated as we have a few variables to work with! For example the image below has had a caption entered</p>
                                </div>
                            </div>



                        </div>

                    </div>

                    <div class="snippet-container">

                        <div class="snippet-content clearfix nopadding">

                            <div class="snippet-heading">
                                <h3><a href="" title="">නවතම පුවත්</a></h3>
                            </div>
                            <div class="clearfix infoDiv">
                                <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                                <div class="right col-md-2 nopadding"><i class="fa fa-comments" aria-hidden="true"> 12</i></div>
                            </div>

                            <div class="imgDiv col-md-4 nopadding">
                                <a href="" title="">
                                    <img class="img-responsive" width="100%" src="https://placeimg.com/320/320/people" alt="Chania">
                                </a>
                            </div>

                            <div class="col-md-8 clearfix nopadding">


                                <div class="snippet-text-div">
                                    <p class="snippet-text">OK, so images can get quite complicated as we have a few variables to work with! For example the image below has had a caption entered</p>
                                </div>
                            </div>



                        </div>

                    </div>

                    <div class="read-more-link">
                        <a class="" href="" title="">More Articles...</a>
                    </div>

                </div>

                <div class="right top-feature-heading-wrapper col-md-4">

                    <div class="snippet-container">

                        <div class="snippet-content clearfix nopadding">
                            <div class="snippet-heading">
                                <h3><a href="" title="">නවතම පුවත්</a></h3>
                            </div>

                            <div class="clearfix infoDiv">
                                <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                                <div class="right col-md-2 nopadding"><i class="fa fa-comments" aria-hidden="true"> 12</i></div>
                            </div>

                            <div class="imgDiv col-md-4 nopadding">
                                <a href="" title="">
                                    <img class="img-responsive" width="100%" src="https://placeimg.com/320/320/people" alt="Chania">
                                </a>
                            </div>

                            <div class="col-md-8 clearfix nopadding">





                                <div class="snippet-text-div">
                                    <p class="snippet-text">OK, so images can get quite complicated as we have a few variables to work with! For example the image below has had a caption entered</p>
                                </div>
                            </div>



                        </div>

                    </div>

                    <div class="snippet-container">

                        <div class="snippet-content clearfix nopadding">
                            <div class="snippet-heading">
                                <h3><a href="" title="">නවතම පුවත්</a></h3>
                            </div>

                            <div class="clearfix infoDiv">
                                <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                                <div class="right col-md-2 nopadding"><i class="fa fa-comments" aria-hidden="true"> 12</i></div>
                            </div>


                            <div class="czol-md-8 clearfix nopadding">

                                <div class="snippet-text-div">
                                    <p class="snippet-text">OK, so images can get quite complicated as we have a few variables to work with! For example the image below has had a caption entered</p>
                                </div>
                            </div>



                        </div>

                    </div>

                    <div class="read-more-link">
                        <a class="" href="" title="">More Articles...</a>
                    </div>

                </div>


                <div  class="left top-feature-heading-wrapper col-md-2">
                    <div id="" class="advertisement-half-div">
                        <img class="img-responsive" src="https://dummyimage.com/360x700&text=Advertisement" alt="Chania">
                    </div>
                </div>

            </div>
        </div>

    </section>
    <!---->




    <section  class="container home-page-adv-section">
        <div class="row home-page-category-news-section-row category-feature-heading-wrapper" style="margin-bottom: 10px">
            <div class="col-md-4"><div class=""><img class="img-responsive" src="https://dummyimage.com/360x125&text=Advertisement" alt="Chania"></div></div>
            <div class="col-md-4"><div class=""><img class="img-responsive" src="https://dummyimage.com/360x125&text=Advertisement" alt="Chania"></div></div>
            <div class="col-md-4"><div class=""><img class="img-responsive" src="https://dummyimage.com/360x125&text=Advertisement" alt="Chania"></div></div>
        </div>
    </section>

    <section  class="container v2 home-page-category-news-section" id="news-cat-4">


        <div class="row home-page-category-news-section-row category-feature-heading-wrapper">
            <div class="col-md-12 home-page-category-news-section-div content-div">

                <div class="category-feature-heading">
                    <h2><a href="" title="">DD1 නවතම පුවත්</a></h2>
                    <div  class="category-feature-heading-img" style="background-image: url('https://placeimg.com/360/400/rand');">
                    </div>
                </div>

            </div>
        </div>


        <div class="row home-page-category-news-section-row">
            <div class="home-page-category-news-section-div content-div">

                <div  class="left top-feature-heading-wrapper col-md-4">

                    <div class="snippet-container">

                        <div id="feature-news-slider" class="feature-news-slider owl-carousel owl-theme">
                            <div class="item">

                                <div class="snippet-heading">
                                    <h3><a href="" title="">qq1 නවතම පුවත්</a></h3>
                                </div>

                                <div class="snippet-content">
                                    <div class="imgDiv">
                                        <a href="" title="">
                                            <img class="img-responsive" width="100%" src="https://placeimg.com/320/200/nature" alt="Chania">
                                        </a>
                                    </div>

                                    <div class="clearfix infoDiv">
                                        <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                                        <div class="right col-md-2 nopadding"><i class="fa fa-comments" aria-hidden="true"> 22</i></div>
                                    </div>

                                    <div class="snippet-text-div">
                                        <p class="snippet-text">OK, so images can get quite complicated as we have a few variables to work with! For example the image below has had a caption entered</p>
                                        <p class="snippet-text">OK, so images can get quite complicated as we have a few variables to work with! For example the image below has had a caption entered</p>
                                    </div>

                                    <div class="read-more-link">
                                        <a class="" href="111" title="">Read More</a>
                                    </div>
                                </div>
                            </div>

                            <!-- -->
                            <div class="item">

                                <div class="snippet-heading">
                                    <h3><a href="" title="">qq2 නවතම පුවත්</a></h3>
                                </div>

                                <div class="snippet-content">
                                    <div class="imgDiv">
                                        <a href="" title="">
                                            <img class="img-responsive" width="100%" src="https://placeimg.com/320/200/people" alt="Chania">
                                        </a>
                                    </div>

                                    <div class="clearfix infoDiv">
                                        <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                                        <div class="right col-md-2 nopadding"><i class="fa fa-comments" aria-hidden="true"> 32</i></div>
                                    </div>

                                    <div class="snippet-text-div">
                                        <p class="snippet-text">OK, so images can get quite complicated as we have a few variables to work with! For example the image below has had a caption entered</p>
                                        <p class="snippet-text">OK, so images can get quite complicated as we have a few variables to work with! For example the image below has had a caption entered</p>
                                    </div>

                                    <div class="read-more-link">
                                        <a class="" href="222" title="">Read More</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">

                                <div class="snippet-heading">
                                    <h3><a href="" title="">qq2 නවතම පුවත්</a></h3>
                                </div>

                                <div class="snippet-content">
                                    <div class="imgDiv">
                                        <a href="" title="">
                                            <img class="img-responsive" width="100%" src="https://placeimg.com/320/200" alt="Chania">
                                        </a>
                                    </div>

                                    <div class="clearfix infoDiv">
                                        <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                                        <div class="right col-md-2 nopadding"><i class="fa fa-comments" aria-hidden="true"> 42</i></div>
                                    </div>

                                    <div class="snippet-text-div">
                                        <p class="snippet-text">OK, so images can get quite complicated as we have a few variables to work with! For example the image below has had a caption entered</p>
                                        <p class="snippet-text">OK, so images can get quite complicated as we have a few variables to work with! For example the image below has had a caption entered</p>
                                    </div>

                                    <div class="read-more-link">
                                        <a class="" href="222" title="">Read More</a>
                                    </div>
                                </div>
                            </div>




                        </div>

                    </div>

                </div>

                <div class="middle top-feature-heading-wrapper col-md-4">

                    <div class="snippet-container">

                        <div class="snippet-content clearfix nopadding">
                            <div class="snippet-heading">
                                <h3><a href="" title="">නවතම පුවත්</a></h3>
                            </div>

                            <div class="clearfix infoDiv">
                                <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                                <div class="right col-md-2 nopadding"><i class="fa fa-comments" aria-hidden="true"> 12</i></div>
                            </div>

                            <div class="imgDiv col-md-4 nopadding">
                                <a href="" title="">
                                    <img class="img-responsive" width="100%" src="https://placeimg.com/320/320/people" alt="Chania">
                                </a>
                            </div>

                            <div class="col-md-8 clearfix nopadding">





                                <div class="snippet-text-div">
                                    <p class="snippet-text">OK, so images can get quite complicated as we have a few variables to work with! For example the image below has had a caption entered</p>
                                </div>
                            </div>



                        </div>

                    </div>

                    <div class="snippet-container">

                        <div class="snippet-content clearfix nopadding">

                            <div class="snippet-heading">
                                <h3><a href="" title="">නවතම පුවත්</a></h3>
                            </div>
                            <div class="clearfix infoDiv">
                                <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                                <div class="right col-md-2 nopadding"><i class="fa fa-comments" aria-hidden="true"> 12</i></div>
                            </div>

                            <div class="imgDiv col-md-4 nopadding">
                                <a href="" title="">
                                    <img class="img-responsive" width="100%" src="https://placeimg.com/320/320/people" alt="Chania">
                                </a>
                            </div>

                            <div class="col-md-8 clearfix nopadding">


                                <div class="snippet-text-div">
                                    <p class="snippet-text">OK, so images can get quite complicated as we have a few variables to work with! For example the image below has had a caption entered</p>
                                </div>
                            </div>



                        </div>

                    </div>

                    <div class="read-more-link">
                        <a class="" href="" title="">More Articles...</a>
                    </div>

                </div>

                <div class="right top-feature-heading-wrapper col-md-4">

                    <div class="snippet-container">

                        <div class="snippet-content clearfix nopadding">
                            <div class="snippet-heading">
                                <h3><a href="" title="">නවතම පුවත්</a></h3>
                            </div>

                            <div class="clearfix infoDiv">
                                <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                                <div class="right col-md-2 nopadding"><i class="fa fa-comments" aria-hidden="true"> 12</i></div>
                            </div>

                            <div class="imgDiv col-md-4 nopadding">
                                <a href="" title="">
                                    <img class="img-responsive" width="100%" src="https://placeimg.com/320/320/people" alt="Chania">
                                </a>
                            </div>

                            <div class="col-md-8 clearfix nopadding">





                                <div class="snippet-text-div">
                                    <p class="snippet-text">OK, so images can get quite complicated as we have a few variables to work with! For example the image below has had a caption entered</p>
                                </div>
                            </div>



                        </div>

                    </div>

                    <div class="snippet-container">

                        <div class="snippet-content clearfix nopadding">
                            <div class="snippet-heading">
                                <h3><a href="" title="">නවතම පුවත්</a></h3>
                            </div>

                            <div class="clearfix infoDiv">
                                <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                                <div class="right col-md-2 nopadding"><i class="fa fa-comments" aria-hidden="true"> 12</i></div>
                            </div>


                            <div class="czol-md-8 clearfix nopadding">

                                <div class="snippet-text-div">
                                    <p class="snippet-text">OK, so images can get quite complicated as we have a few variables to work with! For example the image below has had a caption entered</p>
                                </div>
                            </div>



                        </div>

                    </div>

                    <div class="read-more-link">
                        <a class="" href="" title="">More Articles...</a>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!---->





    <section  class="container home-page-adv-section">
        <div class="row home-page-category-news-section-row category-feature-heading-wrapper" style="margin-bottom: 10px">
            <div class="col-md-12"><div class=""><img class="img-responsive" src="https://dummyimage.com/1140x125&text=Advertisement" alt="Chania"></div></div>
        </div>
    </section>

    <section  class="container v2 home-page-category-news-section" id="news-cat-5">


        <div class="row home-page-category-news-section-row category-feature-heading-wrapper">
            <div class="col-md-12 home-page-category-news-section-div content-div">

                <div class="category-feature-heading">
                    <h2><a href="" title="">DD2 නවතම පුවත්</a></h2>
                    <div  class="category-feature-heading-img" style="background-image: url('https://placeimg.com/360/400/rand');">
                    </div>
                </div>

            </div>
        </div>


        <div class="row home-page-category-news-section-row">
            <div class="home-page-category-news-section-div content-div">

                <div  class="left top-feature-heading-wrapper col-md-4">

                    <div id="" class="advertisement-half-div">
                        <img class="img-responsive" src="https://dummyimage.com/360x700&text=Advertisement" alt="Chania">
                    </div>

                </div>

                <div class="middle top-feature-heading-wrapper col-md-4">

                    <div class="snippet-container">

                        <div class="snippet-content clearfix nopadding">
                            <div class="snippet-heading">
                                <h3><a href="" title="">නවතම පුවත්</a></h3>
                            </div>

                            <div class="clearfix infoDiv">
                                <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                                <div class="right col-md-2 nopadding"><i class="fa fa-comments" aria-hidden="true"> 12</i></div>
                            </div>

                            <div class="imgDiv col-md-4 nopadding">
                                <a href="" title="">
                                    <img class="img-responsive" width="100%" src="https://placeimg.com/320/320/people" alt="Chania">
                                </a>
                            </div>

                            <div class="col-md-8 clearfix nopadding">





                                <div class="snippet-text-div">
                                    <p class="snippet-text">OK, so images can get quite complicated as we have a few variables to work with! For example the image below has had a caption entered</p>
                                </div>
                            </div>



                        </div>

                    </div>

                    <div class="snippet-container">

                        <div class="snippet-content clearfix nopadding">

                            <div class="snippet-heading">
                                <h3><a href="" title="">නවතම පුවත්</a></h3>
                            </div>
                            <div class="clearfix infoDiv">
                                <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                                <div class="right col-md-2 nopadding"><i class="fa fa-comments" aria-hidden="true"> 12</i></div>
                            </div>

                            <div class="imgDiv col-md-4 nopadding">
                                <a href="" title="">
                                    <img class="img-responsive" width="100%" src="https://placeimg.com/320/320/people" alt="Chania">
                                </a>
                            </div>

                            <div class="col-md-8 clearfix nopadding">


                                <div class="snippet-text-div">
                                    <p class="snippet-text">OK, so images can get quite complicated as we have a few variables to work with! For example the image below has had a caption entered</p>
                                </div>
                            </div>



                        </div>

                    </div>

                    <div class="read-more-link">
                        <a class="" href="" title="">More Articles...</a>
                    </div>

                </div>

                <div class="right top-feature-heading-wrapper col-md-4">

                    <div class="snippet-container">

                        <div class="snippet-content clearfix nopadding">
                            <div class="snippet-heading">
                                <h3><a href="" title="">නවතම පුවත්</a></h3>
                            </div>

                            <div class="clearfix infoDiv">
                                <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                                <div class="right col-md-2 nopadding"><i class="fa fa-comments" aria-hidden="true"> 12</i></div>
                            </div>

                            <div class="imgDiv col-md-4 nopadding">
                                <a href="" title="">
                                    <img class="img-responsive" width="100%" src="https://placeimg.com/320/320/people" alt="Chania">
                                </a>
                            </div>

                            <div class="col-md-8 clearfix nopadding">





                                <div class="snippet-text-div">
                                    <p class="snippet-text">OK, so images can get quite complicated as we have a few variables to work with! For example the image below has had a caption entered</p>
                                </div>
                            </div>



                        </div>

                    </div>

                    <div class="snippet-container">

                        <div class="snippet-content clearfix nopadding">
                            <div class="snippet-heading">
                                <h3><a href="" title="">නවතම පුවත්</a></h3>
                            </div>

                            <div class="clearfix infoDiv">
                                <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                                <div class="right col-md-2 nopadding"><i class="fa fa-comments" aria-hidden="true"> 12</i></div>
                            </div>


                            <div class="czol-md-8 clearfix nopadding">

                                <div class="snippet-text-div">
                                    <p class="snippet-text">OK, so images can get quite complicated as we have a few variables to work with! For example the image below has had a caption entered</p>
                                </div>
                            </div>



                        </div>

                    </div>

                    <div class="read-more-link">
                        <a class="" href="" title="">More Articles...</a>
                    </div>

                </div>

            </div>
        </div>

    </section>
    <!---->



    <section  class="container home-page-adv-section">
        <div class="row home-page-category-news-section-row category-feature-heading-wrapper" style="margin-bottom: 10px">
            <div class="col-md-4"><div class=""><img class="img-responsive" src="https://dummyimage.com/360x125&text=Advertisement" alt="Chania"></div></div>
            <div class="col-md-4"><div class=""><img class="img-responsive" src="https://dummyimage.com/360x125&text=Advertisement" alt="Chania"></div></div>
            <div class="col-md-4"><div class=""><img class="img-responsive" src="https://dummyimage.com/360x125&text=Advertisement" alt="Chania"></div></div>
        </div>
    </section>

    <section  class="container v2 home-page-category-news-section" id="news-cat-6">


        <div class="row home-page-category-news-section-row category-feature-heading-wrapper">
            <div class="col-md-12 home-page-category-news-section-div content-div">

                <div class="category-feature-heading">
                    <h2><a href="" title="">DD3 නවතම පුවත්</a></h2>
                    <div  class="category-feature-heading-img" style="background-image: url('https://placeimg.com/360/400/rand');">
                    </div>
                </div>

            </div>
        </div>


        <div class="row home-page-category-news-section-row category-feature-heading-wrapper">
            <div class="home-page-category-news-section-div content-div">

                <div  class="left top-feature-heading-wrapper col-md-2">
                    <div id="" class="advertisement-half-div">
                        <img class="img-responsive" src="https://dummyimage.com/360x700&text=Advertisement" alt="Chania">
                    </div>
                </div>

                <div class="middle top-feature-heading-wrapper col-md-4">

                    <div class="snippet-container">

                        <div class="snippet-content clearfix nopadding">
                            <div class="snippet-heading">
                                <h3><a href="" title="">නවතම පුවත්</a></h3>
                            </div>

                            <div class="clearfix infoDiv">
                                <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                                <div class="right col-md-2 nopadding"><i class="fa fa-comments" aria-hidden="true"> 12</i></div>
                            </div>

                            <div class="imgDiv col-md-4 nopadding">
                                <a href="" title="">
                                    <img class="img-responsive" width="100%" src="https://placeimg.com/320/320/people" alt="Chania">
                                </a>
                            </div>

                            <div class="col-md-8 clearfix nopadding">





                                <div class="snippet-text-div">
                                    <p class="snippet-text">OK, so images can get quite complicated as we have a few variables to work with! For example the image below has had a caption entered</p>
                                </div>
                            </div>



                        </div>

                    </div>

                    <div class="snippet-container">

                        <div class="snippet-content clearfix nopadding">

                            <div class="snippet-heading">
                                <h3><a href="" title="">නවතම පුවත්</a></h3>
                            </div>
                            <div class="clearfix infoDiv">
                                <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                                <div class="right col-md-2 nopadding"><i class="fa fa-comments" aria-hidden="true"> 12</i></div>
                            </div>

                            <div class="imgDiv col-md-4 nopadding">
                                <a href="" title="">
                                    <img class="img-responsive" width="100%" src="https://placeimg.com/320/320/people" alt="Chania">
                                </a>
                            </div>

                            <div class="col-md-8 clearfix nopadding">


                                <div class="snippet-text-div">
                                    <p class="snippet-text">OK, so images can get quite complicated as we have a few variables to work with! For example the image below has had a caption entered</p>
                                </div>
                            </div>



                        </div>

                    </div>

                    <div class="read-more-link">
                        <a class="" href="" title="">More Articles...</a>
                    </div>

                </div>

                <div class="right top-feature-heading-wrapper col-md-4">

                    <div class="snippet-container">

                        <div class="snippet-content clearfix nopadding">
                            <div class="snippet-heading">
                                <h3><a href="" title="">නවතම පුවත්</a></h3>
                            </div>

                            <div class="clearfix infoDiv">
                                <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                                <div class="right col-md-2 nopadding"><i class="fa fa-comments" aria-hidden="true"> 12</i></div>
                            </div>

                            <div class="imgDiv col-md-4 nopadding">
                                <a href="" title="">
                                    <img class="img-responsive" width="100%" src="https://placeimg.com/320/320/people" alt="Chania">
                                </a>
                            </div>

                            <div class="col-md-8 clearfix nopadding">





                                <div class="snippet-text-div">
                                    <p class="snippet-text">OK, so images can get quite complicated as we have a few variables to work with! For example the image below has had a caption entered</p>
                                </div>
                            </div>



                        </div>

                    </div>

                    <div class="snippet-container">

                        <div class="snippet-content clearfix nopadding">
                            <div class="snippet-heading">
                                <h3><a href="" title="">නවතම පුවත්</a></h3>
                            </div>

                            <div class="clearfix infoDiv">
                                <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                                <div class="right col-md-2 nopadding"><i class="fa fa-comments" aria-hidden="true"> 12</i></div>
                            </div>


                            <div class="czol-md-8 clearfix nopadding">

                                <div class="snippet-text-div">
                                    <p class="snippet-text">OK, so images can get quite complicated as we have a few variables to work with! For example the image below has had a caption entered</p>
                                </div>
                            </div>



                        </div>

                    </div>

                    <div class="read-more-link">
                        <a class="" href="" title="">More Articles...</a>
                    </div>

                </div>


                <div  class="left top-feature-heading-wrapper col-md-2">
                    <div id="" class="advertisement-half-div">
                        <img class="img-responsive" src="https://dummyimage.com/360x700&text=Advertisement" alt="Chania">
                    </div>
                </div>

            </div>
        </div>

    </section>
    <!---->





<?php include 'footer.php';?>