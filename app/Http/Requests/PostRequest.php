<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
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
            'title' => 'required|min:5|max:20',
            'body' => 'required|min:20|max:500'
            
        ];
    }
    
    public function messages(){
        
        return [
            'title.required' => 'inserisci titolo',
            'title.min'=>'inserisci almeno 4 caratteri',
            'title.max'=>'inserisci massimo 20 caratteri',
            'body.required' => 'inserisci nome',
            'body.min'=>'inserisci almeno 20 caratteri',
            'body.max'=>'inserisci massimo 500 caratteri'
        ];
        }
    }
    