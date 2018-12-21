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

class Blogcat extends AVC_Model
{
    protected $table = 'blogcats';

    public function create($data)
    {
        if (empty($data['slug'])) {
            $data['slug'] = strtolower(url_title($data['name']));
        } else {
            $data['slug'] = strtolower(url_title($data['slug']));
        }

        return parent::create($data);
    }

    public function update($data)
    {
        if (!empty($data['slug'])) {
            $data['slug'] = strtolower(url_title($data['slug']));
        }

        return parent::update($data);
    }
}