<?php

namespace Blocks;

/**
 * Attribute
 */
class Attribute
{
    /**
     * Construct
     *
     * @param string attr name
     * @param string attr type
     * @return array self
     */
    public function __construct($name, $type)
    {
        $this->name = $name ?? null;
        $this->type = $type ?? null;

        if ($this->isValid()) {
            return (array) $this->toArray();
        }

        return null;
    }

    /**
     * Set Name
     *
     * @param string name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * setName() sugar
     *
     * @param string name
     * @return self
     */
    public function named($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * set attribute type
     *
     * @param string type
     * @return self;
     */
    public function setType($type)
    {
        $this->type = $type;

        return $self;
    }

    /**
     * Enforces attribute as an array
     *
     * @param void
     * @return array attribute
     */
    public function toArray()
    {
        return (array) [$this->name => ['type' => $this->type]];
    }

    /**
     * Checks if attribute is miniminally valid
     *
     * @param void
     * @return binary validity
     */
    public function isValid()
    {
        return (isset($this->name) && isset($this->type))
               ? true
               : false;
    }
}
