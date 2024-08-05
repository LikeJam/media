<?php

namespace App\Http\Controllers\Api\Media;

use App\Models\Media;

class All
{
    public function __invoke()
    {
        return Media::all();
    }
}
