<?php 

class Conexao {

	public static function connect() {

		return new PDO(
		"mysql:host=localhost;
			dbname=meuDB;
			charset=utf8;
		","root","password"
		);


	}



}









?>