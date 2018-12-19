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


class Profile extends AVC_Model
{
    protected $table = 'profile';

    public function getProfile()
    {
        $profile = $this->get_where();

        try {
            $profile['title_arr'] = json_decode($profile['title'], true);
            $profile['title_str'] = implode(', ', $profile['title_arr']);
            array_unshift($profile['title_arr'], $profile['name']);

            $profile['social_arr'] = json_decode($profile['social'], true);
        } catch (Exception $exception) {}

        return $profile;
    }
}