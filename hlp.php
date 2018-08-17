<?php $title = "Project Name | "?>

<?php include 'includes/header_1.php'; ?>
	<!-- Case Study Header -->
	<section class="case-study-intro" id="intro">

		<!-- Navigation -->
		<div class="case-study-exit">
			<a href="index.php"><span>Back</span></a>
		</div>
		<nav class="case-study-nav">
			<span><a href="about.php">About</a></span>
			<span> — </span>
			<span><a href="index.php">Work</a></span>
		</nav>

		<!-- Intro -->
		<div class="case-study-intro-text">
			<h1>Hello Lamp Post</h1>
			<span class="divider"></span>
			<h2>Playful public engagement platform.</h2>
		</div>

		<!-- Hero Image -->
		<div class="case-study-hero">
			<div class="case-study-intro-overlay"></div>
			<div class="case-study-intro-image hlp"></div>
		</div>

	</section>

	<!-- Case Study Content -->
	<div class="case-study-shade">
		<div class="case-study-container">

			<div class="case-study-text-wrap">
				<div class="case-study-brief">
					<span class="heading-small">Brief</span>
					<p>Variety of design/development work for each installation.</p>
				</div>

				<div class="case-study-details">
					<div class="case-study-role">
						<span class="heading-small">Role</span>
						<p>Design - Development</p>
					</div>
					<div class="case-study-client">
						<span class="heading-small">Client</span>
						<p><a href="http://www.hellolamppost.co.uk" target="blank">Hello Lamp Post</a></p>
					</div>
					<div class="case-study-category">
						<span class="heading-small">Category</span>
						<p>Front-end, Graphic Design, Information Design</p>
					</div>
				</div>	
			</div>

			<span class="heading-small">Explanation</span>

			<div class="case-study-text-wrap">
				<div class="column-1">
					<p><a href=“http://www.hellolamppost.co.uk” target=“blank”>Hello Lamp Post</a> is a public engagement platform built in Ruby that allows people to have conversations with street furniture using text messages, Facebook Messenger or a web application.</p>

					<p>Originally built and maintained by <a href=“http://www.panstudio.co.uk” target=“blank”>PAN Studio</a>, it has recently become an independent company and has travelled to 10+ cities around the world and played by thousands of people.</p>
				</div>

				<div class="column-2">
					<p>During my time at PAN, I was able to work on a variety of campaign and back-end system work for the platform. I applied skills in graphic design, web development, video and data visualisation as well as liaise and produce work for clients in Manchester, London, USA, Netherlands and India.</p>

					<p>Hello Lamp Post has been nominated for the prestigious <a href=“https://designmuseum.org/” target=“blank”>Design Museum’s</a> Design of the Year Award and won <a href=“https://www.watershed.co.uk/” target=“blank”>Watershed’s</a> first <a href=“https://www.playablecity.com/projects/hello-lamp-post/” target=“blank”>Playable City Award</a>.</p>
				</div>
			</div>

			<div class="case-study-image-wrap">

				<div class="image-container">
					<img src="assets/images/large.png" alt="Project Image">
				</div>

				<div class="image-container">
					<div class="image-1">
						<img src="assets/images/small.png" alt="Project Image">
					</div>

					<div class="image-2">
						<img src="assets/images/small.png" alt="Project Image">
					</div>
				</div>

			</div>
		</div>
	</div>

	<?php include 'includes/footer_1.php'; ?>


	<!-- Next, To-Top and Previous arrows -->
	<div class="case-study-arrows-container">

		<a href="#">
			<div class="case-study-arrow-1">
				<span class="arrow-left-container">
					<svg class="arrow-left"  version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
						<path d="M50,2.9c26-0.1,47.2,20.9,47.3,47c0.1,12.6-5,24.7-13.9,33.6c-18.5,18.5-48.4,18.5-66.9,0s-18.5-48.4,0-66.9C25.5,7.8,37.5,2.9,50,2.9M50,0L50,0C22.4,0,0,22.4,0,50l0,0c0,27.6,22.4,50,50,50l0,0c27.6,0,50-22.4,50-50l0,0C100,22.4,77.6,0,50,0z"/>
						<path d="M81.1,52.9H21.7c-1.6,0-2.9-1.3-2.9-2.9c0-1.6,1.3-2.9,2.9-2.9h59.4c1.6,0,2.9,1.3,2.9,2.9C84,51.6,82.7,52.9,81.1,52.9z"/>
						<path d="M41.7,74.3c-0.7,0-1.5-0.3-2-0.9L16.9,52c-1.1-1.1-1.1-2.9,0-4l22.9-21.4c0.9-1.3,2.7-1.5,4-0.6c1.3,0.9,1.5,2.7,0.6,4c-0.2,0.2-0.4,0.4-0.6,0.6L23.1,50l20.6,19.4c1.1,1.1,1.1,2.9,0,4C43.2,74,42.5,74.3,41.7,74.3z"/>
					</svg>
				</span>
				<span class="arrow-left-text">
					<h3>Hello Lamp Post</h3>
					<h4>Previous Project</h4>
				</span>
			</div>
		</a>

		<a href="#" onclick="scrollDown(document.getElementById('intro'))">
			<div class="case-study-arrow-top">
				<span class="arrow-top-container">
					<svg class="arrow-top" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
						<title>Arrow Top</title>
						<path class="a" d="M2.9,50A47.1,47.1,0,0,1,83.3,16.7,47.1,47.1,0,1,1,16.7,83.3,46.7,46.7,0,0,1,2.9,50M0,50H0a50,50,0,0,0,50,50h0a50,50,0,0,0,50-50h0A50,50,0,0,0,50,0h0A50,50,0,0,0,0,50Z"/>
						<path class="a" d="M52.9,21.7V81.1a2.9,2.9,0,0,1-5.8,0V21.7a2.9,2.9,0,0,1,5.8,0Z"/>
						<path class="a" d="M74.3,41.7a2.9,2.9,0,0,1-.9,2.1,3,3,0,0,1-4.1-.1L50,23,30.7,43.7a3,3,0,0,1-4.1.1,2.8,2.8,0,0,1-.1-4L47.9,16.9a2.9,2.9,0,0,1,4.2,0L73.5,39.8A2.7,2.7,0,0,1,74.3,41.7Z"/>
					</svg>
				</span>
				<h4>Back to Top</h4>
			</div>
		</a>

		<a href="#">
			<div class="case-study-arrow-2">
				<span class="arrow-right-container">
					<svg class="arrow-right" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
						<path d="M50,2.9c26-0.1,47.2,20.9,47.3,47c0.1,12.6-5,24.7-13.9,33.6C64.9,102,35,102,16.5,83.5s-18.5-48.4,0-66.9C25.5,7.8,37.5,2.9,50,2.9M50,0L50,0C22.4,0,0,22.4,0,50l0,0c0,27.6,22.4,50,50,50l0,0c27.6,0,50-22.4,50-50l0,0C100,22.4,77.6,0,50,0z"/>
						<path d="M19,46.8h59.4c1.6,0,2.9,1.3,2.9,2.9c0,1.6-1.3,2.9-2.9,2.9H19c-1.6,0-2.9-1.3-2.9-2.9C16.1,48.1,17.4,46.8,19,46.8z"/>
						<path d="M58.4,25.4c0.7,0,1.5,0.3,2,0.9l22.8,21.4c1.1,1.1,1.1,2.9,0,4L60.3,73.1c-0.9,1.3-2.7,1.5-4,0.6c-1.3-0.9-1.5-2.7-0.6-4c0.2-0.2,0.4-0.4,0.6-0.6L77,49.7L56.4,30.3c-1.1-1.1-1.1-2.9,0-4C56.9,25.7,57.6,25.4,58.4,25.4z"/>
					</svg>
				</span>
				<span class="arrow-right-text">
					<h3>Apto Hotels</h3>
					<h4>Next Project</h4>
				</span>
			</div>
		</a>
	</div>
	<?php include 'includes/footer_2.php'; ?>