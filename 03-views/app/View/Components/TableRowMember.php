<?php

namespace App\View\Components;

use App\Models\Member;
use Illuminate\View\Component;

class TableRowMember extends Component
{
    private $member;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Member $member)
    {
        $this->member = $member;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.table-row-member', [
            'name' => $this->member->name,
            'jobTitle' => $this->member->jobTitle,
            'active' => $this->member->active,
            'company' => $this->member->company,
            'avatar' => $this->member->avatar,
        ]);
    }
}
