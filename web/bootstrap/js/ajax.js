jQuery(document).ready(function(){
    	var s_devise="EUR",c_devise="EUR";
			
        //pair="'+ load_currencies.join(',') +'"'
		
           $("#currency-selector").change(function(){

              console.log(s_devise+c_devise);
           })
          $(".activedr").on('click', function(){
              console.log("jj");
               $(".activer").text("Activer");
             
              $(this).addClass("desactiver");
             // $(this).removeClass("activer");
             
           });
        
}
);