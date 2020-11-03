  @include('admin.head')
  <link rel="stylesheet" href="https://www.jq22.com/jquery/bootstrap-3.3.4.css">
  <style>
	  * {
		  margin: 0;
		  padding: 0;
		  list-style: none;
		  text-decoration: none;
	  }

	  .kms_system {
		  width: 1072px;
		  height: 570px;
		  margin: 0 auto;
		  background: url('kms_dn.png') no-repeat 100% 100%;
		  position: relative;
	  }

	  .kms_conten1 {
		  width: 815px;
		  height: 500px;
		  margin: 0 auto;
		  background: url('kms_xt.png') no-repeat 100% 100%;
	  }

	  .kes_lead1 {
		  position: absolute;
		  top: 106px;
		  left: -5px;
	  }

	  .kes_lead2 {
		  position: absolute;
		  top: 67px;
		  left: 300px;
		  display: none;
	  }

	  .kes_lead3 {
		  position: absolute;
		  top: 335px;
		  left: 557px;
		  display: none;
	  }

	  /* 导航 */
	  .nav-left-container {
		  background-color: #001529;
		  width: 164px;
		  height: 420px;
		  position: absolute;
		  top: 80px;
		  left: 137px;
		  overflow: hidden;
	  }

	  .nav-left-container li p {
		  font-size: 10px;
		  box-sizing: border-box;
		  cursor: pointer;
		  position: relative;
		  padding: 6px 5px 10px 21px;
		  display: block;
		  color: #fff;
		  text-decoration: none;
	  }

	  .nav-left-container li ul li:hover {
		  background-color: #80b7ea;
	  }
	  .on{
		  background-color: #80b7ea;
	  }

	  .nav-left-container .active>p {
		  color: #ffffff;
	  }

	  .nav-left-container-small li p {
		  font-size: 10px;
		  padding: 7px 15px 7px 52px;
	  }

	  .nav-left-container-small {
		  display: none;
	  }

	  .fr {

		  position: absolute !important;
		  right: 10px;
		  top: 8px !important;
	  }

	  nav {
		  position: absolute;
		  left: 315px;
		  top: 76px;

	  }

	  nav ul {
		  display: flex;
		  cursor: pointer;
		  justify-content: space-around;

	  }

	  nav ul li {
		  width: 100px;
		  text-align: center;
		  border-right: 1px solid #000;
		  font-size: 14px;
	  }

	  .kms_content,.kms_content1 {
		  width: 640px;
		  height: 400px;
		  /* border: 5px dashed  #abdeff; */
		  margin: 0 auto;
		  position: absolute;
		  top: 103px;
		  left: 302px;
	  }

	  .kms_content div ,.kms_content1 div{
		  display: none;
	  }

	  .kms_content .div_show,.kms_content1 .div_show {
		  display: block;
	  }

	  .tab {
		  color: #F01F4B
	  }

	  .pdf embed,
	  .swf embed,.swf2 embed {
		  width: 100%;
		  height: 400px;
	  }
  </style>
  <section>
  	<div >
  		<img src="/hsimg/course1.jpg" class="img-responsive">
  		<div style="font-size:22px;font-weight: 500;text-align: center;margin-top:2%;">
  			<b style="font-size:22px;">特色课程</b>
  				<div><font style="color:#d9d9d9;">————————————</font></div>
  			<div style="margin-top: 1.5%;">
  				<div style="float:left;width:12.5%;text-align:center;">&nbsp;</div>
  				<div id="yw" style="float:left;width:10%;text-align:center;margin-left:12.4%;cursor: pointer;">
  				<font class="yw" style="font-size:15px;height:30px;line-height:30px;">趣味大语文</font>
  				</div>
  				<div id="sx" style="float:left;width:10%;text-align:center;margin-left:10%;cursor: pointer;">
  					<font class="sx" style="font-size:15px;height:30px;line-height:30px;">思维培优数学</font>
  				</div>
  				<div id="yy" style="float:left;width:10%;text-align:center;margin-left:10%;cursor: pointer;"> 
  					<font class="yy" style="font-size:15px;height:30px;line-height:30px;">戏剧英语</font>
  				</div>
  			</div>
  				<div style="margin-top:1.5%;"><font style="color:#d9d9d9;">———————————————————————————————————————————————————————————————————————————————————</font></div>
  		</div>

  	</div>
	  <!-- 语文开始 -->
	  <div class="courseyw">
		  <div style="width: 100%;">
			  <div style="width: 1120px;  margin: 0 auto;">
				  <img src="ywtitle.jpg" alt="">

				  <p class="yw_content">翰师问鼎教育旗下的趣味大语文品牌，是由重点中小学一线名师搭建课程大纲985知名高校中文系硕士博士团队研发的课程体系。
