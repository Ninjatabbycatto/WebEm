
<div class="ObjContainer">
    <input type="checkbox" id="checkbox1" class="checkbox-input">
    <div class="ObjTextContainer">
        <h5 class="roboto-bold"><?php echo e($objective->title); ?></h5>
        <p class="roboto-light"><?php echo e(\Illuminate\Support\Str::limit($objective->description, 50)); ?></p>
        <p class="roboto-light"><?php echo e($objective->endDate); ?></p>
    </div>
</div><?php /**PATH /Users/leonbuena/WebEm/laravel/resources/views/partials/objectiveItem.blade.php ENDPATH**/ ?>