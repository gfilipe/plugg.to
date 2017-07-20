<?php

namespace testeLaravel\Http\Controllers;

use Illuminate\Http\Request;

use testeLaravel\Http\Requests;
use testeLaravel\Planetas;

class PlanetasController extends Controller
{
    //atributos


	//funções

	/**
	 * Função responsável por trazer todos os Planetas da API SWAPI
	 * @author Gabriel Carvalho <gabriel.fci.si@gmail.com>
	 * @version 1.0
	 * @see Obter todos os Planetas da API
	 * @param NULL NULL esta função não utiliza parametros
	 * @return array retornará um array json
	 * @link http://swapi.co/api/planets/?format=json
	 */
	public function index(){
		$data['planetas'] = Planetas::getAllPlanets();
		return view('planetas')->with('planetas',$data);
	}
}
