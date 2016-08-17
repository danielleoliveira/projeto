/*function verificaPessoa(kindPerson){
	if (document.getElementById('tipoPessoa').value == 'PF'){
		document.getElementById('pessoaFisica').style.display='block';
		document.getElementById('pessoaJuridica').style.display='none';
	}
	else{
		document.getElementById('pessoaFisica').style.display='none';
		document.getElementById('pessoaJuridica').style.display='block';
	}
}*/

function verificaPessoa(kindPerson){
	if(kindPerson=="individual"){
		document.getElementById("individual").style.display = "inline";
		document.getElementById("company").style.display = "none";
	}
	else if(kindPerson=="company"){
		document.getElementById("individual").style.display = "none";
		document.getElementById("company").style.display = "inline";
	}
}