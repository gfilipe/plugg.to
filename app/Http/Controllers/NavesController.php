<?php

namespace testeLaravel\Http\Controllers;

use Illuminate\Http\Request;

use testeLaravel\Http\Requests;
use testeLaravel\Naves;

class NavesController extends Controller
{
    //atributos


	//funções

	/**
	 * Função responsável por trazer todas as Naves da API SWAPI
	 * @author Gabriel Carvalho <gabriel.fci.si@gmail.com>
	 * @version 1.0
	 * @see Obter todas as Naves da API SWAPI
	 * @param NULL NULL esta função não utiliza parametros
	 * @return array retornará um array json
	 * @link http://swapi.co/api/starships/?format=json
	 */
	public function index(){
		$data['naves'] = Naves::getAllNaves();
		return view('naves')->with('naves',$data);
	}
}
