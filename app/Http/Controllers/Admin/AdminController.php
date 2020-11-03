<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Model\UseradminModel;
use App\Model\NewsModel;
use App\Model\SxModel;
use App\Model\YyModel;
class AdminController extends Controller
{
	public function index(){
		$res=NewsModel::orderBy('news_id','desc')->limit(5)->get();
		$list=[
		  'data' => $res
		];
		return view('admin.index',$list);
	}
    
	
	public function phone(){
		        return view('admin.phone');
			 }

    //课程介绍
    public function courses(){
        return view('admin.courses');
    }
    //服务支持
    public function service(){
        return view('admin.service');
    }
    //合作加盟
    public function cooperation(){
        return view('admin.cooperation');
    }
     //关于我们
    public function about(){
        return view('admin.about');
    }
    //小问
    public function xwding(){
        return view('admin.xwding');
    }
    //双师
    public function ss(){
        return view('admin.ss');
    }
    //KMS
    public function kms(){
        return view('admin.kms');
    }
    //资讯中心
    public function information(){
        $res= NewsModel::orderBy('news_id','desc')->paginate(20);
        $list=[
            'data' => $res
        ];
        return view('admin.information',$list);
    }
     //资讯添加页面
    public function news(){
        return view('manage.news');
    }

    //上传图片
    public function uploadimg(Request $request){
        $file = request()->file('file');
        //print_r($file);die;
        $time = date('Y-m-d');
        $name = 'headPortrait/';
        $url_path = '/hswd/webpc/www.hswdedu.com/uploadimg/' . $name . $time;
        $rule = ['jpg', 'png', 'gif'];
        if ($file->isValid()) {
            if (!is_dir($url_path)) {
                mkdir($url_path, 0777, true);
            }
            $clientName = $file->getClientOriginalName();
            $file_size = $_FILES["file"]["size"];
            $extension = $file->getClientOriginalExtension();
            if (!in_array($extension, $rule)) {
                return $this->getback('0', '图片格式jpg，png，gif', '');
            } elseif ($file_size > 5242580) { // 文件太大了
                return $this->getback('0', '上传文件不能大于5MB', '');
            }
            $newName = md5(date("Y-m-d H:i:s") . $clientName) . "." . $extension;

            $namePath = $url_path . '/' . $newName;

            $path = $file -> move( $url_path , $newName );
            if ($path){

                $src = [
                    'src' => $namePath,
                    'img' => '/upload/' . $name . $time . '/' . $newName,
                ];

                return $this->getback('1', '上传成功', $src);
            }
            return $this->getback('0','参数错误，上传失败！','');
        }
    }

    //资讯添加
    public function newsadd(Request $request){
        $content=$request->input('content');
        $news_title=$request->input('news_title');
        $data=[
            'news_title' => $news_title,
            'news_content' => $content,
            'add_time' => date('Y-m-d')
            ];
        $res=NewsModel::insert($data);
         if ($res) {
                echo "<script>alert('添加成功!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
        } else {
                echo "<script>alert('添加失败!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
        }

    }

    //资讯详情
    public function newsparticulars(Request $request){
          $id=$request->input('id');
          $prev = NewsModel::where('news_id','<',$id)->max('news_id');
          $next = NewsModel::where('news_id','>',$id)->min('news_id');
          $shang=NewsModel::where('news_id',$prev)->first();
          $xia=NewsModel::where('news_id',$next)->first();
          $res=NewsModel::where('news_id',$id)->first();
        
         $list = [
            'content' => $res,
            'prev' => $shang,
            'next' => $xia,
            'shang' => $prev,
            'xia' => $next
         ];
        return view('manage.newsparticulars',$list);
    }



	public function admin(){
         session_start();
        if(empty($_SESSION["user_id"])){
            header('Location: /flogin.php');exit;
        }
        $uid=$_SESSION["user_id"];
        $uname=$_SESSION["user_name"];

         $list=[
            'sname' => $uname
         ];

		return view('admin.admin',$list);
	}
	public function login(){
		return view('admin.login');
	}

	public function loginadd(Request $request){
		$username= $request->input('username');
        $password =$request->input('password');
        //$pwd=md5($password);
        $data=UseradminModel::where('user_name',$username)->first();
        if($data['user_name']!=""){
            if($data['password'] === $password) {
                $id = $data['uid'];
                $res=UseradminModel::where('uid',$id)->first();
                $uname=$res['user_name'];
                session_start();
                $_SESSION["user_id"]=$id;
                $_SESSION["user_name"]=$uname;
                return ['code' => 1, 'msg' => '登录成功'];
            }else{
                return ['code' => 2, 'msg' => '密码不正确'];
            }
        }else{
            return ['code' => 0, 'msg' => '用户不存在'];
        }
	}

