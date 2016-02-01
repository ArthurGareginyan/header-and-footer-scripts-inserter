<?php

/**
 * Prevent Direct Access
 */
defined('ABSPATH') or die("Restricted access!");

/**
 * Render Settings Page
 *
 * @since 1.1
 */
function HFScriptsIns_render_submenu_page() {

	// Declare variables
    $options = get_option( 'HFScriptsIns_settings' );

	// Page
	?>
	<div class="wrap">
		<h2>
            <?php _e( 'Header and Footer Scripts Inserter', 'HFScriptsIns' ); ?>
            <br/>
            <span>
                <?php _e( 'by <a href="http://www.arthurgareginyan.com" target="_blank">Arthur "Berserkr" Gareginyan</a>', 'HFScriptsIns' ); ?>
            <span/>
		</h2>

        <div id="poststuff" class="metabox-holder has-right-sidebar">

            <!-- SIDEBAR -->
            <div class="inner-sidebar">
                <div id="side-sortables" class="meta-box-sortabless ui-sortable">

                    <div id="about" class="postbox">
                        <h3 class="title"><?php _e( 'About', 'HFScriptsIns' ) ?></a></h3>
                        <div class="inside">
                            <p class="about">
                                <img src="<?php echo plugins_url('thanks.png', __FILE__); ?>">
                            </p>
                            <p>
                                <?php _e( 'This plugin allows you to easily insert scripts in your website.', 'HFScriptsIns' ) ?>
                            </p>
                            <p>
                                <?php _e( 'To use, enter your custom scripts, then click "Save Changes". It\'s that simple!', 'HFScriptsIns' ) ?>
                            </p>
                        </div>
                    </div>

                    <div id="donate" class="postbox">
                        <h3 class="title"><?php _e( 'Donate', 'HFScriptsIns' ) ?></h3>
                        <div class="inside">
                            <p class="donate"><?php _e( 'If you like this plugin and find it useful, help me to make this plugin even better and keep it up-to-date.', 'HFScriptsIns' ) ?></p>
                            <div class="aligncenter">
                                <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" rel="nofollow">
                                    <img src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" alt="Make a donation">
                                </a>
                            </div>
                            <p class="donate"><?php _e( 'Thanks for your support!', 'HFScriptsIns' ) ?></p>
                        </div>
                    </div>

                    <div id="help" class="postbox">
                        <h3 class="title"><?php _e( 'Help', 'HFScriptsIns' ) ?></h3>
                        <div class="inside">
                            <div class="aligncenter">
                                <p><?php _e( 'If you want more options then tell me and I will be happy to add it.', 'HFScriptsIns' ) ?></p>
                            </div>
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
                                <h3 class="title"><?php _e( 'Header Section', 'HFScriptsIns' ) ?></h3>
                                <div class="inside">
                                    <p><?php _e( 'You can use the field below to add scripts to Header of your website.', 'HFScriptsIns' ) ?></p>
                                    <textarea cols='50' rows='10' name='HFScriptsIns_settings[header_beginning]' placeholder="<!-- Beginning of the <head> tag -->"><?php echo esc_attr( $options[header_beginning] ); ?></textarea>
                                    <p class='help-text'>Scripts from this field will be printed in the beginning of <b><\head></b> section. Do not place plain text in this!</p>
                                    <textarea cols='50' rows='10' name='HFScriptsIns_settings[header_end]' placeholder="<!-- End of the <head> tag -->"><?php echo esc_attr( $options[header_end] ); ?></textarea>
                                    <p class='help-text'>Scripts from this field will be printed in the end of <b><\head></b> section. Do not place plain text in this!</p>
                                    <?php submit_button( __( 'Save Changes', 'HFScriptsIns' ), 'primary', 'submit', true ); ?>
                                </div>
                            </div>

                            <div class="postbox" id="Footer">
                                <h3 class="title"><?php _e( 'Footer Section', 'HFScriptsIns' ) ?></h3>
                                <div class="inside">
                                    <p><?php _e( 'You can use the field below to add scripts to Footer of your website.', 'HFScriptsIns' ) ?></p>
                                    <textarea cols='50' rows='10' name='HFScriptsIns_settings[footer_beginning]' placeholder="<!-- Before a footers scripts -->"><?php echo esc_attr( $options[footer_beginning] ); ?></textarea>
                                    <p class='help-text'>Scripts from this field will be printed before a footers scripts. Do not place plain text in this!</p>
                                    <textarea cols='50' rows='10' name='HFScriptsIns_settings[footer_end]' placeholder="<!-- After all footers scripts -->"><?php echo esc_attr( $options[footer_end] ); ?></textarea>
                                    <p class='help-text'>Scripts from this field will be printed after all footers scripts. Do not place plain text in this!</p>
                                    <?php submit_button( __( 'Save Changes', 'HFScriptsIns' ), 'primary', 'submit', true ); ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- END-FORM -->

            </form>

        </div>

	</div>
	<?php
}