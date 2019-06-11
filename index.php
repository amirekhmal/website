<!DOCTYPE html>
<html>
<head>
    <title>Booking</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- demo stylesheet -->
    	<link type="text/css" rel="stylesheet" href="media/layout.css" />

	<!-- helper libraries -->
	<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>

	<!-- daypilot libraries -->
        <script src="js/daypilot/daypilot-all.min.js" type="text/javascript"></script>

</head>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #00ced1;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav-right {
  float: right;
}
img {
    display: block;
    margin-left: auto;
    margin-right: auto;
}
.container {
    position: relative;
    text-align: center;
    color: black;
     max-width: 1500px;
  margin: 0 auto;
  }
  .hero-text {
  text-align: left;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: black;
}
.bg-text {
  /*background-color: rgb(0,0,0); Fallback color */
 /* background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
 
  position: absolute;
  top: 79.5%;
  left: 36.5%;

  transform: translate(-50%, -50%);
  z-index: 2;
  width: 40%;
  padding: 10px;
 }
 table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;    
}
</style>
<body>
         <img src="3.jpg" alt="Avatar" align ="middle">
    <div class="topnav">
  <a href="home.php">Home</a>
  <a href="booking.php">Booking</a>
  <a href="court.php">Court</a>
  <a href="contact.php">Contact</a>
  <div class="topnav-right">
    <a href="signin.php">Sign in</a>
  </div>
    </div>
        <div class="shadow"></div>
        <div class="hideSkipLink">
        </div>
        <div class="main">

     

            <div style="float:left; width:150px;" >
                <div id="navigator"></div>
            </div>
            <div style="margin-left: 150px;" >
                <div id="scheduler"></div>
            </div>

            <script type="text/javascript">
                var nav = new DayPilot.Navigator("navigator");
                nav.onTimeRangeSelected = function(args) {
                    var day = args.day;

                    if (dp.visibleStart() <= day && day < dp.visibleEnd()) {
                        dp.scrollTo(day, "fast");
                    }
                    else {
                        var start = day.firstDayOfMonth();
                        var days = day.daysInMonth();
                        dp.startDate = start;
                        dp.days = days;
                        dp.update();
                        dp.scrollTo(day, "fast");
                        loadEvents();
                    }
                };
                nav.init();


                var dp = new DayPilot.Scheduler("scheduler");

                dp.treeEnabled = true;

                dp.heightSpec = "Max";
                dp.height = 300;

                dp.scale = "Hour";
                dp.startDate = DayPilot.Date.today().firstDayOfMonth();
                dp.days = DayPilot.Date.today().daysInMonth();
                dp.cellWidth = 40;

                dp.eventHeight = 40;
                dp.durationBarVisible = false;

                dp.treePreventParentUsage = true;

                dp.onBeforeEventRender = function(args) {
                };

                var slotPrices = {
                    "06:00": 12,
                    "07:00": 15,
                    "08:00": 15,
                    "09:00": 15,
                    "10:00": 15,
                    "11:00": 12,
                    "12:00": 10,
                    "13:00": 10,
                    "14:00": 12,
                    "15:00": 12,
                    "16:00": 15,
                    "17:00": 15,
                    "18:00": 15,
                    "19:00": 15,
                    "20:00": 15,
                    "21:00": 12,
                    "22:00": 10,
                };

                dp.onBeforeCellRender = function(args) {

                    if (args.cell.isParent) {
                        return;
                    }

                    if (args.cell.start < new DayPilot.Date()) {  // past
                        return;
                    }

                    if (args.cell.utilization() > 0) {
                        return;
                    }

                    var color = "green";

                    var slotId = args.cell.start.toString("HH:mm");
                    var price = slotPrices[slotId];

                    var min = 5;
                    var max = 15;
                    var opacity = (price - min)/max;
                    var text = "$" + price;
                    args.cell.html = "<div style='cursor: default; position: absolute; left: 0px; top:0px; right: 0px; bottom: 0px; padding-left: 3px; text-align: center; background-color: " + color + "; color:white; opacity: " + opacity + ";'>" + text + "</div>";
                };

                dp.timeHeaders = [
                    { groupBy: "Month", format: "MMMM yyyy" },
                    { groupBy: "Day", format: "dddd, MMMM d"},
                    { groupBy: "Hour", format: "h tt"}
                ];

                dp.businessBeginsHour = 9;
                dp.businessEndsHour = 23;
                dp.businessWeekends = true;
                dp.showNonBusiness = false;

                dp.allowEventOverlap = false;

                //dp.cellWidthSpec = "Auto";
                dp.bubble = new DayPilot.Bubble();

                dp.onTimeRangeSelecting = function(args) {
                    if (args.start < new DayPilot.Date()) {
                        args.right.enabled = true;
                        args.right.html = "You can't create a reservation in the past";
                        args.allowed = false;
                    }
                    else if (args.duration.totalHours() > 4) {
                        args.right.enabled = true;
                        args.right.html = "You can only book up to 4 hours";
                        args.allowed = false;
                    }
                };

                // event creating
                // http://api.daypilot.org/daypilot-scheduler-ontimerangeselected/
                dp.onTimeRangeSelected = function (args) {
                    var modal = new DayPilot.Modal();
                    modal.onClosed = function(args) {
                        dp.clearSelection();
                        loadEvents();
                    };
                    modal.showUrl("new.php?start=" + args.start + "&end=" + args.end + "&resource=" + args.resource);
                };

                dp.init();

                var scrollTo = DayPilot.Date.today();
                if (new DayPilot.Date().getHours() > 12) {
                    scrollTo = scrollTo.addHours(12);
                }
                dp.scrollTo(scrollTo);

                loadResources();
                loadEvents();

                function loadResources() {
                    dp.rows.load("backend_resources.php");
                }

                function loadEvents() {
                    dp.events.load("backend_events_busy.php");  // GET request with "start" and "end" query string parameters
                }

            </script>

        </div>
        <div class="clear">
        </div>
</body>
</html>

