
@extends("layout.app")

@section("content")


<section id="intro" class="intro section hasbg bottom-slant slant-gray center">
	<div class="overlay overlay-primary"></div>
	<div class="section-inner">
		<div class="container animatedParent animateOnce" data-sequence="500">
			<p class="name animated bounceInLeft" data-id="1"> {{$info['name']['firstname']}} <span>{{$info['name']['lastname']}}</span></p>
			<h1 class="rotator animated bounceInDown" data-id="2"><span class="rotateme">{{$info['role']}}</span><br><em>from Bangladesh</em></h1>
			<a href="" class="btn btn-lg btn-flat btn-gh btn-ghwhite ripplelink animated bounceIn" data-id="3">Request A Quote <i class="fa fa-edit"></i></a>
		</div>
	</div>
	<!-- /.section-inner -->
</section>	<!-- /#intro -->

<section id="about" class="about section bg-gray bottom-slant slant-white center">
	<div class="container animatedParent animateOnce" data-sequence="500">
		<p class="sec-title title-default h2 animated bounceInDown slow" data-id="1"><span>About</span></p>
		<div class="profile-pic animated bounceInLeft slow" data-id="1">
			<a href="#"><img src={{asset("assets/images/aryan.jpg")}} alt="Mahadi Hasan, Web Designer from Bangladesh."></a>
		</div>
		<div class="social-circle icon-effect-1 animated bounceInLeft slow" data-id="1">
			<a href={{$info['social']['linkedin']}} class="linkedin hi-icon"><i class="fa fa-linkedin"></i></a>
			<a href={{$info['social']['stackoverflow']}} class="stackoverflow hi-icon"><i class="fa fa-stack-overflow"></i></a>
			<a href={{$info['social']['dribbble']}} class="dribbble hi-icon"><i class="fa fa-dribbble"></i></a>
			<a href={{$info['social']['facebook']}} class="facebook hi-icon"><i class="fa fa-facebook"></i></a>
			<a href={{$info['social']['twitter']}} class="twitter hi-icon"><i class="fa fa-twitter"></i></a>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="about-content">
					<h2 class="animated bounceInRight slow" data-id="2">{!!$info['intro']!!}</h2>
					<!-- <div class="btnwrap">
						<a href="about" class="btn btn-lg btn-flat btn-primary ripplelink animated bounceIn slow" data-id="3">Learn More <i class="fa fa-long-arrow-right"></i></a>
						<a href="files/MAHENDRA_BIKRAM_TWANJU_RESUME.pdf" class="btn btn-lg btn-flat btn-gh btn-ghgray ripplelink animated bounceIn slow" data-id="3">Download CV <i class="fa fa-download"></i></a>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</section>	

<!-- /#about -->

<section id="expertise" class="expertise section center">
	<div class="container animatedParent animateOnce">
		<p class="sec-title title-default h2 animated bounceInDown slow"><span>Expertise</span></p>
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<div class="expertise-itm icon-effect-2 animated bounceInLeft slow">
					<span class="hi-icon icon1"><i class="sl-ico icon-screen-desktop"></i></span>
					<h4>{{$info['expertise'][0]}}</h4>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="expertise-itm icon-effect-2 animated bounceInLeft slow">
					<span class="hi-icon icon2"><i class="fa fa-wordpress"></i></span>
					<h4>{{$info['expertise'][1]}}</h4>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="expertise-itm icon-effect-2 animated bounceInRight slow">
					<span class="hi-icon icon3"><span class="sl-ico icon-basket"></span></span>
					<h4>{{$info['expertise'][2]}}</h4>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="expertise-itm icon-effect-2 animated bounceInRight slow">
					<span class="hi-icon icon4"><i class="sl-ico icon-rocket"></i></span>
					<h4>{{$info['expertise'][3]}}</h4>
				</div>
			</div>
		</div>
	</div>
</section>	<!-- /#expertise -->

<section id="works" class="works section hasbg dual-slant tslant-white bslant-red center">
	<div class="overlay overlay-black"></div>
	<div class="container animatedParent animateOnce">
		<p class="sec-title title-white h2 animated bounceInDown slow" data-id="1"><span>Works</span></p>
		<div class="works-mix animated growIn slow">
			<ul class="mix-nav">
				<li><span class="filter" data-filter="all">All</span></li>
				<li><span class="filter" data-filter=".webdevelopment">Web Development</span></li>
				<li><span class="filter" data-filter=".uidesign">UI Design</span></li>
				<li><span class="filter" data-filter=".mobileapp">Mobile App</span></li>
			</ul>
			<!-- /.mix-nav -->

			<div id="mix-container" class="row cm10-row mix-container">
				@for ($i = 1; $i <= count($projects); $i++)
					
					<div class="col-md-4 col-sm-6 mix {{implode(' ', $projects[$i]['category']??[])}}">
						<div class="work-mix">
							<div class="overlay">
								<div class="links">
									<a href={{route('project.details',$i)}} class="icon icn-expand"><i class="fa fa-expand"></i></a>
								</div>
								<div class="caption">
									<h5>{{$projects[$i]['title']??'Name'}}</h5>
									<p class="tags">{{implode(', ', $projects[$i]['tech']??[])}}</p>
								</div>
							</div>
							<img src={{asset($projects[$i]['image']??'')}} alt={{$projects[$i]['title']}}>
						</div>
					</div>

				
				@endfor

			<!-- /#mix-container -->
		</div>
		<!-- /.works-mix -->
		<div class="center btnwrap animated bounceIn slow" data-id="2">
			<a href="contact" class="btn btn-lg btn-flat btn-primary ripplelink">Start a Project <i class="fa fa-rocket"></i></a>
		</div>
	</div>
