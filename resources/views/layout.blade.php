<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,intial-dcale=1,maximum-socale=1">
    <title> document</title>
    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('http://localhost/pp/public/style2.css')}}">
    </head>
    <body>
        <input type="checkbox"     id="sidebare-toggle">
        <div class="sidebar">
            <div class="sidebar-header">
                <h3 class="brand" >
                    <span class="ti-unlink"></span>
                    <span>easywire</span>
                </h3>
                <label  for="sidebare-toggle" class="ti-menu-alt"></label>
            </div>
            <div class="sidebar-menu">
                <ul>
                    <li>
                        <a href="{{asset('')}}">
                            <span class="ti-home"></span>
                            <span>home</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('')}}">
                            <span class="ti-face-smile"></span>
                            <span>task</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('')}}">
                            <span class="ti-clipboard"></span>
                            <span>leaves</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="ti-folder"></span>
                            <span>projects</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="ti-time"></span>
                            <span>timesheet</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="ti-book"></span>
                            <span>contacts</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="ti-settings"></span>
                            <span>account </span>
                        </a>
                    </li>
                
                </ul>
            </div>
        </div>
         <div class="main-content">
             <header>
             <div class="search-wrapper">
                 <span class="ti-search"></span>
                 <input type="search" placeholder="search">
             </div>
             <div class="social-icons">
                 <span class="ti-bell"></span>
                 <div></div>

             </div>

            </header>
        </div>
            @yield('page-content')
    </body>
</html>