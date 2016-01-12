/*
 * jQuery Currency Converter Plugin
 * Version : 1.0
 * Plugin URL : https://valllabh.github.io/jquery.currency.converter
 * Author URL : http://vallabhjoshi.com
 * Author : Vallabh Joshi - copyright 2014
 * License : GPL Version 3
 * http://www.opensource.org/licenses/GPL-3.0
 */

jQuery(document).ready(function(){

		var s_devise="EUR",c_devise="EUR";
		var montant=100;	
       
		console.log(s_devise+"");
           $("#montant").mouseleave(function(){

 console.log(s_devise+c_devise);
               
              $.ajax({
                url : 'http://query.yahooapis.com/v1/public/yql',
				dataType : 'jsonp',
				data : {
					q : 'select * from yahoo.finance.xchange where pair in ("'+s_devise+c_devise+'")',
					format : 'json',
					env : 'store://datatables.org/alltableswithkeys'
				}
			,
            success: function(data){
            	var curs = data.query.results.rate;
            	var i=1;
                    if(curs)
                    console.log(curs);
					cur_source = curs.id.substr(0,3 );
					source = 1;
					cur_cible = curs.id.substr( curs.id.length - 3 );
					cible = curs.Rate;
		    $(".source").text(source+' '+cur_source);
                     $(".cible").text(cible+' '+cur_cible);
                   
             $(".total").text(montant +' '+cur_source+' vaut '+cible * montant+' '+cur_cible);
              
            }
             });  
              });    
		

     $('#source').on('change', function() {
  
      s_devise=this.value;

     });

  $('#cible').on('change', function() {
 
      c_devise=this.value;
     });
$('#montant').mousemove(function() {
 
      montant=this.value;
     });
		return this;
	});