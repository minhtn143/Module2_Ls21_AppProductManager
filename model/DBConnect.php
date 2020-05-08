<?php

namespace model;

use PDO;

class DBConnect
{
    private string $dns;
    private string $user;
    private string $name;

    public function __construct($dns, $user, $name)
    {
        $this->dns = $dns;
        $this->user = $user;
        $this->name = $name;
    }

    public function connect(){
        try {
            $conn = new PDO($this->dns,$this->user,$this->name);
        }
        catch (\PDOException $e){
            return $e->getMessage();
        }
        return $conn;
    }
}