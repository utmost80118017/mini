<!DOCTYPE html>
<html prefix='og: http://ogp.me/ns#'>
<head>
	<meta charset="UTF-8">
	<title>米築</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="/favicon.ico">	 
    <link rel="stylesheet" type="text/css" href="/css/default.css">
    <link rel="stylesheet" type="text/css" href="/css/about.css">

    <script src="/js/jquery.js"></script>
		<script src="/js/jquery.flexslider-min.js"></script>
    <script src="/js/Crawler.js"></script>
		<script src="http://malsup.github.com/jquery.cycle2.js"></script>
    <script src="/js/script.js"></script>


</head>
<body>
<div id="container">
	@include("frontend.comm.top")

    @include("frontend.comm.top_ad",array("sql_data"=>$ad_26))

    <img id="toTop" src="images/toTop.png">



		<div id="main" class="clearfix">
        <section>
            <p>ABOUT US</p>
            <span>關於米築</span>

            <div><img src="/images/about/email.png"></div>
            <p class="content">臺博館群各建築是本次「解構：李乾朗手繪臺博建築特展」的主角，在李教授的手繪中，它同時來表達創作者對這些歷史建築的歷史性、空間性和文化性的表達和詮釋，展覽中的建築畫，強調了「臺博館本館」和「鐵道部」的建築細節的美學藝術和高水準的建築工藝；南門的「小白宮」則利用了清代臺北府城牆的砌石建造的延展的歷史脈絡，而「土銀展示館」則表現了現代建築中殖民主義下的折衷主義、風格及異國情調。這些建築同時也反映了臺灣在該時期從清朝到日據時期，由農業到工商社會、工業初期社會的材料、工藝、及美學風格上的轉變，及其在「臺北城」到日據「三市街」時期城市空間的變遷和都市形式的轉變。</p>
        </section>

        <article class="clearfix">
            <p>這真的是人之常情，片中威爾史密斯〔Will Smith〕飾演的主角醫生，他並沒有要攻擊ＮＦＬ之意，也不討厭足球，不是要讓美式足球毀掉，他只是覺得球員有權利要知道這件事他們知道這項運動可能會斷手斷腳，但不知道會讓他們健忘甚至發瘋到自殺…如果他們都知道，還選擇要打球，那是他們的選擇。可是若刻意隱瞞讓大家覺得美式足球沒什麼慢性影響，就像是騙士兵說是去戡察結果是送到火線上九死一生一樣，騙去和自願去之間還是有很大的差別的。醫生只是想要讓球員或是說世人得到足夠的資訊來自己做判斷，而非是他自己判定美式足球不好，很多運動都有風險，但至少參與的選手都自己有足夠的資訊來衡量得失。</p>
            <div><img src="/images/about/1.jpg"></div>
        </article>

        <aside>
            <div><img src="/images/about/2.jpg"></div>
            <p>臺博館群各建築是本次「解構：李乾朗手繪臺博建築特展」的主角，在李教授的手繪中，它同時來表達創作者對這些歷史建築的歷史性、空間性和文化性的表達和詮釋，展覽中的建築畫，強調了「臺博館本館」和「鐵道部」的建築細節的美學藝術和高水準的建築工藝；南門的「小白宮」則利用了清代臺北府城牆的砌石建造的延展的歷史脈絡，而「土銀展示館」則表現了現代建築中殖民主義下的折衷主義、風格及異國情調。這些建築同時也反映了臺灣在該時期從清朝到日據時期，由農業到工商社會、工業初期社會的材料、工藝、及美學風格上的轉變，及其在「臺北城」到日據「三市街」時期城市空間的變遷和都市形式的轉變。</p>
        </aside>

    </div>

   @include("frontend.comm.footer")
</div>
</body>
</html>
