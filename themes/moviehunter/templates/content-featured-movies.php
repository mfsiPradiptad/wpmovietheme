<?php
$args = array (
    'post_type' => 'movies',
    'post_status' => 'publish',
    'posts_per_page' => '6',
    'meta_key' => 'featured_movies_hidden',
    'meta_value' => '1'
);

$result = new WP_Query( $args );
if ( $result->have_posts() ):
?>
    <div class="general">
        <div class="row row-mod">
            <div class="col-sm-12">
                <h4 class="latest-text w3_latest_text">Featured Movies</h4> 
                <p class="see-all pull-right"><a href="#">See All</a></p>
            </div>
        </div>
        <div class="container">
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
                        <div class="w3_agile_featured_movies">
                            
                        <?php
                            while ($result->have_posts() ): $result->the_post();
                        ?>
                            <div class="col-md-2 w3l-movie-gride-agile">
                                <?php 
                                if ( has_post_thumbnail( $post->ID ) ) { 
                                    $url =  get_the_post_thumbnail_url($post->ID, 'movie-thumb' );
                                } else {
                                    $url = get_bloginfo('template_directory') . '/assets/dist/images/blanck-movie.jpg';
                                }
                                ?>
                                <a href="<?php echo the_permalink() ?>" class="hvr-shutter-out-horizontal">
                                    <img src="<?php echo $url; ?>" title="album-name" class="img-responsive" alt="<?php echo $post->the_title; ?>"/>
                                    <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                </a>
                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                    <div class="w3l-movie-text">
                                        <h6><a href="<?php echo the_permalink() ?>"><?php echo $post->the_title; ?></a></h6>							
                                    </div>
                                    <div class="mid-2 agile_mid_2_home">
                                        <p>2016</p>
                                        <div class="block-stars">
                                            <ul class="w3l-ratings">
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="ribben">
                                    <p>NEW</p>
                                </div>
                            </div>

                        <?php
                            endwhile;
                        ?>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>