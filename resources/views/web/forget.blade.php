<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <title>找回密码</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />

    <link rel="stylesheet" href="{{asset('web/AmazeUI-2.4.2/assets/css/amazeui.css')}}" />
    <link href="{{asset('web/css/dlstyle.css')}}" rel="stylesheet" type="text/css">
</head>

<body>

<div class="login-boxtitle">
    <a href="home.html"><img alt="logo" src="{{asset('web/images/logobig.png')}}" /></a>
</div>
@if (session('success'))
    <div class="alert alert-success" style="text-align: right">
        {{ session('success') }}
    </div>
@endif
<div class="login-banner">
    <div class="login-main">
        <div class="login-banner-bg"><span></span><img src="{{asset('web/images/big.jpg')}}" /></div>


        <div class="login-box">

            <h3 class="title">通过邮箱找回密码</h3>

            <div class="clear"></div>

            <div class="login-form">
                <form action="{{url('web/doforget')}}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="user-name">
                        <label for="user"><i class="am-icon-user"></i></label>
                        <input type="text" name="username" value="{{old('username')}}" id="user" placeholder="帐号">
                    </div>
                    <div class="user-email">
                        <label for="email"><i class="am-icon-envelope-o"></i></label>
                        <input type="email" name="email" id="email"
                               value="{{old('email')}}"  placeholder="请输入邮箱">
                    </div>
            </div>
            <div class="am-cf">
                <input type="submit" name="" value="找回密码" class="am-btn am-btn-primary am-btn-sm">
            </div>
            </form>

            @if (count($errors) > 0)
                <div class="partner" style="color: red">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @elseif(session('error'))
                <div class="partner" style="color: red">
                    <ul>
                        <li>{{ session('error') }}</li>
                    </ul>
                </div>
            @else
                <div class="partner">
                    <h3>合作账号</h3>
                    <div class="am-btn-group">
                        <li><a href="#"><i class="am-icon-qq am-icon-sm"></i><span>QQ登录</span></a></li>
                        <li><a href="#"><i class="am-icon-weibo am-icon-sm"></i><span>微博登录</span> </a></li>
                        <li><a href="#"><i class="am-icon-weixin am-icon-sm"></i><span>微信登录</span> </a></li>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>


<div class="footer ">
    <div class="footer-hd ">
        <p>
            <a href="# ">恒望科技</a>
            <b>|</b>
            <a href="# ">商城首页</a>
            <b>|</b>
            <a href="# ">支付宝</a>
            <b>|</b>
            <a href="# ">物流</a>
        </p>
    </div>
    <div class="footer-bd ">
        <p>
            <a href="# ">关于恒望</a>
            <a href="# ">合作伙伴</a>
            <a href="# ">联系我们</a>
            <a href="# ">网站地图</a>
            <em>© 2015-2025 Hengwang.com 版权所有</em>
        </p>
    </div>
</div>
</body>
<script>
    function re_captcha() {
        $url = "{{ URL('web/login') }}";
        $url = $url + "/" + Math.random();
        document.getElementById('c2c98f0de5a04167a9e427d883690ff6').src=$url;
    }
</script>

</html>