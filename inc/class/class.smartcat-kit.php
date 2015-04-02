<?php


class SmartcatKitPlugin {

    const VERSION = '1.0';

    private static $instance;
    private $options;

    public static function instance() {
        if ( !self::$instance ) :
            self::$instance = new self;
            self::$instance->get_options();
            self::$instance->add_hooks();
        endif;
    }

    public static function activate() {

        $options = array(
            'mode' => array(
                'mode_seo'          => FALSE,
                'mode_analytics'    => FALSE,
                'mode_lightbox'     => FALSE,
                'mode_favicon'      => FALSE,
                'mode_social'       => FALSE,
                'mode_login'        => FALSE,                
                'mode_css'          => FALSE,
                'mode_socialshare'  => FALSE,
                'mode_socialicon'   => FALSE,
            ),
            'seo' => array(
                'title'             => '',
                'description'       => '',
            ),
            'analytics' => array (
                'code'              =>  '',
            ),
            'css' => array ( 
                'code'              => '',
            ),
            'favicon' => array (
                'url'               => '',
            ),
            'login' => array (
                'logo'              => '',
                'background'        => '',
            ),
            'social_share' => array (
                'facebook'          => TRUE,
                'twitter'           => TRUE,
                'gplus'             => TRUE,
                'tumblr'            => TRUE,
                'pinterest'         => TRUE,
                'linkedin'          => '',
                'wordpress'         => '',
                'email'             => '',
            ),
            'social_icons' => array (
                'size'              => '40',
                'top'               => '150',
                'facebook'          => 'http://smartcatdesign.net',
                'twitter'           => 'http://smartcatdesign.net',
                'gplus'             => 'http://smartcatdesign.net',
                'twitter'           => 'http://smartcatdesign.net',
                'pinterest'         => '',
                'reddit'            => '',
                'linkedin'          => '',
                'wordpress'         => '',
                'email'             => '',
                'github'            => '',
                'cart'              => '',
            )
            

        );
        
        
        if ( !get_option( 'smartcat_kit_options' ) ) {
            
            add_option( 'smartcat_kit_options', $options );
            $options[ 'redirect' ] = true;
            update_option( 'smartcat_kit_options', $options );      
            
        }


    }

    public static function deactivate() {
        
    }

    private function add_hooks() {
//        add_action( 'init', array( $this, 'team_members' ) );
//        add_action( 'init', array( $this, 'team_member_positions' ), 0 );
        add_action( 'admin_init', array( $this, 'smartcat_kit_activation_redirect' ) );
        add_action( 'admin_menu', array( $this, 'smartcat_kit_menu' ) );
        add_action( 'admin_enqueue_scripts', array( $this, 'smartcat_kit_load_admin_styles_scripts' ) );
        add_action( 'wp_enqueue_scripts', array( $this, 'smartcat_kit_load_styles_scripts' ) );
        
        
        if( $this->options['mode']['mode_login'] )
            add_action( 'login_enqueue_scripts', array( $this, 'load_custom_login') );
        
        if( $this->options['mode']['mode_socialshare'] )
            add_action( 'the_content', array( $this, 'load_socialshare') );
        
        if( $this->options['mode']['mode_socialicon'] )
            add_action( 'wp_footer', array( $this, 'load_socialicon') );
        
        if( $this->options['mode']['mode_favicon'] )
            add_action( 'wp_head', array( $this, 'load_favicon') );
        
        if( $this->options['mode']['mode_seo'] )
            add_action( 'wp_head', array( $this, 'load_seo_meta') );
        
        if( $this->options['mode']['mode_analytics'] )
            add_action( 'wp_head', array( $this, 'load_analytics_code') );
        
        if( $this->options['mode']['mode_lightbox'] )
            add_action( 'wp_head', array( $this, 'load_lightbox_code') );
        
        
        
        if( $this->options['mode']['mode_css'] )
            add_action( 'wp_head', array( $this, 'load_css_code') );
        
        
//        add_shortcode( 'our-team', array( $this, 'set_our_team' ) );
//        add_action( 'add_meta_boxes', array( $this, 'smartcat_kit_member_info_box' ) );
//        add_action( 'save_post', array( $this, 'team_member_box_save' ) );
//        add_action( 'widgets_init', array( $this, 'wpb_load_widget' ) );     
//        add_action( 'wp_ajax_smartcat_kit_update_pm', array( $this, 'smartcat_kit_update_order' ) );
        add_action( 'wp_head', array( $this, 'custom_styles' ) );
//        add_filter( 'the_content', array( $this, 'smartcat_set_single_content' ) );
//        add_filter( 'single_template', array( $this, 'smartcat_kit_get_single_template' ) );
    }
    
