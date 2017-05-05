<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Dashboard - Bootstrap Admin Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/pages/dashboard.css" rel="stylesheet">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="index.html">血液透析整體服務資訊平台 beta</a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
          <li class="dropdown"  style="display:none"><a href="#" class="dropdown-toggle" data-toggle="dropdown">  <i  class="icon-cog"></i> 帳號 <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="javascript:;">設定</a></li>
              <li><a href="javascript:;">使用說明</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-user"></i> Jade Freeman <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="javascript:;">系統設定</a></li>
              <li><a href="javascript:;">個人基本資訊</a></li>
              <li><a href="javascript:;">登出</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!-- /container -->
  </div>
  <!-- /navbar-inner -->
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li class="active dropdown"><a href="index.html"><i class="icon-dashboard"></i><span>回首頁</span> </a> </li>
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-list-alt"></i><span>初次到院</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="Menu7-1.html">病患護理評估紀錄</a></li>
            <li><a href="Menu7-2.html">新進透析患者個案紀錄</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-list-alt"></i><span>預約管理</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="Menu2-1.html">掛號預約</a></li>
            <li><a href="Menu2-2.html">到診報到</a></li>
          </ul>
        </li>

        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-list-alt"></i><span>病歷管理</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="PatientBG">病患基本資料維護</a></li>
            <li><a href="MedicalHistory">藥物治療紀錄</a></li>
            <li><a href="AnalysisHistory">血液透析治療紀錄</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-list-alt"></i><span>儀器藥品管理</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="Menu2-1.html">儀器妥善管理</a></li>
            <li><a href="Menu2-2.html">藥品基本維護</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-list-alt"></i><span>行政管理</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="HR_BG">人事基本資料維護</a></li>
            <li><a href="HR_Attend">出勤紀錄維護</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-list-alt"></i><span>匯出與匯入</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="AnalysisHistory">KIDIT匯出</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-list-alt"></i><span>報表管理</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="PatientBG">病患基本資料維護</a></li>
            <li><a href="MedicalHistory">藥物治療紀錄</a></li>
            <li><a href="AnalysisHistory">血液透析治療紀錄</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-list-alt"></i><span>系統設定</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="Menu2-1">使用者管理</a></li>
            <li><a href="Menu2-1">權限管理</a></li>
            <li><a href="UsualPharse.php">常用醫囑片語</a></li>
            <li><a href="AnalysisHistory">休假日設定</a></li>
          </ul>
        </li>

        <ul>
    </div>
    <!-- /container -->
  </div>
  <!-- /subnavbar-inner -->
</div>
<!-- /subnavbar -->
<
<div class="main" style="margin-left:120px;margin-right:120px;">
<form name="form" method="post" action="class.crud.php">
片語類別：
<select>
  <option value="A01">緊急處置片語</option>
  <option value="A02">醫囑片語</option>
</select>
<input type=button value=查詢 />
<input type=text value=如果新增，請輸入片語代碼>
<input type=text value=如果新增，請輸入片語類別>
<input type=button value=新增 />
<table class="table table-hover" >
  <tr><td width=200>分類</td><td>選項</td><td>動作</td></tr>
  <tr><td>頭痛緊急處置</td><td>喝溫水;吃普拿疼;不管他</td><td><input type=button value=編輯 />&nbsp;<input type=button value=刪除 /></td></tr>
  <tr><td>心律不整緊急處置</td><td>降低洗腎流速;吃藥</td><td><input type=button value=編輯 />&nbsp;<input type=button value=刪除 /></td></tr>
  <tr><td><input type=text width=100%></td><td><input type=text value="個別選項請以 ; 區隔" width=100%></td><td><input type=button value=新增 /></td></tr>
</table>



</div>
<!-- /extra -->
<div class="footer">
  <div class="footer-inner">
    <div class="container">
      <div class="row">
        <div class="span12"> &copy; 2013 <a href="http://www.egrappler.com/">Bootstrap Responsive Admin Template</a>. </div>
        <!-- /span12 -->
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /footer-inner -->
</div>
<!-- /footer -->
<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/excanvas.min.js"></script>
<script src="js/chart.min.js" type="text/javascript"></script>
<script src="js/bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="js/full-calendar/fullcalendar.min.js"></script>

