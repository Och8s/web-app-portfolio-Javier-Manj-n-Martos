<?php
    require("Controller.php");

    $action = $_GET['action'] ?? null;
    $id = $_GET['id'] ?? null;

    if ($action) {
        switch ($action) {
            case 'show':
                if ($id) {
                    loadProjShowView($id);
                }
                break;
            case 'crud':
                
                    loadProjMainView();
                
                    break;
            default:
            
            loadIniciarView();// Cambiar initial  *****
            break;
        }
    } 
    // elseif (isset($_POST['action'])) {
    //     $action = $_POST['action'];
    //     $titol = $_POST['titol'] ?? null;
    //     $tipus = $_POST['tipus'] ?? null;
    //     $petitText = $_POST['petitText'] ?? null;
    //     $granText = $_POST['granText'] ?? null;
    //     $foto = $_POST['foto'] ?? null;
    //     $eines = $_POST['eines'] ?? null;
    //     $data_creacio = $_POST['data_creacio'] ?? null; // Nueva variable para la fecha de creación
    //     $id = $_POST['id'] ?? null;

    //     switch ($action) {
    //         case 'add':
    //             if ($titol && $tipus && $petitText && $granText && $foto && $eines && $data_creacio) { // Incluyendo data_creacio
    //                 $msg = addProj($titol, $tipus, $petitText, $granText, $foto, $eines, $data_creacio);
    //             }
    //             loadProjMainView($msg);
    //             break;
    //         case 'up':
    //             if ($id && $titol && $tipus && $petitText && $granText && $foto && $eines && $data_creacio) { // Incluyendo data_creacio
    //                 upProj($id, $titol, $tipus, $petitText, $granText, $foto, $eines, $data_creacio);
    //             }
    //             loadProjMainView();
    //             break;
    //         default:
    //             loadProjMainView();
    //             break;
    //     }
    // }
     else {
        loadIniciarView();// Cambiar initial  *****
    }
?>
