<?php 
/*
** 12 February 2013
**
** The author disclaims copyright to this source code.  In place of
** a legal notice, here is a quote:
**
** If you’re willing to restrict the flexibility of your approach, 
** you can almost always do something better.
** - John Carmack
**
*************************************************************************/

if(!defined('TSAMA'))exit;

require_once('database.table.column.inc.php');

class TsamaDatabaseTable extends TsamaObject{

	private $m_columns;
	private $m_joins;

	public $alias = '';
	public $name = '';

	public function __construct($name,$alias='',$columns = null){

		parent::__construct();

		$this->name = $name;
		$this->alias = $alias;

		if($columns == null){
			//get all current column info
		}else{
			//get only certain column info
		}
	}

	public function GetColumns(){
		//Show Columns from table
	}

	public function Join($table,$on,$type){

	}

	public function Union($table){

	}

}

class TsamaDatabaseTables extends TsamaCollection{

	public function __construct(){

		parent::__construct();
	}
}
?>
