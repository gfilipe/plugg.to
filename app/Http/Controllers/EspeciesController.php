<?php

namespace testeLaravel\Http\Controllers;

use Illuminate\Http\Request;

use testeLaravel\Http\Requests;
use testeLaravel\Especies;

class EspeciesController extends Controller
{
    //atributos


	//funções

	/**
	 * Função responsável por trazer todas as Especies de seres da API SWAPI
	 * @author Gabriel Carvalho <gabriel.fci.si@gmail.com>
	 * @version 1.0
	 * @see Obter todas as Especies de seres da API SWAPI
	 * @param NULL NULL esta função não utiliza parametros
	 * @return array retornará um array json
	 * @link http://swapi.co/api/species/?format=json
	 */
	public function index(){
		$data['especies'] = Especies::getAllEspecies();
		return view('especies')->with('especies',$data);
	}
}
