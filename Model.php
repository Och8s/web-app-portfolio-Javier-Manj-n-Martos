<?php
    function modConnectA()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "portfolio";

        try {
            $GLOBALS['conn'] = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $GLOBALS['conn']->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return ["Connection" => "Success"];
        }
        catch(PDOException $e) {
            return ["Connection failed" => $e->getMessage()];
        }
    }
    

    function modQueryA($id = null)
    {
        modConnectA();

        try {
            if ($id !== null) {
                $stmt = $GLOBALS['conn']->prepare("SELECT * FROM projectes WHERE id = :id");
                $stmt->execute(['id' => $id]);
            } else {
                $stmt = $GLOBALS['conn']->query("SELECT * FROM projectes ORDER BY id ASC");
            }
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e) {
            return ["Error" => $e->getMessage()];
        }
    }

    // function modAddA($titol, $tipus, $petitText, $granText, $foto, $eines, $data_creacio)
    // {
    //     modConnectA();

    //     try {
    //         $sql = "INSERT INTO projectes (titol, tipus, petitText, granText, foto, eines, data_creacio) VALUES (:titol, :tipus, :petitText, :granText, :foto, :eines, :data_creacio)";
    //         $stmt = $GLOBALS['conn']->prepare($sql);
    //         $stmt->execute([
    //             'titol' => $titol,
    //             'tipus' => $tipus,
    //             'petitText' => $petitText,
    //             'granText' => $granText,
    //             'foto' => $foto,
    //             'eines' => $eines,
    //             'data_creacio' => $data_creacio // Incluyendo data_creacio
    //         ]);
    //         return ["Success" => "Projecte afegit correctament"];
    //     }
    //     catch(PDOException $e) {
    //         return ["Error" => $e->getMessage()];
    //     }
    // }

    // function modUpdateA($id, $titol, $tipus, $petitText, $granText, $foto, $eines, $data_creacio)
    // {
    //     modConnectA();

    //     try {
    //         $sql = "UPDATE projectes SET titol = :titol, tipus = :tipus, petitText = :petitText, granText = :granText, foto = :foto, eines = :eines, data_creacio = :data_creacio WHERE id = :id";
    //         $stmt = $GLOBALS['conn']->prepare($sql);
    //         $stmt->execute([
    //             'id' => $id,
    //             'titol' => $titol,
    //             'tipus' => $tipus,
    //             'petitText' => $petitText,
    //             'granText' => $granText,
    //             'foto' => $foto,
    //             'eines' => $eines,
    //             'data_creacio' => $data_creacio // Incluyendo data_creacio
    //         ]);
    //         return ["Success" => "Projecte modificat correctament"];
    //     }
    //     catch(PDOException $e) {
    //         return ["Error" => $e->getMessage()];
    //     }
    // }

    // function modDeleteA($id)
    // {
    //     modConnectA();

    //     try {
    //         $sql = "DELETE FROM projectes WHERE id = :id";
    //         $stmt = $GLOBALS['conn']->prepare($sql);
    //         $stmt->execute(['id' => $id]);
    //         return ["Success" => "Projecte eliminat correctament"];
    //     }
    //     catch(PDOException $e) {
    //         return ["Error" => $e->getMessage()]; 
    //     }
    // }
?>
