<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ApVolunteer
 *
 * @ORM\Table(name="ap_volunteer")
 * @ORM\Entity
 */
class ApVolunteer
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
     * @var int|null
     *
     * @ORM\Column(name="oldId", type="integer", nullable=true)
     */
    private $oldid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_civility", type="integer", nullable=true)
     */
    private $itemCivility;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="surname", type="string", length=50, nullable=true)
     */
    private $surname;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="birthday", type="date", nullable=true)
     */
    private $birthday;

    /**
     * @var string|null
     *
     * @ORM\Column(name="numSs", type="string", length=15, nullable=true)
     */
    private $numss;

    /**
     * @var int
     *
     * @ORM\Column(name="hasSs", type="integer", nullable=false, options={"default"="1"})
     */
    private $hasss = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="sexe", type="boolean", nullable=true, options={"comment"="1 male / 2 female"})
     */
    private $sexe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adress1", type="string", length=50, nullable=true)
     */
    private $adress1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adress2", type="string", length=50, nullable=true)
     */
    private $adress2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cp", type="string", length=5, nullable=true)
     */
    private $cp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phoneMobile", type="string", length=14, nullable=true)
     */
    private $phonemobile;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phonePersonal", type="string", length=14, nullable=true)
     */
    private $phonepersonal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phoneProfessional", type="string", length=14, nullable=true)
     */
    private $phoneprofessional;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="inscriptionDate", type="date", nullable=true)
     */
    private $inscriptiondate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_recruitment", type="integer", nullable=true)
     */
    private $itemRecruitment;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_profession", type="integer", nullable=true)
     */
    private $itemProfession;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_town", type="integer", nullable=true)
     */
    private $itemTown;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_availability", type="integer", nullable=true)
     */
    private $itemAvailability;

    /**
     * @var int|null
     *
     * @ORM\Column(name="availability", type="integer", nullable=true, options={"default"="1","comment"="0 available / 1 unavailable"})
     */
    private $availability = '1';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="availabilityBegin", type="date", nullable=true)
     */
    private $availabilitybegin;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="availabilityEnd", type="date", nullable=true)
     */
    private $availabilityend;

    /**
     * @var int|null
     *
     * @ORM\Column(name="meetCancel", type="integer", nullable=true)
     */
    private $meetcancel = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="meetMove", type="integer", nullable=true)
     */
    private $meetmove = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentary", type="text", length=65535, nullable=true)
     */
    private $commentary;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_date_visit_medical", type="date", nullable=true)
     */
    private $lastDateVisitMedical;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_medical_certificate", type="date", nullable=true)
     */
    private $dateMedicalCertificate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_date_contact", type="date", nullable=true)
     */
    private $lastDateContact;

    /**
     * @var string|null
     *
     * @ORM\Column(name="picture", type="string", length=255, nullable=true)
     */
    private $picture;

    /**
     * @var string|null
     *
     * @ORM\Column(name="picture_profile_right", type="string", length=255, nullable=true)
     */
    private $pictureProfileRight;

    /**
     * @var bool
     *
     * @ORM\Column(name="inscrit", type="boolean", nullable=false)
     */
    private $inscrit = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="net_id", type="integer", nullable=true, options={"comment"="id du net"})
     */
    private $netId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="net_city", type="string", length=255, nullable=true, options={"comment"="ville enregistrée sur internet"})
     */
    private $netCity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="picture_profile_left", type="string", length=255, nullable=true)
     */
    private $pictureProfileLeft;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="picture_date", type="date", nullable=true)
     */
    private $pictureDate;

    /**
     * @var int
     *
     * @ORM\Column(name="incomingCalls", type="integer", nullable=false)
     */
    private $incomingcalls;

    /**
     * @var int
     *
     * @ORM\Column(name="outgoingCalls", type="integer", nullable=false)
     */
    private $outgoingcalls;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="medical_certificate", type="boolean", nullable=true)
     */
    private $medicalCertificate = '0';


}
