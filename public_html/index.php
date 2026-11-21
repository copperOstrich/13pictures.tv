<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <title>13 Pictures</title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="13 Pictures" /> 
    <link href="css/reset-min.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery-1.5.1.min.js"></script> 
    <script type="text/javascript" src="js/supersized.3.0.core.js"></script>
    <script type="text/javascript" src="js/jquery.onProximityFade-1.0.0.js"></script>
    
    <script type="text/javascript">  
        $(function(){
            $.fn.supersized.options = {
                startwidth: 2100,  
                startheight: 945,
                vertical_center: 1,
                slides : [ {image : './assets/bg.jpg' } ]
            };
            $('#fsBackground').supersized(); 
        });
        
        opf = {
            farOpacity : 0,
            farDistanceMax : 100,
            closeOpacity : 0.85,
            closeDistanceMin : 0,
            className : "footer" 
        };
    </script> 
</head>
<body>
    <!-- <div id="fsBackground"></div> --> <!-- "fsBackground" -->
    <div class="title"><a href="mailto:hello@13pictures.tv">13Pictures</a><sup>&reg;</sup></div>
    <div class="footer"><span class="ftext"><a href="http://www.lovedesigns.com.au" target="_blank">lovedesigns</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;copyright &copy; <?php echo date("Y") ?></span></div>
</body>
</html>
