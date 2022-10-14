<!-- Title -->

<div class="
                    header-title
                    
                  " data-animation-role="header-element">

    <div class="header-title-logo">
        @foreach ($logos as $logo)
        <a href="{{route('home')}}" data-animation-role="header-element">
            <img src="{{ !empty($logo->image) ? url('public/upload/logo_images/' . $logo->image) : url('public/upload/no-image.png') }} "
                alt="Foisal Elkady NYC Food Photographer">

        </a>
        @endforeach
    </div>



</div>



<!-- Nav -->
<div class="header-nav">
    <div class="header-nav-wrapper">
        <nav class="header-nav-list">




            <div class="header-nav-item header-nav-item--collection header-nav-item--active header-nav-item--homepage">
                <a href="{{route('home')}}" data-animation-role="header-element" aria-current="page">
                    Home
                </a>
            </div>
            <div class="header-nav-item header-nav-item--folder">
                <a class="header-nav-folder-title" href="" tabindex="-1" data-animation-role="header-element">
                    Galleries
                </a>
                <div class="header-nav-folder-content">

                    @foreach ($categories as $category)

                    <div class="header-nav-folder-item">
                        <a href="{{ route('category.view', $category->id) }}">
                            <span class="header-nav-folder-item-content">
                                {{ $category->name }}
                            </span>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>





            <div class="header-nav-item header-nav-item--collection">
                <a href="{{route('project.view')}}" data-animation-role="header-element">
                    Projects
                </a>
            </div>

            <div class="header-nav-item header-nav-item--collection">
                <a href="{{route('video.view')}}" data-animation-role="header-element">
                    Videos
                </a>
            </div>




            <div class="header-nav-item header-nav-item--collection">
                <a href="{{route('about.view')}}" data-animation-role="header-element">
                    About
                </a>
            </div>






            <div class="header-nav-item header-nav-item--collection">
                <a href="{{route('contact.view')}}" data-animation-role="header-element">
                    Contact
                </a>
            </div>






        </nav>
    </div>
</div>


</div>


<!-- Actions -->
<div class="header-actions header-actions--right">



    <div class="header-actions-action header-actions-action--social">


        <a class="icon icon--fill" href="https://www.instagram.com/Foisalelkady_/" target="_blank"
            aria-label="Instagram">
            <svg viewBox="23 23 64 64">
                <use xlink:href="#instagram-unauth-icon" width="110" height="110"></use>
            </svg>
        </a>

        <a class="icon icon--fill" href="https://www.linkedin.com/in/Foisal-elkady" target="_blank"
            aria-label="LinkedIn">
            <svg viewBox="23 23 64 64">
                <use xlink:href="#linkedin-unauth-icon" width="110" height="110"></use>
            </svg>
        </a>

        <a class="icon icon--fill" href="mailto:hello@Foisalelkady.com" target="_blank"
            aria-label="hello@Foisalelkady.com">
            <svg viewBox="23 23 64 64">
                <use xlink:href="#email-icon" width="110" height="110"></use>
            </svg>
        </a>


    </div>









    <div class="showOnMobile">

    </div>


    <div class="showOnDesktop">

    </div>


</div>




<style>
    .top-bun,
    .patty,
    .bottom-bun {
        height: 1px;
    }
</style>

<!-- Burger -->
<div class="header-burger

  menu-overlay-has-visible-non-navigation-items

" data-animation-role="header-element">
    <button class="header-burger-btn burger" data-test="header-burger">
        <span hidden class="js-header-burger-open-title visually-hidden">Open Menu</span>
        <span hidden class="js-header-burger-close-title visually-hidden">Close Menu</span>
        <div class="burger-box">
            <div class="burger-inner header-menu-icon-doubleLineHamburger">
                <div class="top-bun"></div>
                <div class="patty"></div>
                <div class="bottom-bun"></div>
            </div>
        </div>
    </button>
</div>







