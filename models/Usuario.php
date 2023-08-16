<?php

namespace Model;

class Usuario extends ActiveRecord{
    protected static $table = 'usuario';
    protected static $columnaDB = ['USU_NOMBRE','USU_CATALOGO','USU_PASSWORD','USU_SITUACION'];
    protected static  $idTable = 'USU_ID';

    public $usu_id;
    public $usu_nombre;
    public $usu_catalogo;
    public $usu_password;
    public $usu_situacion;

    public function __construct($args = [])
    {
        $this->usu_id = $args['usu_id'] ?? null;
        $this->usu_nombre = $args['usu_nombre'] ?? '';
        $this->usu_catalogo = $args['usu_catalogo'] ?? '';
        $this->usu_password = $args['usu_password'] ?? '';
        $this ->usu_situacion = $args['usu_situacion'] ?? '';
    }
}