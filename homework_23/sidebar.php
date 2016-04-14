 <div class="col-lg-4 col-md-5 col-sm-12">
                <aside class="blog-right">
                  <!-- Start Sidebar Single widget -->
                   <?php
                      if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(9) ) : endif; 
                      ?>
                  <!-- End Sidebar Single widget -->
                  <!-- Start Sidebar Single widget -->
                  <div class="single-widget">
                    <h2>Follow us on</h2>
                    <div class="follow-us">
                    <?php
                  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(7) ) : endif; 
                ?>
                    </div>
                  </div>
                  <!-- End Sidebar Single widget -->
                  <!-- Start Sidebar Single widget -->
                  <div class="single-widget">
                    <h2><?php echo get_cat_name(26);?></h2>
                    <div class="popular-post-widget">
                      <div class="media">
                          <div class="media-left">
                            <a href="blog-single.html">
                              <img class="media-object" src="http://rex/wp-content/uploads/2016/04/popular-post-img.jpg" alt="img">
                            </a>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading"><a href="blog-single.html">A lonely flower</a></h4>
                            <p>Sed ut perspiciatis omnis natus error sit voluptatem accusantium done.</p>
                          </div>
                      </div>
                      <div class="media">
                        <div class="media-left">
                          <a href="blog-single.html">
                            <img class="media-object" src="http://rex/wp-content/uploads/2016/04/popular-post-img.jpgg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="blog-single.html">A lonely flower</a></h4>
                          <p>Sed ut perspiciatis omnis natus error sit voluptatem accusantium done.</p>
                        </div>
                      </div>
                      <div class="media">
                        <div class="media-left">
                          <a href="blog-single.html">
                            <img class="media-object" src="http://rex/wp-content/uploads/2016/04/popular-post-img.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="blog-single.html">A lonely flower</a></h4>
                          <p>Sed ut perspiciatis omnis natus error sit voluptatem accusantium done.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Sidebar Single widget -->
                  <!-- Start Sidebar Single widget -->
                  <div class="single-widget">
                    <h2>Instagram feed</h2>
                    <div class="instagram-feed">
                      <div class="single-instagram-feed">
                        <img src="http://rex/wp-content/uploads/2016/04/instagram-feed-img.jpg" alt="img">
                      </div>
                      <div class="single-instagram-feed">
                        <img src="http://rex/wp-content/uploads/2016/04/instagram-feed-img.jpg" alt="img">
                      </div>
                      <div class="single-instagram-feed">
                        <img src="http://rex/wp-content/uploads/2016/04/instagram-feed-img.jpg" alt="img">
                      </div>
                    </div>
                  </div>
                  <!-- End Sidebar Single widget -->
                  <!-- Start Sidebar Single widget -->
                  <div class="single-widget">
                    <h2>Subscribe to newslater</h2>
                    <form class="blog-search">
                      <input type="text">
                      <button class="button button-default" data-text="Subscribe" type="submit"><span>Subscribe</span></button>
                    </form>
                  </div>
                  <!-- End Sidebar Single widget -->
                </aside>
              </div>