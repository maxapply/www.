
<style>
      /* 底部栏 */
    .but {
      width: 100%;
      height: 300px;
      background-color: #414141;
      padding-bottom: 10px;
      box-sizing: border-box;
      min-width: 1200px;
    }
    .but .footer_box {
      width: 1030px;
      box-sizing: border-box;
      float: right;
      margin-top: 50px;
      border-left: 1px dashed #363636;
      padding-left: 80px;
    }
    .but .footer_box .foot_fl {
      width: 569px;
      float: left;
    }
    .but .footer_box .footer_Fr {
      width: 379px;
      float: left;
      height: 244px;
      color: #a7a7a7;
      border-left: 1px dashed #363636;
      padding-left: 20px;
      box-sizing: border-box;
    }
    .but .footer_box .footer_Fr p {
      width: 250px;
      line-height: 22px;
      float: left;
      font-size: 12px;
      text-align: left;
    }
    .but .footer_box .footer_Fr ul {
      float: left;
    }
    .but .footer_box .footer_Fr ul li {
      width: 54px;
      height: 50px;
      float: left;
      margin-right: 7px;
      margin-top: 16px;
    }
    .but .footer_box .footer_Fr ul li a {
      text-align: center;
      display: block;
      color: #A7A7A7;
      font-size: 12px;
      line-height: 16px;
      font-family: "sans-serif", "微软雅黑";
    }
    .but .footer_box .footer_list {
      float: left;
      width: 90px;
      margin-right: 20px;
    }
    .but .footer_box .footer_list span {
      display: block;
      height: 30px;
      line-height: 30px;
      font-size: 14px;
      text-align: center;
      border-bottom: 1px solid #303030;
      margin-bottom: 15px;
    }
    .but .footer_box .footer_list span a {
      color: #d6d6d6;
      font-family: "sans-serif", "微软雅黑";
    }
    .but .footer_box .footer_list .list li {
      width: 87px;
      height: 22px;
      line-height: 22px;
      float: left;
      font-size: 12px;
    }
    .but .footer_box .footer_list .list li a:hover {
      color: #fff;
      border-radius: 8px;
      background-color: #333;
    }
    .but .footer_box .footer_list .list li a {
      width: 100%;
      text-align: center;
      height: 22px;
      line-height: 22px;
      text-decoration: none;
      float: left;
      font-family: "sans-serif", "微软雅黑";
      display: inline-block;
      color: #a7a7a7;
    }




 /* 弹出层 */
    .swt_cen {
    width: 700px;
    height: 400px;
    background: #fff;
    -webkit-box-shadow: 0 0 4px #000;
    -webkit-border-radius: 5px;
    overflow: hidden;
    position: fixed;
    left: 50%;
    margin: -211px 0 0 -370px;
    z-index: 99;
  }
  .swt_cen .swt_close_n {
    display: block;
    width: 23px;
    height: 23px;
    position: absolute;
    background: url('./img/icon/close.png') no-repeat;
    z-index: 9999;
    cursor: pointer;
    right: 7px;
    top: 7px;
    text-decoration: none
  }
  .swt_banner {
    width: 700px;
    height: 330px;
    cursor: pointer;
  }
  .swt_banner .slider_common {
    width: 700px;
    height: 330px;
    overflow: hidden;
  }
  .slider_common div {
    overflow: hidden;
  }
  .slider_common div img {
    border: none;
    vertical-align: top;
  }
  .swt_txt {
    font-size: 14px;
    color: #666;
  }
  .KSTChatBox {
    width: 650px;
    height: 61px;
    margin: 0 auto;
    font-size: 14px;
  }
  .clearfix {
      clear: both;
  }
  .KSTChatBox input:first-child {
      margin-right: 10px;
  }
  .KSTChatBox input {
      border: 1px solid #D5D5D5;
      padding: 5px;
      width: 30%;
      border-radius: 5px;
      font-size: 14px;
  }

  .KSTChatBox input:last-child {
      padding-top: 1px;
      border: 1px solid #D5D5D5;
      padding: 5px;
      width: 18%;
      border-radius: 5px;
      font-size: 14px;
      float: right;
      background-color: #2e3642;
      color: #fff;
  }
  .chatBox {
    width: 40%;
    height: 61px;
    float: left;
  }
  .chatBox input {
    width: 170px;
  }



</style>