“趣味大语文”体系，针对特定年龄段小学3-6年级，主要为传统文化素养、古代文学、外国文学、红色经典与世界电影赏析、阅读写作几大模块。这几大模块形成“金字塔结构”针对不同基础和需求的孩子情况，匹配最高效的课程。</p>


				  <div class="kms_system">
					  <div class="kms_conten1">
						  <ul class="nav-left-container">
							  <li>
								  <p>
									  <span class="glyphicon glyphicon-home f12" aria-hidden="true"></span>
									  <span>查看课程</span>
									  <span class="glyphicon glyphicon-menu-right f12 fr" aria-hidden="true"></span>
								  </p>
							  </li>

							  <li class="kms_act active">
								  <!-- li的class为active表示点击选中 -->
								  <p>
									  <!-- aria-hidden字符串。可选值为true和false,true表示元素隐藏(不可见)，false表示元素可见。 -->
									  <span class="glyphicon glyphicon-education f12" aria-hidden="true"></span>
									  <span>趣味大语文</span>
									  <span class="glyphicon glyphicon-menu-right f12 fr" aria-hidden="true"></span>
								  </p>
								  <ul class="nav-left-container-small">
									  <!-- aria-expanded表示展开状态。默认为undefined, 表示当前展开状态未知。其它可选值：true表示元素是展开的；false表示元素不是展开的。 -->
									  <li class="J_menuItem on"  data-id='1'>
										  <p >三年级</p>
									  </li>
									  <li  class="J_menuItem" data-id='2'>
										  <p>四年级</p>
									  </li>
									  <li  class="J_menuItem" data-id="3">
										  <p>五年级</p>
									  </li>
									  <li class="J_menuItem" data-id="4">
										  <p >六年级</p>
									  </li>
								  </ul>
							  </li>

							  <li>
								  <p>
									  <span class="glyphicon glyphicon-search f12" aria-hidden="true"></span>
									  <span>思维培优数学</span>
									  <span class="glyphicon glyphicon-menu-right f12 fr" aria-hidden="true"></span>
								  </p>

							  </li>
							  <li>
								  <p>
									  <span class="glyphicon glyphicon-bold f12" aria-hidden="true"></span>
									  <span>KB课程</span>
									  <span class="glyphicon glyphicon-menu-right f12 fr" aria-hidden="true"></span>
								  </p>
							  </li>
							  <li>
								  <p>
									  <span class="glyphicon glyphicon-font f12" aria-hidden="true"></span>
									  <span>Phonics自然拼读</span>
									  <span class="glyphicon glyphicon-menu-right f12 fr" aria-hidden="true"></span>
								  </p>
								  >
							  </li>

							  <li>
								  <p>
									  <span class="glyphicon glyphicon-book f12" aria-hidden="true"></span>
									  <span>全部备课</span>
									  <span class="glyphicon glyphicon-menu-right f12 fr" aria-hidden="true"></span>
								  </p>
							  </li>
							  <li>
								  <p>
									  <span class="glyphicon glyphicon-list-alt f12" aria-hidden="true"></span>
									  <span>个性化方案</span>
									  <span class="glyphicon glyphicon-menu-right f12 fr" aria-hidden="true"></span>
								  </p>
							  </li>
							  <li>
								  <p>
									  <span class="glyphicon glyphicon-heart f12" aria-hidden="true"></span>
									  <span>精选视频</span>
									  <span class="glyphicon glyphicon-menu-right f12 fr" aria-hidden="true"></span>
								  </p>
							  </li>
						  </ul>
						  <nav>
							  <ul>
								  <li class="tab">授课视频</li>
								  <li class="action">授课教案</li>
								  <li>ppt课件</li>
							  </ul>
						  </nav>
						  <div class="kms_content">
							  <div class="div_show">
								  <video src="http://kms.hswdjy.com/web/video/yw3qiu9.mp4" style="width:640px; height:360px;
                     object-fit: fill;position: absolute" controls="" id="video1">
								  </video>
							  </div>
							  <div class="pdf">
								  <embed class="pdf" src="http://kms.hswdjy.com/web/pdf/yw3qiu9.pdf" />
							  </div>
							  <div class="swf">
								  <embed src="http://kms.hswdjy.com/web/yw3qiu10.swf" />
							  </div>

						  </div>

					  </div>

					  <img src="kms_lead1.png" alt="" class="kes_lead1">
					  <img src="kms_lead2.png" alt="" class="kes_lead2">
					  <img src="ksm_lead3.png" alt="" class="kes_lead3">
				  </div>
				  <div style="text-align: center;font-size: 28px;margin-top: 30px;">
					  每月<span style="color:red">20名</span>KMS校区智能孵化系统账号免费申请
				  </div>
				  <div style="text-align: center;font-size: 28px;margin-top: -50px;">
					  <img src="kms_btn.png" alt="" class="coursesq">
				  </div>



				  <img src="ywcontnet2.jpg" alt="" width="100%">
			  </div>
		  </div>
	  </div>
	  <!-- 语文结束 -->
	  <!-- 数学开始 -->
	  <div class="coursesx">
		  <!--  -->
		  <div style="width: 100%;" >
			  <div style="width: 1120px;  margin: 0 auto;">
				  <img src="sxtt.jpg" alt="">
				  <div class="ss_content">
					  <p style="text-indent: 2em;height: 180px;">翰师问鼎教育思维培优数学主打趣味教学、迅速提分、培养思维三个方面。经十余年实战经验独家打造集全国31个省市自治区直辖市6大主流版本教材核心考点普适性数学培优课程体系。通过儿童喜闻乐见的故事引入、全场景教学、以及爆笑课堂的段子手老师，取得了良好的口碑与教学成果。</p>
				  </div>
				  <div class="kms_system">

					  <div class="kms_conten1">
						  <ul class="nav-left-container">
							  <li>
								  <p>
									  <span class="glyphicon glyphicon-home f12" aria-hidden="true"></span>
									  <span>查看课程</span>
									  <span class="glyphicon glyphicon-menu-right f12 fr" aria-hidden="true"></span>
								  </p>
							  </li>

							  <li>
								  <!-- li的class为active表示点击选中 -->
								  <p>
									  <!-- aria-hidden字符串。可选值为true和false,true表示元素隐藏(不可见)，false表示元素可见。 -->
									  <span class="glyphicon glyphicon-education f12" aria-hidden="true"></span>
									  <span>趣味大语文</span>
									  <span class="glyphicon glyphicon-menu-right f12 fr" aria-hidden="true"></span>
								  </p>
							  </li>

							  <li  class="kms_act active">
								  <p>
									  <span class="glyphicon glyphicon-search f12" aria-hidden="true"></span>
									  <span>思维培优数学</span>
									  <span class="glyphicon glyphicon-menu-right f12 fr" aria-hidden="true"></span>
								  </p>

								  <ul class="nav-left-container-small">
									  <li class="J_menuItem1 on" data-id="5">
										  <p >三年级</p>
									  </li>
									  <li class="J_menuItem1" data-id="6">
										  <p >四年级</p>
									  </li>
									  <li class="J_menuItem1" data-id="7">
										  <p >五年级</p>
									  </li>
									  <li class="J_menuItem1" data-id="8">
										  <p >六年级</p>
									  </li>
								  </ul>
							  </li>
							  <li>
								  <p>
									  <span class="glyphicon glyphicon-bold f12" aria-hidden="true"></span>
									  <span>KB课程</span>
									  <span class="glyphicon glyphicon-menu-right f12 fr" aria-hidden="true"></span>
								  </p>

							  </li>
							  <li>
								  <p>
									  <span class="glyphicon glyphicon-font f12" aria-hidden="true"></span>
									  <span>Phonics自然拼读</span>
									  <span class="glyphicon glyphicon-menu-right f12 fr" aria-hidden="true"></span>
								  </p>
							  </li>

							  <li>
								  <p>
									  <span class="glyphicon glyphicon-book f12" aria-hidden="true"></span>
									  <span>全部备课</span>
									  <span class="glyphicon glyphicon-menu-right f12 fr" aria-hidden="true"></span>
								  </p>
							  </li>
							  <li>
								  <p>
									  <span class="glyphicon glyphicon-list-alt f12" aria-hidden="true"></span>
									  <span>个性化方案</span>
									  <span class="glyphicon glyphicon-menu-right f12 fr" aria-hidden="true"></span>
								  </p>
							  </li>
							  <li>
								  <p>
									  <span class="glyphicon glyphicon-heart f12" aria-hidden="true"></span>
									  <span>精选视频</span>
									  <span class="glyphicon glyphicon-menu-right f12 fr" aria-hidden="true"></span>
								  </p>
							  </li>
						  </ul>
						  <nav>
							  <ul>
								  <li class="li1 tab">授课视频</li>
								  <!-- <li class="action">授课教案</li> -->
								  <li class="li1">ppt课件</li>
							  </ul>
						  </nav>
						  <div class="kms_content1">
							  <div class="div_show">
								  <video src="http://kms.hswdjy.com/web/video/jmt.mp4" style="width:640px; height:360px;
                              object-fit: fill;position: absolute" controls="" id="video2">
								  </video>
							  </div>

							  <div class="swf2">
								  <embed src="http://kms.hswdjy.com/web/jmt.swf" />
							  </div>

						  </div>

					  </div>

					  <!-- <img src="kms_lead1.png" alt="" class="kes_lead1">
  					<img src="kms_lead2.png" alt="" class="kes_lead2">
  					<img src="ksm_lead3.png" alt="" class="kes_lead3"> -->
				  </div>
				  <div style="text-align: center;font-size: 28px;margin-top: 30px;">
					  每月<span style="color:red">20名</span>KMS校区智能孵化系统账号免费申请
				  </div>
				  <div style="text-align: center;font-size: 28px;margin-top: -50px;">
					  <img src="kms_btn.png" alt="" class="coursesq">
				  </div>

				  <img src="sxcc.jpg" alt="" width="100%">
			  </div>
		  </div>
	  </div>
	  <!--   	数学结束 -->
