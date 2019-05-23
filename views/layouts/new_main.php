<?php


/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Keywords" content="<?= $this->params['keywords'] ?>">
    <meta name="Description" content="<?= $this->params['description'] ?>">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <meta name="referrer" content="never">
    <style>
        .body {
            font: normal 12px/22px "Microsoft Yahei" !important;
        }
    </style>
</head>
<body class="body">
<?php $this->beginBody() ?>

<script>
    $(function () {
        $(".mainer").click(function () {
            $(".menu_m.m").css('display', 'none');
        });
    });
</script>

<div class="waller">
    <div class="header">
        <div class="wbox">
            <div class="logoer_m m">
                <img src="../img/m_logo.png"/>
            </div>
            <div class="logoer_02">
                <img src="../img/logo_2.png"/>
            </div>
            <div class="menu-btn m" id="menuBtn">
                <img src="../img/m/menu_btn.png"/>
            </div>
            <ul class="menu">
                <li>
                    <a href="/index">HOME</a>
                </li>
                <li>
                    <a href="javascript:void(0)">WHO WE ARE</a>
                    <ul>
                        <li>
                            <a href="/philosophy"><span class="cn">企业哲学</span><span
                                    class="en">PHILOSOPHY</span></a>
                        </li>
                        <li>
                            <a href="/network"><span class="cn">全球网络</span><span class="en">GLOBALE NETWORK</span></a>
                        </li>
                        <li>
                            <a href="/history"><span class="cn">大事记</span><span class="en">MILESTIONE</span></a>
                        </li>
                        <li>
                            <a href="/news"><span class="cn">公司新闻</span><span class="en">NEWS</span></a>
                        </li>
                        <li>
                            <a href="/team"><span class="cn">领导团队</span><span class="en">LEADERSHIP</span></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)">WHAT WE DO</a>
                    <ul>
                        <li>
                            <a href="/big-data"><span class="cn">大数据</span><span class="en">BIG DATA</span></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)">JOIN US</a>
                    <ul>
                        <li>
                            <a href="/recruitment"><span class="cn">企业招聘</span><span class="en">RECRUITMENT</span></a>
                        </li>
                        <li>
                            <a href="/activity"><span class="cn">员工活动</span><span class="en">ACTIVITIES</span></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/connect-us">CONTACT US</a>
                </li>
            </ul>
        </div>
    </div>

    <ul class="menu_m m">
        <li class="home line">
            <a href="/index">首页</a>
        </li>
        <li>
            <a href="/philosophy">企业哲学</a>
        </li>
        <li>
            <a href="/network">全球网络</a>
        </li>
        <li>
            <a href="/history">大事记</a>
        </li>
        <li>
            <a href="/news">公司新闻</a>
        </li>
        <li class="line">
            <a href="/team">领导团队</a>
        </li>
        <li class="line">
            <a href="/big-data">大数据</a>
        </li>
        <li>
            <a href="/recruitment">企业招聘</a>
        </li>
        <li class="line">
            <a href="/activity">员工活动</a>
        </li>
        <li>
            <a href="/connect-us">联系我们</a>
        </li>
    </ul>

    <?= $content ?>

    <div class="footer pc">
        <div class="wbox">
            <div class="left">
                <div class="wm"><img src="../img/wm.png"></div>
                <p>敬请关注Nint任拓企业官方微信</p>
            </div>
            <div class="right">
                <ul class="nav">
                    <li>
                        <a href="/team">LEADERSHIP</a>
                    </li>
                    <li>
                        <a href="/news">NEWS</a>
                    </li>
                    <li>
                        <a href="/history">MILESTONE</a>
                    </li>
                    <li>
                        <a href="/network">GLOBAL NETWORK</a>
                    </li>
                    <li>
                        <a href="/philosophy">PHILOSOPHY</a>
                    </li>
                    <li>
                        <a href="/philosophy">WHO WE ARE</a>
                    </li>
                </ul>
                <ul class="nav">
                    <li>
                        <a href="/connect-us">CONTACT US</a>
                    </li>
                    <li>
                        <a href="/activity">ACTIVITIES</a>
                    </li>
                    <li>
                        <a href="/recruitment">RECRUITMENT</a>
                    </li>
                    <li>
                        <a href="/recruitment">JOIN US</a>
                    </li>
                    <li>
                        <a href="/big-data">WHAT WE DO</a>
                    </li>
                </ul>
                <div class="copy">COPYRIGHT (C) NINT INC. RIGHTS RESERVED. 沪ICP备 14010700号-6</div>
            </div>
        </div>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
