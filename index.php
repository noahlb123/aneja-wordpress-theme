<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aneja
 */

get_header();
?>
	<main id="primary" class="site-main">
		<h1 style="text-align: center; margin: 10px 0 auto; font-size: 5em; color: #040b0f;">AIR QUALITY RESEARCH GROUP</h1>
		<p class="my-text" style="font-size: 20px; color: #0b1923; margin: -20px 10px auto;">Department of Marine, Earth, and Atmospheric Sciences - Post Office Box 8208 | 5136 Jordan Hall | Raleigh, NC 27695-8208</p>
		<div id="group-portrait"></div>
		<div id="portrait-label">
			<p class="my-text" style="font-size: 20px;">
				From left to right: (front) Casey Bray, Qi Li, Pornpan Uttamang, and Alberth Nahas; (back) Michael Pirhalla, Jordan Baker, Rebecca Wiegand, Dr. Viney Aneja, and William Battye
			</p>
		</div>
	</main><!-- #main -->

<?php
get_sidebar();
