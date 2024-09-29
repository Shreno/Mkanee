<section class="flat-search-area wg-search-area">
                    <div class="container-full">
                        <div class="row">                      
                            <div class="col-lg-12">
                                <div class="heading-section center">
                                    <h2>@lang('website.Search for Properties by Project')</h2>
                                    <p class="text-color-4">@lang('website.Find your dream apartment with our listings')</p>
                                </div>
                                <div class="wrap-search-area flex">
                                    <!-- @foreach($projects as $project)
                                    <div class="box">
                                        <div class="images">
                                            <img class="imgs" src="{{asset($project->image)}}" alt="images">
                                            <a href="{{route('all-properties.index',['project'=>$project->id])}}" class="icon-plus">
                                                <img src="{{asset('assets/images/icon/plus.svg')}}" alt="images"></a>
                                        </div>
                                        <div class="content">
                                            <h3 class="link-style-3"><a href="{{route('all-properties.index',['project'=>$project->id])}}">{{$project->name}}</a></h3>
                                            <p class="text-color-1">قائمة {{count($project->property)}}</p>                       
                                        </div>
                                    </div>
                                    @endforeach -->
                                    @foreach($cities as $city)
                    <div class="box">
                        <div class="images">
                            <img class="imgs" style="height: 200px!important;" src="{{ asset($city->image ) }}" alt="images">
                            <a href="{{route('all-properties.index',['city'=>$city->id])}}" class="icon-plus">
                                <img src="{{ asset('website/assets/images/icon/plus.svg') }}" alt="images">
                            </a>
                        </div>
                        <div class="content">
                            <h3 class="link-style-3">
                                <a href="{{route('all-properties.index',['city'=>$city->name])}}">{{$city->name}}</a>
                            </h3>
                            <p class="text-color-1">
                                @lang('website.listing_count') {{ $city->properties()->distinct()->count() }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                                  
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </section>