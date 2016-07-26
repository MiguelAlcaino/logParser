<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tempuser
 *
 * @ORM\Table(name="TempUser", uniqueConstraints={@ORM\UniqueConstraint(name="email_unique", columns={"email"})})
 * @ORM\Entity
 */
class Tempuser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tempUserID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tempuserid;

    /**
     * @var string
     *
     * @ORM\Column(name="accountID", type="string", length=32, nullable=false)
     */
    private $accountid;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=255, nullable=false)
     */
    private $apellido;


}

