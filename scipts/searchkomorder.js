/* JS File */
// Start Ready

function myFunction0() {
    var fruits = $('input#putpaa0').val();
    var beskivesle = $('input#putpaab0').val();
    var leve = $('input#putpaac0').val();
    var uni = 'JA';
    $('#vare_nr').val(fruits);
    $('#vare_beskrivelse').val(beskivesle);
    $('#unidat').val(uni);
    $("p#results").fadeOut();
    document.getElementById('lev').innerHTML = '<input style="" class="inhvid" type="text" name="levendor" value="'+leve+'">';
}
function myFunction1() {
    var fruits = $('input#putpaa1').val();
    var beskivesle = $('input#putpaab1').val();
    var leve = $('input#putpaac1').val();
    $('#vare_nr').val(fruits);
    $('#vare_beskrivelse').val(beskivesle);
    $("p#results").fadeOut();
    document.getElementById('lev').innerHTML = '<input style="" class="inhvid" type="text" name="levendor" value="'+leve+'">';

}
function myFunction2() {
    var fruits = $('input#putpaa2').val();
    var beskivesle = $('input#putpaab2').val();
    var leve = $('input#putpaac2').val();
    $('#vare_nr').val(fruits);
    $('#vare_beskrivelse').val(beskivesle);
    $("p#results").fadeOut();
    document.getElementById('lev').innerHTML = '<input style="" class="inhvid" type="text" name="levendor" value="'+leve+'">';
}
function myFunction3() {
    var fruits = $('input#putpaa3').val();
    var beskivesle = $('input#putpaab3').val();
    var leve = $('input#putpaac3').val();
    $('#vare_nr').val(fruits);
    $('#vare_beskrivelse').val(beskivesle);
    $("p#results").fadeOut();
    document.getElementById('lev').innerHTML = '<input style="" class="inhvid" type="text" name="levendor" value="'+leve+'">';
}
function myFunction4() {
    var fruits = $('input#putpaa4').val();
    var beskivesle = $('input#putpaab4').val();
    var leve = $('input#putpaac4').val();
    $('#vare_nr').val(fruits);
    $('#vare_beskrivelse').val(beskivesle);
    $("p#results").fadeOut();
    document.getElementById('lev').innerHTML = '<input style="" class="inhvid" type="text" name="levendor" value="'+leve+'">';
}
function myFunction5() {
    var fruits = $('input#putpaa5').val();
    var beskivesle = $('input#putpaab5').val();
    var leve = $('input#putpaac5').val();
    $('#vare_nr').val(fruits);
    $('#vare_beskrivelse').val(beskivesle);
    $("p#results").fadeOut();
    document.getElementById('lev').innerHTML = '<input style="" class="inhvid" type="text" name="levendor" value="'+leve+'">';
}
function myFunction6() {
    var fruits = $('input#putpaa6').val();
    var beskivesle = $('input#putpaab6').val();
    var leve = $('input#putpaac6').val();
    $('#vare_nr').val(fruits);
    $('#vare_beskrivelse').val(beskivesle);
    $("p#results").fadeOut();
    document.getElementById('lev').innerHTML = '<input style="" class="inhvid" type="text" name="levendor" value="'+leve+'">';
}
function myFunction7() {
    var fruits = $('input#putpaa7').val();
    var beskivesle = $('input#putpaab7').val();
    var leve = $('input#putpaac7').val();
    $('#vare_nr').val(fruits);
    $('#vare_beskrivelse').val(beskivesle);
    $("p#results").fadeOut();
    document.getElementById('lev').innerHTML = '<input style="" class="inhvid" type="text" name="levendor" value="'+leve+'">';
}

function myFunction8() {
    var fruits = $('input#putpaa8').val();
    var beskivesle = $('input#putpaab8').val();
    var leve = $('input#putpaac8').val();
    $('#vare_nr').val(fruits);
    $('#vare_beskrivelse').val(beskivesle);
    $("p#results").fadeOut();
    document.getElementById('lev').innerHTML = '<input style="" class="inhvid" type="text" name="levendor" value="'+leve+'">';
}
function myFunction9() {
    var fruits = $('input#putpaa9').val();
    var beskivesle = $('input#putpaab9').val();
    var leve = $('input#putpaac9').val();
    $('#vare_nr').val(fruits);
    $('#vare_beskrivelse').val(beskivesle);
    $("p#results").fadeOut();
    document.getElementById('lev').innerHTML = '<input style="" class="inhvid" type="text" name="levendor" value="'+leve+'">';
}
function myFunction10() {
    var fruits = $('input#putpaa10').val();
    var beskivesle = $('input#putpaab10').val();
    var leve = $('input#putpaac10').val();
    $('#vare_nr').val(fruits);
    $('#vare_beskrivelse').val(beskivesle);
    $("p#results").fadeOut();
    document.getElementById('lev').innerHTML = '<input style="" class="inhvid" type="text" name="levendor" value="'+leve+'">';
}



$(document).ready(function() {  

	// Icon Click Focus
	$('div.icon').click(function(){
		$('input#vare_beskrivelse').focus();
	});

	// Live Search
	// On Search Submit and Get Results
	function search() {
	setTimeout(function() {search2(); }, 2500);
                function search2() {
		var query_value = $('input#vare_beskrivelse').val();
		$('b#search-string').html(query_value);
		if(query_value !== ''){
			$.ajax({
				type: "POST",
				url: "scipts/searchkom.php",
				data: { query: query_value },
				cache: false,
				success: function(html){
					$("p#results").html(html);
				}
			}); }
		}return false;    
	}

	$("input#vare_beskrivelse").live("keyup", function(e) {
		// Set Timeout
		clearTimeout($.data(this, 'timer'));

		// Set Search String
		var search_string = $(this).val();

		// Do Search
		if (search_string == '') {
			$("p#results").fadeOut();
		}else{
			$("p#results").fadeIn();
			$(this).data('timer', setTimeout(search, 100));
		};
	});

});