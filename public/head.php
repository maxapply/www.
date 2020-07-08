
<style>
  /* 初始化样式 */
    * {
      margin: 0;
      padding: 0;
      list-style-type: none;
    }
    * a {
      text-decoration: none;
      color: #000;
    }
    body {
      font: 14px/1.5 Microsoft Yahei, Tahoma, Arial, sans-serif;
    }
    .w {
      width: 1200px;
      margin: 0 auto;
      overflow: hidden;
    }
    li {
      list-style: none;
    }
    /* 地区导航栏 */
    .navTop {
      width: 100%;
      height: 33px;
      background: #28649d;
      min-width: 1200px;
    }
    .navTop ul {
      padding: 0 40px;
    }
    .navTop ul li:last-child {
      float: right;
    }
    .navTop ul li {
      list-style: none;
      float: left;
    }
    .navTop ul li a {
      margin-left: 15px;
      padding: 10px 10px;
      text-decoration: none;
      font-size: 15px;
      line-height: 33px;
      color: #eee;
    }
    .navTop ul li:hover {
      background-color: #7a7ae4;
    }



    /* logo部分 */
    .logo {
      min-width: 1200px;
      width: 100%;
      height: 106px;
      background-color: #fff;
      overflow: hidden;
    }
    .logo .log_fl {
      float: left;
      width: 550px;
    }
    .logo .log_fl img {
      margin-top:20px;
      margin-left: 50px;
      
    }
    .logo .log_fr {
      float: right;
      width: 500px;
      height: 106px;
      overflow: hidden;
      margin-right: 150px;
    }
    .logo .log_fr .yi {
      text-align: center;
      padding: 30px 30px 0 30px;
      border-left: 1px solid #ededed;
      height: 76px;
      float: left;
      cursor: pointer;
    }
    .logo .log_fr .yi a {
      text-decoration: none;
      color: #123cb9;
      font-family: "sans-serif", "微软雅黑";
    }
    .logo .log_fr .yi a.aa {
      display: block;
      width: 30px;
      height: 30px;
      margin: 0 auto;
      background: url(../img/icon/top.png) no-repeat;
      background-position: -1px -230px;
    }
    .logo .log_fr .yi i.bb {
      display: block;
      width: 12px;
      height: 8px;
      margin: 0 auto;
      background: url(../img/icon/top.png) no-repeat;
      background-position: -5px -398px;
    }
    .logo .log_fr .er {
      width: 100px;
      text-align: center;
      padding: 30px 30px 0 30px;
      border-left: 1px solid #ededed;
      height: 76px;
      float: left;
      cursor: pointer;
    }
    .logo .log_fr .er a {
      text-decoration: none;
      color: #123cb9;
      font-family: "sans-serif", "微软雅黑";
    }
    .logo .log_fr .er a.aa {
      display: block;
      width: 30px;
      height: 30px;
      margin: 0 auto;
      background: url(../img/icon/top.png) no-repeat;
      background-position: 3px -83px;
    }
    .logo .log_fr .er i.aa {
      display: block;
      width: 12px;
      height: 8px;
      margin: 0 auto;
      background: url(../img/icon/top.png) no-repeat;
      background-position: -5px -398px;
    }
    .logo .log_fr .san {
      width: 220px;
      height: 106px;
      float: left;
      padding:28px 10px;
      box-sizing: border-box;
      border-left: 1px solid #ededed;
    }

    .logo .log_fr .san .sanBox img {
      width:50px;
      height:50px;
      float: left;
    }
    .logo .log_fr .san .sanBox .span_01{
      color: #0983c6;
      font-size: 14px;
      float: left;
    }
    .logo .log_fr .san .sanBox .span_02{
      color: #0983c6;
      font-size: 18px;
      float: left;
    }







    .addbox {
      position: absolute;
      display: none;
      width: 600px;
      height: 306px;
      z-index: 9999;
      left: 750px;
      padding-top: 10px;
    }

    /* 显隐医院地址 */
    .address {
      width: 600px;
      height: 306px;
      opacity: 0.95;
      z-index: 9999;
      background-color: #fff;
      padding: 10px 70px 0px 20px;
      box-sizing: border-box;
    }
    .address h2 {
      color: #286ba5;
      height: 45px;
      line-height: 45px;
      border-bottom: 1px solid #ddd;
      margin-bottom: 30px;
    }
    .address p {
      font-size: 12px;
      height: 18px;
      line-height: 18px;
    }
    .address .addimg {
      width: 100%;
      height: 170px;
      box-sizing: border-box;
      padding: 0 15px;
      padding-top: 25px;
    }
    .address .addimg img {
      width: 100%;
      height: 100%;
    }
    .isShow {
      display: block;
    }


    /* 显隐关注我们 */
    .follow {
      display: none;
      width: 390px;
      height: 200px;
      position: absolute;
      z-index: 9999;
      left: 900px;
      box-sizing: border-box;
      padding-top: 10px;
    }
    .follow .follow_1 {
      width: 100%;
      height: 100%;
      opacity: 0.95;
      background-color: #fff;
      padding: 25px 40px 15px;
      box-sizing: border-box;
    }
    .follow .follow_1 .follow_2 {
      width: 100%;
      height: 100%;
    }
    .follow .follow_1 .follow_2 .fl {
      float: left;
      width: 120px;
      height: 100%;
    }
    .follow .follow_1 .follow_2 .fl .follow_img1 {
      width: 120px;
    }
    .follow .follow_1 .follow_2 .fl .follow_img1 img {
      margin-left: 6px;
    }
    .follow .follow_1 .follow_2 .fl p {
      text-align: center;
      font-size: 14px;
      height: 20px;
      line-height: 20px;
    }
    .follow .follow_1 .follow_2 .fr {
      float: right;
      width: 120px;
      height: 100%;
    }
    .follow .follow_1 .follow_2 .fr .follow_img1 {
      width: 120px;
    }
    .follow .follow_1 .follow_2 .fr .follow_img1 img {
      margin-left: 6px;
    }
    .follow .follow_1 .follow_2 .fr p {
      text-align: center;
      font-size: 14px;
      height: 20px;
      line-height: 20px;
    }
    .isShow {
      display: block;
    }



       /* 导航下拉样式 */
       a,
    img {
      border: 0;
      text-decoration: none;
    }
    body {
      font: 12px/180% Arial, Helvetica, sans-serif, "新宋体";
      background-color: #e8e8e8;
    }
    .clearfix:after {
      content: ".";
      display: block;
      height: 0;
      clear: both;
      visibility: hidden;
    }
    .clearfix {
      display: inline-table;
    }
    *html .clearfix {
      height: 1%;
    }
    .clearfix {
      display: block;
    }
    * + html .clearfix {
      min-height: 1%;
    }
    .nav_menu {
      width: 100%;
      height: 55px;
      background-color: #005aab;
      min-width: 1200px;
    }
    .nav {
      min-width: 1200px;
      width: 1200px;
      height: 55px;
      position: relative;
      margin: 0 auto;
    }
    .nav .homePge {
      width: 125px;
      height: 55px;
      float: left;
    }
    .nav .homePge a {
      display: block;
      line-height: 55px;
      text-align: center;
      font: bold 16px/55px "微软雅黑";
      color: #fff;
    }
    .nav .homePge a:hover {
      background-color: #ccc;
      color: #005aab;
    }
    .nav .homePge:last-child {
      background-color: #f90;
    }
    .nav .homePge:last-child a:hover {
      background-color: #ddd;
    }
    .nav .list li {
      float: left;
    }
    .nav .list a {
      float: left;
      display: block;
      width: 125px;
      height: 55px;
      text-align: center;
      font: bold 16px/55px "微软雅黑";
      color: #fff;
    }
    .nav .list a:hover,
    .nav .list .now {
      background: #ddd;
    }
    .nav .box {
      position: absolute;
      left: -5px;
      top: 55px;
      width: 1200px;
      background: #fff;
      height: 0;
      filter: alpha(opacity=0);
      opacity: 0;
      z-index:10;
      border-bottom: 2px solid #074c52;
    }
    .nav .cont {
      position: relative;
      padding: 40px 0 0 24px;
      box-sizing: border-box;
    }
    .sublist li {
      float: left;
      width: 168px;
      padding-right: 24px;
    }
    .sublist li .contBoxs {
      width: 1100px;
      height: 180px;
      background-color: #f9f9f9;
      box-sizing: border-box;
    }
    .sublist li .contBoxs ul {
      float: left;
      width: 160px;
      height: 200px;
    }
    .sublist li .contBoxs ul li {
      float: none;
      margin-bottom: 6px;
    }
    .sublist li .contBoxs .contul {
      width: 100px;
    }
    .sublist li .contBoxs .contText {
      margin-top: 20px;
      display: inline;
      padding: 2px 10px;
      height: 30px;
      border-radius: 5px;
      line-height: 30px;
      font-size: 14px;
      text-decoration: none;
      background-color: #f1f1f1;
      box-sizing: border-box;
      font-family: "sans-serif", "微软雅黑";
    }
    .sublist li .contBoxs li a {
      color: #347fc2;
      
    }
    .sublist li .contBoxs .contText:hover {
      background-color: #347fc2;
      color: #fff !important;
    }
    .sublist li .conBoxsImg {
      width: 1100px;
      height: 130px;
      margin-top: 10px;
    }
    .sublist li .conBoxsImg .con_fl {
      float: left;
      margin-left: 20px;
    }
    .sublist li .clearBox {
      width: 1100px;
      height: 130px;
      margin-bottom: 24px;
    }
    .sublist li .clearBox .clear_fl {
      width: 400px;
      height: 130px;
      padding: 0 40px;
      box-sizing: border-box;
      float: left;
    }
    .sublist li .clearBox .clear_fl span {
      display: inline-block;
      margin-right: 15px;
      margin-top: 10px;
    }
    .sublist li .clearBox .clear_fl span a {
      display: inline;
      color:#666666;
      padding: 0px 5px;
      text-decoration: none;
      background: #f1f1f1;
      border-radius: 4px;
      height: 25px;
      line-height: 25px;
      font-size: 14px;
      font-family: "sans-serif", "微软雅黑";
    }
    .sublist li .clearBox .clear_fl span a:hover {
      background-color: #005aab;
      color: #fff;
    }
    .sublist li .clearBox .clear_fr {
      float: left;
      width: 700px;
      height: 130px;
    }
    .sublist li .clearBox .clear_fr ul {
      height: 130px;
    }
    .sublist li .clearBox .clear_fr ul .clear_frli {
      padding-right: 0px;
    }
    .sublist li .clearBox .clear_fr ul li {
      list-style: none;
      height: 130px;
      margin-right: 3px;
      float: left;
    }
    .sublist li .clearBox .clear_fr ul li img {
      height: 130px;
    }
    .sublist li .subBox {
      width: 1100px;
      height: 130px;
      margin-bottom: 24px;
    }
    .sublist li .subBox .subBox_fl {
      width: 300px;
      height: 100px;
      float: left;
    }
    .sublist li .subBox .subBox_fl .subBox_flul {
      width: 250px;
      height: 100px;
      float: right;
    }
    .sublist li .subBox .subBox_fl .subBox_flli {
      width:230px;
      list-style: none;
      float: left;
    }
    .sublist li .subBox .subBox_fl .subBox_flli a {
      background: #eee;
      border-radius: 4px;
      height: 25px;
      line-height: 25px;
      display: inline-block;
      text-decoration: none;
      font-size: 14px !important;
      color: #005aab;
      margin-bottom: 5px;
      padding: 0 8px ;
      font-size: 12px;
      font-family: "sans-serif", "微软雅黑";
    }
    .sublist li .subBox .subBox_fl .subBox_flli a:hover {
      border-bottom: 1px solid #ccc;
    }
    .sublist li .subBox .subBox_fr {
      width: 650px;
      height: 100px;
      float: right;
    }
    .sublist li .subBox .subBox_fr li {
      width: 130px;
      list-style: none;
      margin-right: 5px;
    }



















    /* 文章 */
    .fo_is {
      width: 1200px;
      margin: 0 auto;
    }
    .fo_is .fo_fl {
      width: 860px;
      float: left;
      padding: 8px;
      background: #fff;
      box-sizing: border-box;
    }
    .fo_is .fo_fl .listTitle {
      width: 855px;
      border-bottom: 1px dotted #989595;
      height: 30px;
      line-height: 30px;
    }
    .fo_is .fo_fl .listTitle h2 {
      font-size: 12px;
      font-weight: 100;
    }
    .fo_is .fo_fl .listTitle h2 a {
      color: #000;
      font-family: "sans-serif", "微软雅黑";
    }
    .fo_is .fo_fl .listTitle h2 a:hover {
      color: #123cb9;
    }
    .fo_is .fo_fl .con {
      width: 860px;
    }
    .fo_is .fo_fl .con li {
      height: 134px;
      padding: 17px 0;
      border-bottom: 1px dotted #ddd;
    }
    .fo_is .fo_fl .con li .con_Fl {
      float: left;
    }
    .fo_is .fo_fl .con li .con_Fl img {
      width: 177px;
      height: 130px;
      border: none;
      vertical-align: top;
      margin-left: 10px;
    }
    .fo_is .fo_fl .con li .con_Fr {
      float: right;
      width: 72%;
      font-size: 13px;
    }
    .fo_is .fo_fl .con li .con_Fr span {
      height: 30px;
      line-height: 35px;
    }
    .fo_is .fo_fl .con li .con_Fr span a {
      font-weight: 700;
      color: #555;
    }
    .fo_is .fo_fl .con li .con_Fr p {
      color: #999;
      line-height: 25px;
    }
    .fo_is .fo_fl .con li .con_Fr p a {
      margin-right: 10px;
      color: #555;
    }
    .fo_is .fo_fl .con li .con_Fr a:hover {
      color: #123cb9;
    }
    .fo_is .fo_fl .pageList {
      height: 40px;
      box-sizing: border-box;
    }
    .fo_is .fo_fl .pageList ul {
      margin-top: 20px;
      box-sizing: border-box;
    }
    .fo_is .fo_fl .pageList ul li:nth-child(9) {
      border: 0;
    }
    .fo_is .fo_fl .pageList ul li {
      float: left;
      border: 1px solid #ddd;
      height: 22px;
      margin-left: 5px;
    }
    .fo_is .fo_fl .pageList ul li a {
      padding: 5px 5px;
      font-family: "sans-serif", "微软雅黑";
    }
    .fo_is .fo_fl .pageList ul li .pageInfo {
      font-size: 14px;
    }
    .fo_is .fo_fl .pageList ul li:hover {
      background-color: #333;
    }
    .fo_is .fo_fl .pageList ul li:hover a {
      color: #fff;
      font-family: "sans-serif", "微软雅黑";
    }
    .fo_is .fo_fr {
      width: 260px;
      float: right;
    }
    .fo_is .fo_fr h1 {
      width: 260px;
      height: 35px;
      line-height: 35px;
      background: fff;
      font-size: 15px;
      font-family: '宋体';
      margin-bottom: 10px;
    }
    .fo_is .fo_fr h1 a {
      display: inline-block;
      height: 35px;
      line-height: 35px;
      color: #555;
      border-bottom: 1px solid #123cb9;
      font-family: "sans-serif", "微软雅黑";
    }
    .fo_is .fo_fr h1 span {
      width: 200px;
      display: inline-block;
      float: right;
      color: #999;
      font-size: 13px;
      padding-left: 133px;
      box-sizing: border-box;
      font-family: '微软雅黑';
      font-weight: 100;
      border-bottom: 1px solid #555;
    }
    .fo_is .fo_fr .fo_fr_Tit {
      background-color: #fff;
      margin-bottom: 15px;
    }
    .fo_is .fo_fr .fo_fr_Tit .fo_fr_Swp {
      width: 100%;
    }
    .fo_is .fo_fr .fo_fr_Tit .fo_fr_Swp .banner1 .div {
      width: 100%;
      height: 360px;
    }
    .fo_is .fo_fr .fo_fr_Tit .fo_fr_Swp .banner1 .div h2 a {
      color: #333;
      font-family: "微软雅黑";
      font-size: 15px;
      font-weight: bold;
      line-height: 37px;
      font-family: "sans-serif", "微软雅黑";
    }
    .fo_is .fo_fr .fo_fr_Tit .fo_fr_Swp .banner1 .div p {
      color: #767676;
      line-height: 20px;
      font-size: 15px;
    }
    .fo_is .fo_fr .tu {
      margin-top: 5px;
    }
    .fo_is .fo_fr .tu img {
      border: none;
      vertical-align: top;
    }
    .fo_is .fo_fr .zixun {
      margin-top: 15px;
      margin-bottom: 35px;
    }
    .fo_is .fo_fr .zixun a {
      width: 100%;
      height: 35px;
      line-height: 35px;
      margin: 0 auto;
      display: block;
      background: #666;
      color: #fff;
      text-align: center;
      font-family: "sans-serif", "微软雅黑";
      font-size: 16px;
    }
    .fo_is .fo_fr .zixun a:hover {
      background-color: #3384ee;
    }
    .fo_is .fo_fr .ct_l {
      width: 100%;
    }
    .fo_is .fo_fr .ct_l ul li:first-child h5 {
      background: #005aab;
    }
    .fo_is .fo_fr .ct_l ul li {
      margin-bottom: 13px;
    }
    .fo_is .fo_fr .ct_l ul li h5 {
      height: 32px;
      line-height: 32px;
      width: 100%;
      background: #4e4e4e;
      color: #fff;
      font-weight: 100;
    }
    .fo_is .fo_fr .ct_l ul li h5 img {
      display: block;
      float: left;
      margin: 8px 5px 0 10px;
    }
    .fo_is .fo_fr .ct_l ul li h5 a {
      width: 241px;
      display: block;
      font-weight: 100;
      color: #fff;
      font-family: "sans-serif", "微软雅黑";
    }
    .fo_is .fo_fr .ct_l ul li .imee {
      width: 100%;
      display: block;
    }
    .fo_is .fo_fr .ct_l ul li .imee .imeeImg {
      width: 100%;
      height: 100%;
    }


