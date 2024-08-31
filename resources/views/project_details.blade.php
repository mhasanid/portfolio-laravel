<!-- <h1>{{ $project['title'] }}</h1>
<p>{{ $project['description'] }}</p>
<p>Technologies: {{ implode(', ', $project['tech']) }}</p> -->

@extends("layout.app")

@section("content")

<section id="intro" class="intro section hasbg bottom-slant slant-white center">
	<div class="overlay overlay-primary"></div>
	<div class="section-inner">
		<div class="container animatedParent animateOnce">
			<p class="page-title h2 animated bounceInDown slow go"><span>Project Details</span></p>
		</div>
	</div>
	<!-- /.section-inner -->
</section>

<section class="profile section">
	<div class="container animatedParent animateOnce">
		<div class="row">
			<div class="col-md-7 col-sm-7 center animated bounceInLeft slower go">
				<div class="project-img">
					<img src={{asset($project['image'])}} alt={{$project['title']}}>
				</div>
				
			</div>
			<div class="col-md-5 col-sm-5 animated bounceInRight slower go">
				<div class="profile-text">
                    <h1></h1>
					<h1 class="job-title">{{$project['title']}}</h1>
					<h6 class="name">{{implode(", ",$project['tech'])}}</h6>
                    <hr style="border-top: 1px solid gray;">
					<p style="text-align: justify;">{{$project['description']}}</p>
				</div>	<!-- /.profile-text -->
			</div>
		</div>
	</div>
</section>


@endsection