</div>
<div class="header-display-mobile" data-content-field="site-title">


    <!-- Social -->





    <!-- Title and nav wrapper -->
    <div class="header-title-nav-wrapper">
        <!-- Title -->

        <div class="
                    header-title
                    
                  " data-animation-role="header-element">

            <div class="header-title-logo">
                @foreach ($logos as $logo)
                <a href="{{route('home')}}" data-animation-role="header-element">
                    <img src="{{ !empty($logo->image) ? url('public/upload/logo_images/' . $logo->image) : url('public/upload/no-image.png') }} "
                        alt="Foisal Elkady NYC Food Photographer">

                </a>
                @endforeach
            </div>



        </div>



        <!-- Nav -->
        <div class="header-nav">
            <div class="header-nav-wrapper">
                <nav class="header-nav-list">




                    <div
                        class="header-nav-item header-nav-item--collection header-nav-item--active header-nav-item--homepage">
                        <a href="{{route('home')}}" data-animation-role="header-element" aria-current="page">
                            Home
                        </a>
                    </div>






                    <div class="header-nav-item header-nav-item--folder">
                        <a class="header-nav-folder-title" href="food.html" tabindex="-1"
                            data-animation-role="header-element">
                            Galleries
                        </a>
                        <div class="header-nav-folder-content">

                            @foreach ($categories as $category)

                            <div class="header-nav-folder-item">
                                <a href="{{ route('category.view', $category->id) }}">
                                    <span class="header-nav-folder-item-content">
                                        {{ $category->name }}
                                    </span>
                                </a>
                            </div>
                            @endforeach





                            <div class="header-nav-folder-item">
                                <a href="beverage.html">
                                    <span class="header-nav-folder-item-content">
                                        Beverage
                                    </span>
                                </a>
                            </div>




                            <div class="header-nav-folder-item">
                                <a href="product.html">
                                    <span class="header-nav-folder-item-content">
                                        Product
                                    </span>
                                </a>
                            </div>




                            <div class="header-nav-folder-item">
                                <a href="people.html">
                                    <span class="header-nav-folder-item-content">
                                        People
                                    </span>
                                </a>
                            </div>



                        </div>
                    </div>





                    <div class="header-nav-item header-nav-item--collection">
                        <a href="projects.html" data-animation-role="header-element">
                            Projects
                        </a>
                    </div>






                    <div class="header-nav-item header-nav-item--collection">
                        <a href="about.html" data-animation-role="header-element">
                            About
                        </a>
                    </div>






                    <div class="header-nav-item header-nav-item--collection">
                        <a href="contact.html" data-animation-role="header-element">
                            Contact
                        </a>
                    </div>






                </nav>
            </div>
        </div>


    </div>


    <!-- Actions -->
    <div class="header-actions header-actions--right">



        <div class="header-actions-action header-actions-action--social">


            <a class="icon icon--fill" href="https://www.instagram.com/Foisalelkady_/" target="_blank"
                aria-label="Instagram">
                <svg viewBox="23 23 64 64">
                    <use xlink:href="#instagram-unauth-icon" width="110" height="110"></use>
                </svg>
            </a>

            <a class="icon icon--fill" href="https://www.linkedin.com/in/Foisal-elkady" target="_blank"
                aria-label="LinkedIn">
                <svg viewBox="23 23 64 64">
                    <use xlink:href="#linkedin-unauth-icon" width="110" height="110"></use>
                </svg>
            </a>

            <a class="icon icon--fill" href="mailto:hello@Foisalelkady.com" target="_blank"
                aria-label="hello@Foisalelkady.com">
                <svg viewBox="23 23 64 64">
                    <use xlink:href="#email-icon" width="110" height="110"></use>
                </svg>
            </a>


        </div>









        <div class="showOnMobile">

        </div>


        <div class="showOnDesktop">

        </div>


    </div>




    <style>
        .top-bun,
        .patty,
        .bottom-bun {
            height: 1px;
        }
    </style>

    <!-- Burger -->
    <div class="header-burger

  menu-overlay-has-visible-non-navigation-items

" data-animation-role="header-element">
        <button class="header-burger-btn burger" data-test="header-burger">
            <span hidden class="js-header-burger-open-title visually-hidden">Open Menu</span>
            <span hidden class="js-header-burger-close-title visually-hidden">Close Menu</span>
            <div class="burger-box">
                <div class="burger-inner header-menu-icon-doubleLineHamburger">
                    <div class="top-bun"></div>
                    <div class="patty"></div>
                    <div class="bottom-bun"></div>
                </div>
            </div>
        </button>
    </div>






