          <section class="sidebar col col-lg-4">

      			<div class="sidebar-content">

      			<?php
	              $currentFile = $_SERVER["PHP_SELF"];
	              $parts = Explode('/', $currentFile);
	              if ($parts[count($parts) - 1] == "coupon.php") { 
                
            			include "_/components/php/sidebar-widget-couponsubscribe.php";
            		}
            		else if ($parts[count($parts) - 1] == "review.php") {

            			include "_/components/php/sidebar-widget-reviewsubscribe.php";
            		}
            		else
            		{
						include "_/components/php/sidebar-widget-subscribe.php";
            		}
				?>

	              <?php include "_/components/php/sidebar-widget-socialcounter.php"; ?>

	            <?php
	              $currentFile = $_SERVER["PHP_SELF"];
	              $parts = Explode('/', $currentFile);
	              if ($parts[count($parts) - 1] == "index.php") { 
                
            			include "_/components/php/sidebar-widget-authorbox.php";
            		}            		
				      ?>

	              <?php include "_/components/php/sidebar-widget-advertise.php"; ?>

                <?php include "_/components/php/sidebar-widget-gpluspage.php"; ?>

                <?php include "_/components/php/sidebar-widget-fb.php"; ?>

	              <?php include "_/components/php/sidebar-widget-tabber.php"; ?>

      			</div><!-- sidebar content -->
            
          </section><!-- sidebar -->