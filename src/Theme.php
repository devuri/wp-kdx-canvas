<?php

namespace Kdx;

use Urisoft\AbstractPlugin;

class Theme extends AbstractPlugin
{
    public function hooks(): void
    {
        add_action('wp_enqueue_scripts', [ $this,'kadence_child_enqueue_styles' ], 99 );
    }

    /**
     * Enqueues parent and child theme styles.
     *
     * This function enqueues the stylesheets for the parent theme (Kadence) and the child theme.
     *
     * @return void
     */
    public function kadence_child_enqueue_styles(): void
    {
        $parent_style = 'kadence-style'; // This is 'kadence-style' for the Kadence theme.

        wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
        wp_enqueue_style('child-style',
            get_stylesheet_directory_uri() . '/style.css',
            [$parent_style],
            wp_get_theme()->get('Version')
        );
    }
}
