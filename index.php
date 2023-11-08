<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style_Deco.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JIKKYO PENSION</title>
</head>

<body>
    <!-- header start -->
    <header id="header">
        <div id="pr">
            <p>部活・サークル等のグループ利用に最適！アットホームなペンション</p>

        </div>
        <h1><a href="index.html"><img src="images/logo.png" alt="ロゴ">
            </a></h1>
        <div id="contact">
            <h2>ご予約/お問い合わせ</h2>
            <span class="tel">☎0120-000-000</span>

        </div>
    </header>
    <!-- header finish -->
    <!-- menu start -->
    <nav id="menu">
        <?php include("topmenu.php");?>
    </nav>
    <!-- menu finish -->
    <!-- eyecatch -->
    <div id="icatch">
        <img src="images/icatch.jpg" alt="アイキャッチ">

    </div>
    <!-- eyecatch finish -->
    <!-- contents start -->
    <div id="contents"></div>
    <!-- main start -->
    <main id="main">
        <article>
            <section>
                <h2><img class="small" src="images/new.png"><br>更新情報</h2>
                <dl class="information">
                    <dt>2016-02-15</dt>
                    <dd>
                        サイトオープンしました。
                    </dd>
                </dl>


            </section>
            <section>
                <h2><img class="small" src="images/about.png"><br>Jikkyo Pensionについて</h2>
                <h3>にこやか笑顔でお出迎え</h3>
                <p>
                    少人数で営業している当ペンションですが、スタッフ一同心掛けているのは、<br>
                    にこやかな笑顔で接客対応することです！
                </p>
                <h3>大人数でワイワイと</h3>
                <p>
                    部活やサークル、仲のいいお友達同士などと、<br>
                    大人数でワイワイしながら、過ごすのに最適な環境づくりを目指しています！
                </p>
                <h3>観光スポットに恵まれた好立地</h3>
                <p>
                    ゲレンデ、テニスコート、各種レクレーション施設へのアクセスは抜群です！<br>
                    また、温泉地の中心街からも近いため、観光にも最適です！
                </p>



            </section>
        </article>
    </main>
    <!-- main finish -->
    <!-- side start -->
    <aside id="side">
        <section>
            <h2>ご予約</h2>
            <ul>
                <li><a href="reserveDay.php">宿泊入力</a></li>
            </ul>


        </section>
        <section>
            <h2>お部屋紹介</h2>
            <?php include("sideList.php"); ?>
        </section>
    </aside>
    <!-- aside finish -->
        
    <!-- saide finish -->
    <!-- pagetop start -->
    <div id="pageTop">
        <a href="#top">ページのトップへ戻る</a>
    </div>
    <!-- pagetop finish -->
    </div>
    <!-- contents finish -->

    <!-- footer start -->
    <footer id="footer">
        <p>Copyright c 2016 Jikkyo Pension All Rights Reserved.</p>
    </footer>
    <!-- footer finish -->

</body>

</html>