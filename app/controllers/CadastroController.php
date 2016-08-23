<?php 

class CadastroController extends \HXPHP\System\Controller
{
	public function cadastrarAction()
	{
		/*adicionando essa linha pois a action da view solicita o arquivo cadastrar. 
		*Com essa linha não será necessário criar esse arquivo, 
		*pois se for exibir um erro, será exibido na própria index*/
		$this->view->setFile('index');

		//aplicando filtro de sanitização para exibição de e-mail

		$this->request->setCustomFilters(array(
			'email' => FILTER_VALIDATE_EMAIL 
		));

		$cadastrarEndPessoaFisica = EnderecoPF::cadastrar($this->request->post('logradouro', 'numero', 'complemento', 'bairro', 'cep', 'cidade', 'estado', 'uf'));

		$cadastrarPessoa = Pessoa::cadastrar($this->request->post('nome', 'telefone', 'email', 'username', 'senha'));
		
		$cadastrarPessoaFisica = PessoaFisica::cadastrar($this->request->post('cpf', 'sexo'));
		//var_dump($this->request->post());
	}
}