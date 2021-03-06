 <nav class="navbar navbar-expand-lg navbar-bg">
     <a class="navbar-brand" href="/">
         <img src="/assets/logos/logo.png" class='small-logo' alt="">
     </a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
     </button>

     <div class="collapse navbar-collapse" id="navbar-content">
         <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
             @if (Auth::check())
            <li class='nav-item'>
                <a id='nav-dashboard-link' class='nav-link' href='/dashboard'>Admin Dashboard</a>
            </li>
             @endif
         </ul>
         @if (Auth::check())
         <ul class='my-2 my-lg-0'>
             <a class="btn btn-outline-light" href='/logout'>
                 <b>Logout</b>
             </a>
         </ul>
         @else
         <ul class='my-2 my-lg-0'>
             <a class="btn btn-outline-light" href='https://github.com/udip-patel/personal-website-laravel' target='_blank'>
                 <b>View on Github</b>
                 <img src='/assets/logos/github-logo.svg' class='external-site-logo'>
             </a>
         </ul>
         @endif
     </div>
 </nav>