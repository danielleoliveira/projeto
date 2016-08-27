<?php 

class EnderecoPF extends \HXPHP\System\Model
{
	public static function cadastrar($post)
	{
		$post = array ('logradouro', 'numero', 'complemento', 'bairro', 'cep', 'cidade', 'estado', 'uf');

		return self::create($post);
		
	}
}