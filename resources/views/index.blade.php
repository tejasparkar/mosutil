@extends('layouts.app')
@section('content')
<section class="banner-area relative">
    <div class="overlay overlay-bg"></div>				
    <div class="container">
        <div class="row fullscreen align-items-center justify-content-between" id="enquire">
            <div class="col-lg-6 col-md-6 banner-left">
                <h6 class="text-white">Start own business with India's Leading B2B Travel Portal</h6>
                <h1 class="text-white">Become a <span>Travel Agent</span></h1>
                <p class="text-white">
                    what are you waiting for ! Just fill our form and get chance to connect with our B2B Travel portal Become a Travel Agent and get more commission.
                </p>
                <a href="contact.html" class="primary-btn text-uppercase">Enquire Now!</a>
            </div>
            <div class="col-lg-4 col-md-6 banner-right">
                <div class="tab-content form-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="flight" role="tabpanel" aria-labelledby="flight-tab">
                      <div class="clearfix"></div>
                      <div class="form-title span-style">
                          <h2>Enquire <span>Now!</span></h2>
                      </div>
                      <form action="https://script.google.com/macros/s/AKfycbwzKarlQZ9NhhgbQP-8YSNMrlUWeSGbUmWgAbbA-AAVYkhOSgwn/exec" method="post" class="form-wrap gform"  onsubmit="myFunction()"  data-mail="b2bmultifly@gmail.com">
                          <input type="text" id="name" name="name" placeholder="Your Name" class="form-control" value="" required />
                          <input type="email" id="email" name="email" placeholder="youremailId@submit.com" class="form-control" value="" required />
                          <input type="tel" id="tel" name="tel" placeholder="Your Number*" class="form-control" maxlength="10" minlength="10" value="" required />
                          <textarea class="form-control" placeholder="Your Message" id="message" name="message" required ></textarea>
                          <button type="submit" class="primary-btn btn-padding-bottom"  id="submit">Submit</button>
                    </form>
                  </div>
                </div>

            </div>
        </div>
    </div>					
</section>


<section class="home-about-area">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-end">
            <div class="col-lg-6 col-md-12 home-about-left span-style">
                <h1>About <span>Us</span></h1>
                <p>
                    The B2B Multify is a pioneer in B2B2C ecommerce solution in India. An unmatched business of opportunity for Businessman, Retailers, Housewives, Students, Professionals, Insurance & Real estate agents, Cyber Cafes. Business-In-A-Box offers B2C eCommerce Portal, Training and Collaterals. We are popular B2B Travel Booking, B2B Travel Booking Portal Providing White label, XML web services with the large number of availability.
                </p>
            </div>
            <div class="col-lg-6 col-md-12 home-about-right no-padding">
                <img class="img-fluid" src="img/main/1560.jpg" alt="">
            </div>
        </div>
    </div>	
</section>
<section class="price-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center span-style">
                    <h1 class="mb-10">Offered <span>Services</span></h1>
                    <p>
                        We Provides Travel API Integration, White Labelled Solution etc. and Popular B2B Travel Solution Portal in India.
                    </p>
                </div>
            </div>
        </div>						
        <div class="row">
            <div class="col-lg-4 img-center">
                <div class="single-price agent-services-hover">
                    <img class="img-services" src="img/main/become-flight-agent.png" alt="Become Travel Agent">
                    <h4>Become Travel Agent</h4>
                    <p>
                        When you looking for business Become Travel Ticket Agent you just need a computer, mobile & internet connection. Our Agency will give you real good deals on flight tickets and you can earn good commission from them.
                    </p>
                    <a href="become-flight-ticket-booking-agent.html" class="genric-btn danger circle arrow">Read More</a>
                </div>
            </div>

            <div class="col-lg-4 img-center">
                <div class="single-price agent-services-hover">
                    <img class="img-services" src="img/main/travel-api-integration.png" alt="Flight Booking API">
                    <h4>Travel Booking API</h4>
                    <p>
                        API full form is Application Programming Interface, which is a software intermediary allows two applications to talk to each other. Each time you use an app for booking travel ticket online then you using an Travel API.
                    </p>
                    <a href="flight-booking-api-integration.html" class="genric-btn danger circle arrow">Read More</a>
                </div>
            </div>

            <div class="col-lg-4 img-center">
                <div class="single-price agent-services-hover">
                    <img class="img-services" src="img/main/white-labelled-solution.png" alt="White Labelled Solution">
                    <h4>White Labelled Solution</h4>
                    <p>
                        Agents who use the B2B Multifly White Labelled Solution can sell flights, & holidays simply and quickly. They can also manage all their financial transactions online, and smooth running of their business.
                    </p>
                    <a href="white-labelled-solution.html" class="genric-btn danger circle arrow">Read More</a>
                </div>
            </div>												
        </div>
    </div>	
