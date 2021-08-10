@extends('jobs/jobsMaster')
@section('title','ฝากประวัติ')

@section('cssBlock')
<!-- css -->
<link rel="stylesheet" href="../css/resume.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<!-- font fontawesome -->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
@stop

@section('content')

<body>

    <div class="history">
        <div class="historyTitle">
            <p>ฝากประวัติ</p>
        </div>


        <form action="#">
            <section class="myHistory">
                <p>ประวัติส่วนตัว</p>
                
                <div class="checkbox">
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    <label for="vehicle1">นาย</label>
                    <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                    <label for="vehicle2"> นาง</label>
                    <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                    <label for="vehicle3">นายสาว</label>
                </div>

                <div class="firstNameInput">
                    <label for="firstName">ชื่อ :</label>
                    <input type="text" placeholder="กรุณากรอกชื่อ">
                </div>

                <div class="lastNameInput">
                    <label for="lastName">นามสกุล :</label>
                    <input type="text" placeholder="กรุณากรอกนามสกุล">
                </div>

                <div class="emailInput">
                    <label for="email">อีเมล :</label>
                    <input type="text" placeholder="กรุณากรอกอีเมล">
                </div>
                
                <div class="phoneNumberInput">
                    <label for="phoneNumber">เบอร์ติดต่อ :</label>
                    <input type="text" placeholder="กรุณากรอกเบอร์ติดต่อ">
                </div>

                <div class="birthday">
                    <label for="birthday">วันเกิด :</label>
                    <input type="date" id="birthday" name="birthday">
                </div>

                <div class="yearOld">
                    <label for="yearOld">อายุ :</label>
                    <select class="selectYears" name="Year" class="bdayyear">
                        <option value="year">0</option>
                        <script language="javascript">
                            for (var i = 18; i < 100; i++) {
                                document.write("<option value=\"" + i + "\">" + i + "</option>\n");
                            }
                        </script>
                    </select>
                    <label for="yearsOld">ปี</label>
                </div>

                <hr style="margin-top: 120px;">
            </section>

            <!-- ======================================================================================================================= -->

            <section class="educationsHistory">
                <p>ประวัติการศึกษา</p>

                <div class="universityInput">
                    <label for="university">จบจากมหาวิทยาลัย/วิทลัย :</label>
                    <input type="text" placeholder="กรุณากรอกมหาวิทยาลัย/วิทลัย">
                </div>
                <div class="facultyInput">
                    <label for="faculty">คณะ :</label>
                    <input type="text" placeholder="กรุณากรอกคณะ">
                </div>

                <div class="branchInput">
                    <label for="branch">สาขา :</label>
                    <input type="text" placeholder="กรุณากรอกสาขา">
                </div>

                <div class="gpaInput">
                    <label for="gpa">GPA :</label>
                    <input type="text" placeholder="กรุณากรอก GPA">
                </div>

                <div class="checkbox2">
                    <label for="educational">วุฒิการศึกษา :</label>
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    <label for="vehicle1">ม.6</label>
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    <label for="vehicle1">ปวส.</label>
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    <label for="vehicle1">ปวช.</label>
                    <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                    <label for="vehicle2">ป.ตรี</label>
                    <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                    <label for="vehicle3">ป.โท</label>
                </div>

                <hr style="margin-top: 150px;">
            </section>

            <!-- ======================================================================================================================= -->

            <section class="myExperience">
                <p>ประสบการณ์การทำงาน</p>

                <div class="usedToWorkInput">
                    <label for="usedToWork">ประสบการณ์ที่เคยทำงานกับบริษัท (ปี) :</label>
                    <input type="text" placeholder="กรุณากรอกประสบการณ์ที่เคยทำงานกับบริษัท (ปี)">
                </div>
                <div class="dominantLanguageInput">
                    <label for="dominantLanguage">ภาษาที่ถนัด :</label>
                    <textarea name="message" style="width:300px; height:100px;"></textarea>
                </div>

                <div class="LanguageLearnedInput">
                    <label for="LanguageLearned">ภาษาที่เคยเรียนรู้ :</label>
                    <textarea name="message" style="width:300px; height:100px;"></textarea>
                </div>

                <div class="charismaInput">
                    <label for="charisma">ความสามารถพิเศษ :</label>
                    <textarea name="message" style="width:300px; height:100px;"></textarea>
                </div>

                <div class="certi">
                    <label for="certi">ผลงาน :</label>
                    <input type="file" id="certi" name="certi">
                </div>

                <hr style="margin-top: 450px;">
            </section>

            <a class="gotoTopbtn" href="#"><i class="fas fa-arrow-up"></i></a>

            <!-- ======================================================================================================================= -->

            <section class="domicile">
                <p>ภูมิลำเนา</p>

                <div class="nameVillage">
                    <label for="nameVillage">หมู่บ้าน :</label>
                    <input type="text" placeholder="กรุณากรอกชื่อหมู่บ้าน">
                </div>

                <div class="homeNumber">
                    <label for="homeNumber">บ้านเลขที่ :</label>
                    <input type="text" placeholder="กรุณากรอกบ้านเลขที่">
                </div>

                <div class="alley">
                    <label for="alley">ซอย/ตรอก :</label>
                    <input type="text" placeholder="กรุณากรอกซอย/ตรอก">
                </div>

                <div class="road">
                    <label for="road">ถนน :</label>
                    <input type="text" placeholder="กรุณากรอกถนน">
                </div>

                <div class="district">
                    <label for="district">ตำบล :</label>
                    <input type="text" placeholder="กรุณากรอกตำบล">
                </div>

                <div class="canton">
                    <label for="canton">อำเภอ :</label>
                    <input type="text" placeholder="กรุณากรอกอำเภอ">
                </div>

                <div class="province">
                    <label for="province">จังหวัด :</label>
                    <input type="text" placeholder="กรุณากรอกจังหวัด">
                </div>

                <div class="postalCode">
                    <label for="postalCode">รหัสไปรษณี :</label>
                    <input type="text" placeholder="กรุณากรอกรหัสไปรษณี">
                </div>

                <hr style="margin-top: 180px;">
            </section>

            <!-- ======================================================================================================================= -->

            <section class="myDomicile">
                <p>ที่อยู๋ปัจจุบัน</p>

                <div class="myNameVillage">
                    <label for="myNameVillage">หมู่บ้าน :</label>
                    <input type="text" placeholder="กรุณากรอกชื่อหมู่บ้าน">
                </div>

                <div class="myHomeNumber">
                    <label for="myHomeNumber">บ้านเลขที่ :</label>
                    <input type="text" placeholder="กรุณากรอกบ้านเลขที่">
                </div>

                <div class="myAlley">
                    <label for="myAlley">ซอย/ตรอก :</label>
                    <input type="text" placeholder="กรุณากรอกซอย/ตรอก">
                </div>

                <div class="myRoad">
                    <label for="myRoad">ถนน :</label>
                    <input type="text" placeholder="กรุณากรอกถนน">
                </div>

                <div class="myDistrict">
                    <label for="myDistrict">ตำบล :</label>
                    <input type="text" placeholder="กรุณากรอกตำบล">
                </div>

                <div class="myCanton">
                    <label for="myCanton">อำเภอ :</label>
                    <input type="text" placeholder="กรุณากรอกอำเภอ">
                </div>

                <div class="myProvince">
                    <label for="myProvince">จังหวัด :</label>
                    <input type="text" placeholder="กรุณากรอกจังหวัด">
                </div>

                <div class="myPostalCode">
                    <label for="myPostalCode">รหัสไปรษณี :</label>
                    <input type="text" placeholder="กรุณากรอกรหัสไปรษณี">
                </div>

                <hr style="margin-top: 180px;">
            </section>

            
            <button class="editBtn" type="button" onclick="window.location.href='#';">edit</button>
            <input type="submit" value="submit">
            <button class="backBtn" type="button" onclick="window.location.href='{{ url('/jobs/jobsIndex/') }}';">back</button>
        </form>

    </div>


    <!-- ============================ dropdown อายุ ========================= -->
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
</body>
@stop