@extends('Entrepreneur/indexEntrepreneur')
@section('title','Check')

@section('cssBlock')
<!-- css -->
<link rel="stylesheet" href="../css/ent/entCheck.css">

@stop

@section('content')

<body>
    <div class="boxOne">
         <!--------------------------------------------------------------------ฝั่งซ้าย---------------------------------------------------------------------------------- -->
        <form action="#">
            <div class="boxLeft">
                <div class="headerL">
                    <label>ตรวจสอบผู้สมัคร</label> 
                </div>


                <div class="applBox">
                    <div class="imgAppl">
                        <img src="../image/logoJobsIT.jpg" alt="imgAppl" width="100px" height="130px">
                    </div>
                    

                    <div class="textAppl">
                        <div class="textdate">
                            <p>วันที่ส่งใบสมัคร</p>
                        </div>
                        <p>ชื่อ - นามสกุล :  นาย ภาณุวัฒน์ มังสังข์</p>
                        <p>เพศ : ชาย          อายุ : 22 ปี</p>
                        <p>ตำแหน่งงาน : Programmer</p>
                        <p>ระดับการศึกษา : ปริญญาตรี</p>
                        <p>ประสบการณ์ทำงาน : 1 ปี</p>
                        <p>เงินเดือนที่ต้องการ : 155,000 บาท</p>
                    </div>


                    <button type="button" class="acceptAppl">ยอมรับ</button>
                    <button type="button" class="rejectAppl">ปฎิเสธ</button>
                    <button type="button" class="saveform">เก็บเข้าแฟ้ม</button>
                    <button type="button" class="viewAppl" onclick="window.location.href='/Entrepreneur/entIndex';">ดูข้อมูลเพิ่มเติม</button>


                </div>

                <div class="applBox">
                    <div class="imgAppl">
                        <img src="../image/logoJobsIT.jpg" alt="imgAppl" width="100px" height="130px">
                    </div>

                    <div class="textAppl">
                        <div class="textdate">
                            <p>วันที่ส่งใบสมัคร</p>
                        </div>
                        <p>ชื่อ - นามสกุล :  นาย ภาณุวัฒน์ มังสังข์</p>
                        <p>เพศ : ชาย          อายุ : 22 ปี</p>
                        <p>ตำแหน่งงาน : Programmer</p>
                        <p>ระดับการศึกษา : ปริญญาตรี</p>
                        <p>ประสบการณ์ทำงาน : 1 ปี</p>
                        <p>เงินเดือนที่ต้องการ : 155,000 บาท</p>
                    </div>

                    <button type="submit" class="acceptAppl">ยอมรับ</button>
                    <button type="button" class="rejectAppl">ปฎิเสธ</button>
                    <button type="button" class="saveform">เก็บเข้าแฟ้ม</button>
                    <button type="button" class="viewAppl" onclick="window.location.href='/Entrepreneur/entIndex';">ดูข้อมูลเพิ่มเติม</button>
                </div>
            </div> 
        </form>
    </div>
    <!--------------------------------------------------------------- -----ฝั่งขวา---------------------------------------------------------------------------------- -->
        <form action="#">
            <div class="boxRight">
                <div class="headerL">
                    <label>แฟ้มที่บันทึก</label> 
                </div>
                <div class="applBox">
                    <div class="imgAppl">
                        <img src="../image/logoJobsIT.jpg" alt="imgAppl" width="100px" height="130px">
                    </div>

                    <div class="textAppl">
                        <div class="textdate">
                            <p>วันที่ส่งใบสมัคร</p>
                        </div>
                        <p>ชื่อ - นามสกุล :  นาย ภาณุวัฒน์ มังสังข์</p>
                        <p>เพศ : ชาย          อายุ : 22 ปี</p>
                        <p>ตำแหน่งงาน : Programmer</p>
                        <p>ระดับการศึกษา : ปริญญาตรี</p>
                        <p>ประสบการณ์ทำงาน : 1 ปี</p>
                        <p>เงินเดือนที่ต้องการ : 155,000 บาท</p>
                    </div>

           
                    <button type="button" class="viewApplR" onclick="window.location.href='/Entrepreneur/entIndex';">ดูข้อมูลเพิ่มเติม</button>
                    <button type="button" class="deleteAppl">ลบทิ้ง</button>
                </div>

                <div class="applBox">
                    <div class="imgAppl">
                        <img src="../image/logoJobsIT.jpg" alt="imgAppl" width="100px" height="130px">
                    </div>

                    <div class="textAppl">
                        <div class="textdate">
                            <p>วันที่ส่งใบสมัคร</p>
                        </div>
                        <p>ชื่อ - นามสกุล :  นาย ภาณุวัฒน์ มังสังข์</p>
                        <p>เพศ : ชาย          อายุ : 22 ปี</p>
                        <p>ตำแหน่งงาน : Programmer</p>
                        <p>ระดับการศึกษา : ปริญญาตรี</p>
                        <p>ประสบการณ์ทำงาน : 1 ปี</p>
                        <p>เงินเดือนที่ต้องการ : 155,000 บาท</p>
                    </div>


                    <button type="button" class="viewApplR" onclick="window.location.href='/Entrepreneur/entIndex';">ดูข้อมูลเพิ่มเติม</button>
                    <button type="submit" class="deleteAppl">ลบทิ้ง</button>
                </div>
            </div> 
         </form>
         
    </div>
   
    

</body>
@stop