</section>
<section class="home-about-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center span-style">
                    <h1 class="mb-10">Our <span>USP's</span></h1>
                    <p>Our Achievements which make us different than anothers</p>
                </div> 
            </div>
        </div>
        <div class="row align-items-center text-center justify-content-end">
            <div class="col-lg-4 col-md-12 span-style">
                <img class="img-usp" src="img/usp/600-plus-api-integration.png" alt="600 plus api integration">
                <h2>600 + <span>API's</span></h2>
                <p>
                    600 + API Customers Worldwide
                    <br>Instant Commission Payout
                    <br>Secure & Safe API
                </p>
            </div>
            <div class="col-lg-4 col-md-12 span-style">
                <img class="img-usp" src="img/usp/40000-plus-travel-agents.png" alt="40000 plus travel agents">
                <h2>40000 + <span>Agents</span></h2>
                <p>
                    High Way of Commission Income
                    <br>Best Price Guaranteed
                    <br>Low Investment
                </p>
            </div>
            <div class="col-lg-4 col-md-12 span-style">
                <img class="img-usp" src="img/usp/200-plus-employees.png" alt="200 plus employees">
                <h2>200 + <span>Employees</span></h2>
                <p>
                    Dedicated team of Employees
                    <br>Corporate Offices Globally
                    <br>50 + Engineers
                </p>
            </div>

            <div class="clearfix"></div><br>

            <div class="col-lg-4 col-md-12 span-style">
                <img class="img-usp" src="img/usp/instant-commission.png" alt="instant commission">
                <h2>Instant <span>Commission</span></h2>
                <p>
                    Instant Commission Payouts
                    <br>Best Price Guaranteed
                    <br>High Income
                </p>
            </div>
            <div class="col-lg-4 col-md-12 span-style">
                <img class="img-usp" src="img/usp/24-by-7-support.png" alt="24 by 7 support">
                <h2>24*7 <span>Support</span></h2>
                <p>
                    24*7 Customer Care Support
                    <br>24*7 Call Center Support
                    <br>24*7 IT Support
                </p>
            </div>
            <div class="col-lg-4 col-md-12 span-style">
                <img class="img-usp" src="img/usp/20-plus-offices-globally.png" alt="20 plus offices globally">
                <h2>Client <span>Satisfation</span></h2>
                <p>
                    Instant Refunds Facillities
                    <br>On Hold Bookings
                    <br>Cheap Fares
                </p>
            </div>
        </div>
    </div>	
