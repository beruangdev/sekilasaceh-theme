<li class="flex py-6" id="post-<?php the_ID(); ?>" <?php post_class('mb-12'); ?>>
    <div class="h-16 md:h-24 aspect-[16/11] flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
        <a href="<?= esc_url(get_permalink()) ?>">
            <?= the_post_thumbnail() ?>
        </a>
    </div>

    <div class="ml-4 flex flex-1 flex-col">
        <div>
            <div class="flex justify-between text-base font-medium text-gray-900">
                <?php the_title(sprintf('<h2 class="entry-title text-lg md:text-2xl font-extra leading-tight mb-1"><a href="%s" rel="bookmark" class="w-full">', esc_url(get_permalink())), '</a></h2>'); ?>
            </div>
        </div>
        <p style="text-overflow: ellipsis;-webkit-line-clamp: 1;-webkit-box-orient: vertical;display: -webkit-box;overflow: hidden;"><?= substr(get_the_excerpt(), 0, 100) ?></p>
        <div class="flex flex-1 items-end justify-between text-sm">
            <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished" class="text-sm text-gray-700"><?php echo get_the_date(); ?></time>
        </div>
    </div>
</li>
