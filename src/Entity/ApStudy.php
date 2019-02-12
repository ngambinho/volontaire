<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ApStudy
 *
 * @ORM\Table(name="ap_study")
 * @ORM\Entity
 */
class ApStudy
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
     * @ORM\Column(name="num", type="string", length=10, nullable=true)
     */
    private $num;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateContact", type="date", nullable=false)
     */
    private $datecontact;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_promoter", type="integer", nullable=true)
     */
    private $itemPromoter;

    /**
     * @var int
     *
     * @ORM\Column(name="item_user_commercial", type="integer", nullable=false)
     */
    private $itemUserCommercial;

    /**
     * @var int
     *
     * @ORM\Column(name="nbVolunteer", type="integer", nullable=false)
     */
    private $nbvolunteer;

    /**
     * @var int
     *
     * @ORM\Column(name="nbSample", type="integer", nullable=false)
     */
    private $nbsample;

    /**
     * @var bool
     *
     * @ORM\Column(name="engagementLetter", type="boolean", nullable=false)
     */
    private $engagementletter;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ELRelaunchDate", type="date", nullable=true)
     */
    private $elrelaunchdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_expected_fax", type="date", nullable=false)
     */
    private $dateExpectedFax;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_expected_report", type="date", nullable=false)
     */
    private $dateExpectedReport;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nbReportFrench", type="integer", nullable=true)
     */
    private $nbreportfrench;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nbReportEnglish", type="integer", nullable=true)
     */
    private $nbreportenglish;

    /**
     * @var int
     *
     * @ORM\Column(name="item_user_technician", type="integer", nullable=false)
     */
    private $itemUserTechnician;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_user_technician1", type="integer", nullable=true)
     */
    private $itemUserTechnician1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_user_technician2", type="integer", nullable=true)
     */
    private $itemUserTechnician2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_user_technician3", type="integer", nullable=true)
     */
    private $itemUserTechnician3;

    /**
     * @var int
     *
     * @ORM\Column(name="item_user_investigator", type="integer", nullable=false)
     */
    private $itemUserInvestigator;

    /**
     * @var int|null
     *
     * @ORM\Column(name="allowance", type="integer", nullable=true)
     */
    private $allowance;

    /**
     * @var int|null
     *
     * @ORM\Column(name="complementaryAllowance", type="integer", nullable=true)
     */
    private $complementaryallowance;

    /**
     * @var bool
     *
     * @ORM\Column(name="signedEstimate", type="boolean", nullable=false)
     */
    private $signedestimate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="SERelaunchDate", type="date", nullable=true)
     */
    private $serelaunchdate;

    /**
     * @var bool
     *
     * @ORM\Column(name="signedProtocol", type="boolean", nullable=false)
     */
    private $signedprotocol;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="SPRelaunchDate", type="date", nullable=true)
     */
    private $sprelaunchdate;

    /**
     * @var bool
     *
     * @ORM\Column(name="state", type="boolean", nullable=false, options={"comment"="0 cloturer, 1 en cours"})
     */
    private $state = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="item_study_type", type="integer", nullable=false)
     */
    private $itemStudyType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_request", type="integer", nullable=true)
     */
    private $idRequest;

    /**
     * @var int|null
     *
     * @ORM\Column(name="french_fax", type="integer", nullable=true)
     */
    private $frenchFax;

    /**
     * @var int|null
     *
     * @ORM\Column(name="english_fax", type="integer", nullable=true)
     */
    private $englishFax;

    /**
     * @var int|null
     *
     * @ORM\Column(name="french_summary", type="integer", nullable=true)
     */
    private $frenchSummary;

    /**
     * @var int|null
     *
     * @ORM\Column(name="english_summary", type="integer", nullable=true)
     */
    private $englishSummary;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="report_date", type="date", nullable=true)
     */
    private $reportDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="protocol", type="date", nullable=true)
     */
    private $protocol;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sample_volume", type="integer", nullable=true)
     */
    private $sampleVolume;

    /**
     * @var bool
     *
     * @ORM\Column(name="chinese", type="boolean", nullable=false)
     */
    private $chinese = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="recruitement", type="boolean", nullable=false)
     */
    private $recruitement = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="difficulty", type="boolean", nullable=false, options={"default"="1"})
     */
    private $difficulty = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="not_included", type="integer", nullable=false)
     */
    private $notIncluded = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="loaded", type="integer", nullable=false)
     */
    private $loaded;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateLoaded", type="datetime", nullable=false)
     */
    private $dateloaded;


}
