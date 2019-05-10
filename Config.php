<?php
class Connection {
    private $host = 'localhost:3306';
    private $pid = 'root';
    private $pwd = '';
    private $schema = 'test';
    
    /** @param mysqli $sql */
    private $sql = null;
    
    public function __construct() {
        $db = new mysqli($this->host, $this->pid, $this->pwd, $this->schema);
        
        if($db->connect_error){
            throw new Exception($db->error);
        }
        else{
            $this->sql = $db;
        }
    }
    
    /**
     * 
     * @return mysqli
     */
    public function getLink(){
        if($this->sql != null){
            return $this->sql;
        }
        else{
            return null;
        }
    }
    
    
    function numRows($query){
        $result = mysqli_query($this->db, $query);
        $rowcount = mysqli_num_rows($result);
        return $rowcount;
    }
}
