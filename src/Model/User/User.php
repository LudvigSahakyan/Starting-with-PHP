<?php
/**
 * @author LS
 * @version 0.0.1
 */

namespace PHPInitiation\Model\User;

use PHPInitiation\Model\User\UserInfo;
use PHPInitiation\Model\User\UserAvatar;
use PHPInitiation\Model\User\UserLogIn;

/**
 * Class User
 * @package PHPInitiation\Model\User
 */
class User
{


    private

        /**
         * @var int
         */
        $identity,

        /**
         * @var UserInfo
         */
        $info,

        /**
         * @var UserAvatar
         */
        $avatar,

        /**
         * @var UserLogIn
         */
        $login;


    /**
     * @return mixed
     */
    public function getId(): ?int
    {
        return $this->identity;
    }

    /**
     * @param mixed $identity
     */
    public function setId(int $identity)
    {
        $this->identity = $identity;
    }

    /**
     * @return mixed
     */
    public function getInfo():?UserInfo
    {
        return $this->info;
    }

    /**
     * @param mixed $info
     */
    public function setInfo(UserInfo $info)
    {
        $this->info = $info;
    }

    /**
     * @return mixed
     */
    public function getLogin():?UserLogIn
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin(UserLogIn $login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getAvatar():?UserAvatar
    {
        return $this->avatar;
    }

    /**
     * @param mixed $avatar
     */
    public function setAvatar(UserAvatar $avatar)
    {
        $this->avatar = $avatar;
    }





}