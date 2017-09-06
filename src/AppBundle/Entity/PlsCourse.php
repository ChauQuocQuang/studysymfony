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


}