<!-- 底部栏 -->
<div class="but">
  <div class="w">
    <div class="footer_box">
      <ul class="foot_fl">
        <li class="footer_list">
          <span><a href="#">关于口腔</a></span>
          <ul class="list">
            <li><a href="#">北京博爱口腔</a></li>
            <li><a href="#">精彩专题</a></li>
            <li><a href="#">医院动态</a></li>
            <li><a href="#">会员中心</a></li>
            <li><a href="#">合作伙伴</a></li>
          </ul>
        </li>
        <li class="footer_list">
          <span><a href="#">诊疗项目</a></span>
          <ul class="list">
            <li><a href="#">口腔种植</a></li>
            <li><a href="#">牙齿正畸</a></li>
            <li><a href="#">美容修复</a></li>
            <li><a href="#">儿童齿科</a></li>
            <li><a href="#">牙周治疗</a></li>
            <li><a href="#">牙周治疗</a></li>
            <li><a href="#">老年义齿</a></li>
            <li><a href="#">根管治疗</a></li>
            <li><a href="#">综合齿科</a></li>
          </ul>
        </li>
        <li class="footer_list">
          <span><a href="#">医师团队</a></span>
          <ul class="list">
            <li><a href="#">陈桦</a></li>
            <li><a href="#">刘洋 </a></li>
            <li><a href="#">宋铁砾</a></li>
            <li><a href="#">张鹏</a></li>
            <li><a href="#">徐涛</a></li>
          </ul>
        </li>
        <li class="footer_list">
          <span><a href="#">博爱公益</a></span>
          <ul class="list">
            <li><a href="#">医生面对面</a></li>
            <li><a href="#">爱牙在行动</a></li>
            <li><a href="#">小小牙医</a></li>
          </ul>
        </li>
        <li class="footer_list">
          <span><a href="#">联系我们</a></span>
          <ul class="list">
            <li><a href="#">来院路线</a></li>
            <li><a href="#">医师答疑</a></li>
            <li><a href="#">预约治疗</a></li>
            <li><a href="#">会员中心</a></li>
          </ul>
        </li>
      </ul>
      <div class="footer_Fr">
        <p>
          医院地址：
          <br>
          北京市顺义区仁和镇双兴东区甲9号楼（通顺路店）
        </p>
        <p>顺义区前进花园石门苑甲13号国泰宏城4楼Z健身房旁（国泰宏城店）</p>
        <p> 座机：010-56193353 </p>
        <ul>
          <li>
            <a href="#">
              <img src="./img/icon/n-syn-_15.jpg" alt="">
            </a>
            <a href="#">免费咖啡</a>
          </li>
          <li>
            <a href="#">
              <img src="./img/icon/n-syn-_18.jpg" alt="">
            </a>
            <a href="#">免费停车</a>
          </li>
          <li>
            <a href="#">
              <img src="./img/icon/n-syn-_19.jpg" alt="">
            </a>
            <a href="#">免费书吧</a>
          </li>
          <li>
            <a href="#">
              <img src="./img/icon/n-syn-_23.jpg" alt="">
            </a>
            <a href="#">免费WIFI</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>


<!-- 弹出层 -->
<div class="swt_cen" style="top: 50%;  display: none;">
  <a href="#" class="swt_close_n" title="关闭"></a>
  <div class="swt_banner swt_ie">
    <div class="slider_common">
      <div>
        <img src="./img/icon/tc1.jpg" alt="">
      </div>
    </div>

  </div>
  <div class="swt_txt"></div>
  <div class="KSTwinBox animated1">
    <div class="KSTChatBox clearfix">
      <div class="chatBox">
     
      姓名： <input type="text" calss="confirm_input" id="yyxm" placeholder="请输入姓名">
    <p id="nameNo" style="display: none; color: red;font-size: 8px;">姓名输入有误</p>
    <p id="nameYes"  style="display: none;color: green;font-size: 8px;">姓名输入正确</p>
      </div>
 
      <div class="chatBox">
    电话： <input type="text" calss="confirm_input" id="yydh"  placeholder="请输入手机号">
      <p id="no" style="display: none; color: red;font-size: 8px;">手机号码有误，请重填</p>
      <p id="yes"  style="display: none;color: green;font-size: 8px;">手机号码输入正确</p>
      </div>
        <input type="button" calss="confirm_input" id="djyy" value="点击预约">

    </div>
  </div>
</div>

<!-- 弹出层 -->
<script>
  
  $(window).on('load',function(){
    $('.swt_cen').slideDown(700)
  })


  $('.swt_close_n').click(function(){
    $('.swt_cen').css('display','none') 
  })

 
      // 点击按钮
      var btn = document.getElementById('djyy')
    btn.addEventListener('click',function(){

        var nameYes = document.getElementById('nameYes')
        var yes = document.getElementById('yes')
        var yanYes = document.getElementById('yanYes')


        var yZ1 = nameYes.style.cssText.substr(9,5)
        var yZ2 = yes.style.cssText.substr(9,5)
        
            if(yZ1!=='block'){
              alert('用户名输入有误')
            }else if(yZ2!=='block'){
                alert('手机号输入有误')
            }else {
                // alert('输入正确')
                window.location ='https://dct.zoosnet.net/LR/Chatpre.aspx?id=DCT12598639&lng=cn&r=&p=http%3A%2F%2Fwww.boai6666.com%2Fycjz%2F&msg=%u59D3%u540D%uFF1A51561%3Cbr%3E%u7535%u8BDD%uFF1A17563353134'
            }

    })
    var photo = document.getElementById('yydh')
  

    
        // 手机号验证
        photo.addEventListener('blur',function(){


       
          if(!(/^1[3456789]\d{9}$/.test(photo.value))){ 
          //  alert("手机号码有误，请重填");  
          var yes = document.getElementById('yes')
              yes.style.display = 'none'
          var no = document.getElementById('no')
          no.style.display = 'block'



          }else {
              var no = document.getElementById('no')
              no.style.display = 'none'
              // alert("手机号码输入正确"); 
              var yes = document.getElementById('yes')
              yes.style.display = 'block'

              
          }
        })


        
    // 用户名验证
    var userName = document.getElementById('yyxm')
    
    userName.addEventListener('blur',function(){

        var value = document.getElementById('yyxm').value
        
        if(/^([\u4e00-\u9fa5]){2,5}$/.test(value)){  

          document.getElementById('nameYes').style.display = 'block'
          document.getElementById('nameNo').style.display = 'none'
            
        }else {

          document.getElementById('nameYes').style.display = 'none'
          document.getElementById('nameNo').style.display = 'block'
            
        }
    })





</script> 

