<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace BlogBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraint as Assert;
/**
 * Description of Post
 *@ORM\Entity(repositoryClass="PostRepository")
 * @ORM\Table(name="blog_post")
 * @ORM\HasLifecycleCallbacks
 * 
 * @author alex
 * 
 */
class Post {
    //put your code here
     /**
      *
     *@ORM\Id
     *@ORM\Column(type="integer")
     *@ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @ORM\Column(type="string",length=128)
     */
    protected $title;
    /**
     * @ORM\Column(type="string",length=255)
     */
    protected  $description;
    /**
     *
     * @ORM\Column(type="text",nullable=true)
     */
    protected $text;
    /**
     *
     * @ORM\Column(type="boolean",nullable=true)
     */
    protected $published=false;
    /**
     *
     * @ORM\Column(type="datetime",nullable=true)
     */
    protected $created;
     /**
     *
     * @ORM\Column(type="datetime",nullable=true)
     */
    protected $updated;




    public function __toString() {
        return $this->title;
    }

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
     * Set title
     *
     * @param string $title
     * @return Post
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Post
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
     * Set text
     *
     * @param string $text
     * @return Post
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set published
     *
     * @param boolean $published
     * @return Post
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return boolean 
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Post
     * @ORM\PrePersist
     */
    public function setCreated()
    {
        $this->created = new \DateTime('now');

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return Post
     * @ORM\PreUpdate
     */
    public function setUpdated($updated)
    {
        $this->updated = new \DateTime('now');

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }
}
