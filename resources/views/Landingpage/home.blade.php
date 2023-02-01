@extends('templates.master')
@section('contents')

    {{-- <body> --}}
<!-- Carousel -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/Podclass.png" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="img/Masterclass.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="img/Activerecall.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="img/Onthego.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
         <img src="img/Powermock.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="img/c1.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="img/c2.jpg" class="d-block w-100">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<!-- Carousel End -->

<!-- Facts -->
        <div class="container-facts">
           <div class="row">
               <div class="col">
                   <div class="counter yellow" data-aos="fade-up" data-aos-duration="100" data-aos-once="true">
                       <div class="counter-icon">
                           <i class="fa fa-bar-chart" aria-hidden="true"></i>
                       </div>
                       <span class="counter-valuepercent">91</span>
                       <h6>Passing Rate</h6>
                   </div>
               </div>
               <div class="col">
                   <div class="counter blue nr" data-aos="fade-up" data-aos-duration="300" data-aos-once="true">
                       <div class="counter-icon">
                           <i class="fa fa-flag" aria-hidden="true"></i>
                       </div>
                       <span class="counter-value">4</span>
                       <h6>Countries Represented</h6>
                   </div>
               </div>
               <div class="col">
                   <div class="counter blue" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">
                       <div class="counter-icon">
                           <i class="fa fa-lightbulb" aria-hidden="true"></i>
                       </div>
                       <span class="counter-valuepercent">70</span>
                       <h6>Specialty</h6>
                   </div>
               </div>
               <div class="col">
                   <div class="counter blue" data-aos="fade-up" data-aos-duration="700" data-aos-once="true">
                       <div class="counter-icon">
                           <i class="fa fa-briefcase" aria-hidden="true"></i>
                       </div>
                       <span class="counter-value">3.5</span>
                       <h6>Average Work Experience</h6>
                   </div>
               </div>
               <div class="col">
                   <div class="counter blue" data-aos="fade-up" data-aos-duration="900" data-aos-once="true">
                       <div class="counter-icon">
                           <i class="fa fa-users" aria-hidden="true"></i>
                       </div>
                       <span class="counter-value">32</span>
                       <h6>Average Age</h6>
                   </div>
               </div>
           </div>
        </div>
<!-- Facts End -->

