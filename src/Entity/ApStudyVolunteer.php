<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ApStudyVolunteer
 *
 * @ORM\Table(name="ap_study_volunteer")
 * @ORM\Entity
 */
class ApStudyVolunteer
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
     * @var int
     *
     * @ORM\Column(name="id_study", type="integer", nullable=false)
     */
    private $idStudy;

    /**
     * @var int
     *
     * @ORM\Column(name="id_volunteer", type="integer", nullable=false)
     */
    private $idVolunteer;

    /**
     * @var int|null
     *
     * @ORM\Column(name="inclusion", type="integer", nullable=true)
     */
    private $inclusion;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="exitStudy", type="boolean", nullable=true)
     */
    private $exitstudy = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="call", type="integer", nullable=false, options={"comment"="2: entrant / 1: sortant"})
     */
    private $call;

    /**
     * @var int
     *
     * @ORM\Column(name="recruter_id", type="integer", nullable=false)
     */
    private $recruterId;


}
