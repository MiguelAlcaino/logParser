<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Uniquexid
 *
 * @ORM\Table(name="UniqueXID")
 * @ORM\Entity
 */
class Uniquexid
{
    /**
     * @var string
     *
     * @ORM\Column(name="uniqueID", type="string", length=40, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uniqueid;

    /**
     * @var string
     *
     * @ORM\Column(name="accountID", type="string", length=32, nullable=true)
     */
    private $accountid;

    /**
     * @var string
     *
     * @ORM\Column(name="transportID", type="string", length=32, nullable=true)
     */
    private $transportid;


}

