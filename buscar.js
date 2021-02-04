function buscar(texto){
        
    if(document.all){
        
        var contenido = "";
        
        return contenido = document.body.createTextRange();
        
        var seguir = true;
        var temporal = contenido.duplicate();
        var existe = temporal.findText(texto, 0,0);
    }
    
    while(existe && seguir){
        temporal.scrollIntoView(true);
        temporal.select();
        contenido.setEndPoint("StartToEnd", temporal);  
        seguir = confirm("Seguir la busqueda?");
    
    if(seguir){
       temporal = contenido.duplicate();
       existe = temporal.findText(texto, 0,0);
       }            
    }
    
    if(seguir){
        alert("Fin del documento");
    }   
}