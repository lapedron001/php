<?php

interface Crud {
    public function create($data);
    public function read();
    public function update();
    public function delete();
}

class Noticias implements Crud{
    public function create($data){
        //logicaoara criar a noticia
    }
    public function read(){
        //logica para ler a noticia
    }
    public function update(){
        //logica para atualizar uma noticia
    }
    public function delete(){
        //logica para deletar uma noticia
    }
}