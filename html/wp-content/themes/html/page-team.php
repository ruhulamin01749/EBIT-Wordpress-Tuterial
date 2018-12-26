<?php get_header(); ?>

	<?php
		if(have_posts()){
			the_post();
		$post_thumb = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_id()), 'full');
	?>
	<div class="row container-kamn">  
        <img src="<?php echo $post_thumb['0']; ?>" width="100%" class="blog-post" alt="Feature-img" align="right" width="100%"> 
    </div>
	<?php
		}
	?>
    <!-- Main Container -->
    <div id="banners"></div>
    <div class="container">
        <div class="row">
        <?php
        	$team_post = new wp_query(array(
        			'post_type'=>'team',
        			'posts_per_page'=>-1,
        			'order'=>'ASC'/*,
                    'team_category'=>'web-develper',
                    'team_tag'=>'first + second'*/
        		));
        	if($team_post->have_posts()){
        		while($team_post->have_posts()){
        			$team_post->the_post();
        			$designation = get_post_meta(get_the_ID(),'_office-master_team_member_designation',true);
        			$block_color = get_post_meta(get_the_ID(),'_office-master_blockquote_class',true);
        			$animation_class = get_post_meta(get_the_ID(),'_office-master_animation_class',true);
        ?>

            <div class="col-md-6">
                <div class="blockquote-box <?php echo $block_color; ?> animated wow <?php echo $animation_class; ?> clearfix">
                    <div class="square pull-left">
                        <!-- <img src="assets/img/team/member1.png" alt="Feature-img" height="80" width="100"> -->
                        <?php the_post_thumbnail('team-img'); ?>
                    </div>
                    <h4>
                        <?php the_title(); ?>
                    </h4>
                    <p>
                       <?php echo $designation; ?>
                    </p>
                </div>
            </div>

        <?php
        		}
        	}else{
        		echo 'No Post';
        	}
        ?>
        </div>
    </div>
    <!--End Main Container -->
<?php get_footer(); ?>