<?php

namespace App\EntityListener;

use App\Entity\User;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Event\PrePersist;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserListener
{
    /**
     * @ORM\PrePersist
     */
    public function prePersistHandler($entity, User $user)
    {

    }

}