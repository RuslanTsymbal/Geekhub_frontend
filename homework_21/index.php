<?php /*
Template Name: Home
*/ ?>
<?php get_header(); ?>
<section id="wrapper">
    <div class="container-fluid row">
        <section id="content-left">
            <div class="carousel-top">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="http://blog/wp-content/uploads/2016/03/foto-5.jpg" alt="foto-1">
                        </div>
                        <div class="item">
                            <img src="http://blog/wp-content/uploads/2016/03/foto-4.jpg" alt="foto-2">
                        </div>
                        <div class="item">
                            <img src="http://blog/wp-content/uploads/2016/03/foto-6.jpg" alt="foto-3">
                        </div>
                        ...
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
                <div class="carousel-text">
                    <h2>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</h2>
                    <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris
                        vitae erat consequat a</p>
                </div>
            </div><!--.carousel-->
            <div class="dlog-post">
                <div class="title-dlog-post">
                    <h3><?php echo get_cat_name(2); ?></h3>
                </div>
                <div class="dlog-post-content">
                    <?php query_posts('cat=2&showposts=5'); ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="dlog-post-text">
                            <div class="dlog-post-date">
                                <div class="post-date-within">
                                    <span>27</span><span>january</span>
                                </div>
                            </div>
                            <div class="post-text">
                                <h4><?php the_title(); ?></h4>
                                <div class="comment">
                                    <ul>
                                        <li><a href="#"
                                               class="fa fa-comment"><?php comments_popup_link('0', '1', '%'); ?><span>comments</span></a>
                                        </li>
                                        <li><a href=" http://blog/category-3/ " class="fa fa-folder-open"><span>Category 3</span></a>
                                        </li>
                                    </ul>
                                </div>
                                <?php the_excerpt(); ?>
                                <div class="reading">
                                    <span><a href="<?php the_permalink(); ?>">Continue Reading</a></span>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                <div class="pagination-page">
                    <ul class="pagination">
                        <?php if (function_exists('wp_pagenavi')) {
                            wp_pagenavi();
                        } ?>
                    </ul>
                </div>
        </section><!--#content-->

        <?php get_sidebar(); ?>
        <?php get_footer(); ?>


