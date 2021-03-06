<?php

/**
 * Embeds a Vimeo video into the current page. Used by
 * the WYSIWYG editor's dynamic objects menu.
 */

$data['video'] = substr (parse_url ($data['url'], PHP_URL_PATH), 1);

$data['width'] = isset ($data['width']) ? $data['width'] : 480;
$data['height'] = isset ($data['height']) ? $data['height'] : 270;

echo $tpl->render ('social/video/vimeo', $data);

?>