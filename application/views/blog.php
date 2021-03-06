<?php $this->load->view('header.php'); ?>

	<!-- Content
	================================================== -->
	<section id="content" class="container">
	<div class="hero-unit">
		<h1>Blog</h1>
		<p>Cupcake ipsum dolor sit amet wafer gummi bears pudding applicake. </p>
	</div>

	<hr />

	<!-- #blog -->
	<div class="row" id="blog">

		<!-- posts -->
		<div class="span8"> 

			<!-- Example of image blog item
			================================================== -->
			<article class="post image-post">

				<!-- entry media -->
				<a href="blog-single.html" class="entry-media">
					<img src="http://placehold.it/600x400/222/fff" alt="" />
				</a>

				<!-- entry body -->
				<div class="entry-body">
					<a href="blog-single.html">
						<h2 class="entry-title">
							Back to nature
						</h2>
					</a>
					<p>Cupcake ipsum dolor sit amet wafer gummi bears pudding applicake. Jujubes brownie powder. Sweet roll powder gingerbread gummies. Cupcake ice cream sweet roll pie lollipop. </p>
				</div>

				<!-- entry meta -->
				<div class="entry-meta">
					<span class="entry-type"></span>
					<span class="entry-date">Jun 13, 2012</span>
					<span class="entry-comments"> 12 comments</span>
				</div>

				<!-- clearfix -->
				<div class="clr"></div>

			</article><!-- end item -->

			<!-- Example of video blog item
			================================================== -->
			<article class="post video-post">

				<a href="blog-single.html" class="entry-media">
					<iframe src="http://player.vimeo.com/video/20800127?portrait=0&amp;title=0&amp;byline=0&amp;autoplay=0" width="600" height="340" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
				</a>
				<div class="entry-body">
					<a href="blog-single.html">
						<h2 class="entry-title">Deer</h2>
					</a>
					<p>Cupcake ipsum dolor sit amet wafer gummi bears pudding applicake. Jujubes brownie powder. Sweet roll powder gingerbread gummies. Cupcake ice cream sweet roll pie lollipop. </p>
				</div>
				<div class="entry-meta">
					<span class="entry-type"></span>
					<span class="entry-date">Jun 13, 2012</span>
					<span class="entry-comments"> 12 comments</span>
				</div>
				<div class="clr"></div>

			</article><!-- end item -->

			<!-- Default blog item
			================================================== -->
			<article class="post">

				<a href="blog-single.html" class="entry-media">
					<img src="http://placehold.it/600x400/222/fff" alt="" />
				</a>
				<div class="entry-body">
					<a href="blog-single.html">
						<h2 class="entry-title">Example blog post</h2>
					</a>
					<p>Cupcake ipsum dolor sit amet wafer gummi bears pudding applicake. Jujubes brownie powder. Sweet roll powder gingerbread gummies. Cupcake ice cream sweet roll pie lollipop. </p>
				</div>
				<div class="entry-meta">
					<span class="entry-type"></span>
					<span class="entry-date">Jun 13, 2012</span>
					<span class="entry-comments"> 12 comments</span>
				</div>
				<div class="clr"></div>

			</article><!-- end item -->

			<!-- Example of carousel blog item
			================================================== -->
			<article class="post image-post">

				<div id="carousel" class="carousel slide" rel="carousel">
					<!-- Carousel items -->
					<div class="carousel-inner">
						<div class="item active">
							<img src="http://placehold.it/600x400/333/fff" alt="" />
						</div>
						<div class="item">
							<img src="http://placehold.it/600x400/444/fff" alt="" />
						</div>
					</div>
					<!-- Carousel navigation -->
					<a class="carousel-control left" href="#carousel" data-slide="prev"></a>
					<a class="carousel-control right" href="#carousel" data-slide="next"></a>
				</div>

				<div class="entry-body">
					<a href="blog-single.html">
						<h2 class="entry-title">
							Example blog post
						</h2>
					</a>
					<p>Cupcake ipsum dolor sit amet wafer gummi bears pudding applicake. Jujubes brownie powder. Sweet roll powder gingerbread gummies. Cupcake ice cream sweet roll pie lollipop. </p>				
				</div>
				<div class="entry-meta">
					<span class="entry-type"></span>
					<span class="entry-date">Jun 13, 2012</span>
					<span class="entry-comments"> 12 comments</span>
				</div>
				<div class="clr"></div>

			</article><!-- end item -->
			
			<hr />

			<!-- Pagination
			================================================== -->
			<div class="pagination">
				<ul>
					<li><a href="#">&larr; Prev</a></li>
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">Next &rarr;</a></li>
				</ul>
			</div>
			
		</div><!-- end .span8 -->

		<!-- Sidebar with widgets
		================================================== -->
		<div class="sidebar span4">

			<!-- search plugin -->
			<div class="widget">
				<input type="search" class="animated" placeholder="Search" />
			</div>

			<!-- Tags / categories -->
			<div class="widget">
				<h4>Categories</h4>
				<ul class="tags">
					<li><a href="#">design</a></li>
					<li><a href="#">user interface</a></li>
					<li><a href="#">typography</a></li>
					<li><a href="#">apps</a></li>
					<li><a href="#">mac os/x</a></li>
				</ul>
			</div>

			<!-- List widget with custom list icons -->
			<div class="widget">
				<h4>List widget</h4>
				<ul class="list-style">
					<li><i class="icon-chevron-right"></i> design</li>
					<li><i class="icon-chevron-right"></i> user interface</li>
					<li><i class="icon-chevron-right"></i> typography</li>
					<li><i class="icon-chevron-right"></i> apps</li>
					<li><i class="icon-chevron-right"></i> mac os/x</li>
				</ul>
			</div>

			<!-- Example of tabs widget -->
			<div class="widget stacked">
				<h4>Tabs</h4>
				<ul class="nav nav-tabs">
					<li class="active"><a href="#home" data-toggle="tab">Home</a></li>
					<li class=""><a href="#profile" data-toggle="tab">Profile</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade active in" id="home">
						<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.</p>
					</div>
					<div class="tab-pane fade" id="profile">
						<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.</p>
					</div>
				</div>   
			</div>

			<!-- Flickr widget (notice included js/jflickrfeed.min.js file at the bottom) -->
			<div class="widget">
				<h4>Flickr widget</h4>
				<div class="flickr-feed" data-flickr-id="52617155@N08" data-flickr-tags="workspaces,design,2010,chicago">
				</div>
			</div>

			<!-- Simple text widget -->
			<div class="widget">
				<h4>Text widget</h4>
				<p>Cupcake ipsum dolor sit amet wafer gummi bears pudding applicake. Jujubes brownie powder. Sweet roll powder gingerbread gummies. </p>
			</div>

		</div><!-- end sidebar -->

	</div><!-- end #blog -->

	<script type="text/javascript" src="js/jflickrfeed.min.js"></script>
	</section>

<?php $this->load->view('footer.php'); ?>
</html>		