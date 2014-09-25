<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package CALSboilerplate_underscores
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php /*get_template_part( 'content', 'page' ); */ ?>
				<div class="container">
			<div id="splitlayout" class="splitlayout">
				<div class="intro">
					<div class="side side-left">
						<header class="codropsheader clearfix">
							<span>Blueprint <span class="bp-icon bp-icon-about" data-content="The Blueprints are a collection of basic and minimal website concepts, components, plugins and layouts with minimal style for easy adaption and usage, or simply for inspiration."></span></span>
							<h1>Split Layout</h1>
							<nav>
								<a href="http://tympanus.net/Blueprints/OnScrollEffectLayout/" class="bp-icon bp-icon-prev" data-info="previous Blueprint"><span>Previous Blueprint</span></a>
								<!--a href="" class="bp-icon bp-icon-next" data-info="next Blueprint"><span>Next Blueprint</span></a-->
								<a href="http://tympanus.net/codrops/?p=16693" class="bp-icon bp-icon-drop" data-info="back to the Codrops article"><span>back to the Codrops article</span></a>
								<a href="http://tympanus.net/codrops/category/blueprints/" class="bp-icon bp-icon-archive" data-info="Blueprints archive"><span>Go to the archive</span></a>
							</nav>
							<div class="demos">
								<a class="current" href="index.html">Effect 1</a>
								<a href="index2.html">Effect 2</a>
							</div>
						</header>
						<div class="intro-content">
							<div class="profile"><img src="img/hosting.svg" alt="profile1"></div>
							<h1><span>CALS IT</span><span>Information Technology</span></h1>
						</div>
						<div class="overlay"></div>
					</div>
					<div class="side side-right">
						<div class="intro-content">
							<div class="profile"><img src="img/security.svg" alt="profile2"></div>
							<h1><span>CALS ACS</span><span>Administrative Computing Services</span></h1>
						</div>
						<div class="overlay"></div>
					</div>
				</div><!-- /intro -->
				<div class="page page-right">
					<div class="page-inner">
						<section>
							<h2>Administrative Computing Services</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vitae metus felis. Nunc tempus, massa sit amet finibus venenatis, tortor nulla mollis libero, vitae maximus ipsum nisl sed neque. Duis consectetur bibendum posuere. Cras luctus facilisis arcu, eu tincidunt lorem molestie et. Aliquam dictum, augue eu condimentum condimentum, leo ligula vehicula dui, eu cursus dolor diam eget lacus. Phasellus ac velit pretium dui feugiat cursus ut tempus lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit, enim at tempor iaculis, orci </p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vitae metus felis. Nunc tempus, massa sit amet finibus venenatis, tortor nulla mollis libero, vitae maximus ipsum nisl sed neque. Duis consectetur bibendum posuere. Cras luctus facilisis arcu, eu tincidunt lorem molestie et. Aliquam dictum, augue eu condimentum condimentum, leo ligula vehicula dui, eu cursus dolor diam eget lacus. Phasellus ac velit pretium dui feugiat cursus ut tempus lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit, enim at tempor iaculis, orci.</p>
						</section>
						<section>
							<h2>Security</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vitae metus felis. Nunc tempus, massa sit amet finibus venenatis, tortor nulla mollis libero, vitae maximus ipsum nisl sed neque. Duis consectetur bibendum posuere. Cras luctus facilisis arcu, eu tincidunt lorem molestie et. Aliquam dictum, augue eu condimentum condimentum, leo ligula vehicula dui, eu cursus dolor diam eget lacus. Phasellus ac velit pretium dui feugiat cursus ut tempus lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit, enim at tempor iaculis, orci.</p>
						</section>
						<section>
							<h2>Authorizations</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vitae metus felis. Nunc tempus, massa sit amet finibus venenatis, tortor nulla mollis libero, vitae maximus ipsum nisl sed neque. Duis consectetur bibendum posuere. Cras luctus facilisis arcu, eu tincidunt lorem molestie et. Aliquam dictum, augue eu condimentum condimentum, leo ligula vehicula dui, eu cursus dolor diam eget lacus. Phasellus ac velit pretium dui feugiat cursus ut tempus lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit, enim at tempor iaculis, orci.</p>
						</section>
						<section>
							<h2>Policies</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vitae metus felis. Nunc tempus, massa sit amet finibus venenatis, tortor nulla mollis libero, vitae maximus ipsum nisl sed neque. Duis consectetur bibendum posuere. Cras luctus facilisis arcu, eu tincidunt lorem molestie et. Aliquam dictum, augue eu condimentum condimentum, leo ligula vehicula dui, eu cursus dolor diam eget lacus. Phasellus ac velit pretium dui feugiat cursus ut tempus lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit, enim at tempor iaculis, orci.</p>
						</section>
						<section>
							<h2>Support</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vitae metus felis. Nunc tempus, massa sit amet finibus venenatis, tortor nulla mollis libero, vitae maximus ipsum nisl sed neque. Duis consectetur bibendum posuere. Cras luctus facilisis arcu, eu tincidunt lorem molestie et. Aliquam dictum, augue eu condimentum condimentum, leo ligula vehicula dui, eu cursus dolor diam eget lacus. Phasellus ac velit pretium dui feugiat cursus ut tempus lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit, enim at tempor iaculis, orci.</p>
						
							<p>Profile images are licensed under a <a href="http://creativecommons.org/licenses/by-nc-sa/2.0/deed.en">Creative Commons BY-NC-SA 2.0</a> license. The images are from Greg Peverill-Conti's <a href="http://www.flickr.com/photos/gregpc/">1,000 faces project</a>.</p>
						</section>
					</div><!-- /page-inner -->
				</div><!-- /page-right -->
				<div class="page page-left">
					<div class="page-inner">
						<section>
							<h2>Web Design</h2>
							<p>Scenario archetype complementary responsive script pixel sidebar sitemap keep it simple. Complementary visuals footer CSS from alan cooper delightful.  Photoshop iconography simplicity user experience affordance narrative ascenders contour.  Slab serif interstitial skeuomorphism illustrator design by committee simplicity alan cooper eye tracking.  Typography contrast mental model typesetting affordance narrative from CSS. Retina simplicity design by committee typography oblique.</p>
							<p>Delightful ascenders contrast prototype. Ligature jakob nielsen user measure.  Ligature contrast glyph rule of thirds composition interstitial dribbble.  Mental model typography urbanized balance.  Resolution rounded corners IDEO constraints dribbble persona.  Portfolio sketch baseline 66-character line.  Usability testing mental model simplicity aspect ratio pencil type.  Usable sans-serif visualization leading prägnanz baseline pencil fireworks clarity omnigraffle.</p>
						</section>
						<section>
							<h2>Responsive</h2>
							<p>Card-sorting dropdown constraints alan cooper prägnanz iconography. Stakeholder balsamiq italic vector composition ethnography CSS monospace hierarchy. Eye tracking serif persona focus group.</p>
							<p>Typesetting artifact rounded corners eye tracking braindump drawer menu mockup dropdown measure. Jony ive eye tracking script monospace heuristic tabs sketches. Affordance eye tracking scenario usable ligature typesetting clarity responsive. Information architecture golden ratio drawer menu header affordance aspect ratio. Balsamiq slab serif IDEO cognitive dissonance kerning pixel pixel-perfect. Pixel rounded corners header workflow portfolio.</p>
							<p>Scenario navigation complementary jony ive helvetica archetype interstitial serif front-end. Constraints pencil usability gestalt design language mockup usability testing affordance jakob nielsen.</p>
						</section>
						<section>
							<h2>Prototype</h2>
							<p>Delightful ascenders contrast prototype. Ligature jakob nielsen user measure.  Ligature contrast glyph rule of thirds composition interstitial dribbble.  Mental model typography urbanized balance.  Resolution rounded corners IDEO constraints dribbble persona.  Portfolio sketch baseline 66-character line.  Usability testing mental model simplicity aspect ratio pencil type.  Usable sans-serif visualization leading prägnanz baseline pencil fireworks clarity omnigraffle.</p>
							<p>Paper prototype urbanized headroom typography splash screen pencil modal branding. Retina omnigraffle objectified descender navigation adobe ethnography. Innovate design by committee modern hero message. Contrast user-centered color theory keep it simple visuals bevel adobe descender splash screen. From focus group accessibility sans-serif archetype pixel-perfect complementary skeuomorphism. Focus group iconography figure-ground navigation user-centered omnigraffle from.</p>
						</section>
						<section>
							<h2>Typography</h2>
							<p>Typesetting artifact rounded corners eye tracking braindump drawer menu mockup dropdown measure. Jony ive eye tracking script monospace heuristic tabs sketches. Affordance eye tracking scenario usable ligature typesetting clarity responsive. Information architecture golden ratio drawer menu header affordance aspect ratio. Balsamiq slab serif IDEO cognitive dissonance kerning pixel pixel-perfect. Pixel rounded corners header workflow portfolio.</p>
							<p>Fireworks mobile skeuomorphism sitemap. Workflow iconography interaction design pixel-perfect serif. Mental model monospace typeface behavior change bauhaus from usability testing. Color theory user experience paper prototype narrative palette serif gradient header. Oblique modal 66-character line sketch responsive portfolio. Comic sans fireworks prägnanz monospace gradient design language jakob nielsen. Figure-ground pixel aspect ratio sketches rounded corners jony ive constraints mental model splash screen.</p>
							<p>Placeholder text by <a href="http://www.designeripsum.com/">Designer Ipsum</a>.</p>
							<p>Profile images are licensed under a <a href="http://creativecommons.org/licenses/by-nc-sa/2.0/deed.en">Creative Commons BY-NC-SA 2.0</a> license. The images are from Greg Peverill-Conti's <a href="http://www.flickr.com/photos/gregpc/">1,000 faces project</a>.</p>
						</section>
					</div><!-- /page-inner -->
				</div><!-- /page-left -->
				<a href="#" class="back back-right" title="back to intro">&rarr;</a>
				<a href="#" class="back back-left" title="back to intro">&larr;</a>
			</div><!-- /splitlayout -->
		</div><!-- /container -->

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php /* get_sidebar(); */?>
<?php get_footer(); ?>
