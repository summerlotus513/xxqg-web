<?php
// mode_1.php(程序处理类) @SummerLotus 3.28 请保留版权 www.myepoch.cn
 Class ss{
   function ssuo(){
    echo <<< html
    <head>
    <title>学习强国挑战答题搜索神器</title>
    <link href="https://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        .div1{text-align:center;width:100%;}
        .div11{margin:0 auto;width:700px;border:1px dashed #00F;height:120px;}
        .div2{width:980px;background:red;} 
        #footer {
                height: 30px;
                line-height: 30px;
                position: fixed;
                bottom: 0;
                width: 100%;
                text-align: center;
                background: #888;
                color: #fff;
                font-family: Arial;
                font-size: 13px;
                letter-spacing: 1px;
            }
        .bannerbox {
            width:100%;
            position:relative;
            overflow:hidden;
            height:200px;
        }
        .banner {
            width:400px; /*图片宽度*/
            position:absolute;
            left:50%;
            margin-left:-200px; /*图片宽度的一半*/
        }
        </style>
</head>
<body text-align:center>
        <br />
        <br />
        <br />
    <div class="bannerbox">
        <div class="banner">
            <img src="1.png">
        </div>
    </div> 
    <div class="search">
        <div class="div1">
        <form class="form-inline" action="search.php" method="post">
            <input type="text" style="height: 50px; width: 460px;" class="form-control" ng-model="query" name="search" placeholder="输入关键字"/>
            <input class="btn btn-danger btn-lg" role="button" type="submit" value="搜索"  id="btn"/>
        </form></div>
    </div>
    
html;
   }


   function div_m($id,$ques,$ans,$op){
       echo <<< html
       <div class="div11">
html;
        echo $ques;
        echo "<br/>";
        echo $op;
        echo "<br/>";
        echo "<p style='color:#ff0000; font-size:20px;'>";
        echo $ans;
        echo "</p>";
        echo "<br/>";
        echo "<br/>";
        echo "<br/>";
        echo "</div>";
        
   }
   
 }
?>
