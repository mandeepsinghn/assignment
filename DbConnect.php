<?php
class DbConnect{
	private $host='localhost';
	private $dbname='assignment';
	private $user='root';
	private $pass='123';
	private $pdoObj;
	function __construct()
	{
		$this->pdoObj=new PDO("mysql:dbname=$this->dbname;host=$this->host",$this->user,$this->pass);
	}
	function fetchAll($sql,$perms=array())
	{
		$sth = $this->pdoObj->prepare($sql);
		$sth->execute($perms);
		return $sth->fetchAll(PDO::FETCH_ASSOC);
	}
	function insertRow($sql,$perms=array())
	{
		$sth = $this->pdoObj->prepare($sql);
		$sth->execute($perms);
		return $this->pdoObj->lastInsertId();
	}

}
