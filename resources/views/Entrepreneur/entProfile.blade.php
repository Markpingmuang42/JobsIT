@extends('Entrepreneur/indexEntrepreneur')
@section('title','Profile')

@section('cssBlock')
<!-- css -->
<link rel="stylesheet" href="../css/ent/entProfile.css">

@stop

@section('content')

<body>
    <form action="#">
        <div class="mainBoxTwo">
            <div class="header">
                <p>Profile</p>
            </div>

            <div class="nameCompany">
                 <input type="text" placeholder=" ชื่อบริษัท" required>
            </div>

            <div class="typeCompany">
                <select type="text" name="Sto_group"data-val="true">
                    <option value="กิจการของคนเดียว">กิจการของคนเดียว</option>
                    <option value="ห้างหุ้นส่วน ">ห้างหุ้นส่วน </option>
                    <option value="ห้างหุ้นส่วนจำกัด">ห้างหุ้นส่วนจำกัด</option>
                </select>
            </div>

            <div class="nameCon">
                 <input type="text" placeholder=" ชื่อผู้ติดต่อ" required>
            </div>

            <div class="numberCom">
                 <input type="text" placeholder="เบอร์โทรศัพท์" required>
            </div>

            
            <div class="emailCompany">
                 <input type="email" placeholder="อีเมล" required>
            </div>

            <div class="locationCompany">
                 <input type="text" placeholder="ตำแหน่งที่ตั้ง" required>
            </div>

            <div class="logoCompany">
                <label>เลือกไฟล์โลโก้บริษัท</label>
                <input type="file">
            </div>

            <div class="sertiCompany">
                <label>แนบไฟล์หนังสือการประกอบธุระกิจ</label>
                <input type="file">
            </div>

            <button type="button" class="editProfile">แก้ไข</button>
            <button type="button" class="cancelProfile">ยกเลิก</button>
            <button type="submit" class="confirmProfile">ตกลง</button>
            
            
        </div>
    </form>

</body>
@stop