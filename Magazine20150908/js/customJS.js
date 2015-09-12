
function articleSubmit(){		
	var form = $('form')[0]; 
	var formData = new FormData(form);
	console.log(formData);
}

$(document).ready(function(){
	$("#hereOpenForm").click(function() {
		$(".submitArtFormWrap").removeClass('hide');
		$(".submitArtFormWrap").addClass('show');
		
	});
});