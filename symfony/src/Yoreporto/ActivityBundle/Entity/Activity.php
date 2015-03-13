<?php

namespace Yoreporto\ActivityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activity
 *
 * @ORM\Table(name="activity", indexes={@ORM\Index(name="fk_Activity_Report1_idx", columns={"idReport"}), @ORM\Index(name="fk_Activity_User1_idx", columns={"idUser"}), @ORM\Index(name="fk_Activity_Project1_idx", columns={"idProject"})})
 * @ORM\Entity
 */
class Activity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idActivity", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idactivity;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startTime", type="time", nullable=false)
     */
    private $starttime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="endTime", type="time", nullable=false)
     */
    private $endtime;

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
     * @var \DateTime
     *
     * @ORM\Column(name="activityAt", type="datetime", nullable=false)
     */
    private $activityat;

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
     * @var \Report
     *
     * @ORM\ManyToOne(targetEntity="Report")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idReport", referencedColumnName="idReport")
     * })
     */
    private $idreport;

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
     * Get idactivity
     *
     * @return integer 
     */
    public function getIdactivity()
    {
        return $this->idactivity;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Activity
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set starttime
     *
     * @param \DateTime $starttime
     * @return Activity
     */
    public function setStarttime($starttime)
    {
        $this->starttime = $starttime;

        return $this;
    }

    /**
     * Get starttime
     *
     * @return \DateTime 
     */
    public function getStarttime()
    {
        return $this->starttime;
    }

    /**
     * Set endtime
     *
     * @param \DateTime $endtime
     * @return Activity
     */
    public function setEndtime($endtime)
    {
        $this->endtime = $endtime;

        return $this;
    }

    /**
     * Get endtime
     *
     * @return \DateTime 
     */
    public function getEndtime()
    {
        return $this->endtime;
    }

    /**
     * Set createdat
     *
     * @param \DateTime $createdat
     * @return Activity
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
     * @return Activity
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
     * Set activityat
     *
     * @param \DateTime $activityat
     * @return Activity
     */
    public function setActivityat($activityat)
    {
        $this->activityat = $activityat;

        return $this;
    }

    /**
     * Get activityat
     *
     * @return \DateTime 
     */
    public function getActivityat()
    {
        return $this->activityat;
    }

    /**
     * Set idproject
     *
     * @param \Yoreporto\ActivityBundle\Entity\Project $idproject
     * @return Activity
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
     * Set idreport
     *
     * @param \Yoreporto\ActivityBundle\Entity\Report $idreport
     * @return Activity
     */
    public function setIdreport(\Yoreporto\ActivityBundle\Entity\Report $idreport = null)
    {
        $this->idreport = $idreport;

        return $this;
    }

    /**
     * Get idreport
     *
     * @return \Yoreporto\ActivityBundle\Entity\Report 
     */
    public function getIdreport()
    {
        return $this->idreport;
    }

    /**
     * Set iduser
     *
     * @param \Yoreporto\ActivityBundle\Entity\User $iduser
     * @return Activity
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

    public function __construct(){
        $this->setStarttime(new \DateTime('now'));
        $this->setEndtime(new \DateTime('now'));
        $this->setCreatedat(new \DateTime('now'));
        $this->setUpdatedat(new \DateTime('now'));
        $this->setActivityat(new \DateTime('now'));
         
    }
}
