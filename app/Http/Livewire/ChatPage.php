<?php

namespace App\Http\Livewire;

use App\Events\MessageSent;
use App\Models\Message;
use Livewire\Component;

class ChatPage extends Component
{
    public $message;
    public $messages;
    
    protected $listeners = ['echo:private-chat,MessageSent' => 'handleNewMessage'];

    public function mount()
    {
        $this->messages = Message::query()
            ->with('user')
            ->get(['message', 'created_at'])
            ->toArray();
    }
    public function send()
    {
        auth()->check();
        $validator = validator(
            ['message' => $this->message ],
            ['message' => ['required', 'string']],
        );
        $validated = $validator->validated();
        $message = auth()->user()->message()->create($validated);
        
        event(new MessageSent(auth()->user(), $message));
        
        $this->message = '';
    }

    public function render()
    {
        return view('livewire.chat-page');
    }

    public function handleNewMessage($event)
    {
        array_push($this->messages, $event['message']);
    }
}
