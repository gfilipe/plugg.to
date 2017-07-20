<?php

namespace testeLaravel\Http\Controllers;

use Illuminate\Http\Request;

use testeLaravel\Http\Requests;
use testeLaravel\Pessoas;

class PessoasController extends Controller
{
    //atributos


	//funções

	/**
	 * Função responsável por trazer todos os Personagens da API SWAPI
	 * @author Gabriel Carvalho <gabriel.fci.si@gmail.com>
	 * @version 1.0
	 * @see Obter todos os Personagens da API
	 * @param NULL NULL esta função não utiliza parametros
	 * @return array retornará um array json
	 * @link http://swapi.co/api/people/?format=json
	 */
	public function index(){
		$data['pessoas'] = Pessoas::getAllPessoas();
		return view('pessoas')->with('pessoas',$data);
	}
}
