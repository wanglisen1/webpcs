	<link rel="shortcut icon" href="/hsfavicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/layuiadmin/css/font.css">
	<link rel="stylesheet" href="/layuiadmin/css/xadmin.css">
	
    <script src="/layuiadmin/js/jquery.min.js"></script>
    <script src="/layuiadmin/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/layuiadmin/js/xadmin.js"></script>

    <div class="layui-form-item" style="width:700px;margin:0 auto;margin-top: 50px;">
    <label class="layui-form-label">英语标题：</label>
    <div class="layui-input-block" >
        <input type="text" name="title" id="yy_title" lay-verify="title" autocomplete="off"  class="layui-input" value="{{$yy_title}}">
    </div>
</div>
   <div class="layui-form-item" style="width:700px;margin:0 auto;margin-top: 50px;">
    <label class="layui-form-label">英语内容：</label>
    <div class="layui-input-block" >
       <textarea name="" id="yy_content" placeholder="请输入" class="layui-textarea">{{$yy_content}}</textarea>
    </div>
</div></br></br>
	<div class="layui-col-md6" style="margin-left:300px;">
            <div class="layui-btn-container">
                <button class="layui-btn layui-btn-radius" id="btn">立即修改</button>
            </div>
        </div>

        <script src="/jquery-3.1.1.min.js"></script>
<script>
    $(function(){
        $("#btn").click(function(){
            var yy_title =$("#yy_title").val();
            var yy_content =$("#yy_content").val();

            // alert(yw_title);
            // return false;
            if(yy_title==''){
                alert('标题不能为空');
                return false;
            }if(yy_content==''){
                alert('内容不能为空');
                return false;
            }
            $.ajax({
                type: 'post',
                data:{yy_title:yy_title,yy_content:yy_content},
                dateType:'json',
                url: "/yyupdate",
                success:function(msg){
                    alert(msg.msg);
                }
            });
        })
    })
</script>

    

   