    public function load_custom_login(){ ?>


    <style type="text/css">
        
        @media( min-width: 480px ){
            
            #login{
                /*width: 550px;*/
                padding: 20px;
            }

            
        }
        
        body.login{
            
            background: url(<?php echo $this->options['login']['background']; ?>);
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        .login form{
            padding: 30px 50px;
            background: rgba(30, 39, 48, 0.75);
            border-radius: 35px;
            -moz-border-radius: 35px;
            -webkit-border-radius: 35px;
            
            box-shadow: 0 0 5px #212121;
            -moz-box-shadow: 0 0 5px #212121;
            -webkit-box-shadow: 0 0 5px #212121;

        }        
        .login input[type=text],.login input[type=password]{
            background: #fff;
            font-size: 14px;
            outline: none;
        }
        .login label{ 
            color: #e0e0e0; 
        }
        .login #nav a,
        .login #backtoblog a{
            color: #000;
            font-size: 14px;
            font-weight: bold;
        }
        
        .button.button-primary:hover{
            background: #D22719;
        }
        .button.button-primary{
            background: #E54336;
            border: none;
            border-radius: 0;
            outline: none;
        }
        
        body.login div#login h1 a {
            background-image: url(<?php echo $this->options['login']['logo']; ?>);
            width: 150px;
            height: 150px;
            background-size: 130px;
            margin: 0 auto;
        }
    </style>        

        
    <?php }
    
    public function load_socialshare( $content ) {
        global $post;

        if( is_single() ) :

            $content .= '<div class="clear"></div>'
                    . '<div id="smartkit-social-sharing">';
            $content .= $this->smartcat_get_social_content( $facebook, $twitter, $linkedin, $gplus, $email );
            $content .= '</div>';
        endif;
        
        return $content;
    }    
    
    
