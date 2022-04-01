<!DOCTYPE html>
<html lang="ko">
<head>
    <title>오결 - 간편한 결제</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no"/>
    <meta name="description" content="결제는 간편하게 || 오결!">
    <meta name="keywords" content="오결">
    <meta name="classification" content="결제 , 비대면 , 계좌 , 앱 , 은행">
    <meta name="author" content="오결">
    <!-- favicon -->
    <link rel="shortcut icon" href="/img/favicon3.png"type="image/x-icon">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- style -->
    <link rel="stylesheet" href="/css/reset.css" type="text/css" media="all">
    <link rel="stylesheet" href="/css/layout.css" type="text/css" media="all">
    <link rel="stylesheet" href="/css/common.css" type="text/css" media="all">
    <link rel="stylesheet" href="/css/content.css" type="text/css" media="all">
    <link rel="stylesheet" href="/css/main.css" type="text/css" media="all">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
<div class="wrap">
    <header>

    </header>
    <div class="sub_container">
        <div class="inner">
            <h2>오결 공지사항</h2>
            <div class="faq">
                <div class="sh_container">
                    <div class="notice_box">
                        <div class="inner">
                            <ul>
                                @foreach($data as $row)
                                <li>
                                    <a href="javascript:;">
                                        <div class="notice_left">
                                            No.{{$row->id}} <span>{{$row->title}}<br><em>{{$row->created_at}}</em></span>
                                        </div>
                                    </a>
                                    <div class="notice_depth">
                                        <?php echo $row->body ?>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="/js/jquery-3.4.1.min.js" type="text/javascript"></script>
<script src="/js/script.js" type="text/javascript"></script>
<script>
    //자주묻는 질문
    $(".notice_box ul li a").on('click', function(){
        $(this).toggleClass("sh_on");
        $(this).closest('li').siblings().find('a').removeClass('sh_on');

        $(this).next().slideToggle(200);
        $(this).closest('li').siblings().find('.sh_depth').slideUp(200);
    });
</script>
