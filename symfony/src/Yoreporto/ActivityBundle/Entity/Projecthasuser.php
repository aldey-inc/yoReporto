<?php

namespace Yoreporto\ActivityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projecthasuser
 *
 * @ORM\Table(name="projecthasuser", indexes={@ORM\Index(name="fk_Project_has_User_User1_idx", columns={"idUser"}), @ORM\Index(name="fk_Project_has_User_Project1_idx", columns={"idProject"})})
 * @ORM\Entity
 */
class Projecthasuser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idProjectHasUser", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprojecthasuser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime", nullable=false)
     */
    private $createdat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedAt", type="datetime", nullable=false)
     */
    private $updatedat;

    /**
     * @var \Project
     *
     * @ORM\ManyToOne(targetEntity="Project")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idProject", referencedColumnName="idProject")
     * })
     */
    private $idproject;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUser", referencedColumnName="idUser")
     * })
     */
    private $iduser;



    /**
     * Get idprojecthasuser
     *
     * @return integer 
     */
    public function getIdprojecthasuser()
    {
        return $this->idprojecthasuser;
    }

    /**
     * Set createdat
     *
     * @param \DateTime $createdat
     * @return Projecthasuser
     */
    public function setCreatedat($createdat)
    {
        $this->createdat = $createdat;

        return $this;
    }

    /**
     * Get createdat
     *
     * @return \DateTime 
     */
    public function getCreatedat()
    {
        return $this->createdat;
    }

    /**
     * Set updatedat
     *
     * @param \DateTime $updatedat
     * @return Projecthasuser
     */
    public function setUpdatedat($updatedat)
    {
        $this->updatedat = $updatedat;

        return $this;
    }

    /**
     * Get updatedat
     *
     * @return \DateTime 
     */
    public function getUpdatedat()
    {
        return $this->updatedat;
    }

    /**
     * Set idproject
     *
     * @param \Yoreporto\ActivityBundle\Entity\Project $idproject
     * @return Projecthasuser
     */
    public function setIdproject(\Yoreporto\ActivityBundle\Entity\Project $idproject = null)
    {
        $this->idproject = $idproject;

        return $this;
    }

    /**
     * Get idproject
     *
     * @return \Yoreporto\ActivityBundle\Entity\Project 
     */
    public function getIdproject()
    {
        return $this->idproject;
    }

    /**
     * Set iduser
     *
     * @param \Yoreporto\ActivityBundle\Entity\User $iduser
     * @return Projecthasuser
     */
    public function setIduser(\Yoreporto\ActivityBundle\Entity\User $iduser = null)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return \Yoreporto\ActivityBundle\Entity\User 
     */
    public function getIduser()
    {
        return $this->iduser;
    }
}
