
<?php $__env->startSection('title','สร้างโฟสต์'); ?>

<?php $__env->startSection('cssBlock'); ?>
<!-- css -->
<link rel="stylesheet" href="/css/ent/entPostIndex.css">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<body>
<div class="mainBoxTwo">
        <div class="header">
            <p>แก้ไขรายละเอียดการประกาศรับสมัครพนักงาน</p>
        </div>
        
        <form method="post" action="<?php echo e(route('PostCompa.store')); ?>">
            <?php echo e(csrf_field()); ?>

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
                    <textarea  name="Textpost" placeholder=" กรุณากรอกข้อความ" ></textarea>
                </div>
                
                <div class="property">
                    <label>คุณสมบัติที่ต้องการ</label>
                    <textarea  name="property" placeholder=" กรุณากรอกคุณสมบัติ" ></textarea>
                </div>
                
                <div class="welfare">
                    <label>สวัสดิการ</label>
                    <textarea  name="welfare" placeholder=" กรุณากรอกสวัสดิการ"></textarea>
                </div>
                
                <div class="locationCompa">
                    <label>ที่อยู่</label>
                    <textarea  name="address" placeholder=" กรุณากรอกที่อยู่"></textarea>
                </div>
                
                <div class="nameCon">
                    <label>ข้อมูลการติดต่อ</label>
                    <input type="text" name="contact" placeholder=" กรุณากรอกข้อมูลการติดต่อ">
                </div>  
                
                <button type="submit" class="confirmPost">แก้ไข</button>
                <button type="button" class="cancelPost">ยกเลิก</button>

        </div>
    </form>

</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Entrepreneur/indexEntrepreneur', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Jobs_IT\resources\views/PostCompa/editPost.blade.php ENDPATH**/ ?>