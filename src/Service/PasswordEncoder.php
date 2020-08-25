<?php 

declare(strict_types=1);

namespace App\Service;

use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

final class PasswordEncoder 
{
    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function __invoke($user)
    {
        $passwordEncoded = $this->encoder->encodePassword($user, $user->getPassword());
        
        return $passwordEncoded;
    }
}