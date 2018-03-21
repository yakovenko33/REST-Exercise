<?php

namespace RestAPIBundle\Service;

use Doctrine\ORM\EntityManager;
use RestAPIBundle\Entity\Film;

class FindFilmService
{

    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

}