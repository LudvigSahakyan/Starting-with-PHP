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
        $email,

        /**
         * @var string
         */
        $password;

    /**
     * @return mixed
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param mixed $mail
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
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