@extends('site.layout')
@section('main')
<div class="content">
    <div class="projects">
      <div class="container">
        <div class="filter-content-2">
          <ul class="filter js-filter">
            <li class="active"><a href="works-grid.html#" data-filter="*">All</a></li>
            <li><a href="works-grid.html#" data-filter=".building">Building</a></li>
            <li><a href="works-grid.html#" data-filter=".villa">Villa</a></li>
            <li><a href="works-grid.html#" data-filter=".interior">Interior</a></li>
            <li><a href="works-grid.html#" data-filter=".exterior">Exterior</a></li>
          </ul>
        </div>
      </div>
      <div class="grid-items js-isotope js-grid-items">
        <div class="grid-item building js-isotope-item js-grid-item">
          <div class="project-item item-shadow">
            <img alt="" class="img-responsive" src="{{asset('images/projects/1-426x574.jpg')}}">
            <div class="project-hover">
              <div class="project-hover-content">
                <h3 class="project-title">Triangle<br>Concrete House<br>On Lake</h3>
                <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipil pcing elit. Proin nunc leo, rhoncus sit amet tolil arcu vel, pharetra volutpat sem lorn Donec tincidunt velit nec laoreet semper...</p>
              </div>
            </div>
            <a href="works-grid.html" class="link-arrow">See project <i class="icon {{app()->getLocale() === 'fa' ? 'ion-ios-arrow-left' : 'ion-ios-arrow-right'}}"></i></a>
          </div>
        </div>
        <div class="grid-item building js-isotope-item js-grid-item">
          <div class="project-item item-shadow">
            <img alt="" class="img-responsive" src="{{asset('images/projects/2-426x574.jpg')}}">
            <div class="project-hover">
              <div class="project-hover-content">
                <h3 class="project-title">Ocean<br>Museum<br>Italy</h3>
                <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipil pcing elit. Proin nunc leo, rhoncus sit amet tolil arcu vel, pharetra volutpat sem lorn Donec tincidunt velit nec laoreet semper...</p>
              </div>
            </div>
            <a href="works-grid.html" class="link-arrow">See project <i class="icon {{app()->getLocale() === 'fa' ? 'ion-ios-arrow-left' : 'ion-ios-arrow-right'}}"></i></a>
          </div>
        </div>
        <div class="grid-item villa js-isotope-item js-grid-item">
          <div class="project-item item-shadow">
            <img alt="" class="img-responsive" src="{{asset('images/projects/3-426x574.jpg')}}">
            <div class="project-hover">
              <div class="project-hover-content">
                <h3 class="project-title">Milko<br>Co-Working<br>Building</h3>
                <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipil pcing elit. Proin nunc leo, rhoncus sit amet tolil arcu vel, pharetra volutpat sem lorn Donec tincidunt velit nec laoreet semper...</p>
              </div>
            </div>
            <a href="works-grid.html" class="link-arrow">See project <i class="icon {{app()->getLocale() === 'fa' ? 'ion-ios-arrow-left' : 'ion-ios-arrow-right'}}"></i></a>
          </div>
        </div>
        <div class="grid-item villa js-isotope-item js-grid-item">
          <div class="project-item item-shadow">
            <img alt="" class="img-responsive" src="{{asset('images/projects/4-426x574.jpg')}}">
            <div class="project-hover">
              <div class="project-hover-content">
                <h3 class="project-title">Redesign<br>Interior For<br>Villa</h3>
                <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipil pcing elit. Proin nunc leo, rhoncus sit amet tolil arcu vel, pharetra volutpat sem lorn Donec tincidunt velit nec laoreet semper...</p>
              </div>
            </div>
            <a href="works-grid.html" class="link-arrow">See project <i class="icon {{app()->getLocale() === 'fa' ? 'ion-ios-arrow-left' : 'ion-ios-arrow-right'}}"></i></a>
          </div>
        </div>
        <div class="grid-item interior js-isotope-item js-grid-item">
          <div class="project-item item-shadow">
            <img alt="" class="img-responsive" src="{{asset('images/projects/5-426x574.jpg')}}">
            <div class="project-hover">
              <div class="project-hover-content">
                <h3 class="project-title">Wooden<br>Hozirontal<br>Villa</h3>
                <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipil pcing elit. Proin nunc leo, rhoncus sit amet tolil arcu vel, pharetra volutpat sem lorn Donec tincidunt velit nec laoreet semper...</p>
              </div>
            </div>
            <a href="works-grid.html" class="link-arrow">See project <i class="icon {{app()->getLocale() === 'fa' ? 'ion-ios-arrow-left' : 'ion-ios-arrow-right'}}"></i></a>
          </div>
        </div>
        <div class="grid-item interior js-isotope-item js-grid-item">
          <div class="project-item item-shadow">
            <img alt="" class="img-responsive" src="{{asset('images/projects/6-426x574.jpg')}}">
            <div class="project-hover">
              <div class="project-hover-content">
                <h3 class="project-title">Small<br>House Near<br>Wroclaw</h3>
                <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipil pcing elit. Proin nunc leo, rhoncus sit amet tolil arcu vel, pharetra volutpat sem lorn Donec tincidunt velit nec laoreet semper...</p>
              </div>
            </div>
            <a href="works-grid.html" class="link-arrow">See project <i class="icon {{app()->getLocale() === 'fa' ? 'ion-ios-arrow-left' : 'ion-ios-arrow-right'}}"></i></a>
          </div>
        </div>
        <div class="grid-item exterior js-isotope-item js-grid-item">
          <div class="project-item item-shadow">
            <img alt="" class="img-responsive" src="{{asset('images/projects/7-426x574.jpg')}}">
            <div class="project-hover">
              <div class="project-hover-content">
                <h3 class="project-title">Bellecomde<br>Holiday<br>Residence</h3>
                <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipil pcing elit. Proin nunc leo, rhoncus sit amet tolil arcu vel, pharetra volutpat sem lorn Donec tincidunt velit nec laoreet semper...</p>
              </div>
            </div>
            <a href="works-grid.html" class="link-arrow">See project <i class="icon {{app()->getLocale() === 'fa' ? 'ion-ios-arrow-left' : 'ion-ios-arrow-right'}}"></i></a>
          </div>
        </div>
        <div class="grid-item exterior js-isotope-item js-grid-item">
          <div class="project-item item-shadow">
            <img alt="" class="img-responsive" src="{{asset('images/projects/8-426x574.jpg')}}">
            <div class="project-hover">
              <div class="project-hover-content">
                <h3 class="project-title">Cubic<br>Inter Mesuem<br>In Rome</h3>
                <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipil pcing elit. Proin nunc leo, rhoncus sit amet tolil arcu vel, pharetra volutpat sem lorn Donec tincidunt velit nec laoreet semper...</p>
              </div>
            </div>
            <a href="works-grid.html" class="link-arrow">See project <i class="icon {{app()->getLocale() === 'fa' ? 'ion-ios-arrow-left' : 'ion-ios-arrow-right'}}"></i></a>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection