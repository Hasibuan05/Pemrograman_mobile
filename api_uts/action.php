<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization');
header('Content-Type: application/json; charset=UTF-8');
include "db_config.php";
$postjson = json_decode(file_get_contents('php://input'), true);
$aksi=strip_tags($postjson['aksi']);
$data = array();
switch($aksi)
{
    case "add_register":
    $Kelurahan = filter_var($postjson['Kelurahan'], FILTER_SANITIZE_STRING, FILTER_FLAG_ENCODE_LOW);
    $Tps = filter_var($postjson['Tps'], FILTER_SANITIZE_STRING, FILTER_FLAG_ENCODE_LOW);
    $Nama = filter_var($postjson['Nama'], FILTER_SANITIZE_STRING, FILTER_FLAG_ENCODE_LOW);
    $Nik = filter_var($postjson['Nik'], FILTER_SANITIZE_STRING, FILTER_FLAG_ENCODE_LOW);
    $Tanggal_lahir = filter_var($postjson['Tanggal_lahir'], FILTER_SANITIZE_STRING, FILTER_FLAG_ENCODE_LOW);
    $Usia = filter_var($postjson['Usia'], FILTER_SANITIZE_STRING, FILTER_FLAG_ENCODE_LOW);
    $Jenis_kelamin = filter_var($postjson['Jenis_kelamin'], FILTER_SANITIZE_STRING, FILTER_FLAG_ENCODE_LOW);
    $Referensi = filter_var($postjson['Referensi'], FILTER_SANITIZE_STRING, FILTER_FLAG_ENCODE_LOW);

    try {
    $sql = "INSERT INTO `pemilu`
    (Kelurahan,Tps,Nama,Nik,Tanggal_lahir,Usia,Jenis_kelamin,Referensi) VALUES
    (:Kelurahan, :Tps, :Nama, :Nik, :Tanggal_lahir, :Usia, :Jenis_kelamin, :Referensi)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':Kelurahan', $Kelurahan, PDO::PARAM_STR);
    $stmt->bindParam(':Tps', $Tps, PDO::PARAM_STR);
    $stmt->bindParam(':Nama', $Nama, PDO::PARAM_STR);
    $stmt->bindParam(':Nik', $Nik, PDO::PARAM_STR);
    $stmt->bindParam(':Tanggal_lahir', $Tanggal_lahir, PDO::PARAM_STR);
    $stmt->bindParam(':Usia', $Usia, PDO::PARAM_STR);
    $stmt->bindParam(':Jenis_kelamin', $Jenis_kelamin, PDO::PARAM_STR);
    $stmt->bindParam(':Referensi', $Referensi, PDO::PARAM_STR);
    $stmt->execute();
    if($sql) $result = json_encode(array('success' =>true));
    
    else $result = json_encode(array('success' => false, 'msg'=>'error , please try again'));
    
    echo $result;
    }
    catch(PDOException $e)
    {
    echo $e->getMessage();
    }
    break;
    case "getdata":
    $limit = filter_var($postjson['limit'], FILTER_SANITIZE_STRING, FILTER_FLAG_ENCODE_LOW);
    $start = filter_var($postjson['start'], FILTER_SANITIZE_STRING, FILTER_FLAG_ENCODE_LOW);
    try {
    $sql = "SELECT * FROM `pemilu` ORDER BY `ID` DESC LIMIT :start,:limit";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':start', $start, PDO::PARAM_STR);
    $stmt->bindParam(':limit', $limit, PDO::PARAM_STR);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach($rows as $row){
    $data[] = array(
    'ID' => $row['ID'],
    'Kelurahan' => $row['Kelurahan'],
    'Tps' => $row['Tps'],
    'Nama' => $row['Nama'],
    'Nik' => $row['Nik'],
    'Tanggal_lahir' => $row['Tanggal_lahir'],
    'Usia' => $row['Usia'],
    'Jenis_kelamin' => $row['Jenis_kelamin'],
    'Referensi' => $row['Referensi']
    );
    }
    if($stmt) $result = json_encode(array('success'=>true, 'result'=>$data));
    else $result = json_encode(array('success'=>false));
    
    echo $result;
    } 
    catch(PDOException $e)
    {
    echo $e->getMessage();
    }
    
    break;
}   









