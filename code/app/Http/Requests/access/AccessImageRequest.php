<?php
    namespace App\Http\Requests\access;

    use Illuminate\Foundation\Http\FormRequest;


    class AccessImageRequest
        extends FormRequest
    {

        public function authorize(): bool
        {
            return true;
        }


        public function rules(): array
        {
            return
            [
                //
            ];
        }
    }
?>