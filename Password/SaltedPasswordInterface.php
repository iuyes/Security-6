<?php
namespace Password;

use Zend\Crypt\Password\PasswordInterface;

interface SaltedPasswordInterface extends PasswordInterface
{
    public function getSalt();

    public function setSalt($salt);
}