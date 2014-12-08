<?php namespace Theme;

/**
 * Class Scripts
 * @author Ammar Alakkad
 */
class Scripts
{
    public function __construct()
    {
        add_action('init', [&$this, 'register']);
        add_action('wp_enqueue_scripts', [&$this, 'enqueue']);
        add_action('wp_enqueue_scripts', [&$this, 'enqueueWithConditions']);
    }

    /**
     * Register theme scripts
     *
     * @return void
     */
    public function register()
    {
        return null;
    }

    /**
     * Enqueue theme scripts
     *
     * @return void
     */
    public function enqueue()
    {
        return null;
    }

    /**
     * Enqueue theme scripts with specific conditions
     *
     * @return void
     */
    public function enqueueWithConditions()
    {
        return null;
    }
    
}

