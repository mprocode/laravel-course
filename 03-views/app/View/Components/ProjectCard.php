<?php

namespace App\View\Components;

use App\Models\Project;
use Illuminate\View\Component;

class ProjectCard extends Component
{
    public $project;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Project $project)
    {
        $this->project = $project;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.project-card', [
            'name' => $this->project->name,
            'description' => $this->project->description,
            'hash_tags' => $this->project->hash_tags,
            'image' => $this->project->picture,
            'active' => $this->project->active,
        ]);
    }
}
