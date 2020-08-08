<?php

$this->registerJsFile('js/Site.js', ['depends' => [\app\assets\DashboardAsset::class]]);
$this->registerJsFile('js/AjaxBuilder.js', ['depends' => [\app\assets\DashboardAsset::class]]);
$this->registerJsFile('js/Movie-profile.js', ['depends' => [\app\assets\DashboardAsset::class]]);


$name = $movieInfo->Name;
$id = $movieInfo->Id;
$resolution = $movieInfo->Resolution;
$ageLimit = $movieInfo->Age_limit;
$releaseDate = $movieInfo->Release_date;
$length = $movieInfo->Length;
$storyline = $movieInfo->Storyline;
$directors = $movieInfo->directors;
$directorsone = $directors[0]->Name;
?>
<div id="content-sidebar-pro" data-movie-id="<?php echo $id; ?>">

    <div id="content-sidebar-image">
        <img src="http://via.placeholder.com/450x620" alt="Movie Poster">
    </div>

    <div class="content-sidebar-section">
        <h2 class="content-sidebar-sub-header"><?php echo $name; ?></h2>
        <ul class="progression-studios-slider-rating">
            <li><?php echo $ageLimit; ?></li><li><?php echo $resolution; ?></li>
        </ul>
    </div><!-- close .content-sidebar-section -->

    <div class="content-sidebar-section">
        <h4 class="content-sidebar-sub-header">Release Date</h4>
        <div class="content-sidebar-short-description"><?php echo $releaseDate; ?></div>
    </div><!-- close .content-sidebar-section -->

    <div class="content-sidebar-section">
        <h4 class="content-sidebar-sub-header">Length</h4>
        <div class="content-sidebar-short-description"><?php echo $length; ?></div>
    </div><!-- close .content-sidebar-section -->

    <div class="content-sidebar-section">
        <h4 class="content-sidebar-sub-header">Director</h4>
        <div class="content-sidebar-short-description"><?php echo $directorsone; ?></div>
    </div><!-- close .content-sidebar-section -->



    <div class="content-sidebar-section">
        <h2 class="content-sidebar-sub-header adjusted-recent-reviews">Recent Reviews</h2>
        <ul id="sidebar-reviews-pro">
            <li>
                <div
                        class="circle-rating-pro"
                        data-value="0.86"
                        data-animation-start-value="0.86"
                        data-size="32"
                        data-thickness="3"
                        data-fill="{
				          &quot;color&quot;: &quot;#42b740&quot;
				        }"
                        data-empty-fill="#def6de"
                        data-reverse="true"
                ><span style="color:#42b740;">8.6</span></div>
                <h6>Dan Cederholm</h6>
                <div class="sidebar-review-time">October 22, 2017</div>
                <div class="spoiler-review">Contains Spoiler</div>
                <p>They don't make many Sci-Fi films these days. This was a pleasant surprise all throughout the film. I really like this film.</p>
            </li>
            <li>
                <div
                        class="circle-rating-pro"
                        data-value="0.53"
                        data-animation-start-value="0.53"
                        data-size="32"
                        data-thickness="3"
                        data-fill="{
				          &quot;color&quot;: &quot;#ff4141&quot;
				        }"
                        data-empty-fill="#ffe1e1"
                        data-reverse="true"
                ><span style="color:#ff4141;">5.3</span></div>
                <h6>Jeff Seid</h6>
                <div class="sidebar-review-time">October 18, 2017</div>
                <p>Coming out of the theatres following my viewing of this film, I was confused. I couldn't decide whether I liked it or not.</p>
            </li>
            <li>
                <div
                        class="circle-rating-pro"
                        data-value="0.72"
                        data-animation-start-value="0.72"
                        data-size="32"
                        data-thickness="3"
                        data-fill="{
				          &quot;color&quot;: &quot;#42b740&quot;
				        }"
                        data-empty-fill="#def6de"
                        data-reverse="true"
                ><span style="color:#42b740;">7.2</span></div>
                <h6>Christian De Guzman</h6>
                <div class="sidebar-review-time">August 26, 2017</div>
                <div class="spoiler-review">Contains Spoiler</div>
                <p>I have been a cinema lover for years, read a lot of reviews on SKRN and everywhere, and never found the right movie to write my first review. I always thought I would wait for the movie.</p>
                <p>And this is it!</p>
            </li>
            <li>
                <div
                        class="circle-rating-pro"
                        data-value="0.9"
                        data-animation-start-value="0.9"
                        data-size="32"
                        data-thickness="3"
                        data-fill="{
				          &quot;color&quot;: &quot;#42b740&quot;
				        }"
                        data-empty-fill="#def6de"
                        data-reverse="true"
                ><span style="color:#42b740;">9.0</span></div>
                <h6>Jennifer Thomas</h6>
                <div class="sidebar-review-time">August 15, 2017</div>
                <p>'Oblivion’ was incredible. The visuals, the score, the acting, were all amazing. The plot is definitely one of the most original I've seen in a while</p>
            </li>
        </ul>
        <a href="#!" class="btn btn-green-pro btn-sm">See All Reviews</a>
    </div><!-- close .content-sidebar-section -->

