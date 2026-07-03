@php
$home   = $settings = $services = $topics =  $users = $goals =  $about = $categories = $slides = $products = $certificates = '';

switch (request()->segment(2)) {
  case null:
  $home = 'active';
  break;
  case 'certificates':
  $certificates = 'active';
  break;
  case 'products':
  $products = 'active';
  break;
  case 'slides':
  $slides = 'active';
  break;
  case 'categories':
  $categories = 'active';
  break;
  case 'about':
  $about = 'active';
  break;
  case 'users':
  $users = 'active';
  break;
  case 'goals':
  $goals = 'active';
  break;
  case 'services':
  $services = 'active';
  break;
  case 'settings':
  $settings = 'active';
  break;
  case 'topics':
  $topics = 'active';
  break;


  default:
      // code...
  break;
}

@endphp
<header class="navbar navbar-expand-md d-print-none" >
  <div class="container-xl">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
      <a href="{{ route('board.index') }}">
        <img src="./static/logo.svg" width="110" height="32" alt="لوحه التحكم" class="navbar-brand-image">
      </a>
    </h1>
    <div class="navbar-nav flex-row order-md-last">

      <div class="d-none d-md-flex">
        <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode" data-bs-toggle="tooltip"
        data-bs-placement="bottom">
        <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" /></svg>
      </a>
      <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip"
      data-bs-placement="bottom">
      <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" /></svg>
    </a>

  </div>
  <div class="nav-item dropdown">
    <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
      <span class="avatar avatar-sm" style="background-image: url({{ Storage::url('users/'.Auth::user()->image) }})"></span>
      <div class="d-none d-xl-block ps-2">
        <div> {{ Auth::user()->name }} </div>
        <div class="mt-1 small text-muted"> مدير الموقع </div>
      </div>
    </a>
    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
      <a href="{{ route('board.profile.show') }}" class="dropdown-item"> الملف الشخصى </a>
      <a href="{{ route('board.password.show') }}" class="dropdown-item">تعديل كلمه المرور</a>
      <div class="dropdown-divider"></div>
      <a href="{{ route('board.settings.edit') }}" class="dropdown-item">الاعدادات</a>
      <a href="{{ route('board.logout') }}" class="dropdown-item"> تسجيل الخروج </a>
    </div>
  </div>
