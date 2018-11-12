

<aside class=" clearfix">
    <div class="snippet-wrapper-div nopadding">

        <div class="row">
            <div class="col-md-12">
                <div class="heading-wrapper ">
                    <div  class="heading">
                        <h2><a href="" title="">නවතම පුවත</a></h2>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="side-image snippet-container">

                    <div class="snippet-heading">
                        <h3><a href="" title="">එක්සත් ජාතීන්ගේ සංවිධානයේ සහයත් ජනාධිපතිට</a></h3>
                    </div>

                    <div class="clearfix infoDiv">
                        <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                        <div class="right col-md-2 nopadding"><i class="fa fa-comments" aria-hidden="true"> 42</i></div>
                    </div>


                    <div class="snippet-content">
                        <div class="topImgDiv col-md-4 nopadding">
                            <a href="" title="">
                                <img class="img-responsive" width="100%" src="https://placeimg.com/320/300/nature" alt="Chania">
                            </a>
                        </div>

                        <div class="col-md-8 nopadding">
                            <div class="snippet-text-div">
                                <p class="snippet-text">ඉදිරි මහ මැතිවරණයට අදාළ නාමයෝජනා කැඳවීමේ
                                    කටයුතු මේ මස 19දා ආරම්භ කිරීමට නියමිතව ඇතැයි මැතිවරණ කොමිෂන් සභාව
                                    පවසයි. ඒ අනුව ලබන 19දා සිට 26 වනදා තෙක් කාලය තුළ...</p>
                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </div>
    </div>
</aside>

<div class="row">
    <div class="col-md-12">
        <a href="" title="">
            <img class="img-responsive" width="100%" src="https://dummyimage.com/320x125&text=Advertisement" alt="Chania">
        </a>
    </div>
</div>











<?php
for ($i=0;$i<2;$i++):
    $t=0;
    $cls = ($i==($i-1))?'last':'';

    $heading = ($i==0)?'එසැනින් පුවත්':'එතෙර පුවත්';


// var_dump ($t);
?>
    <aside class="<?php echo $cls;?> clearfix">
        <div class="snippet-wrapper-div">

            <div class="row">
                <div class="col-md-12">
                    <div class="heading-wrapper ">
                        <div  class="heading">
                            <h2><a href="" title=""><?php echo $heading;?></a></h2>
                        </div>
                    </div>
                </div>
            </div>

            <?php

            $x = ($i==0)?15:3;

            for ($j=0;$j<$x;$j++):
            $t=0;
            $cls2 = ($j==($j-1))?'last':'';
            // var_dump ($t);
            ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="side-image snippet-container">

                        <div class="snippet-heading">
                            <h3><a href="" title=""><?php echo $j+1;?> ජාතීන්ගේ සංවිධානයේ සහයත් ජනාධිපතිට</a></h3>
                        </div>

                        <div class="clearfix infoDiv">
                            <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                            <div class="right col-md-2 nopadding"><i class="fa fa-comments" aria-hidden="true"> 42</i></div>
                        </div>


                        <div class="snippet-content">
                            <div class="topImgDiv col-md-4 nopadding">
                                <a href="" title="">
                                    <img class="img-responsive" width="100%" src="https://placeimg.com/320/300/nature" alt="Chania">
                                </a>
                            </div>

                            <div class="col-md-8 nopadding">
                                <div class="snippet-text-div">
                                    <p class="snippet-text">111 OK, so images can get quite complicated as we have a few variables to</p>
                                </div>
                            </div>
                        </div>




                    </div>
                </div>
            </div>
            <?php endfor;?>
















            <div class="read-more-link">
                <a class="" href="" title="">Read More</a>
            </div>

        </div>
    </aside>
<?php endfor;?>

<!--

<aside class="clearfix">
    <div class="snippet-wrapper-div">

        <div class="row">
            <div class="col-md-12">
                <div class="heading-wrapper ">
                    <div  class="heading">
                        <h2><a href="" title="">Video පුවත්</a></h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="video snippet-container">

                    <div class="snippet-heading">
                        <h3><a href="" title="">මෛත්‍රී-මහින්ද සම්මුති ආණ්ඩුවක්</a></h3>
                    </div>

                    <div>
                        <div class="video clearfix infoDiv">
                            <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                        </div>
                    </div>

                    <div class="snippet-content nopadding">

                        <div class="videoWrapper">
                            <iframe width="" height="" frameborder="0" src="http://player.vimeo.com/video/4240369?color=ffffff" style="border:0;"></iframe>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="snippet-container">

                    <div class="snippet-heading">
                        <h3><a href="" title="">නීතිපති දෙපාර්තමේන්තුවට එස්ටීඑෆ් ආරක්ෂාව</a></h3>
                    </div>

                    <div>
                        <div class="video clearfix infoDiv">
                            <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                        </div>
                    </div>

                    <div class="snippet-content nopadding">

                        <div class="videoWrapper">
                            <iframe width="" height="" src="http://www.youtube.com/embed/xDMP3i36naA" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="read-more-link">
            <a class="" href="" title="">Read More</a>
        </div>




    </div>
</aside>

-->