<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!doctype html>
<html lang="en">
<head>

    <!-- meta data & title -->
    <meta charset="utf-8">
    <title>[!--pagetitle--]</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="[!--pagedes--]">
    <meta name="keywords" content="[!--pagekey--]">

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="[!--news.url--]skin/houdunren/assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="[!--news.url--]skin/houdunren/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="[!--news.url--]skin/houdunren/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="[!--news.url--]skin/houdunren/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="[!--news.url--]skin/houdunren/assets/ico/apple-touch-icon-57-precomposed.png">

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300">
    <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="[!--news.url--]skin/houdunren/assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="[!--news.url--]skin/houdunren/assets/css/font-awesome.min.css">
    <!--<link rel="stylesheet" href="[!&#45;&#45;news.url&#45;&#45;]skin/houdunren/assets/css/animate.min.css">-->
    <link rel="stylesheet" href="[!--news.url--]skin/houdunren/assets/css/style.css">
    <link rel="stylesheet" href="[!--news.url--]skin/houdunren/assets/css/swiper.min.css">
    <style>
        html, body {
            position: relative;
            height: 100%;
        }
        body {
            background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color:#000;
            margin: 0;
            padding: 0;
        }
        .swiper-container {
            width: 100%;
            /*height: 550px;*/
            margin-left: auto;
            margin-right: auto;
        }
        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            background: #fff;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
            position: relative;
        }
        .swiper-slide p{
            position: absolute;
            left:45%;
            bottom:8%;
            color:white;
            font-size:30px;
        }
        .introduce{
            overflow : hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
        }
        .news{
            margin:20px 0;
        }
    </style>
</head>
<body>
<!-- Header -->
<nav id="navbar-section" class="navbar navbar-default navbar-static-top navbar-sticky" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand wow fadeInDownBig" href="index.html"><img class="office-logo" src="[!--news.url--]skin/houdunren/assets/img/slider/Office.png" alt="Office"></a>
        </div>

        <div id="navbar-spy" class="collapse navbar-collapse navbar-responsive-collapse">
            <ul class="nav navbar-nav pull-right">

                <li class="active">
                    <a href="/">首页</a>
                </li>
                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select * from phome_enewsclass where showclass = 0',5,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                <li>
                    <a href="[!--news.url--]e/action/ListInfo/?classid=<?=$bqr['classid']?>"><?=$bqr['classname']?></a>
                </li>
                <?php
}
}
?>
                <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select * from phome_enewspage',5,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
                <li>
                    <a href="[!--news.url--]<?=$bqr['path']?>"><?=$bqr['title']?></a>
                </li>
                <?php
}
}
?>
            </ul>
        </div>
    </div>
</nav>


        <!--End Header -->


        <!-- Main Container -->

        <div class="container-fluid-kamn">
            <div class="row">
                <div>
                    <!--<iframe width="100%" height="450px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3618.727010735933!2d91.837871!3d24.907291700000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1404919738144"></iframe>-->
                    <div class="map" style="height: 500px;" id="allmap"></div>
                    <br />
                </div>
                <div class="col-lg-4 col-lg-offset-1">
                    <h4>联系我们:</h4>
                    <p class="block-author"> 后盾人 人人做后盾</p>
                    <p>北京市朝阳区马泉营顺白路12号 后盾IT教育</p>
                    <p>联系电话: 400-682-3231</p>
                </div>
                <div class="col-lg-5">
                    <div class="feedback-form">
          
                        <div id="contact-response"></div>
            
                        <form action="http://templates.designorbital.com/baleen/contact.php" method="post" id="contact-form">
                            <fieldset>
                                <div class="form-group form-group-fullname">
                                    <label class="control-label" for="fullname">姓名 *</label>
                                    <input type="text" class="form-control" name="fullname" id="fullname" placeholder="请输入你的姓名...">
                                </div>
                                <div class="form-group form-group-email">
                                    <label class="control-label" for="email">邮箱 *</label>
                                    <input type="text" class="form-control" name="email" id="email" placeholder="请输入你的邮箱...">
                                </div>
                                <div class="form-group form-group-message">
                                    <label class="control-label" for="message">说点什么 *</label>
                                    <textarea class="form-control" name="message" id="message" rows="10" style="resize: none;"></textarea>
                                </div>           
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </fieldset>
                        </form>
                    </div> 
                </div>
            </div>
        </div>    
            
    <!--End Main Container -->

