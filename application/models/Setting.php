<?php
/**
 * Created by Jacky.
 * Developer
 * Email: jacky@youaddon.com / hungtran@up5.vn
 * Phone: +84 972014011
 * Skype: tdhungit
 * Site: https://youaddon.com / https://up5.vn
 * Github: https://github.com/teamcarodev / https://github.com/youaddon
 * Facebook: https://www.facebook.com/jackytran0101
 */


class Setting extends AVC_Model
{
    protected $table = 'settings';
    protected $limit = -1;

    public function getSystems()
    {
        $settings = [];

        $sys = $this->get_where(['category' => 'system'], false);
        foreach ($sys['records'] as $item) {
            $settings[$item['name']] = $item['value'];
        }

        return $settings;
    }
}