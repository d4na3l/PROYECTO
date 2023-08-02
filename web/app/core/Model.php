<?php

trait Model
{
    use Database;

    protected $order = 'id';

    function read()
    {
        $query = 'SELECT * FROM  "' . $this->table . '" ORDER BY "' . $this->order . '"';
        return $this->query($query);
    }

    public function where($data, $data_not = [])
    {
        $keys = array_keys($data);
        $keys_not = array_keys($data_not);
        $query = 'SELECT * FROM "' . $this->table . '" WHERE ';

        foreach ($keys as $key) {
            $query .= $key . ' = :' . $key . ' AND ';
        };
        foreach ($keys_not as $key) {
            $query .= $key . ' != :' . $key . ' AND ';
        };

        $query = trim($query, ' AND ');
        $data = array_merge($data, $data_not);
        return $this->query($query, $data);
    }

    public function first($data, $data_not = [])
    {
        $keys = array_keys($data);
        $keys_not = array_keys($data_not);
        $query = 'SELECT * FROM "' . $this->table . '" WHERE ';

        foreach ($keys as $key) {
            $query .= $key . ' = :' . $key . ' AND ';
        };
        foreach ($keys_not as $key) {
            $query .= $key . ' != :' . $key . ' AND ';
        };

        $query = trim($query, ' AND ');

        $data = array_merge($data, $data_not);

        $result = $this->query($query, $data);
        if ($result)
            return $result[0];
        return false;
    }

    public function insert($data)
    {
        if (!empty($this->allowedColums)) {
            foreach ($data as $key => $value) {
                if (!in_array($key, $this->allowedColums)) {
                    unset($data[$key]);
                }
            }
            if (empty($data)) {
                return false;
            }
        }
        $keys = array_keys($data);

        $query = 'INSERT INTO "' . $this->table . '" (' . implode(',', $keys) . ') VALUES (:' . implode(',:', $keys) . ')';
        $this->query($query, $data);
        return false;
    }

    public function update($id, $data, $id_column = 'id')
    {
        if (!empty($this->allowedColums)) {
            foreach ($data as $key => $value) {
                if (!in_array($key, $this->allowedColums)) {
                    unset($data[$key]);
                }
            }
            if (empty($data)) {
                return false;
            }
        }

        $keys = array_keys($data);
        $query = 'UPDATE "' . $this->table . '" SET ';

        foreach ($keys as $key) {
            $query .= $key . ' = :' . $key . ', ';
        };

        $query = trim($query, ', ');
        $query .= ' WHERE ' . $id_column . ' = :' . $id_column;

        $data[$id_column] = $id;
        $this->query($query, $data);
        return false;
    }
}
