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
class UserInfo
{

    private

        /**
         * @var string
         */
        $firstname,

        /**
         * @var string
         */
        $lastname,

        /**
         * @var string
         */
        $job,

        /**
         * @var int
         */
        $phone;


    /**
     * @return mixed
     */
    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname(string $firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname(string $lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getJob(): ?string
    {
        return $this->job;
    }

    /**
     * @param mixed $job
     */
    public function setJob(string $job)
    {
        $this->job = $job;
    }

    /**
     * @return mixed
     */
    public function getPhone(): ?int
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone(int $phone)
    {
        $this->phone = $phone;
    }

}