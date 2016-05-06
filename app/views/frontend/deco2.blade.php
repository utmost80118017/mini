<!DOCTYPE html>
<html prefix='og: http://ogp.me/ns#'>
<head>
	<meta charset="UTF-8">
	<title>米築</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<meta property="og:title" content="{{$deco->name}}"></meta>
	<meta property="og:type" content="生活美學"></meta>
	<meta property="og:url" content="{{Request::url()}}"></meta>
	<meta property="og:site_name" content="米築"></meta>
	<meta property="og:description" content="{{ms_str($deco->content,200)}}"></meta>


    <link rel="stylesheet" type="text/css" href="/css/default.css">
    <link rel="stylesheet" type="text/css" href="/css/deco2.css">

    <script src="/js/jquery.js"></script>
		<script src="/js/jquery.flexslider-min.js"></script>
    <script src="/js/Crawler.js"></script>
    <script src="http://malsup.github.com/jquery.cycle2.js"></script>

    <script src="/js/script.js"></script>
		<style media="screen">
			div.articleControllerList{
				float:right;
			}
		</style>
</head>
<body>
<div id="container">
		@include("frontend.comm.top")

    @include("frontend.comm.top_ad",array("sql_data"=>$ad_22))
    <img id="toTop" src="/images/toTop.png">

	@include("frontend.comm.row-marquee",array("m"=>"m3" , "c_sql"=>$ad_8))

    <div id="main" class="clearfix">
        <section>
            <!-- <p>HOME & LIVING</p> -->
            <span>{{$deco->name}}</span>

						@if( !empty($deco->image) AND File::exists( public_path().$deco->image))
						<!--
							<img src="/public{{$deco->image}}">
						-->
						@endif

        </section>

        <article>
					<div class="articleControllerList">
							@if($deco->videoLink)
								<a href="{{$deco->videoLink}}" target="_new" >
										<img src="/images/case/icon4.png">
								</a>
							@endif

							@if($deco->vr360Link)
								<a href="{{$deco->vr360Link}}"  target="_new" >
									<img src="/images/case/icon3.png">
								</a>
							@endif

							<a href="javascript: void(window.open('http://www.facebook.com/share.php?u='.concat(encodeURIComponent(location.href)) ));"  target="_new" >
									<img src="/images/case/icon2.png">
							</a>





							<a href="http://line.naver.jp/R/msg/text/?{{$deco->name}}%0D%0A{{Request::url()}}" rel="nofollow" >
								<img src="/images/case/icon1.png"   alt="用LINE傳送" />
							</a>





					</div>
            {{$deco->content}}
        </article>
    </div>

    @include("frontend.comm.footer")
</div>
</body>
</html>