<!-- 英语开始 -->
		<div class="courseyy">
				<div style="width: 100%;" class="yy_content">
        <div style="width: 1120px;  margin: 0 auto;" >
            <img src="yytitle.jpg" alt="" style="margin:40px 0px 40px 290px;">
            <p>戏剧英语致力于打造符合素质教育和应试教育的教学内容，配之以独特的教学方法，过程中注重趣味性和自我解放，致力于达到学生英语听说读写综合应试能力的提升，表达自我、感知世界、内心价值等素质能力的建立。</p>

        </div>
        <img src="yycontent.jpg" alt="" width="100%">
    </div>
		</div>
<!-- 英语结束 -->
  </section>
  <script>
	  var flag = true
	  var myvideo = document.getElementById("video1");
	  var myvideo1 = document.getElementById("video2");

	  function active() {
		  $('.active').children('.nav-left-container-small').slideDown()
	  }
	  active()
	  //引导页面
	  $('.kes_lead1').click(function() {
		  $(this).hide();
		  $('.kes_lead2').show()
	  })
	  $('.kes_lead2').click(function() {
		  $(this).hide();
		  $('.kes_lead3').show()
	  })
	  $('.kes_lead3').click(function() {
		  $(this).hide();
		  flag = true
	  })

	  //tab切换
	  $('nav ul li').click(function(event) {
		  $(this).addClass('tab');
		  $(this).siblings().removeClass('tab');
		  myvideo.pause();
		  $('.kms_content div').eq($(this).index()).addClass('div_show');
		  $('.kms_content div').eq($(this).index()).siblings().removeClass('div_show');
	  })
	  $('nav ul .li1').click(function(event) {
		  $(this).addClass('tab');
		  $(this).siblings().removeClass('tab');
		  myvideo1.pause();
		  $('.kms_content1 div').eq($(this).index()).addClass('div_show');
		  $('.kms_content1 div').eq($(this).index()).siblings().removeClass('div_show');
	  })

	  //修改视频
	  const actions = new Map([
		  [1,
			  ['http://kms.hswdjy.com/web/video/yw3qiu9.mp4',
				  '<embed class="pdf" src="http://kms.hswdjy.com/web/pdf/yw3qiu9.pdf" />',
				  '<embed src="http://kms.hswdjy.com/web/yw3qiu10.swf" />'
			  ]
		  ],
		  [2,
			  ['http://kms.hswdjy.com/web/video/yw4qiu1.mp4',
				  '<embed class="pdf" src="http://kms.hswdjy.com/web/pdf/yw4qiu1.pdf" />',
				  '<embed src="http://kms.hswdjy.com/web/yw4qiu1.swf" />'
			  ]
		  ],
		  [3,
			  ['http://kms.hswdjy.com/web/video/yw5qiu7.mp4',
				  '<embed class="pdf" src="http://kms.hswdjy.com/web/pdf/yw5qiu7.pdf" />',
				  '<embed src="http://kms.hswdjy.com/web/yw5qiu7.swf" />'
			  ]
		  ],

		  [4,
			  ['http://kms.hswdjy.com/web/video/yw6chun14.mp4',
				  '<embed class="pdf" src="http://kms.hswdjy.com/web/pdf/yw6chun14.pdf" />',
				  '<embed src="http://kms.hswdjy.com/web/yw6chun14.swf" />'
			  ]
		  ],
		  [5,
			  ['http://kms.hswdjy.com/web/video/jmt.mp4',
				  '',
				  '<embed src="http://kms.hswdjy.com/web/jmt.swf" />'
			  ]
		  ],
		  [6,
			  ['http://kms.hswdjy.com/web/video/gtsp.mp4',
				  '',
				  '<embed src="http://kms.hswdjy.com/web/gtsp.swf" />'
			  ]
		  ],
		  [7,
			  ['http://kms.hswdjy.com/web/video/zdynk.mp4',
				  '',
				  '<embed src="http://kms.hswdjy.com/web/zdynk.swf" />'
			  ]
		  ],

		  [8,
			  ['http://kms.hswdjy.com/web/video/lsxc.mp4',
				  '',
				  '<embed src="http://kms.hswdjy.com/web/lsxc.swf" />'
			  ]
		  ],
	  ])

	  $('.J_menuItem').click(function() {
		  var i = $(this).data('id')
		  $(this).addClass('on').siblings().removeClass('on')
		  let action = actions.get(i)
		  $('.pdf').empty()
		  $('.swf').empty()
		  $('#video1').prop('src', action[0])
		  $('.pdf').append(action[1])
		  $('.swf').append(action[2])
		  if (status > 4) {
			  console.log(status)
			  $('.action').hide()
		  } else {
			  $('.action').show()
			  console.log(status)
		  }
	  })
	  $('.J_menuItem1').click(function() {
		  var i = $(this).data('id')
		  $(this).addClass('on').siblings().removeClass('on')
		  let action = actions.get(i)
		  $('.swf2').empty()
		  $('#video2').prop('src', action[0])
		  $('.swf2').append(action[2])
		  if (status > 4) {
			  console.log(status)
			  $('.action').hide()
		  } else {
			  $('.action').show()
			  console.log(status)
		  }

	  })
  </script>
  @include('admin.foot')
