<!doctype html>
<html xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" lang="en-US">

<!-- Mirrored from www.Foisalelkady.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Oct 2022 11:52:45 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
@include('frontend.layouts.header')


<!-- Title and nav wrapper -->
<div class="header-title-nav-wrapper">

    <link href="https://fonts.cdnfonts.com/css/corbel" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/segoe-ui-4" rel="stylesheet">


    @include('frontend.layouts.menu')

    <style>
        * {
            box-sizing: border-box;
            background-color: #F0F0F0 !important;
            font-family: 'Segoe UI', sans-serif !important;
        }

        body {
            margin: 0;
            font-family: Arial;
        }

        .header {
            text-align: center;
            /* // padding: 32px; */
        }

        /* Create four equal columns that sits next to each other */
        .column {
            display: grid;
            grid-template-columns: repeat(3, 1fr) !important;
            gap: 10px;

        }

        .column img {
            width: 100;
        }


        /* Responsive layout - makes a two column-layout instead of four columns */
        @media screen and (max-width: 800px) {
            .column {
                display: grid;
                grid-template-columns: repeat(3, 1fr) !important;
                gap: 10px;
            }
        }

        /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
            .column {
                display: grid;
                grid-template-columns: repeat(1, 1fr) !important;
                gap: 10px;
            }
        }
    </style>
    <main id="page" class="container" role="main">

        <article class="sections" data-page-sections="627d5551ed6f533f22a512b9" id="sections">



            <section data-test="page-section" data-section-theme="" class='page-section
    
      gallery-section
      full-bleed-section
    
    background-width--full-bleed
    
      section-height--medium
    
    
      content-width--wide
    
    horizontal-alignment--center
    vertical-alignment--middle
    
      
    
    
    ' data-section-id="627d5551ed6f533f22a512bd" data-controller="SectionWrapperController" data-current-styles="{
&quot;backgroundWidth&quot;: &quot;background-width--full-bleed&quot;,
&quot;imageOverlayOpacity&quot;: 0.15,
&quot;sectionHeight&quot;: &quot;section-height--medium&quot;,
&quot;horizontalAlignment&quot;: &quot;horizontal-alignment--center&quot;,
&quot;verticalAlignment&quot;: &quot;vertical-alignment--middle&quot;,
&quot;contentWidth&quot;: &quot;content-width--wide&quot;,
&quot;sectionAnimation&quot;: &quot;none&quot;,
&quot;backgroundMode&quot;: &quot;image&quot;,
&quot;backgroundImage&quot;: null
}" data-current-context="{
&quot;video&quot;: {
&quot;playbackSpeed&quot;: 0.5,
&quot;filter&quot;: 1,
&quot;filterStrength&quot;: 0,
&quot;zoom&quot;: 0
},
&quot;backgroundImageId&quot;: null,
&quot;backgroundMediaEffect&quot;: null,
&quot;typeName&quot;: &quot;portfolio-grid-overlay&quot;
}" data-animation="none" data-json-schema-section>
                <div class="section-background">



                </div>
                <div class="content-wrapper" style=''>
                    <div class="content">
                        <div class="gallery gallery-section-wrapper" style="min-height: 100px;">
                            <div class="gallery" style="min-height: 100px;">



                                <!-- Gallery Masonry -->

                                <div class="gallery-masonry" data-controller="GalleryMasonry"
                                    data-section-id="627d5551ed6f533f22a512bd" data-animation="site-default"
                                    data-lightbox="" data-width="full" data-props='{
