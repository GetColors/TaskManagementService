<?php

namespace Cartago\Domain\Entities\Project;

class ProjectName
{
    protected $name;

    public function __construct(?string $name)
    {
        $this->setName($name);
    }

    protected function setName(?string $name):void
    {
        if (is_null($name)){
            throw new \InvalidArgumentException("Project name cannot be null.");
        }

        if (empty($name)){
            throw new \InvalidArgumentException("Project name cannot be empty");
        }
        if (strlen($name) < 4){
            throw new \InvalidArgumentException("Project name must have a minimum of 4 characters");
        }

        $this->name = $name;
    }

    public function name():string
    {
        return $this->name;
    }

    public function __toString()
    {
        return $this->name;
    }
}