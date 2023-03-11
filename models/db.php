<?php 

class db{
    private $engine = 'mysql';
    private $host= 'localhost';
    private $dbname = 'examen_maxi';
    private $user = 'root';
    private $pass = '';

    public function conexion(){
        try {
            $primer_argumento = $this->engine.':dbname='.$this->dbname.';host='.$this->host;
            $PDO = new PDO($primer_argumento, $this->user, $this->pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
            return $PDO; 
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    
    }
}