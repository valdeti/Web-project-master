<?php
include_once('test.php');

class MenaxhoBDH extends lidhDB02
{

    public function krijoTabelen($sql)
    {
        try {
            $conn = $this->getConnectio();
            $conn->exec($sql);
            echo "Tabela eshte krijuar me SUKSES: <br/>";
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;
    }
}

$table = "CREATE TABLE `Lenda` (
      `ID_L` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
      `Emertimi` VARCHAR(30) NOT NULL,
      `ECTS` VARCHAR(30) NOT NULL
       )";

$newTable = new MenaxhoBDH("localhost", "Studenti01", "root", "");
$newTable->krijoTabelen($table);
