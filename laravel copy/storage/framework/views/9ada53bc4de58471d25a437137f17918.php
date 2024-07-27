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
        <div class = "rowContainer">
            <div class='titleContainer'><h1 class = 'title'>Title</h1></div>
            <div class='noteDetailContainer'>
                <h1 class='noteTitle roboto-bold'>Note 1</h1>
                <p class='noteDescription roboto-light'>Lorem ipsum dolor sit amet, consectetur 
                    adipiscing elit. Curabitur  elementum neque non ligula gravida, vitae 
                </p>
            </div>

        </div>
        <div class = "rowContainer2">
            <div class='titleContainer'><h1 class = 'title2'>Title</h1></div>
            <div class='actualNote'>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur  elementum neque non ligula gravida, vitae 
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur  elementum neque non ligula gravida, vitae 
                </p>
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

<?php /**PATH /Users/leonbuena/WebEm/laravel/resources/views/workplace/notes.blade.php ENDPATH**/ ?>