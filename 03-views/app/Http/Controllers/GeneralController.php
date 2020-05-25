<?php

namespace App\Http\Controllers;

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
}
