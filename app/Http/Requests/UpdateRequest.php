<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title' => 'required|min:5|max:50',
            'body' => 'required|min:20|max:50000',
            'img'=> 'required|image'
            
        ];
    }
    
    public function messages(){
        
        return [
            'title.required' => 'inserisci titolo',
            'title.min'=>'inserisci un titolo con almeno 5 caratteri',
            'title.max'=>'inserisci un titolo con massimo 50 caratteri',
            'body.required' => 'inserisci contenuto del post',
            'body.min'=>'inserisci una descrizione con almeno 20 caratteri',
            'body.max'=>'inserisci una descrizione con massimo 50000 caratteri',
            'img.required'=>'inserisci immagine',
            'img.image'=> 'formato immagine non valido'
        ];
        }
}
