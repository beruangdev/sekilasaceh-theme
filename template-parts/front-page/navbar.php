<header class="mb-3">
    <div class="relative bg-white">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
            <div class="flex items-center justify-between border-b-2 border-gray-100/0 py-3 md:justify-start md:space-x-10">
                <div class="flex justify-start">
                    <?php if (has_custom_logo()) { ?>
                        <?php
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                        ?>

                        <a href="<?php echo get_bloginfo('url'); ?>">
                            <img src="<?= $logo[0] ?>" alt="" srcset="" class="h-[30px] md:h-[45px] w-auto">
                        </a>

                    <?php } else { ?>
                        <a href="<?php echo get_bloginfo('url'); ?>" class="font-extrabold text-lg uppercase">
                            <?php echo get_bloginfo('name'); ?>
                        </a>
                        <p class="text-sm font-light text-gray-600">
                            <?php echo get_bloginfo('description'); ?>
                        </p>
                    <?php } ?>
                </div>
                <div class="-my-2 -mr-2 md:hidden">
                    <button type="button" class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 button-menu" aria-expanded="false">
                        <span class="sr-only">Open menu</span>
                        <!-- Heroicon name: outline/bars-3 -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
                <nav class="hidden space-x-10 md:flex">
                    <div class="relative wrapper-dropdown">
                        <?= wp_nav_menu([
                            'menu' => "main-menu",
                            'echo' => false,
                            'items_wrap' => '<ul id="%1$s" class="%2$s flex flex-wrap gap-4 font-semibold">%3$s</ul>',
                        ])
                        ?>
                    </div>
                </nav>
                <div class="hidden items-center justify-end md:flex md:flex-1 lg:w-0">
                    <!-- <a href="#" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">Sign in</a> -->
                    <!-- <a href="#" class="ml-8 inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Sign up</a> -->
                </div>
            </div>
        </div>


        <div class="fixed inset-x-0 top-0 origin-top-right transform p-2 transition hidden md:hidden wrapper-menu z-10">
            <div class="divide-y-2 divide-gray-50 rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5">
                <div class="px-5 pt-5 pb-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <?php if (has_custom_logo()) { ?>
                                <?php
                                $custom_logo_id = get_theme_mod('custom_logo');
                                $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                                ?>

                                <img src="<?= $logo[0] ?>" alt="" srcset="" class="h-[30px] w-auto">

                            <?php } else { ?>
                                <a href="<?php echo get_bloginfo('url'); ?>" class="font-extrabold text-lg uppercase">
                                    <?php echo get_bloginfo('name'); ?>
                                </a>
                                <p class="text-sm font-light text-gray-600">
                                    <?php echo get_bloginfo('description'); ?>
                                </p>
                            <?php } ?>
                        </div>
                        <div class="-mr-2">
                            <button type="button" class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 button-menu">
                                <span class="sr-only">Close menu</span>
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="mt-6">
                        <nav class="grid gap-y-8">

                            <?= wp_nav_menu([
                                'menu' => "main-menu",
                                'echo' => false,
                                'items_wrap' => '<ul id="%1$s" class="%2$s flex flex-wrap flex-col gap-4 font-semibold">%3$s</ul>',
                            ])
                            ?>

                        </nav>
                    </div>
                </div>
                <!-- <div class="space-y-6 py-6 px-5">
                    <div class="grid grid-cols-2 gap-y-4 gap-x-8">
                        <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Docs</a>
                    </div>
                    <div>
                        <a href="#" class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Sign up</a>
                        <p class="mt-6 text-center text-base font-medium text-gray-500">
                            Existing customer?
                            <a href="#" class="text-indigo-600 hover:text-indigo-500">Sign in</a>
                        </p>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</header>
