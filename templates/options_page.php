<div>
    <h2>Covid Alert Modal</h2>
    <form method="post" action="options.php">
        <?php settings_fields( 'covid_modal' ); ?>
        <h3>Options page</h3>
        <table>
            <tr valign="top">
                <th scope="row"><label for="modal_content">Label</label></th>
                <td><?php
                    $settings = ['textarea_name' => 'modal_content'];
                    wp_editor(get_option('modal_content'), 'modal_content', $settings );
                ?></td>
            </tr>
        </table>
        <?php submit_button(); ?>
    </form>
</div>