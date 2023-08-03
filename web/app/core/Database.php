<?php
// trait Database, encargada de conectar con la base de datos.
trait Database
{
    // Metodo para conectar con la base de datos y comprobar que este funcionando.
    private function connect()
    {
        $string = 'pgsql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_NAME;

        try {
            $con = new PDO($string, DB_USER, DB_PSW);
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $con;
        } catch (Exception $e) {
            echo 'Failure to connect to db: ' . $e->getMessage();
        }
    }

    // Metodo para Conectar con la base de datos destructurar el query, hacer la peticion a la base de datos y regresar los resultados en base al query.
    public function query($query, $data = [])
    {
        $con = $this->connect();
        $stm = $con->prepare($query);

        $check = $stm->execute($data);
        if ($check) {
            $result = $stm->fetchAll(PDO::FETCH_OBJ);
            if (is_array($result) && count($result)) {
                return $result;
            }
        }

        return false;
    }

}
