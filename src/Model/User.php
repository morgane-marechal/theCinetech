<?php

namespace App\Model;

use pdo;

class User extends Database
{
    public ?int $id = null;
    public ?string $firstname = null;
    public ?string $lastname = null;
    public ?string $mail = null;

    public function __construct()
    {
        parent::__construct();

        $this->dbConnect();
    }


    public function displayUsers(){
        $displayUsers = $this->pdo->prepare("SELECT * FROM user");
        $displayUsers->execute([
        ]);
        $result = $displayUsers->fetchAll(PDO::FETCH_ASSOC);
        return json_encode([$result]);
    }

    public function createUser($email, $first_name, $last_name, $password){
        $request = "INSERT INTO user (email, first_name, last_name, password)
        VALUES (:email, :first_name, :last_name, :password)";
        if (!$this->verifUser($email)){
            $statement = $this->pdo->prepare($request);
            $statement ->execute([
                'email' => $email,
                'first_name' => $first_name,
                'last_name' => $last_name,
                'password' => password_hash($password, PASSWORD_DEFAULT)
            ]);
            
            if ($statement) {
                return json_encode(['response' => 'ok', 'reussite' => 'Ajout utilisateurs']);
            } else {
                return json_encode(['response' => 'not ok', 'echoue' => 'Echec']);
            }
        }else{
            return json_encode(['response' => 'not ok', 'echoue' => 'Cet utilisateur existe déjà']);

        }
    }

    public function register($email, $first_name, $last_name, $password){
        $request = "INSERT INTO user (email, first_name, last_name, password)
        VALUES (:email, :first_name, :last_name, :password)";
        if (!$this->verifUser($email)){
            $statement = $this->pdo->prepare($request);
            $statement ->execute([
                'email' => $email,
                'first_name' => $first_name,
                'last_name' => $last_name,
                'password' => password_hash($password, PASSWORD_DEFAULT)
            ]);
            
            if ($statement) {
                return true;
            } else {
                return false;
            }
        }else{
            return false;
        }
    }

    public function verifUser($email)
    {
            $sql = "SELECT * 
                    FROM user
                    WHERE email = :email";
            $sql_exe = $this->pdo->prepare($sql);
            $sql_exe->execute([
                'email' => $email,
            ]);
            $results = $sql_exe->fetch(PDO::FETCH_ASSOC);
            if ($results) {
                return true;
            } else {
                return false;
            }
    }


    public function login($email, $password)
    {
        $sql = "SELECT * 
                FROM user
                WHERE email = :email ";
        $sql_exe = $this->pdo->prepare($sql);
        $sql_exe->execute([
            'email' => $email,
        ]);
        $results = $sql_exe->fetch(PDO::FETCH_ASSOC);
        if ($results) {
            $hashed_password = $results['password'];
            if (password_verify($password, $hashed_password)) {
                $userId = $results['id'];
                $_SESSION['id'] = $userId;
                $lastname = $results['last_name'];
                $_SESSION['last_name'] = $lastname;
                $firstname = $results['first_name'];
                $_SESSION['first_name'] = $firstname;
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    //get all info from an user
    public function getUserInfo($id){
        $sql = "SELECT * 
        FROM user
        WHERE id = :id ";
        $sql_exe = $this->pdo->prepare($sql);
        $sql_exe->execute([
            'id' => $id,
        ]);
        $results = $sql_exe->fetch(PDO::FETCH_ASSOC);
        return $results;
    }

    //public function updateUserInfo($id){}

    public function updateUser($id, $email, $firstname, $lastname, $password){
        $sql = "UPDATE user SET email = :email, first_name = :firstname, last_name = :lastname,
        password = :password WHERE id = :id";
        $sql_exe = $this->pdo->prepare($sql);
        $sql_exe->execute([
            'id' => $id,
            'firstname' => htmlspecialchars($firstname),
            'lastname' => htmlspecialchars($lastname),
            'email' => htmlspecialchars($email),
            'password' => password_hash($password, PASSWORD_DEFAULT)
        ]);         
        if ($sql_exe) {
            echo json_encode(['response' => 'ok', 'reussite' => 'Utilisateur modifié']);
        } else {
            echo json_encode(['response' => 'not ok', 'echoue' => 'Problème enregistrement']);
        }
    }

    

    public function logout(){
        session_destroy();
        header('Location: /theCinetech');

    }

}