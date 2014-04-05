$(function(){
	$( "#tabs" ).tabs({
      event: "mouseover"
    });
    $(document).on('click','ul.selectedSchools li',function(){
	    var $this = $(this);
	    $this.toggleClass('del');
    });
});