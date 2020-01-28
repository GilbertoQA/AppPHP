
	


//https://stackoverflow.com/questions/6141680/
//setting-maxlength-of-textbox-with-javascript-or-jquery
//https://stackoverflow.com/questions/
//43427993/change-the-color-of-a-input-field-when-selected

 


	document.getElementById('password').setAttribute('maxlength',8);


		/*
	El input password se va a mantener disabled hasta que el usuario rellene bien
	el input email , si no lo completa entonces no se activara el input de password.
		*/


//https://stackoverflow.com/questions/8803412/check-if-an-html-input-element-is-empty-or-has-no-value-entered-by-user
//https://learn.jquery.com/using-jquery-core/faq/how-do-i-disable-enable-a-form-element/


$( "#password" ).prop( "disabled", true );



document.addEventListener("click", function(){


	if (document.getElementById('user').value !== ""){
    
    	console.log("esta vacio");
        $( "#password" ).prop( "disabled", false );

} 

});




		
		
		
			