</div><!-- close #content-sidebar-pro -->


<main id="col-main-with-sidebar">

    <div id="movie-detail-header-pro" style="background-image:url('http://via.placeholder.com/1442x775')">

        <div class="progression-studios-slider-more-options">
            <i class="fas fa-ellipsis-h"></i>
            <ul>
                <li><a href="#!">Add to Favorites</a></li>
                <li><a href="#!">Add to Watchlist</a></li>
                <li><a href="#!">Add to Playlist</a></li>
                <li><a href="#!">Share...</a></li>
                <li><a href="#!">Write A Review</a></li>
            </ul>
        </div>

        <a class="movie-detail-header-play-btn afterglow" href="#VideoLightbox-1"><i class="fas fa-play"></i></a>

        <video id="VideoLightbox-1"  poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg?v1" width="960" height="540">
            <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.mp4" type="video/mp4">
            <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.webm" type="video/webm">
        </video>

        <div id="movie-detail-header-media">
            <div class="dashboard-container">
                <h5>Media</h5>
                <div class="row">
                    <div class="col-6 col-md-4 col-lg-4">
                        <a class="movie-detail-media-link afterglow" href="#VideoLightbox-1">
                            <div class="movie-detail-media-image">
                                <img src="http://via.placeholder.com/500x300">
                                <span><i class="fas fa-play"></i></span>
                                <h6>Trailer</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-4">
                        <a class="movie-detail-media-link afterglow" href="#VideoLightbox-1">
                            <div class="movie-detail-media-image">
                                <img src="http://via.placeholder.com/500x300">
                                <span><i class="fas fa-play"></i></span>
                                <h6>Interview</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-4">
                        <a class="movie-detail-media-link" href="#!">
                            <div class="movie-detail-media-image">
                                <img src="http://via.placeholder.com/500x300">
                                <span><i class="fas fa-play"></i></span>
                                <h6>Movie Stills</h6>
                            </div>
                        </a>
                    </div>
                </div><!-- close .row -->
            </div><!-- close .dashboard-container -->
        </div><!-- close #movie-detail-header-media -->

        <div id="movie-detail-gradient-pro"></div>
    </div><!-- close #movie-detail-header-pro -->


    <div id="movie-detail-rating">
        <div class="dashboard-container">
            <div class="row">
                <div class="col-sm">
                    <h5>Rate True Blood</h5>

                    <div class="rating-pro">
                        <label>
                            <input type="radio" name="rating-pro" value="10" title="10 stars"> 10
                        </label>
                        <label>
                            <input type="radio" name="rating-pro" value="9" title="9 stars"> 9
                        </label>
                        <label>
                            <input type="radio" name="rating-pro" value="8" title="8 stars"> 8
                        </label>
                        <label>
                            <input type="radio" name="rating-pro" value="7" title="7 stars"> 7
                        </label>
                        <label>
                            <input type="radio" name="rating-pro" value="6" title="6 stars"> 6
                        </label>
                        <label>
                            <input type="radio" name="rating-pro" value="5" title="5 stars"> 5
                        </label>
                        <label>
                            <input type="radio" name="rating-pro" value="4" title="4 stars"> 4
                        </label>
                        <label>
                            <input type="radio" name="rating-pro" value="3" title="3 stars"> 3
                        </label>
                        <label>
                            <input type="radio" name="rating-pro" value="2" title="2 stars"> 2
                        </label>
                        <label>
                            <input type="radio" name="rating-pro" value="1" title="1 star"> 1
                        </label>
                    </div>

                </div>
                <div class="col-sm">
                    <h6>User Rating</h6>
                    <div
                            class="circle-rating-pro"
                            data-value="0.86"
                            data-animation-start-value="0.86"
                            data-size="40"
                            data-thickness="3"
                            data-fill="{
					          &quot;color&quot;: &quot;#42b740&quot;
					        }"
                            data-empty-fill="#def6de"
                            data-reverse="true"
                    ><span style="color:#42b740;">8.6</span></div>
                    <div class="clearfix"></div>
                </div>
            </div><!-- close .row -->
        </div><!-- close .dashboard-container -->
    </div><!-- close #movie-detail-rating -->

    <div class="dashboard-container">


        <div class="movie-details-section">
            <h2>Storyline</h2>
            <p><?php echo $storyline; ?> </p>
        </div><!-- close .movie-details-section -->

        <div class="movie-details-section">
            <h2>The Cast</h2>
            <div id="actors" class="row">
                <div class="col-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="item-listing-container-skrn">
                        <a href="#!"><img src="http://via.placeholder.com/507x672" alt="Cast"></a>
                        <div class="item-listing-text-skrn item-listing-movie-casting">
                            <h6><a href="#!">Robert Downey Jr.</a></h6>
                            <div class="movie-casting-sub-title">Tony Stark</div>
                        </div><!-- close .item-listing-text-skrn -->
                    </div><!-- close .item-listing-container-skrn -->
                </div><!-- close .col -->

                <div class="col-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="item-listing-container-skrn">
                        <a href="#!"><img src="http://via.placeholder.com/507x672" alt="Cast"></a>
                        <div class="item-listing-text-skrn item-listing-movie-casting">
                            <h6><a href="#!">Scarlett Johansson</a></h6>
                            <div class="movie-casting-sub-title">Black Widow</div>
                        </div><!-- close .item-listing-text-skrn -->
                    </div><!-- close .item-listing-container-skrn -->
                </div><!-- close .col -->

                <div class="col-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="item-listing-container-skrn">
                        <a href="#!"><img src="http://via.placeholder.com/507x672" alt="Cast"></a>
                        <div class="item-listing-text-skrn item-listing-movie-casting">
                            <h6><a href="#!">Chris Hemsworth
                                    Thor</a></h6>
                            <div class="movie-casting-sub-title">Tony Stark</div>
                        </div><!-- close .item-listing-text-skrn -->
                    </div><!-- close .item-listing-container-skrn -->
                </div><!-- close .col -->

            </div><!-- close .row -->
        </div><!-- close .movie-details-section -->


        <div class="movie-details-section">
            <h2>Similar Movies</h2>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="item-listing-container-skrn">
                        <a href="dashboard-movie-profile.html"><img src="http://via.placeholder.com/500x707" alt="Listing"></a>
                        <div class="item-listing-text-skrn">
                            <div class="item-listing-text-skrn-vertical-align"><h6><a href="dashboard-movie-profile.html">Bad Neighbors 2</a></h6>
                                <div
                                        class="circle-rating-pro"
                                        data-value="0.72"
                                        data-animation-start-value="0.72"
                                        data-size="32"
                                        data-thickness="3"
                                        data-fill="{
								          &quot;color&quot;: &quot;#42b740&quot;
								        }"
                                        data-empty-fill="#def6de"
                                        data-reverse="true"
                                ><span style="color:#42b740;">7.2</span></div>
                            </div><!-- close .item-listing-text-skrn-vertical-align -->
                        </div><!-- close .item-listing-text-skrn -->
                    </div><!-- close .item-listing-container-skrn -->
                </div><!-- close .col -->


                <div class="col-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="item-listing-container-skrn">
                        <a href="dashboard-movie-profile.html"><img src="http://via.placeholder.com/500x707" alt="Listing"></a>
                        <div class="item-listing-text-skrn">
                            <div class="item-listing-text-skrn-vertical-align"><h6><a href="dashboard-movie-profile.html">Star Wars: Rogue One</a></h6>
                                <div
                                        class="circle-rating-pro"
                                        data-value="0.86"
                                        data-animation-start-value="0.86"
                                        data-size="32"
                                        data-thickness="3"
                                        data-fill="{
								          &quot;color&quot;: &quot;#42b740&quot;
								        }"
                                        data-empty-fill="#def6de"
                                        data-reverse="true"
                                ><span style="color:#42b740;">8.6</span></div>
                            </div><!-- close .item-listing-text-skrn-vertical-align -->
                        </div><!-- close .item-listing-text-skrn -->
                    </div><!-- close .item-listing-container-skrn -->
                </div><!-- close .col -->

                <div class="col-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="item-listing-container-skrn">
                        <a href="dashboard-movie-profile.html"><img src="http://via.placeholder.com/500x707" alt="Listing"></a>
                        <div class="item-listing-text-skrn">
                            <div class="item-listing-text-skrn-vertical-align"><h6><a href="dashboard-movie-profile.html">The Imitation Game</a></h6>
                                <div
                                        class="circle-rating-pro"
                                        data-value="0.6"
                                        data-animation-start-value="0.6"
                                        data-size="32"
                                        data-thickness="3"
                                        data-fill="{
								          &quot;color&quot;: &quot;#ff4141&quot;
								        }"
                                        data-empty-fill="#ffe1e1"
                                        data-reverse="true"
                                ><span style="color:#ff4141;">6.0</span></div>
                            </div><!-- close .item-listing-text-skrn-vertical-align -->
                        </div><!-- close .item-listing-text-skrn -->
                    </div><!-- close .item-listing-container-skrn -->
                </div><!-- close .col -->
            </div><!-- close .row -->

        </div><!-- close .movie-details-section -->

    </div><!-- close .dashboard-container -->
</main>