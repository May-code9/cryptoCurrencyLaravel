@extends('master')
@section('title')
About
@endsection
@section('content')

<section id="sp-page-title">
	<div class="row">
		<div id="sp-title" class="col-sm-12 col-md-12">
			<div class="sp-column ">
				<div class="sp-page-title"style="background-color: #f7f7f7;">
					<div class="container">
						<h2>About Us</h2>
						<h3>Who We Are</h3>
						<div class="sp-module ">
							<div class="sp-module-content">
								<ol class="breadcrumb">
									<li><i class="fa fa-home"></i></li>
									<li><a href="{{ route('crypto_home') }}" class="pathway">Home</a></li>
									<li class="active">About Us</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="sp-breadc">
	<div class="container">
		<div class="row">
			<div id="sp-breadcrumb" class="col-sm-12 col-md-12">
				<div class="sp-column ">
					<div class="sp-module ">
						<div class="sp-module-content">
							<ol class="breadcrumb">
								<li><i class="fa fa-home"></i></li>
								<li><a href="{{ route('crypto_home') }}" class="pathway">Home</a></li>
								<li class="active">About Us</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="sp-main-body">
	<div class="row">
		<div id="sp-component" class="col-sm-12 col-md-12">
			<div class="sp-column ">
				<div id="system-message-container">
				</div>
				<div id="sp-page-builder" class="sp-page-builder  page-3">
					<div class="page-content">
						<section id="section-id-1515885034893" class="sppb-section ">
							<div class="sppb-row-container">
								<div class="sppb-row">
									<div class="sppb-col-md-6">
										<div id="column-id-1515885034891" class="sppb-column" >
											<div class="sppb-column-addons">
												<div id="sppb-addon-1515885034899" class="clearfix" >
													<div class="sppb-addon sppb-addon-text-block 0 sppb-text-left about-us">
														<h3 class="sppb-addon-title">Who <span>We</span> Are</h3>
														<div class="sppb-addon-content just">We are a premier investment firm comprised of a dedicated team of talented professionals working together in a supportive, highly focused environment, where extensive analysis and open discussions drive our decision making. {{ config('app.name') }} and its investment team have a proven track record of highly profitable investments in digital currencies. <br>{{ config('app.name') }}  treats every client as a teammate.  You will be assigned an account manager who knows you and your goals personally.  You can speak to our team on your schedule. <br> We value frank and honest conversations and welcome new ideas.  We listen.  Our clients always come first.  We strive to establish lasting relationships based on trust, performance, and value.  Our team is readily available to speak with you about investment strategies and upcoming opportunities.  Call us today to learn more for free with no obligation.</div>
													</div>
												</div>
												<div id="sppb-addon-1515885034909" class="clearfix" >
													<div class="sppb-empty-space  clearfix"></div>
												</div>
												<!-- <div id="sppb-addon-1515885034950" class="clearfix" >
													<div class="sppb-text-left">
														<a href="#contact" id="btn-1515885034950" class="sppb-btn  button_style01 sppb-btn-custom sppb-btn-sm sppb-btn-round">GET STARTED</a>
													</div>
												</div> -->
											</div>
										</div>
									</div>
									<div class="sppb-col-md-6">
										<div id="column-id-1515885034892" class="sppb-column" >
											<div class="sppb-column-addons">
												<div id="sppb-addon-1515885034896" class="clearfix" >
													<div class="sppb-addon sppb-addon-single-image sppb-text-center ">
														<div class="sppb-addon-content">
															<div class="sppb-addon-single-image-container">
																<div class="sppb-addon-image-overlay"></div>
																<a class="sppb-magnific-popup sppb-addon-image-overlay-icon" data-popup_type="image" data-mainclass="mfp-no-margins mfp-with-zoom" href="/images/about-us.jpg">+</a>
																<img class="sppb-img-responsive" src="/images/about-us.jpg" alt="Image" title="">
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
						<section id="section-id-1515885034921" class="sppb-section ">
							<div class="sppb-row-container">
								<div class="sppb-row">
									<div class="sppb-col-md-12">
										<div id="column-id-1515885034920" class="sppb-column" >
											<div class="sppb-column-addons">
												<div id="sppb-addon-1515885034957" class="clearfix" >
													<div class="sppb-addon sppb-addon-text-block 0 sppb-text-center content_border">
														<h3 class="sppb-addon-title">Our Strategy</h3>
														<div class="sppb-addon-content"></div>
													</div>
												</div>
												<div id="section-id-1515885034928" class="sppb-section ">
													<div class="sppb-container-inner">
														<div class="sppb-row">
															<div class="sppb-col-md-6">
																<div id="column-id-1515885034929" class="sppb-column" >
																	<div class="sppb-column-addons">
																		<div id="sppb-addon-1515885034944" class="clearfix" >
																			<div class="sppb-addon sppb-addon-text-block 0 sppb-text-left ">
																				<div class="sppb-addon-content">{{ config('app.name') }} maintains a core portfolio of carefully selected large and small cap digital currencies, specifically cryptocurrencies, which are the fastest growing assets in finance.<br /><br />  After extensively researching and monitoring an array of approximately fifty digital currencies, we execute trades in those with the most favorable risk-reward profiles.<br><br>We look deeper than just the candlestick charts and numbers.  We understand not only the teams and operations behind each asset, but also its uniqueness and potential global value.  With diligent monitoring and advanced trading strategies, our investment team can realize profits in both bull and bear markets.</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="sppb-col-md-6">
																<div id="column-id-1515885034932" class="sppb-column" >
																	<div class="sppb-column-addons">
																		<div id="sppb-addon-1515885034939" class="clearfix" >
																			<div class="sppb-addon sppb-addon-text-block 0 sppb-text-left ">
																				<div class="sppb-addon-content">Our goals are aligned with yours, as we invest your capital with the same care, using the same strategies, and into many of the same digital currencies as we invest our own.<br /><br />Our experience, performance, ethics, and dedication to fair treatment of clients and to client satisfaction make Blockweather the premier global digital currency investment firm.</div>
																			</div>
																		</div>
																	</div>
																</div>
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
						<section id="section-id-1515885034950" class="sppb-section "   data-sppb-parallax="on">
							<div class="sppb-row-container">
								<div class="sppb-row">
									<div class="sppb-col-md-2">
										<div id="column-id-1515885034949" class="sppb-column" >
											<div class="sppb-column-addons"></div>
										</div>
									</div>
									<div class="sppb-col-md-8">
										<div id="column-id-1515885034956" class="sppb-column" >
											<div class="sppb-column-addons">
												<div id="sppb-addon-1515885034953" class="clearfix" >
													<div class="sppb-addon sppb-addon-text-block 0 sppb-text-center ">
														<h3 class="sppb-addon-title">Some Fun Facts</h3>
														<div class="sppb-addon-content">CryptoCurrency uses peer-to-peer technology to operate with no central authority or banks; managing transactions and the issuing of CryptoCurrencies is carried out collectively by the network. CryptoCurrency is open-source; its design is public, nobody owns or controls CryptoCurrency and everyone can take part. Through many of its unique properties, CryptoCurrency allows exciting uses that could not be covered by any previous payment system.</div>
													</div>
												</div>
												<div id="section-id-1515885034958" class="sppb-section ">
													<div class="sppb-container-inner">
														<div class="sppb-row">
															<div class="sppb-col-md-4">
																<div id="column-id-1515885034959" class="sppb-column">
																	<div class="sppb-column-addons">
																		<div id="sppb-addon-1515885034968" class="clearfix">
																			<div class="sppb-addon sppb-addon-animated-number sppb-text-center animation_number">
																				<div class="sppb-addon-content">
																					<div class="sppb-animated-number" data-digit="500" data-duration="3500">0</div>
																					<div class="sppb-animated-number-title">NEW CLIENTS</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="sppb-col-md-4">
																<div id="column-id-1515885034962" class="sppb-column" >
																	<div class="sppb-column-addons">
																		<div id="sppb-addon-1515885034986" class="clearfix" >
																			<div class="sppb-addon sppb-addon-animated-number sppb-text-center animation_number">
																				<div class="sppb-addon-content">
																					<div class="sppb-animated-number" data-digit="80" data-duration="2498">0</div>
																					<div class="sppb-animated-number-title">EXTRA MONEY</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="sppb-col-md-4">
																<div id="column-id-1515885034963" class="sppb-column" >
																	<div class="sppb-column-addons">
																		<div id="sppb-addon-1515885034981" class="clearfix" >
																			<div class="sppb-addon sppb-addon-animated-number sppb-text-center animation_number">
																				<div class="sppb-addon-content">
																					<div class="sppb-animated-number" data-digit="25" data-duration="2200">0</div>
																					<div class="sppb-animated-number-title">MEMBERS</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="sppb-col-md-2">
										<div id="column-id-1515885034957" class="sppb-column" >
											<div class="sppb-column-addons"></div>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection
