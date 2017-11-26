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
     * @ORM\Column(name="normal", type="decimal", precision=16, scale=0)
     */
    private $normal;

    /**
     * @var string
     *
     * @ORM\Column(name="enfant", type="decimal", precision=12, scale=0)
     */
    private $enfant;

    /**
     * @var string
     *
     * @ORM\Column(name="senior", type="decimal", precision=12, scale=0)
     */
    private $senior;

    /**
     * @var string
     *
     * @ORM\Column(name="reduit", type="decimal", precision=10, scale=0)
     */
    private $reduit;


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
}

