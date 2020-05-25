<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Project;
use Illuminate\Http\Request;
use Faker\Generator as Faker;

class GeneralController extends Controller
{
    private $faker;

    public function __construct(Faker $faker)
    {
        $this->faker = $faker;
    }

    public function projects()
    {
        $projects = [];
        $projectsAmmount = random_int(5, 20);
        for($i=0; $i<$projectsAmmount; $i++) {
            $projects[] = new Project(
                $this->faker->sentence,
                $this->faker->text(100),
                $this->faker->words(),
                "https://picsum.photos/300/200?random=$i",
                $this->faker->boolean
            );
        }

        //dd($projects);
        return view('projects', compact(['projects']));
    }

    public function members()
    {
        $members = [];
        $membersAmount = random_int(10,30);
        
        for($i=0; $i<$membersAmount; $i++) {
            $members[] = new Member(
                $this->faker->name,
                $this->faker->jobTitle,
                $this->faker->boolean,
                $this->faker->company,
                "https://i.pravatar.cc/40?img=$i",
            );
        }
        // dd($members);
        return view('members', compact(['members']));
    }
}
