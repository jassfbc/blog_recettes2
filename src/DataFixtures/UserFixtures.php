<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setUserName('admin\'s name');
        $user->setUserEmail('admin@gmail.com');
        $user->setPassword('$2y$10$nDxrlekAHgp8A8jjDoGVWeDJWDClWjyxEQbjtkVX22rTBGqXvI3ju');
        $user->setBio('i\'m the admin of this website');
        $user->setAdmin(1);
        $manager->persist($user);

        $user2 = new User();
        $user2->setUserName('user 1');
        $user2->setUserEmail('user1@gmail.com');
        $user2->setPassword('$2y$10$nGAxODE/TltDn7g3etkS7./bbwGOudsNAS89t0.kp48e/BehCTSqi');
        $user2->setBio('i\'m the first user in this website');
        $user2->setAdmin(0);
        $manager->persist($user2);

        $user3 = new User();
        $user3->setUserName('user 2');
        $user3->setUserEmail('user2@gmail.com');
        $user3->setPassword('$2y$10$bkn9nHCI6UUAurmO6DVgeO0p/3VTmwsWa5l3bQvTe9n6VRu.XUcYi');
        $user3->setBio('i\'m the second user in this website');
        $user3->setAdmin(0);
        $manager->persist($user3);





        $manager->flush();
    }
}
