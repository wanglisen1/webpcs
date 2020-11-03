@include('admin.head')
<div style="margin-bottom:20%;">
	<div>
        <img src="/hsimg/zx1.jpg" class="img-responsive">
        <div style="font-size:22px;font-weight: 500;text-align: center;margin-top:2%;">
            <b style="font-size:24px;">资讯中心</b>
                <div><font style="color:#d9d9d9;">——————</font></div>
    </div>
	</div>
	<div style="width:80%;margin-top:2%;" id="divcss5">
		<div style="float:left;"><b>&nbsp;<img src="/hsimg/shu.jpg">&nbsp;&nbsp;</b></div>
		<div style="padding-top:1px;"><b style="font-size:15px;margin-bottom:-10px;">文章列表</b></div>
		<ul style="margin-top:2.5%;">
			@foreach($data as $k=>$v)
			<li style="float:left;color:#dddddd;">■&nbsp;&nbsp;</li>
			<li style="float:left;"><a href="/newsparticulars?id={{$v['news_id']}}" style="color:#494949;">
			{{$v['news_title']}}
			</a></li>
			<li style="float:right;">{{$v['add_time']}}</li>
			<li style="float:left;color:#ededed;width:100%;margin-top:5px;margin-bottom:5px;"><img src="/hsimg/zxxian.jpg"  class="img-responsive"></li>
			@endforeach
		</ul>
	</div>

</div>
<div style="width:300px;"  id="divcss5" > 
        {{$data->links()}}
</div>
@include('admin.foot')