//    public function load_socialshare(){
//        include_once SMARTCAT_KIT_PATH . 'inc/template/share.php';
//    }
    
    public function load_socialicon(){
        
        include_once SMARTCAT_KIT_PATH . 'inc/template/icons.php';
    }
    public function load_favicon(){ ?>
        <link rel="shortcut icon" href="<?php echo $this->options['favicon']['url']; ?>" >


    <?php }
    
    public function load_seo_meta(){
        ?>



        <?php
    }
    
    
    public function load_css_code(){ ?>
        <style>
            <?php echo ( $this->options['css']['code'] ); ?>
        </style>
    <?php }
    
    public function load_analytics_code(){ ?>
        <?php echo ( $this->options['analytics']['code'] ); ?>
    <?php }
    
    public function load_lightbox_code(){ ?>
        
        <script>
            jQuery(document).ready( function($) {
                $('body').append('<div id="smartkit-lightbox-overlay"><div id="smartkit-lightbox"><i class="fa fa-times smartkit-close-lightbox"></i><div class="smartkit-lightbox-inner"></div></div></div>');
            });            
        </script>
        
        
        
    <?php }
    
    
    private function get_options() {
        if ( get_option( 'smartcat_kit_options' ) ) :
            $this->options = get_option( 'smartcat_kit_options' );
        endif;
    }

    /**
     * @todo check if redirect option is set and redirect
     */
    public function smartcat_kit_activation_redirect() {
        if ( $this->options[ 'redirect' ] ) :
            $old_val = $this->options;
            $old_val[ 'redirect' ] = false;
            update_option( 'smartcat_kit_options', $old_val );
            wp_safe_redirect( admin_url( 'admin.php?page=smartkit_menu' ) );
        endif;
    }

    public function smartcat_kit_menu() {
        add_menu_page( 'Smartkit', 'Smartkit', 'manage_options', 'smartkit_menu', array( $this, 'show_smartkit_menu' ), SMARTCAT_KIT_URL . 'inc/img/kit.png' );
        
//        add_submenu_page( 'edit.php?post_type=team_member', 'Settings', 'Settings', 'administrator', 'smartcat_kit_settings', array( $this, 'smartcat_kit_settings' ) );

    }
     
    function show_smartkit_menu(){
        
        if ( isset( $_REQUEST[ 'smartcat_kit_save' ] ) && $_REQUEST[ 'smartcat_kit_save' ] == 'Save' ) :
            update_option( 'smartcat_kit_options', stripslashes_deep( $_REQUEST[ 'smartcat_kit_options' ] ) );
        endif;        
        
        include_once SMARTCAT_KIT_PATH . 'admin/menu.php';
    }

    public function smartcat_kit_reorder() {
        include_once SMARTCAT_KIT_PATH . 'admin/reorder.php';
    }

    public function smartcat_kit_settings() {

        if ( isset( $_REQUEST[ 'sc_our_team_save' ] ) && $_REQUEST[ 'sc_our_team_save' ] == 'Update' ) :
            update_option( 'smartcat_kit_options', $_REQUEST[ 'smartcat_kit_options' ] );
        endif;

        include_once SMARTCAT_KIT_PATH . 'admin/options.php';
    }

    public function smartcat_kit_load_admin_styles_scripts( $hook ) {
        
        wp_enqueue_style( 'thickbox' );
        wp_enqueue_script( 'media-upload' );
        wp_enqueue_script( 'thickbox' );
        
        
        wp_enqueue_style( 'smartcat_kit_admin_style', SMARTCAT_KIT_URL . 'inc/style/smartkit_admin.css' );
        wp_enqueue_style( 'smartcat_kit_admin_icons', SMARTCAT_KIT_URL . 'inc/style/font-awesome.min.css' );
        wp_enqueue_style( 'smartcat_kit_admin_animate', SMARTCAT_KIT_URL . 'inc/style/animate.css' );
        wp_enqueue_script( 'smartcat_kit_script', SMARTCAT_KIT_URL . 'inc/script/smartkit_admin.js', array( 'jquery', 'wp-color-picker', 'media-upload', 'thickbox', 'jquery-ui-tooltip' ) );
        
        if( isset($_GET['page']) && $_GET['page'] == 'smartkit_menu' )
            wp_enqueue_script( 'smartcat_kit_upload_script', SMARTCAT_KIT_URL . 'inc/script/upload.js', array( 'jquery', 'media-upload', 'thickbox' ) );
        
        
    }

    function smartcat_kit_load_styles_scripts() {

        // plugin main style
        wp_enqueue_style( 'smartcat_kit_default_style', SMARTCAT_KIT_URL . 'inc/style/smartkit.css' );
        wp_enqueue_style( 'smartcat_kit_fontawesome', SMARTCAT_KIT_URL . 'inc/style/font-awesome.min.css' );

        // plugin main script
        wp_enqueue_script( 'smartcat_kit_default_script', SMARTCAT_KIT_URL . 'inc/script/smartkit.js', array( 'jquery' ) );
    }


    public function custom_styles() {
        ?>
        <style>
            #ssi-absolute{ top: <?php echo $this->options['social_icons']['top'] ?>px; }
            #ssi-absolute a{ 
                width: <?php echo $this->options['social_icons']['size'] ?>px;
                height: <?php echo $this->options['social_icons']['size'] ?>px;
                line-height: <?php echo $this->options['social_icons']['size'] ?>px;          
            }
            #ssi-absolute a:hover{
                width: <?php echo $this->options['social_icons']['size'] + 15 ?>px;
            }            

        </style>
        <?php
    }

    public function smartcat_set_single_content( $content ) {
        global $post;

        if( is_single() ) :
            if ( $post->post_type == 'team_member' && 
                    $this->options['single_template'] == 'standard' && 
                    $this->options['single_social']  == 'yes' 
            ) :
                $facebook = get_post_meta( get_the_ID(), 'team_member_facebook', true );
                $twitter = get_post_meta( get_the_ID(), 'team_member_twitter', true );
                $linkedin = get_post_meta( get_the_ID(), 'team_member_linkedin', true );
                $gplus = get_post_meta( get_the_ID(), 'team_member_gplus', true );
                $email = get_post_meta( get_the_ID(), 'team_member_email', true );

                $content .= '<div class="clear"></div>'
                        . '<div class="smartcat_kit_single_icons">';
                $content .= $this->smartcat_get_social_content( );
                $content .= '</div>';
            endif;
        else :
            
        endif;
        
        return $content;
    }

    public function get_social( $facebook, $twitter, $linkedin, $gplus, $email ) {
        if ( $facebook != '' )
            echo '<a href="' . $facebook . '"><img src="' . SMARTCAT_KIT_URL . 'inc/img/fb.png" class="sc-social"/></a>';
        if ( $twitter != '' )
            echo '<a href="' . $twitter . '"><img src="' . SMARTCAT_KIT_URL . 'inc/img/twitter.png" class="sc-social"/></a>';
        if ( $linkedin != '' )
            echo '<a href="' . $linkedin . '"><img src="' . SMARTCAT_KIT_URL . 'inc/img/linkedin.png" class="sc-social"/></a>';
        if ( $gplus != '' )
            echo '<a href="' . $gplus . '"><img src="' . SMARTCAT_KIT_URL . 'inc/img/google.png" class="sc-social"/></a>';
        if ( $email != '' )
            echo '<a href=mailto:' . $email . '><img src="' . SMARTCAT_KIT_URL . 'inc/img/email.png" class="sc-social"/></a>';
    }
    
    public function smartcat_get_social_content() {

        $content = null; ?>


        <ul class="smartkit-share-buttons">

        <?php if ($this->options['social_share']['facebook']) : ?>
            <li><a href="https://www.facebook.com/sharer/sharer.php?u=&t=" target="_blank" title="Share on Facebook" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&t=' + encodeURIComponent(document.URL)); return false;"><i class="fa fa-facebook"></i></a></li>
        <?php endif; ?>

        <?php if ($this->options['social_share']['twitter']) : ?>
            <li><a href="https://twitter.com/intent/tweet?source=&text=:%20" target="_blank" title="Tweet" onclick="window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent(document.title) + ':%20' + encodeURIComponent(document.URL)); return false;"><i class="fa fa-twitter"></i></a></li>
        <?php endif; ?>

        <?php if ($this->options['social_share']['gplus']) : ?>
            <li><a href="https://plus.google.com/share?url=" target="_blank" title="Share on Google+" onclick="window.open('https://plus.google.com/share?url=' + encodeURIComponent(document.URL)); return false;"><i class="fa fa-google-plus"></i></a></li>
        <?php endif; ?>                

        <?php if ($this->options['social_share']['tumblr']) : ?>
            <li><a href="http://www.tumblr.com/share?v=3&u=&t=&s=" target="_blank" title="Post to Tumblr" onclick="window.open('http://www.tumblr.com/share?v=3&u=' + encodeURIComponent(document.URL) + '&t=' +  encodeURIComponent(document.title)); return false;"><i class="fa fa-tumblr"></i></a></li>
        <?php endif; ?>

        <?php if ($this->options['social_share']['pinterest']) : ?>
            <li><a href="http://pinterest.com/pin/create/button/?url=&description=" target="_blank" title="Pin it" onclick="window.open('http://pinterest.com/pin/create/button/?url=' + encodeURIComponent(document.URL) + '&description=' +  encodeURIComponent(document.title)); return false;"><i class="fa fa-pinterest"></i></a></li>
        <?php endif; ?>

        <?php if ($this->options['social_share']['linkedin']) : ?>
            <li><a href="http://www.linkedin.com/shareArticle?mini=true&url=&title=&summary=&source=" target="_blank" title="Share on LinkedIn" onclick="window.open('http://www.linkedin.com/shareArticle?mini=true&url=' + encodeURIComponent(document.URL) + '&title=' +  encodeURIComponent(document.title)); return false;"><i class="fa fa-linkedin"></i></a></li>
        <?php endif; ?>

        <?php if ($this->options['social_share']['wordpress']) : ?>
            <li><a href="http://wordpress.com/press-this.php?u=&t=&s=" target="_blank" title="Publish on WordPress" onclick="window.open('http://wordpress.com/press-this.php?u=' + encodeURIComponent(document.URL) + '&t=' +  encodeURIComponent(document.title)); return false;"><i class="fa fa-wordpress"></i></a></li>
        <?php endif; ?>

        <?php if ($this->options['social_share']['email']) : ?>
            <li><a href="mailto:?subject=&body=:%20" target="_blank" title="Email" onclick="window.open('mailto:?subject=' + encodeURIComponent(document.title) + '&body=' +  encodeURIComponent(document.URL)); return false;"><i class="fa fa-envelope"></i></a></li>
        <?php endif; ?>
                
        </ul>        

                        
        <?php return $content;
    }

    public function get_single_social( $social ) {
        if ( 'yes' == $this->options[ 'social' ] ) :
            if ( $social != '' )
                echo '<li><a href="' . $social . '"><img src="' . SMARTCAT_KIT_URL . 'inc/img/fb.png" class="sc-social"/></a></li>';

        endif;
    }



}

class smartcat_kit_widget extends WP_Widget {

    function __construct() {
        parent::__construct(
                'smartcat_kit_widget', __( 'Smartkit Recent Posts', 'smartcat_kit_widget_domain' ), array( 'description' => __( 'Drag this widget anywhere you like', 'smartcat_kit_widget_domain' ), )
        );
    }

    // Creating widget front-end
    // This is where the action happens
    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance[ 'title' ] );

        // before and after widget arguments are defined by themes
        echo $args[ 'before_widget' ];
        if ( !empty( $title ) )
            echo $args[ 'before_title' ] . $title . $args[ 'after_title' ];

        // This is where you run the code and display the output
        include SMARTCAT_KIT_PATH . 'inc/template/widget.php';
        
        
        
        
        //        echo $args['after_title'];
    }

    // Widget Backend
    public function form( $instance ) {
        if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        } else {
            $title = __( 'Meet Our Team', 'smartcat_kit_widget_domain' );
        }
        // Widget admin form
        ?>
        <p>
            <label for="////<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="////<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <?php
    }

    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance[ 'title' ] = (!empty( $new_instance[ 'title' ] ) ) ? strip_tags( $new_instance[ 'title' ] ) : '';
        return $instance;
    }

}

