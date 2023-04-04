<?php

class Tree
{

    private string $name;
    private string $scientific_name;
    private string $leaf_type;
    private string $leaf_colour;
    private string $flower_colour;
    private string $image;
    private string $id;

    public function __construct(
        string $name,
        string $scientific_name,
        string $leaf_type,
        string $leaf_colour,
        string $flower_colour,
        string $image,
        int $id = -1
    ){
        $this->name = $name;
        $this->scientific_name = $scientific_name;
        $this->leaf_type = $leaf_type;
        $this->leaf_colour = $leaf_colour;
        $this->flower_colour = $flower_colour;
        $this->image = $image;
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }


    public function getScientificName(): string
    {
        return $this->scientific_name;
    }


    public function getLeafType(): string
    {
        return $this->leaf_type;
    }


    public function getLeafColour(): string
    {
        return $this->leaf_colour;
    }

    public function getFlowerColour(): string
    {
        return $this->flower_colour;
    }

    public function getImageLink(): string
    {
        return $this->image;
    }

    public function getId(string $id): string
    {
        return $this->id;
    }

}
