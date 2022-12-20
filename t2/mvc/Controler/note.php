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

    /*Insert notes*/
    public function insert()
    {
        $this->page_title = 'Insertar Nota';
        $this->view = 'insert_notes';
    }

    public function guardar()
    {
        $this->noteObt->insertNote($_POST['titl e'], $_POST['content']);
        return $this->list();
    }



    // Confirmación de borrado.
    public function confirmDelete()
    {
        $this->view = 'delete_notes';
        $this->page_title = "¿Seguro que quiere eliminar esta nota?";
        return $this->noteObt->getNoteById($_GET['id']); // Devuelve una nota, con el id pasado por url.
    }

    // Borrar una nota.
    public function delete()
    {
        $this->noteObt->deleteNote($_GET['id']); // Elimina la nota.
        return $this->list(); // Vuelve a la lista de notas.
    }


    // vista de editar.
    public function update()
    {
        $this->page_title = 'Actualizar Nota';
        $this->view = 'edit_notes';
        return $this->noteObt->getNoteById($_GET['id']); // Devuelve una nota, con el id pasado por url.

    }
    /* confirmacion vista editar */
    public function confirmUpdate()
    {
        $this->noteObt->updateNote($_GET['id'], $_POST['title'], $_POST['content']);
        return $this->list();
    }
}
