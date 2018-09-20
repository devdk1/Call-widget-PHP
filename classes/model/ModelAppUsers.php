<?php 
  class ModelAppUsers {
    public $columns = array();
    
    public function __construct($fields = false)
    {
      if($fields && is_array($fields)) {
        foreach($fields AS $key => $value)
          $this->columns[$key] = $value;
      }
    }

    public function insertUser()
    {
      $sql = 'INSERT INTO cw_appusers (domain_name) VALUES (:domain_name)';
      $stmt = Db::getDbObject()->prepare($sql);
      $stmt->bindValue(':domain_name', $this->columns['domain_name'], PDO::PARAM_STR);
      $stmt->execute();
      return Db::getDbObject()->lastInsertId();
    }

    public function isUserExists()
    {
      $sql = 'SELECT id FROM cw_appusers WHERE domain_name = :domain_name LIMIT 1';
      $stmt = Db::getDbObject()->prepare($sql);
      $stmt->bindValue(':domain_name', $this->columns['domain_name'], PDO::PARAM_STR);
      $stmt->execute();
      $numrows = $stmt->rowCount();

      if(!$numrows)
        return false;
      return $stmt->fetchColumn();      
    }
  }
?>