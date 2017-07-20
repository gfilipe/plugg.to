<?php

namespace testeLaravel;

use Illuminate\Database\Eloquent\Model;

class Pessoas extends Model
{
    /**
	 * Função responsável por trazer todos os Personagens da API SWAPI
	 * @author Gabriel Carvalho <gabriel.fci.si@gmail.com>
	 * @version 1.0
	 * @see Obter todos os Personagens da API
	 * @static
	 * @param NULL NULL esta função não utiliza parametros
	 * @return array retornará um array json
	 * @link http://swapi.co/api/people/?format=json
	 */
    public static function getAllPessoas(){
    	$contents = file_get_contents('http://swapi.co/api/people/?format=json');
    	return json_decode($contents);
    }
}
