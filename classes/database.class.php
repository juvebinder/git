<?php
namespace sandalye\classes;
use \PDO;
use PDOException;

class Database
{
    private $MYSQL_HOST = 'localhost';
    private $MYSQL_USER = 'xyz'; 
    private $MYSQL_PASS = '1234' ;  
    private $MYSQL_DB =  'abc' ; 
    private $MYSQL_PORT = '3306';
    private $CHARSET = 'UTF8';
    private $COLLATION = 'utf8_general_ci';
    private $pdo = null;
    private $isConn;
    private $stmt = null;

    private function ConnectDB()
    {
        //database bağlantısı
        $this->isConn=TRUE;
        $SQL = "mysql:host=" . $this->MYSQL_HOST .";port=".$this->MYSQL_PORT. ";dbname=" . $this->MYSQL_DB;
        try {
            $this->pdo = new \PDO($SQL, $this->MYSQL_USER, $this->MYSQL_PASS);
            $this->pdo->exec("SET NAMES '" . $this->CHARSET . "' COLLATE '" . $this->COLLATION . "'");
            $this->pdo->exec("SET CHARACTER SET '" . $this->CHARSET . "'");
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
            
        } catch (PDOException $e) {
            die("PDO ile veritabanına ulaşılamadı" . $e->getMessage());
        }
    }

    public function __construct()
    {
        
        $this->ConnectDB();
    }

    private function myQuery($query, $params = null)
    {
        
        if (is_null($params)) {
            $this->stmt = $this->pdo->query($query);
        } else {
            $this->stmt = $this->pdo->prepare($query);
            $this->stmt->execute($params);
        }
        return $this->stmt;
    }

    public function getRows($query, $params = null)
    {
        
        try {
            return $this->myQuery($query, $params)->fetchAll();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getRow($query, $params = null)
    {
       
        try {
            return $this->myQuery($query, $params)->fetch();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getColumn($query, $params = null)
    {
        
        try {
            return $this->myQuery($query, $params)->fetchColumn();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function Insert($query, $params = null)
    {
       
        try {
            $this->myQuery($query, $params);
            return $this->pdo->lastInsertId();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function Update($query, $params = null)
    {
        
        try {
            return $this->myQuery($query, $params)->rowCount();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function Delete($query, $params = null)
    {
        
        return $this->Update($query, $params);
    }

    public function Limit($query, $p1 = 1, $p2 = null)
    {
        
        $this->stmt = $this->pdo->prepare($query);
        $this->stmt->bindValue(1, $p1, \PDO::PARAM_INT);
        if (!is_null($p2))
            $this->stmt->bindValue(2, $p2, \PDO::PARAM_INT);

        $this->stmt->execute();
        return $this->stmt->fetchAll();
    }
    public function __destruct()
    {
        
        $this->pdo = NULL;
    }

    public function CreateDB($query)
    {
       
        $myDB = $this->pdo->query($query . ' CHARACTER SET ' . $this->CHARSET . ' COLLATE ' . $this->COLLATION);
        return $myDB;
    }

    public function TableOperations($query)
    {
        
        $myTable = $this->pdo->query($query);
        return $myTable;
    }

    public function Maintenance()
    {
        
        $myTable = $this->pdo->query("SHOW TABLES");
        $myTable->setFetchMode(\PDO::FETCH_NUM);
        if ($myTable) {
            foreach ($myTable as $items) {
                $check = $this->pdo->query("CHECK TABLE " . $items[0]);
                $analyze = $this->pdo->query("ANALYZE TABLE " . $items[0]);
                $repair = $this->pdo->query("REPAIR TABLE " . $items[0]);
                $optimize = $this->pdo->query("OPTIMIZE TABLE " . $items[0]);
                if ($check == true && $analyze == true && $repair == true && $optimize == true) {
                    echo $items[0] . ' adlı Tablonuzun bakımı yapıldı<br>';
                } else {
                    echo 'Bir hata oluştu';
                }
            }
        }
    }
}
?>