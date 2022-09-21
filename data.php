<?php
require_once("golf_driving_range.php");
/*
$cities = array(
    '江戸川区', '葛飾区', '墨田区', '江東区', '足立区', '荒川区', '北区', '豊島区', '板橋区', '文京区', '台東区', '中央区', '千代田区',
    '港区', '品川区', '大田区', '新宿区', '渋谷区', '目黒区', '世田谷区', '中野区', '杉並区', '練馬区'
);
*/
$cities = array(
    'edogawa' => '江戸川区',
    'katsushika' => '葛飾区',
    'sumida' => '墨田区',
    'koutou' => '江東区',
    'adachi' => '足立区',
    'arakawa' => '荒川区',
    'kita' => '北区',
    'toshima' => '豊島区',
    'itabashi' => '板橋区',
    'bunkyou' => '文京区',
    'taitou' => '台東区',
    'chuou' => '中央区',
    'chiyoda' => '千代田区',
    'minato' => '港区',
    'shinagawa' => '品川区',
    'ota' => '大田区',
    'shinjuku' => '新宿区',
    'shibuya' => '渋谷区',
    'meguro' => '目黒区',
    'setagaya' => '世田谷区',
    'nakano' => '中野区',
    'suginami' => '杉並区',
    'nerima' => '練馬区'
);


$cities_roma = array(
    'edogawa',
    'katsushika',
    'sumida',
    'koutou',
    'adachi',
    'arakawa',
    'kita',
    'toshima',
    'itabashi',
    'bunkyou',
    'taitou',
    'chuou',
    'chiyoda',
    'minato',
    'shinagawa',
    'ota',
    'shinjuku',
    'shibuya',
    'meguro',
    'setagaya',
    'nakano',
    'suginami',
    'nerima'
);




$tokyo_jambo = new Golf_driving_range(
    "https://tokyo-jumbo.co.jp/wp-content/uploads/2017/11/slide01.png",
    "トーキョージャンボゴルフセンター",
    "230ヤード",
    "200打席",
    "打席料 500円 
    <br/>1球あたり 平日(5:00~8:30 1F: 14円 2F: 12円 3F: 10円 9:00~24:00 1F: 16円 2F: 13円 3F: 10円)
    <br/>土日祝(4:00~7:30 1F: 19円 2F: 16円 3F: 13円 8:00~24:00 1F: 20円 2F: 17円 3F: 14円)",
    "平日 90分あたり(1F: 3,000円 2F: 2,500円 3F: 2,100円) 
    <br/>土日祝 60分あたり(1F: 3,000円 2F: 2,500円 3F: 2,100円)",
    "クラブ(300円)",
    "東京都足立区入谷9-26-1",
    "日暮里舎人ライナー 見沼親水公園駅 徒歩23分",
    "5:00~24:00 (土日祝 4:00~)",
    "https://tokyo-jumbo.co.jp/",
    "",
    "足立区",
    "03-3853-0562"
);
$funabori = new Golf_driving_range(
    "https://funaborigolf.jp/wp-content/uploads/2022/05/slide_01_pc.jpg",
    "フナボリゴルフ",
    "230ヤード",
    "72打席",
    "入場料:500円 
    <br/>1カゴ:1,100円 3カゴ:3,100円 10カゴ:10,000円
    <br/>1カゴあたり:70球(平日1F) 75球(平日2F) 60球(土日祝1F) 65球(土日祝2F)",
    "-",
    "クラブ(アイアン:300円 ドライバー:600円)",
    "東京都江戸川区船堀1-1-38",
    "都営新宿線 船堀駅 徒歩3分",
    "8:50~22:00(金土日祝 6:00~)",
    "https://funaborigolf.jp/",
    "",
    "江戸川区",
    "03-3687-0562"
);
$lotte_kasai = new Golf_driving_range(
    "https://www.lottekasaigolf.com/lkg_cms/wp-content/themes/lkg/img/top/main-visual_4.jpg",
    "ロッテ葛西ゴルフ",
    "250ヤード",
    "300打席",
    "1球あたり 平日(1F: 18円 2F: 17円 3F: 16円) 
    <br/>土日祝(1F: 22円 2F: 21円 3F: 18円)",
    "-",
    "クラブ(アイアン ウッド ドライバー:500円)",
    "東京都江戸川区臨海町2-4-2",
    "都営バス 「臨海町3丁目」降りてすぐ（JR京葉線 葛西臨海公園駅などからアクセス可能）",
    "24時間営業",
    "https://www.lottekasaigolf.com/",
    "",
    "江戸川区",
    "03-5658-5600"
);

$nakadai_golf  = new Golf_driving_range(
    "http://www.nakadai-golf.com/facility/images/pic01.jpg",
    "中台ゴルフセンター",
    "75ヤード",
    "20打席",
    "打席料 300円 専用カード利用 50球あたり700円(土日祝 750円) ",
    "平日(1F: 1,600円/1h 2F: 1,500円/1h) 土日祝(2,100円/1h 9:00以降は 1F: 2,300円/1h)",
    "-",
    "東京都板橋区相生町19",
    "都営三田線 志村三丁目 徒歩10分",
    "窓口営業時間 9:00~22:00(土日祝 8:00~22:00)",
    "http://www.nakadai-golf.com/",
    "",
    "板橋区",
    "03-3932-1194"
);

$sun_square  = new Golf_driving_range(
    "https://sunsquare.jp/wp-content/uploads/2021/03/%E3%82%B5%E3%83%B3%E3%82%B9%E3%82%AF%E3%82%A8%E3%82%A2%E3%82%B3%E3%82%99%E3%83%AB%E3%83%95%E5%BA%97%E8%88%97%E5%86%99%E7%9C%9F-1024x576.jpeg",
    "サンスクエア",
    "80ヤード",
    "102打席",
    "専用カード利用 1球あたり 
    <br/>平日(1F: 18.5円 2F: 17.5円 3F: 16.5円) 
    <br/>土日祝(1F: 22.0円 2F: 21.0円 3F: 20.0円)",
    "~9:00 60分 2,100円(土日祝は2,300円)",
    "クラブ(310円)",
    "東京都北区王子1-4-1",
    "京浜東北線 王子駅 徒歩1分",
    "月曜平日(7:30-22:30) 月曜日以外の平日(3-11月 6:00~22:30 12-2月 7:00-22:30)<br/> 土日祝(6-8月 5:00-22:30 9-5月 6:00-22:30)",
    "https://sunsquare.jp/golf/",
    "",
    "北区",
    "03-3914-1562"
);

