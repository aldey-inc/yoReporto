<?php

namespace Yoreporto\ReporteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Report
 *
 * @ORM\Table(name="report", indexes={@ORM\Index(name="fk_Report_User1_idx", columns={"idUser"})})
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

    /**
     * Set iduser
     *
     * @param \Yoreporto\ReporteBundle\Entity\User $iduser
     * @return Report
     */
    public function setIduser(\Yoreporto\ReporteBundle\Entity\User $iduser = null)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return \Yoreporto\ReporteBundle\Entity\User 
     */
    public function getIduser()
    {
        return $this->iduser;
    }
}