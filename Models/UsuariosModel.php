<?php
class UsuariosModel extends Query {
    public function __construct() {
        parent::__construct();
    }
function getusuario()
{    $sql = "SELECT * FROM usuarios";
    $data = $this->select($sql);
    return $data;}   
}
?>