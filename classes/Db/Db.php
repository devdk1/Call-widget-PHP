<?php
  class Db {
    protected $dbhost;
    protected $dbuser;
    protected $dbpass;
    protected $dbname;
    protected static $db_object = null;

    public function __construct() {
      $this->dbhost = _DB_HOST_;
      $this->dbuser = _DB_USER_;
      $this->dbpass = _DB_PASS_;
      $this->dbname = _DB_NAME_;

      if(self::$db_object == null)
        $this->connectDatabase();
    }

    protected static function getPDO($dbhost, $dbuser, $dbpass, $dbname) {
      try {
        $hsn = 'mysql:host='.$dbhost.'; dbname='.$dbname.'; charset=utf8';
        return new PDO($hsn, $dbuser, $dbpass);
      }
      catch(Exception $e) {
        echo 'Got error while getting PDO';
      }
    }

    public function connectDatabase() {
      try {
        self::$db_object = $this->getPDO($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
      }
      catch(Exception $e) {
        echo 'Got error while connecting with DB';
      }
    }

    public static function getDbObject() {
      return self::$db_object;
    }

    public static function disconnect() {
      self::$db_object = null;
    }
  }
?>