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
 * @since 3.3
 */
function HFScriptsIns_render_submenu_page() {

    // After settings updated
    if ( isset( $_GET['settings-updated'] ) ) {

        // Successful message
        ?>
            <div id="message" class="updated">
                <p><?php _e( 'Scripts updated successfully.', HFSINS_TEXT ); ?></p>
            </div>
        <?php
    }

	// Page
	?>
	<div class="wrap">
		<h2>
            <?php _e( 'Head and Footer Scripts Inserter', HFSINS_TEXT ); ?>
            <br/>
            <span>
                <?php _e( 'by <a href="http://www.arthurgareginyan.com" target="_blank">Arthur Gareginyan</a>', HFSINS_TEXT ); ?>
            <span/>
		</h2>

        <div id="poststuff" class="metabox-holder has-right-sidebar">

            <!-- SIDEBAR -->
            <div class="inner-sidebar">
                <div id="side-sortables" class="meta-box-sortabless ui-sortable">

                    <div id="about" class="postbox">
                        <h3 class="title"><?php _e( 'About', HFSINS_TEXT ); ?></a></h3>
                        <div class="inside">
                            <p><?php _e( 'This plugin allows you to easily insert scripts in your website.', HFSINS_TEXT ); ?></p>
                        </div>
                    </div>

                    <div id="help" class="postbox">
                        <h3 class="title"><?php _e( 'Help', HFSINS_TEXT ); ?></h3>
                        <div class="inside">
                            <p><?php _e( 'Got something to say? Need help?', HFSINS_TEXT ); ?></p>
                            <p><a href="mailto:arthurgareginyan@gmail.com?subject=Head and Footer Scripts Inserter">arthurgareginyan@gmail.com</a></p>
                        </div>
                    </div>

                    <div id="donate" class="postbox">
                        <h3 class="title"><?php _e( 'Donate', HFSINS_TEXT ); ?></h3>
                        <div class="inside">
                            <p><?php _e( 'I\'m an independent developer, without a regular income, so every little contribution helps cover my costs and lets me spend more time building things for people like you to enjoy.', HFSINS_TEXT ); ?></p>
                            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" rel="nofollow">
                                <img src="<?php echo plugins_url('../img/btn_donateCC_LG.gif', __FILE__); ?>" alt="Make a donation">
                            </a>
                            <p><?php _e( 'Thanks for your support!', HFSINS_TEXT ); ?></p>
                        </div>
                    </div>

                    <a href="//www.iconfinder.com/?ref=ArthurGareginyan" target="_blank" rel="nofollow">
                        <img style="border:0px" src="<?php echo plugins_url('../img/banner.png', __FILE__); ?>" width="280" height="180" alt="">
                    </a>

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
                                <h3 class="title"><?php _e( 'Head Section', HFSINS_TEXT ); ?></h3>
                                <div class="inside">
                                    <p><?php _e( 'You can use the fields below to add scripts to Head of your website.', HFSINS_TEXT ); ?></p>
                                    <textarea name="HFScriptsIns_settings[header_beginning]" id="HFScriptsIns_settings[header_beginning]" ><?php echo $header_beginning; ?></textarea>
                                    <p class='help-text'><?php _e( 'Scripts from this field will be printed in the beginning of <b>HEAD</b> section. Do not place plain text in this!', HFSINS_TEXT ); ?></p>
                                    <textarea name="HFScriptsIns_settings[header_end]" id="HFScriptsIns_settings[header_end]" ><?php echo $header_end; ?></textarea>
                                    <p class='help-text'><?php _e( 'Scripts from this field will be printed in the end of <b>HEAD</b> section. Do not place plain text in this!', HFSINS_TEXT ); ?></p>
                                    <?php submit_button( __( 'Save Changes', HFSINS_TEXT ), 'primary', 'submit', true ); ?>
                                </div>
                            </div>

                            <div class="postbox" id="Footer">
                                <h3 class="title"><?php _e( 'Footer Section', HFSINS_TEXT ); ?></h3>
                                <div class="inside">
                                    <p><?php _e( 'You can use the fields below to add scripts to Footer of your website.', HFSINS_TEXT ); ?></p>
                                    <textarea name="HFScriptsIns_settings[footer_beginning]" id="HFScriptsIns_settings[footer_beginning]" ><?php echo $footer_beginning; ?></textarea>
                                    <p class='help-text'><?php _e( 'Scripts from this field will be printed before a footers scripts. Do not place plain text in this!', HFSINS_TEXT ); ?></p>
                                    <textarea name="HFScriptsIns_settings[footer_end]" id="HFScriptsIns_settings[footer_end]" ><?php echo $footer_end; ?></textarea>
                                    <p class='help-text'><?php _e( 'Scripts from this field will be printed after all footers scripts. Do not place plain text in this!', HFSINS_TEXT ); ?></p>
                                    <?php submit_button( __( 'Save Changes', HFSINS_TEXT ), 'primary', 'submit', true ); ?>
                                </div>
                            </div>

                            <div class="postbox" id="Using">
                                <h3 class="title"><?php _e( 'Using', HFSINS_TEXT ); ?></h3>
                                <div class="inside">
                                    <p><?php _e( 'To use, enter your custom scripts, then click "Save Changes". It\'s that simple!', HFSINS_TEXT ); ?></p>
                                    <p><?php _e( 'Note that this fields are for inserting HTML code, so JavaScript and CSS code must be wrapped in the corresponding HTML tag. For JavaScript code use the `&lt;script&gt;` tag, and for CSS code use the `&lt;style&gt;` tag. Example:', HFSINS_TEXT ); ?></p>
<?php $ExampleCode = '&lt;script&gt;
    function myFunction() {
        document.getElementById(&quot;demo&quot;).innerHTML = &quot;Hello World!&quot;;
    }
&lt;/script&gt;
    
&lt;style&gt;
    .example {
    color: #000;
    }
&lt;/style&gt;'; ?>
                                    <pre><code><?php echo $ExampleCode; ?></code></pre>
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