<?php

namespace App\Http\Requests;


use App\Helpers\FlashMessages;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

trait ValidateMessage
{
    use FlashMessages;
    public function failedValidation(Validator $validator)
    {
        try {
            /***
             * Thêm log exception khi validate không thành công
             */
            $exception = new ValidationException($validator);
            Log::warning($exception->getMessage(), [
                'error_data' => $validator->errors(),
                'error_url' => $this->fullUrl(),
                'data' => $this->all(),
                'e' => $exception
            ]);
        } catch (\Exception $exception) {
            Log::error($exception);
        }
        return self::error($validator->errors()->first());
    }
}
