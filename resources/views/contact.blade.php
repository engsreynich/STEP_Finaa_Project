 @extends('Layout.app')

@section('title', 'content')

@section('content')
 <section class="site-hero overlay page-inside" style="background-image: url(images/hero_4.jpg)">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center">
            <h1 class="heading" data-aos="fade-up">Contact</h1>
            <p class="sub-heading mb-5" data-aos="fade-up" data-aos-delay="100">
              A free template by <a href="https://free-template.co" target="_blank">Free-Template.co</a>. Download and share!
            </p>
          </div>
        </div>
        <!-- <a href="#" class="scroll-down">Scroll Down</a> -->
      </div>
    </section>
    <!-- END section -->


    <section class="section contact-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">

            <form action="#" method="post" class="bg-white p-md-5 p-4 mb-5">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="name">Name</label>
                  <input type="text" id="name" class="form-control ">
                </div>
                <div class="col-md-6 form-group">
                  <label for="phone">Phone</label>
                  <input type="text" id="phone" class="form-control ">
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" class="form-control ">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="message">Write Message</label>
                  <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="submit" value="Send Message" class="btn btn-primary">
                </div>
              </div>
            </form>

          </div>
          <div class="col-md-5">
            <div class="row">
              <div class="col-md-10 ml-auto contact-info">
                <p><span class="d-block">Address:</span> <span> 98 West 21th Street, Suite 721 New York NY 10016</span></p>
                <p><span class="d-block">Phone:</span> <span> (+1) 435 3533</span></p>
                <p><span class="d-block">Email:</span> <span> info@yourdomain.com</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section testimonial-section bg-light-2">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8">
            <h2 class="heading" data-aos="fade-up">Happy Customers</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial">
              <div class="author-image mb-3">
                <img src="images/person_1.jpg" alt="Image placeholder" class="rounded-circle">
              </div>
              <blockquote>

                <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
              </blockquote>
              <p><em>&mdash; Clare Gupta</em></p>

            </div>
          </div>
          <!-- END col -->
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="testimonial">
              <div class="author-image mb-3">
                <img src="images/person_2.jpg" alt="Image placeholder" class="rounded-circle">
              </div>
              <blockquote>
                <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.rdquo;</p>
              </blockquote>
              <p><em>&mdash; Rogie Slater</em></p>
            </div>
          </div>
          <!-- END col -->

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="testimonial">
              <div class="author-image mb-3">
                <img src="images/person_3.jpg" alt="Image placeholder" class="rounded-circle">
              </div>
              <blockquote>

                <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
              </blockquote>
              <p><em>&mdash; John Doe</em></p>
            </div>
          </div>
          <!-- END col -->
        </div>
      </div>
    </section>
@endsection
