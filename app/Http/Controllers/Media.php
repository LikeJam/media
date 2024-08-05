<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class Media extends \Illuminate\Routing\Controller
{
    public function __invoke()
    {
        return Inertia::render('Media/Main');
    }
}