$minato_tamachi  = new Golf_driving_range(
    "https://minatogolf.jp/wp-content/themes/juchi/img/tamachi.jpg",
    "みなとゴルフ 田町校",
    "-",
    "13打席",
    "-",
    "1時間 1500円",
    "-",
    "東京都港区芝浦1-13-10",
    "JR 田町駅 徒歩7分",
    "平日 11:00~22:00 土 9:00~12:00 日祝 9:00~18:00",
    "https://minatogolf.jp/school/tamachi/",
    "",
    "港区",
    "03-5476-0777"
);


$higashi_horikiri  = new Golf_driving_range(
    "http://www.hhgc.jp/user_file/130056/etc/photo07.jpg",
    "東堀切ゴルフクラブ",
    "60ヤード",
    "24打席",
    "打席料 400円 55球あたり450円(会員の場合)",
    "-",
    "クラブ(200円 会員の場合)",
    "東京都葛飾区東堀切2-13-1",
    "京成本線 お花茶屋駅 徒歩9分",
    "9:00~22:00(定休日 水曜日)",
    "http://www.hhgc.jp/",
    "",
    "葛飾区",
    "03-3603-6256"
);

$fuji_golf  = new Golf_driving_range(
    "http://www.fujigolfc.com/facilities/img/img_01.jpg",
    "フジゴルフセンター",
    "150ヤード",
    "70打席",
    "打席料 420円 
    <br/>1球あたり 平日(1F: 17円 2F: 15円) 平日早朝(1F: 11.5円 2F: 10.5円) 
    <br/> 土日祝(1F: 19円 2F: 17円) 土日祝早朝(1F: 17円 2F: 16円)",
    "-",
    "クラブ(320円)",
    "東京都江東区木場6-2-6",
    "東京メトロ東西線 木場駅 徒歩5分",
    "5:30~22:30(土日祝 ~21:00)",
    "http://www.fujigolfc.com/",
    "",
    "江東区",
    "03-3647-2010"
);


$metro_green = new Golf_driving_range(
    "https://www.metrogreen.jp/wp/wp-content/themes/metrogreen/img/p11-img3.jpg",
    "メトログリーン東陽町",
    "165ヤード",
    "90打席",
    "打席料200円(土日祝 240円) 
    <br/>1球あたり 平日(1F: 19円 2F: 17円 3F: 13円) 
    <br/>土日祝(1F: 23円 2F: 21円 3F: 17円)",
    "-",
    "クラブ(400円)",
    "東京都江東区新砂1-6-40",
    "東京メトロ東西線 東陽町 徒歩8分",
    "8:00~22:00 (土日祝 7:00~)",
    "https://www.metrogreen.jp/",
    "",
    "江東区",
    "03-5683-0052"
);


$rokugo_golf  = new Golf_driving_range(
    "https://lh3.googleusercontent.com/p/AF1QipMK7tYRbJGKD1WxAN3aW0JJNt4JbabFCZCxceY=w1080-h608-p-no-v0",
    "六郷ゴルフ倶楽部",
    "225ヤード",
    "59打席",
    "打席料500円 50球 500円 (土日祝 600円)",
    "-",
    "-",
    "東京都大田区仲六郷4-29-1",
    "京急本線 六郷土手 徒歩5分",
    "9:00~17:00 (土日 7:00~17:30)",
    "https://golf-driving-range-279.business.site/",
    "",
    "大田区",
    "03-3731-7147"
);


$oizumi_golf = new Golf_driving_range(
    "https://pic1.homemate-research.com/pubuser1/pubuser_facility_img/8/5/0/10000000000000033058/0000003142/10000000000000033058_0000003142_2.jpg",
    "大泉ゴルフセンター",
    "160ヤード",
    "40打席",
    "打席料400円 
    <br/>1球あたり 平日(1F: 12円 2F: 12円)
    <br/> 土日祝(1F: 14円 2F: 14円)",
    "-",
    "クラブ(200円)",
    "東京都練馬区大泉学園町1-11-2",
    "西武池袋線 大泉学園駅 徒歩14分",
    "9:00~22:00 (土日祝 7:30~21:30 水曜定休日)",
    "https://twitter.com/oizumi_golf (公式ツイッター)",
    "",
    "練馬区",
    "03-3922-3547"
);


$first_golf = new Golf_driving_range(
    "https://firstgolf.net/assets/img/facility/facility01.jpg",
    "ファーストゴルフ",
    "60打席",
    "170ヤード",
    "打席料 400円 1カゴ 650円",
    "2時間あたり 火曜 9:00~11:00 (S打席: 2,000円) 20:45~22:45 (S打席: 2,300円)
    <br/>平日 8:00~10:00 (S打席: 2,000円) 土日祝 20:45~22:45 (S打席: 2,600円)",
    "8:00~23:00 (土日祝 7:00~)",
    "東京都練馬区早宮2-17-12",
    "東京メトロ有楽町線 平和台駅 徒歩2分",
    "8:00~23:00",
    "https://firstgolf.net/",
    "",
    "練馬区",
    "03-3559-3885"
);


$magome_golf = new Golf_driving_range(
    "https://magome-golf.com/common/img/top/img2.png",
    "馬込ゴルフガーデン",
    "40ヤード",
    "28打席",
    "打席料 330円 
    <br/>1球あたり 月~木 1F:20円 2F:19円(10:00~17:30) 1F:22円 2F:20円(17:30~)
    <br/>土日祝 1F:25円 2F:24円(9:00~19:00) 1F:22円 2F:20円(19:00~) 
    <br/>金曜・早朝は別料金(公式サイト参照)",
    "月~木 30分 1,320円から(10:00~17:30) 30分 1,430円から(17:30~)
    <br/>土日祝 30分 1,870円から(9:00~19:00) 30分 1,430円から(19:00~)",
    "クラブ(220円)",
    "東京都大田区北馬込1-30-4",
    "東急大井町線 荏原町駅 都営地下鉄浅草線 馬込駅 徒歩7分",
    "6:00~21:30",
    "https://magome-golf.com/",
    "",
    "大田区",
    "03-3776-1275"
);


