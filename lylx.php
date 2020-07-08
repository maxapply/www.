<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>来院路线_博爱口腔来院路线_顺义博爱口腔_顺义牙齿种植/牙齿矫正/牙齿美白_顺义牙科医院</title>
  <link rel="stylesheet" href="./css/lylx.css">
  <script src="./js/swiper.min.js"></script>
  <script src="./js/jquery-3.5.1.min.js"></script>
  <script src="http://api.map.baidu.com/api?ak=X2455as78Q7aVDj5nWMRKBLKWly7pWdq&v=2.0&services=false"></script>

</head>
<body style="overflow-y:scroll;overflow-x:scroll">
  <!-- 头部 -->
  <?php include './public/head.php'; ?>

  


  <!-- 百度地图 -->
  <div class="map">
    <div id="allmap"></div>
    <div class="index_zhuanjia_list">
      <ul>
        <li class="mapyi">
          <span></span>
          <h2>北京博爱口腔</h2>
          <p>北京市顺义区仁和镇双兴东区甲9号楼（通顺路店）</p>
        </li>
        <li class="maper">
          <span></span>
          <h2>北京博爱口腔</h2>
          <p>顺义区前进花园石门苑甲13号国泰宏城4楼Z健身房旁（国泰宏城店）</p>
        </li>
      </ul>
    </div>
  </div>

  <div class="mdchoose">
    <div class="mdBox">
      <div class="flBox">
        <strong>北京博爱口腔</strong>
        <p>地址：北京市顺义区仁和镇双兴东区甲9号楼</p>
        <p>（通顺路店）</p>
        <p>热线咨询电话：(010)-56193353</p>
        <p>电话预约：(010)114</p>
      </div>
      <div class="frBox">
        <strong>北京博爱口腔</strong>
        <p>地址：顺义区前进花园石门苑甲13号国泰宏城4楼Z健身房旁（国泰宏城店））</p>
        <p>热线咨询电话：(010)-56193353</p>
        <p>电话预约：(010)114</p>
      </div>
    </div>
  </div>



  <!-- 底部 -->
  <?php include './public/footer.php'; ?>

  <script src="./js/public.js"></script>
  <script>
    function getMap(x, y) {


      // 百度地图API功能
      var map = new BMap.Map("allmap"); // 创建Map实例

      // var point = new BMap.Point(116.238067, 40.218111);
      var point = new BMap.Point(x, y);
      map.centerAndZoom(point, 15)

      // function addInfo (x,y){
      var opts = {
        width: 60, // 信息窗口宽度    
        height: 15, // 信息窗口高度    
        title: "地址 :" // 信息窗口标题   
      }

      var infoWindow = new BMap.InfoWindow(x === 116.238067 ? "昌平区 南环中路24号优贝口腔" : '顺义区前进花园石门苑甲13号国泰宏城',
        opts); // 创建信息窗口对象    
      map.openInfoWindow(infoWindow, map.getCenter()); // 打开信息窗口
      map.addOverlay(marker);
      // } 
      // addInfo ()


      // 向地图添加标注

      var myIcon = new BMap.Icon("https://api.map.baidu.com/images/marker_red_sprite.png", new BMap.Size(23, 25));

      // 创建标注对象并添加到地图 
      var marker = new BMap.Marker(point, {
        icon: myIcon
      });
      map.addOverlay(marker);

      // 点击图标 添加信息窗口
      marker.onclick = function () {
        addInfo()
      }




      map.centerAndZoom(new BMap.Point(x, y), 18); // 初始化地图,设置中心点坐标和地图级别
      //添加地图类型控件
      map.addControl(new BMap.MapTypeControl({
        mapTypes: [
          BMAP_NORMAL_MAP,
          BMAP_HYBRID_MAP
        ]
      }));
      map.setCurrentCity("北京"); // 设置地图显示的城市 此项是必须设置的
      map.enableScrollWheelZoom(true); //开启鼠标滚轮缩放
    }


    getMap(116.238067, 40.218111)


    $('.mapyi').click(function () {
      getMap(116.238067, 40.218111)
    })
    $('.maper').click(function () {
      getMap(116.664198, 40.143499)

    })
  </script>
</body>
</html>



