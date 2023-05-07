<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>X3D Models</title>
<link rel="stylesheet" href="__STATIC__/index/css/bootstrap.min.css">
<link rel="stylesheet" href="__STATIC__/index/css/all.min.css">
<link rel="stylesheet" href="__STATIC__/index/css/animate.css">
<link rel="stylesheet" href="__STATIC__/index/css/magnific-popup.css">
<link rel="stylesheet" href="__STATIC__/index/css/owl.min.css">
<link rel="stylesheet" href="__STATIC__/index/css/flaticon.css">
<link rel="stylesheet" href="__STATIC__/index/css/odometer.css">
<link rel="stylesheet" href="__STATIC__/index/css/main.css">
<link rel='stylesheet' type='text/css' href='https://www.x3dom.org/download/x3dom.css'></link>
<script type='text/javascript' src='https://www.x3dom.org/download/x3dom.js'> </script>
</head>
<body>
<div class="overlay"></div>
<a href="#0" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
<div class="preloader">
  <div class='loader'></div>
</div>
<!-- === Header Section === -->
<header class="header-section">
    <div class="container">
        <div class="header-wrapper">
        <ul class="menu ml-lg-auto">
            <li><a href="{:url('/index')}" class="aaaa">Home</a></li>
            <li><a href="{:url('/about')}">About</a></li>
            <li><a href="{:url('/originalStatement')}">Original statement</a></li>
            <li><a href="{:url('/reference')}">reference</a></li>
            <li><a href="{:url('/cocaCola')}" class="custom-button">X3D Models</a></li>
        </ul>
        <div class="header-bar"><span></span><span></span><span></span></div>
        </div>
    </div>
</header>
<!-- === Header Section === --><!-- === Hero Section === -->
<section class="hero-section"><a href="#about" class="banner-icon"><i class="flaticon-down-arrow"></i></a>
  <div class="container">
    <div class="hero-content">
      <h1 class="title"><span>The best choice for happiness</span></h1>
      <!-- <ul class="breadcrumb">
        <li><a href="home.html">Home</a></li>
        <li><span>Contact</span></li>
      </ul> -->
    </div>
  </div>
</section>

<!-- === x3d === -->
<style>
    .x3d-warpper {
        margin-bottom: 100px;
        padding-top: 20px;
        text-align: center;
    }
    .handle-wrapper {
        margin: 10px 0;
        text-align: center;
    }
    .handle-btn {
        margin-bottom: 12px;
        display: flex;
        justify-content: center;
    }
    .btn-item {
        margin: 0 10px;
        padding: 10px 30px;
        max-width: 180px;
        background: #08D565;
        color: #fff;
        border: none;
        outline: none;
        font-weight: 700;
        border-radius: 5px;
        overflow: hidden;
        cursor: pointer;
    }
    .btn-option {
        display: block;
        height: 40px;
        line-height: 40px;
    }
    x3d {
        margin: auto;
    }
