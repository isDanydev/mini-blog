
<?php
class Database
{
    private $host;
    private $user;
    private $password;
    private $database;
    private $pdo;

    public function __construct($host, $user, $password, $database)
    {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;
        $this->connect();
    }

    private function connect()
    {
        $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->database;

        try {
            $this->pdo = new PDO($dsn, $this->user, $this->password);

            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            exit();
        }
    }


    public function getConnection()
    {
        return $this->pdo;
    }
}
