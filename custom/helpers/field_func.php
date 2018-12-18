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

function fieldForm_date($field, $value, $extra = [])
{
    $defaults = array(
        'type' => 'date',
        'name' => $field,
        'value' => $value
    );

    return '<input ' . _parse_form_attributes($extra, $defaults) . ' />';
}