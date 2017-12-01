<main role="main">
	<section>
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-3 col-xs-6 img-responsive text-right" style="margin-top:10px; padding: 30px; border-right: solid #ddd 1px;">
				<div class="avatar avatar_left">
					<span><img class="img-responsive" src="/templates/markups-eventoz/assets/images/line.png"></span>
					<img class="img-circle" src="/templates/markups-eventoz/assets/images/male.png">
				</div>
			</div>
			<div class="col-sm-3 col-xs-6 img-responsive" style="margin-top:10px; padding: 30px; border-left: solid #ddd 1px;">
				<div class="avatar">
					<span><img class="img-responsive" src="/templates/markups-eventoz/assets/images/line.png"></span>
					<img class="img-circle" src="/templates/markups-eventoz/assets/images/female.png">
				</div>
			</div>
			<div class="col-sm-3"></div>
		</div>
	</section>

<style type="text/css">
.avatar span{
	position: absolute;
	z-index: -1;
	left: 30px;
	top: 20px;
}
.avatar_left span{
	top: 28px;
	left: 359px;
}

.avatar::before {
	content: "";
	position: absolute;
	bottom: 22px;
	left: 0;
	right: 259px;
	margin: 0px auto;
	background-color: #f07677;
	height: 150px;
	-webkit-border-radius: 0px 0px 150px 150px;
	-moz-border-radius: 0px 0px 150px 150px;
	border-radius: 0px 0px 150px 150px;
	width: 275px;
	z-index: -1;
	-webkit-transform: rotate(-45deg);
	-ms-transform: rotate(-45deg);
	-o-transform: rotate(-45deg);
	transform: rotate(-45deg);
}
.avatar_left::before {
	right: -420px;
}

.avatar::after {
  content: "";
	position: absolute;
	top: 27px;
	left: -403px;
	right: 0px;
	margin: 0px auto;
	background-color: #f07677;
	height: 150px;
	-webkit-border-radius: 150px 150px 0px 0px;
	-moz-border-radius: 150px 150px 0px 0px;
	border-radius: 150px 150px 0px 0px;
	width: 275px;
	z-index: -1;
	-webkit-transform: rotate(-45deg);
	-ms-transform: rotate(-45deg);
	-o-transform: rotate(-45deg);
	transform: rotate(-45deg);
}
.avatar_left::after {
	left: 269px;
}

@media only screen and (max-width: 780px) {}
@media(max-width: 767px) {
	.avatar::before {
		bottom: 0px;
		right: -25px;
		height: 63px;
		width: 115px;
		top: 77px;
	}
	.avatar::after {
		top: 36px;
		left: -25px;
		height: 63px;
		width: 115px;
	}
	.avatar span{
		left: 31px;
		top: 31px;
		-webkit-transform: rotate(6deg);
		-ms-transform: rotate(6deg);
		-o-transform: rotate(6deg);
		transform: rotate(6deg);
	}
	.avatar span img{
		height: 110px
	}
}


