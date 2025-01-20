<?php

namespace App\Livewire;

use Livewire\Component;

class Previewer extends Component
{
    public $title = 'Default Title';
    public $url = '';
    public $channel_url = '';
    public $name = 'St6nia';
    public $views = 82000;
    public $upload_time = '3 hours ago';

    public function render()
    {
        return view('livewire.previewer');
    }
}
