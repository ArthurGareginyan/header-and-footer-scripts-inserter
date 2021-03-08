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
                    <?php settings_fields( $plugin['settings'] . '_settings_group' ); ?>

                    <?php
                        // Put the value of the plugin options into an array for easier access
                        $options = spacexchimp_p006_options();
                    ?>

                    <div class="postbox" id="head">
                        <h3 class="title">
                            <?php _e( 'Head Section', $plugin['text'] ); ?>
                            <div class="pull-right">
                                <span class="not-saved"><?php _e( 'NOT SAVED!', $plugin['text'] ); ?></span>
                            </div>
                        </h3>
                        <div class="inside">
                            <p class="note"><?php _e( 'You can use the fields below to add your custom HTML code to the HEAD section of your website\'s front end.', $plugin['text'] ); ?></p>

                            <p class='help-text'>
                                <?php _e( 'The HTML code from this field will be printed at the beginning of the HEAD section.', $plugin['text'] ); ?>
                                <?php _e( 'Do not place plain text in this!', $plugin['text'] ); ?>
                            </p>
                            <textarea
                                name="spacexchimp_p006_settings[header_beginning]"
                                id="spacexchimp_p006_settings[header_beginning]"
                                placeholder="<?php _e( 'Enter your custom HTML code here', $plugin['text'] ); ?>"
                            ><?php echo esc_attr( $options['header_beginning'] ); ?></textarea>

                            <p class='help-text'>
                                <?php _e( 'The HTML code from this field will be printed at the end of the HEAD section.', $plugin['text'] ); ?>
                                <?php _e( 'Do not place plain text in this!', $plugin['text'] ); ?>
                            </p>
                            <textarea
                                name="spacexchimp_p006_settings[header_end]"
                                id="spacexchimp_p006_settings[header_end]"
                                placeholder="<?php _e( 'Enter your custom HTML code here', $plugin['text'] ); ?>"
                            ><?php echo esc_attr( $options['header_end'] ); ?></textarea>

                            <!-- SUBMIT -->
                            <input type="submit" name="submit" id="submit" class="btn btn-primary" value="<?php _e( 'Save changes', $plugin['text'] ); ?>">
                            <!-- END SUBMIT -->

                        </div>
                    </div>

                    <div class="postbox" id="footer">
                        <h3 class="title">
                            <?php _e( 'Footer Section', $plugin['text'] ); ?>
                            <div class="pull-right">
                                <span class="not-saved"><?php _e( 'NOT SAVED!', $plugin['text'] ); ?></span>
                            </div>
                        </h3>
                        <div class="inside">
                            <p class="note"><?php _e( 'You can use the fields below to add your custom HTML code to the FOOTER section of your website\'s front end.', $plugin['text'] ); ?></p>

                            <p class='help-text'>
                                <?php _e( 'The HTML code from this field will be printed at the beginning of the FOOTER section.', $plugin['text'] ); ?>
                                <?php _e( 'Do not place plain text in this!', $plugin['text'] ); ?>
                            </p>
                            <textarea
                                name="spacexchimp_p006_settings[footer_beginning]"
                                id="spacexchimp_p006_settings[footer_beginning]"
                                placeholder="<?php _e( 'Enter your custom HTML code here', $plugin['text'] ); ?>"
                            ><?php echo esc_attr( $options['footer_beginning'] ); ?></textarea>

                            <p class='help-text'>
                                <?php _e( 'The HTML code from this field will be printed at the end of the FOOTER section.', $plugin['text'] ); ?>
                                <?php _e( 'Do not place plain text in this!', $plugin['text'] ); ?>
                            </p>
                            <textarea
                                name="spacexchimp_p006_settings[footer_end]"
                                id="spacexchimp_p006_settings[footer_end]"
                                placeholder="<?php _e( 'Enter your custom HTML code here', $plugin['text'] ); ?>"
                            ><?php echo esc_attr( $options['footer_end'] ); ?></textarea>

                            <!-- HIDDEN -->
                            <?php
                                spacexchimp_p006_control_hidden( 'hidden_scrollto',
                                                                 '0'
                                                               );
                            ?>
                            <!-- END HIDDEN -->

                            <!-- SUBMIT -->
                            <input type="submit" name="submit" id="submit" class="btn btn-primary" value="<?php _e( 'Save changes', $plugin['text'] ); ?>">
                            <!-- END SUBMIT -->

                        </div>
                    </div>

                    <!-- SUPPORT -->
                    <div class="postbox" id="support-addition">
                        <h3 class="title"><?php _e( 'Support', $plugin['text'] ); ?></h3>
                        <div class="inside">
                            <p><?php _e( 'Every little contribution helps to cover our costs and allows us to spend more time creating things for awesome people like you to enjoy.', $plugin['text'] ); ?></p>
                            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" class="btn btn-default button-labeled">
                                <span class="btn-label">
                                    <img src="<?php echo $plugin['url'] . 'inc/img/paypal.svg'; ?>" alt="PayPal">
                                </span>
                                <?php _e( 'Donate with PayPal', $plugin['text'] ); ?>
                            </a>
                            <p><?php _e( 'Thanks for your support!', $plugin['text'] ); ?></p>
                        </div>
                    </div>
                    <!-- END SUPPORT -->

                </form>

            </div>
        </div>
    </div>
<?php
