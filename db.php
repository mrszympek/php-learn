<?php

class db {

    public function connect() {
        $this->connection = mysqli_connect('localhost','root', 'root', 'world');
        echo "dziala";
    }

    public function query($query) {
        $result = mysqli_query($this->connection, $query);
        return $result;
    }


}







?>