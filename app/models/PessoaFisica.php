<?php 

class PessoaFisica extends \HXPHP\System\Model
{
	//método criado para para não tratar as regras de negócio no Controller
	public static function cadastrar($post)
	{
		$post = array ('cpf', 'sexo');

		return self::create($post);
	}
}