
<div class="cent">
    <img src="/hdtop.png" alt="" style="width:50px; height: 50px;margin-top: 10px;"> 
<div class="cs">
<p>回到顶部</p>
</div>
</div>
<div class="bottom" style="margin-top:5%;">
        <div class="title">
            <p class="left">
                <span></span>
            </p>
            <p class="wenzi">翰师问鼎教育</p>
            <p class="right">
                <span></span>
            </p>
        </div>

        <div class="bottomone"> <span>Copyright</span><span>2020</span><span>翰师问鼎教育(www.hswdedu.com)</span><span>All</span><span>Rights</span><span>Reserve</span></div>
        <div class="bottomtwo"><span>北京翰师问鼎教育科技有限公司</span><span>咨询热线：010-60157069</span><span><a href="http://www.beian.miit.gov.cn" target="_blank">京ICP备19037216号</a></span></div>
        <div class="bottomthree"><span>投资有风险</span><span>加盟需谨慎</span></div>
    </div>

<script src="js/jquery-2.1.1.js"></script>
  <script src="js/swiper.min.js"></script>
  <script src="js/hswd.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="/lzk/particles.min.js"></script>
<script src="/lzk/js/app.js"></script>
<script type="text/javascript" charset="utf-8" src="/fuwenben/utf8-php/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/fuwenben/utf8-php/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="/fuwenben/utf8-php/lang/zh-cn/zh-cn.js"></script>
  <script type="text/javascript">
    $(function(){
  var a = $(".news_abstract").text(); //news_abstract为p标签的class值
  $(".news_abstract").html(a);
});
  </script>
<script type="text/javascript">
(function($){
	$.fn.extend({
		Scroll:function(opt,callback){
			
				if(!opt) var opt={};
				var _this=this.eq(0).find("ul:first");
				var lineH=_this.find("li:first").height(), 
					line=opt.line?parseInt(opt.line,10):parseInt(this.height()/lineH,10), //
					speed=opt.speed?parseInt(opt.speed,10):500, //
					timer=opt.timer?parseInt(opt.timer,8):3000; //
				if(line==0) line=10;
				var upHeight=0-line*lineH;
				scrollUp=function(){
						_this.animate({
								marginTop:upHeight
						},speed,function(){
								for(i=1;i<=line;i++){
										_this.find("li:first").appendTo(_this);
								}
								_this.css({marginTop:0});
						});
				}
				_this.hover(function(){
						clearInterval(timerID);
				},function(){
						timerID=setInterval("scrollUp()",timer);
				}).mouseout();
		}       
	});
})(jQuery);

$(document).ready(function(){
		$("#scrollDiv").Scroll({line:4,speed:500,timer:3000});
});
</script>
 <script>
    window.addEventListener('scroll', function(){
        let t = $('body, html').scrollTop();   // 目前监听的是整个body的滚动条距离
        if(t>0){
                $('.box').addClass('box-active')
        }else{
                $('.box').removeClass('box-active')
        }
    })
     $(".cent").click(function(e) {
	     $('body,html').animate({scrollTop:0},500);
     });
</script>

  <script type="text/javascript">
       $("#sy").hover(function(){
          $("#").addClass("color");
       })
  </script>
