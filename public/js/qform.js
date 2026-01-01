$(document).ready(function(){
    $('#submit').click(function(){
    	var name=$('#name').val();
    	var lname=$('#lname').val();
    	document.write(name + lname);

    });
});