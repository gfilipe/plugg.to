<?php

namespace testeLaravel\Http\Controllers;

use Illuminate\Http\Request;

use testeLaravel\Http\Requests;
use testeLaravel\Veiculos;

class VeiculosController extends Controller
{
    //atributos


	//funções

	/**
	 * Função responsável por trazer todos os Veículos da API SWAPI
	 * @author Gabriel Carvalho <gabriel.fci.si@gmail.com>
	 * @version 1.0
	 * @see Obter todos os Veículos da API SWAPI
	 * @param NULL NULL esta função não utiliza parametros
	 * @return array retornará um array json
	 * @link http://swapi.co/api/vehicles/?format=json
	 */
	public function index(){
		$data['veiculos'] = Veiculos::getAllVeiculos();
		return view('veiculos')->with('veiculos',$data);
	}

}