<!-- Programs-->
            <section class="homenewsandannouncement">
                <div class="container-fluid" data-aos="fade-up" data-aos-duration="100" data-aos-once="true">
                    <h3 class="homenewsandannouncementheading">News And Announcements</h3>
    <!-- About-->
                <article id="popular-news">
                    <div id="featured">
                        <h2>FEATURED</h2>
                        <section class="popular-news-carousel">
                            <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
                              <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                              </ol>
                              <div class="carousel-inner">
                                <div class="carousel-item active">
                                  <img class="d-block w-100" src="img/f1.jpg" alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                     </div>
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="img/f2.jpg" alt="Second slide">
                                    <div class="carousel-caption d-none d-md-block">

                                     </div>
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="img/f3.jpg" alt="Third slide">
                                    <div class="carousel-caption d-none d-md-block">
                                     </div>
                                </div>
                              </div>
                              <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div>
                        </section>

                    </div>
                    <div id="latest">
                        <h2>LATEST</h2>
                        <section class="news">
                            <div class="news-container">
                                <img src="img/latest1.jpg">
                            </div>
                        </section>
                        <section class="news">
                            <div class="news-container">
                                <img src="img/latest2.jpg">
                            </div>
                        </section>
                    </div>
                    <div id="our-picks">
                        <h2>Ads</h2>
                        <section class="news">
                            <div class="news-container">
                                <img src="img/Ads1.jpg">
                            </div>
                        </section>
                        <section class="news">
                            <div class="news-container">
                                <img src="img/Ads2.jpg">
                            </div>
                        </section>
                    </div>

                    <div id="latest2">
                        <div class="container mx-auto my-12 flex flex-col gap-6 lg:flex-row">
                            <div class="flex flex-col gap-y-4 flex-1 text-center p-6 rounded-xl shadow-lg">
                        <h2>LATEST</h2>
                        <section class="news">
                            <div class="news-container">
                                <img src="img/latest1.jpg">

                            </div>
                        </section>
                        <section class="news">
                            <div class="news-container">
                                <img src="img/latest2.jpg">
                            </div>
                        </section>
                    </div>
                        </div>
                    </div>
                    <div id="our-picks2">
                        <div class="flex flex-col gap-y-4 flex-1 text-center p-6 rounded-xl shadow-lg">
                        <h2>Coming soon</h2>
                        <section class="news">
                            <div class="news-container">
                                <img src="img/Ads1.jpg">

                            </div>
                        </section>
                        <section class="news">
                            <div class="news-container">
                                <img src="img/Ads2.jpg">

                            </div>
                        </section>
                    </div>
                        </div>
                </article>
                </div>
            </section>
            <!----About section start---->
            <section class="AboutSection">
                <div class="container-fluid" data-aos="fade-up" data-aos-duration="400" data-aos-once="true">
                    <div class="container mx-auto my-12 flex flex-col gap-6 lg:flex-row">
			<img src="img/a2.jpg" class="homeimage">
			<div class="about-texthome">
				<h2>About The Program</h2>
				<h5>AMC <span>PODCLASS</span></h5>
				<p>PLE REAP AMC PodClass is the company's bridging program for the Australian Medical Council CAT MCQ (Step 1). It is designed to be the most:</p>
                <div class="col-sm-6">
                    <i class="fa fa-check text-primary me-2"></i>innovative,
                </div>
                <div class="col-sm-6">
                    <i class="fa fa-check text-primary me-2"></i>flexible,
                </div>
                <div class="col-sm-6">
                    <i class="fa fa-check text-primary me-2"></i>high-yielding, and
                </div>
                <div class="col-sm-6">
                    <i class="fa fa-check text-primary me-2"></i>affordable.
                </div><br>

                <p>It optimizes the use of evidence-based study techniques instead of long, dragging lectures, which is a thing of the past. Ergo, it is ideal for the working clinician who prefers to balance study, work, family, and leisure.</p>
            </div>
			</div>
		</div>
	</section>

    <!-- About end-->
    <section class="homepoas">
            <div class="curved">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,64L60,96C120,128,240,192,360,186.7C480,181,600,107,720,117.3C840,128,960,224,1080,240C1200,256,1320,192,1380,160L1440,128L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>
            <h3 class="homepoasheading">Program Overview and Study Guide</h3>
        </div>
        <div class="container-fluid" data-aos="fade-up" data-aos-duration="300" data-aos-once="true">
            <div class="container mx-auto my-12 flex flex-col gap-6 lg:flex-row">
                <div class="h_iframe">
                <div class="flex flex-col gap-y-4 flex-1 bg-gray-100 text-center p-6 rounded-xl shadow-lg">
                    <iframe class="ivideo" width="450" height="320" src="https://www.youtube.com/embed/fDbxPVn02VU" title="How my friend ranked 1st at Medical School - The Active Recall Framework" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                </div>
                <div class="h_iframe">
                <div class="flex flex-col gap-y-4 flex-1 bg-gray-100 text-center p-6 rounded-xl shadow-lg">
                    <iframe class="ivideo" width="450" height="320" src="https://www.youtube.com/embed/BlsPKqFdXlc" title="Video ads and welcome message" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                </div>
                <div class="h_iframe">
                <div class="flex flex-col gap-y-4 flex-1 bg-gray-100 text-center p-6 rounded-xl shadow-lg">
                    <iframe class="ivideo" width="450" height="320" src="https://www.youtube.com/embed/Khwv5zPsSxc" title="11 Ways To Study SMART & Study EFFECTIVELY - Do More in HALF the Time!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                </div>
            </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,128L40,133.3C80,139,160,149,240,165.3C320,181,400,203,480,218.7C560,235,640,245,720,229.3C800,213,880,171,960,165.3C1040,160,1120,192,1200,208C1280,224,1360,224,1400,224L1440,224L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
            </section>
