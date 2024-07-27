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
        <div id="BulletinContainer">
                <div id="HomeHeader">
                        <div id="HomeDates">
                                 <h1>Bulletin Board</h1>
                        </div>
                </div>       
                <div>
                  <div id="BBBody">
                        <div id="BulletinRow">
                                <div id="BBDivider">
                                       <div id="lefpart">
                                                <div class="roboto-medium Bulletin" >
                                                        <div class="Bulletinheader">
                                                                 <h3>Bulletin<br></h3>
                                                                 <h5>Author<br></h5>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat  ipsum at libero consectetur, quis aliquam nulla dignissim. Nulla ornare  sollicitudin luctus. Donec pulvinar nibh nec ullamcorper suscipit.</p>
                                                 </div>
                                        </div>
                                </div>
                                <div id="BBDivider">
                                        <div id="lefpart">
                                                <div class="roboto-medium Bulletin">
                                                        <div class="Bulletinheader">
                                                                 <h3>Bulletin<br></h3>
                                                                 <h5>Author<br></h5>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat  ipsum at libero consectetur, quis aliquam nulla dignissim. Nulla ornare  sollicitudin luctus. Donec pulvinar nibh nec ullamcorper suscipit.</p>
                                                </div>
                                        </div>
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

<?php /**PATH /Users/leonbuena/WebEm/laravel/resources/views/workplace/bulletin.blade.php ENDPATH**/ ?>