@extends('jobs/jobsMaster')
@section('title','แผนที่')

@section('cssBlock')
<!-- css -->
<link rel="stylesheet" href="../css/map.css">
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCAmxpEuREslkCkU6yopJmn7BUgdHW5RqI&callback=initMap" asyuc defer></script>



<script src="../../js/map.js"> </script>

@stop

@section('content')

<body>

    <li class="search-icon2">
        <input type="search" placeholder="Search">
        <label class="icon2">
            <span class="fa fa-search"></span>
        </label>
    </li>
    <div class="map">
        <div class="mapTable">
            <div class="mapTitle">
                ประเภทของงาน
            </div>
            <div class="mapDetails">
                <a href="#">
                    <button onclick="set_type_job('all')" style="font-size:18px;">
                        <p>งานทั้งหมด</p>
                    </button>
                </a>
            </div>
            <div class="mapDetails">
                <a href="#">
                    <button onclick="set_type_job('fulltime')">
                        <div class="fa fa-circle" style="font-size:18px;color:#040EFF"></div>
                        <p>งานเต็มเวลา</p>
                    </button>
                </a>
            </div>

            <div class="mapDetails">
                <a href="#">
                    <button onclick="set_type_job('pasttime')">
                        <div class="faTwo">
                            <div class="fa fa-circle" style="font-size:18px;color:#00F928"></div>
                        </div>
                        <p>งานพาร์ทไทม์</p>
                    </button>
                </a>
            </div>

            <div class="WFH">
                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1">ทำงานที่บ้าน (Work from Home)</label>
            </div>

            <div class="distance">
                <label>ระยะทาง</label>
                <p><span id="value"></span></p>
                <input type="range" min="100" max="1000" value="100" class="slider" id="myRange" onchange="updateRadius()">
            </div>
            <div class="distance2">
                <p>เมตร</p>
            </div>
            <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn"  style="font-size:30px;position: absolute;top: -13px;left:90%"onclick="closeNav()">&times;</a>
                <a href="javascript:void(0)" class="fa fa-plus"  style="font-size:20px;position: absolute;top: -1px;left:81%"onclick=""></a>
                <div class="overlay-content">
                    <a href="#"></a>
                </div>
            </div>
            <div class="remove">
                <input id="remove-line" type="button" value="ลบเส้นระยะทาง" />
            </div>
        </div>


        <div id="map"></div>


        <script>
            var slider = document.getElementById("myRange");
            var number = document.getElementById("value");
            number.innerHTML = slider.value;
            slider.oninput = function() {
                number.innerHTML = this.value;

            }
        </script>


    </div>

</body>
@stop