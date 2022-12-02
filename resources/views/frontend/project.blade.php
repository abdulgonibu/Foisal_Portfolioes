@extends('frontend.layouts.master')
@section('content')
<section data-test="page-section" data-section-theme="bright" class='page-section
    
      content-collection
      full-bleed-section
      collection-type-portfolio-grid-basic
    
    background-width--full-bleed
    
      section-height--medium
    
    
      content-width--wide
    
    horizontal-alignment--center
    vertical-alignment--middle
    
      
    
    
    bright' data-section-id="62857c200b7d3454d92095cd" data-controller="SectionWrapperController" data-current-styles="{
      &quot;imageOverlayOpacity&quot;: 0.15,
      &quot;backgroundWidth&quot;: &quot;background-width--full-bleed&quot;,
      &quot;sectionHeight&quot;: &quot;section-height--medium&quot;,
      &quot;customSectionHeight&quot;: 10,
      &quot;horizontalAlignment&quot;: &quot;horizontal-alignment--center&quot;,
      &quot;verticalAlignment&quot;: &quot;vertical-alignment--middle&quot;,
      &quot;contentWidth&quot;: &quot;content-width--wide&quot;,
      &quot;customContentWidth&quot;: 50,
      &quot;sectionTheme&quot;: &quot;bright&quot;,
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
      &quot;typeName&quot;: &quot;portfolio-grid-basic&quot;
    }" data-animation="none">
  <div class="section-background">



  </div>
  <div class="content-wrapper" style='
      
      
    '>
    <div class="content">
      <div id="gridThumbs" class="portfolio-grid-basic grid-wrapper collection-content-wrapper"
        data-controller="GridImages" data-animation-role="section">
        @foreach ($projects as $project)
        <a class="grid-item" href="{{ route('projects.details', $project->id) }}">
          <div class="grid-image">
            <div class="grid-image-inner-wrapper">
              <img
                src="{{ !empty($project->image) ? url('public/upload/projects_images/' . $project->image) : url('public/upload/no-image.png') }}">
            </div>
          </div>
          <div class="portfolio-text">
            <h3 class="portfolio-title">{{$project->name}}</h3>
          </div>
        </a>
        @endforeach


      </div>
    </div>
  </div>

</section>
@endsection