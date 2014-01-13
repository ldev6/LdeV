<?php $this->load->view('header'); ?>
	<!-- Content
	================================================== -->
	<section id="content" class="container">
	<div class="hero-unit">
		<p>Voici les différents projets auxquels j'ai participé.</p> 
		<p>Here's a preview of 
			<a onclick="$('#portfolio-items article').removeClass('span6').removeClass('span3').removeClass('span4').addClass('span3');$('#portfolio-items').isotope({ filter: '*' })">4 columns</a>,
			<a onclick="$('#portfolio-items article').removeClass('span6').removeClass('span3').removeClass('span4').addClass('span4');$('#portfolio-items').isotope({ filter: '*' })">3 columns</a> or  
			<a onclick="$('#portfolio-items article').removeClass('span6').removeClass('span3').removeClass('span4').addClass('span6');$('#portfolio-items').isotope({ filter: '*' })">2 columns</a> 
			 design. 
		</p>

	</div>

	<hr />

	<div id="portfolio">

		<!-- portfolio filter -->		
		<ul id="portfolio-filter" class="nav nav-tabs">
			<li class="active"><a href="#" class="filter" data-filter="*">All</a></li>
			<li><a href="#" class="filter" data-filter=".web">Web</a></li>
			<li><a href="#" class="filter" data-filter=".android">Android</a></li>
			<li><a href="#" class="filter" data-filter=".corporate">Corporate identity</a></li>
			<li><a href="#" class="filter" data-filter=".ui-design">Interface design</a></li>
			<li><a href="#" class="filter" data-filter=".illustration">Illustration</a></li>
			<li><a href="#" class="filter" data-filter=".experiment">Experiment</a></li>
		</ul>

		<!-- portfolio items -->		
		<section class="row" id="portfolio-items">

			<!-- portfolio item-->
			<article class="span6 project" data-tags="design">

				<div class="thumbnail link">
					<!-- image -->
					<a href="project.html" title="">
						<img alt="" src="http://placehold.it/458x290/444/fff" />
					</a>
					<!-- description -->
					<div class="project-description">
						<!-- icon -->
						<i class="icon-th"></i>
						<!-- name -->
						<b class="project-name">Title</b>
					</div>
					<!-- ribbon -->
					<div class="ribbon"><span>Awarded</span></div>
				</div>

			</article>
			<!-- end portfolio item-->

			<article class="span6 project" data-tags="design">
				<div class="thumbnail link">
					<a href="project.html" title="">
						<img alt="" src="http://placehold.it/458x290/444/fff" />
					</a>
					<a href="#"></a>
					<div class="project-description">
						<b class="name">Awesome website</b>
						<i class="icon-asterisk"></i>
					</div>
				</div>
			</article>

			<article class="span4 project" data-tags="web">
				<div class="thumbnail link">
					<a href="project.html" title="">
						<img alt="" src="http://placehold.it/298x186/444/fff" />
					</a>
					<div class="project-description">
						<b class="name">Awesome website</b>
						<i class="icon-thumbs-up"></i>
					</div>
				</div>
			</article>

			<article class="span4 project" data-tags="web,ui-design">
				<div class="thumbnail link">
					<a href="project.html" title="">
						<img alt="" src="http://placehold.it/298x186/444/fff" />
					</a>
					<div class="project-description">
						<b class="name">Awesome UI</b>
						<i class="icon-beaker"></i>
					</div>
				</div>
			</article>

			<article class="span4 project" data-tags="web">
				<div class="thumbnail link">
					<a href="project.html" title="">
						<img alt="" src="http://placehold.it/298x186/444/fff" />
					</a>
					<div class="project-description">
						<b class="name">Awesome UI</b>
						<i class="icon-heart"></i>
					</div>
				</div>
			</article>

			<article class="span3 project" data-tags="design">
				<div class="thumbnail link">
					<a href="project.html" title="">
						<img alt="" src="http://placehold.it/298x186/444/fff" />
					</a>
					<div class="project-description">
						<b class="name">Other project</b>
						<i class="icon-heart"></i>
					</div>
				</div>
			</article>

			<article class="span3 project" data-tags="photography">
				<div class="thumbnail link">
					<a href="project.html" title="">
						<img alt="" src="http://placehold.it/298x186/444/fff" />
					</a>
					<div class="project-description">
						<b class="name">Other project</b>
						<i class="icon-heart"></i>
					</div>
				</div>
			</article>

			<article class="span3 project" data-tags="photography">
				<div class="thumbnail link">
					<a href="project.html" title="">
						<img alt="" src="http://placehold.it/298x186/444/fff" />
					</a>
					<div class="project-description">
						<b class="name">Other project</b>
						<i class="icon-heart"></i>
					</div>
				</div>
			</article>

			<article class="span3 project" data-tags="design">
				<div class="thumbnail link">
					<a href="project.html" title="">
						<img alt="" src="http://placehold.it/298x186/444/fff" />
					</a>
					<div class="project-description">
						<b class="name">Other project</b>
						<i class="icon-heart"></i>
					</div>
				</div>
			</article>

			<article class="span4 project" data-tags="photography">
				<div class="thumbnail link">
					<a href="project.html" title="">
						<img alt="" src="http://placehold.it/298x186/444/fff" />
					</a>
					<div class="project-description">
						<b class="name">Other project</b>
						<i class="icon-heart"></i>
					</div>
				</div>
			</article>

			<article class="span4 project" data-tags="illustration">
				<div class="thumbnail link">
					<a href="project.html" title="">
						<img alt="" src="http://placehold.it/298x186/444/fff" />
					</a>
					<div class="project-description">
						<b class="name">Other project</b>
						<i class="icon-heart"></i>
					</div>
				</div>
			</article>

			<article class="span4 project" data-tags="illustration">
				<div class="thumbnail link">
					<a href="project.html" title="">
						<img alt="" src="http://placehold.it/298x186/444/fff" />
					</a>
					<div class="project-description">
						<b class="name">Other project</b>
						<i class="icon-heart"></i>
					</div>
				</div>
			</article>

			<article class="span4 project" data-tags="experiment">
				<div class="thumbnail link">
					<a href="project.html" title="">
						<img alt="" src="http://placehold.it/298x186/444/fff" />
					</a>
					<div class="project-description">
						<b class="name">Other project</b>
						<i class="icon-heart"></i>
					</div>
				</div>
			</article>

			<article class="span4 project" data-tags="experiment,ui-design">
				<div class="thumbnail link">
					<a href="project.html" title="">
						<img alt="" src="http://placehold.it/298x186/444/fff" />
					</a>				
					<div class="project-description">
						<b class="name">Other project</b>
						<i class="icon-heart"></i>
					</div>
				</div>
			</article>

			<article class="span4 project" data-tags="ui-design">
				<div class="thumbnail link">
					<a href="project.html" title="">
						<img alt="" src="http://placehold.it/298x186/444/fff" />
					</a>				
					<div class="project-description">
						<b class="name">Other project</b>
						<i class="icon-heart"></i>
					</div>
				</div>
			</article>

			<article class="span4 project" data-tags="illustration">
				<div class="thumbnail link">
					<a href="project.html" title="">
						<img alt="" src="http://placehold.it/298x186/444/fff" />
					</a>
					<div class="project-description">
						<b class="name">Other project</b>
						<i class="icon-heart"></i>
					</div>
				</div>
			</article>

			<article class="span4 project" data-tags="experiment">
				<div class="thumbnail link">
					<a href="project.html" title="">
						<img alt="" src="http://placehold.it/298x186/444/fff" />
					</a>				
					<div class="project-description">
						<b class="name">Other project</b>
						<i class="icon-heart"></i>
					</div>
				</div>
			</article>

			<article class="span4 project" data-tags="illustration">
				<div class="thumbnail link">
					<a href="project.html" title="">
						<img alt="" src="http://placehold.it/298x186/444/fff" />
					</a>				
					<div class="project-description">
						<b class="name">Other project</b>
						<i class="icon-heart"></i>
					</div>
				</div>
			</article>

			<article class="span4 project" data-tags="photography">
				<div class="thumbnail link">
					<a href="project.html" title="">
						<img alt="" src="http://placehold.it/298x186/444/fff" />
					</a>				
					<div class="project-description">
						<b class="name">Other project</b>
						<i class="icon-heart"></i>
					</div>
				</div>
			</article>

			<article class="span4 project" data-tags="corporate">
				<div class="thumbnail link">
					<a href="project.html" title="">
						<img alt="" src="http://placehold.it/298x186/444/fff" />
					</a>				
					<div class="project-description">
						<b class="name">Other project</b>
						<i class="icon-heart"></i>
					</div>
				</div>
			</article>

			<article class="span4 project" data-tags="illustration,corporate">
				<div class="thumbnail link">
					<a href="project.html" title="">
						<img alt="" src="http://placehold.it/298x186/444/fff" />
					</a>				
					<div class="project-description">
						<b class="name">Other project</b>
						<i class="icon-heart"></i>
					</div>
				</div>
			</article>

			<article class="span4 project" data-tags="illustration">
				<div class="thumbnail link">
					<a href="project.html" title="">
						<img alt="" src="http://placehold.it/298x186/444/fff" />
					</a>				
					<div class="project-description">
						<b class="name">Other project</b>
						<i class="icon-heart"></i>
					</div>
				</div>
			</article>

			<article class="span4 project" data-tags="corporate,web">
				<div class="thumbnail link">
					<a href="project.html" title="">
						<img alt="" src="http://placehold.it/298x186/444/fff" />
					</a>				
					<div class="project-description">
						<b class="name">Other project</b>
						<i class="icon-heart"></i>
					</div>
				</div>
			</article>

			<article class="span4 project" data-tags="photography">
				<div class="thumbnail link">
					<a href="project.html" title="">
						<img alt="" src="http://placehold.it/298x186/444/fff" />
					</a>
					<div class="project-description">
						<b class="name">Other project</b>
						<i class="icon-heart"></i>
					</div>
				</div>
			</article>
		</section>
	</div>
	</section>

	<!-- Footer
	================================================== -->
<?php $this->load->view('footer'); ?>