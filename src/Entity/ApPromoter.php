<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ApPromoter
 *
 * @ORM\Table(name="ap_promoter")
 * @ORM\Entity
 */
class ApPromoter
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
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contactName", type="string", length=50, nullable=true)
     */
    private $contactname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contactSurname", type="string", length=50, nullable=true)
     */
    private $contactsurname;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_civility", type="integer", nullable=true)
     */
    private $itemCivility;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adress1", type="string", length=100, nullable=true)
     */
    private $adress1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adress2", type="string", length=100, nullable=true)
     */
    private $adress2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cp", type="string", length=5, nullable=true)
     */
    private $cp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_town", type="integer", nullable=true)
     */
    private $itemTown;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_country", type="integer", nullable=true)
     */
    private $itemCountry;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone", type="string", length=15, nullable=true)
     */
    private $phone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fax", type="string", length=15, nullable=true)
     */
    private $fax;


}
