@extends('global.main')

@section('title', 'Form')

@section('headercss')
	<link rel="stylesheet" type="text/css" href="{{ mix('css/global/form.css') }}">
@endsection

@section('headerjs')
<!--Empty for now-->
@endsection

@section('maincontent')
	<section id="form-wrp">
        <form id="form" action="{{ route('form.submit') }}" method="POST" enctype="multipart/form-data">
		 {{ csrf_field() }}
            <div class="form-header">
                <div id="unleash-logo">
                    <a href="/">
                        <h1>
                            <img id="full-logo" src="{{ URL::asset('gfx/unleash-logo.png') }}" alt="Unleash logo" title="UNLEASH">
                        </h1>
                    </a>
                </div>
                <div class="form-title">
                    <h2>Alpha Application Form for Startup</h2>
                </div>
            </div>
            <div class="form-body">
                <div class=" sec event-pick">
                    <div class="deadline">
                        <h4>Please note submissions are due <strong>by September 1<sup>th</sup>.</strong></h4>
                    </div>
                    <div class="event-details">
                        <div>
                            <label for="event-name">Event Name:</label>
                            <input type="text" name="event-name" id="event-name" value="Unleash London" readonly>
                        </div>
                        <div>
                            <label for="event-date">Dates:</label>
                            <input type="text" name="event-date" id="event-date" value="20-21 March, 2018" readonly>
                        </div>
                        <div>
                            <label for="event-venue">Venue:</label>
                            <input type="text" name="event-venue" id="event-venue" value="ExCeL London" readonly>
                        </div>
                        <div>
                            <label for="event-location">Location:</label>
                            <input type="text" name="event-location" id="event-location" value="London, England" readonly>
                        </div>
                        <div>
                            <label for="producer">Producer:</label>
                            <input type="text" name="producer" id="producer" readonly>
                        </div>
                        <div>
                            <label for="office-mobile">Office / Mobile:</label>
                            <input type="text" name="office-mobile" id="office-mobile" value="+36 30 326 1076" readonly>
                        </div>
                        <div>
                            <label for="email">E-mail:</label>
                            <input type="email" name="email" id="email" value="" readonly>
                        </div>
                    </div>
                </div>
                <div class="sec publicy-contact">
                    <div class="publicy">
                        <div class="title">
                            <h4>Publicy text</h4>
                        </div>
                        <div class="publicy-details">
                            <div>
                                <label for="CEO">Name of CEO/Founder:</label>
                                <input type="text" name="CEO" id="CEO">
                            </div>
                            <div>
                                <label for="job-title">Official Job Title:</label>
                                <input type="text" name="job-title" id="job-title">
                            </div>
                            <div>
                                <label for="company">Company:</label>
                                <input type="text" name="company" id="company">
                            </div>
                            <div>
                                <label for="country">Country:</label>
                                <input type="text" name="country" id="country">
                            </div>
                            <div>
                                <label for="social-links">Social Links:</label>
                                <input type="text" name="social-links" id="social-links">
                            </div>
                            <div>
                                <label for="company-website">Company Website:</label>
                                <input type="text" name="company-website" id="company-website">
                            </div>
                        </div>
                    </div>
                    <div class="contact">
                        <div class="title">
                            <h4>Contact details</h4>
                        </div>
                        <div class="contact-details">
                            <div>
                                <label for="mobile">Mobile No.:</label>
                                <input type="text" name="mobile" id="mobile">
                            </div>
                            <div>
                                <label for="direct-tel">Direct Phone:</label>
                                <input type="text" name="direct-tel" id="direct-tel">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sec picture">
                    <div class="title">
                        <h4>Select a picture to upload</h4>
                    </div>
                    <input type="file" name="fileupload" id="fileupload">
                </div>
                <div class="sec company">
                    <div class="title">
                        <h4>Company details</h4>
                    </div>
                    <div class="company-details">
                        <div>
                            <label for="founded">Date company founded/launched:</label>
                            <input type="text" name="founded" id="founded">
                        </div>
                        <div>
                            <label for="offices">How many offices do you have and where?</label>
                            <input type="text" name="offices" id="offices">
                        </div>
                        <div>
                            <label for="staff">How many staff?</label>
                            <input type="text" name="staff" id="staff">
                        </div>
                        <div>
                            <label for="keymembers">Who are the founders/key team members?</label>
                            <input type="text" name="keymembers" id="keymembers">
                        </div>
                        <div>
                            <label for="investment">Have you received any capital/investment funding, how much and from where?</label>
                            <input type="text" name="investment" id="investment">
                        </div>
                        <div>
                            <label for="investment-name">Name any capital/investment funds you would like to meet?</label>
                            <input type="text" name="investment-name" id="investment-name">
                        </div>
                        <div>
                            <label for="clients">How many clients do you have (name some key customers)?</label>
                            <input type="text" name="clients" id="clients">
                        </div>
                        <div>
                            <label for="industry-sector">Which industry sectors are you targeting?</label>
                            <input type="text" name="industry-sector" id="industry-sector">
                        </div>
                        <div>
                            <label for="comp-size">What company size are you targeting (ie. below 1K / above
                            10,000 employees)?</label>
                            <input type="text" name="comp-size" id="comp-size">
                        </div>
                        <div id="text-area">
                            <label for="comp-describe">Describe in 150 words your company, its product and its proposition.</label>
                            <textarea name="comp-describe" id="comp-describe" maxlength="150"></textarea>
                        </div>
                        
                    </div>
                </div>
                <div class="sec product">
                    <div class="title">
                        <h4>About your product</h4>
                    </div>
                    <div class="product-details">
                        <div>
                            <label for="unique">What makes your product unique?</label>
                            <input type="text" name="unique" id="unique">
                        </div>
                        <div>
                            <label for="HR-int">Why should HR take an interest in your product or service?</label>
                            <input type="text" name="HR-int" id="HR-int">
                        </div>
                        <div>
                            <label for="function">For which function (s) within HR is your product designed?</label>
                            <input type="text" name="function" id="function">
                        </div>
                        <div>
                            <label for="partners">Do you have any partners?</label>
                            <input type="text" name="partners" id="partners">
                        </div>
                        <div>
                            <label for="desire-partners">List any companies you would like to partner with (vendor companies)?
                            </label>
                            <input type="text" name="desire-partners" id="desire-partners">
                        </div>
                        <div>
                            <label for="targeting-partners">Provide a sample list of companies/prospects you are targeting:</label>
                            <input type="text" name="targeting-partners" id="targeting-partners">
                        </div>
                        <div>
                            <label for="competitors">Who are your main competitors?</label>
                            <input type="text" name="competitors" id="competitors">
                        </div>
                        <div>
                            <label for="rec-competitors">Please recommend other start-ups for the competition.</label>
                            <input type="text" name="rec-competitors" id="rec-competitors">
                        </div>
                    </div>
                </div>
            </div>
			<button class="blue-btn">Submit</button>
        </form>   
    </section>
@endsection

@section('footerscripts')

<script src="https://use.typekit.net/oip3jmq.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
@endsection
