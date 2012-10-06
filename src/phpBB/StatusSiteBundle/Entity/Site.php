<?php

namespace phpBB\StatusSiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="sites")
 */
class Site
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
	protected $name;

    /**
     * @ORM\Column(type="text")
     */
	protected $description;

    /**
     * @ORM\Column(type="string", length=100)
     */
	protected $slug;

    /**
     * @ORM\Column(type="integer")
     */
	protected $port;

    /**
     * @ORM\Column(type="integer")
     */
	protected $check_inverval;

    /**
     * @ORM\Column(type="string", length=32)
     */
	protected $required_md5;

    /**
     * @ORM\Column(type="string", length=45)
     */
	protected $ip;

    /**
     * @ORM\Column(type="string", length=2083)
     */
	protected $url;

    /**
     * @ORM\Column(type="integer")
     */
	protected $timeout;

    /**
     * @ORM\Column(type="integer")
     */
	protected $status_code;

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
     * Set name
     *
     * @param string $name
     * @return Site
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Site
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
     * Set slug
     *
     * @param string $slug
     * @return Site
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    
        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set port
     *
     * @param integer $port
     * @return Site
     */
    public function setPort($port)
    {
        $this->port = $port;
    
        return $this;
    }

    /**
     * Get port
     *
     * @return integer 
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Set check_inverval
     *
     * @param integer $checkInverval
     * @return Site
     */
    public function setCheckInverval($checkInverval)
    {
        $this->check_inverval = $checkInverval;
    
        return $this;
    }

    /**
     * Get check_inverval
     *
     * @return integer 
     */
    public function getCheckInverval()
    {
        return $this->check_inverval;
    }

    /**
     * Set required_md5
     *
     * @param string $requiredMd5
     * @return Site
     */
    public function setRequiredMd5($requiredMd5)
    {
        $this->required_md5 = $requiredMd5;
    
        return $this;
    }

    /**
     * Get required_md5
     *
     * @return string 
     */
    public function getRequiredMd5()
    {
        return $this->required_md5;
    }

    /**
     * Set ip
     *
     * @param string $ip
     * @return Site
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    
        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Site
     */
    public function setUrl($url)
    {
        $this->url = $url;
    
        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set timeout
     *
     * @param integer $timeout
     * @return Site
     */
    public function setTimeout($timeout)
    {
        $this->timeout = $timeout;
    
        return $this;
    }

    /**
     * Get timeout
     *
     * @return integer 
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    /**
     * Set status_code
     *
     * @param integer $statusCode
     * @return Site
     */
    public function setStatusCode($statusCode)
    {
        $this->status_code = $statusCode;
    
        return $this;
    }

    /**
     * Get status_code
     *
     * @return integer 
     */
    public function getStatusCode()
    {
        return $this->status_code;
    }
}