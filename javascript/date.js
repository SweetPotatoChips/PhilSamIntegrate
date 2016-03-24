$(document).ready(function(){
	var date_input=$('input[id="date"]'); //our date input has the id "date"
	var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'dd/mm/yyyy', //sets the format of the date
			container: container, //sets the contrainer
			todayHighlight: true, //makes it highlight the current date
			autoclose: true, //makes it close when a date is selected
		})
	})