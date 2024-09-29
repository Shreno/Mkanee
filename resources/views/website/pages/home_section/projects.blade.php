<section class="flat-brand tf-section" >
                    <div class="container">
                        <div class="row">                      
                            <div class="col-lg-12">
                                <div class="title-section">
                                    <h4>@lang('website.projects')</h4>
                                </div>
                                <div class="swiper-container carousel-5">                            
                                    <div class="swiper-wrapper">
                                        @foreach($projects as $project)
                                        <div class="swiper-slide">
                                            <div class="slogan-logo">
                                                <a href="{{route('all-properties.index',['project'=>$project->id])}}">
                                                    <img src="{{asset($project->image)}}" alt="{{$project->name}}">
                                                </a>
                                            </div>                         
                                        </div>
                                        @endforeach
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>