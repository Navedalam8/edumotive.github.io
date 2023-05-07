<?php
//variable setting
$name = $_REQUEST['name'];
$emai = $_REQUEST['Email'];
$Message = $_REQUEST['Message'];

//check input fields
if(empty($name) || empty($email) || empty($Message))
{
    echo "please fill all the fields";
}
else{
mail("shibliupdate1883@gmai.com", "edumotive Message", $Message, "form: $name 
<$email>");
echo "<script type='text/javascript'>alert('your message sent
successfully');
window.history.log(-1)
</script>";
}
?>