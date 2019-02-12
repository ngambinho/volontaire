<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ApRequestCriteria
 *
 * @ORM\Table(name="ap_request_criteria")
 * @ORM\Entity
 */
class ApRequestCriteria
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
     * @ORM\Column(name="id_request", type="integer", nullable=true)
     */
    private $idRequest;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_criteria_type", type="integer", nullable=true)
     */
    private $idCriteriaType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="operator", type="string", length=30, nullable=true)
     */
    private $operator;

    /**
     * @var string|null
     *
     * @ORM\Column(name="value", type="string", length=30, nullable=true)
     */
    private $value;

    /**
     * @var string|null
     *
     * @ORM\Column(name="conditionSql", type="string", length=50, nullable=true)
     */
    private $conditionsql;

    /**
     * @var string|null
     *
     * @ORM\Column(name="conditionString", type="string", length=50, nullable=true)
     */
    private $conditionstring;

    /**
     * @var int
     *
     * @ORM\Column(name="operatorCondition", type="smallint", nullable=false, options={"default"="1"})
     */
    private $operatorcondition = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="conditionStringEn", type="string", length=50, nullable=true)
     */
    private $conditionstringen;

    /**
     * @var string|null
     *
     * @ORM\Column(name="conditionStringCn", type="string", length=50, nullable=true)
     */
    private $conditionstringcn;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_request_criteria_and", type="integer", nullable=true)
     */
    private $idRequestCriteriaAnd;


}
