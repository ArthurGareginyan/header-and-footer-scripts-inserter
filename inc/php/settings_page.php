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
 * @since 3.0
 */
function HFScriptsIns_render_submenu_page() {

    // After settings updated
    if ( isset( $_GET['settings-updated'] ) ) {

        // Successful message
        ?>
            <div id="message" class="updated">
                <p><?php _e( 'Scripts updated successfully.', 'header-and-footer-scripts-inserter' ); ?></p>
            </div>
        <?php
    }

	// Page
	?>
	<div class="wrap">
		<h2>
            <?php _e( 'Head and Footer Scripts Inserter', 'header-and-footer-scripts-inserter' ); ?>
            <br/>
            <span>
                <?php _e( 'by <a href="http://www.arthurgareginyan.com" target="_blank">Arthur Gareginyan</a>', 'header-and-footer-scripts-inserter' ); ?>
            <span/>
		</h2>

        <div id="poststuff" class="metabox-holder has-right-sidebar">

            <!-- SIDEBAR -->
            <div class="inner-sidebar">
                <div id="side-sortables" class="meta-box-sortabless ui-sortable">

                    <div id="about" class="postbox">
                        <h3 class="title"><?php _e( 'About', 'header-and-footer-scripts-inserter' ) ?></a></h3>
                        <div class="inside">
                            <p><?php _e( 'This plugin allows you to easily insert scripts in your website.', 'header-and-footer-scripts-inserter' ); ?></p>
                        </div>
                    </div>

                    <div id="using" class="postbox">
                        <h3 class="title"><?php _e( 'Using', 'header-and-footer-scripts-inserter' ) ?></a></h3>
                        <div class="inside">
                            <p><?php _e( 'To use, enter your custom scripts, then click "Save Changes". It\'s that simple!', 'header-and-footer-scripts-inserter' ); ?></p>
                        </div>
                    </div>

                    <div id="help" class="postbox">
                        <h3 class="title"><?php _e( 'Help', 'header-and-footer-scripts-inserter' ); ?></h3>
                        <div class="inside">
                            <p><?php _e( 'Got something to say? Need help?', 'header-and-footer-scripts-inserter' ); ?></p>
                            <p><a href="mailto:arthurgareginyan@gmail.com?subject=Head and Footer Scripts Inserter">arthurgareginyan@gmail.com</a></p>
                        </div>
                    </div>

                    <div id="donate" class="postbox">
                        <h3 class="title"><?php _e( 'Donate', 'header-and-footer-scripts-inserter' ) ?></h3>
                        <div class="inside">
                            <img src="<?php echo plugins_url('../img/thanks.png', __FILE__); ?>">
                            <p><?php _e( 'If you like this plugin and find it useful, help me to make this plugin even better and keep it up-to-date.', 'header-and-footer-scripts-inserter' ); ?></p>
                            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" rel="nofollow">
                                <img src="<?php echo plugins_url('../img/btn_donateCC_LG.gif', __FILE__); ?>" alt="Make a donation">
                            </a>
                            <p><?php _e( 'Thanks for your support!', 'header-and-footer-scripts-inserter' ); ?></p>
                        </div>
                    </div>

                    <div id="freelance" class="postbox">
                        <h3 class="title"><?php _e( 'Freelance', 'header-and-footer-scripts-inserter' ) ?></h3>
                        <div class="inside">
                            <img src="<?php echo plugins_url('../img/author.png', __FILE__); ?>">
                            <p><?php _e( 'Hello, my name is Arthur and I\'m a freelance web designer and developer.', 'header-and-footer-scripts-inserter' ); ?></p>
                            <p><?php _e( 'Share your thoughts with me. You may have a brilliant idea in your mind and I can make it happen, so let’s get started!', 'header-and-footer-scripts-inserter' ); ?></p>
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

                            <?php
                                // Declare variables
                                $options = get_option( 'HFScriptsIns_settings' );
                                $header_beginning = isset( $options['header_beginning'] ) && !empty( $options['header_beginning'] ) ? esc_attr( $options['header_beginning'] ) : '';
                                $header_end = isset( $options['header_end'] ) && !empty( $options['header_end'] ) ? esc_attr( $options['header_end'] ) : '';
                                $footer_beginning = isset( $options['footer_beginning'] ) && !empty( $options['footer_beginning'] ) ? esc_attr( $options['footer_beginning'] ) : '';
                                $footer_end = isset( $options['footer_end'] ) && !empty( $options['footer_end'] ) ? esc_attr( $options['footer_end'] ) : '';
                                
                                // Add rows if all the rows is less than 10
                                $type = array("header_beginning", "header_end", "footer_beginning", "footer_end");
                                foreach ($type as $value) {
                                    $i = count(explode("\n", $$value));
                                    for ( $i = $i; $i < 10; $i++) {
                                        $$value .= "\n";
                                    }
                                }
                            ?>

                            <div class="postbox" id="Head">
                                <h3 class="title"><?php _e( 'Head Section', 'header-and-footer-scripts-inserter' ) ?></h3>
                                <div class="inside">
                                    <p><?php _e( 'You can use the fields below to add scripts to Head of your website.', 'header-and-footer-scripts-inserter' ); ?></p>
                                    <textarea name="HFScriptsIns_settings[header_beginning]" id="HFScriptsIns_settings[header_beginning]" ><?php echo $header_beginning; ?></textarea>
                                    <p class='help-text'><?php _e( 'Scripts from this field will be printed in the beginning of <b>HEAD</b> section. Do not place plain text in this!', 'header-and-footer-scripts-inserter' ); ?></p>
                                    <textarea name="HFScriptsIns_settings[header_end]" id="HFScriptsIns_settings[header_end]" ><?php echo $header_end; ?></textarea>
                                    <p class='help-text'><?php _e( 'Scripts from this field will be printed in the end of <b>HEAD</b> section. Do not place plain text in this!', 'header-and-footer-scripts-inserter' ); ?></p>
                                    <?php submit_button( __( 'Save Changes', 'header-and-footer-scripts-inserter' ), 'primary', 'submit', true ); ?>
                                </div>
                            </div>

                            <div class="postbox" id="Footer">
                                <h3 class="title"><?php _e( 'Footer Section', 'header-and-footer-scripts-inserter' ) ?></h3>
                                <div class="inside">
                                    <p><?php _e( 'You can use the fields below to add scripts to Footer of your website.', 'header-and-footer-scripts-inserter' ); ?></p>
                                    <textarea name="HFScriptsIns_settings[footer_beginning]" id="HFScriptsIns_settings[footer_beginning]" ><?php echo $footer_beginning; ?></textarea>
                                    <p class='help-text'><?php _e( 'Scripts from this field will be printed before a footers scripts. Do not place plain text in this!', 'header-and-footer-scripts-inserter' ); ?></p>
                                    <textarea name="HFScriptsIns_settings[footer_end]" id="HFScriptsIns_settings[footer_end]" ><?php echo $footer_end; ?></textarea>
                                    <p class='help-text'><?php _e( 'Scripts from this field will be printed after all footers scripts. Do not place plain text in this!', 'header-and-footer-scripts-inserter' ); ?></p>
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