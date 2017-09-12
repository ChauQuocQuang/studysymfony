<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlsCourse
 *
 * @ORM\Table(name="pls_course")
 * @ORM\Entity
 */
class PlsCourse
{
    /**
     * @var integer
     *
     * @ORM\Column(name="course_version", type="integer", nullable=false)
     */
    private $courseVersion;

    /**
     * @var string
     *
     * @ORM\Column(name="course_code", type="string", length=50, nullable=true)
     */
    private $courseCode;

    /**
     * @var string
     *
     * @ORM\Column(name="course_name", type="string", length=255, nullable=true)
     */
    private $courseName;

    /**
     * @var integer
     *
     * @ORM\Column(name="course_cat_id", type="integer", nullable=true)
     */
    private $courseCatId;

    /**
     * @var integer
     *
     * @ORM\Column(name="mandatory", type="integer", nullable=true)
     */
    private $mandatory;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="datetime", nullable=true)
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="datetime", nullable=true)
     */
    private $endDate;

    /**
     * @var string
     *
     * @ORM\Column(name="intruduce", type="string", length=500, nullable=true)
     */
    private $intruduce;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="trainer_id", type="integer", nullable=true)
     */
    private $trainerId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_date", type="datetime", nullable=true)
     */
    private $createdDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="created_by", type="integer", nullable=true)
     */
    private $createdBy;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;

    /**
     * @var boolean
     *
     * @ORM\Column(name="approve", type="boolean", nullable=true)
     */
    private $approve;

    /**
     * @var boolean
     *
     * @ORM\Column(name="hot_course", type="boolean", nullable=true)
     */
    private $hotCourse;

    /**
     * @var integer
     *
     * @ORM\Column(name="trainee_count", type="integer", nullable=true)
     */
    private $traineeCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="lecture_count", type="integer", nullable=true)
     */
    private $lectureCount;

    /**
     * @var string
     *
     * @ORM\Column(name="company_code", type="string", length=255, nullable=true)
     */
    private $companyCode;

    /**
     * @var string
     *
     * @ORM\Column(name="avatar", type="string", length=255, nullable=true)
     */
    private $avatar;

    /**
     * @var string
     *
     * @ORM\Column(name="rank_code", type="string", length=300, nullable=true)
     */
    private $rankCode;

    /**
     * @var string
     *
     * @ORM\Column(name="region_code", type="string", length=300, nullable=false)
     */
    private $regionCode;

    /**
     * @var integer
     *
     * @ORM\Column(name="public", type="integer", nullable=false)
     */
    private $public;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @return integer
     */
    public function getCourseVersion()
    {
        return $this->courseVersion;
    }

    /**
     * @param integer $courseVersion
     *
     * @return self
     */
    public function setCourseVersion($courseVersion)
    {
        $this->courseVersion = $courseVersion;

        return $this;
    }

    /**
     * @return string
     */
    public function getCourseCode()
    {
        return $this->courseCode;
    }

    /**
     * @param string $courseCode
     *
     * @return self
     */
    public function setCourseCode($courseCode)
    {
        $this->courseCode = $courseCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getCourseName()
    {
        return $this->courseName;
    }

    /**
     * @param string $courseName
     *
     * @return self
     */
    public function setCourseName($courseName)
    {
        $this->courseName = $courseName;

        return $this;
    }

    /**
     * @return integer
     */
    public function getCourseCatId()
    {
        return $this->courseCatId;
    }

    /**
     * @param integer $courseCatId
     *
     * @return self
     */
    public function setCourseCatId($courseCatId)
    {
        $this->courseCatId = $courseCatId;

        return $this;
    }

    /**
     * @return integer
     */
    public function getMandatory()
    {
        return $this->mandatory;
    }

    /**
     * @param integer $mandatory
     *
     * @return self
     */
    public function setMandatory($mandatory)
    {
        $this->mandatory = $mandatory;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param \DateTime $startDate
     *
     * @return self
     */
    public function setStartDate(\DateTime $startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param \DateTime $endDate
     *
     * @return self
     */
    public function setEndDate(\DateTime $endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getIntruduce()
    {
        return $this->intruduce;
    }

    /**
     * @param string $intruduce
     *
     * @return self
     */
    public function setIntruduce($intruduce)
    {
        $this->intruduce = $intruduce;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return integer
     */
    public function getTrainerId()
    {
        return $this->trainerId;
    }

    /**
     * @param integer $trainerId
     *
     * @return self
     */
    public function setTrainerId($trainerId)
    {
        $this->trainerId = $trainerId;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * @param \DateTime $createdDate
     *
     * @return self
     */
    public function setCreatedDate(\DateTime $createdDate)
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * @return integer
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @param integer $createdBy
     *
     * @return self
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param integer $status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isApprove()
    {
        return $this->approve;
    }

    /**
     * @param boolean $approve
     *
     * @return self
     */
    public function setApprove($approve)
    {
        $this->approve = $approve;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isHotCourse()
    {
        return $this->hotCourse;
    }

    /**
     * @param boolean $hotCourse
     *
     * @return self
     */
    public function setHotCourse($hotCourse)
    {
        $this->hotCourse = $hotCourse;

        return $this;
    }

    /**
     * @return integer
     */
    public function getTraineeCount()
    {
        return $this->traineeCount;
    }

    /**
     * @param integer $traineeCount
     *
     * @return self
     */
    public function setTraineeCount($traineeCount)
    {
        $this->traineeCount = $traineeCount;

        return $this;
    }

    /**
     * @return integer
     */
    public function getLectureCount()
    {
        return $this->lectureCount;
    }

    /**
     * @param integer $lectureCount
     *
     * @return self
     */
    public function setLectureCount($lectureCount)
    {
        $this->lectureCount = $lectureCount;

        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyCode()
    {
        return $this->companyCode;
    }

    /**
     * @param string $companyCode
     *
     * @return self
     */
    public function setCompanyCode($companyCode)
    {
        $this->companyCode = $companyCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * @param string $avatar
     *
     * @return self
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * @return string
     */
    public function getRankCode()
    {
        return $this->rankCode;
    }

    /**
     * @param string $rankCode
     *
     * @return self
     */
    public function setRankCode($rankCode)
    {
        $this->rankCode = $rankCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getRegionCode()
    {
        return $this->regionCode;
    }

    /**
     * @param string $regionCode
     *
     * @return self
     */
    public function setRegionCode($regionCode)
    {
        $this->regionCode = $regionCode;

        return $this;
    }

    /**
     * @return integer
     */
    public function getPublic()
    {
        return $this->public;
    }

    /**
     * @param integer $public
     *
     * @return self
     */
    public function setPublic($public)
    {
        $this->public = $public;

        return $this;
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param integer $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
