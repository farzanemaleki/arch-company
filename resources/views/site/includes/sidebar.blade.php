
<div class="menu"> 
    <span class="close-menu icon-cross2 right-boxed"></span>
    <div class="menu-lang right-boxed">
      @foreach (config('app.availableLocales') as $name => $locale)
          <a href="{{ route(Route::currentRouteName(), $locale) }}" class="{{app()->getLocale() === $locale}} ? 'active' : ''">{{$name}}</a>
      @endforeach
    </div>
    <ul class="menu-list right-boxed">
      <li class="active">
        <a  href="/">Home</a>
      </li>
      <li>
        <a href="">Works</a>
      </li>
      <li>
        <a href="">Blogs</a>
      </li>
      <li>
        <a href="">About Us</a>
      </li>
      <li>
        <a href="">Partners</a>
      </li>
    </ul>
    <div class="menu-footer right-boxed">
      <div class="social-list">
        <a href="">Register</a>
        <a href="">Log in</a>
      </div>
    </div>
  </div>