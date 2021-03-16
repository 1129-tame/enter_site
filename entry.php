<!DOCTYPE html><!-- このファイルはHTMLですという宣言 -->
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" contact="width=device-width, initial-scale=1">
    <title>株式会社ミラクル 2022マイページ</title>
    <link rel="stylesheet" href="CSS/style2.css">
</head>
<body>
        <div>
        <header><!-- アカウント管理、ページのリンク -->
                <h1><a href="index.html"><img  src="images/enterprise-logo.png" alt="会社ロゴ" class="logo"></a></h1>
                <div>
                    <ul class="header-right">
                        <li>Message Box</li>
                        <li>アカウント管理</li>
                    </ul>
                    <ul class="header-left">
                        <li><a href="index.html">トップ</a></li>
                        <li><a href="raiburari.html">ライブラリ</a></li>
                    </ul>
                </div>
                <div>
                    <ul>
                        <li><a href="index.html">トップページ</a></li>
                        <li><a href="entry.html">> エントリーシート</a></li>
                    </ul>
                </div>
            </header>

<?php
require_once "functions.php";
$entry = $_POST;
var_dump($entry);
$highschool = "出身高校：" . str2html($entry["highschool"]);
$yearmonth1 = "入学年月：" . str2html($entry["year1"]) . "年" . str2html($entry["month1"]). "月";
$yearmonth2 = "卒業年月：" . str2html($entry["year2"]) . "年" . str2html($entry["month2"]). "月";
$univercity = "出身大学：" . str2html($entry["univercity"]);
$yearmonth3 = "入学年月：" . str2html($entry["year3"]) . "年" . str2html($entry["month3"]). "月";
$yearmonth4 = "卒業年月：" . str2html($entry["year4"]) . "年" . str2html($entry["month4"]). "月";
$know = "知ったきっかけ：" . str2html($entry["know"]);
$reason = "志望理由：" . str2html($entry["reason"]);

$entryseet = <<<EOT
            <main>
                <h1>エントリーシート確認</h1>
                <h3>$highschool</h3>
                <h3>$yearmonth1</h3>
                <h3>$yearmonth2</h3>
                <h3>$univercity</h3>
                <h3>$yearmonth3</h3>
                <h3>$yearmonth4</h3>
                <h3>$know</h3>
                <h3>$reason</h3>
                <a href="entry_out.html"><h3><input type="submit" value="登録"></h3></a>
            </main>
EOT; 
echo "$entryseet";
?>
               <footer>
                <p>&copy;Copyright mirakuru.ALL rights reserved.</p>
            </footer>
        </div>
</body>
</html>