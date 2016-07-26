<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resource
 *
 * @ORM\Table(name="Resource")
 * @ORM\Entity
 */
class Resource
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
     * @ORM\Column(name="resourceID", type="string", length=80, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $resourceid;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=16, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=70, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="properties", type="text", length=65535, nullable=true)
     */
    private $properties;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="blob", length=65535, nullable=true)
     */
    private $value;

    /**
     * @var string
     *
     * @ORM\Column(name="displayName", type="string", length=40, nullable=true)
     */
    private $displayname;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=128, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="lastUpdateTime", type="integer", nullable=true)
     */
    private $lastupdatetime;

    /**
     * @var integer
     *
     * @ORM\Column(name="creationTime", type="integer", nullable=true)
     */
    private $creationtime;


}

