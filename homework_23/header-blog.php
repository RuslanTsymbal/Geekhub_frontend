<?php get_header();?>
 <body>
  <!-- BEGAIN PRELOADER -->
  <div id="preloader">
    <div class="loader">&nbsp;</div>
  </div>
  <!-- END PRELOADER -->

  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start menu section -->
  <section id="menu-area">
    <nav class="navbar navbar-default main-navbar" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO --> 
           <a class="navbar-brand logo" href="index.html">
            <?php  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : endif; 
            ?></a> </a>                      
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav main-nav menu-scroll">
            <li><a href="index.html">Home</a></li>                   
            <li class="active"><a href="blog-archive.html">BLOG</a></li>
          </ul>                            
        </div><!--/.nav-collapse -->
       <div class="search-area">
          <form action="">
            <?php
                  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : endif; 
                ?>
          </form>
        </div>         
      </div>          
    </nav> 
  </section>
  <!-- End menu section -->
  <!-- Start blog banner section -->
  <section id="blog-banner">
    <img src="http://rex/wp-content/uploads/2016/04/blog-banner.jpg" alt="img">
    <div class="blog-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="blog-banner-area">
              <h2><?php echo get_cat_name(27);?></h2>
              <ol class="breadcrumb">
                <li><a href="<?php var_dump(home_url('/'));?>">Home</a></li>                
                <li class="active"><?php echo get_cat_name(27);?></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End blog banner section -->
