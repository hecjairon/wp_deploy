<?php
add_action( 'admin_menu', 'themeEditorDemos', 99 );
function themeEditorDemos(){
    add_menu_page(
        __( 'Editar Theme', 'themeEditorDemos' ),
        __( 'Editar Theme', 'themeEditorDemos' ),
        'edit_posts',
        'themeEditorField',
        "fieldsEditorThemeDemo",
        'dashicons-groups',
        5
    );
}

function fieldsEditorThemeDemo(){
    CFS()->create_field( [
            'type' => 'select',
            'input_name' => "my_name_is",
            'options' => [
                'choices' => [
                    '==' => "teste",
                    '!=' => "teste 2",
                ],
                'force_single' => true,
            ],
            'value' => "",
        ] );
}