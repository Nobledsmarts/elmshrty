<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <?php if(adminAccessRoute(config('role.dashboard.access.view'))): ?>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?php echo e(route('admin.dashboard')); ?>" aria-expanded="false">
                            <i data-feather="home" class="feather-icon"></i>
                            <span class="hide-menu"><?php echo app('translator')->get('Dashboard'); ?></span>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if(adminAccessRoute(config('role.manage_staff.access.view'))): ?>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?php echo e(route('admin.staff')); ?>" aria-expanded="false">
                            <i data-feather="users" class="feather-icon"></i>
                            <span class="hide-menu"><?php echo app('translator')->get('Role Permission'); ?></span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if(adminAccessRoute(config('role.identify_form.access.view'))): ?>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?php echo e(route('admin.identify-form')); ?>" aria-expanded="false">
                            <i data-feather="file-text" class="feather-icon"></i>
                            <span class="hide-menu"><?php echo app('translator')->get('KYC / Identity Form'); ?></span>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if(adminAccessRoute(config('role.manage_plan.access.view'))): ?>
                    
                    <li class="list-divider"></li>
                    <li class="nav-small-cap"><span class="hide-menu"><?php echo app('translator')->get('Manage Plan'); ?></span></li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?php echo e(route('admin.scheduleManage')); ?>" aria-expanded="false">
                            <i class="fas fa-clock"></i>
                            <span class="hide-menu"><?php echo app('translator')->get('Schedule'); ?></span>
                        </a>
                    </li>

                    <li class="sidebar-item <?php echo e(menuActive(['admin.planList','admin.planCreate','admin.planEdit*'],3)); ?>">
                        <a class="sidebar-link" href="<?php echo e(route('admin.planList')); ?>" aria-expanded="false">
                            <i class="fas fa-cubes"></i>
                            <span class="hide-menu"><?php echo app('translator')->get('Plan List'); ?></span>
                        </a>
                    </li>
                <?php endif; ?>


                <?php if(adminAccessRoute(config('role.commission_setting.access.view'))): ?>
                    <li class="list-divider"></li>
                    <li class="nav-small-cap"><span class="hide-menu"><?php echo app('translator')->get('Commission Setting'); ?></span></li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?php echo e(route('admin.referral-commission')); ?>" aria-expanded="false">
                            <i class="fas fa-cogs"></i>
                            <span class="hide-menu"><?php echo app('translator')->get('Referral'); ?></span>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if(adminAccessRoute(config('role.all_transaction.access.view'))): ?>
                    <li class="list-divider"></li>
                    <li class="nav-small-cap"><span class="hide-menu"><?php echo app('translator')->get('All Transaction '); ?></span></li>

                    <li class="sidebar-item <?php echo e(menuActive(['admin.transaction*'],3)); ?>">
                        <a class="sidebar-link" href="<?php echo e(route('admin.transaction')); ?>" aria-expanded="false">
                            <i class="fas fa-exchange-alt"></i>
                            <span class="hide-menu"><?php echo app('translator')->get('Transaction'); ?></span>
                        </a>
                    </li>

                    <li class="sidebar-item <?php echo e(menuActive(['admin.investments*'],3)); ?>">
                        <a class="sidebar-link" href="<?php echo e(route('admin.investments')); ?>" aria-expanded="false">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="hide-menu"><?php echo app('translator')->get('Investments'); ?></span>
                        </a>
                    </li>

                    <li class="sidebar-item <?php echo e(menuActive(['admin.commissions*'],3)); ?>">
                        <a class="sidebar-link" href="<?php echo e(route('admin.commissions')); ?>" aria-expanded="false">
                            <i class="fas fa-money-bill-alt"></i>
                            <span class="hide-menu"><?php echo app('translator')->get('Commission'); ?></span>
                        </a>
                    </li>
                <?php endif; ?>


                <?php if(adminAccessRoute(config('role.user_management.access.view'))): ?>
                    
                    <li class="list-divider"></li>
                    <li class="nav-small-cap"><span class="hide-menu"><?php echo app('translator')->get('Manage User'); ?></span></li>

                    <li class="sidebar-item <?php echo e(menuActive(['admin.users','admin.users.search','admin.user-edit*','admin.send-email*','admin.user*'],3)); ?>">
                        <a class="sidebar-link" href="<?php echo e(route('admin.users')); ?>" aria-expanded="false">
                            <i class="fas fa-users"></i>
                            <span class="hide-menu"><?php echo app('translator')->get('All User'); ?></span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?php echo e(route('admin.kyc.users.pending')); ?>"
                           aria-expanded="false">
                            <i class="fas fa-spinner"></i>
                            <span class="hide-menu"><?php echo app('translator')->get('Pending KYC'); ?></span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?php echo e(route('admin.kyc.users')); ?>"
                           aria-expanded="false">
                            <i class="fas fa-file-invoice"></i>
                            <span class="hide-menu"><?php echo app('translator')->get('KYC Log'); ?></span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?php echo e(route('admin.email-send')); ?>"
                           aria-expanded="false">
                            <i class="fas fa-envelope-open"></i>
                            <span class="hide-menu"><?php echo app('translator')->get('Send Email'); ?></span>
                        </a>
                    </li>

                <?php endif; ?>

                <?php if(adminAccessRoute(config('role.payment_gateway.access.view'))): ?>
                    <li class="list-divider"></li>
                    <li class="nav-small-cap"><span class="hide-menu"><?php echo app('translator')->get('Payment Settings'); ?></span></li>
                    <li class="sidebar-item <?php echo e(menuActive(['admin.payment.methods','admin.edit.payment.methods'],3)); ?>">
                        <a class="sidebar-link" href="<?php echo e(route('admin.payment.methods')); ?>"
                           aria-expanded="false">
                            <i class="fas fa-credit-card"></i>
                            <span class="hide-menu"><?php echo app('translator')->get('Payment Methods'); ?></span>
                        </a>
                    </li>
                    <li class="sidebar-item <?php echo e(menuActive(['admin.deposit.manual.index','admin.deposit.manual.create','admin.deposit.manual.edit'],3)); ?>">
                        <a class="sidebar-link" href="<?php echo e(route('admin.deposit.manual.index')); ?>"
                           aria-expanded="false">
                            <i class="fa fa-university"></i>
                            <span class="hide-menu"><?php echo app('translator')->get('Manual Gateway'); ?></span>
                        </a>
                    </li>
                <?php endif; ?>


                <?php if(adminAccessRoute(config('role.payment_log.access.view'))): ?>
                    <li class="sidebar-item <?php echo e(menuActive(['admin.payment.pending'],3)); ?>">
                        <a class="sidebar-link" href="<?php echo e(route('admin.payment.pending')); ?>" aria-expanded="false">
                            <i class="fas fa-spinner"></i>
                            <span class="hide-menu"><?php echo app('translator')->get('Deposit Request'); ?></span>
                        </a>
                    </li>

                    <li class="sidebar-item <?php echo e(menuActive(['admin.payment.log','admin.payment.search'],3)); ?>">
                        <a class="sidebar-link" href="<?php echo e(route('admin.payment.log')); ?>" aria-expanded="false">
                            <i class="fas fa-history"></i>
                            <span class="hide-menu"><?php echo app('translator')->get('Payment Log'); ?></span>
                        </a>
                    </li>
                <?php endif; ?>


                <?php if(adminAccessRoute(config('role.payout_manage.access.view'))): ?>
                    <li class="list-divider"></li>
                    <li class="nav-small-cap"><span class="hide-menu"><?php echo app('translator')->get('Payout Settings'); ?></span></li>
                    <li class="sidebar-item <?php echo e(menuActive(['admin.payout-method*'],3)); ?>">
                        <a class="sidebar-link" href="<?php echo e(route('admin.payout-method')); ?>"
                           aria-expanded="false">
                            <i class="fas fa-credit-card"></i>
                            <span class="hide-menu"><?php echo app('translator')->get('Payout Methods'); ?></span>
                        </a>
                    </li>

                    <li class="sidebar-item <?php echo e(menuActive(['admin.payout-request'],3)); ?>">
                        <a class="sidebar-link" href="<?php echo e(route('admin.payout-request')); ?>" aria-expanded="false">
                            <i class="fas fa-hand-holding-usd"></i>
                            <span class="hide-menu"><?php echo app('translator')->get('Payout Request'); ?></span>
                        </a>
                    </li>

                    <li class="sidebar-item <?php echo e(menuActive(['admin.payout-log*'],3)); ?>">
                        <a class="sidebar-link" href="<?php echo e(route('admin.payout-log')); ?>" aria-expanded="false">
                            <i class="fas fa-history"></i>
                            <span class="hide-menu"><?php echo app('translator')->get('Payout Log'); ?></span>
                        </a>
                    </li>
                <?php endif; ?>


                <?php if(adminAccessRoute(config('role.support_ticket.access.view'))): ?>
                    <li class="list-divider"></li>
                    <li class="nav-small-cap"><span class="hide-menu"><?php echo app('translator')->get('Support Tickets'); ?></span></li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?php echo e(route('admin.ticket')); ?>" aria-expanded="false">
                            <i class="fas fa-ticket-alt"></i>
                            <span class="hide-menu"><?php echo app('translator')->get('All Tickets'); ?></span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?php echo e(route('admin.ticket',['open'])); ?>"
                           aria-expanded="false">
                            <i class="fas fa-spinner"></i>
                            <span class="hide-menu"><?php echo app('translator')->get('Open Ticket'); ?></span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?php echo e(route('admin.ticket',['closed'])); ?>"
                           aria-expanded="false">
                            <i class="fas fa-times-circle"></i>
                            <span class="hide-menu"><?php echo app('translator')->get('Closed Ticket'); ?></span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?php echo e(route('admin.ticket',['answered'])); ?>"
                           aria-expanded="false">
                            <i class="fas fa-reply"></i>
                            <span class="hide-menu"><?php echo app('translator')->get('Answered Ticket'); ?></span>
                        </a>
                    </li>
                <?php endif; ?>


                <?php if(adminAccessRoute(config('role.subscriber.access.view'))): ?>
                    <li class="list-divider"></li>
                    <li class="nav-small-cap"><span class="hide-menu"><?php echo app('translator')->get('Subscriber'); ?></span></li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?php echo e(route('admin.subscriber.index')); ?>" aria-expanded="false">
                            <i class="fas fa-envelope-open"></i>
                            <span class="hide-menu"><?php echo app('translator')->get('Subscriber List'); ?></span>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if(adminAccessRoute(array_merge(config('role.website_controls.access.view'), config('role.language_settings.access.view')))): ?>
                    <li class="list-divider"></li>
                    <li class="nav-small-cap"><span class="hide-menu"><?php echo app('translator')->get('Controls'); ?></span></li>

                    <?php if(adminAccessRoute(config('role.website_controls.access.view'))): ?>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="<?php echo e(route('admin.basic-controls')); ?>" aria-expanded="false">
                                <i class="fas fa-cogs"></i>
                                <span class="hide-menu"><?php echo app('translator')->get('Basic Controls'); ?></span>
                            </a>
                        </li>


                        <li class="sidebar-item">
                            <a class="sidebar-link" href="<?php echo e(route('admin.plugin.config')); ?>" aria-expanded="false">
                                <i class="fas fa-toolbox"></i>
                                <span class="hide-menu"><?php echo app('translator')->get('Plugin Configuration'); ?></span>
                            </a>
                        </li>



                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <i class="fas fa-envelope"></i>
                                <span class="hide-menu"><?php echo app('translator')->get('Email Settings'); ?></span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level base-level-line">
                                <li class="sidebar-item">
                                    <a href="<?php echo e(route('admin.email-controls')); ?>" class="sidebar-link">
                                        <span class="hide-menu"><?php echo app('translator')->get('Email Controls'); ?></span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="<?php echo e(route('admin.email-template.show')); ?>" class="sidebar-link">
                                        <span class="hide-menu"><?php echo app('translator')->get('Email Template'); ?> </span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <i class="fas fa-mobile-alt"></i>
                                <span class="hide-menu"><?php echo app('translator')->get('SMS Settings'); ?></span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level base-level-line">
                                <li class="sidebar-item">
                                    <a href="<?php echo e(route('admin.sms.config')); ?>" class="sidebar-link">
                                        <span class="hide-menu"><?php echo app('translator')->get('SMS Controls'); ?></span>
                                    </a>
                                </li>

                                <li class="sidebar-item">
                                    <a href="<?php echo e(route('admin.sms-template')); ?>" class="sidebar-link">
                                        <span class="hide-menu"><?php echo app('translator')->get('SMS Template'); ?></span>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <i class="fas fa-bell"></i>
                                <span class="hide-menu"><?php echo app('translator')->get('Push Notification'); ?></span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level base-level-line">
                                <li class="sidebar-item">
                                    <a href="<?php echo e(route('admin.notify-config')); ?>" class="sidebar-link">
                                        <span class="hide-menu"><?php echo app('translator')->get('Configuration'); ?></span>
                                    </a>
                                </li>

                                <li class="sidebar-item">
                                    <a href="<?php echo e(route('admin.notify-template.show')); ?>" class="sidebar-link">
                                        <span class="hide-menu"><?php echo app('translator')->get('Template'); ?></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>
                    <?php if(adminAccessRoute(config('role.language_settings.access.view'))): ?>
                        <li class="sidebar-item <?php echo e(menuActive(['admin.language.create','admin.language.edit*','admin.language.keywordEdit*'],3)); ?>">
                            <a class="sidebar-link" href="<?php echo e(route('admin.language.index')); ?>"
                               aria-expanded="false">
                                <i class="fas fa-language"></i>
                                <span class="hide-menu"><?php echo app('translator')->get('Manage Language'); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>

                <?php if(adminAccessRoute(config('role.theme_settings.access.view'))): ?>
                    <li class="list-divider"></li>
                    <li class="nav-small-cap"><span class="hide-menu"><?php echo app('translator')->get('Theme Settings'); ?></span></li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?php echo e(route('admin.manage.theme')); ?>" aria-expanded="false">
                            <i class="fas fa-image"></i><span
                                class="hide-menu"><?php echo app('translator')->get('Manage Theme'); ?></span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?php echo e(route('admin.logo-seo')); ?>" aria-expanded="false">
                            <i class="fas fa-image"></i><span
                                class="hide-menu"><?php echo app('translator')->get('Manage Logo & SEO'); ?></span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?php echo e(route('admin.breadcrumb')); ?>" aria-expanded="false">
                            <i class="fas fa-file-image"></i><span
                                class="hide-menu"><?php echo app('translator')->get('Manage Breadcrumb'); ?></span>
                        </a>
                    </li>


                    <li class="sidebar-item <?php echo e(menuActive(['admin.template.show*'],3)); ?>">
                        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                            <i class="fas fa-clipboard-list"></i>
                            <span class="hide-menu"><?php echo app('translator')->get('Manage Content'); ?></span>
                        </a>
                        <ul aria-expanded="false"
                            class="collapse first-level base-level-line <?php echo e(menuActive(['admin.template.show*'],1)); ?>">

                            <?php $__currentLoopData = array_diff(array_keys(config('templates')),['message','template_media']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="sidebar-item <?php echo e(menuActive(['admin.template.show'.$name])); ?>">
                                    <a class="sidebar-link <?php echo e(menuActive(['admin.template.show'.$name])); ?>"
                                       href="<?php echo e(route('admin.template.show',$name)); ?>">
                                        <span class="hide-menu"><?php echo app('translator')->get(ucfirst(kebab2Title($name))); ?></span>
                                    </a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </ul>
                    </li>


                    <?php
                        $segments = request()->segments();
                        $last  = end($segments);
                    ?>
                    <li class="sidebar-item <?php echo e(menuActive(['admin.content.create','admin.content.show*'],3)); ?>">
                        <a class="sidebar-link has-arrow <?php echo e(Request::routeIs('admin.content.show',$last) ? 'active' : ''); ?>"
                           href="javascript:void(0)" aria-expanded="false">
                            <i class="fas fa-clipboard-list"></i>
                            <span class="hide-menu"><?php echo app('translator')->get('Content Settings'); ?></span>
                        </a>
                        <ul aria-expanded="false"
                            class="collapse first-level base-level-line <?php echo e(menuActive(['admin.content.create','admin.content.show*'],1)); ?>">
                            <?php $__currentLoopData = array_diff(array_keys(config('contents')),['message','content_media']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="sidebar-item <?php echo e(($last == $name) ? 'active' : ''); ?> ">
                                    <a class="sidebar-link <?php echo e(($last == $name) ? 'active' : ''); ?>"
                                       href="<?php echo e(route('admin.content.index',$name)); ?>">
                                        <span class="hide-menu"><?php echo app('translator')->get(ucfirst(kebab2Title($name))); ?></span>
                                    </a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </li>
                <?php endif; ?>
                <li class="list-divider"></li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<?php /**PATH /home/elmshrty/public_html/resources/views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>