<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Render Settings Tab Content
 */
?>
    <div class="has-sidebar sm-padded">
        <div id="post-body-content" class="has-sidebar-content">
            <div class="meta-box-sortabless">

                <form action="options.php" method="post" enctype="multipart/form-data">
                    <?php settings_fields( SPACEXCHIMP_P006_SETTINGS . '_settings_group' ); ?>

                    <?php
                        // Get options from the database
                        $options = get_option( SPACEXCHIMP_P006_SETTINGS . '_settings' );

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

                    <div class="postbox" id="head">
                        <h3 class="title"><?php _e( 'Head Section', $text ); ?></h3>
                        <div class="inside">
                            <p class="note"><?php _e( 'You can use the fields below to add scripts to HEAD section of your website.', $text ); ?></p>

                            <p class='help-text'><?php _e( 'Scripts from this field will be printed in the beginning of <b>HEAD</b> section. Do not place plain text in this!', $text ); ?></p>
                            <textarea name="spacexchimp_p006_settings[header_beginning]" id="spacexchimp_p006_settings[header_beginning]" ><?php echo $header_beginning; ?></textarea>

                            <p class='help-text'><?php _e( 'Scripts from this field will be printed in the end of <b>HEAD</b> section. Do not place plain text in this!', $text ); ?></p>
                            <textarea name="spacexchimp_p006_settings[header_end]" id="spacexchimp_p006_settings[header_end]" ><?php echo $header_end; ?></textarea>

                            <input type="submit" name="submit" id="submit" class="btn btn-primary" value="<?php _e( 'Save changes', $text ); ?>">
                        </div>
                    </div>

                    <div class="postbox" id="footer">
                        <h3 class="title"><?php _e( 'Footer Section', $text ); ?></h3>
                        <div class="inside">
                            <p class="note"><?php _e( 'You can use the fields below to add scripts to FOOTER section of your website.', $text ); ?></p>

                            <p class='help-text'><?php _e( 'Scripts from this field will be printed before a footers scripts. Do not place plain text in this!', $text ); ?></p>
                            <textarea name="spacexchimp_p006_settings[footer_beginning]" id="spacexchimp_p006_settings[footer_beginning]" ><?php echo $footer_beginning; ?></textarea>

                            <p class='help-text'><?php _e( 'Scripts from this field will be printed after all footers scripts. Do not place plain text in this!', $text ); ?></p>
                            <textarea name="spacexchimp_p006_settings[footer_end]" id="spacexchimp_p006_settings[footer_end]" ><?php echo $footer_end; ?></textarea>

                            <input type="submit" name="submit" id="submit" class="btn btn-primary" value="<?php _e( 'Save changes', $text ); ?>">
                        </div>
                    </div>

                    <div class="postbox" id="support-addition">
                        <h3 class="title"><?php _e( 'Support', $text ); ?></h3>
                        <div class="inside">
                            <p><?php _e( 'I\'m an independent developer, without a regular income, so every little contribution helps cover my costs and lets me spend more time building things for people like you to enjoy.', $text ); ?></p>
                            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" class="btn btn-default button-labeled">
                                                        <span class="btn-label">
                                                            <img src="<?php echo SPACEXCHIMP_P006_URL . 'inc/img/paypal.svg'; ?>" alt="PayPal">
                                                        </span>
                                                        <?php _e( 'Donate with PayPal', $text ); ?>
                                                </a>
                            <p><?php _e( 'Thanks for your support!', $text ); ?></p>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
<?php
