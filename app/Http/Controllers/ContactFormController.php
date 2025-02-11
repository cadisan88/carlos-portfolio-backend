<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactFormRequest;
use App\Models\ContactForm;
use Illuminate\Http\JsonResponse;

class ContactFormController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactFormRequest $request): JsonResponse
    {
        $contactForm = ContactForm::create($request->validated());
        return response()->json(['message' => 'Thanks for reaching out. I\'ll contact you as soon as possible!']);
    }
}
