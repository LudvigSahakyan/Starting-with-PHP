<?php
/**
 * @author LS
 * @version 0.0.1
 */

namespace PHPInitiation\Model\User;

/**
 * Class User
 * @package PHPInitiation\Model\User
 */
class UserLogIn
{


    private

        /**
         * @var string
         */
        $mail,

        /**
         * @var string
         */
        $password;

    /**
     * @return mixed
     */
    public function getMail(): ?string
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     */
    public function setMail(string $mail)
    {
        $this->mail = $mail;
    }

    /**
     * @return mixed
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword(string $password)
    {
        $this->password = $password;
    }
}