<?php
//class Plan
class plan
{
    //Listar en el API
    public function index()
    {
        //Obtener el listado del Modelo
        $planModel = new PlanModel();
        $response = $planModel->all();
        //Si hay respuesta
        if (isset($response) && !empty($response)) {
            //Armar el json
            $json = array(
                'status' => 200,
                'results' => $response
            );
        } else {
            $json = array(
                'status' => 400,
                'results' => "No hay registros"
            );
        }
        echo json_encode(
            $json,
            http_response_code($json["status"])
        );
    }
    public function get($id){
        //Instancia del modelo
         $plan=new PlanModel();
         //Acción del modelo a ejecutar
         $response=$plan->get($id);
         //Verificar respuesta
         if(isset($response) && !empty($response)){
             //Armar el JSON respuesta satisfactoria
             $json=array(
                 'status'=>200,
                 'results'=>$response
             );
         }else{
             //JSON respuesta negativa
             $json=array(
                 'status'=>400,
                 'results'=>"No existe el recurso solicitado"
             );
         }
         //Escribir respuesta JSON con código de estado HTTP
         echo json_encode($json,
                 http_response_code($json["status"])
             );
     }
    
}
