@extends('Entrepreneur/indexEntrepreneur')
@section('title','สร้างโฟสต์')

@section('cssBlock')
<!-- css -->
<link rel="stylesheet" href="../css/ent/entPost.css">

@stop

@section('content')

<body>
    <div class="mainBoxthree">
        <div class="header">
            <p>รายละเอียดการประกาศรับสมัครพนักงาน</p>
        </div>

        <form method="post" action="{{route('PostCompa.store')}}">
            @foreach($ents as $row)
            {{csrf_field()}}
            <div class="nameCompany">
                <label>ชื่อบริษัท</label>
                <input type="text" name="CompanyName" value="{{$row['CompanyName']}}" placeholder=" กรุณากรอกชื่อบริษัท">
            </div>

            <div class="jobsTypeTwo">
                <label>ตำแหน่งงานที่ต้อการ</label>
                <input type="text" name="Sto_group" value="{{$row['Sto_group']}}">
            </div>

            <div class="amount">
                <label>จำนวนตำแหน่งงาน</label>
                <input type="text" name="numberJObs" value="{{$row['numberJObs']}}" placeholder=" กรุณากรอกจำนวนคนที่ต้องการ">
            </div>

            <div class="companyDetail">
                <label>รายละเอียดของบริษัท</label>
                <input type="text" name="CompanyDetail" value="{{$row['CompanyDetail']}}" placeholder=" กรุณากรอกรายละเอียดของบริษัท">
            </div>

            <div class="textPost">
                <label>ข้อความในการโพสต์</label>
                <textarea name="Textpost" placeholder=" กรุณากรอกข้อความ">{{$row['Textpost']}}</textarea>
            </div>

            <div class="property">
                <label>คุณสมบัติที่ต้องการ</label>
                <textarea name="property" placeholder=" กรุณากรอกคุณสมบัติ">{{$row['property']}}</textarea>
            </div>

            <div class="welfare">
                <label>สวัสดิการ</label>
                <textarea name="welfare" placeholder=" กรุณากรอกสวัสดิการ">{{$row['welfare']}}</textarea>
            </div>

            <div class="locationCompa">
                <label>ที่อยู่</label>
                <textarea name="address" placeholder=" กรุณากรอกที่อยู่">{{$row['address']}}</textarea>
            </div>

            <div class="nameCon">
                <label>ข้อมูลการติดต่อ</label>
                <input type="text" name="contact" value="{{$row['contact']}}" placeholder=" กรุณากรอกข้อมูลการติดต่อ">
            </div>

            <!-- <div class="logoCompa">
                    <label>รูปโลโก้</label>
                    <img src="{{asset('../logo/'.$row['imgLogo'])}}">
                </div>   -->

            <div class="resumeImage">
                <div class="selectPhoto">
                    <label for="resumePhoto">เลือกรูป</label>
                    <input type="file" id="resumePhoto" name="logoCompany" accept="image/*" onchange="showPhoto(event);">
                    <div class="preview">
                        <img id="displayImage">
                    </div>
                </div>
            </div>

            <button type="submit" class="confirmPostTwo">โพสต์</button>
            <button type="button" class="cancelPostTwo">ยกเลิก</button>
    </div>
    @endforeach
    </form>

    <!-- ============================ photo resume ========================= -->
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