$okura_land = new Golf_driving_range(
    "https://golf-condor.com/assets/66/066_001-4e033736b46fec2b97378bf26960aea537254e74b3d7befacf0a83c63dcddd8b.jpg",
    "オークラランドゴルフ練習場",
    "60ヤード",
    "47打席",
    "打席料 450円 
    <br/>1球あたり 平日(9:00~17:00 12円 17:00~22:00 14円) 土日祝(15円)",
    "1時間あたり 平日(1F: 2,300円 2F: 1,900円) 
    <br/>土日祝(1F: 3,000円 2F: 2,300円)",
    "クラブ(ウッド:300円 アイアン:200円)",
    "東京都世田谷区桜3-24-1",
    "東急世田谷線 上町駅 徒歩9分",
    "9:00~22:00(土日祝 8:00~)",
    "http://www.okura-bowl.jp/okuraland/golf/index.html",
    "",
    "世田谷区",
    "03-3420-0274"
);


$golfgarden_takashima = new Golf_driving_range(
    "https://golf-condor.com/assets/83/00.83-b55bc02f8b665e90c5580b77d0506366f9c931c407611b2c396f8a15c113c237.jpg",
    "ザ・ゴルフガーデン高島平",
    "180ヤード",
    "106打席",
    "打席料300円(夜間無料) 
    <br/>1球あたり 平日(1F: 18円 2F: 16円) 
    <br/>土日祝(1F: 26円 2F: 23円)",
    "平日(1F: 3,100円 2F: 2,600円(~16:00 110分, 16:00~ 80分) 3F:50分1,100円から)
    <br/>土日祝(1F: 80分 3,600円 2F: 80分 3,100円  3F: 50分 1,600円から)",
    "クラブ(200円)",
    "東京都板橋区新河岸1-2-1",
    "都営三田線高島平駅 西台駅 徒歩12分",
    "9:00~24:00(土日祝 7:00~)",
    "https://www.thegolf-gdn.com/",
    "",
    "板橋区",
    "03-5398-1611"
);


$iyama_golf = new Golf_driving_range(
    "https://u.jimcdn.com/cms/o/s111f2b809ddd1009/userlayout/img/main-img.jpg?t=1407410773",
    "井山ゴルフ練習場",
    "134ヤード",
    "54打席",
    "打席料550円 
    <br/>1カゴ500円 平日 (1F: 33球 2F: 36球)
    <br/> 土日祝 (1F: 30球 2F: 33球) 早朝割引有り",
    "-",
    "-",
    "東京都世田谷区大蔵6-7-21",
    "成城学園前駅より東急バス 永安寺前 徒歩9分",
    "5:00~22:00 (1~3月は21:00まで 月曜定休日)",
    "https://www.iyama-golf.com/",
    "",
    "世田谷区",
    "03-3417-157"
);


$kamiitabashi_golf = new Golf_driving_range(
    "https://kamiitabashi-golfclub.com/wp-content/uploads/2022/06/top_slider3.jpg",
    "上板橋ゴルフ練習場",
    "-",
    "-",
    "打席料 450円 100球あたり1000円から",
    "-",
    "クラブ(100円)",
    "東京都板橋区桜川3-26-10",
    "東武東上線 上板橋駅 徒歩8分",
    "10:00~21:00 (土日祝 9:00~20:00)",
    "https://kamiitabashi-golfclub.com/",
    "",
    "板橋区",
    "03-3932-3332"
);


$senzoku_golf = new Golf_driving_range(
    "https://golf-condor.com/assets/75/01.75-566f28e8c176c7d5fe9436d6760b3fd2caf62dc45daf3dc6a6ae2f6d6fe909c9.jpg",
    "関興洗足ゴルフガーデン",
    "50ヤード",
    "17打席",
    "打席料 210円 1球あたり 15円",
    "90分 1575円 (土日祝2F 60分1575円)",
    "-",
    "東京都目黒区原町2-5-8",
    "東急目黒線　洗足駅 徒歩4分",
    "9:00~21:00",
    "https://senzokugolf-web.jimdosite.com/",
    "",
    "目黒区",
    "03-3716-6470"
);


$gakuen_golf = new Golf_driving_range(
    "https://pic2.homemate-research.com/pubuser1/pubuser_facility_img/9/5/0/10000000000000033059/0000001075/10000000000000033059_0000001075_2.jpg",
    "学園ゴルフセンター",
    "120ヤード",
    "50打席",
    "打席料 300円 
    <br/>1球あたり 平日(1F: 12円 2F: 10.9円)
    <br/> 土日祝(1F: 13~14.4円 2F: 11.8~13円)",
    "-",
    "クラブ(200円)",
    "東京都練馬区大泉町3-26-22",
    "西武池袋線 大泉学園駅 30分",
    "8:00~21:00",
    "-",
    "",
    "練馬区",
    "03-3923-0036"
);


$matshunoki_golf = new Golf_driving_range(
    "http://www.matsunokigolf.com/img/top_main_img.jpg",
    "松ノ木ゴルフセンター",
    "80-ヤード",
    "44打席",
    "入場料 400円 1カゴ800円",
    "-",
    "クラブ(200円)",
    "東京都杉並区松ノ木1-12-54",
    "東京メトロ丸ノ内線　新高円寺駅 徒歩14分",
    "9:00~19:45 (土日祝 7:00~19:45 12-2月は7:30~)",
    "http://www.matsunokigolf.com/",
    "",
    "杉並区",
    "03-3316-5705"
);


$yaguchi_golf = new Golf_driving_range(
    "https://yaguchi-golf.jp/wp-content/uploads/2021/04/2021-03-18_12-16-10_000-3-1024x683.jpeg",
    "矢口ゴルフセンター",
    "50ヤード",
    "20打席",
    "打席料 400ポイント(早朝無料) 
    <br/>1球あたり 平日:13ポイント 土日祝:14ポイント",
    "-",
    "クラブ(200円)",
    "東京都大田区矢口2-28-5",
    "東急多摩川線 矢口渡駅 徒歩4分",
    "6:00~22:00",
    "https://yaguchi-golf.jp/",
    "",
    "大田区",
    "03-3759-4437"
);


$minami_nakano = new Golf_driving_range(
    "https://golf-condor.com/assets/16/00.16-7aac1b611299cadda2de309cc168fe7ba721006ee62a9862b4fd30e080ef3135.jpg",
    "南中野ゴルフセンター",
    "65ヤード",
    "31打席",
    "打席料 300円 
    <br/>平日(1F: 55球 700円 2F: 55球 700円)
    <br/> 土日祝(1F: 50球 700円 2F: 55球 700円)",
    "2時間 2,100円",
    "クラブ(200円)",
    "東京都中野区弥生町6-8-14",
    "東京メトロ丸ノ内線 方南町駅 徒歩5分",
    "9:00~20:30(土日祝 8:00~) 水曜定休日",
    "-",
    "",
    "中野区",
    "03-3382-3780"
);


