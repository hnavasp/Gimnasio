<?php
class PlanUsuariosModel
{
    public $enlace;
    public function __construct()
    {
        $this->enlace=new MySqlConnect();
    }
    //Nombres de métodos representativos
    /*Listar todas los planes para USUARIOS*/
    public function allUsuario(){
        try {
            //Consulta sql
            $vSql="SELECT p.nombre, p.precio FROM plan p order by nombre desc;";
            //Ejecutar la consulta sql
            $vResultado=$this->enlace->ExecuteSQL($vSql);
            //Retornar la respuesta
            return $vResultado;
           // $vResultado[1]->title;

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }


}