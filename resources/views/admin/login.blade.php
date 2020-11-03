<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <link rel="stylesheet" href="/adminlogin/c/css/bootstrap.css">
    <link rel="stylesheet" href="/adminlogin/c/login/login.css">
    <link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css">
	
    <script src="/adminlogin/j/js/jquery.js"></script>
    <script src="/adminlogin/j/js/bootstrap.js"></script>
	
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div>
        <div class="be-content pren">

            <div class="ioc_text">
                <span>请登录</span>
            </div>

            <div>
                <form action="">
                    <div class="br-content">

                         <div class="input-group mb-4 bootint">
                             <div class="input-group-prepend">
                                 <span class="input-group-text"><i class="fa fa-user"></i></span>
                             </div>
                             <input type="text" class="form-control" id="username" placeholder="用户名">
                         </div>

                         <div class="input-group mb-4 bootint">
                             <div class="input-group-prepend">
                                 <span class="input-group-text"><i class="fa fa-unlock-alt"></i></span>
                             </div>
                             <input type="password" class="form-control" id="password" placeholder="密码">
                         </div>

                        <div class="br-text">
                            
                        </div>
                        <div style="padding-top: 10px">
                            <input type="button" class="btn" id="btn" value="登录">
                        </div>
                        <div class="be-con">
                            
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
	
</body>
</html>
<script src="/jquery-3.1.1.min.js"></script>
<script>
        $(function(){
                $("#btn").click(function(){
                        var username =$("#username").val();
                        var password =$("#password").val();

                        if(username==''){
                                alert('用户名不能为空');
                                return false;
                        }if(password==''){
                                alert('密码不能为空');
                                return false;
                        }
                        $.ajax({
                                type: 'post',
                                data:{username:username,password:password},
                                dateType:'json',
                                url: "/loginadd",
                                success:function(msg){
                                        alert(msg.msg);
                                        if(msg.code==1) {
                                                window.location = '/admin';
                                        }
                                }
                        });
                })
        })
</script>
