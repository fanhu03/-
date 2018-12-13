//头部隐藏
$(".litwo").mouseover(function(){
		
		$(".ol").css("display","block");
		$(".litwo").css("backgroundColor","blue");
		$(".ol").css("z-index",10);
	})
	$(".litwo").mouseout(function(){
  $(".ol").css("display","none");
  $(".litwo").css("backgroundColor","black");
});

$(".lione").mouseover(function(){
		
		$(".div").css("display","block");
		$(".lione").css("backgroundColor","red");
	})
	$(".lione").mouseout(function(){
$(".div").css("display","none");
 $(".lione").css("backgroundColor","black");
});

$(".lithree").mouseover(function(){
		
      $(".immg").css("display","block");
       $(".lithree").css("backgroundColor","yellow");
       $(".lithree").css("color","#000000");
      $(".immg").css("z-index","10");
       
	})
	$(".lithree").mouseout(function(){
  $(".immg").css("display","none");
$(".lithree").css("backgroundColor","black");
});

$(".caidan").mouseover(function(){
	  $(".dianshi").css("display","block");
})
$(".caidan").mouseout(function(){
	$(".dianshi").css("display","none");
})

/////////////////////////////
	$(".first").mouseover(function(){
		
 	  $(".daohang").css("display","block");
  })
	  $(".first").mouseout(function(){
	  	
 	   $(".daohang").css("display","none");
 	   
    })
	  /////////////////////////
	   	$('#btn1').hide();
$(document).scroll(function(){
		if($(this).scrollTop() > 200){
			$('#btn1').fadeIn();
		}else{
			$('#btn1').fadeOut();
		}
	})

	    $("#btn1").click(function(){
        $(window).scrollTop(0)
    
 })