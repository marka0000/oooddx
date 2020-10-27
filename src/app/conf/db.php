<?php

/**
 * Класс конфигурации Базы Данных
 *
 * @author MagicMarka
 * @version 1.0, 25.10.2020
 * @package oooddx
 */
class DB {
	const USER = 'root';
	const PASS = '';
	const HOST = 'localhost';
	const DB = 'mysql';

	public static function connToDB()
	{
		$user = self::USER;
		$pass = self::PASS;
		$host = self::HOST;
		$db = self::DB;

		$conn = new PDO("mysql:dbname=$db;host=$host", $user, $pass);
		return $conn;
	}
}