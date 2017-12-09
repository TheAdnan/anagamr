function checkValue(){
	$.ajax({
	    type: "POST",
	    url: 'handler.php',
	    success: function(data){
	        console.log(data);
	    }
	});
}


