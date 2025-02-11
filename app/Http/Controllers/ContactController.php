<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        return response()->json(['message' => 'Contact form submitted successfully!', 'data' => $request->all()]);
    }

}
