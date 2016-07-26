<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Miguel
 *
 * @ORM\Table(name="Miguel")
 * @ORM\Entity
 */
class Miguel
{
    /**
     * @var integer
     *
     * @ORM\Column(name="miguelId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $miguelid;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
     */
    private $nombre;


}

