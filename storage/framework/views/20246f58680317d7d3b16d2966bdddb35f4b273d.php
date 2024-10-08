<?php if(isset($templates['hero'][0]) && $hero = $templates['hero'][0]): ?>
    <?php $__env->startPush('style'); ?>
        <style>
            #hero {
                position: relative;
                padding: 170px 0;
                background-image: linear-gradient(90deg, rgba(7, 11, 40, 0.8) 0%, rgba(7, 11, 40, 0.8) 100%), url(<?php echo e(getFile(config('location.content.path').@$hero->templateMedia()->background_image)); ?>);
                background-position: center center;
                background-size: cover;
                background-repeat: no-repeat;
                background-color: #ffffff;
            }
        </style>
    <?php $__env->stopPush(); ?>

    <header id="hero">
        <div class="container">
            <div class="d-flex align-content-center justify-content-center">
                <div class="col-md-8">
                    <div class="hero-content h-100 text-center">
                        <h1 class="h1 wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay="0.4s"><?php echo app('translator')->get(@$hero['description']->title); ?></h1>
                        <h1 class="h1 mt-10 mb-25 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                            <?php echo app('translator')->get(@$hero['description']->sub_title); ?>
                        </h1>
                        <h6 class="h6 mb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                            <?php echo app('translator')->get(@$hero['description']->short_description); ?>
                        </h6>
                        <a class="btn-hero mt-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s"
                           href="<?php echo e(@$hero->templateMedia()->button_link); ?>">
                            <span><?php echo app('translator')->get(@$hero['description']->button_name); ?></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
<?php endif; ?>
<?php /**PATH C:\laragon\www\elmshrty\resources\views/themes/deepblue/partials/heroBanner.blade.php ENDPATH**/ ?>