    //清除session
    public function sessiondel(Request $request){
        $qh= $request->input('qh');
        session_start();
        if(isset($_SESSION['user_id'])){
            unset($_SESSION['user_id']);
            return ['code' => 1];
        }else{
            return ['code' => 0];
        }
    }

    //语文模块修改展示
    public function ywupdatelist(){
        $res = YwModel::where('yw_id',1)->first();

        //print_r($res['yw_content']);exit;
        $list=[
            'yw_title' => $res['yw_title'],
            'yw_content' => $res['yw_content']
        ];
        return view('admin.yw.ywupdatelist',$list);
    }

    public function ywupdate(Request $request){
         $yw_title= $request->input('yw_title');
         $yw_content= $request->input('yw_content');
         $res=YwModel::where('yw_id',1)->update(['yw_title'=>$yw_title,'yw_content'=>$yw_content]);
        if ($res) {
            return ['code' => 1, 'msg' => '修改成功'];
        } else {
            return ['code' => 0, 'msg' => '修改失败,您并没有改动信息'];
        }
    }

    public function ywupdateimagelist(){
        return view('admin.yw.ywupdateimagelist');
    }

    public function ywupdateimage(Request $request){
        $file=$request->file('file')->store('file');
        
        $res=YwModel::where('yw_id',1)->update(['yw_image'=>$file]);
         if ($res) {
             echo "<script> alert('修改成功');parent.location.href='/admin'; </script>";
         }else{
            echo "<script> alert('修改失败');parent.location.href='/admin'; </script>";
         }

    }

    //数学模块修改展示
    public function sxupdatelist(){
        $res = SxModel::where('sx_id',1)->first();

        $list=[
            'sx_title' => $res['sx_title'],
            'sx_content' => $res['sx_content']
        ];
        return view('admin.sx.sxupdatelist',$list);
    }

    public function sxupdate(Request $request){
         $sx_title= $request->input('sx_title');
         $sx_content= $request->input('sx_content');
         $res=SxModel::where('sx_id',1)->update(['sx_title'=>$sx_title,'sx_content'=>$sx_content]);
        if ($res) {
            return ['code' => 1, 'msg' => '修改成功'];
        } else {
            return ['code' => 0, 'msg' => '修改失败,您并没有改动信息'];
        }
    }

    public function sxupdateimagelist(){
        return view('admin.sx.sxupdateimagelist');
    }

    public function sxupdateimage(Request $request){
        $file=$request->file('file')->store('file');
        
        $res=SxModel::where('sx_id',1)->update(['sx_image'=>$file]);
         if ($res) {
             echo "<script> alert('修改成功');parent.location.href='/admin'; </script>";
         }else{
            echo "<script> alert('修改失败');parent.location.href='/admin'; </script>";
         }

    }

    //英语模块修改展示
    public function yyupdatelist(){
        $res = YyModel::where('yy_id',1)->first();

        //print_r($res['yw_content']);exit;
        $list=[
            'yy_title' => $res['yy_title'],
            'yy_content' => $res['yy_content']
        ];
        return view('admin.yy.yyupdatelist',$list);
    }

    public function yyupdate(Request $request){
         $yy_title= $request->input('yy_title');
         $yy_content= $request->input('yy_content');
         $res=YyModel::where('yy_id',1)->update(['yy_title'=>$yy_title,'yy_content'=>$yy_content]);
        if ($res) {
            return ['code' => 1, 'msg' => '修改成功'];
        } else {
            return ['code' => 0, 'msg' => '修改失败,您并没有改动信息'];
        }
    }

    public function yyupdateimagelist(){
        return view('admin.yy.yyupdateimagelist');
    }

    public function yyupdateimage(Request $request){
        $file=$request->file('file')->store('file');
        
        $res=YyModel::where('yy_id',1)->update(['yy_image'=>$file]);
         if ($res) {
             echo "<script> alert('修改成功');parent.location.href='/admin'; </script>";
         }else{
            echo "<script> alert('修改失败');parent.location.href='/admin'; </script>";
         }

    }

}