<script type="text/javascript">
	function GetQueryString(name)
	{
		     var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
		          var r = window.location.search.substr(1).match(reg);
		     if(r!=null)return  unescape(r[2]); return null;
	}
	var myurl=GetQueryString("kc");
	if(myurl !=null && myurl.toString().length>1)
	{
		if(myurl=='sx'){
                    $(".courseyw").hide();
                    $(".courseyy").hide();
                     $(".coursesx").show();
                    $("#sx").addClass("chcolor"); 
                   $(".sx").addClass("color");
                   $("#yw").removeClass("chcolor"); 
                   $(".yw").removeClass("color"); 
                   $("#yy").removeClass("chcolor"); 
                   $(".yy").removeClass("color");     
 		}else if(myurl=='yy'){
				$(".courseyw").hide();
                  $(".coursesx").hide();
                  $(".courseyy").show();
                 $("#yy").addClass("chcolor"); 
                  $(".yy").addClass("color");
                   $("#sx").removeClass("chcolor"); 
                    $(".sx").removeClass("color"); 
                    $("#yw").removeClass("chcolor"); 
                  $(".yw").removeClass("color");
		}else if(myurl=='yw'){
				$(".coursesx").hide();
                  $(".courseyy").hide();
                  
                   $("#yw").addClass("chcolor"); 
                    $(".yw").addClass("color"); 
                     $("#sx").removeClass("chcolor"); 
                    $(".sx").removeClass("color"); 
                    $("#yy").removeClass("chcolor"); 
                   $(".yy").removeClass("color");
	        
			}
}else{
					$(".coursesx").hide();
                    $(".courseyy").hide();
                    $(".courseyw").show();
                    $("#yw").addClass("chcolor"); 
                    $(".yw").addClass("color"); 
                     $("#sx").removeClass("chcolor"); 
                    $(".sx").removeClass("color"); 
                    $("#yy").removeClass("chcolor"); 
                   $(".yy").removeClass("color");
		}
  $("#yw").hover(function(){
                    $(".coursesx").hide();
                    $(".courseyy").hide();
                    $(".courseyw").show();
                    $("#yw").addClass("chcolor"); 
                     $(".yw").addClass("color");
                    $("#sx").removeClass("chcolor"); 
                    $(".sx").removeClass("color"); 
                    $("#yy").removeClass("chcolor"); 
                   $(".yy").removeClass("color");
                })
				$("#sx").hover(function(){
   	             $(".courseyw").hide();
                $(".courseyy").hide();
                $(".coursesx").show();
                 $("#sx").addClass("chcolor"); 
                $(".sx").addClass("color");
                $("#yw").removeClass("chcolor"); 
                $(".yw").removeClass("color"); 
                $("#yy").removeClass("chcolor"); 
                $(".yy").removeClass("color"); 
               })
             $("#yy").hover(function(){
                $(".courseyw").hide();
                $(".coursesx").hide();
                $(".courseyy").show();
                 $("#yy").addClass("chcolor"); 
                $(".yy").addClass("color");
                $("#sx").removeClass("chcolor"); 
                $(".sx").removeClass("color"); 
                $("#yw").removeClass("chcolor"); 
                $(".yw").removeClass("color"); 
               })
  </script>
        <script type="text/javascript">
           $(function(){
              $("#anniu1").click(function(){
            location.href='http://p.qiao.baidu.com/cps/chat?siteId=14078078&userId=28758751';
        });
               $("#anniu2").click(function(){
            location.href='http://p.qiao.baidu.com/cps/chat?siteId=14078078&userId=28758751';
        });
                $("#anniu3").click(function(){
            location.href='http://p.qiao.baidu.com/cps/chat?siteId=14078078&userId=28758751';
        });
                $("#anniu4").click(function(){
            location.href='http://p.qiao.baidu.com/cps/chat?siteId=14078078&userId=28758751';
        });
                $("#anniu5").click(function(){
            location.href='http://p.qiao.baidu.com/cps/chat?siteId=14078078&userId=28758751';
        });
                 $("#anniu6").click(function(){
            location.href='http://p.qiao.baidu.com/cps/chat?siteId=14078078&userId=28758751';
        });
                  $("#anniu7").click(function(){
            location.href='http://p.qiao.baidu.com/cps/chat?siteId=14078078&userId=28758751';
        });
                   $("#anniu8").click(function(){
            location.href='http://p.qiao.baidu.com/cps/chat?siteId=14078078&userId=28758751';
        });
                    $("#anniu9").click(function(){
            location.href='http://p.qiao.baidu.com/cps/chat?siteId=14078078&userId=28758751';
        });
                     $("#anniu10").click(function(){
            location.href='http://p.qiao.baidu.com/cps/chat?siteId=14078078&userId=28758751';
		     });
	      $("#gyan1").click(function(){
		                  location.href='http://p.qiao.baidu.com/cps/chat?siteId=14078078&userId=28758751';
				                       });
	      $("#gyan2").click(function(){
		                  location.href='http://p.qiao.baidu.com/cps/chat?siteId=14078078&userId=28758751';
				                       });
	      $("#gyan3").click(function(){
		                  location.href='http://p.qiao.baidu.com/cps/chat?siteId=14078078&userId=28758751';
				                       });
	      $("#zxkf").click(function(){
		                  location.href='http://p.qiao.baidu.com/cps/chat?siteId=14078078&userId=28758751';
				                       });
                               $("#ssbtn1").click(function(){
		                  location.href='http://p.qiao.baidu.com/cps/chat?siteId=14078078&userId=28758751';
				                       });
                               $("#ssbtn2").click(function(){
		                  location.href='http://p.qiao.baidu.com/cps/chat?siteId=14078078&userId=28758751';
			       });
	      $("#xwtop3").click(function(){
                               location.href='http://p.qiao.baidu.com/cps/chat?siteId=14078078&userId=28758751';
	      });
		$("#ljsq").click(function(){
			                                  location.href='http://p.qiao.baidu.com/cps/chat?siteId=14078078&userId=28758751';
							                                 });
               $(".coursesq").click(function(){
                   location.href='http://p.qiao.baidu.com/cps/chat?siteId=14078078&userId=28758751';
               });
	   })
        </script>
  <script>
    var _hmt = _hmt || [];
    // (function() {
    //   var hm = document.createElement("script");
    //   hm.src = "https://hm.baidu.com/hm.js?aa8d1be4e3ba586077a202329f76de21";
    //   var s = document.getElementsByTagName("script")[0];
    //   s.parentNode.insertBefore(hm, s);
    // })();
  </script>
  <script>
    $('.navbar-nav li').click(function() {
      $('.navbar-toggle').click()
    })
  </script>
<script>
var _hmt = _hmt || [];
// (function() {
//   var hm = document.createElement("script");
//   hm.src = "https://hm.baidu.com/hm.js?aa8d1be4e3ba586077a202329f76de21";
//   var s = document.getElementsByTagName("script")[0]; 
//   s.parentNode.insertBefore(hm, s);
// })();
</script>

<!-- <script type="text/javascript" charset="utf-8" async src="http://lxbjs.baidu.com/lxb.js?sid=13846636"></script></body> -->



</html>
