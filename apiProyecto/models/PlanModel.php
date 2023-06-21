<?php
class PlanModel
{
    public $enlace;
    public function __construct()
    {
        $this->enlace=new MySqlConnect();
    }
    //Nombres de métodos representativos
    /*Listar todas los planes*/
    public function all(){
        try {
            //Consulta sql
            $vSql="SELECT * FROM gimnasio.plan order by nombre desc;";
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