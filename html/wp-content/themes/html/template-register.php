<?php 
/* Template Name: For register page */
get_header(); 
?>
            <!-- Main Container -->
        <div class="container-fluid-kamn">
            <div class="row">
                <div class="col-md-12">
                <center>
                    <form style="margin-top:100px;" name="registerform" id="registerform" action="<?php echo site_url(); ?>/wp-login.php?action=register" method="post" novalidate="novalidate">
                        <p>
                            <label for="user_login">Username<br>
                            <input type="text" name="user_login" id="user_login" class="input" value="" size="50"></label>
                        </p>
                        <p>
                            <label for="user_email">Email<br>
                            <input type="email" name="user_email" id="user_email" class="input" value="" size="50"></label>
                        </p>
                        
                        <p>
                            <label for="Father">Fathers Name<br>
                            <input type="text" name="user_father" id="Father" class="input" value="" size="50"></label>
                        </p>
                        <p>
                            <label for="Father">Mother Name<br>
                            <input type="text" name="user_mother" id="Mather" class="input" value="" size="50"></label>
                        </p>

                            <p id="reg_passmail">Registration confirmation will be emailed to you.</p>
                        <br class="clear">
                        <input type="hidden" name="redirect_to" value="<?php echo site_url(); ?>/register">
                        <p class="submit"><input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Register"></p>
                    </form>
                </center>
                </div>
            </div>
        </div>    
            
    <!--End Main Container -->
 <?php get_footer(); ?>
