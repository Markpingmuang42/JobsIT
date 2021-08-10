
<?php $__env->startSection('title','สร้างโฟสต์'); ?>

<?php $__env->startSection('cssBlock'); ?>
<!-- css -->
<link rel="stylesheet" href="/css/ent/entpost/entPostTwo.css">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<body>
    <div class="mainBoxTwo">
        <div class="header">
            <p>รายละเอียดการประกาศรับสมัครพนักงาน</p>
        </div>
        
        <form method="post" action="<?php echo e(action('UserController@update',$id)); ?>">
            <?php echo e(csrf_field()); ?>

            <div class="nameCompany">
                <label>ชื่อบริษัท</label>
                 <input type="text" name="CompanyName" placeholder=" กรุณากรอกชื่อบริษัท" value="<?php echo e($user->CompanyName); ?>"/>
                </div>
                
                <div class="jobsType">
                    <label>ตำแหน่งงานที่ต้อการ</label>
                    <select type="text" name="Sto_group" value="<?php echo e($user->Sto_group); ?>"/>
                        <option value="Programmer">Programmer</option>
                        <option value="IT Support">IT Support </option>
                        <option value="UX/UI">UX/UI</option>
                    </select>
                </div>
                
                <div class="amount">
                    <label>จำนวนตำแหน่งงาน</label>
                    <input type="text" name="numberJObs" placeholder=" กรุณากรอกจำนวนคนที่ต้องการ"  value="<?php echo e($user->numberJObs); ?>"/>
                </div>
                
                <div class="companyDetail">
                    <label>รายละเอียดของบริษัท</label>
                    <input type="text" name="CompanyDetail" placeholder=" กรุณากรอกรายละเอียดของบริษัท" value="<?php echo e($user->CompanyDetail); ?>"/>
                </div>
                
                <div class="textPost">
                    <label>ข้อความในการโพสต์</label>
                    <textarea  name="Textpost" placeholder=" กรุณากรอกข้อความ" value="<?php echo e($user->Textpost); ?>"/></textarea>
                </div>
                
                <div class="property">
                    <label>คุณสมบัติที่ต้องการ</label>
                    <textarea  name="property" placeholder=" กรุณากรอกคุณสมบัติ" value="<?php echo e($user->property); ?>"/></textarea>
                </div>
                
                <div class="welfare">
                    <label>สวัสดิการ</label>
                    <textarea  name="welfare" placeholder=" กรุณากรอกสวัสดิการ" value="<?php echo e($user->welfare); ?>"/></textarea>
                </div>
                
                <div class="locationCompa">
                    <label>ที่อยู่</label>
                    <textarea  name="address" placeholder=" กรุณากรอกที่อยู่" value="<?php echo e($user->address); ?>"/></textarea>
                </div>
                
                <div class="nameCon">
                    <label>ข้อมูลการติดต่อ</label>
                    <input type="text" name="contact" placeholder=" กรุณากรอกข้อมูลการติดต่อ" value="<?php echo e($user->contact); ?>"/>
                </div> 
                
                <div class="imgLogo">
                    <label>เลือกรูป</label>
                    <input type="file" name="imgLogo" placeholder="ไฟล์รูป">
                </div>  

                
                <input type="submit" class="confirmPost" value="แก้ไข"/>
                <button type="button" class="cancelPost">ยกเลิก</button>
                <input type="hidden" name="_method" value="PATCH">
                
        </div>
    </form>

</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('PostCompa/postMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Jobs_IT\resources\views/PostCompa/editPostTwo.blade.php ENDPATH**/ ?>