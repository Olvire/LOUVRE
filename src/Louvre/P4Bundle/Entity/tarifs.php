<?php

namespace Louvre\P4Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * tarifs
 *
 * @ORM\Table(name="tarifs")
 * @ORM\Entity(repositoryClass="Louvre\P4Bundle\Repository\tarifsRepository")
 */
class tarifs
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string")
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="tarif", type="decimal")
     */
    private $tarif;



    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set normal
     *
     * @param string $normal
     *
     * @return tarifs
     */
    public function setNormal($normal)
    {
        $this->normal = $normal;

        return $this;
    }

    /**
     * Get normal
     *
     * @return string
     */
    public function getNormal()
    {
        return $this->normal;
    }

    /**
     * Set enfant
     *
     * @param string $enfant
     *
     * @return tarifs
     */
    public function setEnfant($enfant)
    {
        $this->enfant = $enfant;

        return $this;
    }

    /**
     * Get enfant
     *
     * @return string
     */
    public function getEnfant()
    {
        return $this->enfant;
    }

    /**
     * Set senior
     *
     * @param string $senior
     *
     * @return tarifs
     */
    public function setSenior($senior)
    {
        $this->senior = $senior;

        return $this;
    }

    /**
     * Get senior
     *
     * @return string
     */
    public function getSenior()
    {
        return $this->senior;
    }

    /**
     * Set reduit
     *
     * @param string $reduit
     *
     * @return tarifs
     */
    public function setReduit($reduit)
    {
        $this->reduit = $reduit;

        return $this;
    }

    /**
     * Get reduit
     *
     * @return string
     */
    public function getReduit()
    {
        return $this->reduit;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return tarifs
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set tarif
     *
     * @param string $tarif
     *
     * @return tarifs
     */
    public function setTarif($tarif)
    {
        $this->tarif = $tarif;

        return $this;
    }

    /**
     * Get tarif
     *
     * @return string
     */
    public function getTarif()
    {
        return $this->tarif;
    }
}
