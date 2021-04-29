<?php

class Signin
{
    public function handler($arg)
    {


        $users = self::getUser();
        var_dump($users);

        
    if($arg['email'] == $users->email && password_verify($arg['password'], $users->password)){
       $_SESSION['email'] = $users->email;
        return "successful";
         
}else {
    header("location: signin.php");
}


    private static function getUser()
    {
        // this gets users from the store json file
        $users = file_get_contents('storage/users.json');
        return json_decode($users);
    }
}
