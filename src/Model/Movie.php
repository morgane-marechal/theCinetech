<?php

namespace App\Model;

use pdo;

class Movie extends Database

{

    public ?int $id = null;
    public ?string $title = null;
    public ?string $content = null;

    public function __construct()
    {
        parent::__construct();

        $this->dbConnect();
    }


    public function getComments($movieId){
        $displayComment = $this->pdo->prepare("SELECT * FROM comments where movieId = $movieId");
        $displayComment->execute([
        ]);
        $result = $displayComment->fetchAll(PDO::FETCH_ASSOC);        
        return json_encode([$result]);
    }

   

    public function createComment($idUser, $title, $content, $created_at, $movieId){
        $request = "INSERT INTO comments (title, content, created_at, userId, movieId)
        VALUES (:title, :content, :created_at, :userId, :movieId)";
            $statement = $this->pdo->prepare($request);
            $statement ->execute([
                'userId' => $idUser,
                'title' => $title,
                'content' => $content,
                'created_at' => $created_at,
                'movieId' => $movieId
            ]);
            
            if ($statement) {
                return json_encode(['response' => 'ok', 'reussite' => 'Ajout commentaire']);
            } else {
                return json_encode(['response' => 'not ok', 'echoue' => 'Echec']);
            }
    }

    public function addFavorite($user_id, $movie_id){
        $request = "INSERT INTO favorites (user_id, movie_id) VALUES ( :user_id, :movie_id)";
        $statement = $this->pdo->prepare($request);
        $statement ->execute([
            'user_id' => $user_id,
            'movie_id' => $movie_id
        ]);
        
        if ($statement) {
            return json_encode(['response' => 'ok', 'reussite' => 'Ajout à vos favories']);
        } else {
            return json_encode(['response' => 'not ok', 'echoue' => 'Echec']);
        }      

    }

    public function getFavoritesByUser($userId){
        $displayFavorites = $this->pdo->prepare("SELECT * FROM favorites where user_id = $userId");
        $displayFavorites->execute([
        ]);
        $result = $displayFavorites->fetchAll(PDO::FETCH_ASSOC);        
        return $result;
    }










}