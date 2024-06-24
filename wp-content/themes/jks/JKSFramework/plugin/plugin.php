<?php
function adt_plugin_activation() {
//Day la phan thiet lap cac plugin
    $plugins = array(

        array(
            'name'=>'Contact Form 7',
            'slug'=>'contact-form-7',
            'required' => true
        ),
        array(
            'name'=>'TinyMCE Advanced',
            'slug'=>'tinymce-advanced',
            'required' => true
        )

    );
    //Day la phan thiet lap TGM
    $configs = array(
        'menu' => 'adt_plugin_install',
        'has_notice' => true,
        'dismissable' => false,
        'is_automatic' => true
    );
    tgmpa( $plugins, $configs );

}
//add_action('tgmpa_register', 'adt_plugin_activation');
?>