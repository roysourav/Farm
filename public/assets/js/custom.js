
$('.select').select2();
$('.select_multi').select2({
	placeholder: "Select Skill (Multiple Allowed)",
});
//date picker
 $('#datepicker').datepicker({
      autoclose: true
      
    });

 $('#datepicker2').datepicker({
      autoclose: true
    });
$('#datepicker3').datepicker({
      autoclose: true
    });
$('#datepicker4').datepicker({
      autoclose: true
    });




// Form validation
$('#form').parsley();

// Delete Confirmation
function ConfirmDelete()
{
var x = confirm("Are you sure you want to delete?");
if (x)
return true;
else
return false;
}
