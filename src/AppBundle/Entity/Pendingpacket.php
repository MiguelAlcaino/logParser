<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pendingpacket
 *
 * @ORM\Table(name="PendingPacket")
 * @ORM\Entity
 */
class Pendingpacket
{
    /**
     * @var integer
     *
     * @ORM\Column(name="sequence", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sequence;

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
     * @var integer
     *
     * @ORM\Column(name="queueTime", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $queuetime;

    /**
     * @var string
     *
     * @ORM\Column(name="packetBytes", type="blob", length=16777215, nullable=true)
     */
    private $packetbytes;

    /**
     * @var boolean
     *
     * @ORM\Column(name="autoDelete", type="boolean", nullable=true)
     */
    private $autodelete;


}

