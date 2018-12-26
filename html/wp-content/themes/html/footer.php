    <!-- Footer -->
    <?php global $office_master; ?>
    <!-- <footer style="background:<?php echo $office_master['footer_top_bg']; ?>">  -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3><i class="<?php echo $office_master['column_one_icon']; ?>"></i> <?php echo $office_master['column_one_title']; ?></h3>
                    <p class="footer-contact">
                        <?php echo $office_master['column_one_text']; ?>
                    </p>
                </div>
                <div class="col-md-4">
                    <h3><i class="<?php echo $office_master['column_two_icon']; ?>"></i> <?php echo $office_master['column_two_title']; ?></h3>
                    <?php 
                        if(is_array($office_master['column_two_link'])){
                        foreach ($office_master['column_two_link'] as $singlevalue) {
                    ?>  
                    <p><a href="<?php echo $singlevalue['url']; ?>"> <?php echo $singlevalue['title']; ?></a></p>
                    <?php } } ?>
                </div>
              <div class="col-md-4">
                <h3><i class="<?php echo $office_master['column_three_icon']; ?>"></i> <?php echo $office_master['column_three_title']; ?></h3>
                <div id="social-icons">
                    <?php 
                        if(is_array($office_master['column_three_social'])){
                        foreach ($office_master['column_three_social'] as $singlesocial) {
                    ?>  
                    <a href="<?php echo $singlesocial['url']; ?>" class="btn-group google-plus">
                        <i class="<?php echo $singlesocial['title']; ?>"></i>
                    </a>
                    <?php } } ?>

                    
<!--                       <a href="#" class="btn-group linkedin">
                        <i class="fa fa-linkedin-square"></i>
                    </a>
                      <a href="#" class="btn-group twitter">
                        <i class="fa fa-twitter"></i>
                    </a>
                      <a href="#" class="btn-group facebook">
                        <i class="fa fa-facebook"></i>
                    </a> -->
                </div>
              </div>    
        </div>
      </div>
    </footer>

    
    <div class="copyright text center">
        <?php echo $office_master['copy_text']; ?>
    </div>


    <?php wp_footer(); ?>
  </body>
</html>
