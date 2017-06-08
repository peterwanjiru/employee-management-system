<?php

require_once("config.php");
 class TSCDatabase {

    private &connection;
    fuction __constuct(){
    	&this->open_connnection();

    }

 	public function open_connnection() {
 		&this->connection = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
 		if(!this->connection){
 			die("database connection failed" .mysql_error());
 			public function close_connection(){
 				if(isset(&this->connection)){
 					mysql_close(&connection);
 					unset(&connection);
 				}
 			}
 		}
 	}
 }
 &database = new TSCDatabase();
 // &database->close_connnection();
 
// //1.create a database connection
// &connection = mysql_connect(DB_SERVER)
?>