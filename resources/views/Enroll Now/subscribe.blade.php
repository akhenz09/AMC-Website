@extends('templates.master')
@section('contents')

<!-- Page Header Start -->

<!-- Page Header Start -->
<section class="subscarousel">
<div class="container w-60">
<div id="carouselExampleIndicators" class="carousel slide" style="padding-bottom: 40px" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <center><img class="imgtestimony d-block" src="img/test4.png" alt="First slide"></center>
      </div>
      <div class="carousel-item">
        <center><img class="imgtestimony d-block" src="img/test7.jpg" alt="slide"></center>
      </div>
      <div class="carousel-item">
        <center><img class="imgtestimony d-block" src="img/test5.png" alt="slide"></center>
      </div>
      <div class="carousel-item">
        <center><img class="imgtestimony d-block" src="img/test8.jpg" alt="slide"></center>
      </div>
      <div class="carousel-item">
        <center><img class="imgtestimony d-block" src="img/test6.png" alt="slide"></center>
      </div>
      <div class="carousel-item">
        <center><img class="imgtestimony d-block" src="img/test9.jpg" alt="slide"></center>
      </div>
      <div class="carousel-item">
        <center><img class="imgtestimony d-block" src="img/test10.jpg" alt="slide"></center>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</section>

<!-- Page Header Start -->
<section class="subscarouselmobile">
    <div class="container w-60">
    <div id="carouselExampleIndicators" class="carousel slide" style="padding-bottom: 40px" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
              <center><img class="d-block" src="img/test4.png" alt="First slide"></center>
            </div>
            <div class="carousel-item">
              <center><img class="d-block" src="img/test7.jpg" alt="Second slide"></center>
            </div>
            <div class="carousel-item">
              <center><img class="d-block" src="img/test5.png" alt="Third slide"></center>
            </div>
            <div class="carousel-item">
              <center><img class="d-block" src="img/test8.jpg" alt="Third slide"></center>
            </div>
            <div class="carousel-item">
              <center><img class="d-block" src="img/test6.png" alt="Third slide"></center>
            </div>
            <div class="carousel-item">
              <center><img class="d-block" src="img/test9.jpg" alt="Third slide"></center>
            </div>
            <div class="carousel-item">
              <center><img class="d-block" src="img/test10.jpg" alt="Third slide"></center>
            </div>
          </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    </section>

    <!-- Page Header End -->

<!-- Page Header End -->

<!-- Subscription Darwin -->