</style> 

  <!-- 地区导航栏 -->
  <div class="navTop">
    <ul>
      <li>
        <a href="#">昌平南环店</a>
      </li>
      <li>
        <a href="#">昌平鼓楼店</a>
      </li>
      <li>
        <a href="#">顺义双兴店</a>
      </li>
      <li>
        <a href="#">顺义国泰宏城店</a>
      </li>
      <li>
        <a href="#">青岛店</a>
      </li>
      <li>
        <a href="#">怀柔店</a>
      </li>
      <li>
        <a href="#">天津店</a>
      </li>
      <li>
        <a href="#">在线咨询</a>
      </li>








    </ul>
  </div>

  <!-- log导航 -->
  <div class="logo">
    <div class="w">
      <div class="log_fl">
        <img src="./img/icon/logo.jpg" alt="">
      </div>

      <div class="log_fr">
        <div class="yi">
          <a href="#">医院地址</a>
          <a class="aa"></a>
          <i class="bb"></i>
        </div>
        <div class="er">
          <a href="#">关注我们</a>
          <a class="aa"></a>
          <i class="aa"></i>
        </div>
        <div class="san">

            <div class="sanBox">
              <img src="./img/icon/telephone_1.png"  alt="">
              <span class="span_01"><strong>全国美牙热线</strong></span>
              <span class="span_02"><strong>010-56193353</strong></span>
            </div>

  
        </div>
      </div>
    </div>
  </div>

  <!-- 显隐医院地址 -->
  <div class="w">
    <div class="addbox">
      <div class="address">
        <h2>北京博爱口腔</h2>
        <p>北京市顺义区仁和镇双兴东区甲9号楼（通顺路店）</p>
        <p>顺义区前进花园石门苑甲13号国泰宏城4楼Z健身房旁（国泰宏城店）</p>
        <div class="addimg">
          <img src="./img/indexImg/1-140R213133RE.jpg" alt="">
        </div>
      </div>
    </div>
  </div>

  <!-- 显隐关注我们 -->
  <div class="w">
    <div class="follow">
      <div class="follow_1">
        <ul class="follow_2">
          <li class="fl">
            <div class="follow_img1">
              <img src="./img/icon/wximg.jpg" alt="">
              <p>扫一扫</p>
              <p>随时咨询牙科医生</p>
            </div>
          </li>
          <li class="fr">
            <div class="follow_img1">
              <img src="./img/icon/gongzhonghao.jpg" alt="">
              <p>扫一扫</p>
              <p>关注微信公众号</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>


  <!-- 网站导航栏 -->
