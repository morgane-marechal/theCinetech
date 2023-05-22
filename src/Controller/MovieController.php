<?php

namespace App\Controller;
use App\Model\User;
use App\Model\Movie;


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

    public function createComment($idUser,$title,$content,$created_at, $movieId){
        $success = $this->movie->createComment($idUser, $title, $content, $created_at, $movieId);
        return $success;
    }

    public function getComments($movieId){
        $success = $this->movie->getComments($movieId);
        return $success;      
    }

}

?>