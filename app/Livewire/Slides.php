<?php

namespace App\Livewire;

use Illuminate\Support\Facades\File;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Slides extends Component
{
    #[\Livewire\Attributes\Url]
    public $slide = 1;

    #[Computed]
    public function slides()
    {
        return collect(File::files(__DIR__ . '/slides'))->map(fn ($file) => require_once($file->getPathname()))->toArray();
    }

    public function next()
    { 
        $this->slide = min(count($this->slides), $this->slide + 1);
    }

    public function prev()
    { $this->slide = max(1, $this->slide - 1); }

    public function render()
    {
        return <<<'HTML'
        <div
            x-on:keydown.document.left="$wire.prev"
            x-on:keydown.document.right="$wire.next"
            x-on:keydown.document.page-up.prevent="$wire.prev"
            x-on:keydown.document.page-down.prevent="$wire.next"
        >
            <div class="w-full h-1.5 bg-sky-600"></div>
    
            <div class="relative w-full h-screen bg-white">
                <div class="absolute inset-0 bg-neutral-200 bg-opacity-50 grid-background">
                    <div class="container mx-auto h-full flex items-center justify-center">
        HTML.$this->slides[$this->slide - 1].<<<'HTML'
                    </div>
                </div>
            </div>

        </div>
        HTML;
    }
    
}