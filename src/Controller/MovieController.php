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

    //comment management

    public function createComment($idUser,$title,$content,$created_at, $movieId){
       if ((!empty($title))&&(!empty($content)) ){
            $success = $this->movie->createComment($idUser, $title, $content, $created_at, $movieId);
            return $success;
       }
    }

    public function getComments($movieId){
        $success = $this->movie->getComments($movieId);
        return $success;      
    }


    //favorites management

    public function addFavorite($user_id, $movie_id){
        $success = $this->movie->addFavorite($user_id, $movie_id);
        return $success;
    }

    public function getFavorites($user_id){
        $favorites = $this->movie->getFavoritesByUser($user_id);
        return json_encode($favorites);
    }
}

?>