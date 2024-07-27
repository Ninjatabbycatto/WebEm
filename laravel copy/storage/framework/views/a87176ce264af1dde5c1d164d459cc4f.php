<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
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
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>

<?php /**PATH /Users/leonbuena/WebEm/laravel copy/resources/views/workplace/bulletin.blade.php ENDPATH**/ ?>