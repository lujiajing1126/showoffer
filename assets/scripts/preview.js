$(function(){
	$(document).on("click.upload",'button#upload',function(event){
		event.preventDefault();
		//alert($(this).attr('href'));
		top.location = "http://apps.renren.com/showoffer/upload.php?" + $(this).attr('href');
	});
});