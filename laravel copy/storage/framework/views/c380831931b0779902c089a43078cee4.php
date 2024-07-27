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
        <div class = "rowContainer">
            <div class='titleContainer'>
                <h1 class = 'title'>Title</h1>
                <a href="<?php echo e(route('workplace.Notes.create', 1)); ?>" id="plusButton">
                    <svg data-slot="icon" aria-hidden="true" fill="black" stroke-width="1.5" width="2.5vw" height="2.5vw" stroke="black" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 4.5v15m7.5-7.5h-15" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </a>
            </div>
            <?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('workplace.Notes.show', $note)); ?>" class='noteDetailContainer'>
                    
                    <div>
                        <h1 class='noteTitle roboto-bold'><?php echo e($note->title); ?></h1>
                        <p class='noteDescription roboto-light'> <?php echo e(\Illuminate\Support\Str::limit($note->content, 75)); ?></p>
                    </div>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
        <div class = "rowContainer2">
            <?php if($newNote == 1): ?> 
            <form action="<?php echo e(route('workplace.Notes.store', ['user' => $user->id])); ?>" method="POST">
                <div class='titleContainer'>
                    <?php echo csrf_field(); ?>
                    <div><input type="text" class="transparent-textbox roboto-black" placeholder="Title" name="title"></div>
                    <div class="actionsContainer">
                        <button type="submit" >
                            <p>save</p>
                        </button>
                    </div>
                </div>
                <div class='actualNote'>
                    <textarea class="transparent-textfield roboto-meduium" name="content" placeholder="Enter text here..."></textarea>
                </div>
            </form>

            <?php elseif($notePrev == null): ?>
                <h1>Please select a note</h1>
            
            <?php else: ?>
            <div class='titleContainer'>
                <div><h1 class = 'title2'><?php echo e($notePrev->title); ?></h1></div>
                <div class="actionsContainer">
                    <form action="<?php echo e(route('workplace.Notes.delete', ['id' => $notePrev->id])); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button>
                            <svg data-slot="icon" aria-hidden="true" fill="black"width="2vw" height="2vw" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd" d="M5 3.25V4H2.75a.75.75 0 0 0 0 1.5h.3l.815 8.15A1.5 1.5 0 0 0 5.357 15h5.285a1.5 1.5 0 0 0 1.493-1.35l.815-8.15h.3a.75.75 0 0 0 0-1.5H11v-.75A2.25 2.25 0 0 0 8.75 1h-1.5A2.25 2.25 0 0 0 5 3.25Zm2.25-.75a.75.75 0 0 0-.75.75V4h3v-.75a.75.75 0 0 0-.75-.75h-1.5ZM6.05 6a.75.75 0 0 1 .787.713l.275 5.5a.75.75 0 0 1-1.498.075l-.275-5.5A.75.75 0 0 1 6.05 6Zm3.9 0a.75.75 0 0 1 .712.787l-.275 5.5a.75.75 0 0 1-1.498-.075l.275-5.5a.75.75 0 0 1 .786-.711Z" fill-rule="evenodd"></path>
                            </svg>
                        </button>
                    </form>
                    <form action="<?php echo e(route('workplace.Notes.update', ['id' => $notePrev->id, 'note' => $notePrev])); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <button type="submit">
                        <svg  xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 22 22"  width="2vw" height="2vw">
                            <path d="m5.433 13.917 1.262-3.155A4 4 0 0 1 7.58 9.42l6.92-6.918a2.121 2.121 0 0 1 3 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 0 1-.65-.65Z" />
                            <path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0 0 10 3H4.75A2.75 2.75 0 0 0 2 5.75v9.5A2.75 2.75 0 0 0 4.75 18h9.5A2.75 2.75 0 0 0 17 15.25V10a.75.75 0 0 0-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5Z" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class='actualNote'>
                <textarea name="content" class="transparent-textfield roboto-meduium"><?php echo e($notePrev->content); ?></textarea>
            </div>
            </form>
            <?php endif; ?>
        
  
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

<?php /**PATH /Users/leonbuena/WebEm/laravel copy/resources/views/Workplace/Notes.blade.php ENDPATH**/ ?>