<footer>
  <section class="footer">
    <div class="footer_grid container">
            
      <div class="footer_grid_column-1">
        <!--******************************* FOOTER LOGO *******************************************-->

        <?php 
        $image = get_field('footer_logo', 'option');

        if (!empty($image)): ?>

          <a href="<?php the_permalink(6); ?>"><img class="footer_grid_column-1_footer-logo" src="<?php echo esc_url($image["url"]); ?>" alt="<?php echo esc_attr($image["alt"]); ?>" /></a>
        <?php endif; ?>
        
        <p class="footer_grid_column-1_p"><?php the_field('footer_logo_description', 'option'); ?></p>
        
        <div class="footer_grid_column-1_social-icons">

        <!--******************************* FACEBOOK LINK *******************************************-->
<!-- 
          <?php 
          $link = get_field('facebook_link', 'option');

          if( $link ): ?>
        
          <a class="" href="<?php echo esc_url( $link ); ?>" target="_blank"><img class="" src="<?php echo get_template_directory_uri() .
                          "/img/Social_Icons_Virtually_Facebook.png"; ?>" alt="" /></a>
          <?php endif; ?> -->

        <!--******************************* TWITTER LINK *******************************************-->

          <!-- <?php
          $link = get_field('twitter_link', 'option');
          
          if( $link ): ?>
            <a class="" href="<?php echo esc_url( $link ); ?>" target="_blank"><img class="" src="<?php echo get_template_directory_uri() . "/img/Social_Icons_Virtually_Twitter.png"; ?>" alt="" /></a>
          <?php endif; ?> -->

        <!--******************************* LINKEDIN LINK *******************************************-->


          <!-- <?php
          $link = get_field('linkedin_link', 'option');
          
          if( $link ): ?>
            <a class="" href="<?php echo esc_url( $link ); ?>" target="_blank"><img class="" src="<?php echo get_template_directory_uri() . "/img/Social_Icons_Virtually_LinkedIn.png"; ?>" alt="" /></a>
          <?php endif; ?> -->

        <!--******************************* YOUTUBE LINK *******************************************-->


          <!-- <?php
          $link = get_field('youtube_link', 'option');
          
          if( $link ): ?>
            <a class="" href="<?php echo esc_url( $link ); ?>" target="_blank"><img class="" src="<?php echo get_template_directory_uri() . "/img/Social_Icons_Virtually_YouTube.png"; ?>" alt="" /></a>
          <?php endif; ?> -->

        <!--******************************* TELEPHONE LINK *******************************************-->

          <!-- <?php
          $link = get_field('telephone_link', 'option');

      
          if( $link ): ?>
            <a class="" href="tel:<?php echo esc_url( $link ); ?>" target="_blank"><img class="" src="<?php echo get_template_directory_uri() . "/img/Social_Icons_Virtually_Call.png"; ?>" alt="" /></a>
          <?php endif; ?> -->
          
        </div>
      </div>

      
      <div class="footer_grid_column-2 text-white">
        <h2 class="footer_grid_column-2_about text-uppercase"><a class="text-white" href="<?php the_permalink(24); ?>">About</a></h2>
        <h2 class="footer_grid_column-2_solutions text-uppercase"><a class="text-white" href="<?php the_permalink(10); ?>">Solutions</a></h2>
        <p><a class="text-white" href="<?php the_permalink(116); ?>">How the System Works</a></p>
        <p><a class="text-white" href="<?php the_permalink(180); ?>">Our Process</a></p>
        <p><a class="text-white" href="<?php the_permalink(184); ?>">Who We Work With</a></p>
        <h2 class="footer_grid_column-2_evidence text-uppercase"><a class="text-white" href="<?php the_permalink(14); ?>">Evidence</a></h2>
        <p><a class="text-white" href="<?php the_permalink(97); ?>">Case Studies</a></p>
        <p><a class="text-white" href="<?php the_permalink(142); ?>">Thought Leadership</a></p>
      </div> 

      <div class="footer_grid_column-3 text-white">
        <h2 class="footer_grid_column-3_demo text-uppercase"><a class="text-white" href="<?php the_permalink(16); ?>">Request a Demo</a></h2>
        <h2 class="footer_grid_column-3_contact text-uppercase"><a class="text-white" href="<?php the_permalink(16); ?>">Contact</a></h2>
        <p class="footer_grid_column-3_career"><a class="text-white" href="<?php the_permalink(499); ?>">Careers</a></p>

          
          <?php
          $link = get_field('address_link', 'option');

          if($link): ?>
        
            <p><a href="<?php echo esc_url($link) ?>" target="_blank" class="text-white">1 South Park Circle, Suite 200 Charleston, SC 29464</a></p>
          <?php endif; ?>
       
        <div class="footer_grid_column-3_newsletter">
          <h2 class=" text-uppercase">Newsletter Signup</h2>
          <?php echo do_shortcode(
              '[gravityform id="2" title="false" description="false" ajax="true" tabindex="49" field_values="check=First Choice,Second Choice"]'
            ); ?>
        </div>
        
      </div>
      
    </div>
            
    </div> <!-- Container -->
  </section>

  <section class="footer_bottom">
    <div class="footer_bottom_grid container">
      <div class="footer_bottom_copy"><span>&copy;</span>
        <?php echo date("Y") ." " . get_bloginfo("name"); ?>. All Rights Reserved | Site by <a class="footer_bottom_tm" href="https://targetmarket.com" target="_blank">TargetMarket</a> 
      </div>
      
      <div class="footer_bottom_privacy">
            <a href="<?php echo get_permalink(
              3
            ); ?>">Privacy Policy</a>
                
      </div> 
            
      <div class="footer_bottom_tos">
                <a href="<?php echo get_permalink(271); ?>">
                    Terms of Service
                </a>
            </div>
        </div> 
  </section>

</footer>

    <?php wp_footer(); ?>

</body>
</html>