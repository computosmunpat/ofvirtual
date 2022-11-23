<?php	
namespace Backend\Conectores;
use \Backend\SlimBackend;

/*
use Backend\Modelos\Agua\Cuentas;
use Backend\Modelos\Agua\CuentasMails;
use Backend\Modelos\Agua\DireccionesMails;
use Backend\Modelos\Agua\Deudas;
use Backend\Modelos\Agua\CuotasConvenio;
use Backend\Modelos\Agua\DeudaTmp;
use Backend\Modelos\Agua\FacturaTmp;
use Backend\Modelos\Agua\Factura;
use Backend\Modelos\Agua\ConfiguracionSistema2;
use Backend\Modelos\ReportePDF;
*/
use Backend\Modelos\Munpat\Inmuebles;

class backend_munpat implements backend_servicio
{
    public function get_cuentas($filtro){ 
        return [];
    }

    public function get_cuentas_x_objetos($objetos){

        return [];
    }

    public function consulta_deuda($parametros){
        
        return [];
    }    

    public function resumen_pago($id_comprobantes, $fecha_actualizacion){
      return [];
    }
    
    public function get_reporte_factura($parametros){
       // return $this->reporteFacturas($parametros);
       return [];
    }

    private function get_datos_impresion($seleccion){
        return array("resultado"=>'NO_IMPLEMENTADO');
    }


    public function get_declaraciones_juradas($filtro, $order_by){
        return array("resultado"=>'NO_IMPLEMENTADO');
    }

    public function get_actividades($filtro){
        return array("resultado"=>'NO_IMPLEMENTADO');
    }

    public function valor_configuraciones($campo){
        return array("resultado"=>'NO_IMPLEMENTADO');
    }

    public function get_actividad_principal_comercio_x_id($id_comercio){
        return array("resultado"=>'NO_IMPLEMENTADO');
    }

    public function get_tipos_ddjj($filtro){
        return array("resultado"=>'NO_IMPLEMENTADO');
    }

    public function retornar_impuesto_tipo_ddjj($id_comercio, $tipo_declaracion){
        return array("resultado"=>'NO_IMPLEMENTADO');
    }

    public function retornar_fecha_calculo($cod_impuesto, $anio, $cuota){
        return array("resultado"=>'NO_IMPLEMENTADO');
    }

    public function retornar_ddjj_alicuota($id_comercio, $cod_actividad, $valor, $fecha_calculo){
        return array("resultado"=>'NO_IMPLEMENTADO');
    }

    public function retornar_ddjj_minimo($id_comercio, $cod_actividad, $valor, $fecha_calculo){
        return array("resultado"=>'NO_IMPLEMENTADO');
    }

    public function retornar_ddjj_en_carga($id_comercio, $cod_actividad, $tipo_declaracion, $anio, $cuota){
        return array("resultado"=>'NO_IMPLEMENTADO');
    }

    public function retornar_ddjj_pend_pago($id_comercio, $cod_actividad, $tipo_declaracion, $anio_raw, $cuota_raw){
        return array("resultado"=>'NO_IMPLEMENTADO');
    }

    public function retornar_ddjj_def_anterior($id_comercio, $cod_actividad, $tipo_declaracion, $anio, $cuota){
        return array("resultado"=>'NO_IMPLEMENTADO');
    }

    public function retornar_ddjj_importe($nro_declaracion){
        return array("resultado"=>'NO_IMPLEMENTADO');
    }

    public function retornar_ddjj_ant_anterior($id_comercio, $cod_actividad, $tipo_declaracion, $anio, $cuota){
        return array("resultado"=>'NO_IMPLEMENTADO');
    }

    public function retornar_ddjj_fijo($id_comercio, $cod_actividad, $valor, $fecha_calculo){
        return array("resultado"=>'NO_IMPLEMENTADO');
    }

    public function calcular_ddjj_importe($id_comercio, $cod_actividad, $valor, $alicuota, $minimo, $fecha_calculo){
        return array("resultado"=>'NO_IMPLEMENTADO');
    }

    public function anular_ddjj($nro_declaracion){
        return array("resultado"=>'NO_IMPLEMENTADO');
    }

    public function buscar_cuenta($filtro){
        return array("resultado"=>'NO_IMPLEMENTADO'); 
    }

    public function desasociar_cuenta($filtro){ 
        

        return 1;
    }


    public function crear_operacion_pago($parametros){
     return [];
    }

    public function confirmar_operacion_pago($id_operacion){
     return [];
    }

    public function anular_operacion_pago($id_operacion){
     return [];
    }


    public function get_facturas($filtro){
       
        return [];
    }

    public function alta_debito_automatico($parametros)
        { return array("resultado"=>'NO_IMPLEMENTADO');}

    public function baja_debito_automatico($parametros)
        { return array("resultado"=>'NO_IMPLEMENTADO');}

    public function alta_factura_electronica($parametros)
        { return array("resultado"=>'NO_IMPLEMENTADO');}

    public function baja_factura_electronica($parametros)
        { return array("resultado"=>'NO_IMPLEMENTADO');}

    public function get_consulta_dinamica($reporte,$parametros){


        return [];
    }

    public function proveedores_facturas($parametros)
        { return array("resultado"=>'NO_IMPLEMENTADO');}


    public static function reporteFacturas($params) {
        
        
        return [];
    }

    public function datos_socio($filtro){
      return [];
    }    


    public function obtener_parametros($parametro){

            

        $datos = [];

        return $datos;
    }    



    public function establecer_parametro($param){
        
           
        return ["result"=>"OK"];
    }


}
?>
