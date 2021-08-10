@extends('PostCompa/postMaster')
@section('title','สร้างโฟสต์')

@section('cssBlock')
<!-- css -->
<link rel="stylesheet" href="/css/ent/entpost/entPostTwo.css">

@stop

@section('content')

<body>
    <div class="mainBoxTwo">
        <div class="header">
            <p>รายละเอียดการประกาศรับสมัครพนักงาน</p>
        </div>
        
        <form method="post" action="{{action('EntController@update',$id)}}">
            {{csrf_field()}}
            <div class="nameCompany">
                <label>ชื่อบริษัท</label>
                 <input type="text" name="CompanyName" placeholder=" กรุณากรอกชื่อบริษัท" value="{{$user->CompanyName}}"/>
                </div>
                
                <div class="jobsType">
                    <label>ตำแหน่งงานที่ต้อการ</label>
                    <select type="text" name="Sto_group" value="{{$user->Sto_group}}"/>
                    </select>
                </div>
                
                <div class="amount">
                    <label>จำนวนตำแหน่งงาน</label>
                    <input type="text" name="numberJObs" placeholder=" กรุณากรอกจำนวนคนที่ต้องการ"  value="{{$user->numberJObs}}"/>
                </div>
                
                <div class="companyDetail">
                    <label>รายละเอียดของบริษัท</label>
                    <input type="text" name="CompanyDetail" placeholder=" กรุณากรอกรายละเอียดของบริษัท" value="{{$user->CompanyDetail}}"/>
                </div>
                
                <div class="textPost">
                    <label>ข้อความในการโพสต์</label>
                    <textarea  name="Textpost" placeholder=" กรุณากรอกข้อความ" value="{{$user->Textpost}}"/></textarea>
                </div>
                
                <div class="property">
                    <label>คุณสมบัติที่ต้องการ</label>
                    <textarea  name="property" placeholder=" กรุณากรอกคุณสมบัติ" value="{{$user->property}}"/></textarea>
                </div>
                
                <div class="welfare">
                    <label>สวัสดิการ</label>
                    <textarea  name="welfare" placeholder=" กรุณากรอกสวัสดิการ" value="{{$user->welfare}}"/></textarea>
                </div>
                
                <div class="locationCompa">
                    <label>ที่อยู่</label>
                    <textarea  name="address" placeholder=" กรุณากรอกที่อยู่" value="{{$user->address}}"/></textarea>
                </div>
                
                <div class="nameCon">
                    <label>ข้อมูลการติดต่อ</label>
                    <input type="text" name="contact" placeholder=" กรุณากรอกข้อมูลการติดต่อ" value="{{$user->contact}}"/>
                </div> 
                
                <div class="imgLogo">
                    <label>เลือกรูป</label>
                    <input type="file" accept="imgLogo/*" name="imgLogo">
                </div>  

                
                <input type="submit" class="confirmPost" value="แก้ไข"/>
                <button type="button" class="cancelPost">ยกเลิก</button>
                <input type="hidden" name="_method" value="PATCH">
                
        </div>
    </form>

</body>
@stop