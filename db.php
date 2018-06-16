<?php
$DBServer = 'localhost';
$DBUser   = 'it56160311';
$DBPass   = 'pTVjH2Ub';
$DBName   = 'it56160311';
$conn = new mysqli($DBServer, $DBUser, $DBPass, $DBName); //สร้างตัวแปรเก็บข้อมูลในการเชื่อมต่อ DB
if ($conn->connect_errno) {		// ถ้าตัวแปร เชื่อมต่อไม่ได้
    return $conn->connect_errno;	//คืนค่า error
}
$conn->query("set names utf8");		// ตัวแปรประมวลผล เซตรูปแบบตัวอักษรให้รองรับภาษาไทย
//$sql = '';