</section>
<!-- /#works -->

<section id="testimonials" class="testimonials section bg-primary bottom-slant slant-gray center">
	<div class="container animatedParent animateOnce">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
				<p class="sec-title title-white line-white h2 animated bounceInDown slow"><span>Testimonials</span></p>
				<div class="flexslider animated bounceInDown slow">
					<ul class="slides">

						@for ($i = 0; $i < count($testimonials); $i++)
							<li>
								<blockquote>
									<p>{{$testimonials[$i]['review']}}</p>
									<div class="author">
										<img src={{asset($testimonials[$i]['image'])}} alt={{$testimonials[$i]['review']}}>
										<p>{{$testimonials[$i]['reviewer']}}<br><small>[{{$testimonials[$i]['country']}}]</small></p>
									</div>
								</blockquote>
							</li>
						@endfor
						
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /#testimonials -->

<section id="milestones" class="milestones section bg-gray bottom-slant slant-white center">
	<div class="container animatedParent animateOnce">
		<div class="row">
			<div class="col-md-3 col-sm-3 col-xs-6">
				<div class="countup animated bounceInLeft slow">
					<i class="icon sl-ico icon-user"></i>
					<span class="counter">200</span>
					<p class="caption">Happy Clients</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6">
				<div class="countup animated bounceInLeft slow">
					<i class="icon sl-ico icon-cup"></i>
					<span class="counter">450</span>
					<p class="caption">Projects Completed</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6">
				<div class="countup animated bounceInRight slow">
					<i class="icon sl-ico icon-clock"></i>
					<span class="counter">14</span>
					<p class="caption">Years of Work</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6">
				<div class="countup animated bounceInRight slow">
					<i class="icon sl-ico icon-map"></i>
					<span class="counter">25</span>
					<p class="caption">Countries (Clients)</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /#milestones -->

<section id="quote" class="quote section center">
	<div class="container animatedParent animateOnce" data-sequence="500">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
				<p class="sec-title title-default h2 animated bounceInDown slow" data-id="1"><span>Request a Quote</span></p>
				<div class="sec-msg animated bounceInRight slow" data-id="1">
					<h5>Got a great idea or taking some challenges that you need help solving? <br>Believe me, I am a good listener.<br>
					Lets talk over a cup of <span class="hidden">coffee</span> <span class="text-primary h4"><i class="fa fa-coffee"></i></span></h5>
					<a href="contact" class="btn btn-lg btn-flat btn-primary ripplelink">Request a Quote <i class="fa fa-edit"></i></a>
				</div>
				<!-- <div class="divider animated fadeIn slow" data-id="2"><span>Or</span></div>
				<div class="hireme animated bounceInLeft slow" data-id="3">
					<p>Hire Me</p>
					<a href="https://www.freelancer.com/u/riseofaryan.html" target="_blank" class="btn btn-flat btn-freelancer ripplelink">Freelancer.com</a>
					<a href="https://www.fiverr.com/atwanju" target="_blank" class="btn btn-flat btn-fiverr ripplelink">Fiverr.com</a>
				</div> -->
			</div>
		</div>
	</div>
</section>
<!-- /#quote -->

<section id="getintouch" class="contact section hasbg dual-slant tslant-white bslant-gray center">
	<div class="overlay overlay-black"></div>
	<div class="container animatedParent animateOnce" data-sequence="500">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
				<p class="sec-title title-white h2 animated bounceInDown slow" data-id="1"><span>Get in Touch</span></p>
				<div class="contact-info">
					<div class="row">
						<div class="col-md-4 col-sm-4 animated bounceInLeft slow" data-id="1">
							<div class="info-block icon-effect-1">
								<span class="hi-icon"><i class="fa fa-phone"></i></span>
								<p>{{$info['contact']['phone']}}</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 animated bounceInUp slow" data-id="1">
							<div class="info-block icon-effect-1">
								<span class="hi-icon"><i class="fa fa-envelope"></i></span>
								<p>{{$info['contact']['email']}}</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 animated bounceInRight slow" data-id="1">
							<div class="info-block icon-effect-1">
								<span class="hi-icon"><i class="fa fa-whatsapp"></i></span>
								<p>{{$info['contact']['whatsapp']}}</p>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>
<!-- /#contact -->


@endsection