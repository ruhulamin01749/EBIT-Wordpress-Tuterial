<?php 
/* Template Name: For Contact page */
    get_header(); 
?>
            <!-- Main Container -->

        <div class="container-fluid-kamn">
            <div class="row">
                <div>
                    <iframe width="100%" height="450px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo $office_master['map_url']; ?>"></iframe>
                    <br />
                </div>
                <div class="col-lg-4 col-lg-offset-1">
                    <h4><?php echo $office_master['address_title']; ?></h4>
                    <?php echo $office_master['full_address']; ?>
                    <br>
                    <br>
                    <p class="lead"><?php echo $office_master['social_title']; ?></p><hr>
                    <?php 
                        if($office_master['social_option']){
                            foreach ($office_master['social_option'] as $single) {
                    ?>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <a href="<?php echo $single['url']; ?>"><img src="<?php echo $single['image']; ?>" alt=""></a>
                        <?php echo $single['title']; ?>
                    </div>
                    <?php
                            }
                        }
                    ?>

                    <br>
                </div>
                <div class="col-lg-5">
                    <div class="feedback-form">
          
                        <div id="contact-response"></div>
                        <?php echo do_shortcode('[contact-form-7 id="131" title="Contact Form"]'); ?>
                    </div> 
                </div>
            </div>
        </div>    
            
    <!--End Main Container -->
 <?php get_footer(); ?>
