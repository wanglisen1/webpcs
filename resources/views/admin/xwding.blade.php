@include('admin.head')
    <div class="xwd">
        <div class="xwd1_conten animated fadeInDown" >
            <div class="xwd1_xwdcn">
                <img src="/xw/xwdtag.png" alt="">
                
            </div>
            <div class="bibibi">
                <img src="/xw/xwdcn2.png" alt="">
            </div>
            <div  class="xwd_ipon1" style="width:717px;height:385px;right:-30px">
            <video src="http://kms.hswdjy.com/XWD.mp4"
            style="width:100%; height:100%; object-fit: fill;position: absolute"
             controls
             poster="/xw/fm.png"
             id="video1"
             
             ></video>
             <!-- <div id="vbplay" onclick="isPlay()"style="position: absolute;top: 34%;left: 44%">
                 <img src="/xw/vbicon.png" alt="">
             </div> -->
            </div>
        </div>
<script>
var video1 = document.getElementById("video1");  //括号内为video标签的id
var vbplay = document.getElementById("vbplay");
     //播放视频（点击播放按钮，后变成暂停）
 　　 function isPlay(){
        if(video1.pause){　
            console.log(1234)　　　//paused属于视频api属性
            　vbplay.style.display='none';
      　　　　  video1.play();
 　　　　}else{
    　　　　 vbplay.style.display='block';
       　　　　 video1.pause();
 　　　　}
 }

</script>
        <div class="xwd2_conten">
            <div class="xwd2_title">
                专为家校沟通量身定制
            </div>
            <div class="xwd2_list">
                <div data-img="/xw/xwdicon01.png" data-img1="/xw/xwdicon1.png">
                    <img src="/xw/xwdicon1.png" alt="">
                    <p>上课情况随时掌握</p>
                </div>
                <div data-img="/xw/xwdicon02.png" data-img1="/xw/xwdicon2.png">
                    <img src="/xw/xwdicon2.png" alt="">
                    <p>作业学习精准推送</p>
                </div>
                <div data-img="/xw/xwdicon03.png" data-img1="/xw/xwdicon3.png">
                    <img src="/xw/xwdicon3.png" alt="">
                    <p>课后跟踪一目了然</p>
                </div>
                <div data-img="/xw/xwdicon04.png" data-img1="/xw/xwdicon4.png">
                    <img src="/xw/xwdicon4.png" alt="">
                    <p>班级管理一键搞定</p>
                </div>
            </div>
        </div>

        <style>
.xwd3_contne{
width: 1060px;
margin: 0 auto;
height: 570px;
overflow: hidden;
margin-top: 90px;
display: flex;
}
.xwd3_img{
    margin-left: 78px;
}
.xwd3_inof{
    margin-top: 109px;
    margin-left: 100px;
}
.xwd3_title{
font-size:41px;
font-family:SourceHanSansCN;
font-weight:500;
color:rgba(0,0,0,1);
}
.xwd3_con{
    width:450px;
height:67px;
font-size:26px;
font-family:SourceHanSansCN;
font-weight:400;
color:rgba(88,87,87,1);
line-height:41px;
}
.xwd_line{
    width:64px;
height:6px;
background:rgba(68,165,232,1);
border-radius: 20px;
margin-top: 15px;
margin-bottom: 27px;
}
        </style>
        <div class="xwd3_contne" id="xwd3">
              <div class="xwd3_img" id="xwd3_img">
                  <img src="/xw/xwd2.png" alt="">
              </div>
              <div class="xwd3_inof" id="xwd3_inof">
                  <p class="xwd3_title">家校互通轻松搞定</p>
                  <div class="xwd_line"></div>
                  <p class="xwd3_con">学校、师生、家长轻松连接为家校之间实时高效沟通而生
                </p>
                
              </div>
        </div>

        <style>
            .xwd4_contne{
            width: 1060px;
            margin: 0 auto;
            height: 570px;
            overflow: hidden;
            margin-top: 60px;
            display: flex;
            }
            .xwd4_img{
               margin-left: 70px;
            }
            .xwd4_inof{
                margin-top: 109px;
                margin-left: 100px;
            }
            .xwd4_title{
            font-size:41px;
            font-family:SourceHanSansCN;
            font-weight:500;
            color:#fff;
            }
            .xwd4_con{
                width:450px;
            height:67px;
            font-size:26px;
            font-family:SourceHanSansCN;
            font-weight:400;
            color:#fff;
            line-height:41px;
            }
            .xwd_line1{
                width:64px;
            height:6px;
            background:#fff;
            border-radius: 20px;
            margin-top: 15px;
            margin-bottom: 27px;
            }
                    </style>

        <div class="xwd4_contne" id="xwd4">
            <div class="xwd4_inof" id="xwd4_inof">
                <p class="xwd4_title">上课、排课随时查看</p>
                <div class="xwd_line1"></div>
                <p class="xwd4_con">
                课程、报名、全记录实时更新家长轻松一键掌握
              </p>
            </div>
            <div class="xwd4_img" id="xwd4_img">
                <img src="/xw/xwd3.png" alt="">
            </div>
      </div>

      <div id="xwd5" class="xwd3_contne" style="margin-top: 170px;">
        <div class="xwd3_img" id="xwd5_img">
            <img src="/xw/xwd4.png" alt="">
        </div>
        <div class="xwd3_inof" id="xwd5_inof">
            <p class="xwd3_title">课后跟踪一目了然</p>
            <div class="xwd_line"></div>
            <p class="xwd3_con">
            学习情况随时随地查看家长精准掌握学生学习动态
          </p>
        </div>
  </div>

  <div class="xwd4_contne" style="margin-top: 181px;" id="xwd6">
    <div class="xwd4_inof" id="xwd6_inof">
        <p class="xwd4_title" style="color: #000;">课后作业一键上传</p>
        <div class="xwd_line"></div>
        <p class="xwd4_con" style="color: #000;">
            
        课后学习计划老师一键传达