"scrollAnimation": "site-default",
"gutter": 60,
"numColumns": 2,
"width": "full",
"lightboxEnabled": true
}' data-show-captions="false" data-test="gallery-grid-masonry">
                                    @yield('content')

                                    <div class="gallery-lightbox-outer-wrapper" data-lightbox="true"
                                        data-controller="Lightbox" data-lightbox-section-id=627d5551ed6f533f22a512bd>
                                        <div role="dialog" aria-label="Gallery" class="
    gallery-lightbox
    
    
  ">
                                            <div class="gallery-lightbox-background"></div>

                                            <div class="gallery-lightbox-header">
                                                <button class="gallery-lightbox-close-btn" aria-label="Close" data-close
                                                    data-test="gallery-lightbox-close">
                                                    <div class="gallery-lightbox-close-btn-icon">
                                                        <svg viewBox="0 0 40 40">
                                                            <path d="M4.3,35.7L35.7,4.3" />
                                                            <path d="M4.3,4.3l31.4,31.4" />
                                                        </svg>
                                                    </div>
                                                </button>
                                            </div>


                                            <div class="gallery-lightbox-wrapper">
                                                <div class="gallery-lightbox-list">
                                                    <figure class="gallery-lightbox-item"
                                                        data-slide-url="3g4b9wg5jvfvu03fev5eck12lupfrf"
                                                        data-test="gallery-lightbox-item">
                                                        <div class="gallery-lightbox-item-wrapper">
                                                            <div class="gallery-lightbox-item-src">
                                                                <div class="
                                                                gallery-lightbox-item-img
                                                                content-fit
                                                                ">
                                                                    <img data-src="{{asset('public/frontend/images/1.jpg')}}"
                                                                        data-image="{{asset('public/frontend/images/1.jpg')}}"
                                                                        data-image-dimensions="3668x2934"
                                                                        data-image-focal-point="0.5,0.5" alt="Foisal Elkady NYC Commercial Food Photographer - Cuban Rice and Chicken and Beans, Target Food and 
                                                                        Beverage" data-load="false" />


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figure>

                                                    <figure class="gallery-lightbox-item"
                                                        data-slide-url="pop9u6qo01kbcmtua9zohcro7krloy"
                                                        data-test="gallery-lightbox-item">
                                                        <div class="gallery-lightbox-item-wrapper">
                                                            <div class="gallery-lightbox-item-src">
                                                                <div class="
                                                                gallery-lightbox-item-img
                                                                content-fit
                                                                ">

                                                                    <img data-src="{{asset('public/frontend/images/1.jpg')}}"
                                                                        data-image="{{asset('public/frontend/images/1.jpg')}}"
                                                                        data-image-dimensions="2403x1431"
                                                                        data-image-focal-point="0.5,0.5"
                                                                        alt="Foisal Elkady NYC Commercial Food Photographer - Hot Dogs and Chips, Target Food and Beverage"
                                                                        data-load="false" />


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </div>
                                                <div class="gallery-lightbox-controls"
                                                    data-test="gallery-lightbox-controls">
                                                    <div class="gallery-lightbox-control" data-previous
                                                        data-test="gallery-lightbox-control-previous">
                                                        <button class="gallery-lightbox-control-btn"
                                                            aria-label="Previous Slide">
                                                            <div class="gallery-lightbox-control-btn-icon">
                                                                <svg class="caret-left-icon--small" viewBox="0 0 9 16">
                                                                    <polyline fill="none" stroke-miterlimit="10"
                                                                        points="7.3,14.7 2.5,8 7.3,1.2 " />
                                                                </svg>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div class="gallery-lightbox-control" data-next
                                                        data-test="gallery-lightbox-control-next">
                                                        <button class="gallery-lightbox-control-btn"
                                                            aria-label="Next Slide">
                                                            <div class="gallery-lightbox-control-btn-icon">
                                                                <svg class="caret-right-icon--small" viewBox="0 0 9 16">
                                                                    <polyline fill="none" stroke-miterlimit="10"
                                                                        points="1.6,1.2 6.5,7.9 1.6,14.7 " />
                                                                </svg>
                                                            </div>
                                                        </button>
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
            </section>
            @include('frontend.layouts.footer')
        </article>
    </main>
    <script type="text/javascript">
        const firstSection = document.querySelector('.page-section');
        const header = document.querySelector('.header');
        const mobileOverlayNav = document.querySelector('.header-menu');
        const sectionBackground = firstSection ? firstSection.querySelector('.section-background') : null;
        const headerHeight = header ? header.getBoundingClientRect().height : 0;
        const firstSectionHasBackground = firstSection ? firstSection.className.indexOf('has-background') >= 0 : false;
        const isFirstSectionInset = firstSection ? firstSection.className.indexOf('background-width--inset') >= 0 : false;
        const isLayoutEngineSection = firstSection ? firstSection.className.indexOf('layout-engine-section') >= 0 : false;

        if (firstSection) {
            firstSection.style.paddingTop = headerHeight + 'px';
        }
        if (sectionBackground && isLayoutEngineSection) {
            if (isFirstSectionInset) {
                sectionBackground.style.top = headerHeight + 'px';
            } else {
                sectionBackground.style.top = '';
            }
        }
        //# sourceURL=headerPositioning.js
    </script>


    <footer class="sections" id="footer-sections" data-footer-sections>



        <section data-test="page-section" data-section-theme="bright-inverse" class='page-section
    
      layout-engine-section
    
    background-width--full-bleed
    
      section-height--small
    
    
      content-width--wide
    
    horizontal-alignment--center
    vertical-alignment--middle
    
      
    
    
    bright-inverse' data-section-id="627cf2939b71bf3f24f1154c" data-controller="SectionWrapperController"
            data-current-styles="{
