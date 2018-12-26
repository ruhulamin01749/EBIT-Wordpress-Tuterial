    <!-- Begin #services-section -->
    <section id="services" class="services-section section-global-wrapper">
        <div class="container">
            <div class="row">
                <div class="services-header">
                    <h3 class="services-header-title">Our Mission</h3>
                    <p class="services-header-body"><em> Things we provide in Office </em>  </p><hr>
                </div>
            </div>
      
            <!-- Begin Services Row 1 -->
            <div class="row services-row services-row-head services-row-1">

                        <?php 
                            $ebit_post = null;
                            $ebit_post = new WP_Query(
                                array(
                                    'post_type'=>'services',
                                    'posts_per_page'=>-1,
                                    'order'=>'ASC'
                                    )
                                );
                            if($ebit_post->have_posts()){
                                while($ebit_post->have_posts()){
                                    $x++;
                                    $ebit_post->the_post();
                                    $service_icon = get_post_meta(get_the_ID(), '_office-master_service_icon', true);
                                    $service_desc = get_post_meta(get_the_ID(), '_office-master_service_desc', true);
                                    $service_link = get_post_meta(get_the_ID(), '_office-master_service_link', true);
                                    $service_link_title = get_post_meta(get_the_ID(), '_office-master_service_link_title', true);
                                    $animation_class = get_post_meta(get_the_ID(), '_office-master_animation_class', true);
                        ?>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="services-group wow animated <?php echo $animation_class; ?>" data-wow-offset="40">
                                <p class="services-icon"><span class="fa <?php echo $service_icon; ?> fa-5x"></span></p>
                                <h4 class="services-title"><?php the_title(); ?></h4>
                                <p class="services-body"><?php echo $service_desc; ?></p>
                                <p class="services-more"><a href="<?php echo $service_link; ?>"><?php echo $service_link_title; ?></a></p>
                            </div>
                        </div>
                        <?php
                                }
                            }else{
                                echo "No post";
                            }
                        ?>

            </div>
            <!-- End Serivces Row 1 -->
    
        </div>      
    </section>