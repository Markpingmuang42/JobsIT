@extends('jobs/jobsMaster')
@section('title','ค้นหางาน')

@section('cssBlock')
<!-- css -->
<link rel="stylesheet" href="../css/jobsSearch.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

@stop

@section('content')

<body>
    <div class="jobsSearchTable">
        <div class="jobsSearchTitle">
            รายละเอียดการค้นหา
        </div>
        <div class="jobsSearchDetails">
            <button class="dropdown-btn">
                ชื่อบริษัท
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </div>
        <div class="jobsSearchDetails">
            <button class="dropdown-btn">
                วันที่ลงประกาศ
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </div>
        <div class="jobsSearchDetails">
            <button class="dropdown-btn">
                ประเภทงาน
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </div>
        <div class="jobsSearchDetails">
            <button class="dropdown-btn">
                ตำแหน่งงาน
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </div>

        <br>

        <div class="jobsSearchDetails">
            <p>ระยะทาง</p>
            <button class="dropdown-btn">
                0 เมตร
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="#">200 เมตร</a>
                <a href="#">300 เมตร</a>
                <a href="#">500 เมตร</a>
            </div>
        </div>

        <br>

        <div class="salary">
            <p>เงินเดือน (บาท)</p>
            <div class="salaryInput">
                <input type="text" placeholder="กรุณากรอกเงินเดือนที่ท่านต้องการ">
            </div>
        </div>
    </div>

    <div class="showJobs">
        <section>
            <div class="datePost">
                <p>วันที่ลงประกาศ</p>
            </div>
            <div class="logoCompany">
                <img src="../image/logoJobsIT.jpg" alt="logo company" width="50px" height="50px">
            </div>
            <div class="companyDetails">
                <p>ตำแหน่งงาน</p>
                <p>ชื่อบริษัท</p>
                <p>สถานที่ตั้งบริษัท</p>
                <p>จำนวนที่เปิดรับ</p>
                <p>เงินเดือน</p>
            </div>
            <div class="friends">
                <p>เพื่อนที่อาจรู้จัก</p>
            </div>
            <button class="interested" onclick="window.location.href='https://www.w3schools.com/css/css3_buttons.asp';">
                <p>สนใจ</p>
            </button>
            <button class="seeDetail" onclick="window.location.href='/jobs/jobsDetail';">
                <p>ดูรายละเอียด</p>
            </button>
        </section>
        <section>

        </section>
        <section>

        </section>
    </div>




    <!-- ============================ dropdown btn ========================= -->
    <script>
        /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }
    </script>

    <!-- ============================ dropdown salary left ========================= -->
    <script>
        /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
        var dropdown = document.getElementsByClassName("dropdown-salary");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }
    </script>


    <!-- ============================ dropdown left salary ========================= -->
    <script>
        /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
        var dropdown = document.getElementsByClassName("dropdown-right");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }
    </script>
</body>
@stop