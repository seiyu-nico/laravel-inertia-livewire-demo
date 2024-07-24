<?php

namespace App\Http\Controllers\Inertia;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;

class FormController extends Controller
{
    public function create()
    {
        return Inertia::render('Form', [
            'text1' => 'Hello Inertia!',
            'text2' => 'Hello World!',
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'text1' => 'required|min:5',
            'text2' => 'required|min:5',
        ], [
            'text1.required' => '必須です。',
            'text1.min' => '5文字以上で入力してください。',
            'text2.required' => '必須です。',
            'text2.min' => '5文字以上で入力してください。',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        Log::info('Save method called');
        sleep(5);

        return to_route('inertia.form.create');
    }
}