$oshima_golf = new Golf_driving_range(
    "https://www.ojima-golf.jp/files/topics/12_ext_02_1.jpg",
    "大島ゴルフセンター",
    "100ヤード",
    "48打席",
    "打席料440円 
    <br/>1カゴ 550円 平日(1F: 50球 2F: 55球 3F: 60球) 
    <br/>土日祝(1F: 40球 2F: 45球 3F: 50球)",
    "-",
    "クラブ(300円)",
    "東京都江東区大島5-31-18",
    "都営新宿線 大島駅 徒歩3分",
    "7:00～21:30 (月曜日 10:00~)",
    "https://www.ojima-golf.jp/",
    "",
    "江東区",
    "03-3682-4215"
);


$mizue_golf = new Golf_driving_range(
    "https://golf-condor.com/assets/111/00.111-d9841825f3ec2bb018c382bd0ae3353240f70f36ec76e3cbe9175dcaa53ed4ea.jpg",
    "みずえＧＯＬＦガーデン",
    "76ヤード",
    "32打席",
    "打席料 300円 
    <br/>1球あたり 平日:10円 土日祝:11円",
    "-",
    "-",
    "東京都江戸川区南篠崎町3-26-7",
    "都営新宿線 瑞江駅 徒歩5分",
    "9:00~22:30 (土 8:00~ 日祝 8:00~22:00 月曜定休日)",
    "-",
    "",
    "江戸川区",
    "03-3678-0123"
);


$towa_green = new Golf_driving_range(
    "https://golf-condor.com/assets/34/3465_ext_77_0_L-ded8adbb419cd59dc6ddd07e5c8a589499b80f029541a532a464f0ff47082c09.jpg",
    "東和グリーンゴルフ",
    "100ヤード",
    "36打席",
    "打席料330円 1カゴ50球 550円",
    "-",
    "クラブ(220円)",
    "東京都足立区東和1-16",
    "JR 亀有駅 徒歩11分",
    "9:00~22:30 (土日祝 7:30~)",
    "-",
    "",
    "足立区",
    "03-3605-5335"
);


$swing_himonya = new Golf_driving_range(
    "https://www.tokyu-sports.com/library/lp/images/golf/sing-himonya/range.jpg",
    "スイング碑文谷",
    "170ヤード",
    "83打席",
    "6:00~8:50 平日(1F: 22円 2F: 20円 3F: 18円) 
    <br/>土日祝(1F: 29円 2F: 27円 3F: 24円)
    <br/>21:00~23:00 平日(1F: 26円 2F: 24円 3F: 20円) 
    <br/>土(1F:33円 2F: 29円 3F: 25円) 日祝は19:00~21:00",
    "上記時間帯以外 1F: 30分 1,560円から 2F: 30分 1,440円から 3F: 30分 1,200円から",
    "クラブ(550円)",
    "東京都目黒区碑文谷5-14-8",
    "東急東横線 学芸大学駅 都立大学駅 徒歩10分",
    "9:00~23:00(土 ~21;00 日祝 ~19:00)",
    "https://www.tokyu-sports.com/golf/himonya.html",
    "",
    "目黒区",
    "03-3794-0109"
);


$hikarigaoka_yupuraza = new Golf_driving_range(
    "http://www.u-plaza.co.jp/wp/wp-content/themes/hikarigaoka/common/images/page/faci_fairway.jpg",
    "光ケ丘ユー・プラザ",
    "130ヤード",
    "63打席",
    "打席料 1,2F:500円 3F:400円 (~8:45は無料) 
    <br/>1球あたり 平日 14円(1,2F ~17:00) 12円(3F ~17:00) 
    <br/>16円(1,2F 17:00~) 14円(3F 17:00~)
    <br/>土日祝は2円プラス",
    "-",
    "クラブ(300円)",
    "東京都練馬区田柄4-39-1",
    "東京メトロ有楽町線 赤塚駅 徒歩11分",
    "6:00~23:30 (3/16 - 10/31) 7:00~23:30 (11/1 ~ 3/15)",
    "http://www.u-plaza.co.jp/",
    "",
    "練馬区",
    "03-5997-2200"
);


$meguro_golf = new Golf_driving_range(
    "091_001-5f0b6b851007ead3d6bea53ef6ba0a0fa0541fe577ea444a2b17ea34334dff09.jpg",
    "メグロゴルフクラブ",
    "50ヤード",
    "16打席",
    "入場料 300円 1カゴ 600円 
    <br/>(平日:1カゴ48球 平日:1カゴ48球 土日祝:1カゴ43球)",
    "-",
    "クラブ(200円)",
    "東京都目黒区目黒1-24-2",
    "JR目黒駅 徒歩7分",
    "9:00～21:00",
    "https://www.golf.fuji-group.jp/",
    "",
    "目黒区",
    "03-5496-2618"
);

$tokyo_tamagawa_golf = new Golf_driving_range(
    "https://static.wixstatic.com/media/3fb1d2_7a290dcb49da4fefab8d8421c67620cf~mv2_d_2364_1774_s_2.jpg/v1/fill/w_980,h_412,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/IMG_0010.jpg",
    "東京多摩川ゴルフ練習場",
    "250ヤード",
    "36打席",
    "入場料 550円 1カゴ60球
    <br/> 平日:1,050円 土日祝:1,100円",
    "平日 60分1900円から",
    "クラブ(200円)",
    "東京都大田区田園調布南7-4",
    "東急多摩川線 沼部駅 徒歩7分",
    "6:45~16:00 (土日祝 ~17:00)",
    "https://www.t-gol.com/",
    "",
    "大田区",
    "090-3105-0081"
);


$kamiigusa_golf = new Golf_driving_range(
    "image_kamiigusa.jpg",
    "上井草ゴルフセンター",
    "120ヤード",
    "48打席",
    "打席料 300円 1000円あたり 
    <br/>平日: 68球 土日祝(1F): 58球 土日祝(2F): 64球",
    "-",
    "クラブ(100円)",
    "東京都練馬区上石神井南町1-1",
    "西武新宿線上井草 徒歩5分",
    "6:00~21:00 (火曜定休日)",
    "https://kamiigusagolf.jimdofree.com/",
    "",
    "練馬区",
    "03-3920-1885"
);

