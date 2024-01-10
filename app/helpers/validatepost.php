<?php


function validatepost($post){

    $errors=array();

    if (empty($post['title'])){
        array_push($errors,'title is required');
    }

    if (empty($post['body'])){
        array_push($errors,'body is required');
    }

    if (empty($post['topic_id'])){
        array_push($errors,'topic is required');
    }


    $existingpost=selectOne('posts',['title'=>$post['title']]);
    if ($existingpost){
        if (isset($_POST['update-post']) && $existingpost['id'] != $post['id']) {
            array_push($errors,'post with this title already exists');
        }

        if (isset($_POST['add-post'])) {
            array_push($errors,'post with this title already exists');
        }
        
    }

    return $errors;
}


