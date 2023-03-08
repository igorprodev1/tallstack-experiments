<?php

namespace App\Http\Livewire;

use App\Events\MessageSent;
use App\Models\Message;
use Livewire\Component;

class ChatPage extends Component
{
    public $message;
    public $messages;


    public function mount()
    {
        $this->messages = Message::query()->with('user')->get();
    }
    public function send()
    {
        auth()->check();
        // dd(Message::query()->with('user')->get()->toArray());
        $validator = validator(
            ['message' => $this->message ],
            ['message' => ['required', 'string']],
        );
        $validated = $validator->validated();
        // dd($validated);
        auth()->user()->message()->create($validated);

        broadcast(new MessageSent(auth()->user(), $this->message));
        
        $this->message = '';
    }

    public function render()
    {
        return view('livewire.chat-page');
    }
}
