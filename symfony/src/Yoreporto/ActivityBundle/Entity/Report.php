<?php

namespace Yoreporto\ActivityBundle\Entity;

use Symfony\Component\Validator\Constrainsts as Assert;

use Doctrine\ORM\Mapping as ORM;


use Doctrine\Common\Collections\ArrayCollection;


/**
 * Report
 *
 * @ORM\Table(name="report")
 * @ORM\Entity
 */
class Report
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idReport", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idreport;

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
     * @ORM\Column(name="reportAt", type="datetime", nullable=false)
     */
    private $reportat;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status = '0';

       
    protected $activities;

    public function __construct(){
        $this->activities = new ArrayCollection();
        $this->setUpdatedat(new \DateTime('now'));
        $this->setCreatedat(new \DateTime('now'));
        $this->setReportat(new \DateTime('now'));
    }
    
    public function getActivities(){
        return $this->activities;
    }
    
    public function addActivity(Activity $activity){
        $activity->setIdReport($this);

        //$this->activities->add($activity);
    }
    
    


    /**
     * Get idreport
     *
     * @return integer 
     */
    public function getIdreport()
    {
        return $this->idreport;
    }

    /**
     * Set createdat
     *
     * @param \DateTime $createdat
     * @return Report
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
     * @return Report
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
     * Set reportat
     *
     * @param \DateTime $reportat
     * @return Report
     */
    public function setReportat($reportat)
    {
        $this->reportat = $reportat;

        return $this;
    }

    /**
     * Get reportat
     *
     * @return \DateTime 
     */
    public function getReportat()
    {
        return $this->reportat;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Report
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function __toString(){
        /**return $this->getIdreport();
        */
        return 'Algo';
    }
}
