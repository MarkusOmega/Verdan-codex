<?php

namespace App\Livewire;

use App\Http\Controllers\UserController;
use App\Models\User;
use Livewire\Component;

class DeleteUser extends Component
{
    public $user = null;

    public $modalShow = false;

    public function mount()
    {

    }

    public function render()
    {
        if($this->modalShow){
            $this->modalShow == false;
        }
        else{
            $this->modalShow == 'test';
        }

        return view('livewire.delete-user', ['modalShow' => $this->modalShow]);
    }

    public function deleteConfirm()
    {
        if($this->modalShow == true) {
            $this->modalShow = false;
        }
        else{
            $this->modalShow = true;
        }
    }

    public function deleteUser(User $user)
    {
        //$user->delete();

        session()->flash('succes', 'user succesfully deleted');

        $this->redirect('/users');
    }
}
