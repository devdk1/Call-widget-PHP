<?php 
  class ModelCallRequests {
    public $columns = array();
    
    public function __construct($fields = false)
    {
      if($fields && is_array($fields)) {
        foreach($fields AS $key => $value)
          $this->columns[$key] = $value;
      }
    }

    public function addCallRequest()
    {
      $sql = 'INSERT INTO cw_callrequests (main_user_id, user_name, user_email, user_number) VALUES (:main_user_id, :user_name, :user_email, :user_number)';
      $stmt = Db::getDbObject()->prepare($sql);
      $stmt->bindValue(':main_user_id', $this->columns['main_user_id'], PDO::PARAM_INT);
      $stmt->bindValue(':user_name', $this->columns['user_name'], PDO::PARAM_STR);
      $stmt->bindValue(':user_email', $this->columns['user_email'], PDO::PARAM_STR);
      $stmt->bindValue(':user_number', $this->columns['user_number'], PDO::PARAM_INT);
      $stmt->execute();
      return Db::getDbObject()->lastInsertId();
    }

    public function fetchCallRequestsByUserId()
    {
      $sql = 'SELECT user_name, user_email, user_number, date_add FROM cw_callrequests WHERE main_user_id = :main_user_id';
      $stmt = Db::getDbObject()->prepare($sql);
      $stmt->bindValue(':main_user_id', $this->columns['main_user_id'], PDO::PARAM_INT);
      $stmt->execute();
      $numrows = $stmt->rowCount();

      if(!$numrows)
        return false;
      return $stmt->fetchAll(PDO::FETCH_ASSOC);      
    }
  }
?>