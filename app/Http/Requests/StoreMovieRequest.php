<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovieRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string',
            'genre' => 'required|string',
            'director' => 'required|string',
            'rating' => 'required|numeric',
            'thumbnail' => 'required|string',
            'poster' => 'required|string',
            'release_date' => 'required|date',
            'synopsis' => 'required|string',
            // 'user_id' => 'required|integer'
        ];
    }
}