<script src="js/base.js"></script>
<script>

        var lineChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
				{
				    fillColor: "rgba(220,220,220,0.5)",
				    strokeColor: "rgba(220,220,220,1)",
				    pointColor: "rgba(220,220,220,1)",
				    pointStrokeColor: "#fff",
				    data: [65, 59, 90, 81, 56, 55, 40]
				},
				{
				    fillColor: "rgba(151,187,205,0.5)",
				    strokeColor: "rgba(151,187,205,1)",
				    pointColor: "rgba(151,187,205,1)",
				    pointStrokeColor: "#fff",
				    data: [28, 48, 40, 19, 96, 27, 100]
				}
			]

        }

        var myLine = new Chart(document.getElementById("area-chart").getContext("2d")).Line(lineChartData);


        var barChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
				{
				    fillColor: "rgba(220,220,220,0.5)",
				    strokeColor: "rgba(220,220,220,1)",
				    data: [65, 59, 90, 81, 56, 55, 40]
				},
				{
				    fillColor: "rgba(151,187,205,0.5)",
				    strokeColor: "rgba(151,187,205,1)",
				    data: [28, 48, 40, 19, 96, 27, 100]
				}
			]

        }

        $(document).ready(function() {
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();
        var calendar = $('#calendar').fullCalendar({
          header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
          },
          selectable: true,
          selectHelper: true,
          select: function(start, end, allDay) {
            var title = prompt('Event Title:');
            if (title) {
              calendar.fullCalendar('renderEvent',
                {
                  title: title,
                  start: start,
                  end: end,
                  allDay: allDay
                },
                true // make the event "stick"
              );
            }
            calendar.fullCalendar('unselect');
          },
          editable: true,
          events: [
            {
              title: 'All Day Event',
              start: new Date(y, m, 1)
            },
            {
              title: 'Long Event',
              start: new Date(y, m, d+5),
              end: new Date(y, m, d+7)
            },
            {
              id: 999,
              title: 'Repeating Event',
              start: new Date(y, m, d-3, 16, 0),
              allDay: false
            },
            {
              id: 999,
              title: 'Repeating Event',
              start: new Date(y, m, d+4, 16, 0),
              allDay: false
            },
            {
              title: 'Meeting',
              start: new Date(y, m, d, 10, 30),
              allDay: false
            },
            {
              title: 'Lunch',
              start: new Date(y, m, d, 12, 0),
              end: new Date(y, m, d, 14, 0),
              allDay: false
            },
            {
              title: 'Birthday Party',
              start: new Date(y, m, d+1, 19, 0),
              end: new Date(y, m, d+1, 22, 30),
              allDay: false
            },
            {
              title: 'EGrappler.com',
              start: new Date(y, m, 28),
              end: new Date(y, m, 29),
              url: 'http://EGrappler.com/'
            }
          ]
        });
      });
    </script><!-- /Calendar -->

    <script>

        var pieData = [
    				{
    				    value: 30,
    				    color: "#F38630"
    				},
    				{
    				    value: 50,
    				    color: "#E0E4CC"
    				},
    				{
    				    value: 100,
    				    color: "#69D2E7"
    				}

    			];

        var myPie = new Chart(document.getElementById("pie-chart").getContext("2d")).Pie(pieData);

        var barChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
    				{
    				    fillColor: "rgba(220,220,220,0.5)",
    				    strokeColor: "rgba(220,220,220,1)",
    				    data: [65, 59, 90, 81, 56, 55, 40]
    				},
    				{
    				    fillColor: "rgba(151,187,205,0.5)",
    				    strokeColor: "rgba(151,187,205,1)",
    				    data: [28, 48, 40, 19, 96, 27, 100]
    				}
    			]

        }

      var myLine = new Chart(document.getElementById("bar-chart").getContext("2d")).Bar(barChartData);
    	var myLine = new Chart(document.getElementById("bar-chart1").getContext("2d")).Bar(barChartData);
    	var myLine = new Chart(document.getElementById("bar-chart2").getContext("2d")).Bar(barChartData);
    	var myLine = new Chart(document.getElementById("bar-chart3").getContext("2d")).Bar(barChartData);

    	</script>



</body>
</html>
