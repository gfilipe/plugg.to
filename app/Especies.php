<?php

namespace testeLaravel;

use Illuminate\Database\Eloquent\Model;

class Especies extends Model
{
    /**
	 * Função responsável por trazer todas as Especies de seres da API SWAPI
	 * @author Gabriel Carvalho <gabriel.fci.si@gmail.com>
	 * @version 1.0
	 * @see Obter todas as Especies de seres da API SWAPI
	 * @static
	 * @param NULL NULL esta função não utiliza parametros
	 * @return array retornará um array json
	 * @link http://swapi.co/api/species/?format=json
	 */
    public static function getAllEspecies(){
    	$contents = file_get_contents('http://swapi.co/api/species/?format=json');
    	return json_decode($contents);
    }
}
