<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined('ABSPATH') or die("Restricted access!");

/**
 * Render Settings Page
 *
 * @since 2.0
 */
function HFScriptsIns_render_submenu_page() {

	// Declare variables
    $options = get_option( 'HFScriptsIns_settings' );

	// Page
	?>
	<div class="wrap">
		<h2>
            <?php _e( 'Header and Footer Scripts Inserter', 'header-and-footer-scripts-inserter' ); ?>
            <br/>
            <span>
                <?php _e( 'by <a href="http://www.arthurgareginyan.com" target="_blank">Arthur "Berserkr" Gareginyan</a>', 'header-and-footer-scripts-inserter' ); ?>
            <span/>
		</h2>

        <div id="poststuff" class="metabox-holder has-right-sidebar">

            <!-- SIDEBAR -->
            <div class="inner-sidebar">
                <div id="side-sortables" class="meta-box-sortabless ui-sortable">

                    <div id="about" class="postbox">
                        <h3 class="title"><?php _e( 'About', 'header-and-footer-scripts-inserter' ) ?></a></h3>
                        <div class="inside">
                            <p><?php _e( 'This plugin allows you to easily insert scripts in your website.', 'header-and-footer-scripts-inserter' ) ?></p>
                        </div>
                    </div>

                    <div id="using" class="postbox">
                        <h3 class="title"><?php _e( 'Using', 'header-and-footer-scripts-inserter' ) ?></a></h3>
                        <div class="inside">
                            <p><?php _e( 'To use, enter your custom scripts, then click "Save Changes". It\'s that simple!', 'header-and-footer-scripts-inserter' ) ?></p>
                        </div>
                    </div>

                    <div id="help" class="postbox">
                        <h3 class="title"><?php _e( 'Help', 'header-and-footer-scripts-inserter' ); ?></h3>
                        <div class="inside">
                            <p><?php _e( 'If you want more options then tell me and I will be happy to add it.', 'header-and-footer-scripts-inserter' ); ?></p>
                            <p><a href="mailto:arthurgareginyan@gmail.com">arthurgareginyan@gmail.com</a></p>
                        </div>
                    </div>

                    <div id="donate" class="postbox">
                        <h3 class="title"><?php _e( 'Donate', 'header-and-footer-scripts-inserter' ) ?></h3>
                        <div class="inside">
                            <img src="<?php echo plugins_url('images/thanks.png', __FILE__); ?>">
                            <p><?php _e( 'If you like this plugin and find it useful, help me to make this plugin even better and keep it up-to-date.', 'header-and-footer-scripts-inserter' ) ?></p>
                            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" rel="nofollow">
                                <img src="<?php echo plugins_url('images/btn_donateCC_LG.gif', __FILE__); ?>" alt="Make a donation">
                            </a>
                            <p><?php _e( 'Thanks for your support!', 'header-and-footer-scripts-inserter' ) ?></p>
                        </div>
                    </div>

                    <div id="freelance" class="postbox">
                        <h3 class="title"><?php _e( 'Freelance', 'header-and-footer-scripts-inserter' ) ?></h3>
                        <div class="inside">
                            <img src="<?php echo plugins_url('images/author.png', __FILE__); ?>">
                            <p><?php _e( 'Hello, my name is Arthur and I\'m a freelance web designer and developer.', 'header-and-footer-scripts-inserter' ) ?></p>
                            <p><?php _e( 'Share your thoughts with me. You may have a brilliant idea in your mind and I can make it happen, so let’s get started!', 'header-and-footer-scripts-inserter' ) ?></p>
                            <p><a href="http://www.arthurgareginyan.com/" target="_blank">www.arthurgareginyan.com</a></p>
                        </div>
                    </div>

                </div>
            </div>
            <!-- END-SIDEBAR -->

            <!-- FORM -->
            <div class="has-sidebar sm-padded">
                <div id="post-body-content" class="has-sidebar-content">
                    <div class="meta-box-sortabless">

                        <form name="HFScriptsIns-form" action="options.php" method="post" enctype="multipart/form-data">
                            <?php settings_fields( 'HFScriptsIns_settings_group' ); ?>

                            <div class="postbox" id="Header">
                                <h3 class="title"><?php _e( 'Header Section', 'header-and-footer-scripts-inserter' ) ?></h3>
                                <div class="inside">
                                    <p><?php _e( 'You can use the field below to add scripts to Header of your website.', 'header-and-footer-scripts-inserter' ) ?></p>
                                    <textarea cols='50' rows='10' name='HFScriptsIns_settings[header_beginning]' placeholder="<?php _e( '<!-- Beginning of the <head> tag -->', 'header-and-footer-scripts-inserter' ) ?>"><?php echo esc_attr( $options['header_beginning'] ); ?></textarea>
                                    <p class='help-text'><?php _e( 'Scripts from this field will be printed in the beginning of <b>HEAD</b> section. Do not place plain text in this!', 'header-and-footer-scripts-inserter' ) ?></p>
                                    <textarea cols='50' rows='10' name='HFScriptsIns_settings[header_end]' placeholder="<?php _e( '<!-- End of the <head> tag -->', 'header-and-footer-scripts-inserter' ) ?>"><?php echo esc_attr( $options['header_end'] ); ?></textarea>
                                    <p class='help-text'><?php _e( 'Scripts from this field will be printed in the end of <b>HEAD</b> section. Do not place plain text in this!', 'header-and-footer-scripts-inserter' ) ?></p>
                                    <?php submit_button( __( 'Save Changes', 'header-and-footer-scripts-inserter' ), 'primary', 'submit', true ); ?>
                                </div>
                            </div>

                            <div class="postbox" id="Footer">
                                <h3 class="title"><?php _e( 'Footer Section', 'header-and-footer-scripts-inserter' ) ?></h3>
                                <div class="inside">
                                    <p><?php _e( 'You can use the field below to add scripts to Footer of your website.', 'header-and-footer-scripts-inserter' ) ?></p>
                                    <textarea cols='50' rows='10' name='HFScriptsIns_settings[footer_beginning]' placeholder="<?php _e( '<!-- Before a footers scripts -->', 'header-and-footer-scripts-inserter' ) ?>"><?php echo esc_attr( $options['footer_beginning'] ); ?></textarea>
                                    <p class='help-text'><?php _e( 'Scripts from this field will be printed before a footers scripts. Do not place plain text in this!', 'header-and-footer-scripts-inserter' ) ?></p>
                                    <textarea cols='50' rows='10' name='HFScriptsIns_settings[footer_end]' placeholder="<?php _e( '<!-- After all footers scripts -->', 'header-and-footer-scripts-inserter' ) ?>"><?php echo esc_attr( $options['footer_end'] ); ?></textarea>
                                    <p class='help-text'><?php _e( 'Scripts from this field will be printed after all footers scripts. Do not place plain text in this!', 'header-and-footer-scripts-inserter' ) ?></p>
                                    <?php submit_button( __( 'Save Changes', 'header-and-footer-scripts-inserter' ), 'primary', 'submit', true ); ?>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- END-FORM -->

        </div>

	</div>
	<?php
}