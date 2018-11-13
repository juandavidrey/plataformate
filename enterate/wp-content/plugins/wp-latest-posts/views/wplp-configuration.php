<?php

/**
 * WP Latest Posts views configuration class *
 */
class WPLPViewsConfig
{
    /**
     * Init version params
     *
     * @var void
     */
    protected $version = false;

    /**
     * WPLPViewsConfig constructor.
     *
     * @param boolean $version Version of plugin
     */
    public function __construct($version)
    {
        $this->version = $version;
    }

    /**
     * Content config tab
     *
     * @return void
     */
    public function displayConfigTab()
    {
        wp_enqueue_script(
            'wplp-velocity',
            plugins_url('js/materialize/velocity.min.js', dirname(__FILE__)),
            array('jquery'),
            '0.1',
            true
        );
        wp_enqueue_script(
            'wplp-tabs',
            plugins_url('js/materialize/tabs.js', dirname(__FILE__)),
            array('jquery'),
            '0.1',
            true
        );
        wp_register_style('wplpAbout', plugins_url('css/wplp_about.css', dirname(__FILE__)));
        wp_enqueue_style('wplpAbout');
        ?>

        <div id="wplpnavtabs" class="wplptabs">
            <ul class="tabs z-depth-1">
                <li class="tab"><a href="#tab-1"><?php esc_html_e('Translation', 'wp-latest-posts'); ?></a></li>
                <li class="tab"><a href="#tab-2"><?php esc_html_e('About', 'wp-latest-posts'); ?></a></li>
            </ul>

            <div id="tab-1" class="metabox_tabbed_content wplptabs">
                <?php \Joomunited\WPLatestPosts\Jutranslation\Jutranslation::getInput(); ?>
            </div>

            <div id="tab-2" class="metabox_tabbed_content">
                <?php echo $this->displayAboutTab(); //phpcs:ignore WordPress.Security.EscapeOutput -- Content escaped in displayAboutTab method in this file ?>
            </div>
        </div>
        <?php
    }

