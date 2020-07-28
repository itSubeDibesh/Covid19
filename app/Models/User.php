<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $guarded = [];

    public function validateUser($id = null)
    {
        if ($id == null) {
            $data = [
                'name' => ['string', 'required', 'min:5'],
                'email' => ['required', 'email', "unique:users,email"],
                'password' => ['required', 'string', 'min:5'],
//            'password_confirm' => 'required|same:password',
                'address' => ['string', 'nullable'],
                'phone' => ['string', 'nullable'],
                'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:5048'],
            ];
            return $data;
        } elseif ($id == 'forget') {
            $data = [
                'password' => ['required', 'string'],
            ];
            return $data;
        } else {
            $data = [
                'name' => ['string', 'required', 'min:5'],
                'email' => ['required', 'email', "unique:users,email,$id"],
//                'password' => ['required', 'string'],
//                'password_confirm' => 'required|same:password',
                'address' => ['string', 'nullable'],
                'phone' => ['string', 'nullable'],
                'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:5048'],
            ];
            return $data;
        }

    }
}
