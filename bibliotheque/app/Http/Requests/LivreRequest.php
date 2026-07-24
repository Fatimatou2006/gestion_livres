<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class LivreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
   public function authorize(): bool
{
    return true;
}

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
   public function rules(): array
{
    return [
        'titre' => 'required|string|max:255',
        'auteur' => 'required|string|max:255',
        'editeur' => 'required|string|max:255',
        'isbn' => 'required|string|max:255',
        'nombre_exemplaires' => 'required|integer|min:1',
        'statut' => 'required|in:Disponible,Epuisé',
    ];
}
}
