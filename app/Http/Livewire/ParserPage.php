<?php

namespace App\Http\Livewire;

use App\Jobs\ParserJob;
use Livewire\Component;

class ParserPage extends Component
{
    public function putInQueue()
    {
        dispatch(new ParserJob(['date' => now()->format('H:m:s')]));
    }

    public function render()
    {
        return view('livewire.parser-page');
    }
}
