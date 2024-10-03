<div class="swiper-container2" >    
                                    <div class="one-carousel owl-carousel owl-theme">
                                        @foreach($properties as $property)
                                        <!-- col 1 -->
                                        <div class="slide-item">
                                            <div class="box box-dream hv-one">
                                                <div class="image-group relative ">                                                   
                                                     <div class="swiper-container carousel-2 img-style">    
                                                        <a href="{{ route('all-properties.show', $property->id) }}" class="icon-plus"><img src="{{asset('assets/images/icon/plus.svg')}}" alt="images"></a>
                                                        <div class="swiper-wrapper ">
                                                            @foreach($property->images as $image)
                                                            <div class="swiper-slide"><img src="{{asset($image->image)}}" alt="images"></div>
                                                            @endforeach
                                                        </div>
                                                        <div class="pagi2"><div class="swiper-pagination2" data-chat="person1">  </div> </div>
                                                        <div class="swiper-button-next2 " data-chat="person1" ><i class="fal fa-arrow-right"></i></div>
                                                        <div class="swiper-button-prev2 " data-chat="person1" ><i class="fal fa-arrow-left"></i> </div>                                        
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h3 class="link-style-1"><a href="{{ route('all-properties.show', $property->id) }}">{{$property->title}}</a> </h3>
                                                    <div class="text-address"><p class="p-12">{{$property->address}}</p></div>
                                                    <div class="money fs-18 fw-6 text-color-6"><a href="{{ route('all-properties.show', $property->id) }}">${{$property->rate_per_day}}</a></div>  
                                                    <div class="days-box flex justify-space align-center">
                                                    @if($property->project !=NULL)
                                                        <div class="img-author"><img src="{{asset($property->project ? $property->project->image : '')}}" alt="images"></div>
                                                    @endif
                                                        <div class="days">{{$property->project ? $property->project->name : ''}} </div>
                                                    </div>                                           
                                                </div>
                                            </div>
                                        </div>
                                        <!-- col 2 --> 
                                         @endforeach

                                     
                                      
                                    </div>
                                </div>