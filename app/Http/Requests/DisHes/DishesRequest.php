<?php

namespace App\Http\Requests\DisHes;

use App\Http\Requests\ValidateMessage;
use Illuminate\Foundation\Http\FormRequest;

class DishesRequest extends FormRequest
{
    use ValidateMessage;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
