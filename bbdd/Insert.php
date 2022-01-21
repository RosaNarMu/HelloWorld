<?php
class Insert
{
    private $conn, $stmt;
    function __construct(
        $h,
        $u,
        $p,
        $d
    ) {
        $this->conn = new mysqli(
            $h,
            $u,
            $p,
            $d
        );
        if ($this->conn->connect_error) {
            die("Fatal Error");
        }
        //echo 'successfully connected!';
    }
    function insertData($n, $c, $d, $p)
    {
        $this->stmt = $this->conn->prepare('INSERT INTO CITY (name, countrycode, district, population)
VALUES(?,?,?,?)');
        $this->stmt->bind_param(
            'sssi',
            $name,
            $countrycode,
            $district,
            $population
        );
        $name = $n;
        $countrycode = $c;
        $district = $d;
        $population = $p;
        $this->stmt->execute();
        printf(
            "%d Row inserted.\n",
            $this->stmt->affected_rows
        );
        $this->stmt->close();
        $this->conn->close();
    }

    function updateData($i, $ni, $p)
    {
        if (!($this->stmt = $this->conn->prepare("UPDATE CITY SET id=?,
population=? WHERE id=?"))) {
            echo "Falló la
preparación: (" . $this->conn->errno
                . ") " . $this->conn->error;
        }
        $id = $i;
        $population = $p;
        $newId = $ni;
        if (!$this->stmt->bind_param('iii', $newId, $population, $id)) {
            echo "Falló la vinculación
    de parámetros: (" . $this->stmt->errno
                . ") " . $this->stmt->error;
        }
        $this->stmt->execute();
        printf(
            "%d Row updated.\n",
            $this->stmt->affected_rows
        );
    }
    function deleteData($i)
    {
        if (!($this->stmt = $this->conn->prepare("DELETE FROM CITY WHERE id=?"))) {
            echo "Falló la preparación: (" . $this->conn->errno
                . ") " . $this->conn->error;
        }
        $id = $i;
        if (!$this->stmt->bind_param('i', $id)) {
            echo "Falló la vinculación de
    parámetros: (" . $this->stmt->errno .
                ") " . $this->stmt->error;
        }
        if (!$this->stmt->execute()) {
            echo "Falló la ejecución:
    (" . $this->stmt->errno . ") " .
                $this->stmt->error;
        }
        printf(
            "%d Row deleted.\n",
            $this->stmt->affected_rows
        );
    }
}

$insert = new Insert(
    'localhost',
    'root',
    '1234',
    'cities'
);
$insert->insertData('Londres', 'LND', 'Camden Town', 270029);
//$insert->updateData(4, 5, 128000);
//$insert->deleteData(1204);