<div class="nav_menu">
  <div class="nav">

    <div class="homePge">
      <a href="#">网站首页</a>
    </div>



    <div class="list" id="navlist">

      <ul id="navfouce">
        <li>
          <a href="/">关于口腔</a>
        </li>
        <li>
          <a href="zlxm.php">诊疗项目</a>
        </li>
        <li>
          <a href="zjtd.php">医师团队</a>
        </li>
        <li>
          <a href="tsjs.php">特色技术</a>
        </li>
        <li>
          <a href="cpgy.php">博爱公益</a>
        </li>
        <li>
          <a href="jdsb.php">医疗设备</a>
        </li>
        <li>
          <a href="lylx.php">来院路线</a>
        </li>
      </ul>
    </div>
    <div class="box" id="navbox" style="height:0px;opacity:0;overflow:hidden;">
      <!-- 1 -->
      <div class="cont" style="display:none;">
        <ul class="sublist clearfix">
          <li>
            <div class="clearBox">
              <div class="clear_fl">
                <span><a href="/">北京博爱口腔</a></span>
                <span><a href="jczt.php">精彩专题</a></span>
                <span><a href="#">医院动态</a></span>
                <span><a href="#">会员中心</a></span>
                <span><a href="#">合作伙伴</a></span>
              </div>
              <div class="clear_fr">
                <ul>
                  <li>
                    <img src="./img/indexImg/boai_1.jpg" alt="">
                  </li>
                  <li>
                    <img src="./img/indexImg/boai_2.jpg" alt="">
                  </li>
                  <li>
                    <img src="./img/indexImg/boai_3.gif" alt="">
                  </li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <!-- 2 -->
      <div class="cont" style="display:none;">
        <ul class="sublist clearfix">
          <li>
            <!-- 上文字 -->
            <div class="contBoxs">
              <ul>
                <li><a href="#" class="contText" style="color: #666666;"> 口腔种植</a></li>
                <li><a href="#">. 登腾(Dentium)种植</a></li>
                <li><a href="#">. 奥齿泰</a></li>
                <li><a href="#">. ANKYLOS种植</a></li>
              </ul>
              <ul>
                <li><a href="#" class="contText" style="color: #666666;"> 牙齿正畸</a></li>
                <li><a href="#">. 自锁托槽矫正</a></li>
                <li><a href="#">. 舌侧隐形矫正</a></li>
                <li><a href="#">. 隐形矫正</a></li>
                <li><a href="#">. 陶瓷托槽矫正</a></li>
                <li><a href="#">. MBT矫正</a></li>
              </ul>
              <ul>
                <li><a href="#" class="contText" style="color: #666666;"> 美容修复</a></li>
                <li><a href="#">. 烤瓷牙</a></li>
                <li><a href="#">. 嵌体（inlay）修复</a></li>
                <li><a href="#">. 瑞典Procera全瓷贴面</a></li>
                <li><a href="#">. 德国Cercon全瓷</a></li>
                <li><a href="#">. 美国3M LAVA全瓷修复</a></li>
              </ul>
              <ul>
                <li><a href="#" class="contText" style="color: #666666;"> 儿童齿科</a></li>
                <li><a href="#">. 牙齿涂氟，预防蛀牙</a></li>
                <li><a href="#">. 窝沟封闭，让宝宝远离蛀牙</a></li>
                <li><a href="#">. 儿童无痛补牙</a></li>
              </ul>
              <ul class="contul">
                <li><a href="#" class="contText" style="color: #666666;"> 牙周治疗</a></li>
                <li><a href="#">. 牙龈炎</a></li>
                <li><a href="#">. 牙周炎</a></li>
              </ul>
              <ul class="contul">
                <li><a href="#" class="contText" style="color: #666666;"> 老年义齿</a></li>
                <li><a href="#">. 固定义齿</a></li>
                <li><a href="#">. 活动义齿</a></li>
              </ul>
              <ul class="contul">
                <li><a href="#" class="contText" style="color: #666666;"> 根管治疗</a></li>
                <li><a href="#">. 显微根管治疗</a></li>
                <li><a href="#">. 根管治疗术</a></li>
              </ul>
              <ul class="contul">
                <li><a href="#" class="contText" style="color: #666666;"> 综合齿科</a></li>
                <li><a href="#">. 龋齿（蛀牙）</a></li>
                <li><a href="#">. 智齿（拔智齿）</a></li>
              </ul>
            </div>
            <!-- 下图片 -->
            <div class="conBoxsImg">
              <div class="con_fl">
                <img src="./img/indexImg/xiao1.jpg" alt="">
              </div>
              <div class="con_fl">
                <img src="./img/indexImg/xiao2.jpg" alt="">
              </div>
              <div class="con_fl">
                <img src="./img/indexImg/xiao3.jpg" alt="">
              </div>
              <div class="con_fl">
                <img src="./img/indexImg/xiao4.jpg" alt="">
              </div>
              <div class="con_fl">
                <img src="./img/indexImg/xiao5.jpg" alt="">
              </div>
              <div class="con_fl">
                <img src="./img/indexImg/xiao6.jpg" alt="">
              </div>
            </div>
          </li>
        </ul>
      </div>
      <!-- 3 -->
      <div class="cont" style="display:none;">
        <ul class="sublist clearfix">
          <li>
            <div class="clearBox">
              <div class="clear_fl">
                <!-- <span><a href="#">陈桦</a></span> -->
                <span><a href="wll.php">刘洋</a></span>
                <span><a href="wll.php">宋铁砾</a></span>
                <span><a href="wll.php">张鹏</a></span>
                <span><a href="wll.php">徐涛</a></span>
              </div>
              <div class="clear_fr">
                <ul>
                  <li class="clear_frli">
                    <img src="./img/indexImg/YS_01.jpg" alt="">
                  </li>
                  <li class="clear_frli">
                    <img src="./img/indexImg/YS_03.jpg" alt="">
                  </li>
                  <li class="clear_frli">
                    <img src="./img/indexImg/YS_04.jpg" alt="">
                  </li>
                  <li class="clear_frli">
                    <img src="./img/indexImg/YS_02.jpg" alt="">
                  </li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <!-- 4 -->
      <div class="cont" style="display:none;">
        <ul class="sublist clearfix">
          <li>
            <div class="subBox">
              <div class="subBox_fl">
                <ul class="subBox_flul">
                  <li class="subBox_flli">
                    <a href="#">. 美国3MLava全瓷牙</a>
                  </li>
                  <li class="subBox_flli">
                    <a href="#">. 法国EMS无痛洁牙</a>
                  </li>
                  <li class="subBox_flli">
                    <a href="#">. 德国3D美容冠重塑美白牙齿</a>
                  </li>
                  <li class="subBox_flli">
                    <a href="#">. MIDI微创种植牙</a>
                  </li>
                  <li class="subBox_flli">
                    <a href="#">. 美国YSGG水激光高新技术</a>
                  </li>
                </ul>
              </div>

              <ul class="subBox_fr">
                <li>
                  <img src="./img/indexImg/lylx1.jpg" alt="">
                </li>
                <li>
                  <img src="./img/indexImg/lylx2.jpg" alt="">
                </li>
                <li>
                  <img src="./img/indexImg/lylx3.jpg" alt="">
                </li>
                <li>
                  <img src="./img/indexImg/lylx4.jpg" alt="">
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
      <!-- 5 -->
      <div class="cont" style="display:none;">
        <ul class="sublist clearfix">
          <li>
            <div class="clearBox">
              <div class="clear_fl">
                <span><a href="#">医生面对面</a></span>
                <span><a href="#">爱牙在行动</a></span>
                <span><a href="#">小小牙医</a></span>
              </div>
              <div class="clear_fr">
                <ul>
                  <li>
                    <img src="./img/indexImg/boai_1.jpg" alt="">
                  </li>
                  <li>
                    <img src="./img/indexImg/boai_2.jpg" alt="">
                  </li>
                  <li>
                    <img src="./img/indexImg/boai_3.gif" alt="">
                  </li>
                </ul>
              </div>
            </div>

          </li>
        </ul>
      </div>
      <!-- 6 -->
      <div class="cont" style="display:none;">
        <ul class="sublist clearfix">
          <li>
            <div class="subBox">
              <div class="subBox_fl">
                <ul class="subBox_flul">
                  <li class="subBox_flli">
                    <a href="#">. 瑞典诺贝尔种植牙技术</a>
                  </li>
                  <li class="subBox_flli">
                    <a href="#">. 德国西诺德（SIRONA）牙椅</a>
                  </li>
                  <li class="subBox_flli">
                    <a href="#">. 韩国怡友PaX-Uni3D</a>
                  </li>
                  <li class="subBox_flli">
                    <a href="#">. beyond冷光美白仪</a>
                  </li>
                </ul>
              </div>

              <ul class="subBox_fr">
                <li>
                  <img src="./img/indexImg/lylx1.jpg" alt="">
                </li>
                <li>
                  <img src="./img/indexImg/lylx2.jpg" alt="">
                </li>
                <li>
                  <img src="./img/indexImg/lylx3.jpg" alt="">
                </li>
                <li>
                  <img src="./img/indexImg/lylx4.jpg" alt="">
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
      <!-- 7 -->
      <div class="cont" style="display:none;">
        <ul class="sublist clearfix">
          <li>
            <div class="subBox">
              <div class="subBox_fl">

              </div>

              <ul class="subBox_fr">
                <li>
                  <img src="./img/indexImg/lylx1.jpg" alt="">
                </li>
                <li>
                  <img src="./img/indexImg/lylx2.jpg" alt="">
                </li>
                <li>
                  <img src="./img/indexImg/lylx3.jpg" alt="">
                </li>
                <li>
                  <img src="./img/indexImg/lylx4.jpg" alt="">
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>

    </div>

    <div class="homePge">
      <a href="zzyy.php">自助预约</a>
    </div>
  </div>
</div>





