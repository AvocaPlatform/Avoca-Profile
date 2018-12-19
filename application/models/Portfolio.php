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


class Portfolio extends AVC_Model
{
    protected $table = 'portfolios';

    public function displayRecord($record)
    {
        if (is_array($record)) {
            try {
                $record['category_arr'] = json_decode($record['category']);
                $record['class_cat'] = implode(' ', $record['category_arr']);
            } catch (Exception $exception) {}
        }

        return $record;
    }
}