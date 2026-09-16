<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\FarmingMethod;
use Illuminate\Http\Request;

final class FarmingMethodController extends Controller
{
    public function store(Request $request)
    {
        $farmingMethod = FarmingMethod::create([
            'user_id'     => 1,
            'name'        => $request->name,
            'duration'    => $request->duration,
            'recorded_at' => now(),
        ]);

        return response()->json($farmingMethod);
    }
}
