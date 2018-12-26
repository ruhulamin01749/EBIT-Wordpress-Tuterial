<?php get_header(); ?>
    <?php
        $ebit_post = new WP_Query(array(
            'post_type'=>'page',
            'posts_per_page'=>-1,
            ));
        if ($ebit_post->have_posts()) {
            while($ebit_post->have_posts()){
            $ebit_post->the_post();
            if(get_the_ID() == 12){
            $post_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'full');
            ?>
                <div class="row container-kamn">
        <img src="<?php echo $post_thumbnail[0]; ?>" class="blog-post" alt="Feature-img" align="right" width="100%"> 
    </div>
       <?php
            }
        }
       }else{
        echo "No post";
       } 
       wp_reset_postdata();

    ?>
    <!-- End Header -->
    <!-- Main Container -->
    <div id="banners"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-9"> 
                <?php
                    if(have_posts()){
                        while(have_posts()){
                            the_post();
                            $post_icon = get_post_meta(get_the_ID(),'_office-master_post_icon',true);
                ?>
                                    <div class="blog-post">
                        <h1 class="blog-title">
                            <i class="fa <?php echo $post_icon; ?>"></i>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h1>
                        <br>
                        <?php the_post_thumbnail('post-img'); ?>
                        <br>
                        <?php echo cExcerpt(50, 'Continue Reading'); ?>
                        <div>
                            <span class="badge">Posted <?php echo get_the_date('Y-m-d H:i:s'); ?></span>
                            <div class="pull-right">
                            <?php the_tags('<span class="label label-default">','</span><span class="label label-default">','</span>'); ?>
                            </div>         
                        </div>
                    </div>
                    <hr>
                <?php
                        }
                        the_posts_pagination(array(
                                'prev_text'=>'«',
                                'next_text'=>'»',
                                'mid_size'=>3

                            ));
                    }else{
                        echo "No Post";
                    }
                ?>
                </div>

                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Sign in </strong></h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" action="<?php echo site_url(); ?>/wp-login.php" method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Username</label>
                                    <input type="text" class="form-control" style="border-radius:0px" id="exampleInputEmail1" placeholder="Enter Username" name="log">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password <a href="<?php echo site_url(); ?>/wp-login.php?action=lostpassword">(forgot password)</a></label>
                                    <input type="password" class="form-control" style="border-radius:0px" id="exampleInputPassword1" placeholder="Password" name="pwd">
                                </div>
                                <input type="hidden" name="redirect_to" value="<?php echo site_url(); ?>/blog">
                                <button name="wp-submit" type="submit" class="btn btn-sm btn-default">Sign in</button>
                            </form>
                        </div>
                    </div>

                    <div id="carousel-1" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                        <?php 
                            $ebit_post = null;
                            $ebit_post = new WP_Query(
                                array(
                                    'post_type'=>'slider',
                                    'posts_per_page'=>-1,
                                    )
                                );
                            $x = 0;

                            if($ebit_post->have_posts()){
                                while($ebit_post->have_posts()){
                                    $x++;
                                    $ebit_post->the_post();
                        ?>
                            <div class="item <?php if($x==1){echo "active";} ?>">
                                <?php the_post_thumbnail('post-slider-img'); ?>
                            </div>
                        <?php
                                }
                            }else{
                                echo "No post";
                            }
                            wp_reset_postdata();
                        ?>

                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                        <?php 
                            for($i=0;$i<$x;$i++){
                        ?>
                            <li data-target="#carousel-1" data-slide-to="<?php echo $i; ?>" class="<?php if($i==0){echo 'active';} ?>"></li>
                        <?php } ?>
                        </ol>

                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-1" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-1" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                    <div class="test_widgets">
                        <?php 
                            if( !dynamic_sidebar('office_master_custom_sidebar')){
                                echo "No post";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
       
        <!--End Main Container -->

<?php get_footer(); ?>