<!-- Programs End-->

<!-- Team Start -->


<!-- Team End -->

<!-- Galery Slideshow -->
<section class="homegalery">


<input class="gallery__select" type="radio" name="gallery-select" id="0" checked="checked"/>
<input class="gallery__select" type="radio" name="gallery-select" id="1"/>
<input class="gallery__select" type="radio" name="gallery-select" id="2"/>
<input class="gallery__select" type="radio" name="gallery-select" id="3"/>
<input class="gallery__select" type="radio" name="gallery-select" id="4"/>
<input class="gallery__select" type="radio" name="gallery-select" id="5"/>
<input class="gallery__select" type="radio" name="gallery-select" id="6"/>
<input class="gallery__select" type="radio" name="gallery-select" id="7"/>
<input class="gallery__select" type="radio" name="gallery-select" id="8"/>
<input class="gallery__select" type="radio" name="gallery-select" id="9"/>
<input class="gallery__select" type="radio" name="gallery-select" id="10"/>
<input class="gallery__select" type="radio" name="gallery-select" id="11"/>
<input class="gallery__select" type="radio" name="gallery-select" id="12"/>
<input class="gallery__select" type="radio" name="gallery-select" id="13"/>
<input class="gallery__select" type="radio" name="gallery-select" id="14"/>
<input class="gallery__select" type="radio" name="gallery-select" id="15"/>
<input class="gallery__select" type="radio" name="gallery-select" id="16"/>
<input class="gallery__select" type="radio" name="gallery-select" id="17"/>
<input class="gallery__select" type="radio" name="gallery-select" id="18"/>

<div class="gallery">
  <div class="gallery__filler"></div>
  <div class="gallery__filler"></div>

  <label class="gallery__item" for="0">
 	<img src="img/g8.jpg" alt="Something random"/>
  </label>

  <label class="gallery__item" for="1"><img src="img/office1.jpg" alt="Something random"/></label>
  <label class="gallery__item" for="2"><img src="img/office2.jpg" alt="Something random"/></label>
  <label class="gallery__item" for="3"><img src="img/office3.jpg" alt="Something random"/></label>
  <label class="gallery__item" for="4"><img src="img/office4.jpg" alt="Something random"/></label>
  <label class="gallery__item" for="5"><img src="img/office5.jpg" alt="Something random"/></label>
  <label class="gallery__item" for="6"><img src="img/G1.jpg" alt="Something random"/></label>
  <label class="gallery__item" for="7"><img src="img/G2.jpg" alt="Something random"/></label>
  <label class="gallery__item" for="8"><img src="img/G3.jpg" alt="Something random"/></label>
  <label class="gallery__item" for="9"><img src="img/G3.jpg" alt="Something random"/></label>
  <label class="gallery__item" for="10"><img src="img/G5.jpg" alt="Something random"/></label>
  <label class="gallery__item" for="11"><img src="img/G6.jpg" alt="Something random"/></label>
  <label class="gallery__item" for="12"><img src="img/G7.jpg" alt="Something random"/></label>
  <label class="gallery__item" for="13"><img src="img/g8.jpg" alt="Something random"/></label>
  <label class="gallery__item" for="14"><img src="img/g9.jpg" alt="Something random"/></label>
  <label class="gallery__item" for="15"><img src="img/g10.jpg" alt="Something random"/></label>
  <label class="gallery__item" for="16"><img src="img/g11.jpg" alt="Something random"/></label>
  <label class="gallery__item" for="17"><img src="img/g12.jpg" alt="Something random"/></label>
  <label class="gallery__item" for="18"><img src="img/g13.jpg" alt="Something random"/></label>
</div>
</section>

<!-- Galery Slideshow end -->

{{-- </body> --}}

{{-- </html> --}}
@endsection
