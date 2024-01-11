<?php
require_once 'config.php';

function obterAlunos(){
    global $dns, $user, $pass;
    $alunos = [];
    try {
        $pdo = new PDO($dns, $user, $pass,
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    $sql = "SELECT matricula, nome, entrada FROM public.alunos";
    $stm = $pdo->prepare($sql);
    $stm->execute();
    $alunos = $stm->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        $alunos = [];
} finally {
    if ($pdo) {
        $pdo = null;
    }
}
    return $alunos;
}

?>