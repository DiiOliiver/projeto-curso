<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    public $table = 'alunos';

    protected $fillable = [
    	 'nome','data_nascimento','email','cep','numero','bairro','cidade','estado','logradouro','avatar','curso'
    ];

    protected $primaryKey = 'id_aluno';

    // A C E S S O R - Pegando informação
    public function getAvatarImageAttribute($value) {
    	return $this->avatar == null ? asset('images/null.png') : asset($this->avatar);
    }
    public function getAvatarFilenameAttribute($value) {
    	return substr($this->avatar, 30, strlen($this->avatar));
    }
    public function getDataNascimentoAttribute($value) {
    	return dateFormatDatabaseScreen($value, 'screen');
    }
    
    //M U T A T O R - Alterar a informação no banco
    public function setDataNascimentoAttribute($value) {
    	$this->attributes['data_nascimento'] = dateFormatDatabaseScreen($value);
    }
    public function setAvatarAttribute($value) {
    	$filename = substr(md5(rand(100000,999999)),0,5).'_'.$value->getClientOriginalName();
    	$filepath = 'public/uploads/'.date('Y').'/'.date('m').'/';
    	if ($value->isValid()) {
    		$path = $value->storeAs($filepath,$filename);
    	}
    	$this->attributes['avatar'] = str_replace('public', 'storage', $filepath) . $filename;
    }
}
