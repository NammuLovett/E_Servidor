<?php

class Note
{
    public $id;
    public $titulo;
    public $contenido;

    public function __construct($id, $titulo, $contenido)
    {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->contenido = $contenido;
    }
}


class NoteTable
{
    private $table = 'note';
    private $conection;
    private array $notas = array();
    public function __construct()
    {
    }

    /*Set Conection*/
    public function getConection()
    {
        $dbObj = new db_connect();
        $this->conection = $dbObj->conection;
    }

    /*Get all notes*/
    public function getNotes()
    {
        $this->getConection();
        $sql = "SELECT * FROM " . $this->table;
        $result = $this->conection->query($sql);

        if ($result->num_rows > 0) {
            $i = 0;
            while ($row = $result->fetch_assoc()) {
                $this->notas[$i] = new Note($row['id'], $row['title'], $row['content']);
                $i++;
            }
        }
        return $this->notas;
    }

    // Accede a la base de datos para devolver la nota que cuyo id sea el que se le pase como parámetro.
    public function getNoteById($id)
    {
        $this->getConection(); // Inicializa la conexión.
        $sql = "SELECT * FROM " . $this->table . " WHERE id=$id"; // Consulta.
        $result = $this->conection->query($sql); // Ejecuta la consulta.
        if ($result->num_rows > 0) { // Si devuelve más de 0 filas.
            $row = $result->fetch_assoc(); // Guarda el resultado.
            $this->conection->close(); // Cierra la conexión.
            return new Note($row['id'], $row['title'], $row['content']); // Devuelve un objeto nota con los datos de la BBDD.
        } else { // Si no devuelve más de 0 filas.
            $this->conection->close(); // Cierra la conexión.
            return false; // Devuelve false.
        }
    }


    // Método para inserta una nota.
    public function insertNote(string $title, string $content)
    {

        $this->getConection(); // Inicializa la conexión.
        $sql = "INSERT INTO " . $this->table . " (title, content) VALUES ('$title', '$content')"; // Consulta.

        if ($this->conection->query($sql) === TRUE) { // Si se inserta correctamente.

            $id = $this->conection->insert_id; // Recoge el último id generado en la tabla.
            $this->conection->close(); // Cierra la conexión.
            return new Note($id, $title, $content); // Devuelve un objeto nota con el último id generado en la bbdd y los atributos dados por el usuario.
        } else { // Si no se inserta.
            $this->conection->close(); // Cierra la conexión.
            return false; // Devuelve false.
        }
    }

    // Método para borrar una nota.
    public function deleteNote($id)
    {
        $this->getConection(); //Inicializa la conexión.
        $sql = "DELETE FROM " . $this->table . " WHERE id=$id"; // Consulta.
        if ($this->conection->query($sql) === TRUE) { // Si se borra correctamente.
            $this->conection->close(); // Cierra la conexión.
            return true; // Devuelve true.
        } else { // Si no.
            $this->conection->close(); // Cierra la conexión.
            return false; // Devuelve false.
        }
    }

    public function updateNote(int $id, string $title, string $content)
    {
        $this->getConection(); // Inicializa la conexión.
        $sql = "UPDATE " . $this->table . " SET title='$title', content='$content' WHERE id=$id"; // Consulta.
        if ($this->conection->query($sql) === TRUE) { // Si se actualiza correctamente.
            $this->conection->close(); // Cierra la conexión.
            return true; // Devuelve true.
        } else { // Si no.
            $this->conection->close(); // Cierra la conexión.
            return false; // Devuelve false.
        }
    }
}
