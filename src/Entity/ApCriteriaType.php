<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ApCriteriaType
 *
 * @ORM\Table(name="ap_criteria_type")
 * @ORM\Entity
 */
class ApCriteriaType
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
     * @var string|null
     *
     * @ORM\Column(name="libelle", type="string", length=50, nullable=true)
     */
    private $libelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelleEn", type="string", length=50, nullable=true)
     */
    private $libelleen;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelleCn", type="string", length=50, nullable=true)
     */
    private $libellecn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nature", type="string", length=30, nullable=true)
     */
    private $nature;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="string", length=100, nullable=true)
     */
    private $comment;

    /**
     * @var bool
     *
     * @ORM\Column(name="hide", type="boolean", nullable=false)
     */
    private $hide;


}
