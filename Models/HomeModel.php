<?php
class HomeModel extends Query
{
    public function __construct()
    {
        parent::__construct();
    }

    public function registrar($evento, $name, $fecha, $tiempo, $color)
    {
        $sql = "INSERT INTO eventos (title, name, start, time, color) VALUES (?,?,?,?,?)";
        $array = array($evento, $name, $fecha, $tiempo, $color);
        $data = $this->save($sql, $array);
        if ($data == 1) {
            $msg = 1;
        } else {
            $msg = 0;
        }
        return $msg;
    }

    public function modificar($evento, $name, $fecha, $tiempo, $color, $id)
    {
        $sql = "UPDATE eventos SET title=?, name=?, start=?, time=?, color=? WHERE id=?";
        $array = array($evento, $name, $fecha, $tiempo  , $color, $id);
        $data = $this->save($sql, $array);
        if ($data == 1) {
            $msg = 1;
        } else {
            $msg = 0;
        }
        return $msg;
    }

    public function eliminar($id)
    {
        $sql = "DELETE FROM eventos WHERE id=?";
        $array = array($id);
        $data = $this->save($sql, $array);
        if ($data == 1) {
            $msg = 1;
        } else {
            $msg = 0;
        }
        return $msg;
    }

    public function drop($fecha, $id)
    {
        $sql = "UPDATE eventos SET start=? WHERE id=?";
        $array = array($fecha, $id);
        $data = $this->save($sql, $array);
        if ($data == 1) {
            $msg = 1;
        } else {
            $msg = 0;
        }
        return $msg;
    }

    public function listarEventos()
    {
        $sql = "SELECT * FROM eventos";
        return $this->selectAll($sql);
    }
}
?>
