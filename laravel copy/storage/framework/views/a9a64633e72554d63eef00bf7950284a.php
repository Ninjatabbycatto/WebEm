<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class = "rightPanelRectangle">
        <div id="employeesContainer">
            <div id="TeamContainer">
                <div id="teamHeader">
                    <h1>Team</h1>
                </div>
                <div id="teamBody" >
                    <!---- put teamelements here  ---->
                    <?php $__currentLoopData = $teams->users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href=" <?php echo e(route('workplace.employee.profile', ['id' => $user->id])); ?>" class="teamperson">
                        <?php echo $__env->make('partials.teamElement', ['user' => $user], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </a>
                        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        

                    
                </div>  
            </div>
            <div id="teamProfInfo">
                <div id="picture"> 
                    <img id="profilePicture" class="profile-picture" src="" alt="Profile Picture">
                    <script>
                        document.getElementById('profilePicture').src = 'path/to/profile-picture.jpg'; // Update the path accordingly
                    </script>
                </div>
                <h1> <?php echo e($disPuser->firstName); ?> <?php echo e($disPuser->lastName); ?></h1>
                <div id="profInfo">
                    <div id="detail">
                        <p>Age</p>
                        <p>Gender</p>
                        <p>Department</p>
                        <p>Role</p>
                        <p>Email</p>
                        <p>Notes</p>
                    </div>
                    <div id="info">
                        <p><?php echo e($disPuser->age); ?></p>
                        <p><?php echo e($disPuser->gender); ?></p>
                        <p>IT</p>
                        <p>back-end developer</p>
                        <p><?php echo e($disPuser->firstName); ?>@gmail.com</p>
                        <p>is named john doe</p>
                    </div>
    
                </div>
            </div>
        </div>
    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>



<?php /**PATH /Users/leonbuena/Downloads/WebEm-leon-branch/website2/webEm/resources/views/workplace/employees.blade.php ENDPATH**/ ?>