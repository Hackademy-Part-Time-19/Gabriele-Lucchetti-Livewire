<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class SearchUsers extends Component
{
    public $users;
    public $search = "";
    public function render()
    {

        $this->users = User::where('name', 'like', '%' . $this->search . '%')->get();


        return view('livewire.search-users', ['users' => $this->users]);
    }

    public function search()
    {
    }
}
