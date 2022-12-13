<?php
require_once 'model/note.php';

class noteController
{
    public $page_title;
    public $view;
    public $noteObt;

    public function __construct()
    {
        $this->view = 'list_notes';
        $this->page_title = '';
        $this->noteObt = new NoteTable();
    }


    /*List all notes*/
    public function list()
    {
        $this->page_title = 'Listado de Notas';
        return $this->noteObt->getNotes();
    }
    public function insert()
    {
        $this->page_title = 'Insertar Nota';
        $this->view = 'insert_notes';
    }

    public function guardar()
    {
        $this->view = 'list_notes';
    }
}


/*hola*/
