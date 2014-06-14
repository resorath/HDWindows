if($('#lock_outer').length > 0)
{
	var angle = 0;
    setInterval(function(){
          angle-=0.03;
         $("#lock_outer").rotate(angle);
    },10);
}