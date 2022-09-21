<!DOCTYPE html>
<?php
require_once("data.php");
require_once("golf_driving_range.php");
?>
<script type="text/javascript" src="link_imagemap_to_checkbox.js"></script>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>東京都23区ゴルフ屋外練習場まとめ</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-rwdImageMaps/1.6/jquery.rwdImageMaps.min.js"></script>
</head>

<body>
    <header>
        <div class="container">
            <div class="header-intro">
                <div class="header-intro-left">
                    <a class="pagetop" href="#">
                        <div class="pagetop__arrow"></div>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <div class="top-wrapper">
        <div class="container">
            <div class="top-intro">
                <h3>東京都23区ゴルフ練習場まとめサイト</h3>
                <p>屋外30ヤード以上のゴルフレンジを区ごとに検索可能</p>
            </div>
        </div>
    </div>
    <div class="check-wrapper">
        <div class="container">
            <div class="check-box">
                <div class="check-box-map">
                    <div class="check-box-map-text">
                        <p>検索したい区を選択してください
                            <br />（マップをクリックするかボックスにチェックを入れてください）
                            <br />デバイスによってはマップをクリックできない場合がございます
                        </p>
                    </div>
                    <div class="imagemap-img_and_map">
                        <img src="cities.png" usemap="#ImageMap" alt="" />
                        <map name="ImageMap">
                            <area shape="rect" coords="841,24,970,389" href="#" alt="edogawa" onclick="return link_imagemap_to_checkbox('edogawa')" />
                            <area shape="rect" coords="708,27,830,111" href="#" alt="katsushika" onclick="return link_imagemap_to_checkbox('katsushika')" />
                            <area shape="rect" coords="709,123,832,243" href="#" alt="sumida" onclick="return link_imagemap_to_checkbox('sumida')" />
                            <area shape="rect" coords="706,260,830,392" href="#" alt="koutou" onclick="return link_imagemap_to_checkbox('koutou')" />
                            <area shape="rect" coords="512,26,694,108" href="#" alt="adachi" onclick="return link_imagemap_to_checkbox('adachi')" />
                            <area shape="rect" coords="512,121,695,182" href="#" alt="arakawa" onclick="return link_imagemap_to_checkbox('arakawa')" />
                            <area shape="rect" coords="518,187,695,245" href="#" alt="taitou" onclick="return link_imagemap_to_checkbox('taitou')" />
                            <area shape="rect" coords="570,253,691,393" href="#" alt="chuou" onclick="return link_imagemap_to_checkbox('chuou')" />
                            <area shape="rect" coords="445,252,561,317" href="#" alt="chiyoda" onclick="return link_imagemap_to_checkbox('chiyoda')" />
                            <area shape="rect" coords="380,325,559,395" href="#" alt="minato" onclick="return link_imagemap_to_checkbox('minato')" />
                            <area shape="rect" coords="446,400,557,467" href="#" alt="shinagawa" onclick="return link_imagemap_to_checkbox('shinagawa')" />
                            <area shape="rect" coords="321,471,560,538" href="#" alt="ota" onclick="return link_imagemap_to_checkbox('ota')" />
                            <area shape="rect" coords="269,118,510,181" href="#" alt="kita" onclick="return link_imagemap_to_checkbox('kita')" />
                            <area shape="rect" coords="323,186,503,243" href="#" alt="bunkyou" onclick="return link_imagemap_to_checkbox('bunkyou')" />
                            <area shape="rect" coords="254,256,431,319" href="#" alt="shinuku" onclick="return link_imagemap_to_checkbox('shinjuku')" />
                            <area shape="rect" coords="314,398,435,465" href="#" alt="meguro" onclick="return link_imagemap_to_checkbox('meguro')" />
                            <area shape="rect" coords="258,323,370,389" href="#" alt="shibuya" onclick="return link_imagemap_to_checkbox('shibuya')" />
                            <area shape="rect" coords="201,188,316,245" href="#" alt="toshima" onclick="return link_imagemap_to_checkbox('toshima')" />
                            <area shape="rect" coords="38,121,266,178" href="#" alt="itabashi" onclick="return link_imagemap_to_checkbox('itabashi')" />
                            <area shape="rect" coords="146,251,245,393" href="#" alt="nakano" onclick="return link_imagemap_to_checkbox('nakano')" />
                            <area shape="rect" coords="38,185,190,249" href="#" alt="nerima" onclick="return link_imagemap_to_checkbox('nerima')" />
                            <area shape="rect" coords="39,256,137,389" href="#" alt="suginami" onclick="return link_imagemap_to_checkbox('suginami')" />
                            <area shape="rect" coords="40,399,305,536" href="#" alt="setagaya" onclick="return link_imagemap_to_checkbox('setagaya')" />
                        </map>
                    </div>
                </div>
                <div>
                    <div class=<?php "checkbox-box_and_name" ?>>
                        <?php foreach (array_keys($cities) as $city_roma) : ?>
                            <input type="checkbox" class=<?php echo $city_roma ?> id=<?php echo $city_roma ?> value=<?php echo $cities[$city_roma] ?>>
                            <?php echo " &nbsp" . $cities[$city_roma] . "("  . Golf_driving_range::getNumber_ranges_in_city($cities[$city_roma]) . ") &nbsp" ?>
                        <?php endforeach; ?>
                    </div>
                    <?php foreach (array_keys($cities) as $city_roma) : ?>
                        <div class=<?php echo $city_roma . "-info_and_list" ?>>
                            <div class=<?php echo $city_roma . "-info" ?>>
                                <h3><?php echo $cities[$city_roma] . "にあるゴルフ練習場（" . Golf_driving_range::getNumber_ranges_in_city($cities[$city_roma]) . "件）"; ?></h3>
                            </div>
                            <div class=<?php echo $city_roma . "-list" ?>>
                                <?php foreach ($golf_driving_ranges as $golf_driving_range) : ?>
                                    <?php if ($cities[$city_roma] == $golf_driving_range->getCity()) : ?>
                                        <div class=<?php echo $city_roma . "-practice_field" ?>>
                                            <img src=<?php echo $golf_driving_range->getImage(); ?>>
                                            <div class="<?php echo $city_roma . "-practice_field-text" ?>">
                                                <table>
                                                    <tr>
                                                        <td class="table-property table-property-name">名前</td>
                                                        <td class="table-value table-property-name"><?php echo $golf_driving_range->getName(); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-property">営業時間</td>
                                                        <td class="table-value"><?php echo $golf_driving_range->getBusinesstimes(); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-property">料金</td>
                                                        <td class="table-value"><?php echo $golf_driving_range->getFee(); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-property">打ち放題</td>
                                                        <td class="table-value"><?php echo $golf_driving_range->getAllyoucan(); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-property">ヤード数</td>
                                                        <td class="table-value"><?php echo $golf_driving_range->getMaxdistance(); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-property">打席数</td>
                                                        <td class="table-value"><?php echo $golf_driving_range->getCapacity(); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-property">住所</td>
                                                        <td class="table-value"><?php echo $golf_driving_range->getAddress(); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-property">アクセス</td>
                                                        <td class="table-value"><?php echo $golf_driving_range->getAccess(); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-property">お問い合わせ</td>
                                                        <td class="table-value"><?php echo $golf_driving_range->getTell(); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-property">公式サイト</td>
                                                        <td class="table-value">
                                                            <?php if ($golf_driving_range->getOfficialsite() == "-") : ?>
                                                                -
                                                            <?php else : ?>
                                                                <a href=<?php echo $golf_driving_range->getOfficialsite(); ?>>公式サイト・SNS</a>
                                                            <?php endif; ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="footer-right">
                本サイトに掲載されている情報は正確でない場合がございます。<br\>
                    詳しくは各ゴルフ場の公式サイトなどでご確認ください。
            </div>
        </div>
    </footer>
    <script src="imageMapResizer.min.js"></script>
    <script>
        $('img[usemap]').rwdImageMaps();
    </script>
</body>

</html>