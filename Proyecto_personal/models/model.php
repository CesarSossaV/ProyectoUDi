<?php
class EnlacesPaginas{
    
    public function enlacesPaginasModel($enlacesModel){
        if($enlacesModel=="laboratorios" ||
           $enlacesModel=="mantenimientos" ||
           $enlacesModel=="tareas" ||
           $enlacesModel=="registros" ||
           $enlacesModel=="laboratorio102" ||
           $enlacesModel=="laboratorio103" ||
           $enlacesModel=="laboratorio201" ||
           $enlacesModel=="laboratorio202" ||
           $enlacesModel=="laboratorio203" ||
           $enlacesModel=="laboratorio204" ||
           $enlacesModel=="laboratorio205" ||
           $enlacesModel=="laboratorio206" ||
           $enlacesModel=="tEquipo"||
           $enlacesModel=="tLaboratorio"){
            
            $module = "views/modules/".$enlacesModel.".php";
            
        }
        else if($enlacesModel=="index"){
            
            $module = "views/modules/incio.php";
            
        }
        
        else{
            
            $module="views/modules/inicio.php";
            
        }
        
        return $module;
        
    }
    
    
}


?>