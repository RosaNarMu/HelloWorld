<?php
class Login
{
    private $conn, $result;
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
        /* var_dump($this->conn); */
        if ($this->conn->connect_error) die("Fatal Error");
        /*  echo 'successfully connected!'; */
    }

    function setQuery($query)
    {
        $this->result = $this->conn->query($query);
        /*  var_dump($this->result); */
        if (!$this->result) {
            die('Fatal error');
        }
    }

    function generateRows(...$args)
    {
        $rows = $this->result->num_rows;
        for ($j = 0; $j < $rows; ++$j) {
            $row = $this->result->fetch_array(MYSQLI_ASSOC);
            /* $counter = 0; */

            foreach ($args as $value) {
                /* if ($counter++ == 0) {
                    echo '<th scope="row">' .
                        htmlspecialchars($value) .
                        '</th>';
                } else { */
                echo '<td>' .
                    htmlspecialchars($row[$value]) .
                    '</td>';

                /*  } */
            }
            echo '</tr>';
            echo '<tr>';
        }
        $this->result->close();
        $this->conn->close();
    }

    function getHeaders(...$param)
    {
        foreach ($param as $value) {

            echo '<th scope="row">' . $value . '</th>';
        }
    }
}
//$firstLogin = new Login("localhost", "root", "1234", "cities");
