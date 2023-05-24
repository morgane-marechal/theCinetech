<?php
session_start();
?>
<?php

    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    require 'vendor/autoload.php';

    $router = new AltoRouter();
    
    $router->setBasePath('/theCinetech');
    //use Tmdb\Client;
    use App\Controller\UserController;
    use App\Controller\AuthController;
    use App\Controller\MovieController;

    //-----------------route for home-----------------------------

    $router->map( 'GET', '/', function() {
        require __DIR__ . '/src/View/home.php';
    });

    $router->map( 'GET', '/home', function() {
        require __DIR__ . '/src/View/home.php';
    });

    //-----------------route for register-----------------------------

    $router->map( 'GET', '/register', function() {
        require __DIR__ . '/src/View/register.php';
    });


    $router->map( 'POST', '/register', function() {
        $email=htmlspecialchars($_POST["email"]);
        $first_name=htmlspecialchars($_POST["first_name"]);
        $last_name=htmlspecialchars($_POST["last_name"]);
        $password=htmlspecialchars($_POST["password"]);
        $checkPassword=htmlspecialchars($_POST["checkPassword"]);

        $authController = new AuthController();
        $success = $authController->register($email, $first_name, $last_name, $password, $checkPassword);
        echo $success;

    });

        //-----------------route for login-----------------------------

        $router->map( 'GET', '/login', function() {
            require __DIR__ . '/src/View/login.php';
        });

        $router->map( 'GET', '/logout', function() {
            $authController = new AuthController();
            $success = $authController->logout();
        });
    
        $router->map( 'POST', '/login', function() {
            $email=htmlspecialchars($_POST["email"]);
            $password=htmlspecialchars($_POST["password"]);
            $authController = new AuthController();
            $success = $authController->login($email, $password);
        });

        //-----------------route for account-----------------------------

        $router->map( 'GET', '/account', function() {
            require __DIR__ . '/src/View/account.php';
        });
        //---------route for testdata-----------------------------------
        
        $router->map( 'GET', '/test', function() {
            require __DIR__ . '/src/View/testdata.php';
        });

       //----------route for movie page-------------------------------
            $router->map( 'GET', '/movies', function() {
            require __DIR__ . '/src/View/movie.php';
        });

        $router->map( 'GET', '/movie', function(){
            require __DIR__ . '/src/View/specificMovie.php';

        });

        // $router->map( 'GET', '/movie/[i:movieId]', function($movieId){
        //     require __DIR__ . '/src/View/specificMovie.php';
        // });

        $router->map( 'POST', '/movie/[i:movieId]', function($movieId) {
            $idUser=$_SESSION["id"];
            $title=htmlspecialchars($_POST["title"]);
            $content=htmlspecialchars($_POST["content"]);
            $created_at=date('Y-m-d H:i:s');
            $movieController = new MovieController($movieId);
            $success = $movieController->createComment($idUser,$title,$content,$created_at, $movieId);

            echo $success;
        });

        $router->map( 'GET', '/movie/[i:movieId]', function($movieId){
            $movieController = new MovieController($movieId);
            $success = $movieController->getComments($movieId);
            require __DIR__ . '/src/View/specificMovie.php';
        });

        $router->map( 'GET', '/movie/[i:movieId]/comments', function($movieId){
            $movieController = new MovieController($movieId);
           echo $success = $movieController->getComments($movieId);
        });

        $router->map( 'GET', '/movie/[i:movieId]/favorite', function($movie_id){
            $user_id = $_SESSION['id'];
            $movieController = new MovieController($user_id, $movie_id);
            $success = $movieController->addFavorite($user_id, $movie_id);
        });


        //----------route for tv show-------------------------------

        $router->map( 'GET', '/tvshow', function() {
            require __DIR__ . '/src/View/tvshow.php';
        });

    // match current request url
    $match = $router->match();

    // call closure or throw 404 status
    if( is_array($match) && is_callable( $match['target'] ) ) {
        call_user_func_array( $match['target'], $match['params'] ); 
    } else {
        // no route was matched
        header( $_SERVER["SERVER_PROTOCOL"] . ' 400 Not Found');
    }











?>