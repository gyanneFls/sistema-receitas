<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReceitaRequest extends FormRequest
{
   
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
        return [
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'ingredientes' => 'required|string',
            'modo_preparo' => 'required|string',
            'categoria_id' => 'required|exists:categorias,id',
            'imagem' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'O nome da receita é obrigatório.',
            'descricao.required' => 'A descrição é obrigatória.',
            'ingredientes.required' => 'Os ingredientes são obrigatórios.',
            'modo_preparo.required' => 'O modo de preparo é obrigatório.',
            'categoria_id.required' => 'Selecione uma categoria.',
            'categoria_id.exists' => 'Categoria inválida.',
            'imagem.image' => 'O arquivo enviado deve ser uma imagem.',
            'imagem.mimes' => 'A imagem deve ser JPG, JPEG, PNG ou WEBP.',
            'imagem.max' => 'A imagem deve ter no máximo 2MB.',
        ];
    }
}