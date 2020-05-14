<div>
    <h2>Covid-19 Alert Modal</h2>
    <form method="post" action="options.php">
        <?php settings_fields( 'covid_modal' ); ?>
        <h3>Options page</h3>
        <table>
            <tr valign="top">
                <th scope="row"><label for="modal_title">Modal Title</label></th>
                <td><input type="text" name="modal_title" id="modal_title" value="<?php echo get_option('modal_title'); ?>" /></td>
            </tr>
            <tr valign="top">
                <th scope="row"><label for="modal_content">Modal Content</label></th>
                <td><?php
                    $settings = ['textarea_name' => 'modal_content'];
                    wp_editor(get_option('modal_content'), 'modal_content', $settings );
                    ?></td>
            </tr>
            <tr valign="top">
                <th scope="row"><label for="cta_link_url">Modal CTA Link URL</label></th>
                <td><input type="text" name="cta_link_url" id="cta_link_url" value="<?php echo get_option('cta_link_url'); ?>" /></td>
            </tr>
            <tr valign="top">
                <th scope="row"><label for="cta_link_text">Modal CTA Link Text</label></th>
                <td><input type="text" name="cta_link_text" id="cta_link_text" value="<?php echo get_option('cta_link_text'); ?>" /></td>
            </tr>
            <tr valign="top">
                <th scope="row"><label for="modal_enabled">Enable Modal</label></th>
                <td><input type="checkbox" name="modal_enabled" id="modal_enabled" value="1" <?php checked(1, get_option('modal_enabled'), true); ?> /></td>
            </tr>
        </table>
        <?php submit_button(); ?>
    </form>
</div>
