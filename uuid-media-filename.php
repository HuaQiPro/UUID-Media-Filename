<?php
/*
Plugin Name: UUID Media Filename
Description: Use UUID as media file names when uploading.
Version: 1.0
Author: ZuoZ.NeT
*/

function change_uploaded_media_file_name($filename) {
    $info = pathinfo($filename);
    $ext = empty($info['extension']) ? '' : '.' . $info['extension'];
    $newname = wp_generate_uuid4() . $ext;
    return $newname;
}

add_filter('wp_unique_filename', 'change_uploaded_media_file_name');
