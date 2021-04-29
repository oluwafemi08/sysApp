<?php
/**
 * 
 */
class Register
{
	
	public function handler($arg)
	{
		$data = [
			'email'=> $arg['email'],
			'password'=>self::hash($arg['password']) 
		]
		// var_dump($data);
		$data = json_encode($data);
		self::store($data);

		return "successful";
	}



	private static function store($data)
	{
		// database
		$file = fopn('users.json', 'w');
		fwrite($file, $data);
		fclose($file);
	}


	private static function hash($password){
		return password_hash($password, PASSWORD-DEFAULT);
	}
}