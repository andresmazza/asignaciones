<?php

namespace AndresMazza\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ParteDiario
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ParteDiario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="project", type="integer")
     */
    private $project;

    /**
     * @var integer
     *
     * @ORM\Column(name="subproject", type="integer")
     */
    private $subproject;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="weather", type="string", length=255)
     */
    private $weather;

    /**
     * @var integer
     *
     * @ORM\Column(name="provider", type="integer")
     */
    private $provider;

    /**
     * @var integer
     *
     * @ORM\Column(name="task", type="integer")
     */
    private $task;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="done", type="string", length=255)
     */
    private $done;

    /**
     * @var string
     *
     * @ORM\Column(name="schedule", type="string", length=255)
     */
    private $schedule;

    /**
     * @var string
     *
     * @ORM\Column(name="resources", type="string", length=255)
     */
    private $resources;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set project
     *
     * @param integer $project
     * @return ParteDiario
     */
    public function setProject($project)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * @return integer 
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set subproject
     *
     * @param integer $subproject
     * @return ParteDiario
     */
    public function setSubproject($subproject)
    {
        $this->subproject = $subproject;

        return $this;
    }

    /**
     * Get subproject
     *
     * @return integer 
     */
    public function getSubproject()
    {
        return $this->subproject;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return ParteDiario
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return ParteDiario
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set weather
     *
     * @param string $weather
     * @return ParteDiario
     */
    public function setWeather($weather)
    {
        $this->weather = $weather;

        return $this;
    }

    /**
     * Get weather
     *
     * @return string 
     */
    public function getWeather()
    {
        return $this->weather;
    }

    /**
     * Set provider
     *
     * @param integer $provider
     * @return ParteDiario
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;

        return $this;
    }

    /**
     * Get provider
     *
     * @return integer 
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Set task
     *
     * @param integer $task
     * @return ParteDiario
     */
    public function setTask($task)
    {
        $this->task = $task;

        return $this;
    }

    /**
     * Get task
     *
     * @return integer 
     */
    public function getTask()
    {
        return $this->task;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return ParteDiario
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set done
     *
     * @param string $done
     * @return ParteDiario
     */
    public function setDone($done)
    {
        $this->done = $done;

        return $this;
    }

    /**
     * Get done
     *
     * @return string 
     */
    public function getDone()
    {
        return $this->done;
    }

    /**
     * Set schedule
     *
     * @param string $schedule
     * @return ParteDiario
     */
    public function setSchedule($schedule)
    {
        $this->schedule = $schedule;

        return $this;
    }

    /**
     * Get schedule
     *
     * @return string 
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * Set resources
     *
     * @param string $resources
     * @return ParteDiario
     */
    public function setResources($resources)
    {
        $this->resources = $resources;

        return $this;
    }

    /**
     * Get resources
     *
     * @return string 
     */
    public function getResources()
    {
        return $this->resources;
    }
}
