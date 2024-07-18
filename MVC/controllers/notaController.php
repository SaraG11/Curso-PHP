<?php

class notaController{

    public function listar(){
        // modelo
        require_once 'models/nota.php';

        // logica de la accion del controlador
        $nota = new nota();
        $notas = $nota->conseguirDatos('notas');

        // vista
        require_once 'views/notas/viewNotas.php';

    }

    public function crear(){
        // modelo
        require_once 'models/nota.php';

        $nota = new nota();
        $nota->setIdUser(1);
        $nota->setTitulo('Nota desde PHP MVC');
        $nota->setDescripcion('DESCRIPCION');

        $nota->guardarNota();

        header("Location: index.php?controlador=nota&action=listar");

    }
    public function borrar(){
        
    }
}