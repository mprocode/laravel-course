<?php

namespace App\Models;

class Member {
    public $name;
    public $jobTitle;
    public $active;
    public $company;
    public $avatar;

    public function __construct($name, $jobTitle, 
        $active, $company, $avatar)    
    {
        $this->name = $name;
        $this->jobTitle = $jobTitle;
        $this->active = $active;
        $this->company = $company;
        $this->avatar = $avatar;
    }
}