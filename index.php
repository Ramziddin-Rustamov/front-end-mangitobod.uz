<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mangitobod
 */

get_header();
?>
 <div class="main-banner">
    <div class="owl-carousel owl-banner">
      <div class="item item-1">
        <div class="header-text">
          <span class="category">Samarqand, <em>Urgut tumani</em></span>
          <h2>Hurry!<br>Get the Best Villa for you</h2>
        </div>
      </div>
      <div class="item item-2">
        <div class="header-text">
          <span class="category">Melbourne, <em>Australia</em></span>
          <h2>Be Quick!<br>Get the best villa in town</h2>
        </div>
      </div>
      <div class="item item-3">
        <div class="header-text">
          <span class="category">Miami, <em>South Florida</em></span>
          <h2>Act Now!<br>Get the highest level penthouse</h2>
        </div>
      </div>
    </div>
  </div>

	<div class="featured section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="left-image">
            <img src="<?=get_template_directory_uri().'/assets/images/featured.jpg' ?>" alt="">
          </div>
        </div>
        <div class="col-lg-5">
          <div class="section-heading">
            <h6>| Mahallamiz RAISi</h6>
            <h2>Ramziddin Rustamov </h2>
          </div>
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Qanday masalar buyicha murojat qilish mumkun ?

                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                Get <strong>the best villa</strong> website template in HTML CSS and Bootstrap for your business. TemplateMo provides you the <a href="https://www.google.com/search?q=best+free+css+templates" target="_blank">best free CSS templates</a> in the world. Please tell your friends about it.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Ish soatlar ?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn't eiusmod tempor incididunt ut labore consectetur <code>adipiscing</code> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Mahallamiz muammolari haqida aloqaga chisam bo'ladimi ?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn't eiusmod tempor incididunt ut labore consectetur <code>adipiscing</code> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="info-table">
            <ul>
              <li>
                <i style="color:#f35525" class="fas fa-clock fa-3x"></i>
                <h4>Ishlash soatlari <br><span>08:00 - 17: 00</span></h4>
              </li>
              <li>
                <i style="color:#f35525" class="fas fa-mail-bulk fa-3x"></i>
                <h4>Email<br><span>email@gmail.com</span></h4>
              </li>
              <li>
                <i style="color:#f35525" class="fas fa-phone fa-3x"></i>
                <h4>Telefon <br><span>+9989 771 39 09</span></h4>
              </li>
              <li>
                <i style="color:#f35525" class="fas fa-map-location fa-3x"></i>
                <h4>Manzili<br><span>mangitobod fuqorolar yig'ini</span></h4>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="video section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading text-center">
            <h6>| Vedio orqali </h6>
            <h2>Mahalla  Haqida Toliqroq Ma'lumot oling !</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="video-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="video-frame">
            <img src="<?=get_template_directory_uri().'/assets/images/village-video.jpg'?>" alt="">
            <a href="https://www.youtube.com/watch?v=cP3atIcadGE" target="_blank"><i class="fa fa-play"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="fun-facts">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="wrapper">
            <div class="row">
              <div class="col-lg-4 pb-5 ">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="8500" data-speed="1000"></h2>
                   <p class="count-text ">Aholi <br>Soni</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="3400" data-speed="1000"></h2>
                   <p class="count-text ">Yoshlarimiz<br>dan ko'p</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="334" data-speed="1000"></h2>
                   <p class="count-text ">Pensiyanerlar<br>dan ko'p</p>
                </div>
              </div>
              <div class="col-lg-4 pb-5">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="2" data-speed="1500"></h2>
                   <p class="count-text">Maktablar<br>soni</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="12" data-speed="1000"></h2>
                  <p class="count-text ">Bog'cha<br>soni</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="2" data-speed="1000"></h2>
                  <p class="count-text ">Masjidlari<br>soni</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="200" data-speed="1000"></h2>
                  <p class="count-text ">Dukonlar<br>soni</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="1" data-speed="1000"></h2>
                  <p class="count-text ">Shifoxona<br>soni</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="10" data-speed="1000"></h2>
                  <p class="count-text ">Xizmat ko'<br>rsatish</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section best-deal">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="section-heading">
            <h6>| Eng yaxshi jihatlarimz</h6>
            <h2>Yaqindan tanishing </h2>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="tabs-content">
            <div class="row">
              <div class="nav-wrapper ">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="appartment-tab" data-bs-toggle="tab" data-bs-target="#appartment" type="button" role="tab" aria-controls="appartment" aria-selected="true">Yoshlar haqida</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="villa-tab" data-bs-toggle="tab" data-bs-target="#villa" type="button" role="tab" aria-controls="villa" aria-selected="false">Shifoxonamiz</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="penthouse-tab" data-bs-toggle="tab" data-bs-target="#penthouse" type="button" role="tab" aria-controls="penthouse" aria-selected="false">Maktablarimiz</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="penthouse-tab" data-bs-toggle="tab" data-bs-target="#penthouse" type="button" role="tab" aria-controls="penthouse" aria-selected="false">Maktabgacha ta'lim</button>
                  </li>
                </ul>
              </div>              
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="appartment" role="tabpanel" aria-labelledby="appartment-tab">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="info-table">
                        <ul>
                          <li>Yoshlar <span>1 400 ta </span></li>
                          <li>Sovrindorlari <span>200</span></li>
                          <li>Til buyicha s.t<span>4</span></li>
                          <li>Alimpeyada sovrindorlari <span>20 ta </span></li>
                          <li>Oliy ta'limda  <span>30 ta </span></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <img src="<?=get_template_directory_uri().'/assets/images/deal-01.jpg ' ?>" alt="">
                    </div>
                    <div class="col-lg-3">
                      <h4>Extra Info About Property</h4>
                      <p>
                        Rahmat! Sizga kerakli ma'lumotlarni taqdim etishim mumkin. "TemplateMo" veb-sayti, bepul CSS shriftlarini taklif etadi va ommaviy veb-saytlarida qidiruv motorlarida "TemplateMo" nomini qidirishingiz yoki "TemplateMo Portfolio", "TemplateMo One Page Layouts" 
                        kabi so'rovlarni kiriting. Bu usullar orqali siz uyingiz uchun mos veb-dizaynlarni topishingiz mumkin..</p>
                      <div class="icon-button">
                        <a href="property-details.html"><i class="fa fa-users"></i> Yoshlarimiz ...</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="villa" role="tabpanel" aria-labelledby="villa-tab">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="info-table">
                        <ul>
                          <li>Total Flat Space <span>250 m2</span></li>
                          <li>Floor number <span>26th</span></li>
                          <li>Number of rooms <span>5</span></li>
                          <li>Parking Available <span>Yes</span></li>
                          <li>Payment Process <span>Bank</span></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <img src="<?=get_template_directory_uri().'/assets/images/deal-02.jpg'?>" alt="">
                    </div>
                    <div class="col-lg-3">
                      <h4>Detail Info About Villa</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor pack incididunt ut labore et dolore magna aliqua quised ipsum suspendisse. <br><br>Swag fanny pack lyft blog twee. JOMO ethical copper mug, succulents typewriter shaman DIY kitsch twee taiyaki fixie hella venmo after messenger poutine next level humblebrag swag franzen.</p>
                      <div class="icon-button">
                        <a href="property-details.html"><i class="fa fa-calendar"></i> Schedule a visit</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="penthouse" role="tabpanel" aria-labelledby="penthouse-tab">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="info-table">
                        <ul>
                          <li>Total Flat Space <span>320 m2</span></li>
                          <li>Floor number <span>34th</span></li>
                          <li>Number of rooms <span>6</span></li>
                          <li>Parking Available <span>Yes</span></li>
                          <li>Payment Process <span>Bank</span></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <img src="<?=get_template_directory_uri().'/assets/images/deal-03.jpg'?>" alt="">
                    </div>
                    <div class="col-lg-3">
                      <h4>Extra Info About Penthouse</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor pack incididunt ut labore et dolore magna aliqua quised ipsum suspendisse. <br><br>Swag fanny pack lyft blog twee. JOMO ethical copper mug, succulents typewriter shaman DIY kitsch twee taiyaki fixie hella venmo after messenger poutine next level humblebrag swag franzen.</p>
                      <div class="icon-button">
                        <a href="property-details.html"><i class="fa fa-calendar"></i> Schedule a visit</a>
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

  <div class="properties section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading text-center">
            <h6>| O'chrashuvlar | Bajarilgan ishlar </h6>
            <h2>Biz yaxshi bilganlarimizni siz bilan ilindik !</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="item">
            <a href="property-details.html"><img src="<?=get_template_directory_uri().'/assets/images/property-01.jpg'?>" alt=""></a>
            <span class="category">Luxury Villa</span>
            <h6><i class="fas fa-calendar-check"></i> 2024.02.23</h6>
            <h4><a href="property-details.html">Mahalla obodligi uchun hayriya </a></h4>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit dolores, optio aspernatur ab 
            architecto quod dolor excepturi suscipit a sapiente odio accusantium nobis laboriosam, provident corrupti voluptatem numquam, aperiam nostrum?

           </p>
            <div class="main-button">
              <a href="property-details.html">Schedule a visit</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="item">
            <a href="property-details.html"><img src="<?=get_template_directory_uri().'/assets/images/property-02.jpg'?>" alt=""></a>
            <span class="category">Luxury Villa</span>
            <h6>$1.180.000</h6>
            <h4><a href="property-details.html">54 Mid Street Florida, OR 27001</a></h4>
            <ul>
              <li>Bedrooms: <span>6</span></li>
              <li>Bathrooms: <span>5</span></li>
              <li>Area: <span>450m2</span></li>
              <li>Floor: <span>3</span></li>
              <li>Parking: <span>8 spots</span></li>
            </ul>
            <div class="main-button">
              <a href="property-details.html">Schedule a visit</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="item">
            <a href="property-details.html"><img src="<?=get_template_directory_uri().'/assets/images/property-03.jpg'?>" alt=""></a>
            <span class="category">Luxury Villa</span>
            <h6>$1.460.000</h6>
            <h4><a href="property-details.html">26 Old Street Miami, OR 38540</a></h4>
            <ul>
              <li>Bedrooms: <span>5</span></li>
              <li>Bathrooms: <span>4</span></li>
              <li>Area: <span>225m2</span></li>
              <li>Floor: <span>3</span></li>
              <li>Parking: <span>10 spots</span></li>
            </ul>
            <div class="main-button">
              <a href="property-details.html">Schedule a visit</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="item">
            <a href="property-details.html"><img src="<?=get_template_directory_uri().'/assets/images/property-04.jpg'?>" alt=""></a>
            <span class="category">Apartment</span>
            <h6>$584.500</h6>
            <h4><a href="property-details.html">12 New Street Miami, OR 12650</a></h4>
            <ul>
              <li>Bedrooms: <span>4</span></li>
              <li>Bathrooms: <span>3</span></li>
              <li>Area: <span>125m2</span></li>
              <li>Floor: <span>25th</span></li>
              <li>Parking: <span>2 cars</span></li>
            </ul>
            <div class="main-button">
              <a href="property-details.html">Schedule a visit</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="item">
            <a href="property-details.html"><img src="<?=get_template_directory_uri().'/assets/images/property-05.jpg'?>" alt=""></a>
            <span class="category">Penthouse</span>
            <h6>$925.600</h6>
            <h4><a href="property-details.html">34 Beach Street Miami, OR 42680</a></h4>
            <ul>
              <li>Bedrooms: <span>4</span></li>
              <li>Bathrooms: <span>4</span></li>
              <li>Area: <span>180m2</span></li>
              <li>Floor: <span>38th</span></li>
              <li>Parking: <span>2 cars</span></li>
            </ul>
            <div class="main-button">
              <a href="property-details.html">Schedule a visit</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="item">
            <a href="property-details.html"><img src="<?=get_template_directory_uri().'/assets/images/property-06.jpg'?>" alt=""></a>
            <span class="category">Modern Condo</span>
            <h6>$450.000</h6>
            <h4><a href="property-details.html">22 New Street Portland, OR 16540</a></h4>
            <ul>
              <li>Bedrooms: <span>3</span></li>
              <li>Bathrooms: <span>2</span></li>
              <li>Area: <span>165m2</span></li>
              <li>Floor: <span>26th</span></li>
              <li>Parking: <span>3 cars</span></li>
            </ul>
            <div class="main-button">
              <a href="property-details.html">Schedule a visit</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="contact section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading text-center">
            <h6>| Biz bilan bog'laning </h6>
            <h2>Biz bilan aloqaga chiqing </h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div id="map">
            <iframe src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=Mangitobod%20Neighborhood%20Samarkand+(Mangitobod%20mahallasi)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="100%" height="500px" frameborder="0" style="border:0; border-radius: 10px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);" allowfullscreen=""></iframe>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="item phone">
                <img src="<?=get_template_directory_uri().'/assets/images/phone-icon.png'?>" alt="" style="max-width: 52px;">
                <h6>+998 99 771 39 09<br><span>Phone Number</span></h6>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="item email">
                <img src="<?=get_template_directory_uri().'/assets/images/email-icon.png'?>" alt="" style="max-width: 52px;">
                <h6>email@.uz<br><span> Email Pochtamiz</span></h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <form id="contact-form" action="" method="post">
            <div class="row">
              <div class="col-lg-12">
                <fieldset>
                  <label for="name">F.I.SH</label>
                  <input type="name" name="name" id="name" placeholder="Ismi sharifingiz " autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="email">Email pochtangiz <span class="text-danger"> [ majburiy emas ]</span></label>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Email pochtangizni kiriting " required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="subject">Nima buyicha  ? </label>
                  <input type="subject" name="subject" id="subject" placeholder="Masalangiz nima ?" autocomplete="on" >
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="message">Masalangiz buyicha xabr qoldiring !</label>
                  <textarea name="message" id="message" placeholder="Xabaringizni shu yerga yozib qoldiring ..."></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="orange-button">Xabarni yuborish </button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

<?php
// get_sidebar();
get_footer();
