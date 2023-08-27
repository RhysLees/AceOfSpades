<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{
    public function render(): string
    {
        return 'layouts.app';
    }
}
