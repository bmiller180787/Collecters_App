<?php

class tree
{
    private string $name;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getScientificName(): string
    {
        return $this->scientific_name;
    }

    /**
     * @param string $scientific_name
     */
    public function setScientificName(string $scientific_name): void
    {
        $this->scientific_name = $scientific_name;
    }

    /**
     * @return string
     */
    public function getLeafType(): string
    {
        return $this->leaf_type;
    }

    /**
     * @param string $leaf_type
     */
    public function setLeafType(string $leaf_type): void
    {
        $this->leaf_type = $leaf_type;
    }

    /**
     * @return string
     */
    public function getLeafColour(): string
    {
        return $this->leaf_colour;
    }

    /**
     * @param string $leaf_colour
     */
    public function setLeafColour(string $leaf_colour): void
    {
        $this->leaf_colour = $leaf_colour;
    }

    /**
     * @return string
     */
    public function getFlowerColour(): string
    {
        return $this->flower_colour;
    }

    /**
     * @param string $flower_colour
     */
    public function setFlowerColour(string $flower_colour): void
    {
        $this->flower_colour = $flower_colour;
    }

    /**
     * @return string
     */
    public function getImageLink(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImageLink(string $image): void
    {
        $this->image = $image;
    }
    
    private string $scientific_name;
    private string $leaf_type;
    private string $leaf_colour;
    private string $flower_colour;
    private string $image;

    public function __construct(
        string $name,
        string $scientific_name,
        string $leaf_type,
        string $leaf_colour,
        string $flower_colour,
        string $image
    ){
        $this->name = $name;
        $this->scientific_name = $scientific_name;
        $this->leaf_type = $leaf_type;
        $this->leaf_colour = $leaf_colour;
        $this->flower_colour = $flower_colour;
        $this->image = $image;
    }

}