$('window').ready(function(){
	//alert("worksss")
	$("table").addClass('table table-hover table-striped')
})

$('form').submit(function(e){
	if(formEmptyCheck(this)){	
		e.preventDefault();
		return
	}
	if(!confirm("Do you want to submit?")){
		e.preventDefault();
		return;
	}
})

function formEmptyCheck(e){
	var alt = "<div class='alert alert-error'><button type='button' class='close' data-dismiss='alert'>×</button><strong>Empty Field!</strong> Fill up properly.</div>"
	var x = false
	allElement = $(e).children().children().children().children('td').children()
	allElement.each(function(i){
		//alert($(allElement[i]).text())
		if($(allElement[i]).is("input")){
			var txt = $(allElement[i]).val()
			if(txt==="" && !$(allElement[i]).is(":hidden")){
				$(allElement[i]).parent().append(alt)	
				x = true
			} 			
		}
		else if($(allElement[i]).is("select")){
			var txt = $(allElement[i]).val()
			if(txt==="" && !$(allElement[i]).is(":hidden")){
				$(allElement[i]).parent().append(alt)	
				x = true
			} 			
		}
		/*else if($(allElement[i]).is("select")){
			var txt = $(allElement[i]).val()
			(txt==="")? $(allElement[i]).parent().append(alt)			
		}*/
	})
	//alert(allElement.length)
	//if()
	return x
}