</div>
</div>
</header>
<header class="navbar-expand-md">
  <div class="collapse navbar-collapse" id="navbar-menu">
    <div class="navbar">
      <div class="container-xl">
        <ul class="navbar-nav">
          <li class="nav-item {{ $home }}">
            <a class="nav-link" href="{{ route('board.index') }}" >
              <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
              </span>
              <span class="nav-link-title">
                الرئيسيه
              </span>
            </a>
          </li>
          <li class="nav-item {{ $users }}">
            <a class="nav-link" href="{{ route('board.users.index') }}" >
              <span class="nav-link-icon d-md-none d-lg-inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users-group" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                 <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                 <path d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                 <path d="M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1"></path>
                 <path d="M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                 <path d="M17 10h2a2 2 0 0 1 2 2v1"></path>
                 <path d="M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                 <path d="M3 13v-1a2 2 0 0 1 2 -2h2"></path>
               </svg>
             </span>
             <span class="nav-link-title">
              المشرفين
            </span>
          </a>
        </li>
        <li class="nav-item {{ $topics }}">
          <a class="nav-link" href="{{ route('board.topics.index') }}" >
            <span class="nav-link-icon d-md-none d-lg-inline-block">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-apple-arcade" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
               <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
               <path d="M12 5m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
               <path d="M20 12.5v4.75a.734 .734 0 0 1 -.055 .325a.704 .704 0 0 1 -.348 .366l-5.462 2.58a5 5 0 0 1 -4.27 0l-5.462 -2.58a.705 .705 0 0 1 -.401 -.691l0 -4.75"></path>
               <path d="M4.431 12.216l5.634 -2.332a5.065 5.065 0 0 1 3.87 0l5.634 2.332a.692 .692 0 0 1 .028 1.269l-5.462 2.543a5.064 5.064 0 0 1 -4.27 0l-5.462 -2.543a.691 .691 0 0 1 .028 -1.27z"></path>
               <path d="M12 7l0 6"></path>
             </svg>

           </span>
           <span class="nav-link-title">
            المقالات
          </span>
        </a>
      </li>

      <li class="nav-item {{ $slides }}">
        <a class="nav-link" href="{{ route('board.slides.index') }}" >
          <span class="nav-link-icon d-md-none d-lg-inline-block">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-apple-arcade" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
             <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
             <path d="M12 5m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
             <path d="M20 12.5v4.75a.734 .734 0 0 1 -.055 .325a.704 .704 0 0 1 -.348 .366l-5.462 2.58a5 5 0 0 1 -4.27 0l-5.462 -2.58a.705 .705 0 0 1 -.401 -.691l0 -4.75"></path>
             <path d="M4.431 12.216l5.634 -2.332a5.065 5.065 0 0 1 3.87 0l5.634 2.332a.692 .692 0 0 1 .028 1.269l-5.462 2.543a5.064 5.064 0 0 1 -4.27 0l-5.462 -2.543a.691 .691 0 0 1 .028 -1.27z"></path>
             <path d="M12 7l0 6"></path>
           </svg>

         </span>
         <span class="nav-link-title">
          عارض الصور
        </span>
      </a>
    </li>
    <li class="nav-item {{ $categories }}">
      <a class="nav-link" href="{{ route('board.categories.index') }}" >
        <span class="nav-link-icon d-md-none d-lg-inline-block">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-bank" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
           <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
           <path d="M3 21l18 0"></path>
           <path d="M3 10l18 0"></path>
           <path d="M5 6l7 -3l7 3"></path>
           <path d="M4 10l0 11"></path>
           <path d="M20 10l0 11"></path>
           <path d="M8 14l0 3"></path>
           <path d="M12 14l0 3"></path>
           <path d="M16 14l0 3"></path>
         </svg>
       </span>
       <span class="nav-link-title">
        التصنيفات
      </span>
    </a>
  </li>
  <li class="nav-item {{ $goals }}">
    <a class="nav-link" href="{{ route('board.goals.index') }}" >
      <span class="nav-link-icon d-md-none d-lg-inline-block">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-bank" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
         <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
         <path d="M3 21l18 0"></path>
         <path d="M3 10l18 0"></path>
         <path d="M5 6l7 -3l7 3"></path>
         <path d="M4 10l0 11"></path>
         <path d="M20 10l0 11"></path>
         <path d="M8 14l0 3"></path>
         <path d="M12 14l0 3"></path>
         <path d="M16 14l0 3"></path>
       </svg>
     </span>
     <span class="nav-link-title">
      لماذا نحن
    </span>
  </a>
</li>

<li class="nav-item {{ $services }}">
  <a class="nav-link" href="{{ route('board.services.index') }}" >
    <span class="nav-link-icon d-md-none d-lg-inline-block">
      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-bank" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
       <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
       <path d="M3 21l18 0"></path>
       <path d="M3 10l18 0"></path>
       <path d="M5 6l7 -3l7 3"></path>
       <path d="M4 10l0 11"></path>
       <path d="M20 10l0 11"></path>
       <path d="M8 14l0 3"></path>
       <path d="M12 14l0 3"></path>
       <path d="M16 14l0 3"></path>
     </svg>
   </span>
   <span class="nav-link-title">
    الخدمات
  </span>
</a>
</li>


<li class="nav-item {{ $settings }} ">
  <a class="nav-link" href="{{ route('board.settings.edit') }}" >
    <span class="nav-link-icon d-md-none d-lg-inline-block">
     <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings-code" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
       <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
       <path d="M11.482 20.924a1.666 1.666 0 0 1 -1.157 -1.241a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.312 .318 1.644 1.794 .995 2.697"></path>
       <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
       <path d="M20 21l2 -2l-2 -2"></path>
       <path d="M17 17l-2 2l2 2"></path>
     </svg>
   </span>
   <span class="nav-link-title">
    الاعدادات
  </span>
</a>
</li>


<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#navbar-help" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
    <span class="nav-link-icon d-md-none d-lg-inline-block">
      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path><path d="M15 15l3.35 3.35"></path><path d="M9 15l-3.35 3.35"></path><path d="M5.65 5.65l3.35 3.35"></path><path d="M18.35 5.65l-3.35 3.35"></path></svg>
    </span>
    <span class="nav-link-title">
      صفحات اخرى
    </span>
  </a>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="{{ route('board.about.edit') }}" target="_blank" rel="noopener">
    نبذة عني
   </a>

 </div>
</li>



</ul>

</div>
</div>
</div>
</header>