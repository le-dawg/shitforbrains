/* JS File */
// Start Ready


$(document).ready(function() {  
function next() {

       document.getElementById('1100').innerHTML = '101 - 200';
}
        $.ajax({type: "POST",
	        url: "inder/soeg/sogedata.php",
		data: { query: query_value },
		cache: false,
		success: function(html){
		$("div#sogedata").html(html);}
			});
		}return false;    
}