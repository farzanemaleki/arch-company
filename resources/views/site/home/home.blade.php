@extends('site.layout')

@section("main")
 <!-- Jumbotron -->
    
 @include("site.includes.landing")

 <div class="content">   

   <!-- Section About -->

   <section class="section-about">
     <div class="container">
       <div class="row">
         <div class="col-md-6">
           <strong class="section-subtitle">about us</strong>
           <h2 class="section-title section-about-title">We Are The Leader In The Architectural</h2>
           <p>For each project we establish relationships with partners who we know will help us create added value for your project. As well as bringing together the public and private sectors, we make sector-overarching links to gather knowledge and to learn from each other</p>
           <div class="experience-box">
             <div class="experience-border"></div>
             <div class="experience-content">
               <div class="experience-number">26</div>
               <div class="experience-info wow fadeInDown">Years<br>Experience<br>Working</div>
             </div>
           </div>
         </div>
         <div class="col-md-5 col-md-offset-1">
           <div class="dots-image">
             <img alt="" class="about-img img-responsive" src="images/1-470x660.jpg">
             <div class="dots"></div>
           </div>
         </div>
       </div>
     </div>
   </section>

   <!-- Section Projects -->

   <section class="section-projects section">
     <div class="container">
       <div class="row">
         <div class="col-lg-5">
            <h2 class="section-title">Latest Projects</h2>
         </div>        
         <div class="col-lg-7">
           <div class="filter-content">
             <ul class="filter-carousel filter pull-lg-right js-filter-carousel">
               <li class="active"><a href="index.html#" class="all" data-filter="*">All</a></li>
               <li><a href="index.html#" data-filter=".building">Building </a></li>
               <li><a href="index.html#" data-filter=".interior-exterior">Interior & Exterior </a></li>
             </ul>
             <a href="index.html" class="view-projects">View All Projects</a>
           </div>
         </div>
       </div>
     </div>
     <div class="project-carousel owl-carousel">
       <div class="project-item item-shadow building">
         <img alt="" class="img-responsive" src="images/projects/1-426x574.jpg">
         <div class="project-hover">
           <div class="project-hover-content">
             <h3 class="project-title">Triangle<br>Concrete House<br>On Lake</h3>
             <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipil pcing elit. Proin nunc leo, rhoncus sit amet tolil arcu vel, pharetra volutpat sem lorn Donec tincidunt velit nec laoreet semper...</p>
           </div>
         </div>
         <a href="index.html" class="link-arrow">See project <i class="icon ion-ios-arrow-right"></i></a>
       </div>
       <div class="project-item item-shadow building">
         <img alt="" class="img-responsive" src="images/projects/2-426x574.jpg">
         <div class="project-hover">
           <div class="project-hover-content">
             <h3 class="project-title">Ocean<br>Museum<br>Italy</h3>
             <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipil pcing elit. Proin nunc leo, rhoncus sit amet tolil arcu vel, pharetra volutpat sem lorn Donec tincidunt velit nec laoreet semper...</p>
           </div>
         </div>
         <a href="index.html" class="link-arrow">See project <i class="icon ion-ios-arrow-right"></i></a>
       </div>
       <div class="project-item item-shadow building">
         <img alt="" class="img-responsive" src="images/projects/3-426x574.jpg">
         <div class="project-hover">
           <div class="project-hover-content">
             <h3 class="project-title">Milko<br>Co-Working<br>Building</h3>
             <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipil pcing elit. Proin nunc leo, rhoncus sit amet tolil arcu vel, pharetra volutpat sem lorn Donec tincidunt velit nec laoreet semper...</p>
           </div>
         </div>
         <a href="index.html" class="link-arrow">See project <i class="icon ion-ios-arrow-right"></i></a>
       </div>
       <div class="project-item item-shadow building">
         <img alt="" class="img-responsive" src="images/projects/4-426x574.jpg">
         <div class="project-hover">
           <div class="project-hover-content">
             <h3 class="project-title">Redesign<br>Interior For<br>Villa</h3>
             <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipil pcing elit. Proin nunc leo, rhoncus sit amet tolil arcu vel, pharetra volutpat sem lorn Donec tincidunt velit nec laoreet semper...</p>
           </div>
         </div>
         <a href="index.html" class="link-arrow">See project <i class="icon ion-ios-arrow-right"></i></a>
       </div>
       <div class="project-item item-shadow interior-exterior">
         <img alt="" class="img-responsive" src="images/projects/5-426x574.jpg">
         <div class="project-hover">
           <div class="project-hover-content">
             <h3 class="project-title">Wooden<br>Hozirontal<br>Villa</h3>
             <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipil pcing elit. Proin nunc leo, rhoncus sit amet tolil arcu vel, pharetra volutpat sem lorn Donec tincidunt velit nec laoreet semper...</p>
           </div>
         </div>
         <a href="index.html" class="link-arrow">See project <i class="icon ion-ios-arrow-right"></i></a>
       </div>
       <div class="project-item item-shadow interior-exterior">
         <img alt="" class="img-responsive" src="images/projects/6-426x574.jpg">
         <div class="project-hover">
           <div class="project-hover-content">
             <h3 class="project-title">Small<br>House Near<br>Wroclaw</h3>
             <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipil pcing elit. Proin nunc leo, rhoncus sit amet tolil arcu vel, pharetra volutpat sem lorn Donec tincidunt velit nec laoreet semper...</p>
           </div>
         </div>
         <a href="index.html" class="link-arrow">See project <i class="icon ion-ios-arrow-right"></i></a>
       </div>
       <div class="project-item item-shadow interior-exterior">
         <img alt="" class="img-responsive" src="images/projects/7-426x574.jpg">
         <div class="project-hover">
           <div class="project-hover-content">
             <h3 class="project-title">Bellecomde<br>Holiday<br>Residence</h3>
             <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipil pcing elit. Proin nunc leo, rhoncus sit amet tolil arcu vel, pharetra volutpat sem lorn Donec tincidunt velit nec laoreet semper...</p>
           </div>
         </div>
         <a href="index.html" class="link-arrow">See project <i class="icon ion-ios-arrow-right"></i></a>
       </div>
       <div class="project-item item-shadow interior-exterior">
         <img alt="" class="img-responsive" src="images/projects/8-426x574.jpg">
         <div class="project-hover">
           <div class="project-hover-content">
             <h3 class="project-title">Cubic<br>Inter Mesuem<br>In Rome</h3>
             <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipil pcing elit. Proin nunc leo, rhoncus sit amet tolil arcu vel, pharetra volutpat sem lorn Donec tincidunt velit nec laoreet semper...</p>
           </div>
         </div>
         <a href="index.html" class="link-arrow">See project <i class="icon ion-ios-arrow-right"></i></a>
       </div>
     </div>
   </section>

   <!-- Section Clients -->

   <section class="section-clients section bg-dots">
     <div class="container">
       <h2 class="section-title">From Great Our Clients</h2>
       <div class="client-carousel owl-carousel">
         <div class="client-carousel-item">
           <img alt="" class="client-img" src="images/clients/1-92x92.jpg">
           <div class="client-box">
             <img alt="" class="image-quote" src="images/image-icons/icon-quote.png">
             <div class="client-title">
               <span class="client-name">Adam Stone</span> 
               <span class="client-company">/ CEO at Google INC</span>
             </div>
             <p class="client-description">Sed elit quam, iaculis sed semper sit amet udin vitae nibh. at magna akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup.</p>
           </div>
         </div>
         <div class="client-carousel-item">
           <img alt="" class="client-img" src="images/clients/2-92x92.jpg">
           <div class="client-box">
             <img alt="" class="image-quote" src="images/image-icons/icon-quote.png">
             <div class="client-title">
               <span class="client-name">Anabella Kleva </span> 
               <span class="client-company">/ Managerment at Envato</span>
             </div>
             <p class="client-description">Sed elit quam, iaculis sed semper sit amet udin vitae nibh. at magna akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup.</p>
           </div>
         </div>
         <div class="client-carousel-item">
           <img alt="" class="client-img" src="images/clients/1-92x92.jpg">
           <div class="client-box">
             <img alt="" class="image-quote" src="images/image-icons/icon-quote.png">
             <div class="client-title">
               <span class="client-name">Adam Stone</span> 
               <span class="client-company">/ CEO at Google INC</span>
             </div>
             <p class="client-description">Sed elit quam, iaculis sed semper sit amet udin vitae nibh. at magna akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup. Sed elit quam, iaculis sed semper sit amet udin vitae nibh</p>
           </div>
         </div>
         <div class="client-carousel-item">
           <img alt="" class="client-img" src="images/clients/2-92x92.jpg">
           <div class="client-box">
             <img alt="" class="image-quote" src="images/image-icons/icon-quote.png">
             <div class="client-title">
               <span class="client-name">Adam Stone</span> 
               <span class="client-company">/ CEO at Google INC</span>
             </div>
             <p class="client-description">Sed elit quam, iaculis sed semper sit amet udin vitae nibh. at magna akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup.</p>
           </div>
         </div>
       </div>
       <div class="partner-carousel owl-carousel">
         <div class="partner-carousel-item">
           <img alt="" src="images/partners/1.png">
         </div>
         <div class="partner-carousel-item">
           <img alt="" src="images/partners/2.png">
         </div>
         <div class="partner-carousel-item">
           <img alt="" src="images/partners/3.png">
         </div>
         <div class="partner-carousel-item">
           <img alt="" src="images/partners/4.png">
         </div>
         <div class="partner-carousel-item">
           <img alt="" src="images/partners/5.png">
         </div>
       </div>
     </div>
   </section>

   <!-- Section News -->

   <section class="section-news section">
     <div class="container">
       <h2 class="section-title">Latest News <a href="index.html" class="link-arrow-2 pull-right">All Articles <i class="icon ion-ios-arrow-right"></i></a></h2>
       <div class="news-carousel owl-carousel">
         <div class="news-item">
           <img alt="" src="images/news/1-370x370.jpg">
           <div class="news-hover">
             <div class="hover-border"><div></div></div>
             <div class="content">
               <div class="time">Dec 15th, 2016</div>
               <h3 class="news-title">Discover Architecture Of Bario</h3>
               <p class="news-description">Lorem ipsum dolor sit amet, consect etur adipiscing elit. Mauris vel auctorol est. Integer nunc ipsum...</p>
             </div>
             <a class="read-more" href="index.html#">Continue</a>
           </div>
         </div>
         <div class="news-item">
           <img alt="" src="images/news/2-370x370.jpg">
           <div class="news-hover">
             <div class="hover-border"><div></div></div>
             <div class="content">
               <div class="time">Dec 15th, 2016</div>
               <h3 class="news-title">Discover Architecture Of Bario</h3>
               <p class="news-description">Lorem ipsum dolor sit amet, consect etur adipiscing elit. Mauris vel auctorol est. Integer nunc ipsum...</p>
             </div>
             <a class="read-more" href="index.html#">Continue</a>
           </div>
         </div>
         <div class="news-item">
           <img alt="" src="images/news/3-370x370.jpg">
           <div class="news-hover">
             <div class="hover-border"><div></div></div>
             <div class="content">
               <div class="time">Dec 15th, 2016</div>
               <h3 class="news-title">Discover Architecture Of Bario</h3>
               <p class="news-description">Lorem ipsum dolor sit amet, consect etur adipiscing elit. Mauris vel auctorol est. Integer nunc ipsum...</p>
             </div>
             <a class="read-more" href="index.html#">Continue</a>
           </div>
         </div>
       </div>
     </div>
   </section>
 </div>
@endsection