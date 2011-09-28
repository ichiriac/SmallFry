<?php

//DATABASE CONNECT
class Database {
	private static $default = array(
		'host' => '',
		'login' => '',
		'password' => '',
		'database' => '',
	);
        
        private static $ms = null; 
        
        public static function connect(){
            self::$ms =  new mySQL(self::$default['host'], self::$default['login'], 
                                   self::$default['password'], self::$default['database']);
        }
        
        /**
         * Return mySQL connection
         * @return mySQL
         */
        public static function getConnection(){
            if(self::$ms == null){
                self::connect(); //connect if not connected yet
            }
            return self::$ms;
        }
}
//END DATABASE CONNECT

?>
