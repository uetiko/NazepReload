<?php
namespace config;
/**
 * Clase de configuracion de Nazep
 *
 * @author Angel Barrientos <uetiko@gmail.com>
 */
class Config {
    private static $INSTANCE = NULL;
    private $properties;
    private $base;
    private $log;
    private function __construct() {
        $this->properties = \spyc\Spyc::YAMLLoad(realpath(__DIR__ . '/../resources/config.yml'));
        $this->base = $this->properties['base'];
        $this->log = $this->properties['log'];
    }
    /**
     * 
     * @return Object Config
     */
    public static final function getInstance(){
        if(!(self::$INSTANCE instanceof \config\Config)){
            self::$INSTANCE = new \config\Config();
        }
        return self::$INSTANCE;
    }
    
    public function getHost(){
        return $this->base['host'];
    }
    
    public function getDBName(){
        return $this->base['dbname'];
    }
    
    public function getUser(){
        return $this->base['user'];
    }
    
    public function getPassword(){
        return $this->base['password'];
    }
    
    public function getErrorLogName(){
        return $this->log['error'];
    }
    
    public function getNoteLogName(){
        return $this->log['note'];
    }
    
    public function getQueryLogName(){
        return$this->log['query'];
    }
    
    public function getDirLogs(){
        return $this->log['dir'];
    }
}

?>
