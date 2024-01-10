<?php

require(ROOT_PATH ."/app/database/db.php");
require(ROOT_PATH ."/app/helpers/middleware.php");
require(ROOT_PATH ."/app/helpers/validatetopic.php");


$table='topics';

$errors=array();
$id='';
$name='';
$description='';

$topics=selectAll($table);

if (isset($_POST['add-topic'])) {
    adminOnly();
    $errors=validatetopic($_POST);

    if (count($errors)===0){
        unset($_POST['add-topic']);
        $topic_id=create($table,$_POST);
        $_SESSION['message']='Topic created successively';
        $_SESSION['type']='success';
        header('location:' . BASE_URL .'/admin/topics/index.php');
        exit();
    } else{
        $name=$_POST['name'];
        $description=$_POST['description'];
    }
    
}

if (isset($_GET['id'])){
    $id=$_GET['id'];
    $topic = selectOne($table, ['id'=> $id]);
    $id=$topic['id'];
    $name=$topic['name'];
    $description=$topic['description'];
}

if (isset($_GET['del_id'])){
    adminOnly();
    $id=$_GET['del_id'];
    $count=delete($table,$id);
    $_SESSION['message']='Topic deleted successively';
    $_SESSION['type']='success';
    header('location:' . BASE_URL .'/admin/topics/index.php');
    exit();
}

if (isset($_POST['update-topic'])) {
    adminOnly();
    $errors=validateedittopic($_POST);

    if (count($errors)===0){
        $id= $_POST['id'];
        unset($_POST['id'],$_POST['update-topic']);
        $topic_id=update($table,$id,$_POST);
        $_SESSION['message']='Topic updated successively';
        $_SESSION['type']='success';
        header('location:' . BASE_URL .'/admin/topics/index.php');
        exit();
    } else{
        $id=$_POST['id'];
        $name=$_POST['name'];
        $description=$_POST['description'];
    }
    
}