$asashi_golf = new Golf_driving_range(
    "http://www.asahigolf-school.com/user_file/460089/etc/asa12.jpg",
    "アサヒゴルフクラブ",
    "75ヤード",
    "32打席",
    "打席料 300円(土日祝) 
    <br/>1F: 50球500円 2F: 55球500円
    <br/> (6:30~7:30 150球 1F: 1,300円 2F: 1,200円)",
    "-",
    "6:30~23:00",
    "東京都練馬区富士見台4-13-13",
    "西武池袋線 練馬高野台駅 徒歩14分",
    "6:30~23:00",
    "http://www.asahigolf-school.com/",
    "",
    "練馬区",
    "03-3577-1117"
);


$yutaka_golf = new Golf_driving_range(
    "https://golf-condor.com/assets/136/00.136-390569ee70cec54165a8f46eab55b4d6fea157613b87b9bc7c824aa6a8b11c9e.jpg",
    "ゆたかゴルフ",
    "30ヤード",
    "16打席",
    "56球1000円",
    "-",
    "-",
    "東京都大田区南馬込6-21-3",
    "都営浅草線 西馬込駅 徒歩10分",
    "9:00~21:30 (木 ~17:00 第一木曜日 定休日)",
    "http://yutakagolf.net/index.html",
    "",
    "大田区",
    "03-3772-2272"
);

$sunny_golf = new Golf_driving_range(
    "http://www.sunnygolf.co.jp/images/index_img001.jpg",
    "新小岩サニーゴルフ",
    "-",
    "232打席",
    "打席料 500円 
    <br/>1球あたり 7:00~12:00 (1,2F: 10円 3F: 9円)
    <br/> 7:00~12:00 (1,2F: 10円 3F: 9円) 
    <br/>12:00~17:00 (1F: 13円 2F: 12円 3F: 11円)
    <br/> 17:00~ (1,2F: 16円 3F: 13円)
    土日祝 1F: 18円 2F: 17円 3F: 13円",
    "-",
    "クラブ(アイアン: 330円 ウッド:550円)",
    "東京都葛飾区奥戸4-2-1",
    "JR新小岩駅よりバス10分 三井住友銀行隣 降車",
    "3-11月 7:00~23:00 12-2月 7:30~23:00 月曜日は8:00~",
    "http://www.sunnygolf.co.jp/",
    "",
    "葛飾区",
    "03-3693-1717"
);


$eastern = new Golf_driving_range(
    "https://scontent-nrt1-1.xx.fbcdn.net/v/t39.30808-6/300753463_583956786577324_1224039736720286590_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=e3f864&_nc_ohc=6peeJBzQ1jYAX-AUbBA&_nc_ht=scontent-nrt1-1.xx&oh=00_AT-PBJt2-AVJHUrKa4useibpe01aIdO9bq3bcvBUeyIx4g&oe=632C62DE",
    "ゴルフクラブイースタン",
    "180ヤード",
    "108打席",
    "打席料550円(早朝~8:00 無料) 
    <br/>平日(1F: 17.6円 2F: 15.4円 3F: 13.2円)
    <br/> 土日祝(1F: 19.8円 2F: 17.6円 3F: 15.4円)",
    "-",
    "クラブ(330円)",
    "東京都墨田区立花5-51-11",
    "東武亀戸線 小村井駅 徒歩8分",
    "11-3月 6:00~24:00 4-10月 5:00~24:00",
    "http://www.gc-eastern.com/",
    "",
    "墨田区",
    "03-3612-5133"
);


$chitose_golf = new Golf_driving_range(
    "https://scontent-nrt1-1.xx.fbcdn.net/v/t39.30808-6/301110201_577335593925418_6314137499176119439_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=e3f864&_nc_ohc=QbwfP1OK8y8AX9VPc7t&_nc_ht=scontent-nrt1-1.xx&oh=00_AT8hiZGR8GPFd8idSqPawKFJruF3Y-x6GIuxPM4buNCuUg&oe=632CEF3A",
    "千歳ゴルフセンター",
    "-",
    "-",
    "打席料 400P(平日 6:00~9:00 土日祝 6:00~8:00 無料)
    <br/> 平日50球60P 土日祝45球60P ",
    "-",
    "クラブ(300P)",
    "東京都世田谷区千歳台1-32-6",
    "小田急線 祖師ヶ谷大蔵駅 徒歩12分",
    "6:00~22:00",
    "https://golf.chitose.jp/",
    "",
    "世田谷区",
    "03-3482-3521"
);


$kannana_kasugabashi = new Golf_driving_range(
    "https://www.kasugabashi-golf.com/guide/img/img_005.jpg",
    "春日橋ゴルフクラブ",
    "50ヤード",
    "32打席",
    "打席料 400円
    <br/> 1,000円あたり 平日(1F: 85球 2F: 95球)
    <br/> 土日祝(1F: 65球 2F: 75球)",
    "-",
    "クラブ(200円)",
    "東京都大田区大森西1-10-23",
    "JR大森駅 徒歩17分",
    "9:00~21:30(土日祝　8:30~)",
    "https://www.kasugabashi-golf.com/",
    "",
    "大田区",
    "03-3761-6761"
);


$futaba_golf = new Golf_driving_range(
    "http://www.futaba-golf.co.jp/img/institution_pic_01.jpg",
    "フタバゴルフガーデン",
    "60ヤード",
    "14打席",
    "打席料 450円 
    <br/>35球あたり 平日: 580円 土日祝: 680円",
    "平日16:00~のみ 30分1,100円",
    "クラブ(350円)",
    "東京都品川区西五反田7-22-17",
    "JR五反田駅 徒歩7分",
    "8:00~21:00 (土日祝 ~20:00)",
    "http://www.futaba-golf.co.jp/",
    "",
    "品川区",
    "03-3494-3480"
);


$seijo_golf = new Golf_driving_range(
    "https://image.jimcdn.com/app/cms/image/transf/dimension=506x10000:format=jpg/path/s495e225462b6ca5a/image/i682ae324b0d1f201/version/1474358021/image.jpg",
    "成城ゴルフクラブ",
    "80ヤード",
    "40打席",
    "打席料 400P 
    <br/>平日(9:00~12:00 500P45球, 12:00~ 675P45球)
    <br/> 土日祝(9:00~12:00 600P45球, 12:00~ 675P45球)
     <br/>早朝~9:00 打席料無料 1000円90球 (土日祝 80球)",
    "-",
    "-",
    "東京都世田谷区成城8-18-35",
    "小田急線 成城学園前駅 徒歩10分",
    "6:00～21:00",
    "https://www.seijo-golf.jp/",
    "",
    "世田谷区",
    "03-3483-1170"
);

