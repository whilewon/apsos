<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 2016/8/7
 * Time: 9:33
 */
/*
$servername='Driver={SQL Server};Server=LocalServer;Database=spa';

# ע�� TJ1CUNSPAMDB01 �����õ� ODBC �����֣� DataAnalysis �����ݿ�����֡�ǰ��Ҫ���� DRIVER={SQL Server} ��

$username = 'sa';

$password = '';



$conn = odbc_connect($servername,$username,$password);

$sql="select user_name from apsos_user";

$rs=odbc_exec($conn,$sql);

while (odbc_fetch_row($rs))

{

    $compname=odbc_result($rs,"user_name");

   // $conname=odbc_result($rs,"ipaddress");

    echo "$compname<br>";

   // echo "$conname<br>";

}

odbc_close($conn);*/

$user = 'wsrz';
$pass = 'wsrz';
$server = 'wsrz';
$database = 'wsrz';

// No changes needed from now on
$connection_string = "DRIVER={SQL Server};SERVER=$server;DATABASE=$database";
$conn = odbc_connect($connection_string,$user,$pass);

if ($conn) {
    echo "Connection established.";
} else{
    die("Connection could not be established.");
}
?>