    /**
     * Wp Latest Posts Widget About tab
     *
     * @return void
     */
    public function displayAboutTab()
    {

        wp_enqueue_script('jquery');
        wp_enqueue_script('jquery-ui');
        wp_enqueue_script(
            'javascript',
            plugins_url('/js/wplp_about.js', dirname(__FILE__)),
            array('jquery'),
            '1.0.0',
            true
        );


        echo '<div class="about_content">';

        echo '<p> </p>';

        /**
 * Support information *
*/
        if (!class_exists('WPLPAddonAdmin')) {
            echo '<div class="card wplp_notice light-blue" style="margin-right:20px">
<div class="card-content white-text" >';
            echo '<span class="card-title">' . esc_html__('Get Pro version', 'wp-latest-posts') . '</span>';
            echo '<p><em>' . esc_html__('Optional add-on is currently not installed or not enabled', 'wp-latest-posts') .
                '&rarr; <a href="http://www.joomunited.com/wordpress-products/wp-latest-posts">' .
                 esc_html__('get it here !', 'wp-latest-posts') . '</a></em></p>';
            /**
 * Marketing *
*/
            echo '<iframe src="//player.vimeo.com/video/77775570" width="485" height="281" frameborder="0" 
webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="http://vimeo.com/77775570">';


            echo '<table class="feature-listing">
				<tbody>
				<tr class="header-feature"><th class="feature col1"><strong></strong></th><th class="feature col2">
				<strong>FREE </strong></th><th class="feature col2"><strong>PRO </strong></th></tr>
				
				<tr class="ligne2">
				<td>
				<p>5 pro responsive themes</p>
				</td>
				<td class="feature-text">
				<p style="text-align: center;"><img style="margin: 0px;" 
				src="' . esc_url(plugins_url('img/no.png', dirname(__FILE__))) . '" alt="no" width="16" height="16"></p>
				</td>
				<td class="feature-text">
				<p style="text-align: center;"><img style="margin: 0px;" 
				src="' . esc_url(plugins_url('img/yes.png', dirname(__FILE__))) . '" alt="yes" width="16" height="15"></p>
				</td>
				</tr>
				<tr class="ligne1">
				<td>
				<p>Visual custom theme design</p>
				</td>
				<td class="feature-text">
				<p style="text-align: center;"><img style="margin: 0px;" 
				src="' . esc_url(plugins_url('img/no.png', dirname(__FILE__))) . '" alt="no" width="16" height="16"></p>
				</td>
				<td class="feature-text">
				<p style="text-align: center;"><img style="margin: 0px;" 
				src="' . esc_url(plugins_url('img/yes.png', dirname(__FILE__))) . '" alt="yes" width="16" height="15"></p>
				</td>
				</tr>
				<tr class="ligne2">
				<td>
				<p>Automatically crop text content</p>
				</td>
				<td class="feature-text">
				<p style="text-align: center;"><img style="margin: 0px;" 
				src="' . esc_url(plugins_url('img/no.png', dirname(__FILE__))) . '" alt="no" width="16" height="16"></p>
				</td>
				<td class="feature-text">
				<p style="text-align: center;"><img style="margin: 0px;" 
				src="' . esc_url(plugins_url('img/yes.png', dirname(__FILE__))) . '" alt="yes" width="16" height="15"></p>
				</td>
				</tr>
				<tr class="ligne1">
				<td>
				<p>Advanced transition effect</p>
				</td>
				<td class="feature-text">
				<p style="text-align: center;"><img style="margin: 0px;" 
				src="' . esc_url(plugins_url('img/no.png', dirname(__FILE__))) . '" alt="no" width="16" height="16"></p>
				</td>
				<td class="feature-text">
				<p style="text-align: center;"><img style="margin: 0px;" 
				src="' . esc_url(plugins_url('img/yes.png', dirname(__FILE__))) . '" alt="yes" width="16" height="15"></p>
				</td>
				</tr>
				<tr class="ligne2">
				<td>
				<p>Advanced content filters</p>
				</td>
				<td class="feature-text">
				<p style="text-align: center;"><img style="margin: 0px;" 
				src="' . esc_url(plugins_url('img/no.png', dirname(__FILE__))) . '" alt="no" width="16" height="16"></p>
				</td>
				<td class="feature-text">
				<p style="text-align: center;"><img style="margin: 0px;" 
				src="' . esc_url(plugins_url('img/yes.png', dirname(__FILE__))) . '" alt="yes" width="16" height="15"></p>
				</td>
				</tr>
				<tr class="ligne1">
				<td>
				<p>Private ticket help support</p>
				</td>
				<td class="feature-text">
				<p style="text-align: center;"><img style="margin: 0px;" 
				src="' . esc_url(plugins_url('img/no.png', dirname(__FILE__))) . '" alt="no" width="16" height="16"></p>
				</td>
				<td class="feature-text">
				<p style="text-align: center;"><img style="margin: 0px;" 
				src="' . esc_url(plugins_url('img/yes.png', dirname(__FILE__))) . '" alt="yes" width="16" height="15"></p>
				</td>
				</tr>
				<tr>
				<td colspan="3"><br/>
				<i>And more...</i>
				<td>
				</tbody>
				</table><br/>';
            echo '<a href="http://www.joomunited.com/wordpress-products/wp-latest-posts" 
                    target="_blank" class="getthepro">'
                . esc_html__('Get the Pro version now !', 'wp-latest-posts')
                . '</a>';
            echo '</div></div>';
        } else {
            do_action('wplp_display_about', $this->version);
        }

        echo '<div class="card wplp_notice light-blue"><div class="card-content white-text">';
        echo '<p>' . esc_html__('Initially released in october 2013 by ', 'wp-latest-posts').
             '<a href="http://www.joomunited.com/">'.esc_html__('JoomUnited', 'wp-latest-posts').'</a></p>';
        echo '<p>WP Latest Posts WordPress plugin version ' . esc_html($this->version) . '</p>';
        echo '<p>' . esc_html__('Author: ', 'wp-latest-posts') . ' JoomUnited</p>';
        echo '<p>' . esc_html__('Your current version of WordPress is: ', 'wp-latest-posts') . esc_html(get_bloginfo('version')) . '</p>';
        echo '<p>' . esc_html__('Your current version of PHP is: ', 'wp-latest-posts') . esc_html(phpversion()) . '</p>';
        echo '<p>' . esc_html__('Your hosting provider\'s web server currently runs: ', 'wp-latest-posts') .
            esc_html($_SERVER['SERVER_SOFTWARE']) . '</p>';
        echo '<p><em>' .
             esc_html__('Please specify all of the above information when contacting us for support.', 'wp-latest-posts') .
            '</em></p>';

        echo '<p><a href="http://www.joomunited.com/wordpress-products/wp-latest-posts">
WP Latest Posts official support site</a></p>';
        echo '<a href="http://www.joomunited.com/wordpress-products/wp-latest-posts">';
        echo '<img src="' . esc_url(plugins_url('img/wplp-logo-white.png', dirname(__FILE__))) .
            '" alt="JoomUnited Logo" /></a>';
        echo '</div></div>';
        echo '</div>';
    }
}
