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


class Blog extends AVC_Model
{
    protected $table = 'blogs';

    protected function displayRecord($record)
    {
        if (is_array($record)) {
            try {
                $record['category'] = json_decode($record['category'], true);
            } catch (Exception $exception) {}
        } else if (is_object($record)) {
            try {
                $record->category = json_decode($record->category, true);
            } catch (Exception $exception) {}
        }

        return $record;
    }
}