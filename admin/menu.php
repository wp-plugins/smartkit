<?php extract( get_option('smartcat_kit_options') ); ?>
<?php //var_dump( get_option('smartcat_kit_options') ); ?>

<style>
    #wpcontent{
        padding: 40px;
        background: blue;
        min-height: 600px;
        background: url('<?php echo SMARTCAT_KIT_URL . "inc/img/noisy_net.png" ?>');
    }    
    .logo{
        font-size: 30px;
    }
    table.widefat{ margin-bottom: 20px; background: rgba( 255,255,255,0.9) }
    table.widefat tr td:first-child{
        width: 50%;
    }
    .widefat th{ font-weight: 800; font-size: 18px;}
    input[type=text]{
        padding: 3px;
        width: 100%;
    }

</style>
<form name="post_form" method="post" action="" enctype="multipart/form-data">
<div class="sc-col-sm-6 logo">
    <div class="white"><img src="<?php echo SMARTCAT_KIT_URL . "inc/img/cat_logo.png" ?>" width="30px" style="position: relative; top: 5px"/>  Smartkit</div>
</div>
<div class="sc-col-sm-6 text-right save-button">
    <input class="fa fa-save" type="submit" value="Save" name="smartcat_kit_save"/>
</div>

<div class="clear"></div>

<div class="sc-col-sm-4 smartkit-tile animated zoomIn smartkit-delay1">
    <div class="inner teal">
        <i class="fa fa-image"></i>
        Favicon   
        <div class="smartkit-toggle-mode <?php echo $mode['mode_favicon'] ? 'active' : ''; ?>" data-item="mode_favicon"></div>   
        <input type="hidden" name="smartcat_kit_options[mode][mode_favicon]" value="<?php echo $mode['mode_favicon']; ?>" id="mode_favicon"/>            
    </div>
</div>
<div class="sc-col-sm-4 smartkit-tile animated zoomIn smartkit-delay1">
    <div class="inner blue">
        <i class="fa fa-line-chart"></i>
        Analytics
        <div class="smartkit-toggle-mode <?php echo $mode['mode_analytics'] ? 'active' : ''; ?>" data-item="mode_analytics"></div>   
        <input type="hidden" name="smartcat_kit_options[mode][mode_analytics]" value="<?php echo $mode['mode_analytics']; ?>" id="mode_analytics"/>          
    </div>
</div>
<div class="sc-col-sm-4 smartkit-tile animated zoomIn smartkit-delay2">
    <div class="inner green">
        <i class="fa fa-tablet"></i>
        Lightbox
        <div class="smartkit-toggle-mode <?php echo $mode['mode_lightbox'] ? 'active' : ''; ?>" data-item="mode_lightbox"></div>   
        <input type="hidden" name="smartcat_kit_options[mode][mode_lightbox]" value="<?php echo $mode['mode_lightbox']; ?>" id="mode_lightbox"/>  
                
        
    </div>
</div>


<!-- 2nd row -->
<div class="sc-col-sm-2 smartkit-tile animated zoomIn smartkit-delay2">
    <div class="inner orange">
        <i class="fa fa-share-alt"></i>
        Sharing  
        <div class="smartkit-toggle-mode <?php echo $mode['mode_socialshare'] ? 'active' : ''; ?>" data-item="mode_socialshare"></div>   
        <input type="hidden" name="smartcat_kit_options[mode][mode_socialshare]" value="<?php echo $mode['mode_socialshare']; ?>" id="mode_socialshare"/>       
    </div>
</div>
<div class="sc-col-sm-2 smartkit-tile animated zoomIn smartkit-delay2">
    <div class="inner purple">
        <i class="fa fa-share-alt"></i>
        Icons
        <div class="smartkit-toggle-mode <?php echo $mode['mode_socialicon'] ? 'active' : ''; ?>" data-item="mode_socialicon"></div>   
        <input type="hidden" name="smartcat_kit_options[mode][mode_socialicon]" value="<?php echo $mode['mode_socialicon']; ?>" id="mode_socialicon"/>          
    </div>
