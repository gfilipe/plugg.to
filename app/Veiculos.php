<?php

namespace testeLaravel;

use Illuminate\Database\Eloquent\Model;

class Veiculos extends Model
{
    
    /**
	 * Função responsável por trazer todas os Veiculos da API SWAPI
	 * @author Gabriel Carvalho <gabriel.fci.si@gmail.com>
	 * @version 1.0
	 * @see Obter todos os Veiculos da API
	 * @static
	 * @param NULL NULL esta função não utiliza parametros
	 * @return array retornará um array json
	 */
    public static function getAllVeiculos(){
    	$contents = file_get_contents('http://swapi.co/api/vehicles/?format=json');
    	return json_decode($contents);
    }
}