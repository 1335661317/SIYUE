<?php ob_start();
//准备数据
$a = array(
	"或许前路永夜，即便如此我也要前进，因为星光即使微弱也会为我照亮前路",
	"你的所言所行，全都闪烁着光芒，太过刺目，于是我闭上双眼，但内心还是无法停止对你的憧憬",
	"莫扎特曾经说过大胆地踏上旅途吧，我不知道路途的前方究竟有什么，但是，我们还是迈出了步伐，我们仍在旅途之中",
	"你驻足于春色中，于那独一无二的春色之中",
	"每当心情郁闷的时候，用手托腮就好，手臂会因为帮上忙而开心的",
	"和他相遇的瞬间，我的人生就改变了。所见所闻所感，目之所及全都开始变得多姿多彩起来，全世界，都开始发光发亮！",
	"干燥的空气，尘埃的味道，我在其中…踏上旅途",
	"看吧，星星只有在夜里才璀璨夺目啊。",
	"在美丽的谎言中，一个走出了深渊，一个走向了天堂",
	"苦恼着，歇斯底里着，痛苦着，不断挣扎的数月时间，这一切会在未来的某一瞬间得到回报。我们或许就是被那个瞬间迷住的，一种无可救药的生物吧",
	"喜欢的人喜欢别人不是很正常吗",
	"春天的最后一场雪，你我的最后一次相聚，能遇见你是最幸福的事了，就此分别吧！请继续向前，迎接樱花漫溢的四月，但请不要忘记我，友人A……",
	"你这样，在不在都一样啊,在和不在都一个样的话，那就永远在一起吧，一直留在你身边",
	"别迷惘，别烦恼，加速吧，只要行动就好，别停下，迷惘什么的一点都不像你，像那样纵身轻跃，拾级而上，就像那一天一样，让我再次追逐你的身影，我的英雄",
	"星星在你的头顶上闪耀着，与你交互诉说的话语，一句一句地，如同星点般翩然落至眼前",
	"仿佛要消失般的羸弱，但是，仍旧拼命绽放着光芒。怦怦，怦怦，如同心跳一般，这就是生命之灯",
	"四月是你的谎言，我知道...是谎言就一定会有被揭穿的时候。",
	"我能想起来的一直都是你的背影",
	"人啊，总是盲目地去爱啊……",
	"正因为有了音乐，才有了相遇的瞬间，有了相会的感动，有了相逢的人们，有了邂逅的思念。",
	"或许前方只有...伸手不见五指的夜路，即使如此，我还是要充满信心、继续向前，相信星星的光芒...多少会照亮前方的道路，走吧！我们踏上旅程吧！",
	"是你的错，这一切全都是你的错。我像这样苟延残喘地挣扎着，执着于活下去也好，全都是你的错，是你让我对和你共同度过的时间产生了留恋",
	"Eloim Essaim Eloim Essaim 请聆听我的请求",
	"为我拭去那层灰尘的人，可是你喔。我看起来很痛苦吗，真是伤脑筋呐。痛苦是当然的，因为我航行在没有海图的海面上啊。挑战和创造都是很痛苦的啊，但是很充实，所以，谢谢你",
	"有粉笔的气味，各处布满参差裂痕的玻璃窗，远处传来的运动部的声音，夕阳投出的片片樱瓣倩影，静谧安逸的睡息，风景开始变迁",
	"我并不能一直在你身边帮助你",
	"能互相支撑的不仅仅是同伴，向敌人学习更多，从敌人那里获得更多，直到再次重逢那日为止…仅是那个人的存在，就足以使自己忍受孤独。竞技者之间，是连敌人都能互相支撑的",
	"飞机穿梭于茫茫星海中逐渐远去，你如猫般，无声靠近，从意想不到的角度玩弄他人，而我只能呆愣在原地，永远只能跟随你的步伐",
	"就好像看透了我的心思一般，你总是突然出现……",
	"肌肤冰凉，寂静而干燥的空气，洗过的床单让气氛变得格外柔和，那个残忍的男子，说要让我再做一次美梦",
	"但是在喜欢和不讨厌之间，可是相隔了数亿光年都不止的距离啊！",
	"用心去听的话便能感受得到渐渐涌出的伤感，安逸的睡息萦绕耳畔，宛如小猫一般，我的心中有你停驻，你在那里?",
	"从头发中传来音乐室的味道，能听到些许急促的呼吸声，被泪水润湿的肩头很温暖，我就在他的身边。要是时间能就此停住就好了",
	"你会忘记吗？和你一起在学校探险的女孩子，和你一起帮助迷路的小孩子的女孩子，从医院跑出来，等在那里的女孩子，你会忘记吗？",
	"英雄意味着强大，英雄意味着孤独，最后一幕一定是英雄渐行渐远，我的英雄也是那样的存在",
	"你的言行举止，都是那么璀璨夺目，对我而言实在是太耀眼，让我不得不闭上眼睛。不过，我却无可自拔地憧憬着你！",
	"和你相遇的春天,没有你的春天",
	"车轮的金属音，不规则的足音，舌尖上面残留的淡淡红茶苦涩。平凡而无谓的对话，随处可见的风景。即使如此，却还是记得那么明晰。这一定，一定，是身处夏夜的错",
	"就算悲伤难抑，遍体鳞伤地处于谷底，也不能停止演奏！",
	"和她相遇的那瞬间，我的人生改变了",
	"要和我一起殉情吗？骗你的…我就是想说说看",
	"继续踏上旅途，在没有你的春天",
	"我很蠢，所以一点也不了解自己，想装作一无所知地一直呆在他身边，想着能一直这样就可以了",
	"星星只有在夜里才璀璨夺目啊",
	"你就像是小猫一般，一旦我靠近的话就会忽然跑到很远的地方去，受伤了的话，就像能相互理解那份痛苦一样，开始玩闹起来，所以是...那样的惹人怜爱...",
	"既然在与不在都一样的话，那就永远在一起吧",
	"只要一和你说话就一会儿难过，一会儿安心，像这样阴晴不定的我，就像个笨蛋似的",
	"现在我多少能明白了，一直以来都是如此，将我的世界不断扩大的人是你。我所追求的风景，和你想看到的风景，是不同的",
	"春天就要来了，遇见你的春天，再也没有你的春天",
	"为了能永存那些人心中，为了让在座的所有人，永远铭记我们，我不会忘记的",
	"男人只要去行动就好，做得到或做不到，女孩子会来告诉你的"
	
);

//生成随机数
$arr=array();
$arr[]=rand(0,50);
$arr=array_unique($arr);
$i=implode(" ",$arr);

$hitokoto  = $a[$i];
//开始输出
if (isset($_GET["charset"])) {
    if ($_GET["charset"] == "gbk") {
        header("Content-type: text/html; charset=gbk");
        $hitokoto = iconv("UTF-8", "GBK", $hitokoto);
        if (!isset($_GET["encode"])) {
            echo $hitokoto;
            exit();
        }
        encode();
    } else {
        header("Content-type: text/html; charset=utf-8");
        if (!isset($_GET["encode"])) {
            echo $hitokoto;
            exit();
        }
        encode();
    }
}
header("Content-type: text/html; charset=utf-8");
if (!isset($_GET["encode"])) {
    echo $hitokoto;
    exit();
}
encode();
/**
 * [encode 判断输出类型]
 * @return [none]
 */
function encode()
{
    global $hitokoto;
    if ($_GET["encode"] == "js") {
        header('Content-type: application/x-javascript');
        echo "function siyueapi(){document.write(\"" . $hitokoto . "\");}";
        exit();
    } else {
        echo $hitokoto;
        exit();
    }
}
ob_end_flush(); 
?>