</div>
<div class="sc-col-sm-4 smartkit-tile animated zoomIn smartkit-delay3">
    <div class="inner red">
        <i class="fa fa-lock"></i>
        Login Page    
        <div class="smartkit-toggle-mode <?php echo $mode['mode_login'] ? 'active' : ''; ?>" data-item="mode_login"></div>   
        <input type="hidden" name="smartcat_kit_options[mode][mode_login]" value="<?php echo $mode['mode_login']; ?>" id="mode_login"/>          
    </div>
</div>
<div class="sc-col-sm-4 smartkit-tile animated zoomIn smartkit-delay3">
    <div class="inner darkblue">
        <i class="fa fa-code"></i>
        Custom CSS   
        <div class="smartkit-toggle-mode <?php echo $mode['mode_css'] ? 'active' : ''; ?>" data-item="mode_css"></div>   
        <input type="hidden" name="smartcat_kit_options[mode][mode_css]" value="<?php echo $mode['mode_css']; ?>" id="mode_css"/>        
    </div>
</div>
<!-- end 2nd row -->




<!-- Form Start -->
<div class="sc-col-sm-12" style="margin-top: 30px;">
    

<!-- Analytics -->   
<table class="widefat">
    <thead>
        <tr>
            <th colspan="2"><?php _e('Analytics','smartkit'); ?></th>
        </tr>
        <tr>
            <td><?php _e('Analytics Code. Enter the full tracking code including the script tags. Example: Google Analytics, Infusionsoft etc..','smartkit'); ?></td>
            <td>
                <textarea name="smartcat_kit_options[analytics][code]" style="width: 100%" rows="10"><?php echo esc_textarea( $analytics['code'] ); ?></textarea>
            </td>
        </tr>
    </thead>
</table>

<!-- Lightbox -->   
<table class="widefat">
    <thead>
        <tr>
            <th colspan="2">Lightbox</th>
        </tr>
        <tr>
            <td>How to use the lightbox: Simply add the class smartkit-lightbox-trigger to your image and the lightbox will automatically work</td>
            <td>
                
                <input type="text" value='<img src="images/image.jpg" class="smartkit-lightbox-trigger"/> ' />
                                       
                
            </td>
        </tr>
    </thead>
</table>

<!-- Favicon -->   
<table class="widefat">
    <thead>
        <tr>
            <th colspan="2">Favicon</th>
        </tr>
        <tr>
            <td><?php _e('Favicon Image. This is 32x32 icon that appears on the browser tab. ') ?></td>
            <td>
                <input id="image_location" type="text" name="smartcat_kit_options[favicon][url]" value="<?php echo esc_url( $favicon['url'] ); ?>" size="50" />
                <input  class="onetarek-upload-button button" type="button" value="Upload Image" />
                <img src="<?php echo esc_url( $favicon['url'] ); ?>" width="200px" style="display:block"/>
            </td>
        </tr>
    </thead>
</table>

