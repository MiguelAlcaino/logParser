<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Diagnostic
 *
 * @ORM\Table(name="Diagnostic")
 * @ORM\Entity
 */
class Diagnostic
{
    /**
     * @var integer
     *
     * @ORM\Column(name="timestamp", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $timestamp;

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
     * @ORM\Column(name="isError", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $iserror;

    /**
     * @var integer
     *
     * @ORM\Column(name="codeKey", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codekey;

    /**
     * @var string
     *
     * @ORM\Column(name="binaryValue", type="blob", length=65535, nullable=true)
     */
    private $binaryvalue;


}