<center><div class="demo">
    <div class="container">
        <div class="row">
            <div class="col-md col-sm paymenta">
                <div class="pricingTable">
                    <div class="pricingTable-header">
                        <i class="fa fa-microphone"></i>
                        <div class="price-value"> PODCLASS <span class="month">All-inclusive</span><span class="month">bridging program</span> </div>
                    </div>
                    <!--<h3 class="heading">₱42,500</h3>
                    <h3 class="heading">(AUD 1,100.00)</h3>-->
                    <div class="pricingTable-signup" data-toggle="collapse" data-target="#PodclassInclusion">
                        <a class="enroll">Bundle Inclusion</a>
                        <div id="PodclassInclusion" class="collapse"><br>
                            <div class="pricing-content">
                                <ul>
                                    <li>Lesson(e-Flipbook)<br></li>
                                        <li><b>>150</b> Audio Podcasts(e-flipbook)<br></li>
                                            <li><b>>1500</b> Anki Flashcards<br></li>
                                                <li>Recorded lectures(e-flipbook)<br></li>
                                                    <li> Live Lectures (The Masterclass)<br></li>
                                                        <li>Assessments/Mock Exams<br></li>
                                                                    <li> E-Library of References and Recalls<br></li>
                                                                        <li> CV, Registration and Visa Coaching<br></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="pricingTable-signup" data-toggle="collapse" data-target="#BatchPodclass">
                        <a class="enroll">Enroll now</a>
                        <div id="BatchPodclass" class="collapse"><br>
                  <div class="pricingTable-signup">
                        <!--<a href="payment?amount=44200&product=PodclassBatchPerth" class="enroll">Batch Perth</a>-->
                        <a href="https://paymongo.page/l/batchperth" class="enroll">Batch Perth (₱42,500)</a>
                    </div>
                    <div class="pricingTable-signup">
                        <!--<a href="payment?amount=44200&product=PodclassBatchAdelaide" class="enroll">Batch Adelaide</a>-->
                        <a href="https://paymongo.page/l/batchhobart" class="enroll">Batch Hobart (₱50,000)</a>
                    </div>
                   <div class="pricingTable-signup">
                        <!--<a href="payment?amount=13000&product=Installment" class="enroll">In-house Installment</a>-->
                        <a href="https://paymongo.page/l/podclassinstallment" class="enroll">In-house Installment</a>
                    </div>
                </div>
            </div>
                </div>
            </div>


            <div class="col-md col-sm paymentb">
                <div class="pricingTable orange">
                    <div class="pricingTable-header">
                        <i class="fa fa-brain"></i>
                        <div class="price-value"> Active Recall <span class="month">Evidence Based Study Techniques</span><span class="month">for Knowledge Reinforcement</span></div>
                    </div>
                    <!--<h3 class="heading">₱11,999</h3>
                    <h3 class="heading">(AUD 310.00)</h3>-->
                    <div class="pricingTable-signup" data-toggle="collapse" data-target="#ActiveInclusion">
                        <a class="enroll">Bundle Inclusion</a>
                        <div id="ActiveInclusion" class="collapse"><br>
                            <div class="pricing-content">
                                <ul>
                                    <li><b>>150</b> Audio Podcasts</li>
                                    <li><b>>150</b> MCQ Video Podcasts</li>
                                    <li><b>>1500</b> ANKI-Based Flashcard</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="pricingTable-signup" data-toggle="collapse" data-target="#ActiveBatchPodclass">
                        <a class="enroll">Not available</a>
                        <div id="ActiveBatchPodclass" class="collapse"><br>
                    <div class="pricingTable-signup">
                        <!--<a href="payment?amount=12479&product=Active Recall">Active Recall</a>-->
                        <!--<a href="https://paymongo.page/l/activerecall">Program Fee (₱11,999)</a>-->
                    </div>
                </div>
            </div>
                </div>
            </div>

            <div class="col-md col-sm paymentc">
                <div class="pricingTable blue">
                    <div class="pricingTable-header">
                        <i class="fa fa-walking"></i>
                        <div class="price-value"> On the Go <span class="month">Pocket Companion</span><span class="month">to the most common stems</span> </div>
                    </div>
                    <!--<h3 class="heading">₱9,999</h3>
                    <h3 class="heading">(AUD 260.00)</h3>-->
                    <div class="pricingTable-signup" data-toggle="collapse" data-target="#OTGInclusion">
                        <a class="enroll">Bundle Inclusion</a>
                        <div id="OTGInclusion" class="collapse"><br>
                            <div class="pricing-content">
                                <ul>
                                    <li><b>>150</b> Audio Podcasts</li>
                                    <li><b>>1500 </b>Anki Flashcards</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="pricingTable-signup" data-toggle="collapse" data-target="#BatchOTG">
                        <a class="enroll">Enroll now</a>
                        <div id="BatchOTG" class="collapse"><br>
                    <div class="pricingTable-signup">
                        <!--<a href="payment?amount=10399&product=On the Go">On the Go</a>-->
                        <a href="https://paymongo.page/l/onthego">Program Fee (₱10,000)</a>
                    </div>
                </div>
            </div>
                </div>
            </div>


            <div class="col-md col-sm paymentd">
                <div class="pricingTable green">
                    <div class="pricingTable-header">
                        <i class="fa fa-book-open"></i>
                        <div class="price-value"> MasterClass <span class="month">Intensive</span><span class="month"> MCQ-heavy crash course</span> </div>
                    </div>
                    <!--<h3 class="heading">₱9,999</h3>
                    <h3 class="heading">(AUD 260.00)</h3>-->
                    <div class="pricingTable-signup" data-toggle="collapse" data-target="#MasterClassInclusion">
                        <a class="enroll">Bundle Inclusion</a>
                        <div id="MasterClassInclusion" class="collapse"><br>
                            <div class="pricing-content">
                                <ul>
                                    <li>Live Lectures</li>
                                    <li>(MCQ Recalls Heavy)</li>
                                    <li>Lecture Slides in PDF</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="pricingTable-signup" data-toggle="collapse" data-target="#BatchMasterClass">
                        <a class="enroll">Enroll now</a>
                        <div id="BatchMasterClass" class="collapse"><br>
                    <div class="pricingTable-signup">
                        <!--<a href="payment?amount=10399&product=Masterclass January 3-5">January 3 - 5</a>-->
                        <a href="https://paymongo.page/l/masterclass">Program Fee (₱10,000)</a>
                    </div>
                </div>
            </div>
                </div>
            </div>

            <div class="col-md col-sm paymente">
              <div class="pricingTable red">
                  <div class="pricingTable-header">
                    <i class="fa-brands fa-apple"></i>
                      <div class="price-value"> Power Mock <span class="month">Your hard-core </span><span class="month"> exam partner</span> </div>
                  </div>
                  <!--<h3 class="heading">₱9,999</h3>
                  <h3 class="heading">(AUD 260.00)</h3>-->
                  <div class="pricingTable-signup" data-toggle="collapse" data-target="#PowerMockInclusion">
                      <a class="enroll">Bundle Inclusion</a>
                      <div id="PowerMockInclusion" class="collapse"><br>
                          <div class="pricing-content">
                              <ul>
                                  <li>1 Month Phased Mock Exam With Analytics</li>
                                  <li>(Easy, Average, Difficult, Expert)</li>
                                  <li>3 Months Subsequent Access to <b>>600</b> Questions with Commentaries</li>

                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="pricingTable-signup" data-toggle="collapse" data-target="#BatchPowerMock">
                      <a class="enroll">Enroll now</a>
                      <div id="BatchPowerMock" class="collapse"><br>
                  <div class="pricingTable-signup">
                      <!--<a href="payment?amount=10399&product=Masterclass January 3-5">January 3 - 5</a>-->
                      <a href="https://paymongo.page/l/powermock">Program Fee (₱10,000)</a>
                  </div>
              </div>
          </div>
              </div>
          </div></center>


        </div>
    </div>
</div>

<!-- Subscription darwin end -->
@endsection
