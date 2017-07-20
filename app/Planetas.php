<?php

namespace testeLaravel;

use Illuminate\Database\Eloquent\Model;

class Planetas extends Model
{
    /**
	 * Função responsável por trazer todos os Planetas da API SWAPI
	 * @author Gabriel Carvalho <gabriel.fci.si@gmail.com>
	 * @version 1.0
	 * @see Obter todos os Planetas da API
	 * @static
	 * @param NULL NULL esta função não utiliza parametros
	 * @return array retornará um array json
	 * @link http://swapi.co/api/planets/?format=json
	 */
    public static function getAllPlanets(){
    	$contents = file_get_contents('http://swapi.co/api/planets/?format=json');
    	return json_decode($contents);
    }
}
