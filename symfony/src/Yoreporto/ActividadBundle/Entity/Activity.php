<?php

namespace Yoreporto\ActividadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activity
 *
 * @ORM\Table(name="activity", indexes={@ORM\Index(name="fk_Activity_Report1_idx", columns={"idReport"}), @ORM\Index(name="fk_Activity_Project1_idx", columns={"idProject"})})
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
     * @var integer
     *
     * @ORM\Column(name="hour", type="integer", nullable=false)
     */
    private $hour = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="minutes", type="integer", nullable=false)
     */
    private $minutes = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startTime", type="datetime", nullable=false)
     */
    private $starttime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="endTime", type="datetime", nullable=false)
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
     * Get idactivity
     *
     * @return integer 
     */
    public function getIdactivity()
    {
        return $this->idactivity;
    }

    /**
     * Set hour
     *
     * @param integer $hour
     * @return Activity
     */
    public function setHour($hour)
    {
        $this->hour = $hour;

        return $this;
    }

    /**
     * Get hour
     *
     * @return integer 
     */
    public function getHour()
    {
        return $this->hour;
    }

    /**
     * Set minutes
     *
     * @param integer $minutes
     * @return Activity
     */
    public function setMinutes($minutes)
    {
        $this->minutes = $minutes;

        return $this;
    }

    /**
     * Get minutes
     *
     * @return integer 
     */
    public function getMinutes()
    {
        return $this->minutes;
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
     * Set idproject
     *
     * @param \Yoreporto\ActividadBundle\Entity\Project $idproject
     * @return Activity
     */
    public function setIdproject(\Yoreporto\ActividadBundle\Entity\Project $idproject = null)
    {
        $this->idproject = $idproject;

        return $this;
    }

    /**
     * Get idproject
     *
     * @return \Yoreporto\ActividadBundle\Entity\Project 
     */
    public function getIdproject()
    {
        return $this->idproject;
    }

    /**
     * Set idreport
     *
     * @param \Yoreporto\ActividadBundle\Entity\Report $idreport
     * @return Activity
     */
    public function setIdreport(\Yoreporto\ActividadBundle\Entity\Report $idreport = null)
    {
        $this->idreport = $idreport;

        return $this;
    }

    /**
     * Get idreport
     *
     * @return \Yoreporto\ActividadBundle\Entity\Report 
     */
    public function getIdreport()
    {
        return $this->idreport;
    }
}
