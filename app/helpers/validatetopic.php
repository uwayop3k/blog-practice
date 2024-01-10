<?php

function validatetopic($topic){

    $errors=array();

    if (empty($topic['name'])){
        array_push($errors,'topic name is required');
    }


    $existingtopic=selectOne('topics',['name'=>$topic['name']]);
    if ($existingtopic){
        array_push($errors,'topic already exist');
    }

    return $errors;
}

function validateedittopic($topic){

    $errors=array();

    if (empty($topic['name'])){
        array_push($errors,'topic name is required');
    }


    // $existingtopic=selectOne('topics',['name'=>$topic['name']]);
    // if ($existingtopic){
    //     array_push($errors,'topic already exist');
    // }

    $existingtopic=selectOne('topics',['name'=>$topic['name']]);
    if ($existingtopic){
        if (isset($_POST['update-topic']) && $existingtopic['id'] != $topic['id']) {
            array_push($errors,'topic with this name already exists');
        }

        if (isset($_POST['add-topic'])) {
            array_push($errors,'topic with this name already exists');
        }  
    }

    return $errors;
}

 