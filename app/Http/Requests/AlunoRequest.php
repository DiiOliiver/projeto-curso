<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlunoRequest extends FormRequest
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
        switch($this->method()){
            case "POST": //Criação de um registro
                return [
                    'nome' => 'required|max:100',
                    'email' => 'email|max:200|unique:alunos',
                    'data_nascimento' => 'date_format:"d/m/y"',
                    'cep' => 'required|max:9',
                    'numero' => 'required|max:5',
                    'bairro' => 'required|max:20',
                    'cidade' => 'required|max:20',
                    'estado' => 'required|max:20',
                    'logradouro' => 'required|max:50',
                    'avatar' => 'nullable|sometimes|image|mimes:jpg,jpeg,png,gif',
                    'curso' => 'required|max:15',
                ];
                break;
            case "PUT": //Atualização de um registro existente
                return [
                    'nome' => 'required|max:100',
                    'email' => 'email|max:200|unique:contatos,email,'.$this->id,
                    'data_nascimento' => 'date_format:"d/m/y"',
                    'cep' => 'required|max:9',
                    'numero' => 'required|max:5',
                    'bairro' => 'required|max:20',
                    'cidade' => 'required|max:20',
                    'estado' => 'required|max:20',
                    'logradouro' => 'required|max:50',
                    'avatar' => 'nullable|sometimes|image|mimes:jpg,jpeg,png,gif',
                    'curso' => 'required|max:15',
                ];
                break;
            default:break;
        }
    }
    public function messages()
    {
        return [
            'cep.required' => 'O campo CEP é obrigatório',
            'numero.required' => 'O campo Numéro é obrigatório',
            'bairro.required' => 'O campo Bairro é obrigatório',
            'cidade.required' => 'O campo Cidade é obrigatório',
            'estado.required' => 'O campo Estado é obrigatório',
            'logradouro.required' => 'O campo Logradouro é obrigatório',
            'nome.required' => 'O campo Nome é obrigatório',
            'email.email' => 'Informe um e-mail válido',
            'data_nascimento.date_format' => 'O campo Data deve ser no formato DD/MM/AAAA',
        ];
    }
}
