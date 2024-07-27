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
        <div id="HomeContainer">
            <div id = "HomeHeader">
                <div id="HomeDates">
                    <h1> <?php echo date('l') ?><br></h1>
                    <p><?php echo date('F j, Y') ?></p>
                </div>
                <div id="profile">
                    <div id="picture">
                        <img id="profilePicture" class="profile-picture" src="" alt="Profile Picture">
                        <script>
                            document.getElementById('profilePicture').src = 'path/to/profile-picture.jpg'; // Update the path accordingly
                        </script>
                    </div>
                    <div id="texts">
                        <h1> <?php echo e($user->firstName); ?> <?php echo e($user->lastName); ?> <br></h1>
                        <p>Software Developer</p>
                    </div>
                </div>
            </div>
            
            <div id="HomeBody">
                <div id="HBDivider">
                    <div id="leftpart">
                        <div class="roboto-medium" id="Objectives">
                            <div id="ObjHeader">
                                <p>Objectives</p>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="2vw" height="2vw" style="margin-right: 2vw; margin-top: 1vw;">
                                    <path fill-rule="evenodd" d="M5.75 2a.75.75 0 0 1 .75.75V4h7V2.75a.75.75 0 0 1 1.5 0V4h.25A2.75 2.75 0 0 1 18 6.75v8.5A2.75 2.75 0 0 1 15.25 18H4.75A2.75 2.75 0 0 1 2 15.25v-8.5A2.75 2.75 0 0 1 4.75 4H5V2.75A.75.75 0 0 1 5.75 2Zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75Z" clip-rule="evenodd" />
                                </svg>

                            </div>
                            
                        </div>
                    </div>
                    <div id="rightpart">

                        <div id="Notifications">
                            <div id="NotifHeader">
                                <h1 class="roboto-medium">Notification</h1>
                                <p class="roboto-light">9:29</p>
                            </div>
                            <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat  ipsum at libero consectetur, quis aliquam nulla dignissim. 
                            </p>
                        </div>

                        <div id="recent">
                            <div id="recentheader">
                                <h1 class="roboto-medium">John Doe</h1>
                                <p class="roboto-light">November 2, 2024</p>
                            </div>
                            <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat  ipsum at libero consectetur, quis aliquam nulla dignissim. Nulla ornare  sollicitudin luctus. Donec pulvinar nibh nec ullamcorper suscipit.
                            </p>
                        </div>

                        <div id="ptasks">
                            <div id="ptasksheader">
                                <p>Personal Tasks</p>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5" width="1.5vw" height="1.5vw" style="margin-top: 1vw;">
                                <path fill-rule="evenodd" d="M5.22 14.78a.75.75 0 0 0 1.06 0l7.22-7.22v5.69a.75.75 0 0 0 1.5 0v-7.5a.75.75 0 0 0-.75-.75h-7.5a.75.75 0 0 0 0 1.5h5.69l-7.22 7.22a.75.75 0 0 0 0 1.06Z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            


                        </div>
                    </div>
                </div>
            </div>

            <div id="homefoot">
                <div id="homeprofilescontainer">
                    

                    
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
<?php endif; ?><?php /**PATH /Users/leonbuena/Downloads/WebEm-leon-branch/website2/webEm/resources/views/workplace/index.blade.php ENDPATH**/ ?>