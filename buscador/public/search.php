<?php 
    session_start();
    $search = filter_input(INPUT_POST, 'search', FILTER_SANITIZE_SPECIAL_CHARS);

    if(empty($search)){
        $_SESSION['Warning'] = 'Você não digitou nada';
        header('Location: ../search_index.php');
        exit;

    }

    else {
        unset($_SESSION['Warning']);
        $_SESSION['Search'] = $search;
        header('Location: ./result.php');
    }

?>