<?php
add_action( 'admin_menu', 'themeEditorDemos', 99 );
function themeEditorDemos(){
    add_menu_page(
        __( 'Editar Theme', 'themeEditorDemos' ),
        __( 'Editar Theme', 'themeEditorDemos' ),
        'edit_posts',
        'managerAffiliate',
        "fieldsEditorThemeDemo",
        'dashicons-groups',
        5
    );
}