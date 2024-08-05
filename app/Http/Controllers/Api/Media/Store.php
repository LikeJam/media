<?php

namespace App\Http\Controllers\Api\Media;

use App\Models\Media;
use Illuminate\Http\Request;

class Store
{
    public function __invoke(Request $request)
    {
        if($request->file()) {
            $name = time() . '_' . $request->file()->getClientOriginalName();
            $path = $request->file()->storeAs('uploads', $name, 'public');

            Media::create(
                name: $name,
                path: $path,
                type: '',
                mime: ''
            );
        }
    }
}
