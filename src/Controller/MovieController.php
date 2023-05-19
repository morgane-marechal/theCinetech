<?php

namespace App\Controller;
//use App\Model\User;



class MovieController
{

    public object $movie;

    public function __construct()
    {
        $this->movie = new Movie();

    }

    public function showPage()
    {
        require __DIR__ . '/../View/specificMovie.php';
    }



}

?>