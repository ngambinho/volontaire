<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ApRevueContrat
 *
 * @ORM\Table(name="ap_revue_contrat", indexes={@ORM\Index(name="FK_revueContrat_promoter", columns={"id_promoteur"})})
 * @ORM\Entity
 */
class ApRevueContrat
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_debut", type="datetime", nullable=true)
     */
    private $dateDebut;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_fin", type="datetime", nullable=true)
     */
    private $dateFin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="produit", type="string", length=254, nullable=true)
     */
    private $produit;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nombre_volontaire", type="integer", nullable=true)
     */
    private $nombreVolontaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="jour_interval", type="string", length=254, nullable=true)
     */
    private $jourInterval;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_reception", type="datetime", nullable=true)
     */
    private $dateReception;

    /**
     * @var \ApPromoter
     *
     * @ORM\ManyToOne(targetEntity="ApPromoter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_promoteur", referencedColumnName="id")
     * })
     */
    private $idPromoteur;


}
