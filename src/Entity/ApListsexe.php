<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ApListsexe
 *
 * @ORM\Table(name="ap_listSexe")
 * @ORM\Entity
 */
class ApListsexe
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=10, nullable=false)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="libelleEn", type="string", length=10, nullable=false)
     */
    private $libelleen;

    /**
     * @var string
     *
     * @ORM\Column(name="libelleCn", type="string", length=10, nullable=false)
     */
    private $libellecn;


}
