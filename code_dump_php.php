<?php

function a_qoute_admin_action(){
    add_menu_page(
        __('Reservations Pages'),// the page title
        __('Donation'),//menu title
        'edit_themes',//capability 
        'a-qoute',//menu slug/handle this is what you need!!!
        'qoute_settings',//callback function
        '',//icon_url,
        ''//position
    );
    add_submenu_page(
        'a-qoute',
        'Donations Log', //page title
        'Donations Log', //menu title
        'edit_themes', //capability,
        'DonationsLog',//menu slug
        'Donations_Log' //callback function
    );
}
add_action('admin_menu', 'a_qoute_admin_action');
