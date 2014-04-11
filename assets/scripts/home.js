$(function() {
    var selecteds = [],
        render = function() {
        	$('ul.selectedSchools').empty();
            $.each(selecteds, function(k, v) {
            	var name = v.replace(/\s+/g,"");
                $('<li id="' + name + '">' + v + '<span class="glyphicon glyphicon-remove-circle"></span></li>').appendTo('ul.selectedSchools');
                $('li#' + name).data("key", k);
            });
        }, init = function() {
            $.getJSON('./schools.php', function(data) {
                for(var i=0;i<6;i++)  {
	                $.each(data[i],function(k,v){
	                	var num = i+1;
		                $('#tabs-'+num+' div').append("<a>"+v+"</a>");
	                });
                }
            });
        },isexisted = function(data,key) {
	        re = new RegExp(key,[""])
			return (data.toString().replace(re,"┢").replace(/[^,┢]/g,"")).indexOf("┢")
        };
    $("#tabs").tabs({
        event: "mouseover"
    });
    $(document).on('click', 'ul.selectedSchools li', function() {
        var $this = $(this);
        $this.toggleClass('del');
    });
    init();
    render();
    $(document).on('click.add','div.selectSchools div a',function(){
	    var $this = $(this),_name = $this.html(),result = isexisted(selecteds,_name);
	    if(selecteds.length < 10) {
		    if(result > -1) {
		    	alert("您已经被改学校录取！");
		    } else {
		    	selecteds.push(_name);
		    	render();
		    }
	    } else {
	    	alert("您录取的学校太多啦！");
	    }
    });
    $(document).on('click.del','span.glyphicon.glyphicon-remove-circle',function(){
	    var $this = $(this),_parent = $this.parent(),_delPos = _parent.data("key");
	    selecteds.splice(_delPos,1);
	    render();
    });
});