<?php
namespace Utils\Helpers;

require_once __DIR__ . "/dotenv.php";

use PDO;
use PDOException;
use Utils\Helpers\DotEnvEnvironment;

class DBConnection {
    private $pdo;

    public function __construct(){
        try {
            (new DotEnvEnvironment())->load(__DIR__ . "/../../");

            $host = $_ENV["DB_HOST"];
            $dbname = $_ENV["DB_NAME"];
            $user = $_ENV["DB_USER"];
            $password = $_ENV["DB_PASSWORD"] != "" ? $_ENV["DB_PASSWORD"] : "";
            $url = "mysql:host=" . $host . ";dbname=" . $dbname;
            var_dump($password);

            $this->pdo = new PDO($url, $user, $password);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function runQuery($query){
        $statement = $this->pdo->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

}

