@extends('vistaDeMuestra')

@section('titulo')
	ejemplo
@endsection

@section('trabajo')

	<div class="container">
			<div class="row top-line animate-box">
				<div class="col-md-7 col-md-push-5 text-left intro">
					<h2>Shift is a free html5 template to showcase your work. 
						<span class="fh5co-highlight">Made with <i class="icon-heart2"></i> by <a href="http://freehtml5.co">FreeHTML5.co</a> 
						</span>
					</h2>
					<!-- <h2>Shift is a Collection of a Beautiful &amp; Premium Themes.</h2> -->
				</div>
				
			</div>
			<div class="row">
				<div class="col-md-4 text-center animate-box">
					<a class="work" href="portfolio_detail.html">
						<div class="work-grid" style="background-image:url(images/project-1.jpg);">
							<div class="inner">
								<div class="desc">
								<h3>Folding Light</h3>
								<span class="cat">Branding</span>
							</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center animate-box">
					<a class="work" href="portfolio_detail.html">
						<div class="work-grid" style="background-image:url(images/project-2.jpg);">
							<div class="inner">
								<div class="desc">
									<h3>Power Led Light</h3>
									<span class="cat">Illustration</span>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center animate-box">
					<a class="work" href="portfolio_detail.html">
						<div class="work-grid" style="background-image:url(images/project-3.jpg);">
							<div class="inner">
								<div class="desc">
									<h3>Elephant Origami</h3>
									<span class="cat">Logo</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
@endsection