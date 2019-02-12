  <?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ApCriteria
 *
 * @ORM\Table(name="ap_criteria", indexes={@ORM\Index(name="volunteer", columns={"id_volunteer"})})
 * @ORM\Entity
 */
class ApCriteria
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
     * @ORM\Column(name="id_type", type="integer", nullable=true)
     */
    private $idType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_volunteer", type="integer", nullable=true)
     */
    private $idVolunteer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="value", type="string", length=30, nullable=true)
     */
    private $value;


}
