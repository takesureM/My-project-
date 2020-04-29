<?php

class Test extends Db{

    public function getUser(){
        $sql = "SELECT * FROM posts";
        $stmt = $this->connect()->query($sql);
        while($row = $stmt->fetch());
        echo $row['id']. '<br>';
    }
}