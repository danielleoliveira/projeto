<?php 

class Pessoa extends \HXPHP\System\Model
{
	public static function cadastrar($post)
	{
		$post = array('nome', 'telefone', 'email', 'username');
		//criptografar a senha através do próprio framework
		//poderia ser usado a API do php para gerar a senha criptografada
		//vai gerar um array associativo com a senha e com o parametro para a criptografia aleatória
		$password = \HXPHP\System\Tools::hashHX($post['senha']);

		$post = array_merge($post, $password);

		return self::create($post);
	}
}