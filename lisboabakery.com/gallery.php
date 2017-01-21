<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include('header.php'); ?>
	</head>
	<body onload="CheckCookie()">	
		<?php include('banner.php'); ?>
			<script>
				document.getElementById("galleryNav").className = "active";
			</script>
			<div class="page-header">
				<h1>Gallery <small>Food, events and memories</header></h1>
			</div>
			
			<body style="padding:0px; margin:0px; font-family:'Open Sans',sans-serif,arial,helvetica,verdana">

    <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: http://www.jssor.com -->
    <!-- This code works with jquery library. -->
    <script src="javascript/jquery-1.11.3.min.js" type="text/javascript" data-library="jquery" data-version="1.11.3"></script>
    <script src="javascript/jssor.slider-22.0.15.mini.js" type="text/javascript" data-library="jssor.slider.mini" data-version="22.0.15"></script>
    <script src="javascript/gallery.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="css/gallery.css">
	
    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 960px; height: 480px; overflow: hidden; visibility: hidden; background-color: #24262e;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('images/gallery/controls/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 240px; width: 720px; height: 480px; overflow: hidden;">
            <div data-p="150.00">
                <img data-u="image" src="images/gallery/images/image1.jpg" />
                <img data-u="thumb" src="images/gallery/thumbnails/image1.jpg" />
            </div>
            <div data-p="150.00" style="display:none;">
                <img data-u="image" src="images/gallery/images/image2.jpg" />
                <img data-u="thumb" src="images/gallery/thumbnails/image2.jpg" />
            </div>
            <div data-p="150.00" style="display:none;">
                <img data-u="image" src="images/gallery/images/image3.jpg" />
                <img data-u="thumb" src="images/gallery/thumbnails/image3.jpg" />
            </div>
            <div data-p="150.00" style="display:none;">
                <img data-u="image" src="images/gallery/images/image4.jpg" />
                <img data-u="thumb" src="images/gallery/thumbnails/image4.jpg" />
            </div>
            <div data-p="150.00" style="display:none;">
                <img data-u="image" src="images/gallery/images/image5.jpg" />
                <img data-u="thumb" src="images/gallery/thumbnails/image5.jpg" />
            </div>
            <div data-p="150.00" style="display:none;">
                <img data-u="image" src="images/gallery/images/image6.jpg" />
                <img data-u="thumb" src="images/gallery/thumbnails/image6.jpg" />
            </div>
            <div data-p="150.00" style="display:none;">
                <img data-u="image" src="images/gallery/images/image7.jpg" />
                <img data-u="thumb" src="images/gallery/thumbnails/image7.jpg" />
            </div>
            <a data-u="any" href="http://www.jssor.com" style="display:none">Image Gallery with Vertical Thumbnail</a>
            <div data-p="150.00" style="display:none;">
                <img data-u="image" src="images/gallery/images/image8.jpg" />
                <img data-u="thumb" src="images/gallery/thumbnails/image8.jpg" />
            </div>
            <div data-p="150.00" style="display:none;">
                <img data-u="image" src="images/gallery/images/image9.jpg" />
                <img data-u="thumb" src="images/gallery/thumbnails/image9.jpg" />
            </div>
            <div data-p="150.00" style="display:none;">
                <img data-u="image" src="images/gallery/images/image10.jpg" />
                <img data-u="thumb" src="images/gallery/thumbnails/image10.jpg" />
            </div>
            <div data-p="150.00" style="display:none;">
                <img data-u="image" src="images/gallery/images/image11.jpg" />
                <img data-u="thumb" src="images/gallery/thumbnails/image11.jpg" />
            </div>
            <div data-p="150.00" style="display:none;">
                <img data-u="image" src="images/gallery/images/image12.jpg" />
                <img data-u="thumb" src="images/gallery/thumbnails/image12.jpg" />
            </div>
        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort01-99-66" style="position:absolute;left:0px;top:0px;width:240px;height:480px;" data-autocenter="2">
            <!-- Thumbnail Item Skin Begin -->
            <div data-u="slides" style="cursor: default;">
                <div data-u="prototype" class="p">
                    <div class="w">
                        <div data-u="thumbnailtemplate" class="t"></div>
                    </div>
                    <div class="c"></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora05l" style="top:0px;left:248px;width:40px;height:40px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora05r" style="top:0px;right:8px;width:40px;height:40px;" data-autocenter="2"></span>
    </div>
    <!-- #endregion Jssor Slider End -->
			
		<?php include('footer.php'); ?>
	</body>
</html>