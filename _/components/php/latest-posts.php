            		<div class="loop posts row latest-posts">
                  
                  <h3 class="latest-post-label">Latest Posts</h3>

                  <?php

                    $postcount = 1;

                    while($postcount<=6) { ?>

                    <div class="col col-lg-4">
                      <div class="thumbnail post-thumbnail">
                        <div class="thumb-wrapper">
                          <img src="images/post-thumbnail-01.jpg" alt="Alternate Text" class="img-responsive hidden-print">
                          <a class="cat-label" href="category.php"><span class="label label-default category-label">Category Name</span></a>
                        </div>
                        <div class="caption">
                          <h3><a href="single.php">The Quick Brown Fox Jumped over the Lazy Dogs</a></h3>
                          <p>Borem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                          consequat.</p>
                        </div><!-- caption -->
                        <div class="post-meta">
                          <p><a href="#"><span class="glyphicon glyphicon-user"></span> Jitendra</a> <a href="#" class="pull-right"><span class="glyphicon glyphicon-calendar"></span> 30th Oct 2013</a></p>
                        </div><!-- post meta -->
                      </div><!-- thumbnail -->
                    </div><!-- col -->

                  <?php

                    $postcount++;

                    } ?>
            		</div><!-- loop latest posts -->