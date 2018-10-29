<?php include 'header.php';?>

<?php include 'navigation.php';?>



    <section  class="container" id="home-page-top-news-section">
        <div class="row home-page-top-news-section-row">

            <div class="clearfix content-div">
                <div class="clearfix ">








                    <div class="col-md-12 right-side-div">

                        <section  class="top-feature-news-container">
                            <div class="top-feature-content-div">
                                <div class="top-feature-wrapper">
                                    <div class="top-feature-div">


                                        <div class="normal-row clearfix">
                                            <div class="top-feature-heading-wrapper col-md-12">
                                                <div  class="top-feature-heading">
                                                    <h1><a href="" title="">Search</a></h1>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="normal-row clearfix">
                                            <div class="col-md-12 clearfix">

                                                <div class="default-content-div" style="">





                                                    <div class="default-content-div-inside clearfix" style="">


                                                        <div class="col-md-8">

                                                            <div class="row normal-news-feature-div">
                                                                <div class="col-md-12">
                                                                    <p>6873 Results found for 'ff'</p>
                                                                    <h2>Search results</h2>
                                                                </div>
                                                            </div>


                                                            <?php for ($i=0;$i<4;$i++):
                                                                $t=0;
                                                                $cls = ($i==2)?'last':'';

                                                                // var_dump ($t);
                                                            ?>

                                                            <div class="row normal-news-feature-div">
                                                                <div class="col-md-11">
                                                                    <div class="snippet-container ">


                                                                        <div class="snippet-heading">
                                                                            <h3><a href="" title="">නවතම පුවත්</a></h3>
                                                                        </div>

                                                                        <div class="snippet-content clearfix">

                                                                            <div class="col-md-3 nopadding">
                                                                                <a href="" title="">
                                                                                    <img class="img-responsive" width="100%" src="https://placeimg.com/320/275/nature" alt="Chania">
                                                                                </a>
                                                                            </div>

                                                                            <div class="col-md-9 nopadding">
                                                                                <div class="clearfix infoDiv">
                                                                                    <div class="left col-md-10 nopadding">2018 ඔක්තෝබර් මස 01 වන සඳුදා</div>
                                                                                    <div class="right col-md-2 nopadding"><i class="fa fa-comments" aria-hidden="true"> 42</i></div>
                                                                                </div>

                                                                                <div class="snippet-text-div">
                                                                                    <p class="snippet-text">ss OK, so images can get quite complicated as we have a few variables to work with! For example the image below has
                                                                                        had a caption entered OK, so images can get quite complicated as we have</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                        <div class="read-more-link">
                                                                            <a class="" href="" title="">Read More</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php endfor; ?>






                                                            <div class="row normal-news-feature-div">
                                                                <div class="col-md-11">
                                                                    <div class="snippet-container noImg">


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

                                                                        <div class="read-more-link">
                                                                            <a class="" href="" title="">Read More</a>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="row normal-news-feature-div">
                                                                <div class="col-md-10">


                                                                    <ul class="pagination pagination-lg">

                                                                        <li><a href="#">&laquo;</a></li>

                                                                        <li><a href="#">1</a></li>

                                                                        <li><a href="#">2</a></li>

                                                                        <li><a href="#">3</a></li>

                                                                        <li><a href="#">4</a></li>

                                                                        <li><a href="#">5</a></li>

                                                                        <li><a href="#">&raquo;</a></li>

                                                                    </ul>

                                                                </div>
                                                            </div>








                                                        </div>


                                                        <div class="col-md-4">

                                                            <div class="row normal-news-feature-div clearfix">
                                                                <div class="top-feature-heading-wrapper col-md-12">
                                                                    <div  class="top-feature-heading">
                                                                        <h2><a href="" title="">News Category</a></h2>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                            <form class="search-option">
                                                                <div class="form-group">
                                                                    <label class="control-label" for="keyword">Keyword</label>
                                                                    <input id="keyword" name="keyword" type="text" class="form-control">

                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="category" class="control-label">Category</label>
                                                                    <select id="category" name="category" class="select form-control">
                                                                        <option value="">category1</option>
                                                                        <option value="">category2</option>
                                                                        <option value="">category3</option>
                                                                    </select>
                                                                </div>


                                                                <div class="form-group">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <label class="control-label" for="from-date">Published From:</label>


                                                                            <input type="text" class="form-control news-from" id="news-from" placeholder="From Date" value="" name="news-from" onfocus="this.blur()" readonly="readonly">
                                                                            <span class="error"></span>




                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <label for="to-date" class="control-label">Published Up To:</label>

                                                                            <input type="text" class="form-control news-to" id="news-to" placeholder="To Date" value="" name="param_ibe_checkout" onfocus="this.blur()" readonly="readonly">
                                                                            <span class="error"></span>


                                                                        </div>
                                                                    </div>
                                                                </div>



                                                                <div class="form-group">
                                                                    <label for="news-sort-by" class="control-label">Sort By</label>

                                                                    <div class="checkbox">
                                                                        <label class="checkbox">
                                                                            <input type="radio" name="news-sort-by" value="relevance">
                                                                            Relevance
                                                                        </label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label class="checkbox">
                                                                            <input type="radio" name="news-sort-by" value="pdate-newest">
                                                                            Published Date (Newest)
                                                                        </label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label class="checkbox">
                                                                            <input type="radio" name="news-sort-by" value="pdate-oldest">
                                                                            Published Date (Oldest)
                                                                        </label>
                                                                    </div>

                                                                </div>


                                                                <div class="form-group">
                                                                    <button name="reset" type="reset" class="btn btn-danger">Reset</button>
                                                                    <button name="submit" type="submit" class="btn btn-primary">Refine Search</button>
                                                                </div>

                                                            </form>

                                                        </div>



                                                    </div>









                                                </div>
                                            </div>
                                        </div>









                                    </div>
                                </div>
                            </div>
                        </section>




                    </div>


                </div>
            </div>
        </div>

    </section>


<?php include 'footer.php';?>