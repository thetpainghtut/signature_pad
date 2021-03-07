

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Template Site ver1</title>

    <!--Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--Font Awesome5-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <!--自作CSS -->
    
     

    </style>
</head>		
<body>
    

<header>
    <nav class="navbar navbar-expand-md navbar-light bg-danger">
        <!-- ロゴ -->
        <a class="navbar-brand text-white" href="#">Wits</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header" aria-expanded="false" aria-label="ナビゲーションの切替">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-header">
            <!-- nav-item 左寄せ -->
            <!-- この下の行に mr-auto クラスを付与するだけ -->
            <ul class="navbar-nav mr-auto">　
                <li class="nav-item"><a class="nav-link active text-white" href="#">HOME</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">管理情報</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#"></i>検索</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#"></i>ニュース</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#"></i>書籍</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#"></i>TWITTER(JP)</a></li>
            </ul>
            <!-- nav-item 右寄せ -->
            <ul class="navbar-nav nav nav-pills">
                <li class="nav-item"><a class="nav-link active text-white bg-danger active" href="#">お問い合わせ</a></li>
            </ul>
        </div>
    </nav>
</header>




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
{{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><!--このバージョンでないとニョキっと出るメニューが出ない-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
    // ニョキっと出るメニュー
    $(function() {
        var headNav = $("header");
        //scrollだけだと読み込み時困るのでloadも追加
        $(window).on('load scroll', function () {
            //現在の位置が500px以上かつ、クラスfixedが付与されていない時
            if($(this).scrollTop() > 500 && headNav.hasClass('fixed') == false) {
                //headerの高さ分上に設定
                headNav.css({"top": '-100px'});
                //クラスfixedを付与
                headNav.addClass('fixed');
                //位置を0に設定し、アニメーションのスピードを指定
                headNav.animate({"top": 0},600);
            }
            //現在の位置が300px以下かつ、クラスfixedが付与されている時にfixedを外す
            else if($(this).scrollTop() < 300 && headNav.hasClass('fixed') == true){
                headNav.removeClass('fixed');
            }
        });
    });
</script>
<body>
@extends('table')
</body>

<footer class="footer mt-auto py-3">
    <div class="container">
        <span class="text-muted">ここには固定フッタのコンテンツを配置。</span>
    </div>
</footer>
</html>