</style>
<div class="x3d-warpper">
    <!-- 按钮组 -->
    <div class="handle-wrapper">
        <div class="handle-btn">
            <div class="btn-item" onclick="document.getElementById('front').setAttribute('set_bind','true');">front view</div>
            <div class="btn-item" onclick="document.getElementById('right').setAttribute('set_bind','true');">right view</div>
            <div class="btn-item" onclick="document.getElementById('left').setAttribute('set_bind','true');">left view</div>
            <div class="btn-item" onclick="document.getElementById('top').setAttribute('set_bind','true');">top view</div>

            <div class="btn-item" onclick="changeSetting('on')">Light on/off</div>
            <select class="btn-item" name="pets" id="pet-select" onchange="handleShowModel(this)">
                <option value="0" class="btn-option">Fenta</option>
                <option value="1" class="btn-option">Powerade</option>
                <option value="2" class="btn-option">Appletiser</option>
            </select>
        </div>
    </div>
    <!-- 模型 -->
    <x3d width="100%" height="500px">
        <scene DEF='scene'>
            <!-- 视角 -->
            <Viewpoint id="front" position="-0.07427 0.95329 -2.79608" orientation="-0.01451 0.99989 0.00319 3.15833" description="camera"></Viewpoint>
            <Viewpoint id="right" position="-2.43383 1.07351 -1.28700" orientation="-0.00318 -0.99950 -0.03159 2.06609" description="camera"></Viewpoint>
            <Viewpoint id="left" position="2.70190 1.05153 -0.57128" orientation="-0.0168 0.9962 0.0193 1.7378" description="camera"></Viewpoint>
            <Viewpoint id="top" position="0.05087 3.78235 -1.75890" orientation="-0.00307 0.87466 0.48473 3.12040" description="camera"></Viewpoint>

            <!-- 背景颜色 -->
            <background skyColor="0.098 0.086 0.203"></background>

            <!-- 导航信息 -->
            <!-- <navigationInfo id="head" headlight='false' type='"EXAMINE"'></navigationInfo> -->

            <!-- 光源 8, 213, 101-->
            <!-- shadowIntensity: 阴影强度， shadowCascades： 影子瀑布，shadowFilterSize：阴影滤镜大小, shadowMapSize : 阴影地图大小-->
            <directionalLight id="directional" direction='0 -1 0' on="true" intensity='1' shadowIntensity='0.08'
                              shadowCascades="0.1" shadowFilterSize="32" shadowMapSize="1000">
            </directionalLight>


            <!-- <directionalLight id="directional" direction='0 -2 0' on="true" intensity='1.0' shadowIntensity='0.4'
                shadowCascades="0.5" shadowFilterSize="16" shadowMapSize="512">
            </directionalLight> -->

            <!-- 光源 -->
            <!-- intensity: 强度  location： 位置， radius：半径-->
            <!-- <pointLight id='point' on='true' intensity='0.9' color='0 1 0' location='0 2 0.5 ' radius='1' ></pointLight>  -->

            <!-- 聚光灯 -->
            <!--direction:方向， ambientIntensity: 环境强度，attenuation: 衰减，beamWidth: 波束宽度, cutOffAngle:截止角， radius:半径-->
            <spotLight direction="0 -10 2" id="spotLight" intensity="1" location="0 -1 0"
                       ambientIntensity="0.8" attenuation="0.2 0.05 0.05"
                       beamWidth="0.4" cutOffAngle="1" radius="1.4"></spotLight>


            <!-- <MetallicMaterial DEF="MetallicMaterial" roughness="0.1" metalness="1.0" /> -->

            <Switch whichChoice="0" id="switcher">
                <!-- fanta -->
                <Transform scale="0.8 0.8 0.8" translation="0 0.4 0">
                    <Inline url="__STATIC__/index/fanta.x3d" nameSpaceName="MAIN" mapDEFToID="true"></Inline>
                </Transform>

                <!-- Lilt -->
                <Transform scale="0.8 0.8 0.8" translation="0 0.4 0">
                    <Inline  url="__STATIC__/index/power.x3d" nameSpaceName="MAIN" mapDEFToID="true"></Inline>
                </Transform>

                <!-- Appletiser   -->
                <Transform id="Appletiser" translation="0 0.4 -1.5" scale="0.6 0.6 0.6"  rotation='0 0 0 0'>
                    <Inline  url="__STATIC__/index/hhh.x3d" nameSpaceName="MAIN" mapDEFToID="true"></Inline>
                </Transform>

            </Switch>


            <Switch whichChoice="0" id="switcher2">
                <!-- 底板 -->
                <Transform translation="0 0.3 0" rotation="1 0 0 -1.57">
                    <Shape>
                        <Appearance>
                            <Material diffuseColor="0.96 0.96 0.96"></Material>
                        </Appearance>
                        <Plane solid="false" size="2 2"></Plane>
                    </Shape>
                </Transform>
            </Switch>

        </scene>
    </x3d>
</div>

<div>
    <h5 style="margin: 0 auto;width: 50%;" id="span_0">Bright, bubbly, instantly refreshing and great tasting. Fanta is made with 100% natural flavours and is caffeine free. Fanta is available in a variety of real fruit flavours.</h5>
    <h5 style="margin: 0 auto;width: 50%;display: none" id="span_1">Developed with sports scientists, Powerade is a still,  isotonic sports drink that helps support effective hydration and carbohydrates for replenishing the energy and fluids  that your body loses during exercise.
        I have updated the packaging of Powerade, hoping that Powerade can develop functional drinks with stronger resilience and can be used as the packaging of new products.</h5>
    <h5 style="margin: 0 auto;width: 50%;display: none" id="span_2">For over 50 years, Appletiser has been expertly crafting its unique blend of sparkling 100% natural apple juice. It has no added sugar, colourants, or preservatives and it is the perfect drink to accompany food or for other social occasions.</h5>
</div>

<!-- === x3d === -->

<!-- === Footer Section === -->
<script src="__STATIC__/index/js/jquery-3.3.1.min.js"></script>
<script src="__STATIC__/index/js/bootstrap.min.js"></script>
<script src="__STATIC__/index/js/isotope-pkgd.min.js"></script>
<script src="__STATIC__/index/js/magnific-popup.min.js"></script>
<script src="__STATIC__/index/js/wow.min.js"></script>
<script src="__STATIC__/index/js/owl.min.js"></script>
<script src="__STATIC__/index/js/viewport.jquery.js"></script>
<script src="__STATIC__/index/js/odometer.min.js"></script>
<script src="__STATIC__/index/js/circle-progress.js"></script>
<script src="__STATIC__/index/js/contact.js"></script>
<script src="__STATIC__/index/js/main.js"></script>
<script>
    let lamplight = true
    // 灯光开启和关闭
    function changeSetting(field, value) {
        lamplight = !lamplight
        var dirLight = document.getElementById("directional");
        dirLight.setAttribute(field, lamplight);

        var dirLight3 = document.getElementById("spotLight");
        dirLight3.setAttribute(field, lamplight);

        // 关灯 关闭底板
        // var dirLight2 = document.getElementById("switcher2");
        // if (lamplight) {
        //     dirLight2.setAttribute("whichChoice", 0);
        // } else {
        //     dirLight2.setAttribute("whichChoice", 1);
        // }
    }

    // 模型切换
    function handleShowModel (e) {
        var dirLight1 = document.getElementById("switcher");
        dirLight1.setAttribute("whichChoice", $(e).val());

        // console.log(document.getElementsByClassName("span_"+$(e).val()));
        var span_obj = document.getElementById("span_"+$(e).val());
        span_obj.style.display = "block";

        $("#span_"+$(e).val()).siblings('h5').css('display', 'none');
    }
</script>
</body>
</html>
