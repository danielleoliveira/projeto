<?php 

class CadastroController extends \HXPHP\System\Controller
{
	public function cadastrarAction()
	{
		/*adicionando essa linha pois a action da view solicita o arquivo cadastrar. 
		*Com essa linha não será necessário criar esse arquivo, 
		*pois se for exibir um erro, será exibido na própria index*/
		$this->view->setFile("index");
	}
}