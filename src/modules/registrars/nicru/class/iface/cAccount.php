<?php
/*
 * cAccount.php - Класс cAccount
 * Release Date: 26/05/2011                                              *
 * Version 1.0 
 * Author: Alexander Kostetsky
 * Email: finster.seele@gmail.com       
 */
include_once("cNicRequests.php");
class cAccount extends cNicRequests {
	const sFeed = "AccountFeed";
	function __construct() {
		$this->_params["request"]="account";
		parent::__construct();
	}
	public function sGetFeed(){
		return self::sFeed;
	}
	public function Get() {
		$this->_params["operation"]="get";
	}
	function __call($m,$aParam){
		echo __CLASS__."->".$m."(".print_r($aParam,true).") not yet!\n";
	}
    public function getQueryData()
    {
    	$aParam = array();
		$aParam = array_merge($aParam, $this->getQueryString());
        return $aParam;
    }
}

?>