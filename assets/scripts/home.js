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
		                $('div#tabs #tabs-'+num+' div').append("<a rank='"+v[1]+"'>"+v[0]+"</a>");
	                });
                }
                for(var i=6;i<12;i++)  {
					$.each(data[i],function(k,v){
	                	var num = i+1-6;
		                $('div#tabs2 #tabs-'+ num +' div').append("<a rank='"+v[1]+"'>"+v[0]+"</a>");
	                });
				}
            });
        },isexisted = function(data,key) {
	        re = new RegExp(key,[""])
			return (data.toString().replace(re,"┢").replace(/[^,┢]/g,"")).indexOf("┢")
        }, renderInit = function() {
	        var _schoolsType = $('.selbox ul').find('li').filter(".selected").attr("class").split(" ")[0];
	        //console.log(_schoolsType);
	        $('.tabs.'+ _schoolsType + '-rank').siblings('.tabs').hide('fast',function(){
		        $('.tabs.'+ _schoolsType + '-rank').show('fast');
	        });     	
        };
    $("#tabs").tabs({
        event: "mouseover"
    });
    $("#tabs2").tabs({
        event: "mouseover"
    });
    $(document).on('click', 'ul.selectedSchools li', function() {
        var $this = $(this);
        $this.toggleClass('del');
    });
    init();
    render();
    renderInit();
    $(document).on('click.univ','.selbox ul li',function(){
	    var $this = $(this);
	    if($this.hasClass(".selected")) return;
	    if($this.siblings('.selected').length > 0) {
			$this.siblings('.selected').removeClass('selected');
	    }
	    $this.addClass('selected');
	    renderInit();
    });
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
    $('.submit').click(function(){
    	var query = [],query_string='';
    	$.each(selecteds,function(k,v){
	    	query.push(v[1]);
    	});
    	if(query.length > 0) {
	    	query_string = query.join('-');
			top.location = "http://apps.renren.com/showoffer/preview.php?schools="+query_string;
		} else {
			alert("请先添加一个学校~");
		}
    });
});