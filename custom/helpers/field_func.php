<?php
/**
 * Created by AVOCA.IO
 * Website: http://avoca.io
 * User: Jacky
 * Email: hungtran@up5.vn | jacky@youaddon.com
 * Person: tdhungit@gmail.com
 * Skype: tdhungit
 * Git: https://github.com/tdhungit
 */

function fieldForm_image($field, $value, $option = [])
{
    $class = isset($option['imgClass']) ? $option['imgClass'] : 'img-thumbnail';
    unset($option['class']);
    unset($option['imgClass']);

    $default = [
        'class' => $class
    ];

    return '
        <input type="file" name="' . $field . '" class="form-control-file">
        <div class="form-text">
            <img src="' . avoca_static(false) . '/uploads/' . $value . '" '. _parse_form_attributes($option, $default) .'>
        </div>
    ';
}