</style>

	<section id="mu-about" style="padding: 10px">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="mu-about-area">
						<div class="row">
							<div class="col-md-6">
								<div class="mu-about-left">
									<img class="" src="/templates/markups-eventoz/assets/images/about.jpg" alt="Men Speaker">
								</div>
							</div>
							<div class="col-md-6">
								<div class="mu-about-right">
									<h2>About The Conference</h2>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam aliquam distinctio magni enim error commodi suscipit nobis alias nulla, itaque ex, vitae repellat amet neque est voluptatem iure maxime eius!
									</p>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus in accusamus qui sequi nisi, sint magni, ipsam, porro nesciunt id veritatis quaerat ipsum consequatur laborum, provident veniam quibusdam placeat quam?
									</p>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate perspiciatis magni omnis excepturi, cumque reiciendis.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Start Video -->
	<section id="mu-video">
		<div class="mu-video-overlay">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-video-area">
							<h2>Watch Previous Event Video</h2>
							<a class="mu-video-play-btn" href="#"> <i class="fa fa-play" aria-hidden="true"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Start Video content -->
		<div class="mu-video-content">
			<div class="mu-video-iframe-area">
				<a class="mu-video-close-btn" href="#"> <i class="fa fa-times" aria-hidden="true"></i>
				</a>
				<iframe width="854" height="480" src="https://www.youtube.com/embed/n9AVEl9764s" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
		<!-- End Video content -->
	</section>
	<!-- End Video -->

	<!-- Start Schedule  -->
	<section id="mu-schedule">
		<div class="container">
			<div class="row">
				<div class="colo-md-12">
					<div class="mu-schedule-area">
						<div class="mu-title-area">
							<h2 class="mu-title">Schedule Detail</h2>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis unde, ut sapiente et voluptatum facilis consectetur incidunt provident asperiores at necessitatibus nulla sequi voluptas libero quasi explicabo veritatis minima porro.
							</p>
						</div>

						<div class="mu-schedule-content-area">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs mu-schedule-menu" role="tablist">
								<li role="presentation" class="active">
									<a href="#first-day" aria-controls="first-day" role="tab" data-toggle="tab">1 Day / 19 Feb</a>
								</li>
								<li role="presentation">
									<a href="#second-day" aria-controls="second-day" role="tab" data-toggle="tab">2 Day / 20 Feb</a>
								</li>
								<li role="presentation">
									<a href="#third-day" aria-controls="third-day" role="tab" data-toggle="tab">3 Day / 21 Feb</a>
								</li>

							</ul>

							<!-- Tab panes -->
							<div class="tab-content mu-schedule-content">
								<div role="tabpanel" class="tab-pane fade mu-event-timeline in active" id="first-day">
									<ul>
										<li>
											<div class="mu-single-event">
												<p class="mu-event-time">9.00 AM</p>
												<h3>Breakfast</h3>
											</div>
										</li>
										<li>
											<div class="mu-single-event">
												<img src="/templates/markups-eventoz/assets/images/speaker-1.jpg" alt="event speaker">
												<p class="mu-event-time">10.00 AM</p>
												<h3>Advanced SVG Animations</h3>
												<span>By Karl Groves</span>
											</div>
										</li>
										<li>
											<div class="mu-single-event">
												<img src="/templates/markups-eventoz/assets/images/speaker-2.jpg" alt="event speaker">
												<p class="mu-event-time">11.00 AM</p>
												<h3>Presenting Work with Confidence</h3>
												<span>By Sarah Dransner</span>
											</div>
										</li>
										<li>
											<div class="mu-single-event">
												<img src="/templates/markups-eventoz/assets/images/speaker-3.jpg" alt="event speaker">
												<p class="mu-event-time">12.00 AM</p>
												<h3>Keynote on UX & UI Design</h3>
												<span>By Ned Stark</span>
											</div>
										</li>
										<li>
											<div class="mu-single-event">
												<p class="mu-event-time">1.00 PM</p>
												<h3>The End</h3>
											</div>
										</li>
									</ul>
								</div>
								<div role="tabpanel" class="tab-pane fade mu-event-timeline" id="second-day">
									<ul>
										<li>
											<div class="mu-single-event">
												<p class="mu-event-time">9.00 AM</p>
												<h3>Breakfast</h3>
											</div>
										</li>
										<li>
											<div class="mu-single-event">
												<img src="/templates/markups-eventoz/assets/images/speaker-1.jpg" alt="event speaker">
												<p class="mu-event-time">10.00 AM</p>
												<h3>Advanced SVG Animations</h3>
												<span>By Karl Groves</span>
											</div>
										</li>
										<li>
											<div class="mu-single-event">
												<img src="/templates/markups-eventoz/assets/images/speaker-2.jpg" alt="event speaker">
												<p class="mu-event-time">11.00 AM</p>
												<h3>Presenting Work with Confidence</h3>
												<span>By Sarah Dransner</span>
											</div>
										</li>
										<li>
											<div class="mu-single-event">
												<img src="/templates/markups-eventoz/assets/images/speaker-3.jpg" alt="event speaker">
												<p class="mu-event-time">12.00 AM</p>
												<h3>Keynote on UX & UI Design</h3>
												<span>By Ned Stark</span>
											</div>
										</li>
										<li>
											<div class="mu-single-event">
												<p class="mu-event-time">1.00 PM</p>
												<h3>The End</h3>
											</div>
										</li>
									</ul>
								</div>
								<div role="tabpanel" class="tab-pane fade mu-event-timeline" id="third-day">
									<ul>
										<li>
											<div class="mu-single-event">
												<p class="mu-event-time">9.00 AM</p>
												<h3>Breakfast</h3>
											</div>
										</li>
										<li>
											<div class="mu-single-event">
												<img src="/templates/markups-eventoz/assets/images/speaker-1.jpg" alt="event speaker">
												<p class="mu-event-time">10.00 AM</p>
												<h3>Advanced SVG Animations</h3>
												<span>By Karl Groves</span>
											</div>
										</li>
										<li>
											<div class="mu-single-event">
												<img src="/templates/markups-eventoz/assets/images/speaker-2.jpg" alt="event speaker">
												<p class="mu-event-time">11.00 AM</p>
												<h3>Presenting Work with Confidence</h3>
												<span>By Sarah Dransner</span>
											</div>
										</li>
										<li>
											<div class="mu-single-event">
												<img src="/templates/markups-eventoz/assets/images/speaker-3.jpg" alt="event speaker">
												<p class="mu-event-time">12.00 AM</p>
												<h3>Keynote on UX & UI Design</h3>
												<span>By Ned Stark</span>
											</div>
										</li>
										<li>
											<div class="mu-single-event">
												<p class="mu-event-time">1.00 PM</p>
												<h3>The End</h3>
											</div>
										</li>
									</ul>
								</div>

							</div>

						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Schedule -->

	<!-- Start Speakers -->
	<section id="mu-speakers">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="mu-speakers-area">

						<div class="mu-title-area">
							<h2 class="mu-title">Our Speakers</h2>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis unde, ut sapiente et voluptatum facilis consectetur incidunt provident asperiores at necessitatibus nulla sequi voluptas libero quasi explicabo veritatis minima porro.
							</p>
						</div>

						<!-- Start Speakers Content -->
						<div class="mu-speakers-content">

							<div class="mu-speakers-slider">

								<!-- Start single speaker -->
								<div class="mu-single-speakers">
									<img src="/templates/markups-eventoz/assets/images/speaker-1.jpg" alt="speaker img">
									<div class="mu-single-speakers-info">
										<h3>Karl Groves</h3>
										<p>Digital Artist</p>
										<ul class="mu-single-speakers-social">
											<li>
												<a href="#">
													<i class="fa fa-facebook"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-twitter"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-linkedin"></i>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<!-- End single speaker -->

								<!-- Start single speaker -->
								<div class="mu-single-speakers">
									<img src="/templates/markups-eventoz/assets/images/speaker-2.jpg" alt="speaker img">
									<div class="mu-single-speakers-info">
										<h3>Sarah Dransner</h3>
										<p>Business Consultant</p>
										<ul class="mu-single-speakers-social">
											<li>
												<a href="#">
													<i class="fa fa-facebook"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-twitter"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-linkedin"></i>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<!-- End single speaker -->

								<!-- Start single speaker -->
								<div class="mu-single-speakers">
									<img src="/templates/markups-eventoz/assets/images/speaker-3.jpg" alt="speaker img">
									<div class="mu-single-speakers-info">
										<h3>Ned Stark</h3>
										<p>UI/UX Specialist</p>
										<ul class="mu-single-speakers-social">
											<li>
												<a href="#">
													<i class="fa fa-facebook"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-twitter"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-linkedin"></i>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<!-- End single speaker -->

								<!-- Start single speaker -->
								<div class="mu-single-speakers">
									<img src="/templates/markups-eventoz/assets/images/speaker-4.jpg" alt="speaker img">
									<div class="mu-single-speakers-info">
										<h3>Michaela Lehr</h3>
										<p>Digital Marketer</p>
										<ul class="mu-single-speakers-social">
											<li>
												<a href="#">
													<i class="fa fa-facebook"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-twitter"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-linkedin"></i>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<!-- End single speaker -->

								<!-- Start single speaker -->
								<div class="mu-single-speakers">
									<img src="/templates/markups-eventoz/assets/images/speaker-1.jpg" alt="speaker img">
									<div class="mu-single-speakers-info">
										<h3>Karl Groves</h3>
										<p>Digital Artist</p>
										<ul class="mu-single-speakers-social">
											<li>
												<a href="#">
													<i class="fa fa-facebook"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-twitter"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-linkedin"></i>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<!-- End single speaker -->

								<!-- Start single speaker -->
								<div class="mu-single-speakers">
									<img src="/templates/markups-eventoz/assets/images/speaker-2.jpg" alt="speaker img">
									<div class="mu-single-speakers-info">
										<h3>Sarah Dransner</h3>
										<p>Business Consultant</p>
										<ul class="mu-single-speakers-social">
											<li>
												<a href="#">
													<i class="fa fa-facebook"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-twitter"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-linkedin"></i>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<!-- End single speaker -->

								<!-- Start single speaker -->
								<div class="mu-single-speakers">
									<img src="/templates/markups-eventoz/assets/images/speaker-3.jpg" alt="speaker img">
									<div class="mu-single-speakers-info">
										<h3>Ned Stark</h3>
										<p>UI/UX Specialist</p>
										<ul class="mu-single-speakers-social">
											<li>
												<a href="#">
													<i class="fa fa-facebook"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-twitter"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-linkedin"></i>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<!-- End single speaker -->

								<!-- Start single speaker -->
								<div class="mu-single-speakers">
									<img src="/templates/markups-eventoz/assets/images/speaker-4.jpg" alt="speaker img">
									<div class="mu-single-speakers-info">
										<h3>Michaela Lehr</h3>
										<p>Digital Marketer</p>
										<ul class="mu-single-speakers-social">
											<li>
												<a href="#">
													<i class="fa fa-facebook"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-twitter"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-linkedin"></i>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<!-- End single speaker -->
							</div>
						</div>
						<!-- End Speakers Content -->

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Speakers -->

	<!-- Start Venue -->
	<section id="mu-venue">
		<div class="mu-venue-area">
			<div class="row">

				<div class="col-md-6">
					<div class="mu-venue-map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3508.8176744277202!2d-81.47150788457147!3d28.424757900613237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e77e378ec5a9a9%3A0x2feec9271ed22c5b!2sOrange+County+Convention+Center!5e0!3m2!1sen!2sbd!4v1503833952781" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>

				<div class="col-md-6">
					<div class="mu-venue-address">
						<h2>
							VENUE
							<i class="fa fa-chevron-right" aria-hidden="true"></i>
						</h2>
						<h3>Orange County Convention Center</h3>
						<h4>9800 International Dr, Orlando, FL 32819, USA</h4>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem reiciendis incidunt accusantium porro amet repellendus hic corporis fugiat officiis, sequi iste distinctio possimus dignissimos, veniam quae delectus. Fuga, modi, perferendis!
						</p>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Venue -->

	<!-- Start Pricing  -->
	<section id="mu-pricing">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="mu-pricing-area">

						<div class="mu-title-area">
							<h2 class="mu-title">Pricing plans</h2>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis unde, ut sapiente et voluptatum facilis consectetur incidunt provident asperiores at necessitatibus nulla sequi voluptas libero quasi explicabo veritatis minima porro.
							</p>
						</div>

						<div class="mu-pricing-conten">
							<div class="row">

								<!-- single price item -->
								<div class="col-md-4">
									<div class="mu-single-price">

										<div class="mu-single-price-head">
											<span class="mu-currency">$</span>
											<span class="mu-rate">12</span>
											<span class="mu-time">/all days</span>
										</div>
										<h3 class="mu-price-title">BASIC</h3>
										<ul>
											<li>Basic Class Ticket</li>
											<li>Access to all sessions</li>
											<li>Free Breakfast</li>
										</ul>
										<a class="mu-register-btn" href="#">Register Now</a>
									</div>
								</div>
								<!-- / single price item -->

								<!-- single price item -->
								<div class="col-md-4">
									<div class="mu-single-price mu-popular-price">
										<span class="mu-price-tag">Popular</span>
										<div class="mu-single-price-head">
											<span class="mu-currency">$</span>
											<span class="mu-rate">22</span>
											<span class="mu-time">/all days</span>
										</div>
										<h3 class="mu-price-title">STANDARD</h3>
										<ul>
											<li>Basic Class Ticket</li>
											<li>Access to all sessions</li>
											<li>Free Breakfast</li>
										</ul>
										<a class="mu-register-btn" href="#">Register Now</a>
									</div>
								</div>
								<!-- / single price item -->

								<!-- single price item -->
								<div class="col-md-4">
									<div class="mu-single-price">

										<div class="mu-single-price-head">
											<span class="mu-currency">$</span>
											<span class="mu-rate">45</span>
											<span class="mu-time">/all days</span>
										</div>
										<h3 class="mu-price-title">PREMIUM</h3>
										<ul>
											<li>Basic Class Ticket</li>
											<li>Access to all sessions</li>
											<li>Free Breakfast</li>
										</ul>
										<a class="mu-register-btn" href="#">Register Now</a>
									</div>
								</div>
								<!-- / single price item -->

							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Pricing -->

	<!-- Start Register  -->
	<section id="mu-register">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="mu-register-area">

						<div class="mu-title-area">
							<h2 class="mu-title">Register Form</h2>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis unde, ut sapiente et voluptatum facilis consectetur incidunt provident asperiores at necessitatibus nulla sequi voluptas libero quasi explicabo veritatis minima porro.
							</p>
						</div>

						<div class="mu-register-content">
							<form class="mu-register-form">

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Your Full Name" id="name" name="name" required=""></div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<input type="email" class="form-control" placeholder="Enter Your Email" id="email" name="email" required=""></div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Your Phone Number" id="telephone" name="telephone" required=""></div>
									</div>
									<div class="col-md-6">

										<div class="form-group">
											<select class="form-control" name="ticket" id="ticket">
												<option value="0">Basic ($12)</option>
												<option value="1">Standard ($22)</option>
												<option value="2">Premium ($45)</option>
											</select>
										</div>
									</div>
								</div>

								<button type="submit" class="mu-reg-submit-btn">SUBMIT</button>

							</form>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Register -->

	<!-- Start FAQ -->
	<section id="mu-faq">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="mu-faq-area">

						<div class="mu-title-area">
							<h2 class="mu-title">FAQ</h2>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint assumenda ut molestias doloremque ipsam, fugit laborum totam, pariatur est cumque at, repudiandae officia ex dolores quas minus optio, iusto soluta?
							</p>
						</div>

						<div class="mu-faq-content">

							<div class="panel-group" id="accordion">

								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true">
												<span class="fa fa-angle-down"></span>
												Lorem ipsum dolor sit amet.
											</a>
										</h4>
									</div>
									<div id="collapseOne" class="panel-collapse collapse in">
										<div class="panel-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										</div>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
												<span class="fa fa-angle-up"></span>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit.
											</a>
										</h4>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse">
										<div class="panel-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										</div>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
												<span class="fa fa-angle-up"></span>
												Lorem ipsum dolor sit amet, consectetur.
											</a>
										</h4>
									</div>
									<div id="collapseThree" class="panel-collapse collapse">
										<div class="panel-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										</div>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
												<span class="fa fa-angle-up"></span>
												Lorem ipsum dolor sit amet, consectetur adipisicing.
											</a>
										</h4>
									</div>
									<div id="collapseFour" class="panel-collapse collapse">
										<div class="panel-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										</div>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
												<span class="fa fa-angle-up"></span>
												Lorem ipsum dolor sit amet, consectetur.
											</a>
										</h4>
									</div>
									<div id="collapseFive" class="panel-collapse collapse">
										<div class="panel-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										</div>
									</div>
								</div>

							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End FAQ -->

	<!-- Start Sponsors -->
	<section id="mu-sponsors">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="mu-sponsors-area">

						<div class="mu-title-area">
							<h2 class="mu-title">Our Sponsors</h2>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint assumenda ut molestias doloremque ipsam, fugit laborum totam, pariatur est cumque at, repudiandae officia ex dolores quas minus optio, iusto soluta?
							</p>
						</div>

						<!-- Start spnonsors brand logo -->
						<div class="mu-sponsors-content">
							<div class="row">

								<div class="col-md-2 col-sm-4 col-xs-4">
									<div class="mu-sponsors-single">
										<img src="/templates/markups-eventoz/assets/images/sponsor-logo-1.png" alt="Brand Logo"></div>
								</div>

								<div class="col-md-2 col-sm-4 col-xs-4">
									<div class="mu-sponsors-single">
										<img src="/templates/markups-eventoz/assets/images/sponsor-logo-2.png" alt="Brand Logo"></div>
								</div>

								<div class="col-md-2 col-sm-4 col-xs-4">
									<div class="mu-sponsors-single">
										<img src="/templates/markups-eventoz/assets/images/sponsor-logo-3.png" alt="Brand Logo"></div>
								</div>

								<div class="col-md-2 col-sm-4 col-xs-4">
									<div class="mu-sponsors-single">
										<img src="/templates/markups-eventoz/assets/images/sponsor-logo-4.png" alt="Brand Logo"></div>
								</div>

								<div class="col-md-2 col-sm-4 col-xs-4">
									<div class="mu-sponsors-single">
										<img src="/templates/markups-eventoz/assets/images/sponsor-logo-5.png" alt="Brand Logo"></div>
								</div>

								<div class="col-md-2 col-sm-4 col-xs-4">
									<div class="mu-sponsors-single">
										<img src="/templates/markups-eventoz/assets/images/sponsor-logo-6.png" alt="Brand Logo"></div>
								</div>

								<div class="col-md-2 col-sm-4 col-xs-4">
									<div class="mu-sponsors-single">
										<img src="/templates/markups-eventoz/assets/images/sponsor-logo-7.png" alt="Brand Logo"></div>
								</div>

								<div class="col-md-2 col-sm-4 col-xs-4">
									<div class="mu-sponsors-single">
										<img src="/templates/markups-eventoz/assets/images/sponsor-logo-8.png" alt="Brand Logo"></div>
								</div>

								<div class="col-md-2 col-sm-4 col-xs-4">
									<div class="mu-sponsors-single">
										<img src="/templates/markups-eventoz/assets/images/sponsor-logo-9.png" alt="Brand Logo"></div>
								</div>

								<div class="col-md-2 col-sm-4 col-xs-4">
									<div class="mu-sponsors-single">
										<img src="/templates/markups-eventoz/assets/images/sponsor-logo-1.png" alt="Brand Logo"></div>
								</div>

								<div class="col-md-2 col-sm-4 col-xs-4">
									<div class="mu-sponsors-single">
										<img src="/templates/markups-eventoz/assets/images/sponsor-logo-2.png" alt="Brand Logo"></div>
								</div>

								<div class="col-md-2 col-sm-4 col-xs-4">
									<div class="mu-sponsors-single">
										<img src="/templates/markups-eventoz/assets/images/sponsor-logo-3.png" alt="Brand Logo"></div>
								</div>

							</div>
						</div>
						<!-- End spnonsors brand logo -->

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Sponsors -->

	<!-- Start Contact -->
	<section id="mu-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="mu-contact-area">

						<div class="mu-title-area">
							<h2 class="mu-heading-title">Contact Us</h2>
							<p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
							</p>
						</div>

						<!-- Start Contact Content -->
						<div class="mu-contact-content">
							<div class="row">

								<div class="col-md-12">
									<div class="mu-contact-form-area">
										<div id="form-messages"></div>
										<form id="ajax-contact" method="post" action="mailer.php" class="mu-contact-form">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Name" id="name" name="name" required></div>
											<div class="form-group">
												<input type="email" class="form-control" placeholder="Enter Email" id="email" name="email" required></div>
											<div class="form-group">
												<textarea class="form-control" placeholder="Message" id="message" name="message" required></textarea>
											</div>
											<button type="submit" class="mu-send-msg-btn">
												<span>SUBMIT</span>
											</button>
										</form>
									</div>
								</div>
							</div>
						</div>
						<!-- End Contact Content -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Contact -->

</main>
