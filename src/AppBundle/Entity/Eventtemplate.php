<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Eventtemplate
 *
 * @ORM\Table(name="EventTemplate")
 * @ORM\Entity
 */
class Eventtemplate
{
    /**
     * @var string
     *
     * @ORM\Column(name="accountID", type="string", length=32, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $accountid;

    /**
     * @var string
     *
     * @ORM\Column(name="deviceID", type="string", length=32, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $deviceid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customType", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $customtype;

    /**
     * @var boolean
     *
     * @ORM\Column(name="repeatLast", type="boolean", nullable=true)
     */
    private $repeatlast;

    /**
     * @var string
     *
     * @ORM\Column(name="template", type="text", length=65535, nullable=true)
     */
    private $template;


}

