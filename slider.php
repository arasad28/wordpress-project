<div class="main_wrap slider_bgc">

<div class="wrap">
	<section>
	<div id="slider_wrapper">
		<div class="slider-wrapper theme-dark">
            <div id="slider" class="nivoSlider">

                <?php 


                $cusslider =new WP_Query(
                array(
                    'post_type'  =>'customslider',
                )

                );




                while($cusslider->have_posts()) :$cusslider->the_post(); ?>

                  <?php the_post_thumbnail(); ?>

                 <?php endwhile;
                 ?>
                 
                
               
            </div>
          
        </div>

	</div>
</section>
</div>

</div>
