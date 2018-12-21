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

if (!function_exists('fieldForm_date')) {
    function fieldForm_date($field, $value, $option = [])
    {
        $defaults = array(
            'type' => 'date',
            'name' => $field,
            'value' => $value
        );

        return '<input ' . _parse_form_attributes($option, $defaults) . ' />';
    }
}

if (!function_exists('fieldForm_readonly')) {
    function fieldForm_readonly($field, $value, $option = [])
    {
        $extra = $option;
        $extra['readonly'] = 'readonly';
        return form_input($field, $value, $extra);
    }
}

if (!function_exists('fieldForm_disabled')) {
    function fieldForm_disabled($field, $value, $option = [])
    {
        $extra = $option;
        $extra['disabled'] = 'disabled';
        return form_input($field, $value, $extra);
    }
}

if (!function_exists('fieldForm_dropdown')) {
    function fieldForm_dropdown($field, $value, $option = [])
    {
        $list_string = (!empty($option['options'])) ? $option['options'] : '';
        if (!$list_string) {
            $options = [];
        } else {
            $options = getAppListStrings($list_string);
        }

        $extra = $option;
        unset($extra['options']);
        return form_dropdown($field, $options, $value, $extra);
    }
}

if (!function_exists('fieldForm_relate')) {
    function fieldForm_relate($field, $value, $option = [])
    {
        $options = [];
        $extra = $option;
        $class = 'modernSelect';

        if (!empty($option['related'])) {
            $related = $option['related'];

            if (!empty($related['model'])) {
                $model = $related['model'];
                if (!empty($related['ajax'])) {
                    $controller = !empty($related['controller']) ? $related['controller'] : 'settings';
                    $class = 'modernAjaxSelect';
                    $extra['url'] = avoca_url('/' . $controller . '/options?model=' . $model);
                } else {
                    $id_field = !empty($related['id_field']) ? $related['id_field'] : 'id';
                    $text_field = !empty($related['text_field']) ? $related['text_field'] : 'name';

                    $ci =& get_instance();
                    $ci->load->model($model);
                    $records = $ci->$model->getAll();
                    foreach ($records['records'] as $record) {
                        $key = isset($record[$id_field]) ? $record[$id_field] : $record['id'];
                        $text = isset($record[$text_field]) ? $record[$text_field] : $record['id'];

                        $options[$key] = $text;
                    }
                }
            }
        }

        unset($extra['related']);
        $extra['class'] = isset($extra['class']) ? $class . ' ' . $extra['class'] : $class;
        if (!empty($extra['multiple'])) {
            $field = $field . '[]';
        }

        return form_dropdown($field, $options, $value, $extra);
    }
}