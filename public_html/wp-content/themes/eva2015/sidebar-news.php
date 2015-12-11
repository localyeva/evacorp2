<div class="sidebar col-md-3">
    <ul class="vertical-menu">
        <?php
        $taxonomies = array('news-type');

        $args = array(
            'orderby'           => 'name',
            'order'             => 'ASC',
            'hide_empty'        => true,
            'exclude'           => array(),
            'exclude_tree'      => array(),
            'include'           => array(),
            'number'            => '',
            'fields'            => 'all',
            'slug'              => '',
            'parent'            => '',
            'hierarchical'      => true,
            'child_of'          => 0,
            'childless'         => false,
            'get'               => '',
            'name__like'        => '',
            'description__like' => '',
            'pad_counts'        => false,
            'offset'            => '',
            'search'            => '',
            'cache_domain'      => 'core'
        );

        $terms = get_terms($taxonomies, $args);

        if (count($terms) > 0) { ?>
        <li>
            <span>Category</span>
            <ul>
                <?php foreach ($terms as $term) { ?>
                <li><a href="<?php echo $term->taxonomy . '/' . $term->slug ?>"><?php echo $term->name . '&nbsp;(' . $term->count . ')'; ?></a></li>
                <?php } ?>
            </ul>
        </li>
        <?php } ?>
        <li>
            <span>Archive</span>
            <ul>
                <?php getArchivesByPostType('news'); ?>
            </ul>
        </li>
    </ul>
</div>