<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LoadingTest extends Component
{
    public $counter = 0;

    public function cancel()
    {
        sleep(5);
        $this->counter++;
    }

    public function submit()
    {
        sleep(5);
        $this->counter++;
    }

    public function render()
    {
        return view('livewire.loading-test');
    }
}
