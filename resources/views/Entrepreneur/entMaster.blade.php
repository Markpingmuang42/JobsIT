@extends('Entrepreneur/indexEntrepreneur')
@section('title','ค้นหาคน')

@section('cssBlock')
<!-- css -->
<link rel="stylesheet" href="../css/ent/entMaster.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

@stop

@section('content')

<body>
    <div class="entSearchTable">
        <div class="entSearchTitle">
            ค้นหาประวัติ
        </div>
        <div class="entSearchDetails">
            <button class="dropdown-btn">
                ตำแหน่งงานด้านไอที
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </div>
        <div class="entSearchDetails">
            <button class="dropdown-btn">
                ระดับการศีกษา
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </div>
        <div class="entSearchDetails">
            <button class="dropdown-btn">
                เพศ
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </div>
        <div class="entSearchDetails">
            <button class="dropdown-btn">
                จังหวัด
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </div>

        <div class="entSearchDetails">
            <button class="dropdown-btn">
                เขต
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </div>
    </div>

    <div class="showAppl">
        <section>
        <div class="namePost">
                <p>นาย ภาณุวัฒน์ มังสังข์</p>
            </div>
            <div class="datePost">
                <p>วันที่ลงประกาศ</p>
            </div>
            <div class="imgAppl">
                <img src="../image/logoJobsIT.jpg" alt="imgAppl" width="50px" height="50px">
            </div>
            <div class="applDetails">
                <div class="applOne">
                <p>ตำแหน่งงาน : Programmer</p>
                <p>ระดับการศีกษา:ปริญญาตรี</p>
                <p>สถานที่ตั้งบริษัท : มหาวิทยาลัยพะเยา</p>
                <p>ประสบการณ์ทำงาน : 1 ปี</p>
                </div>
                <div class="applTwo">
                <p>เพศ : ชาย อายุ : 22 ปี</p>
                <p>จังหวัด : ลำพูน</p>
                <p>เขต : เวียงหนองล่อง</p>
                <p>เงินเดือนที่ต้องการ : 155,000 บาท</p>
                </div>
            </div>
            <button class="intersave" onclick="window.location.href='/Entrepreneur/entCheck';">
                <p>เก็บเข้าแฟ้ม</p>
            </button>
            <button class="seeDetailAppl" onclick="window.location.href='/Entrepreneur/entIndex';">
                <p>ดูรายละเอียดผู้สมัคร</p>
            </button>
        </section>
        <section>
        <div class="namePost">
                <p>นาย ภาณุวัฒน์ มังสังข์</p>
            </div>
            <div class="datePost">
                <p>วันที่ลงประกาศ</p>
            </div>
            <div class="imgAppl">
                <img src="../image/logoJobsIT.jpg" alt="imgAppl" width="50px" height="50px">
            </div>
            <div class="applDetails">
                <div class="applOne">
                <p>ตำแหน่งงาน : Programmer</p>
                <p>ระดับการศีกษา:ปริญญาตรี</p>
                <p>สถานที่ตั้งบริษัท : มหาวิทยาลัยพะเยา</p>
                <p>ประสบการณ์ทำงาน : 1 ปี</p>
                </div>
                <div class="applTwo">
                <p>เพศ : ชาย อายุ : 22 ปี</p>
                <p>จังหวัด : ลำพูน</p>
                <p>เขต : เวียงหนองล่อง</p>
                <p>เงินเดือนที่ต้องการ : 155,000 บาท</p>
                </div>
            </div>
            <button class="intersave" onclick="window.location.href='/Entrepreneur/entCheck';">
                <p>เก็บเข้าแฟ้ม</p>
            </button>
            <button class="seeDetailAppl" onclick="window.location.href='/Entrepreneur/entIndex';">
                <p>ดูรายละเอียดผู้สมัคร</p>
            </button>

        </section>
        <section>
        <div class="namePost">
                <p>นาย ภาณุวัฒน์ มังสังข์</p>
            </div>
            <div class="datePost">
                <p>วันที่ลงประกาศ</p>
            </div>
            <div class="imgAppl">
                <img src="../image/logoJobsIT.jpg" alt="imgAppl" width="50px" height="50px">
            </div>
            <div class="applDetails">
                <div class="applOne">
                <p>ตำแหน่งงาน : Programmer</p>
                <p>ระดับการศีกษา:ปริญญาตรี</p>
                <p>สถานที่ตั้งบริษัท : มหาวิทยาลัยพะเยา</p>
                <p>ประสบการณ์ทำงาน : 1 ปี</p>
                </div>
                <div class="applTwo">
                <p>เพศ : ชาย อายุ : 22 ปี</p>
                <p>จังหวัด : ลำพูน</p>
                <p>เขต : เวียงหนองล่อง</p>
                <p>เงินเดือนที่ต้องการ : 155,000 บาท</p>
                </div>
            </div>
            <button class="intersave" onclick="window.location.href='/Entrepreneur/entCheck';">
                <p>เก็บเข้าแฟ้ม</p>
            </button>
            <button class="seeDetailAppl" onclick="window.location.href='/Entrepreneur/entIndex';">
                <p>ดูรายละเอียดผู้สมัคร</p>
            </button>

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