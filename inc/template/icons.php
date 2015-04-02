<div id="ssi-absolute">
    <?php if ("" != $this->options['social_icons']['facebook'] ) { ?>
        <a class="ssi-facebook" target="_blank" href="<?php echo esc_url( $this->options['social_icons']['facebook'] ) ?>"><i class="fa fa-facebook"></i></a><?php } ?>

    <?php if ("" != $this->options['social_icons']['twitter'] ) { ?>
        <a class="ssi-twitter" target="_blank" href="<?php echo esc_url( $this->options['social_icons']['twitter'] ) ?>"><i class="fa fa-twitter"></i></a><?php } ?>

    <?php if ("" != $this->options['social_icons']['gplus'] ) { ?>
        <a class="ssi-gplus" target="_blank" href="<?php echo esc_url( $this->options['social_icons']['gplus'] ) ?>"><i class="fa fa-google-plus"></i></a><?php } ?>

    <?php if ("" != $this->options['social_icons']['instagram'] ) { ?>
        <a class="ssi-instagram" target="_blank" href="<?php echo esc_url( $this->options['social_icons']['instagram'] ) ?>"><i class="fa fa-instagram"></i></a> <?php } ?>

    <?php if ("" != $this->options['social_icons']['pinterest'] ) { ?>
        <a class="ssi-pinterest" target="_blank" href="<?php echo esc_url( $this->options['social_icons']['pinterest'] ) ?>"><i class="fa fa-pinterest"></i></a><?php } ?>

    <?php if ("" != $this->options['social_icons']['linkedin'] ) { ?>
        <a class="ssi-linkedin" target="_blank" href="<?php echo esc_url( $this->options['social_icons']['linkedin'] ) ?>"><i class="fa fa-linkedin"></i></a> <?php } ?>

    <?php if ("" != $this->options['social_icons']['email'] ) { ?>
        <a class="ssi-youtube" target="_blank" href="<?php echo esc_url( $this->options['social_icons']['youtube'] ) ?>"><i class="fa fa-youtube"></i></a><?php } ?>

    <a class="ssi-envelope" href="<?php echo 'mailto:' . $this->options['social_icons']['email'] ?>"><i class="fa fa-envelope-o"></i></a>

    <?php if ("" != $this->options['social_icons']['phone'] ) { ?>
        <a class="ssi-phone" href="callto:<?php echo $this->options['social_icons']['phone'] ; ?>"><i class="fa fa-phone"></i></a><?php } ?>

    <?php if ("" != $this->options['social_icons']['skype'] ) { ?>
        <a class="ssi-skype" href="skype:<?php echo $this->options['social_icons']['skype']  ?>?call"><i class="fa fa-skype"></i></a><?php } ?>

    <?php if ("" != $this->options['social_icons']['foursquare'] ) { ?>
        <a class="ssi-foursquare" target="_blank" href="<?php echo esc_url( $this->options['social_icons']['foursquare'] ) ?>"><i class="fa fa-foursquare"></i></a><?php } ?>

    <?php if ("" != $this->options['social_icons']['github'] ) { ?>
        <a class="ssi-github" target="_blank" href="<?php echo esc_url( $this->options['social_icons']['github'] ) ?>"><i class="fa fa-github"></i></a><?php } ?>

    <?php if ("" != $this->options['social_icons']['tumblr'] ) { ?>
        <a class="ssi-tumblr" target="_blank" href="<?php echo esc_url( $this->options['social_icons']['tumblr'] ) ?>"><i class="fa fa-tumblr"></i></a><?php } ?>

    <?php if ("" != $this->options['social_icons']['cart'] ) { ?>
        <a class="ssi-store" target="_blank" href="<?php echo esc_url( $this->options['social_icons']['cart'] ) ?>"><i class="fa fa-shopping-cart"></i></a><?php } ?>

</div>