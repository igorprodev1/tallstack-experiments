<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\UserSettings;

class Settings extends Component
{
    public string $sEmail;
    public string $country;
    public string $zip;
    public string $currency;
    public string $gender = 'female';
    public string $birthday;
    public string $website;
    public bool $agreement;

    protected $rules = [
        'sEmail' => ['nullable', 'string', 'email'],
        'country' => ['required', 'string', 'min:4', 'max:20'],
        'currency' => ['required', 'string', 'size:3'],
        'gender' => ['required', 'string', 'in:male,female,other'],
        'birthday' => ['required', 'date'],
        'zip' => ['required', 'digits:6'],
        'website' => ['required', 'string', 'url'],
        'agreement' => ['required', 'accepted'],
    ];

    public function mount() {
        $settings = UserSettings::query()->where('user_id', 1)->first();
        
        if(is_null($settings)) {
            return;
        }

        $this->sEmail = $settings->sEmail;
        $this->country = $settings->country;
        $this->currency = $settings->currency;
        $this->gender = $settings->gender;
        $this->birthday = $settings->birthday;
        $this->zip = $settings->zip;
        $this->website = $settings->website;
        $this->agreement = $settings->agreement;
    }

    public function submit() {
        $validatedData = $this->validate();
        $validatedData['user_id'] = 1;
        UserSettings::query()->updateOrCreate($validatedData);
        // dd($validatedData);
        session()->flash('message', 'Post successfully updated.');
    }

    public function render()
    {
        return view('livewire.settings');
    }
}