$green_arrow = new Golf_driving_range(
    "https://golf-condor.com/assets/26/3463_ext_77_1_L-09b41d9780a4991ec19d4386cda99d6e8217a21a8867c7528c214f4902892d90.jpg",
    "グリーンアロー",
    "50ヤード",
    "22打席",
    "打席料 300円
    <br/>550円 70球(平日 ~17:00) 50球(平日 17:00~) 50球(土日祝)",
    "-",
    "-",
    "東京都葛飾区新宿3丁目33-12",
    "京成金町線 柴又駅 徒歩8分",
    "9:00~21:00 (土日祝 8:00~)",
    "-",
    "",
    "葛飾区",
    "03-3600-8668"
);

$meiji_jingu = new Golf_driving_range(
    "http://www.meijijingugaien.jp/sports/golf/images/banner57.jpg",
    "明治神宮外苑ゴルフ練習場",
    "59打席",
    "66ヤード",
    "打席料525円
    <br/> 1球あたり 平日 ~15:00 (西 GF: 16円 1F: 15円 2F: 14円 東 1F: 12円 2F: 11円)
    <br/> 15:00~ (西 GF: 23円 1F: 22円 2F: 20円 東 1F: 18円 2F: 17円) 
    <br/>土日祝は5円増し",
    "-",
    "クラブ(410円)",
    "東京都新宿区霞ヶ丘町3-2",
    "JR信濃町駅 徒歩10分 東京メトロ銀座線 外苑前駅 徒歩8分",
    "8:00~22:00 (土日祝 6:00~)",
    "http://www.meijijingugaien.jp/sports/golf/",
    "",
    "新宿区",
    "03-3401-4359"
);

$ochiai_golf = new Golf_driving_range(
    "https://pic2.homemate-research.com/pubuser1/pubuser_facility_img/2/9/8/10000000000000032892/0000036787/10000000000000032892_0000036787_1.jpg",
    "落合ゴルフガーデン",
    "50ヤード",
    "25打席",
    "打席料 400円 
    <br/>1球あたり 平日 ~18:00 (北: 11円 南:14円) 
    <br/>18:00~ (北: 12円 東: 15円) 土日 (北: 13円 東: 16円)",
    "-",
    "クラブ(200円)",
    "東京都新宿区西落合3-7-22",
    "都営大江戸線 落合南長崎駅 徒歩3分",
    "9:00～21:00 (月曜定休日)",
    "-",
    "",
    "新宿区",
    "03-5982-0502"
);


$new_seijo = new Golf_driving_range(
    "https://www.newseijogolf.com/wp-content/uploads/2020/06/1001-scaled.jpg",
    "ニュー成城ゴルフセンター",
    "85ヤード",
    "30打席",
    "打席料 500P 
    <br/>平日:55球 650P 土日祝:50球 650P
    <br/> 早朝(~9:00) 打席料0P 平日:65球 650P 土日祝:60球 650P",
    "-",
    "-",
    "東京都世田谷区喜多見7-27-15",
    "小田急線 喜多見駅 徒歩6分",
    "5:45~22:00(夏季 5:00~)",
    "https://www.newseijogolf.com/",
    "",
    "世田谷区",
    "03-3417-0562"
);

$keihin_golf = new Golf_driving_range(
    "https://image.jimcdn.com/app/cms/image/transf/dimension=323x10000:format=jpg/path/s0f363bc1a55c5e6e/image/if1ca040e6e77c2a2/version/1488259420/image.jpg",
    "京浜ゴルフクラブ",
    "50ヤード",
    "12打席",
    "打席料 440円 <br/>
    770円あたり 月~土(1F: 50球 2F: 55球) 日祝(1F: 45球 2F: 50球)
    <br/> 早朝(月~土 ~10:00 日祝 ~9:00) 打席料0円 月~土: 1,000円70球 日祝:1,000円60球",
    "-",
    "クラブ(110円)",
    "東京都大田区仲池上2-9-17",
    "都営浅草線 西馬込駅 徒歩10分",
    "月~土 (10:00~22:00) 日祝 (9:00~21:00)",
    "https://www.keihingolf.com/",
    "",
    "大田区",
    "03-3751-4100"
);

$meguro_golf_renshu = new Golf_driving_range(
    "https://scontent-nrt1-1.xx.fbcdn.net/v/t1.18169-9/298237_270025196356696_2461750_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=cdbe9c&_nc_ohc=Do9z1zi4nDwAX-kZrlx&_nc_ht=scontent-nrt1-1.xx&oh=00_AT_WSsWQnFRasNVdBaXLRkNTrrWUE9IpuTIMb8tsuj1grA&oe=634C97C6",
    "目黒ゴルフ練習場",
    "50ヤード",
    "59打席",
    "打席料なし 1球あたり 平日14円 土日祝 15円",
    "-",
    "クラブ(200円)",
    "東京都目黒区上目黒5-6-22",
    "中目黒駅 徒歩8分",
    "6:30~22:00(日祝 ~20:00)",
    "https://meguro-golf.tokyo/",
    "",
    "目黒区",
    "03-3713-2805"
);


$kamishakuji_golf = new Golf_driving_range(
    "https://media.mizuno.com/~/media/Images/jp/golf/golfschool/practice/TEH001.jpg?h=360&la=ja-JP&w=480&v=c6a2003a-6605-4055-bbe4-c0475395c1ee",
    "上石神井ゴルフセンター",
    "100ヤード",
    "49打席",
    "打席料300円 1カゴ50球 600円",
    "-",
    "-",
    "東京都練馬区上石神井2-37-18",
    "西武新宿線 上石神井駅 徒歩5分",
    "9:00~17:00(火曜定休日)",
    "-",
    "",
    "練馬区",
    "03-3928-1059"
);


$otsuka_golf = new Golf_driving_range(
    "http://www.otsukagolf.com/img/gallery20.jpg",
    "大塚ゴルフプラザ",
    "75ヤード",
    "42打席",
    "打席料 330円 
    <br/>880円あたり 1F: 45球 2F: 55球 3F: 60球",
    "-",
    "クラブ(220円)",
    "東京都豊島区巣鴨3-6-1",
    "JR巣鴨駅 徒歩6分",
    "9:00~21:00 (土日祝 8:00~21:00)",
    "http://www.otsukagolf.com/index.php",
    "",
    "豊島区",
    "03-3918-5321"
);

