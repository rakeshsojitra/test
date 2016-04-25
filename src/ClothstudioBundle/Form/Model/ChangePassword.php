<?php

namespace ClothstudioBundle\Form\Model;

use Symfony\Component\Security\Core\Validator\Constraints as SecurityAssert;
use Symfony\Component\Validator\Constraints as Assert;

class ChangePassword {

    /**
     * @SecurityAssert\UserPassword(
     *    
     * )
     */
    protected $cPassword;

    /**
     * @Assert\Length(
     *     min = 6,
     *     minMessage = "Password should by at least 6 chars long"
     * )
     */
    protected $plainPassword;

    public function getcPassword() {
        return $this->cPassword;
    }

    public function setcPassword($cPassword) {
        $this->cPassword = $cPassword;

        return $this;
    }

    public function getPlainPassword() {
        return $this->plainPassword;
    }
    public function setPlainPassword($plainPassword)
    {
        $this->plainPassword = $plainPassword;

    return $this;
    }

}
