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


class User extends AVC_Model
{
    protected $table = 'users';

    /**
     * hash user passoword
     *
     * @param $password
     * @return string
     */
    public function hashPassword($password)
    {
        return md5($password);
    }

    /**
     * user login check
     *
     * @param $username
     * @param $password
     * @return array|bool|mixed|null
     */
    public function userLogin($username, $password)
    {
        $user = $this->get_where([
            'username' => $username,
            'password' => $this->hashPassword($password)
        ]);

        if (!$user) {
            return false;
        }

        return $user;
    }

    public function create($data)
    {
        if (!empty($data['password'])) {
            $data['password'] = $this->hashPassword($data['password']);
        } else {
            $data['password'] = $this->hashPassword('avoca.io');
        }

        return parent::create($data);
    }

    public function update($data)
    {
        unset($data['password']);
        return parent::update($data);
    }

    public function getByUsername($username)
    {
        return $this->get_where(['username' => $username]);
    }
}