$timber_golf = new Golf_driving_range(
    "https://golf-condor.com/assets/122/3469_ext_77_0_L-1f47f6082ba9c8639f4f107241c75e3b5865efda29db666bde4b66e0c8eb1f7b.jpg",
    "ティンバーゴルフ",
    "40ヤード",
    "24打席",
    "打席料 500円 1球あたり 12円",
    "-",
    "クラブ(200円)",
    "東京都世田谷区等々力7-6-6",
    "東急大井町線 尾山台駅 徒歩7分",
    "9:00~22:00",
    "-",
    "",
    "世田谷区",
    "03-3703-6449"
);


$minato_shinjuku_west  = new Golf_driving_range(
    "https://minatogolf.jp/wp-content/themes/juchi/img/shinjuku.jpg",
    "みなとゴルフ 新宿西校",
    "-",
    "7打席",
    "-",
    "1時間 1000円",
    "-",
    "東京都新宿区西新宿7丁目4-3 升本ビル9F",
    "JR 新宿駅 徒歩5分",
    "平日 11:00~21:00 土日祝 9:00~18:00",
    "https://minatogolf.jp/school/shinjuku/",
    "",
    "新宿区",
    "03-3366-2200"
);


$keiyo_golf = new Golf_driving_range(
    "https://static.wixstatic.com/media/e9307f_b3cddd8b2a6148008b031e888c8bd49f.jpg/v1/fill/w_720,h_440,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/e9307f_b3cddd8b2a6148008b031e888c8bd49f.jpg",
    "京葉ゴルフセンター",
    "70ヤード",
    "12打席",
    "打席料250円 40球400円 
    <br/>(平日 8:00~15:00 200球1,450円 21:00~22:00 打席料0円)",
    "-",
    "クラブ(100円)",
    "東京都江戸川区篠崎町2-44-29",
    "都営新宿線 篠崎駅 徒歩10分",
    "月~土 8:00~22:00 (日祝 ~21:00 火曜定休日)",
    "https://keiyogolf.wixsite.com/keiyo-golf",
    "",
    "江戸川区",
    "03-3677-1562"
);

$oizumi_birdy = new Golf_driving_range(
    "https://pic2.homemate-research.com/pubuser1/pubuser_facility_img/0/7/0/10000000000000033070/0000003627/10000000000000033070_0000003627_1.jpg",
    "大泉バーディーゴルフクラブ",
    "180ヤード",
    "42打席",
    "打席料 300円(土日祝 400円) 
    <br/>1球あたり 平日: 10円 土日祝: 12円",
    "-",
    "クラブ(200円)",
    "東京都練馬区大泉学園町7-3-26",
    "西武池袋線 大泉学園駅 徒歩28分",
    "9:00~22:30 (土日祝 7:00~22:00)",
    "-",
    "",
    "練馬区",
    "03-3925-0562"
);

$nishihara_golf = new Golf_driving_range(
    "data:image/jpeg;base64,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",
    "西原ゴルフガーデン",
    "50ヤード",
    "24打席",
    "打席料 600円 
    <br/>1球あたり 1F: 13円から 2F:12円から",
    "-",
    "-",
    "東京都渋谷区西原1-16-2",
    "京王新線 幡ヶ谷駅 徒歩4分",
    "8:00〜20:00 (水曜定休日)",
    "-",
    "",
    "渋谷区",
    "03-3460-5620"
);

$kato_noen = new Golf_driving_range(
    "https://golf-condor.com/assets/74/00.74-959267f66951c04ec5e6da444828bfe851cfe73f4d720f68e7edf4cd2cbed613.JPG",
    "加藤農園ゴルフリンクス",
    "40ヤード",
    "22打席",
    "打席料 400円 
    <br/>1球あたり 平日: 55球600円 土日祝: 55球650円",
    "平日: 60分1,600円から 
    <br/>土日祝: 60分1,800円から",
    "-",
    "東京都大田区新蒲田3-12-2",
    "JR蒲田駅 徒歩15分",
    "6:30~21:39",
    "https://katounouengolflinks.com/",
    "",
    "大田区",
    "03-3738-8476"
);

$koma_golf = new Golf_driving_range(
    "https://koma-golfgarden.com/topcms/master/upload/file61418b9b0512c.jpg",
    "駒ゴルフガーデン",
    "90ヤード",
    "24打席",
    "打席料 500円 
    <br/>1F: 50球800円 2F: 50球700円",
    "-",
    "-",
    "東京都豊島区駒込4-2-19",
    "JR駒込駅 徒歩3分",
    "8:00~21:00",
    "https://koma-golfgarden.com/",
    "",
    "豊島区",
    "03-3917-5414"
);


$nishiogi_golf = new Golf_driving_range(
    "https://image.jimcdn.com/app/cms/image/transf/none/path/seda9781359124173/image/i15e57a7c8927f56b/version/1343385498/image.jpg",
    "西荻ゴルフセンター",
    "60ヤード",
    "32打席",
    "-",
    "平日: 1時間1,500円 
    <br/>土日祝: 1時間2,000円",
    "クラブ(350円)",
    "東京都杉並区西荻北2-37-8",
    "JR西荻窪駅 徒歩5分",
    "9:00～21:00",
    "https://www.nishiogi-golf.jp/",
    "",
    "杉並区",
    "03-3396-1020"
);


$mukaihara_golf = new Golf_driving_range(
    "https://www.mukaihara.info/wp-content/gallery/photo2/IMG_2345-1.jpg",
    "向原ゴルフセンター",
    "130ヤード",
    "40惰性",
    "打席料0円 (土日祝 500円) 
    <br/>平日: 500円25球 土日祝: 500円27球",
    "-",
    "-",
    "東京都板橋区向原2-24-5",
    "小竹向原駅 徒歩2分",
    "火~日　9:00~21:00",
    "https://www.mukaihara.info/",
    "",
    "板橋区",
    "03-3972-8027"
);

$minato_ichigaya  = new Golf_driving_range(
    "https://minatogolf.jp/wp-content/themes/juchi/img/ichigaya.jpg",
    "みなとゴルフ 市ヶ谷校",
    "-",
    "-打席",
    "-",
    "30分 1000円",
    "-",
    "東京都千代田区九段北4-2-22 市ヶ谷スポーツプラザ3F",
    "JR 市ヶ谷駅 徒歩2分",
    "月~木 10:30~21:30 土 9:00~18:00 日 9:00~16:00 金祝定休日",
    "https://minatogolf.jp/school/ichigaya/",
    "",
    "千代田区",
    "03-5276-1054"
);

