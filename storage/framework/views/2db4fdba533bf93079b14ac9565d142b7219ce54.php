
<?php $__env->startSection('title','สร้างโฟสต์'); ?>

<?php $__env->startSection('cssBlock'); ?>
<!-- css -->
<link rel="stylesheet" href="../css/ent/entPost.css">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<body>
    <div class="mainBoxthree">
        <div class="header">
            <p>รายละเอียดการประกาศรับสมัครพนักงาน</p>
        </div>
        
        <form method="post" action="<?php echo e(route('PostCompa.store')); ?>">
        <?php $__currentLoopData = $ents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo e(csrf_field()); ?>

            <div class="nameCompany">
                <label>ชื่อบริษัท</label>
                 <input type="text" name="CompanyName" value="<?php echo e($row['CompanyName']); ?>" placeholder=" กรุณากรอกชื่อบริษัท">
                </div>
                
                <div class="jobsTypeTwo">
                    <label>ตำแหน่งงานที่ต้อการ</label>
                    <input type="text" name="Sto_group"  value="<?php echo e($row['Sto_group']); ?>">
                </div>
                
                <div class="amount">
                    <label>จำนวนตำแหน่งงาน</label>
                    <input type="text" name="numberJObs" value="<?php echo e($row['numberJObs']); ?>" placeholder=" กรุณากรอกจำนวนคนที่ต้องการ">
                </div>
                
                <div class="companyDetail">
                    <label>รายละเอียดของบริษัท</label>
                    <input type="text" name="CompanyDetail" value="<?php echo e($row['CompanyDetail']); ?>" placeholder=" กรุณากรอกรายละเอียดของบริษัท">
                </div>
                
                <div class="textPost">
                    <label>ข้อความในการโพสต์</label>
                    <textarea  name="Textpost" placeholder=" กรุณากรอกข้อความ" ><?php echo e($row['Textpost']); ?></textarea>
                </div>
                
                <div class="property">
                    <label>คุณสมบัติที่ต้องการ</label>
                    <textarea  name="property" placeholder=" กรุณากรอกคุณสมบัติ" ><?php echo e($row['property']); ?></textarea>
                </div>
                
                <div class="welfare">
                    <label>สวัสดิการ</label>
                    <textarea  name="welfare" placeholder=" กรุณากรอกสวัสดิการ"><?php echo e($row['welfare']); ?></textarea>
                </div>
                
                <div class="locationCompa">
                    <label>ที่อยู่</label>
                    <textarea  name="address" placeholder=" กรุณากรอกที่อยู่"><?php echo e($row['address']); ?></textarea>
                </div>
                
                <div class="nameCon">
                    <label>ข้อมูลการติดต่อ</label>
                    <input type="text" name="contact" value="<?php echo e($row['contact']); ?>" placeholder=" กรุณากรอกข้อมูลการติดต่อ">
                </div>  
                
                <div class="logoCompa">
                    <label>รูปโลโก้</label>
                    <img src="<?php echo e(asset('../logo/'.$row['imgLogo'])); ?>">
                </div>  
                
                <button type="submit" class="confirmPostTwo">โพสต์</button>
                <button type="button" class="cancelPostTwo">ยกเลิก</button>

        </div> 
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </form>

</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Entrepreneur/indexEntrepreneur', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Jobs_IT\resources\views/PostCompa/indexPost.blade.php ENDPATH**/ ?>