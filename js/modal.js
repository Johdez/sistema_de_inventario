$(document).ready(function(){
	$("#modal").click(function(){
 		$('#myModal').on('show.bs.modal', function (e) {
  			if (!data) return e.preventDefault() // stops modal from being shown
		})
	});
});