<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=849628ca3f0fd087fa3558737aa03109"></script>
<script type="text/javascript" src="http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.js"></script>
<link rel="stylesheet" href="http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.css" />
<!--地图js-->
<script type="text/javascript">
    // 百度地图API功能
    var map = new BMap.Map('allmap');
    var poi = new BMap.Point(116.52179315359358,40.04801374641647);
    map.centerAndZoom(poi, 18);
    map.disableScrollWheelZoom();

    var content = '<div style="margin:0;line-height:20px;padding:2px;">' +
        '<img src="[!--news.url--]skin/houdunren/images/houdunwang.jpg" alt="" style="float:right;zoom:1;overflow:hidden;width:70px;height:70;margin-left:3px;background:#f22f16"/>' +
        '地址：北京市朝阳区马泉营顺白路12号比目鱼创业园A区<br/>电话：400-682-3231<br/>简介：后盾网隶属于北京后盾计算机技术培训有限责任公司，是专注于培养中国互联网顶尖PHP程序语言专业人才的专业型培训机构。' +
        '</div>';

    //创建检索信息窗口对象
    var searchInfoWindow = null;
    searchInfoWindow = new BMapLib.SearchInfoWindow(map, content, {
        title  : "后盾IT教育",      //标题
        width  : 340,             //宽度
        height : 125,              //高度
        panel  : "panel",         //检索结果面板
        enableAutoPan : true,     //自动平移
        searchTypes   :[
            BMAPLIB_TAB_SEARCH,   //周边检索
            BMAPLIB_TAB_TO_HERE,  //到这里去
            BMAPLIB_TAB_FROM_HERE //从这里出发
        ]
    });
    var marker = new BMap.Marker(poi); //创建marker对象
    searchInfoWindow.open(marker);
    marker.addEventListener("click", function(e){
        searchInfoWindow.open(marker);
    })
    map.addOverlay(marker); //在地图中添加marker
</script>
<!--地图js-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3><i class="fa fa-map-marker"></i> Contact:</h3>
                <p class="footer-contact">
                    北京市朝阳区马泉营顺白路12号 后盾IT教育<br><br>
                    Phone: 400-682-3231<br>
                </p>
            </div>
            <div class="col-md-4">
                <h3><i class="fa fa-external-link"></i> Links</h3>
                <p> <a href="http://www.houdunwang.com"> 后盾网</a></p>
                <p> <a href="http://www.houdunren.com"> 后盾人</a></p>
                <p> <a href="http://bbs.houdunwang.com"> 后盾论坛</a></p>
                <p> <a href="http://www.hdphp.com/"> HDPHP</a></p>
                <p> <a href="http://www.hdcms.com/"> HDCMS</a></p>
            </div>
            <div class="col-md-4">
                <h3><i class="fa fa-heart"></i> Socialize</h3>
                <div id="social-icons">
                    <a href="#" class="btn-group google-plus">
                        <i class="fa fa-google-plus"></i>
                    </a>
                    <a href="#" class="btn-group linkedin">
                        <i class="fa fa-linkedin-square"></i>
                    </a>
                    <a href="#" class="btn-group twitter">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#" class="btn-group facebook">
                        <i class="fa fa-facebook"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>


<div class="copyright text center">
    <p>&copy; Copyright 2017, <a href="http://www.houdunwang.com">www.houdunwang.com</a></p>
</div>


<script type="text/javascript" src="[!--news.url--]skin/houdunren/js/jquery-1.10.2.min.js"></script>
<script src="[!--news.url--]skin/houdunren/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="[!--news.url--]skin/houdunren/js/wow.min.js"></script>

<script>
    new WOW().init();
</script>
</body>
</html>
