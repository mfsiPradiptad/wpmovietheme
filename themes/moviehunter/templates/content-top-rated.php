<div class="general">
    <div class="row row-mod">
        <div class="col-sm-12">
            <h4 class="latest-text w3_latest_text">Top Rated</h4> 
            <p class="see-all pull-right"><a href="#">See All</a></p>
        </div>
    </div>
    <div class="container">
        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
            <div id="myTabContent" class="tab-content">
                <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
                    <div class="w3_agile_featured_movies">
                        <?php get_template_part( 'templates/content', 'movies-row' );?>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 