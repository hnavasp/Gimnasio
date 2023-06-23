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
            $vSql="SELECT * FROM plan order by nombre desc;";
            //Ejecutar la consulta sql
            $vResultado=$this->enlace->ExecuteSQL($vSql);
            //Retornar la respuesta
            return $vResultado;
           // $vResultado[1]->title;

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function get($id)
    {
        try {
            $vSql = "SELECT * from plan where idplan = $id";
            
            //Ejecutar la consulta sql
            $vResultado = $this->enlace->executeSQL($vSql);
            if(!empty($vResultado)){
                //Obtener objeto
                $vResultado = $vResultado[0];
            }
            //Retornar la respuesta
            return $vResultado;
		} catch ( Exception $e ) {
			die ( $e->getMessage () );
		}
    }

}