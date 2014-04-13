$(function() {
    var selecteds = [],
        render = function() {
        	$('ul.selectedSchools').empty();
            $.each(selecteds, function(k, v) {
            	var name = v[0].replace(/\s+/g,"");
                $('<li id="' + name + '">' + v[0] + '<span class="glyphicon glyphicon-remove-circle"></span></li>').appendTo('ul.selectedSchools');
                $('li#' + name).data("key", k);
                $('li#' + name).data("rank",v[1]);
            });
        }, init = function() {
            $.getJSON('./schools.php', function(data) {
                for(var i=0;i<6;i++)  {
	                $.each(data[i],function(k,v){
	                	var num = i+1;
		                $('#tabs-'+num+' div').append("<a rank='"+v[1]+"'>"+v[0]+"</a>");
	                });
                }
            });
        },isexisted = function(data,key) {
	        re = new RegExp(key,[""])
			return (data.toString().replace(re,"┢").replace(/[^,┢]/g,"")).indexOf("┢")
        }, htmlentities = function(str) {
        	var r = "";
		    for( i=0; i<str.length; i++ ) {
		    	temp = str.charCodeAt(i);
		    	r += "&#"+temp+";";
		    }
		    return r;
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
	    var $this = $(this),_name = $this.html(),_rank = $this.attr("rank"),result = isexisted(selecteds,_name);
	    if(selecteds.length < 10) {
		    if(result > -1) {
		    	alert("您已经被该学校录取！");
		    } else {
		    	selecteds.push([_name,_rank]);
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
    $('button.submit').click(function(){
    	var query = [],query_string='';
    	$.each(selecteds,function(k,v){
	    	query.push(v[1]);
    	});
    	query_string = query.join('-');
		window.open("http://app.mysach.com/showoffer/generate.php?name=你的名字&schools="+query_string);
		//window.location.href = "http://app.mysach.com/showoffer/generate.php?name=你的名字&schools="+query_string;
    });
});