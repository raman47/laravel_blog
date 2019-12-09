<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserDestroyRequest extends FormRequest
{
    public function authorize()
    {
        return !($this->route('user') == config('cms.default_user_id') || $this->route('users') == auth()->user()->id);
    }
    public function forbiddenResponse(){
        return redirect()->back()->with('error-message', 'You cannot delete default user');

    }
    public function rules()
    {
        return [
            //
        ];
    }
}
