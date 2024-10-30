<?php
    global $coralRemoteImages;
?>
<div class="wrap">
    <h1>Coral Remote Images</h1>
    <form method="post" action="options.php"> 

    <?php settings_fields( $coralRemoteImages::OPTIONS_GROUP ); ?>
    <?php do_settings_sections( $coralRemoteImages::OPTIONS_GROUP ); ?>
        
    <table class="form-table">
        <tr valign="top">
            <th scope="row">Live URL</th>
            <td>
                <?php
                    $disable = '';
                    $url = esc_attr(get_option($coralRemoteImages::OPTIONS_FIELD_NAME));
                    if (defined('BSD_CORAL_LIVE_URL')) {
                        $disable = 'disabled';
                        $url = BSD_CORAL_LIVE_URL;
                    }
                ?>
                <input type="text" name="coral_remote_images_live" value="<?php echo $url; ?>" <?php echo $disable; ?> />
                <p>This should match the URL found in the admin panel by going to Settings > General > Wordpress Address (URL)</p>
            </td>
        </tr>
    </table>
    
    <?php submit_button(); ?>

</form>
</div>