$(document).ready(function(){
	$('#name,#class,#contry').focus(function(){
		$(this).css('background','pink')
	});
	
	$('#name,#class,#contry').blur(function(){
		$(this).css('background','')
	});

	$('#name,#class,#contry').change(function(){
		$(this).css('background','')
	});


	$('#form').submit(function(){
      
         var name= $('#name').val();

         var classname= $('#class').val();
         var contry= $('#contry').val();

       document.write(name + "<br>" + classname + "<br>" + contry);

	});
});