</div>
</div>
</div>
<!-- (Mobile) Menu Navigation -->
<div class="header-menu header-menu--folder-list
    
    
    
    
    
    " data-current-styles="{
&quot;layout&quot;: &quot;navRight&quot;,
&quot;action&quot;: {
&quot;buttonText&quot;: &quot;Get Started&quot;,
&quot;newWindow&quot;: false
},
&quot;showSocial&quot;: true,
&quot;menuOverlayAnimation&quot;: &quot;fade&quot;,
&quot;cartStyle&quot;: &quot;cart&quot;,
&quot;cartText&quot;: &quot;Cart&quot;,
&quot;showEmptyCartState&quot;: true,
&quot;cartOptions&quot;: {
&quot;iconType&quot;: &quot;stroke-1&quot;,
&quot;cartBorderShape&quot;: &quot;none&quot;,
&quot;cartBorderStyle&quot;: &quot;outline&quot;,
&quot;cartBorderThickness&quot;: {
&quot;unit&quot;: &quot;px&quot;,
&quot;value&quot;: 1.0
}
},
&quot;showButton&quot;: false,
&quot;showCart&quot;: false,
&quot;showAccountLogin&quot;: true,
&quot;headerStyle&quot;: &quot;solid&quot;,
&quot;languagePicker&quot;: {
&quot;enabled&quot;: false,
&quot;iconEnabled&quot;: false,
&quot;iconType&quot;: &quot;globe&quot;,
&quot;flagShape&quot;: &quot;shiny&quot;,
&quot;languageFlags&quot;: [ ]
},
&quot;mobileOptions&quot;: {
&quot;layout&quot;: &quot;logoLeftNavRight&quot;,
&quot;menuIcon&quot;: &quot;doubleLineHamburger&quot;,
&quot;menuIconOptions&quot;: {
&quot;style&quot;: &quot;doubleLineHamburger&quot;,
&quot;thickness&quot;: {
  &quot;unit&quot;: &quot;px&quot;,
  &quot;value&quot;: 1.0
}
}
},
&quot;dynamicOptions&quot;: {
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
  &quot;unit&quot;: &quot;px&quot;,
  &quot;value&quot;: 4.0
}
}
},
&quot;solidOptions&quot;: {
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 100.0
},
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
  &quot;unit&quot;: &quot;px&quot;,
  &quot;value&quot;: 4.0
}
},
&quot;dropShadow&quot;: {
&quot;enabled&quot;: true,
&quot;blur&quot;: {
  &quot;unit&quot;: &quot;px&quot;,
  &quot;value&quot;: 20.0
},
&quot;spread&quot;: {
  &quot;unit&quot;: &quot;px&quot;,
  &quot;value&quot;: -21.0
},
&quot;distance&quot;: {
  &quot;unit&quot;: &quot;px&quot;,
  &quot;value&quot;: 0.0
}
},
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
  &quot;unit&quot;: &quot;px&quot;,
  &quot;value&quot;: 12.0
}
}
},
&quot;gradientOptions&quot;: {
&quot;gradientType&quot;: &quot;faded&quot;,
&quot;headerOpacity&quot;: {
&quot;unit&quot;: &quot;%&quot;,
&quot;value&quot;: 90.0
},
&quot;border&quot;: {
&quot;enabled&quot;: false,
&quot;position&quot;: &quot;allSides&quot;,
&quot;thickness&quot;: {
  &quot;unit&quot;: &quot;px&quot;,
  &quot;value&quot;: 4.0
}
},
&quot;dropShadow&quot;: {
&quot;enabled&quot;: false,
&quot;blur&quot;: {
  &quot;unit&quot;: &quot;px&quot;,
  &quot;value&quot;: 30.0
},
&quot;spread&quot;: {
  &quot;unit&quot;: &quot;px&quot;,
  &quot;value&quot;: 0.0
},
&quot;distance&quot;: {
  &quot;unit&quot;: &quot;px&quot;,
  &quot;value&quot;: 0.0
}
},
&quot;blurBackground&quot;: {
&quot;enabled&quot;: false,
&quot;blurRadius&quot;: {
  &quot;unit&quot;: &quot;px&quot;,
  &quot;value&quot;: 12.0
}
}
},
&quot;showPromotedElement&quot;: false
}" data-section-id="overlay-nav" data-show-account-login="true" data-test="header-menu">
    <div class="header-menu-bg theme-bg--primary"></div>
    <div class="header-menu-nav">
        <nav class="header-menu-nav-list">
            <div data-folder="root" class="header-menu-nav-folder">
                <!-- Menu Navigation -->
                <div class="header-menu-nav-folder-content">

                    <div
                        class="container header-menu-nav-item header-menu-nav-item--collection header-menu-nav-item--active header-menu-nav-item--homepage">
                        <a href="{{route('home')}}" aria-current="page">
                            <div class="header-menu-nav-item-content">
                                Home
                            </div>
                        </a>
                    </div>

                    <div class="container header-menu-nav-item">
                        <a data-folder-id="/galleries-1" href="food.html">
                            <div class="header-menu-nav-item-content">
                                <span class="visually-hidden">Folder:</span>
                                <span>Galleries</span>
                                <span class="chevron chevron--right"></span>
                            </div>
                        </a>
                    </div>
                    <div data-folder="/galleries-1" class="header-menu-nav-folder">
                        <div class="header-menu-nav-folder-content">
                            <div class="header-menu-controls container header-menu-nav-item">
                                <a class="header-menu-controls-control header-menu-controls-control--active"
                                    data-action="back" href="{{route('home')}}">
                                    <span class="chevron chevron--left"></span><span>Back</span>
                                </a>
                            </div>
                            @foreach ($categories as $category)

                            <div class="container header-menu-nav-item">
                                <a href="{{ route('category.view', $category->id) }}">
                                    <span class="header-menu-nav-item-content">
                                        {{ $category->name }}
                                    </span>
                                </a>
                            </div>
                            @endforeach


                        </div>
                    </div>

                    <div class="container header-menu-nav-item header-menu-nav-item--collection">
                        <a href="{{route('project.view')}}">
                            <div class="header-menu-nav-item-content">
                                Projects
                            </div>
                        </a>
                    </div>

                    <div class="container header-menu-nav-item header-menu-nav-item--collection">
                        <a href="{{route('video.view')}}">
                            <div class="header-menu-nav-item-content">
                                Videos
                            </div>
                        </a>
                    </div>

                    <div class="container header-menu-nav-item header-menu-nav-item--collection">
                        <a href="{{route('about.view')}}">
                            <div class="header-menu-nav-item-content">
                                About
                            </div>
                        </a>
                    </div>

                    <div class="container header-menu-nav-item header-menu-nav-item--collection">
                        <a href="{{route('contact.view')}}">
                            <div class="header-menu-nav-item-content">
                                Contact
                            </div>
                        </a>
                    </div>


                </div>

                <div class="header-menu-actions">
                    <div class="header-menu-actions-action header-menu-actions-action--social">
                        <a class="icon icon--lg icon--fill" href="https://www.instagram.com/Foisalelkady_/"
                            target="_blank" aria-label="Instagram">
                            <svg viewBox="23 23 64 64">
                                <use xlink:href="#instagram-unauth-icon" width="110" height="110"></use>
                            </svg>
                        </a>
                    </div>

                    <div class="header-menu-actions-action header-menu-actions-action--social">
                        <a class="icon icon--lg icon--fill" href="https://www.linkedin.com/in/Foisal-elkady"
                            target="_blank" aria-label="LinkedIn">
                            <svg viewBox="23 23 64 64">
                                <use xlink:href="#linkedin-unauth-icon" width="110" height="110"></use>
                            </svg>
                        </a>
                    </div>

                    <div class="header-menu-actions-action header-menu-actions-action--social">
                        <a class="icon icon--lg icon--fill" href="mailto:hello@Foisalelkady.com" target="_blank"
                            aria-label="hello@Foisalelkady.com">
                            <svg viewBox="23 23 64 64">
                                <use xlink:href="#email-icon" width="110" height="110"></use>
                            </svg>
                        </a>
                    </div>
                </div>


            </div>
        </nav>
    </div>
</div>
</header>