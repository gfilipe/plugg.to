<?php

namespace testeLaravel\Http\Controllers;

use Illuminate\Http\Request;

use testeLaravel\Http\Requests;
use testeLaravel\Filmes;

class FilmesController extends Controller
{
    //atributos


	//funções

	/**
	 * Função responsável por trazer todas os Filmes da API SWAPI
	 * @author Gabriel Carvalho <gabriel.fci.si@gmail.com>
	 * @version 1.0
	 * @see Obter todos os Filmes da API
	 * @param NULL NULL esta função não utiliza parametros
	 * @return array retornará um array json
	 * @link http://swapi.co/api/films/?format=json
	 */
	public function index(){
		$data['filmes'] = Filmes::getAllMovies();
		return view('filmes')->with('filmes',$data);
	}

}
