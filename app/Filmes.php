<?php

namespace testeLaravel;

use Illuminate\Database\Eloquent\Model;

class Filmes extends Model
{
    
    /**
	 * Função responsável por trazer todas os Filmes da API SWAPI
	 * @author Gabriel Carvalho <gabriel.fci.si@gmail.com>
	 * @version 1.0
	 * @see Obter todos os Filmes da API
	 * @static
	 * @param NULL NULL esta função não utiliza parametros
	 * @return array retornará um array json
	 */
    public static function getAllMovies(){
    	$contents = file_get_contents('http://swapi.co/api/films/?format=json');
    	return json_decode($contents);
    }
}