$edogawa_golf = new Golf_driving_range(
    "https://golf-condor.com/assets/44/044_001-ef09a6e5a323ead408bf89db1eb2324c6ac90f7407695fc5a801c53323eddbad.jpg",
    "江戸川ゴルフセンター",
    "50ヤード",
    "12打席",
    "打席料200円 50球450円",
    "-",
    "クラブ(100円)",
    "東京都江戸川区東小岩2-22-5",
    "JR小岩駅 徒歩20分",
    "10:00~22:00 (第3木曜定休日)",
    "-",
    "",
    "江戸川区",
    "03-3650-1746"
);

$tsurumaki_golf = new Golf_driving_range(
    "http://tsurumakigolf.jp/photos05.jpg",
    "弦巻ゴルフ練習場",
    "60ヤード",
    "36打席",
    "打席料450円 
    <br/>平日(1F: 600円45球 2F: 600円50球)
    <br/> 土日祝(1F: 600円40球 2F: 600円45球)",
    "-",
    "クラブ(300円)",
    "東京都世田谷区弦巻3-18-11",
    "",
    "8:00~22:00 (土日祝 7:00~)",
    "http://tsurumakigolf.jp/",
    "",
    "世田谷区",
    "03-3420-5032"
);

$rocky_golf = new Golf_driving_range(
    "http://rokiy-golf.com/img/shisetu_2.JPG",
    "ロッキゴルフセンター",
    "70ヤード",
    "20打席",
    "打席料200円 
    <br/>1球あたり 平日 ~14:00 (1F: 8円 2F: 7円) 14:00~ (1F: 10円 2F: 9円)
    <br/>土日祝(1F: 11円 2F: 10円)",
    "-",
    "クラブ(200円)",
    "東京都足立区六木2-2-22",
    "JR亀有駅 徒歩14分",
    "9:00~22:00 (土日祝 8:00~) 第2,4木曜定休日",
    "http://rokiy-golf.com/",
    "",
    "足立区",
    "03-3628-0100"
);

$acordia_gardenbay = new Golf_driving_range(
    "https://golf-medley-production.s3.ap-northeast-1.amazonaws.com/practice_facilities/ca721ba8eb080b4135cdcac223677bd97a7cf2af.jpg",
    "アコーディア・ガーデン 東京ベイ",
    "130ヤード",
    "60打席",
    "打席料0円 
    <br/>平日 ~9:00 (1F: 18円 2F: 16円) 20:00~ (1F: 22円 2F: 20円) 
    <br/>土日祝 ~9:00 (1F: 23円 2F: 21円) 20:00~ (1F: 26円 2F: 24円)",
    "打席料400円 平日 9:00~20:00 (1F: 60分2,600円 2F: 60分2,400円)
     <br/>土日祝 9:00~20:00 (1F: 60分3,400円 2F: 60分3,200円)",
    "クラブ(330円)",
    "東京都大田区大森東3-28-1",
    "京浜急行平和島駅 大森町駅 徒歩8分",
    "6:00~23:00",
    "https://www.ag-tokyobay.com/",
    "",
    "大田区",
    "03-3298-5211"
);

$asahi_golf = new Golf_driving_range(
    "https://image.jimcdn.com/app/cms/image/transf/dimension=444x10000:format=jpg/path/sf35769975a56255a/image/icdc11b068f2abc39/version/1568256068/image.jpg",
    "ザ・サンソフィアゴルフ",
    "30ヤード",
    "20打席",
    "打席料400円 1球あたり 1F: 13円 2F: 10円",
    "1F: 90分3,000円 2F: 90分2,500円",
    "クラブ(無料)",
    "東京都大田区東糀谷1-17-23",
    "京浜急行空港線 大鳥居駅 徒歩8分",
    "10:00~21:00 (土日祝 9:00~)",
    "https://www.asahi-athlete.co.jp/golf-facility/",
    "",
    "大田区",
    "03-5705-1212"
);

$tokyogolfplaza = new Golf_driving_range(
    "https://cdn.peraichi.com/userData/5f34a1fd-4378-456a-a7f1-23460a0000ae/img/63244d13dc40c/original.jpeg",
    "東京ゴルフプラザ",
    "120ヤード",
    "40打席",
    "打席料 土日祝 平日17:00~ (4-9月) 16:00~ (10-3月) 350円 当該日時以外無料
    <br/>1球あたり 平日(1F: 10円 2F: 9円) 土(1F: 11円 2F: 10円) 日祝(1F: 12円 2F: 10円)",
    "平日60分1,200円から 土日祝60分1,400円から",
    "",
    "東京都江戸川区大杉3-12-6",
    "都営新宿線 篠崎駅 徒歩25分",
    "6:00~22:00",
    "https://tokyogolfplaza.com/",
    "",
    "江戸川区",
    "03-5662-5252"
);


$golf_driving_ranges = array(
    $tokyo_jambo, $funabori, $lotte_kasai, $nakadai_golf, $sun_square, $minato_tamachi, $higashi_horikiri, $fuji_golf,
    $metro_green, $rokugo_golf, $oizumi_golf, $first_golf, $magome_golf, $okura_land, $golfgarden_takashima, $iyama_golf,
    $kamiitabashi_golf, $senzoku_golf, $gakuen_golf, $matshunoki_golf, $yaguchi_golf, $minami_nakano, $oshima_golf, $mizue_golf,
    $towa_green, $swing_himonya, $hikarigaoka_yupuraza, $meguro_golf, $tokyo_tamagawa_golf, $kamiigusa_golf,
    $asashi_golf, $yutaka_golf, $sunny_golf, $eastern, $chitose_golf, $kannana_kasugabashi, $futaba_golf, $seijo_golf,
    $green_arrow, $meiji_jingu, $ochiai_golf, $new_seijo, $keihin_golf, $meguro_golf_renshu, $kamishakuji_golf,
    $otsuka_golf, $timber_golf, $minato_shinjuku_west, $keiyo_golf, $oizumi_birdy, $nishihara_golf, $kato_noen,
    $koma_golf, $nishiogi_golf, $mukaihara_golf, $minato_ichigaya, $edogawa_golf, $tsurumaki_golf, $acordia_gardenbay,
    $asahi_golf, $tokyogolfplaza,
);
