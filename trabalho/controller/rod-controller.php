<?php
     include_once "./model/trabalho_model.php";

     if(isset($_POST['editar'])){
         atualizarCurso(
             $_POST['id'],
             $_POST['email']
         );
         index();
     }else if(isset($_GET['id'])){
         $curso = procurarCurso($_GET['id']);
         include_once("./view/curso/edit.php");  
     }else if(isset($_GET['excluir'])){
         excluirCurso($_GET['excluir']);
         index();
     }else if(isset($_POST['cadastro'])){
         $email = $_POST['email'];
         inserirCurso($email);
         index();
     }else{
         index();
     }
?>