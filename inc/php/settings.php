<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Render Settings Tab
 *
 * @since 4.2
 */
?>
    <!-- SIDEBAR -->
    <div class="inner-sidebar">
        <div id="side-sortables" class="meta-box-sortabless ui-sortable">

            <div id="about" class="postbox">
                <h3 class="title"><?php _e( 'About', HFSINS_TEXT ); ?></h3>
                <div class="inside">
                    <p><?php _e( 'This plugin allows you to easily insert scripts in your website.', HFSINS_TEXT ); ?></p>
                </div>
            </div>

            <div id="support" class="postbox">
                <h3 class="title"><?php _e( 'Support', HFSINS_TEXT ); ?></h3>
                <div class="inside">
                    <p><?php _e( 'I\'m an independent developer, without a regular income, so every little contribution helps cover my costs and lets me spend more time building things for people like you to enjoy.', HFSINS_TEXT ); ?></p>
                    <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" class="additional-button paypal"><?php _e( 'Donate with PayPal', HFSINS_TEXT ); ?></a>
                    <p><?php _e( 'Thanks for your support!', HFSINS_TEXT ); ?></p>
                </div>
            </div>

            <div id="help" class="postbox">
                <h3 class="title"><?php _e( 'Help', HFSINS_TEXT ); ?></h3>
                <div class="inside">
                    <p><?php _e( 'Got something to say? Need help?', HFSINS_TEXT ); ?></p>
                    <p><a href="mailto:arthurgareginyan@gmail.com?subject=<?php echo HFSINS_NAME; ?>">arthurgareginyan@gmail.com</a></p>
                </div>
            </div>

        </div>
    </div>
    <!-- END-SIDEBAR -->

    <!-- FORM -->
    <div class="has-sidebar sm-padded">
        <div id="post-body-content" class="has-sidebar-content">
            <div class="meta-box-sortabless">

                <form action="options.php" method="post" enctype="multipart/form-data">
                    <?php settings_fields( HFSINS_SETTINGS . '_settings_group' ); ?>

                    <?php
                        // Get options from the database
                        $options = get_option( HFSINS_SETTINGS . '_settings' );

                        // Set default value if option is empty
                        $header_beginning = !empty( $options['header_beginning'] ) ? esc_attr( $options['header_beginning'] ) : '';
                        $header_end = !empty( $options['header_end'] ) ? esc_attr( $options['header_end'] ) : '';
                        $footer_beginning = !empty( $options['footer_beginning'] ) ? esc_attr( $options['footer_beginning'] ) : '';
                        $footer_end = !empty( $options['footer_end'] ) ? esc_attr( $options['footer_end'] ) : '';

                        // Add rows if all the rows is less than 10
                        $type = array("header_beginning", "header_end", "footer_beginning", "footer_end");
                        foreach ( $type as $value ) {
                            $i = count(explode("\n", $$value));
                            for ( $i = $i; $i < 10; $i++) {
                                $$value .= "\n";
                            }
                        }
                    ?>

                    <div class="postbox" id="Head">
                        <h3 class="title"><?php _e( 'Head Section', HFSINS_TEXT ); ?></h3>
                        <div class="inside">
                            <p class="note"><?php _e( 'You can use the fields below to add scripts to HEAD section of your website.', HFSINS_TEXT ); ?></p>
                            <p class='help-text'><?php _e( 'Scripts from this field will be printed in the beginning of <b>HEAD</b> section. Do not place plain text in this!', HFSINS_TEXT ); ?></p>
                            <textarea name="HFScriptsIns_settings[header_beginning]" id="HFScriptsIns_settings[header_beginning]" ><?php echo $header_beginning; ?></textarea>
                            <p class='help-text'><?php _e( 'Scripts from this field will be printed in the end of <b>HEAD</b> section. Do not place plain text in this!', HFSINS_TEXT ); ?></p>
                            <textarea name="HFScriptsIns_settings[header_end]" id="HFScriptsIns_settings[header_end]" ><?php echo $header_end; ?></textarea>
                            <?php submit_button( __( 'Save Changes', HFSINS_TEXT ), 'primary', 'submit', true ); ?>
                        </div>
                    </div>

                    <div class="postbox" id="Footer">
                        <h3 class="title"><?php _e( 'Footer Section', HFSINS_TEXT ); ?></h3>
                        <div class="inside">
                            <p class="note"><?php _e( 'You can use the fields below to add scripts to FOOTER section of your website.', HFSINS_TEXT ); ?></p>
                            <p class='help-text'><?php _e( 'Scripts from this field will be printed before a footers scripts. Do not place plain text in this!', HFSINS_TEXT ); ?></p>
                            <textarea name="HFScriptsIns_settings[footer_beginning]" id="HFScriptsIns_settings[footer_beginning]" ><?php echo $footer_beginning; ?></textarea>
                            <p class='help-text'><?php _e( 'Scripts from this field will be printed after all footers scripts. Do not place plain text in this!', HFSINS_TEXT ); ?></p>
                            <textarea name="HFScriptsIns_settings[footer_end]" id="HFScriptsIns_settings[footer_end]" ><?php echo $footer_end; ?></textarea>
                            <?php submit_button( __( 'Save Changes', HFSINS_TEXT ), 'primary', 'submit', true ); ?>
                        </div>
                    </div>

                    <div class="postbox" id="support-addition">
                        <h3 class="title"><?php _e( 'Support', HFSINS_TEXT ); ?></h3>
                        <div class="inside">
                            <p><?php _e( 'I\'m an independent developer, without a regular income, so every little contribution helps cover my costs and lets me spend more time building things for people like you to enjoy.', HFSINS_TEXT ); ?></p>
                            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" class="additional-button paypal"><?php _e( 'Donate with PayPal', HFSINS_TEXT ); ?></a>
                            <p><?php _e( 'Thanks for your support!', HFSINS_TEXT ); ?></p>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
    <!-- END-FORM -->
<?php