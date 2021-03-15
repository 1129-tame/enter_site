<!DOCTYPE html><!-- このファイルはHTMLですという宣言 -->
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" contact="width=device-width, initial-scale=1">
    <title>AMA 2022マイページ</title>
    <link rel="stylesheet" href="CSS/style2.css">
</head>
<body>
        <div>
            <header><!-- アカウント管理、ページのリンク -->
                <h1 class="logo"><a href="index.html"><img src="images/enterprise-logo.png" alt="会社ロゴ"></a></h1>
                <div>
                    <ul>
                        <li>Message Box</li>
                        <li>アカウント管理</li>
                    </ul>
                    <ul>
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
            <main>
                <h1>エントリーシート確認</h1>
                <h3>$_POST['year1']</h3>
            </main>
<?php
require_once "functions.php";
$entry = $_POST;
var_dump($entry);
$highschool = $entry["highschool"];
$year1 = $entry["year1"];
$month1 = $entry["month1"];
$year2 = $entry["year2"];
$month2 = $entry["month2"];
$univercity = $entry["univercity"];
$year3 = $entry["year3"];
$month3 = $entry["month3"];
$year4 = $entry["year4"];
$month4 = $entry["month4"];
$know = $entry["know"];
$reason = $entry["reason"];

$entryseet = <<<EOT
            <main>
                <h1>エントリーシート確認</h1>
                <h3>$highschool</h3>
                <h3>$year1</h3>
                <h3>$month1</h3>
                <h3>$year2</h3>
                <h3>$month2</h3>
                <h3>$univercity</h3>
                <h3>$year3</h3>
                <h3>$month3</h3>
                <h3>$year4</h3>
                <h3>$month4</h3>
                <h3>$know</h3>
                <h3>$reason</h3>
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