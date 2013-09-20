<html>
<head>
<title> Register User </title>
<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<script  src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>    
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script type="text/javascript">
$(function() {
var addDiv = $('#addinput');
var i = $('#addinput p').size() + 1;

$('#addNew').live('click', function() {
$('<p><span class="IL_AD" id="IL_AD12"><input type="file" id="p_new" size="40" name="p_new_' + 
i +'" value="" placeholder="Select New File..." /><a href="#" id="remNew">Remove</a> </p>').appendTo(addDiv);
i++;

return false;
});

$('#remNew').live('click', function() {
if( i > 2 ) {
$(this).parents('p').remove();
i--;
}
return false;
});

$(".date").datepicker();
$("#frmRegister").validate();
});

</script>
<style type="text/css">
.error{
color:red;
}
</style>

</head>
<body>
<form id='frmRegister' method="post" enctype="multipart/form-data" action="step2.php">
<fieldset>
    <legend>Register:</legend>
<div >
<p>Name:</p>
<p><input type="text" name="name" class="text required"></p>
</div>

<div >
<p>DOB:</p>
<p><input type="text" name="dob" class="date required"></p>
</div>

<div >
<p>Add:</p>
<p><input type="text" name="add" class="text required"></p>
</div>

<div >
<p>Email:</p>
<p><input type="text" name="email" class="text email required"></p>
</div>

<div >
<p>Mobile:</p>
<p><input type="text" name="mobile" class="text number required"></p>
</div>


<div id="addinput">
<p>
<input type="file" id="p_new" size="20" name="p_new" value="" placeholder="Input Value" /><a href="#" id="addNew">Add</a>
</p>
</div>

<div >
<p>&nbsp;</p>
<p><input type="submit" name="submit" value="Register"></p>
</div>

</fieldset>
</form>
</body>
</html>
