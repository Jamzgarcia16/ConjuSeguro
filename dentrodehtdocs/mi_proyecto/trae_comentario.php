<?php
include '../../config_conjunto/config_conjunto6.php';


if (isset($_POST["id_comentario"])) {
    $sql="SELECT * FROM comentarios WHERE id_comentario=".$_POST["id_comentario"];
    $db = new subase(); # Creamos el objeto $db: instancia de la clase subase
    if ($fila=$db->sub_fila($sql)) {
        $tabla=$db->sub_tuplas($sql);
        echo(json_encode($fila));
    }
}

?>