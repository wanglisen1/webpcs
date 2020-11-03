<link rel="stylesheet" href="https://www.jq22.com/jquery/bootstrap-3.3.4.css">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .banner {
            width: 100%;
            height: 500px;
        }

        .kms_modle {
            height: 760px;
            width: 100%;
            background: #fff;
        }

        .kms_modle1 {
            width: 100%;
            height: 553px;
            background: #f7fbff;
            overflow: hidden;
        }

        .kms_modle2 {
            width: 100%;
            height: 553px;
            background: #fff;
            overflow: hidden;
        }

        .kms_conten {
            display: flex;
            width: 1073px;
            margin: 0 auto;
            margin-top: 115px;
            justify-content: space-between;
        }

        .kms_title {
            width: 282px;
            height: 81px;
            font-size: 35px;
            font-weight: 400;
            color: rgba(0, 0, 0, 1);
            text-align: right;
            margin-left: 120px;
            margin-bottom: 32px;
        }

        .kms_title1 {
            width: 320px;
            height: 81px;
            font-size: 35px;
            font-weight: 400;
            color: rgba(0, 0, 0, 1);
            margin-bottom: 32px;
        }

        .kms_inof {
            width: 401px;
            height: 112px;
            font-size: 18px;
            font-weight: 400;
            color: rgba(113, 113, 113, 1);
            line-height: 31px;
        }

        .kms_img {
            width: 579px;
            height: 316px;
        }

        .kms_btn {
            width: 150px;
            height: 42px;
            background: linear-gradient(179deg, rgba(77, 176, 227, 1), rgba(81, 113, 249, 1));
            border-radius: 10px;
            font-size: 24px;
            font-weight: 400;
            color: rgba(255, 255, 255, 1);
            line-height: 42px;
            text-align: center;
            margin: 0 auto;
            margin-top: 40px;
            cursor: pointer;
        }

        .kms_js p {
            width: 1019px;
            height: 156px;
            font-size: 18px;
            font-family: Microsoft YaHei;
            font-weight: 300;
            color: rgba(0, 0, 0, 1);
            line-height: 35px;
            margin: 0 auto;
            text-align: justify;
            text-indent: 2em;
            margin-top: 65px;
            padding-bottom: 60px;
            border-bottom: 1px solid #c9c9c9;
        }

        .kms_ys {
            width: 685px;
            margin: 0 auto;
            text-align: center;
        }

        .kms_ys h1 {
            font-size: 31px;
            margin-top: 75px;
            margin-bottom: 40px;
            text-align: center;
            color: rgba(0, 0, 0, 1);

        }

        .kms_ys p {
            font-size: 19px;
            color: rgba(127, 127, 131, 1);
            margin-bottom: 70px;

        }

        .kms_nav {
            display: flex;
            justify-content: space-between;
            width: 595px;
            margin: 0 auto;
        }

        .kms_nav div {
            text-align: center;
            cursor: pointer;
            transition: all .3s ease;
        }

        .kms_nav div:hover {
            transform: scale(1.2);
        }

        .kms_nav p {
            font-size: 19px;
            margin-top: 26px;
            font-weight: 400;
            color: rgba(2, 2, 2, 1);

        }
        .kmsbanner{
            width: 100%;
            height: 464px;
            background: url('kmsbgbr.jpg') no-repeat 100% 100%;
              background-position: center;
        }
        .kmsbann{
            width: 1112px;
            
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin:0 auto
        }
    </style>
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

        .kms_conten1{
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
        .kes_lead3{
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

        .kms_content {
            width: 640px;
            height: 400px;
            /* border: 5px dashed  #abdeff; */
            margin: 0 auto;
            position: absolute;
            top: 103px;
            left: 302px;
        }

        .kms_content div {
            display: none;
        }

        .kms_content .div_show {
            display: block;
        }

        .tab {
            color: #F01F4B
        }
        .pdf embed,.swf embed{
width: 100%;
height: 400px;
        }
    </style>
@include('admin.head')
<div class="kmsbanner">
    <div class="kmsbann">
      <img src="kmstag.png" alt="">
      <div style="width:644px;height:365px;margin-top:60px">
            <video src="http://kms.hswdjy.com/KMS.mp4"
            style="width:100%; height:100%; object-fit: fill;"
             controls
             poster="kmsvb.png"
         
             
             ></video>
             <!-- <div id="vbplay" onclick="isPlay()"style="position: absolute;top: 34%;left: 44%">
                 <img src="/xw/vbicon.png" alt="">
             </div> -->
      </div>
    </div>
    
</div>
<div class="kms_modle">
    <div class="kms_js">
        <p>
            KMS校区智能孵化系统，专注于校区全业务培训服务体系，为校区打造从教研教学、教师备课、运营服务、岗位培训的全业务信息化服务平台。校区可设置阶梯型管理课程权限，提高课程保密度，快速提升校区教师、运营、招生、市场等各模块的人才培养。大大提高校区团队的稳定性。
            KMS校区智能孵化系统包含翰师问鼎全部课件、教案、说课视频。总部定期更新、升级课程，保障课程质量及时效性，为您校区的教学质量保驾护航。
        </p>

    </div>
    <div class="kms_ys">
        <h1>轻松打造在线高效学习平台</h1>
        <p>全套课程产品课件、教案、音频、视频、备课、培训文件，快速提升培训管理效率</p>
    </div>
    <div class="kms_nav">
        <div>
            <img src="/luodi/KMS_04.jpg" alt="">
            <p>培训标准化</p>
        </div>
        <div>
            <img src="/luodi/KMS_06.jpg" alt="">
            <p>2000+优质课程</p>
        </div>
        <div>
            <img src="/luodi/KMS_08.jpg" alt="">
            <p>校区量身打造</p>
        </div>

    </div>
</div>
<div class="kms_system">
        <div class="kms_conten1">
            <ul class="nav-left-container">
                <li>
                    <p   >
                        <span class="glyphicon glyphicon-home f12" aria-hidden="true"></span>
                        <span>查看课程</span>
                        <span class="glyphicon glyphicon-menu-right f12 fr" aria-hidden="true"></span>
                    </p>
                </li>

                <li class="kms_act active">
                    <!-- li的class为active表示点击选中 -->
                    <p   >
                        <!-- aria-hidden字符串。可选值为true和false,true表示元素隐藏(不可见)，false表示元素可见。 -->
                        <span class="glyphicon glyphicon-education f12" aria-hidden="true"></span>
                        <span>趣味大语文</span>
                        <span class="glyphicon glyphicon-menu-right f12 fr" aria-hidden="true"></span>
                    </p>
                    <ul class="nav-left-container-small">
                        <!-- aria-expanded表示展开状态。默认为undefined, 表示当前展开状态未知。其它可选值：true表示元素是展开的；false表示元素不是展开的。 -->
                        <li >
                            <p class="J_menuItem"   data-id='1' >三年级</p>
                        </li>
                        <li>
                            <p class="J_menuItem"    data-id='2' >四年级</p>
                        </li>
                        <li >
                            <p class="J_menuItem"     data-id="3">五年级</p>
                        </li>
                        <li >
                            <p class="J_menuItem"     data-id="4">六年级</p>
                        </li>
                    </ul>
                </li>

                <li class="kms_act">
                    <p  >
                        <span class="glyphicon glyphicon-search f12" aria-hidden="true"></span>
                        <span>思维培优数学</span>
                        <span class="glyphicon glyphicon-menu-right f12 fr" aria-hidden="true"></span>
                    </p>

                    <ul class="nav-left-container-small">
                        <li>
                            <p class="J_menuItem"    data-id="5">三年级</p>
                        </li>
                        <li>
                            <p class="J_menuItem"    data-id="6">四年级</p>
                        </li>
                        <li>
                            <p class="J_menuItem"    data-id="7">五年级</p>
                        </li>
                        <li>
                            <p class="J_menuItem"    data-id="8">六年级</p>
                        </li>
                    </ul>
                </li>
                <li class="kms_act">
                    <p   >
                        <span class="glyphicon glyphicon-bold f12" aria-hidden="true"></span>
                        <span>KB课程</span>
                        <span class="glyphicon glyphicon-menu-right f12 fr" aria-hidden="true"></span>
                    </p>
                    <ul class="nav-left-container-small">
                        <li>
                            <p class="J_menuItem"   >K1</p>
                        </li>
                        <li>
                            <p class="J_menuItem"   >K2</p>
                        </li>
                        <li>
                            <p class="J_menuItem"   >K3</p>
                        </li>
                        <li>
                            <p class="J_menuItem"   >K4</p>
                        </li>
                    </ul>
                </li>
                <li class="kms_act">
                    <p   >
                        <span class="glyphicon glyphicon-font f12" aria-hidden="true"></span>
                        <span>Phonics自然拼读</span>
                        <span class="glyphicon glyphicon-menu-right f12 fr" aria-hidden="true"></span>
                    </p>
                    <ul class="nav-left-container-small">
                        <li>
                            <p class="J_menuItem"   >P1</p>
                        </li>
                        <li>
                            <p class="J_menuItem"   >P2</p>
                        </li>
                        <li>
                            <p class="J_menuItem"   >P3</p>
                        </li>
                        <li>
                            <p class="J_menuItem"   >P4</p>
                        </li>
                    </ul>
                </li>

                <li>
                    <p   >
                        <span class="glyphicon glyphicon-book f12" aria-hidden="true"></span>
                        <span>全部备课</span>
                        <span class="glyphicon glyphicon-menu-right f12 fr" aria-hidden="true"></span>
                    </p>
                </li>
                <li>
                    <p   >
                        <span class="glyphicon glyphicon-list-alt f12" aria-hidden="true"></span>
                        <span>个性化方案</span>
                        <span class="glyphicon glyphicon-menu-right f12 fr" aria-hidden="true"></span>
                    </p>
                </li>
                <li>
                    <p   >
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
                    <video src="http://kms.hswdjy.com/web/video/yw3qiu9.mp4"
                     style="width:640px; height:360px;
                     object-fit: fill;position: absolute"
                     controls="" id="video1">
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
        <img src="kms_btn.png" alt="" id="ljsq">
    </div>

<div class="kms_modle1" id="kms1">
    <div class="kms_conten">
        <div  id="kms1_inof">
            <p class="kms_title">
                打破时间地域限制
                让教学更简单
            </p>
            <p class="kms_inof">
                告别以往单一枯燥的文档/PPT等内容形式，通过标准化课件、图文、音频、视频、培训、课件共享等互动形式，既丰富了培训课程的可读性，也能让受培员工反复学习培训内容。
            </p>
            <div class="kms_btn">
                免费试用
            </div>

        </div>
        <div id="kms1_img">
            <img src="/luodi/KMS_14.jpg" alt="" class="kms_img">
        </div>
    </div>
</div>
<div class="kms_modle2" id="kms2">
    <div class="kms_conten" >
        <div id="kms2_img">
            <img src="/luodi/KMS_18.jpg" alt="" class="kms_img">
        </div>

        <div id="kms2_inof">
            <p class="kms_title1">

                总部课程赋能校区
                专属本地化教学资源

            </p>
            <p class="kms_inof">
                将总部教学过程中的题目、试卷、课件、教案等在系统中进行留存，校区可根据教学效果对相关教材进行个性化的整合、编排，形成一套本地化教材体系。
            </p>
            <div class="kms_btn">
                免费试用
            </div>

        </div>

    </div>
</div>
<div class="kms_modle1" id="kms3">
    <div class="kms_conten">
        <div class="kms_left" id="kms3_inof">
            <p class="kms_title" style="width: 367px; margin-left: 34px;">

                实现教学流程标准化
                教研管理效率提升70%

            </p>
            <p class="kms_inof">
                总部优秀课程完全输出共享，校区可通过总部课程制定标准化工作流程，供新老师演练复制，轻松管控校验教学工作中各个环节！ </p>
            <div class="kms_btn">
                免费试用
            </div>

        </div>
        <div  id="kms3_img">
            <img src="/luodi/KMS_22.jpg" alt="" class="kms_img">
        </div>
    </div>
</div>
<div class="kms_modle2" id="kms4">
    <div class="kms_conten">
        <div  id="kms4_img">
            <img src="/luodi/KMS_26.jpg" alt="" class="kms_img">
        </div>

        <div class="kms_right" id="kms4_inof">
            <p class="kms_title1" style="width: 350px;">

                云端集结优质教学资源
                轻松培养复制好老师

            </p>
            <p class="kms_inof">
                通过KMS校区智能孵化系统统一教研方案形成教学标准，无论哪个老师上课，都可以根据标准化的教学过程进行课堂授课，以获得最佳的教学效果。 </p>
            <div class="kms_btn">
                免费试用
            </div>

        </div>

    </div>
</div>
<div class="kms_modle1" id="kms5">
    <div class="kms_conten">
        <div class="kms_left" id="kms5_inof">
            <p class="kms_title">

                标准化培训课程
                提高员工专业技能

            </p>
            <p class="kms_inof">
                通过总部课程开发、培训计划，为校区各岗位规划成长路线，直接解决做课成本高、找课难等培训难题，从而实现培训体系化、培训效果量化
            <div class="kms_btn">
                免费试用
            </div>

        </div>
        <div id="kms5_img">
            <img src="/luodi/KMS_30.jpg" alt="" class="kms_img">
        </div>
    </div>
</div>
<div class="kms_modle2" id="kms6">
    <div class="kms_conten" >
        <div id="kms6_img">
            <img src="/luodi/KMS_34.jpg" alt="" class="kms_img">
        </div>
        <div class="kms_right"id="kms6_inof">
            <p class="kms_title1" style="width: 350px;">
                安全加密技术
                一键管理老师权限
            </p>
            <p class="kms_inof">
                一键管理受培员工与教师授课学习权限，支持自定义权限管理，剪掉繁琐流程，让整个校区培训体系变得清晰明了。</p>
            <div class="kms_btn">
                免费试用
            </div>

        </div>

    </div>
</div>

    @include('admin.foot')
<script>
    var a, b, c;
    a = $(window).height();
    $(window).scroll(function() {
        var b = $(this).scrollTop();
        $("#kms1").each(function() {
            c = $(this).offset().top;
            if(a + b > c) {
                $("#kms1_inof").addClass("animated bounceInLeft");
                $("#kms1_img").addClass("animated bounceInRight");
            }
        });
        $("#kms2").each(function() {
            c = $(this).offset().top;
            if(a + b > c) {
                $("#kms2_inof").addClass("animated bounceInRight");
                $("#kms2_img").addClass("animated bounceInLeft");
            }
        });
        $("#kms3").each(function() {
            c = $(this).offset().top;
            if(a + b > c) {
                $("#kms3_inof").addClass("animated bounceInLeft");
                $("#kms3_img").addClass("animated bounceInRight");
            }
        });
        $("#kms4").each(function() {
            c = $(this).offset().top;
            if(a + b > c) {
                $("#kms4_inof").addClass("animated bounceInRight");
                $("#kms4_img").addClass("animated bounceInLeft");
            }
        });
        $("#kms5").each(function() {
            c = $(this).offset().top;
            if(a + b > c) {
                $("#kms5_inof").addClass("animated bounceInLeft");
                $("#kms5_img").addClass("animated bounceInRight");
            }
        });
        $("#kms6").each(function() {
            c = $(this).offset().top;
            if(a + b > c) {
                $("#kms6_inof").addClass("animated bounceInRight");
                $("#kms6_img").addClass("animated bounceInLeft");
            }
        });




    });

</script>
<script>
    var flag = true
    var myvideo=document.getElementById("video1");
    $('.nav-left-container').on('click', '.kms_act', function () {
        if (flag) {
            $(this).find('.glyphicon-menu-right').removeClass('glyphicon-menu-right').addClass('glyphicon-menu-down');
            $(this).addClass('active').children('.nav-left-container-small').slideDown()

            $(this).siblings().removeClass('active').children('.nav-left-container-small').slideUp()
            $(this).siblings().find('.glyphicon-menu-down').removeClass('glyphicon-menu-down').addClass('glyphicon-menu-right ');
        }

    })
    function active() {
        $('.active').children('.nav-left-container-small').slideDown()
    }
    active()
    //引导页面
    $('.kes_lead1').click(function () {
        $(this).hide();
        $('.kes_lead2').show()
    })
    $('.kes_lead2').click(function () {
        $(this).hide();
        $('.kes_lead3').show()
    })
    $('.kes_lead3').click(function () {
        $(this).hide();
        flag = true
    })

//tab切换
    $('nav ul li').click(function (event) {
        $(this).addClass('tab');
        $(this).siblings().removeClass('tab');
        myvideo.pause();
        $('.kms_content div').eq($(this).index()).addClass('div_show');
        $('.kms_content div').eq($(this).index()).siblings().removeClass('div_show');
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
function buton(status ){
    let action = actions.get(status) 
    $('.pdf').empty()
    $('.swf').empty()
    $('video').prop('src',action[0])
    $('.pdf').append(action[1])
    $('.swf').append(action[2])
    if(status>4){
        console.log(status)
        $('.action').hide()
    }else{
        $('.action').show()
        console.log(status)
    }
}
$('.J_menuItem').click(function(){
     var i=$(this).data('id')
     buton(i)
   
})

</script>