作业习题智能批改 · 无需等待
                                        
      </p>
    </div>
    <div class="xwd4_img" id="xwd6_img">
        <img src="/xw/xwd5.png" alt="">
    </div>
</div>
<div class="xwd4_contne" style="margin-top: 122px;" id="xwd7">
    <div class="xwd4_img" id="xwd7_img">
        <img src="/xw/xwd6.png" alt="">
    </div>
    <div class="xwd4_inof" id="xwd7_inof">
        <p class="xwd4_title" >AI测评检测学习效果</p>
        <div class="xwd_line1"></div>
        <p class="xwd4_con">
            
        AI检测，针对学习更有效
学情实时更新，效果轻松掌握

                                        
      </p>
    </div>
    
</div>

<div class="xwd4_contne" style="margin-top: 180px;" id="xwd8">
    <div class="xwd4_inof" id="xwd8_inof">
        <p class="xwd4_title" style="color: #000;">学习成长随时掌握</p>
        <div class="xwd_line"></div>
        <p class="xwd4_con" style="color: #000;">
        课堂记录随时上传
家长实时查看学生状态
                    
      </p>
    </div>
    <div class="xwd4_img" id="xwd8_img">
        <img src="/xw/xwd7.png" alt="">
    </div>
</div>


    </div>







</body>

<script>

    $(".xwd2_list div").hover(function () {
        var imgurl = $(this).data("img");
        $(this).css({ "background": "#258FE0", "color": '#fff' })
        $(this).children().attr("src", imgurl)
    }, function () {
        var imgurl = $(this).data("img1");
        $(this).css({ "background": "#fff", "color": '#5d5d5d' })
        $(this).children().attr("src", imgurl)
    });

    
    var a, b, c;
	a = $(window).height();
	$(window).scroll(function() {
		var b = $(this).scrollTop();
		$("#xwd3").each(function() {
			c = $(this).offset().top;
			if(a + b > c) {
				$("#xwd3_img").addClass("animated bounceInLeft");
				$("#xwd3_inof").addClass("animated bounceInRight");
			}
        });
        $("#xwd4").each(function() {
			c = $(this).offset().top;
			if(a + b > c) {
				$("#xwd4_img").addClass("animated bounceInRight");
				$("#xwd4_inof").addClass("animated bounceInLeft");
			}
        });
        $("#xwd5").each(function() {
			c = $(this).offset().top;
			if(a + b > c) {
				$("#xwd5_img").addClass("animated bounceInLeft");
				$("#xwd5_inof").addClass("animated  bounceInRight");
			}
        });
        
        $("#xwd6").each(function() {
			c = $(this).offset().top;
			if(a + b > c) {
				$("#xwd6_img").addClass("animated bounceInRight");
				$("#xwd6_inof").addClass("animated bounceInLeft");
			}
        });

        $("#xwd7").each(function() {
			c = $(this).offset().top;
			if(a + b > c) {
				$("#xwd7_img").addClass("animated bounceInLeft");
				$("#xwd7_inof").addClass("animated  bounceInRight");
			}
        });

        $("#xwd8").each(function() {
			c = $(this).offset().top;
			if(a + b > c) {
				$("#xwd8_img").addClass("animated bounceInRight");
				$("#xwd8_inof").addClass("animated bounceInLeft");
			}
        });

	});
</script>

@include('admin.foot')
