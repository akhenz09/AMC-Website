@extends('templates.master')
@section('contents')

<!-- Page Header Start -->
<!--div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/b1.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="img/b2.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="img/b3.jpg" class="d-block w-100">
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
  </-div>-->

<!-- Page Header End -->

<!-- Feature -->
<!-- Feature end -->


<section class="Subscription-Program">

        <h3 class="ProgramsHeading">Programs</h3>
        <div class="container mx-auto my-12 flex flex-col gap-6 lg:flex-row">
            <div class="flex flex-col gap-y-4 flex-1 bg-gray-100 text-center p-6 rounded-xl shadow-lg">
                <img class="img-fluid progimg" src="img/Podclass.png" alt="" loading="lazy">
                <p class="progsubtitle">All-inclusive bridging program</p>
                <h2 class="text-center text-2xl font-bold">Podclass</h2>
                <button type="button" class="btn btn-info bg-blue-500 text-white rounded-xl" data-toggle="collapse" data-target="#PodclassInclusion">Bundle Inclusion</button>
                <div id="PodclassInclusion" class="collapse">
                    Lesson(e-Flipbook)<br>
                    <b>>150</b> Audio Podcasts(e-flipbook)<br>
                    <b>>1500</b> Anki Flashcards<br>
                    Recorded lectures(e-flipbook)<br>
                    Live Lectures (The Masterclass)<br>
                    Assessments/Mock Exams<br>
                    E-Library of References and Recalls<br>
                    CV, Registration and Visa Coaching<br>
                </div>
                <button type="button" class="btn btn-info bg-blue-500 text-white rounded-xl" data-toggle="collapse" data-target="#Podclass">Enroll now</button>
                <div id="Podclass" class="collapse"><br>
                    <!--<a href="payment?amount=44200&product=PodclassBatchPerth" class="text-center p-2 bg-blue-500 text-white rounded-xl transition duration-300 ease-in-out hover:bg-blue-600 hover:no-underline">Batch Perth (₱42,500)</a><br><br>
                    <a href="payment?amount=44200&product=PodclassBatchAdelaide" class="text-center p-2 bg-blue-500 text-white rounded-xl transition duration-300 ease-in-out hover:bg-blue-600 hover:no-underline">Batch Adelaide (₱42,500)</a><br><br>
                    <a href="payment?amount=13000&product=In-houseInstallment" class="text-center p-2 bg-blue-500 text-white rounded-xl transition duration-300 ease-in-out hover:bg-blue-600 hover:no-underline">In-house Installment (₱12,500)</a><br><br>-->
                    <a href="https://paymongo.page/l/batchperth" class="text-center p-2 bg-blue-500 text-white rounded-xl transition duration-300 ease-in-out hover:bg-blue-600 hover:no-underline">Batch Perth (₱42,500)</a><br><br>
                    <a href="https://paymongo.page/l/batchhobart" class="text-center p-2 bg-blue-500 text-white rounded-xl transition duration-300 ease-in-out hover:bg-blue-600 hover:no-underline">Batch Hobart (₱50,000)</a><br><br>
                    <a href="https://paymongo.page/l/podclassinstallment" class="text-center p-2 bg-blue-500 text-white rounded-xl transition duration-300 ease-in-out hover:bg-blue-600 hover:no-underline">In-house Installment</a><br><br>
                </div>

            </div>

            <div class="flex flex-col gap-y-4 flex-1 bg-gray-100 text-center p-6 rounded-xl shadow-lg">
                <img class="img-fluid progimg" src="img/Masterclass.jpg" alt="" loading="lazy">
                <p class="progsubtitle">Intensive MCQ-heavy crash course</p>
                <h2 class="text-center text-2xl font-bold">MasterClass</h2>
                <button type="button" class="btn btn-info bg-blue-500 text-white rounded-xl" data-toggle="collapse" data-target="#MasterClass">Bundle Inclusion</button>
                <div id="MasterClass" class="collapse">
                    Recorded/Live Lectures (MCQ Recalls Heavy)<br>
                    Lecture Slides in PDF<br>

                </div>
                <button type="button" class="btn btn-info bg-blue-500 text-white rounded-xl" data-toggle="collapse" data-target="#Masterclass">Enroll now</button>
                <div id="Masterclass" class="collapse"><br>
                    <!--<a href="payment?amount=10399&product=Masterclass January 3-5" class="text-center p-2 bg-blue-500 text-white rounded-xl transition duration-300 ease-in-out hover:bg-blue-600 hover:no-underline">January 3 - 5 (₱9,999)</a><br><br>-->
                    <a href="https://paymongo.page/l/masterclass" class="text-center p-2 bg-blue-500 text-white rounded-xl transition duration-300 ease-in-out hover:bg-blue-600 hover:no-underline">Program Fee (₱10,000)</a><br><br>
                </div>
            </div>
            <div class="flex flex-col gap-y-4 flex-1 bg-gray-100 text-center p-6 rounded-xl shadow-lg">
                <img class="img-fluid progimg" src="img/Activerecall.jpg" alt="" loading="lazy">
                <p class="progsubtitle">Evidence Based Study Techniques for Knowledge Reinforcement</p>
                <h2 class="text-center text-2xl font-bold">Active Recall</h2>
                <button type="button" class="btn btn-info bg-blue-500 text-white rounded-xl" data-toggle="collapse" data-target="#ActiveRecall">Not available</button>
                <!--<div id="ActiveRecall" class="collapse">
                    >150 Audio Podcasts<br>
                    >150 MCQ Video Podcasts<br>
                    >1500  ANKI-Based Flashcard<br>
                </div>-->
                <button type="button" class="btn btn-info bg-blue-500 text-white rounded-xl" data-toggle="collapse" data-target="#activerecall">Not available</button>
                <div id="activerecall" class="collapse"><br>
                    <!--<a href="payment?amount=12479&product=Active Recall" class="text-center p-2 bg-blue-500 text-white rounded-xl transition duration-300 ease-in-out hover:bg-blue-600 hover:no-underline">Active Recall (₱11,999) </a><br><br>
                    <a href="https://paymongo.page/l/activerecall" class="text-center p-2 bg-blue-500 text-white rounded-xl transition duration-300 ease-in-out hover:bg-blue-600 hover:no-underline">Program Fee (11,999) </a><br><br>-->
                </div></div>
        </div>
    <div class="container mx-auto my-12 flex flex-col gap-6 lg:flex-row">
        <div class="flex flex-col gap-y-4 flex-1 bg-gray-100 text-center p-6 rounded-xl shadow-lg">
            <img class="img-fluid progimg" src="img/Onthego.jpg" alt="" loading="lazy">
            <p class="progsubtitle">Pocket Companion to the most common stems</p>
            <h2 class="text-center text-2xl font-bold">On the Go</h2>
            <button type="button" class="btn btn-info bg-blue-500 text-white rounded-xl" data-toggle="collapse" data-target="#OntheGo">Bundle Inclusion</button>
                <div id="OntheGo" class="collapse">
                    <b>>150</b> Audio Podcasts<br>
                 <b>>1500 </b> Anki Flashcards<br>
                </div>
                <button type="button" class="btn btn-info bg-blue-500 text-white rounded-xl" data-toggle="collapse" data-target="#OTG">Enroll now</button>
                <div id="OTG" class="collapse"><br>
                    <!--<a href="payment?amount=10399&product=On the Go" class="text-center p-2 bg-blue-500 text-white rounded-xl transition duration-300 ease-in-out hover:bg-blue-600 hover:no-underline">On the Go (₱9,999) </a><br><br>-->
                    <a href="https://paymongo.page/l/onthego" class="text-center p-2 bg-blue-500 text-white rounded-xl transition duration-300 ease-in-out hover:bg-blue-600 hover:no-underline">Program Fee (₱10,000) </a><br><br>
                </div>
        </div>
        <div class="flex flex-col gap-y-4 flex-1 bg-gray-100 text-center p-6 rounded-xl shadow-lg">
            <img class="img-fluid progimg" src="img/Powermock.jpg" alt="" loading="lazy">
            <p class="progsubtitle">Your hard-core exam partner</p>
            <h2 class="text-center text-2xl font-bold">Power Mock</h2>
            <button type="button" class="btn btn-info bg-blue-500 text-white rounded-xl" data-toggle="collapse" data-target="#QBank">Bundle Inclusion</button>
                <div id="QBank" class="collapse">
                    1 Month Phased Mock Exam With Analytics (Easy, Average, Difficult, Expert)<br>
                    3 Months Subsequent Access to >600 Questions with Commentaries<br>
                </div>
                <button type="button" class="btn btn-info bg-blue-500 text-white rounded-xl" data-toggle="collapse" data-target="#Powermock">Enroll now</button>
                <div id="Powermock" class="collapse"><br>
            <!--<a href="payment?amount=10400&product=Powermock" class="text-center p-2 bg-blue-500 text-white rounded-xl transition duration-300 ease-in-out hover:bg-blue-600 hover:no-underline">Starts at January</a>
            <br><br><a href="payment?amount=54600&product=PowermockwithPodclass" class="text-center p-2 bg-blue-500 text-white rounded-xl transition duration-300 ease-in-out hover:bg-blue-600 hover:no-underline">Podclass + Phased Mock = Php 50,000 Additional Php 2,500 for printed modules</a>-->
            <a href="https://paymongo.page/l/powermock" class="text-center p-2 bg-blue-500 text-white rounded-xl transition duration-300 ease-in-out hover:bg-blue-600 hover:no-underline">Program Fee (₱10,000)</a>
        </div>
        </div>


</div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,128L40,133.3C80,139,160,149,240,165.3C320,181,400,203,480,218.7C560,235,640,245,720,229.3C800,213,880,171,960,165.3C1040,160,1120,192,1200,208C1280,224,1360,224,1400,224L1440,224L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>

</section>

 <!----About section start---->

 <section class="About">
<div class="container">
<div class="about-texthome text-center">
    <h2>Program Features</h2>
    <h5>AMC <span>PODCLASS</span></h5>
    <div class="p_iframe">
    <iframe width="800" height="600" src="https://www.youtube.com/embed/BlsPKqFdXlc" title="Video ads and welcome message" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>
</div>
</section>

<!-- About end-->

@endsection
