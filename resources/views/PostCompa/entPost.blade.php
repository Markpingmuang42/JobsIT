@extends('Entrepreneur/indexEntrepreneur')
@section('title','สร้างโฟสต์')

@section('cssBlock')
<!-- css -->
<link rel="stylesheet" href="../css/ent/entPost.css">

@stop

@section('content')

<body>
    <div class="mainBoxTwo">
        <div class="header">
            <p>รายละเอียดการประกาศรับสมัครพนักงาน</p>
        </div>

        @if(count($errors) > 0)
        <div class="alert_error">
            <ul> @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="post" action="{{route('PostCompa.store')}}">
            {{csrf_field()}}
            <div class="nameCompany">
                <label>ชื่อบริษัท</label>
                <input type="text" name="CompanyName" placeholder=" กรุณากรอกชื่อบริษัท">
            </div>

            <div class="jobsType">
                <label>ตำแหน่งงานที่ต้อการ</label>
                <select type="text" name="Sto_group">
                    <option value="Programmer">Programmer</option>
                    <option value="IT Support">IT Support </option>
                    <option value="UX/UI">UX/UI</option>
                </select>
            </div>

            <div class="amount">
                <label>จำนวนตำแหน่งงาน</label>
                <input type="text" name="numberJObs" placeholder=" กรุณากรอกจำนวนคนที่ต้องการ">
            </div>

            <div class="companyDetail">
                <label>รายละเอียดของบริษัท</label>
                <input type="text" name="CompanyDetail" placeholder=" กรุณากรอกรายละเอียดของบริษัท">
            </div>

            <div class="textPost">
                <label>ข้อความในการโพสต์</label>
                <textarea name="Textpost" placeholder=" กรุณากรอกข้อความ"></textarea>
            </div>

            <div class="property">
                <label>คุณสมบัติที่ต้องการ</label>
                <textarea name="property" placeholder=" กรุณากรอกคุณสมบัติ"></textarea>
            </div>

            <div class="welfare">
                <label>สวัสดิการ</label>
                <textarea name="welfare" placeholder=" กรุณากรอกสวัสดิการ"></textarea>
            </div>

            <div class="locationCompa">
                <label>ที่อยู่</label>
                <textarea name="address" placeholder=" กรุณากรอกที่อยู่"></textarea>
            </div>

            <div class="nameCon">
                <label>ข้อมูลการติดต่อ</label>
                <input type="text" name="contact" placeholder=" กรุณากรอกข้อมูลการติดต่อ">
            </div>

            <!-- <div class="imgLogo">
                <label>เลือกรูป</label>
                <input type="file" accept="imgLogo/*" name="imgLogo">
            </div> -->
            <div class="resumeImage">
                <div class="selectPhoto">
                    <label for="resumePhoto">เลือกรูป</label>
                    <input type="file" id="resumePhoto" name="logoCompany" accept="image/*" onchange="showPhoto(event);">
                    <div class="preview">
                        <img id="displayImage">
                    </div>
                </div>
            </div>

            <button type="submit" class="confirmPost">โพสต์</button>
            <button type="button" class="cancelPost">ยกเลิก</button>

    </div>
    </form>
    <script>
        function showPhoto(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("displayImage");
                preview.src = src;
                preview.style.display = "block";
            }
        }
    </script>

</body>
@stop