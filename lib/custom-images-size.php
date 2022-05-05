<?php

function _themename_image_configuration() {
    add_image_size('gallery', 400, 400, );
}
add_action( 'after_setup_theme', '_themename_image_configuration' );