&quot;imageOverlayOpacity&quot;: 0.15,
&quot;backgroundWidth&quot;: &quot;background-width--full-bleed&quot;,
&quot;sectionHeight&quot;: &quot;section-height--small&quot;,
&quot;customSectionHeight&quot;: 20,
&quot;horizontalAlignment&quot;: &quot;horizontal-alignment--center&quot;,
&quot;verticalAlignment&quot;: &quot;vertical-alignment--middle&quot;,
&quot;contentWidth&quot;: &quot;content-width--wide&quot;,
&quot;customContentWidth&quot;: 100,
&quot;sectionTheme&quot;: &quot;bright-inverse&quot;,
&quot;sectionAnimation&quot;: &quot;none&quot;,
&quot;backgroundMode&quot;: &quot;image&quot;
}" data-current-context="{
&quot;video&quot;: {
&quot;playbackSpeed&quot;: 0.5,
&quot;filter&quot;: 1,
&quot;filterStrength&quot;: 0,
&quot;zoom&quot;: 0,
&quot;videoSourceProvider&quot;: &quot;none&quot;
},
&quot;backgroundImageId&quot;: null,
&quot;backgroundMediaEffect&quot;: null,
&quot;typeName&quot;: &quot;portfolio-grid-overlay&quot;
}" data-animation="none">
            <div class="section-background">
            </div>
            <div class="content-wrapper" style=''>
                <div class="content">
                    <div class="sqs-layout sqs-grid-12 columns-12" data-type="page-section"
                        id="page-section-627cf2939b71bf3f24f1154c">
                        <div class="row sqs-row">
                            <div class="col sqs-col-12 span-12">
                                <div class="html-block sqs-block-html" data-block-type="2"
                                    id="block-fa7e23b5a9db95abe486">
                                    <div class="sqs-block-content">

                                        <h3 style="white-space:pre-wrap;">Foysal khan is a commercial photographer</h3>
                                        <h4 style="white-space:pre-wrap;"> <a href="">Newsletter</a>
                                        </h4>
                                        <p class="" style=";"><strong>© </strong>Copyright 2022,
                                            All rights reserved.</p>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>



    </footer>

</div>


<script type="text/javascript">
    $(document).ready(function(){
    $('.gallery-item').magnificPopup({
    type: 'image',
    gallery:{
    enabled:true
  }
});
})

</script>


<script src="{{ asset('public/js/jquery-3.4.1.js') }}"></script>

<script>
    function myFunction(){

    alert("hello");

}


</script>








<script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<script src="{{ asset('public/js/dist/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('public/js/dist/jquery.magnific-popup.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"
    integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"
    integrity="sha512-C1zvdb9R55RAkl6xCLTPt+Wmcz6s+ccOvcr6G57lbm8M2fbgn2SUjUJbQ13fEyjuLViwe97uJvwa1EUf4F1Akw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="{{ asset('public/js/main.js') }}"></script>

<script src="{{ asset('public/js/jquery-3.6.1.min.js') }}"></script>

<script
    src="{{asset('public/frontend/static/vta/5c5a519771c10ba3470d8101/scripts/site-bundle.9812a83c3e8f1ea326dca0ea01bb79f1.js')}}"
    type="text/javascript"></script>