</section>
<section class="testimonial-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center span-style">
                    <h1 class="mb-10">Testimonial from <span>Our Clients</span></h1>
                    <p>What clients says about us</p>
                </div> 
            </div>
        </div>
        <div class="row">
            <div class="active-testimonial">
                <div class="single-testimonial item">
                    <div class="desc">
                        <h4>Sagar Chavan</h4>
                        <p>
                            <b>Best Experience Ever ….</b> Once you register as Travel Booking Agent with B2BMultifly Travel Portal everything else will be taken care of by them. Very Happy and Satisfied. All the provided information is correct and the prices also affordable. They always prefer client comfort first then after all. I positively appreciate the B2BMultifly is best B2B Travel Platform to join become an Agent.
                        </p>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>				
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 footer-social">
                            <a target="_blank" href="https://www.facebook.com/people/Sagar-Chavan/100026979785943"><i class="fa fa-facebook"></i></a>
                            <a target="_blank" href="https://twitter.com/TweetsSagar"><i class="fa fa-twitter"></i></a>
                            <a target="_blank" href="https://in.pinterest.com/sagarchavan2k18/"><i class="fa fa-pinterest"></i></a>
                            <a target="_blank" href="https://plus.google.com/u/1/115214045963170266625"><i class="fa fa-google-plus"></i></a>
                            <a target="_blank" href="https://www.youtube.com/channel/UC5O2rovNS4gwb7DVI69UzEw/"><i class="fa fa-youtube"></i></a>
                        </div>	
                    </div>
                </div>

                <div class="single-testimonial item">
                    <div class="desc">
                        <h4>Sanvee Rane</h4>
                        <p>
                            <b>Feel Nice as Agent</b> - When I decide to start my career become a travel agent then I didn't have experience in this field money crisis is another problem.  But my decision to join B2B Multifly is making positive changes in my life. Become Travel Agent is the best way to make money. The admin panel design for Travel Agents is also easy to use. It's the better opportunity for everyone to work as a Travel agent.
                        </p>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>				
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 footer-social">
                            <a target="_blank" href="https://www.facebook.com/sanvee.rane.3"><i class="fa fa-facebook"></i></a>
                            <a target="_blank" href="https://twitter.com/SanveeRane"><i class="fa fa-twitter"></i></a>
                            <a target="_blank" href="https://in.pinterest.com/SanveeRane/"><i class="fa fa-pinterest"></i></a>
                            <a target="_blank" href="https://plus.google.com/117009614690864787952"><i class="fa fa-google-plus"></i></a>
                            <a target="_blank" href="https://www.youtube.com/channel/UC7AAi5Ow1QwfMmHkcW-xjpw"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                </div>

                <div class="single-testimonial item">
                    <div class="desc">
                        <h4>Sandesh Raut</h4>
                        <p>
                            When we talk about work with B2BMultifly then it is a really best opportunity I grade it Best. because they don't take more time to resolve the issues. When you looking for High-Income opportunity then B2BMultifly is best forever.
                        </p>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>				
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 footer-social">
                            <a target="_blank" href="https://www.facebook.com/sandesh.raut.94849"><i class="fa fa-facebook"></i></a>
                            <a target="_blank" href="https://twitter.com/SandeshRauts"><i class="fa fa-twitter"></i></a>
                            <a target="_blank" href="https://in.pinterest.com/DigitalSandeshRaut/"><i class="fa fa-pinterest"></i></a>
                            <a target="_blank" href="https://plus.google.com/113483542432387581314"><i class="fa fa-google-plus"></i></a>
                            <a target="_blank" href="https://www.youtube.com/channel/UCnvtADSa95zd1I6Pff2iYnA"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                </div>

                <div class="single-testimonial item">
                    <div class="desc">
                       
                        <h4>Priti Sawant</h4>
                        <p>
                            Its Really good experience to work with B2BMultifly. I feel really friendly with there customer support executives. They Treat their customers in the friendlier way and also help to resolve the issues.
                        </p>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>				
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 footer-social">
                            <a target="_blank" href="https://www.facebook.com/priti.sawant.3323"><i class="fa fa-facebook"></i></a>
                            <a target="_blank" href="https://twitter.com/pritiswant"><i class="fa fa-twitter"></i></a>
                            <a target="_blank" href="https://in.pinterest.com/pritisawantid/"><i class="fa fa-pinterest"></i></a>
                            <a target="_blank" href="https://plus.google.com/111269528480627548571"><i class="fa fa-google-plus"></i></a>
                            <a target="_blank" href="https://www.youtube.com/channel/UCxglVVXCBEfJJdehdqTiKog"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>



@endsection