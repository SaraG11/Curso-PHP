<?php
try{
    if(isset($_GET['id'])){
        echo "El parametro es: {$_GET['id']}";
    }else{
        throw new Exception('Faltan parametros por url');
    }
    
}catch(Exception $e){
    echo "Ha habido un error".$e->getMessage();

}finally{
    echo "Todo correcto";
}
