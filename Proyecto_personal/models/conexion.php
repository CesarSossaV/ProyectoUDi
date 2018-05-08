<?php
class Conexion{
    public function Conectar(){
        
        
        $link= new PDO("sqlsrv:Server=CESAR;Database=PruebaProyecto","sa","llcesarll11");
        return($link);
        
    }  
    
    
}
