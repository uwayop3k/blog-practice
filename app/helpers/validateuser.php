<?php

function validateuser($user){

    $errors=array();

    if (empty($user['username'])){
        array_push($errors,'username is required');
    }

    if (empty($user['email'])){
        array_push($errors,'email is required');
    }

    if (empty($user['password'])){
        array_push($errors,'password is required');
    }

    // if (empty($user['passwordConf'])){
    //     array_push($errors,'password is required');
    // }

    if ($user['passwordConf']!==$user['password']){
        array_push($errors,'password do not match');
    }

    // $existinguser=selectOne('users',['email'=>$user['email']]);
    // if ($existinguser){
    //     array_push($errors,'email already used');
    // }

    $existinguser=selectOne('users',['email'=>$user['email']]);
    if ($existinguser){
        if (isset($_POST['update-user']) && $existinguser['id'] != $user['id']) {
            array_push($errors,'email already used');
        }

        if (isset($_POST['create-admin'])) {
            array_push($errors,'email already used');
        }
        
        if (isset($_POST['register-btn'])) {
            array_push($errors,'email already used');
        }
    }

    return $errors;
}


function validatelogin($user){

    $errors=array();

    if (empty($user['username'])){
        array_push($errors,'username is required');
    }


    if (empty($user['password'])){
        array_push($errors,'password is required');
    }


    // $existinguser=selectOne('users',['email'=>$user['email']]);
    // if (isset($existinguser)){
    //     array_push($errors,'email already used');
    // }

    return $errors;
}