<!-- Social Sharing -->
<table class="widefat">
    <thead>
        <tr>
            <th colspan="2">Social Sharing</th>
        </tr>
        <tr>
            <td colspan="2">
                Social sharing icons will appear on single posts. Please select the icons that you want to show.
            </td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><i class="fa fa-facebook"></i>  Facebook</td>
            <td>
                Yes <input type="radio" name="smartcat_kit_options[social_share][facebook]" value="1" <?php checked( $social_share['facebook'], 1 ) ?>/>
                No <input type="radio" name="smartcat_kit_options[social_share][facebook]" value="0" <?php checked( $social_share['facebook'], 0 ) ?>/>
            </td>
        </tr>
        <tr>
            <td><i class="fa fa-twitter"></i>  Twitter</td>
            <td>
                Yes <input type="radio" name="smartcat_kit_options[social_share][twitter]" value="1" <?php checked( $social_share['twitter'], 1 ) ?>/>
                No <input type="radio" name="smartcat_kit_options[social_share][twitter]" value="0" <?php checked( $social_share['twitter'], 0 ) ?>/>
            </td>
        </tr>
        <tr>
            <td><i class="fa fa-google-plus"></i>  Google Plus</td>
            <td>
                Yes <input type="radio" name="smartcat_kit_options[social_share][gplus]" value="1" <?php checked( $social_share['gplus'], 1 ) ?>/>
                No <input type="radio" name="smartcat_kit_options[social_share][gplus]" value="0" <?php checked( $social_share['gplus'], 0 ) ?>/>
            </td>
        </tr>
        <tr>
            <td><i class="fa fa-tumblr"></i>  Tumblr</td>
            <td>
                Yes <input type="radio" name="smartcat_kit_options[social_share][tumblr]" value="1" <?php checked( $social_share['tumblr'], 1 ) ?>/>
                No <input type="radio" name="smartcat_kit_options[social_share][tumblr]" value="0" <?php checked( $social_share['tumblr'], 0 ) ?>/>
            </td>
        </tr>
        <tr>
            <td><i class="fa fa-pinterest"></i>  Pinterest</td>
            <td>
                Yes <input type="radio" name="smartcat_kit_options[social_share][pinterest]" value="1" <?php checked( $social_share['pinterest'], 1 ) ?>/>
                No <input type="radio" name="smartcat_kit_options[social_share][pinterest]" value="0" <?php checked( $social_share['pinterest'], 0 ) ?>/>
            </td>
        </tr>
        <tr>
            <td><i class="fa fa-linkedin"></i>  Linkedin</td>
            <td>
                Yes <input type="radio" name="smartcat_kit_options[social_share][linkedin]" value="1" <?php checked( $social_share['linkedin'], 1 ) ?>/>
                No <input type="radio" name="smartcat_kit_options[social_share][linkedin]" value="0" <?php checked( $social_share['linkedin'], 0 ) ?>/>
            </td>
        </tr>
        <tr>
            <td><i class="fa fa-wordpress"></i>  WordPress</td>
            <td>
                Yes <input type="radio" name="smartcat_kit_options[social_share][wordpress]" value="1" <?php checked( $social_share['wordpress'], 1 ) ?>/>
                No <input type="radio" name="smartcat_kit_options[social_share][wordpress]" value="0" <?php checked( $social_share['wordpress'], 0 ) ?>/>
            </td>
        </tr>
        <tr>
            <td><i class="fa fa-envelope"></i>  Email</td>
            <td>
                Yes <input type="radio" name="smartcat_kit_options[social_share][email]" value="1" <?php checked( $social_share['email'], 1 ) ?>/>
                No <input type="radio" name="smartcat_kit_options[social_share][email]" value="0" <?php checked( $social_share['email'], 0 ) ?>/>
            </td>
        </tr>
        
    </tbody>
</table>

