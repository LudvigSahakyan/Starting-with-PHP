<?php
/**
 * @author LS
 * @version 0.0.1
 */

namespace PHPInitiation\Model\User;


/**
 * Class UserAvatar
 * @package PHPInitiation\Model\User
 */
class UserAvatar
{

    private

        /**
         * @var string
         */
        $avatar;

    /**
     * @return mixed
     */
    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    /**
     * @param mixed $avatar
     */
    public function setAvatar(string $avatar)
    {
        $this->avatar = $avatar;
    }


}