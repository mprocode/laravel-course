<?php

namespace App\Models;

class Project {

    public $name;
    public $description;
    public $hash_tags;
    public $picture;
    public $active;
    
    public function __construct($name, $description, 
                                array $hash_tags, $picture, $active)
    {
        $this->name = $name;
        $this->description = $description;
        $this->hash_tags = $hash_tags;
        $this->picture = $picture;
        $this->active = $active;
    }
}