<!-- Social -->   
<table class="widefat">
    <thead>
        <tr>
            <th colspan="2">Social Icons</th>
        </tr>
        <tr>
            <td>Size</td>
            <td>
                <input type="text" name="smartcat_kit_options[social_icons][size]"
                       value="<?php echo $social_icons['size'] ?>" style="width: 50px"/>px                
            </td>
        </tr>
        <tr>
            <td>Distance from top</td>
            <td>
                <input type="text" name="smartcat_kit_options[social_icons][top]"
                       value="<?php echo $social_icons['top'] ?>" style="width: 50px"/>px                
            </td>
        </tr>
           <tr>
                <td><i class="fa fa-facebook"></i>  Facebook</td>
                <td>
                    <input type="text" name="smartcat_kit_options[social_icons][facebook]"
                           value="<?php echo esc_url( $social_icons['facebook'] ); ?>"/>
                </td>
            </tr>

            <tr>
                <td><i class="fa fa-google-plus"></i>  Google Plus</td>
                <td>
                    <input type="text" name="smartcat_kit_options[social_icons][gplus]"
                           value="<?php echo esc_url( $social_icons['gplus'] ); ?>"/>
                </td>
            </tr>

            <tr>
                <td><i class="fa fa-youtube"></i>  Youtube</td>
                <td>
                    <input type="text" name="smartcat_kit_options[social_icons][youtube]"
                           value="<?php echo esc_url( $social_icons['youtube'] ); ?>"/>
                </td>
            </tr>
            <tr>
                <td><i class="fa fa-linkedin"></i>  Linkedin</td>
                <td>
                    <input type="text" name="smartcat_kit_options[social_icons][linkedin]"
                           value="<?php echo esc_url( $social_icons['linkedin'] ); ?>"/>
                </td>
            </tr>
            <tr>
                <td><i class="fa fa-envelope"></i>  Email</td>
                <td>
                    <input type="text" name="smartcat_kit_options[social_icons][email]"
                           value="<?php echo esc_attr( $social_icons['email'] ); ?>"/>
                </td>
            </tr>
            <tr>
                <td><i class="fa fa-twitter"></i>  Twitter</td>
                <td>
                    <input type="text" name="smartcat_kit_options[social_icons][twitter]"
                           value="<?php echo esc_url( $social_icons['twitter'] ); ?>"/>
                </td>
            </tr>
            <tr>
                <td><i class="fa fa-instagram"></i>  Instagram</td>
                <td>
                    <input type="text" name="smartcat_kit_options[social_icons][instagram]"
                           value="<?php echo esc_url( $social_icons['instagram'] ); ?>"/>
                </td>
            </tr>
            <tr>
                <td><i class="fa fa-phone"></i>  Phone Number</td>
                <td>
                    <input type="text" name="smartcat_kit_options[social_icons][phone]"
                           value="<?php echo esc_attr( $social_icons['phone'] ); ?>"/>
                </td>
            </tr>
            <tr>
                <td><i class="fa fa-pinterest"></i>  Pinterest</td>
                <td>
                    <input type="text" name="smartcat_kit_options[social_icons][pinterest]"
                           value="<?php echo esc_url( $social_icons['pinterest'] ); ?>"/>
                </td>
            </tr>
            <tr>
                <td><i class="fa fa-skype"></i>  Skype</td>
                <td>
                    <input type="text" name="smartcat_kit_options[social_icons][skype]"
                           value="<?php echo esc_attr( $social_icons['skype'] ); ?>"/>
                </td>
            </tr>
            <tr>
                <td><i class="fa fa-foursquare"></i>  Foursquare</td>
                <td>
                    <input type="text" name="smartcat_kit_options[social_icons][foursquare]"
                           value="<?php echo esc_url( $social_icons['foursquare'] ); ?>"/>
                </td>
            </tr>
            <tr>
                <td><i class="fa fa-github"></i>  GitHub</td>
                <td>
                    <input type="text" name="smartcat_kit_options[social_icons][github]"
                           value="<?php echo esc_url( $social_icons['github'] ); ?>"/>
                </td>
            </tr>
            <tr>
                <td><i class="fa fa-tumblr"></i>  Tumblr</td>
                <td>
                    <input type="text" name="smartcat_kit_options[social_icons][tumblr]"
                           value="<?php echo esc_url( $social_icons['tumblr'] ); ?>"/>
                </td>
            </tr>
            <tr>
                <td>Shopping Cart / Store</td>
                <td>
                    <input type="text" name="smartcat_kit_options[social_icons][cart]"
                           value="<?php echo esc_url( $social_icons['cart'] ); ?>"/>
                </td>
            </tr>
    </thead>
</table>

<!-- Login -->   
<table class="widefat">
    <thead>
        <tr>
            <th colspan="2"><?php _e('Login Page'); ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php _e('Logo'); ?></td>
            <td>
                <input id="image_location" type="text" name="smartcat_kit_options[login][logo]" value="<?php echo esc_url( $login['logo'] ); ?>" size="50" />
                <input  class="onetarek-upload-button button" type="button" value="Upload Image" />
                <img src="<?php echo esc_url( $login['logo'] ); ?>" width="150px" style="display:block" />             
            </td>
        </tr>
        <tr>
            <td><?php _e('Background'); ?></td>
            <td>
                <input id="image_location" type="text" name="smartcat_kit_options[login][background]" value="<?php echo esc_url( $login['background'] ); ?>" size="50" />
                <input  class="onetarek-upload-button button" type="button" value="Upload Image" />
                <img src="<?php echo esc_url( $login['background'] ); ?>" width="300px" style="display:block" />
            </td>
        </tr>
    </tbody>
</table>

<!-- Custom CSS -->   
<table class="widefat">
    <thead>
        <tr>
            <th colspan="2">Custom CSS</th>
        </tr>
        <tr>
            <td>Enter your custom CSS code here.</td>
            <td><textarea name="smartcat_kit_options[css][code]" style="width: 100%" rows="10"><?php echo esc_textarea( $css['code'] ); ?></textarea></td>
        </tr>
    </thead>
</table>

<div class="sc-col-sm-12 text-right save-button">
    <input class="fa fa-save" type="submit" value="Save" name="smartcat_kit_save"/>
</div>

</div>
</form>
