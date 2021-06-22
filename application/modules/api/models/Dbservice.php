<?php 

class Dbservice extends PDO
{
    private $db;

    public function __construct($conn = true)
    {

        if ($conn) {
            $this->connect();
        }
    }

    private function connect()
    {

        $dbh = 'mysql:host=localhost;dbname=nrna';

        try {
            $this->db = new PDO($dbh, 'root', '');
            $this->db->exec("set names utf8");
        } catch (PDOException $e) {
            print "Database connection failed: {$e->getMessage()} <br/>";
            die();
        }
    }

    public function begin()
    {
        $this->db->beginTransaction();
    }
    public function commit()
    {
        $this->db->commit();
    }
    public function rollback()
    {
        $this->db->rollback();
    }

    public function query($sql, $params)
    {

        $statement = $this->db->prepare($sql);
        $result = $statement->execute($params);

        return $result ? $statement : $result;
    }

}