<svg xmlns="http://www.w3.org/2000/svg" version="1.1" style="display:none" data-usage="social-icons-svg">
    <symbol id="instagram-unauth-icon" viewBox="0 0 64 64">
        <path
            d="M46.91,25.816c-0.073-1.597-0.326-2.687-0.697-3.641c-0.383-0.986-0.896-1.823-1.73-2.657c-0.834-0.834-1.67-1.347-2.657-1.73c-0.954-0.371-2.045-0.624-3.641-0.697C36.585,17.017,36.074,17,32,17s-4.585,0.017-6.184,0.09c-1.597,0.073-2.687,0.326-3.641,0.697c-0.986,0.383-1.823,0.896-2.657,1.73c-0.834,0.834-1.347,1.67-1.73,2.657c-0.371,0.954-0.624,2.045-0.697,3.641C17.017,27.415,17,27.926,17,32c0,4.074,0.017,4.585,0.09,6.184c0.073,1.597,0.326,2.687,0.697,3.641c0.383,0.986,0.896,1.823,1.73,2.657c0.834,0.834,1.67,1.347,2.657,1.73c0.954,0.371,2.045,0.624,3.641,0.697C27.415,46.983,27.926,47,32,47s4.585-0.017,6.184-0.09c1.597-0.073,2.687-0.326,3.641-0.697c0.986-0.383,1.823-0.896,2.657-1.73c0.834-0.834,1.347-1.67,1.73-2.657c0.371-0.954,0.624-2.045,0.697-3.641C46.983,36.585,47,36.074,47,32S46.983,27.415,46.91,25.816z M44.21,38.061c-0.067,1.462-0.311,2.257-0.516,2.785c-0.272,0.7-0.597,1.2-1.122,1.725c-0.525,0.525-1.025,0.85-1.725,1.122c-0.529,0.205-1.323,0.45-2.785,0.516c-1.581,0.072-2.056,0.087-6.061,0.087s-4.48-0.015-6.061-0.087c-1.462-0.067-2.257-0.311-2.785-0.516c-0.7-0.272-1.2-0.597-1.725-1.122c-0.525-0.525-0.85-1.025-1.122-1.725c-0.205-0.529-0.45-1.323-0.516-2.785c-0.072-1.582-0.087-2.056-0.087-6.061s0.015-4.48,0.087-6.061c0.067-1.462,0.311-2.257,0.516-2.785c0.272-0.7,0.597-1.2,1.122-1.725c0.525-0.525,1.025-0.85,1.725-1.122c0.529-0.205,1.323-0.45,2.785-0.516c1.582-0.072,2.056-0.087,6.061-0.087s4.48,0.015,6.061,0.087c1.462,0.067,2.257,0.311,2.785,0.516c0.7,0.272,1.2,0.597,1.725,1.122c0.525,0.525,0.85,1.025,1.122,1.725c0.205,0.529,0.45,1.323,0.516,2.785c0.072,1.582,0.087,2.056,0.087,6.061S44.282,36.48,44.21,38.061z M32,24.297c-4.254,0-7.703,3.449-7.703,7.703c0,4.254,3.449,7.703,7.703,7.703c4.254,0,7.703-3.449,7.703-7.703C39.703,27.746,36.254,24.297,32,24.297z M32,37c-2.761,0-5-2.239-5-5c0-2.761,2.239-5,5-5s5,2.239,5,5C37,34.761,34.761,37,32,37z M40.007,22.193c-0.994,0-1.8,0.806-1.8,1.8c0,0.994,0.806,1.8,1.8,1.8c0.994,0,1.8-0.806,1.8-1.8C41.807,22.999,41.001,22.193,40.007,22.193z" />
    </symbol>
    <symbol id="instagram-unauth-mask" viewBox="0 0 64 64">
        <path
            d="M43.693,23.153c-0.272-0.7-0.597-1.2-1.122-1.725c-0.525-0.525-1.025-0.85-1.725-1.122c-0.529-0.205-1.323-0.45-2.785-0.517c-1.582-0.072-2.056-0.087-6.061-0.087s-4.48,0.015-6.061,0.087c-1.462,0.067-2.257,0.311-2.785,0.517c-0.7,0.272-1.2,0.597-1.725,1.122c-0.525,0.525-0.85,1.025-1.122,1.725c-0.205,0.529-0.45,1.323-0.516,2.785c-0.072,1.582-0.087,2.056-0.087,6.061s0.015,4.48,0.087,6.061c0.067,1.462,0.311,2.257,0.516,2.785c0.272,0.7,0.597,1.2,1.122,1.725s1.025,0.85,1.725,1.122c0.529,0.205,1.323,0.45,2.785,0.516c1.581,0.072,2.056,0.087,6.061,0.087s4.48-0.015,6.061-0.087c1.462-0.067,2.257-0.311,2.785-0.516c0.7-0.272,1.2-0.597,1.725-1.122s0.85-1.025,1.122-1.725c0.205-0.529,0.45-1.323,0.516-2.785c0.072-1.582,0.087-2.056,0.087-6.061s-0.015-4.48-0.087-6.061C44.143,24.476,43.899,23.682,43.693,23.153z M32,39.703c-4.254,0-7.703-3.449-7.703-7.703s3.449-7.703,7.703-7.703s7.703,3.449,7.703,7.703S36.254,39.703,32,39.703z M40.007,25.793c-0.994,0-1.8-0.806-1.8-1.8c0-0.994,0.806-1.8,1.8-1.8c0.994,0,1.8,0.806,1.8,1.8C41.807,24.987,41.001,25.793,40.007,25.793z M0,0v64h64V0H0z M46.91,38.184c-0.073,1.597-0.326,2.687-0.697,3.641c-0.383,0.986-0.896,1.823-1.73,2.657c-0.834,0.834-1.67,1.347-2.657,1.73c-0.954,0.371-2.044,0.624-3.641,0.697C36.585,46.983,36.074,47,32,47s-4.585-0.017-6.184-0.09c-1.597-0.073-2.687-0.326-3.641-0.697c-0.986-0.383-1.823-0.896-2.657-1.73c-0.834-0.834-1.347-1.67-1.73-2.657c-0.371-0.954-0.624-2.044-0.697-3.641C17.017,36.585,17,36.074,17,32c0-4.074,0.017-4.585,0.09-6.185c0.073-1.597,0.326-2.687,0.697-3.641c0.383-0.986,0.896-1.823,1.73-2.657c0.834-0.834,1.67-1.347,2.657-1.73c0.954-0.371,2.045-0.624,3.641-0.697C27.415,17.017,27.926,17,32,17s4.585,0.017,6.184,0.09c1.597,0.073,2.687,0.326,3.641,0.697c0.986,0.383,1.823,0.896,2.657,1.73c0.834,0.834,1.347,1.67,1.73,2.657c0.371,0.954,0.624,2.044,0.697,3.641C46.983,27.415,47,27.926,47,32C47,36.074,46.983,36.585,46.91,38.184z M32,27c-2.761,0-5,2.239-5,5s2.239,5,5,5s5-2.239,5-5S34.761,27,32,27z" />
    </symbol>
    <symbol id="linkedin-unauth-icon" viewBox="0 0 64 64">
        <path
            d="M20.4,44h5.4V26.6h-5.4V44z M23.1,18c-1.7,0-3.1,1.4-3.1,3.1c0,1.7,1.4,3.1,3.1,3.1 c1.7,0,3.1-1.4,3.1-3.1C26.2,19.4,24.8,18,23.1,18z M39.5,26.2c-2.6,0-4.4,1.4-5.1,2.8h-0.1v-2.4h-5.2V44h5.4v-8.6 c0-2.3,0.4-4.5,3.2-4.5c2.8,0,2.8,2.6,2.8,4.6V44H46v-9.5C46,29.8,45,26.2,39.5,26.2z" />
    </symbol>
    <symbol id="linkedin-unauth-mask" viewBox="0 0 64 64">
        <path
            d="M0,0v64h64V0H0z M25.8,44h-5.4V26.6h5.4V44z M23.1,24.3c-1.7,0-3.1-1.4-3.1-3.1c0-1.7,1.4-3.1,3.1-3.1 c1.7,0,3.1,1.4,3.1,3.1C26.2,22.9,24.8,24.3,23.1,24.3z M46,44h-5.4v-8.4c0-2,0-4.6-2.8-4.6c-2.8,0-3.2,2.2-3.2,4.5V44h-5.4V26.6 h5.2V29h0.1c0.7-1.4,2.5-2.8,5.1-2.8c5.5,0,6.5,3.6,6.5,8.3V44z" />
    </symbol>
    <symbol id="email-icon" viewBox="0 0 64 64">
        <path d="M17,22v20h30V22H17z M41.1,25L32,32.1L22.9,25H41.1z M20,39V26.6l12,9.3l12-9.3V39H20z" />
    </symbol>
    <symbol id="email-mask" viewBox="0 0 64 64">
        <path
            d="M41.1,25H22.9l9.1,7.1L41.1,25z M44,26.6l-12,9.3l-12-9.3V39h24V26.6z M0,0v64h64V0H0z M47,42H17V22h30V42z" />
    </symbol>
</svg>

</body>

<!-- Mirrored from www.Foisalelkady.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Oct 2022 11:53:45 GMT -->

</html>