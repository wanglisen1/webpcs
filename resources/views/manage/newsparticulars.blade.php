@include('admin.head')
<style>
    img {
	width: 100% !important;
	height:
 
}
.topcenter p:nth-child(1) img {
    height: auto;
    display: flex;
    align-items: center;
    width: 0.4rem !important;
    justify-content: center;
    padding: 0 0.08rem 0 0;
}
</style>
        <div style="margin-top:5%;">
           <img src="/hsimg/zx1.jpg" class="img-responsive">
        </div>
		<div style="width:80%;margin-top:20px;" id="divcss5" align="center">
			<b style="font-size:15px;">{{$content['news_title']}}</b>
		</div>
		<div style="width:80%;margin-top:15px;" id="divcss5" align="center">
			<b>{{$content['add_time']}}</b>
		</div>
		<div class="news_abstract" style="width:80%;margin-top:15px;" id="divcss5">
    	  {{$content['news_content']}}

    	</div>
    	<div style="width:80%;margin-top:20px;" id="divcss5">
    		<img src="/hsimg/zxsx.jpg" width="100%">
    	</div>
    	<div style="width:80%;" id="divcss5">
    		@if(empty($shang))
    			<div>
    		<a href="/newsparticulars?id={{$next['news_id']}}"><input type="submit" id="next" value="上一篇"></a>
    		<font>{{$next['news_title']}}</font>
    		</div>
    		@elseif(empty($xia))
    		<div>
    		<a href="/newsparticulars?id={{$prev['news_id']}}"><input type="submit" id="prev" value="下一篇"></a>
    		<font>{{$prev['news_title']}}</font>
    		</div>
    		@else
    		<div style="">
    		<a href="/newsparticulars?id={{$prev['news_id']}}"><input type="submit" id="prev" value="下一篇"></a>
    		<font>{{$prev['news_title']}}</font>
    		</div>
    		<div style="margin-left:60%;margin-top:-3.2%;">
    		<a href="/newsparticulars?id={{$next['news_id']}}"><input type="submit" id="next" value="上一篇"></a>
    		<font>{{$next['news_title']}}</font>
    		</div>
    		@endif
    	</div>
@include('admin.foot')
