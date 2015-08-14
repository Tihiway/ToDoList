<?php
namespace ToDoBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="items")
 */
class items{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $name;

    /**
     * @ORM\Column(type="datetime")
     */
    private $due_date;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $location;

    /**
     *
     * @ORM\Column(type="datetime")
     */
    private $created;



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
     * @return items
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
     * Set due_date
     *
     * @param \dateTime $dueDate
     * @return items
     */
    public function setDueDate(\dateTime $dueDate)
    {
        $this->due_date = $dueDate;

        return $this;
    }

    /**
     * Get due_date
     *
     * @return \datetime
     */
    public function getDueDate()
    {
        return $this->due_date;
    }

    /**
     * Set location
     *
     * @param string $location
     * @return items
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return items
     */
    public function setCreated(\DateTime $created)
    {
        $this->created = $created;

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
}
