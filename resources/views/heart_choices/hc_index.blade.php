@extends('heart_choices.hc_master')

@section('content_all')


 <div class="li-main-blog-page pt-60 pb-55" style="width:94%; margin:auto;">
    <section id="about" class="home-section text-center" style="margin-bottom:-100px;">
        <div class="heading-about">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 col-lg-offset-2">
                <div class="wow bounceInDown" data-wow-delay="0.4s">
                  <div class="section-heading">
                    <h2>HEART'S CHOICES</h2>
                    <i class="fa fa-2x fa-angle-down"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
    <div class="container_fluid">
        <div class="row">
            {{-- fileter area --}}
            <div class="col-md-3 order-lg-1 order-2 text-center" id="cate_gories">
                <div class="li-blog-sidebar-wrapper" style="margin-top:43px;">
                    <form action="{{route('hc_list.index')}}" method="get">
                        <div class="li-blog-sidebar text-center">
                            <h3 class="li-blog-sidebar-title" style="margin-bottom:10px;">Your Selects</h3>
                            <button id="Midnights" class="btn btn-success" type="submit">Filter</button>
                        </div>
                        <div class="li-blog-sidebar" style="margin-top:30px;">
                            <div class="li-sidebar-search-form">
                                <input type="text" name="name" class="li-search-field" placeholder="Name">
                            </div>
                        </div>
                        <div class="li-blog-sidebar" style="margin-top:10px;">
                            <div class="li-sidebar-search-form">
                                <input type="text" name="address" class="li-search-field" placeholder="Address">
                            </div>
                        </div>
                        <div class="li-blog-sidebar" style="margin-top:10px;">
                            <select name="height" id="hc_height" class="li-search-field" >
                                <option value="">Height</option>
                                <option value="0"> ~1m30 </option>
                                <option value="1.29">1m30 => 1m40</option>
                                <option value="1.39">1m40 => 1m50</option>
                                <option value="1.49">1m50 => 1m60</option>
                                <option value="1.59">1m60 => 1m70</option>
                                <option value="1.69">1m70 => 1m80</option>
                                <option value="1.79">1m80 => 1m90</option>
                                <option value="1.89">>1m90</option>
                            </select>
                        </div>
                        <div class="li-blog-sidebar" style="margin-top:10px;">
                            <select name="weight" id="hc_weight" >
                                <option value=" ">Weight</option>
                                <option value="0"> ~30kg </option>
                                <option value="29.9">30kg => 40kg</option>
                                <option value="39.9">40kg => 50kg</option>
                                <option value="49.9">50kg => 60kg</option>
                                <option value="59.9">60kg => 70kg</option>
                                <option value="69.9">70kg => 80kg</option>
                                <option value="79.9">80kg => 90kg</option>
                                <option value="89.9">>90kg</option>
                            </select>
                        </div>
                        <div class="li-blog-sidebar" style="margin-top:10px;">
                            <select name="year" id="hc_year">
                                <option value=" ">Year</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                                <option value="1989">1989</option>
                                <option value="1988">1988</option>
                                <option value="1987">1987</option>
                                <option value="1986">1986</option>
                                <option value="1985">1985</option>
                                <option value="1984">1984</option>
                                <option value="1983">1983</option>
                                <option value="1982">1982</option>
                                <option value="1981">1981</option>
                                <option value="1980">1980</option>
                            </select>
                        </div>
                        <div class="li-blog-sidebar" style="margin-top:10px;">
                            <select name="state" id="hc_state">
                                <option value="">State</option>
                                <option value="Single">Single</option>
                                <option value="Dating">Dating</option>
                            </select>
                        </div>
                        <div class="li-blog-sidebar" style="margin-top:10px;">
                            <select name="sex" id="hc_sex" >
                                <option value="">Sex</option>
                                <option value="Male">Male</option>
                                <option value="Fe_Male">Fe_Male</option>
                            </select>
                        </div>
                        <div class="li-blog-sidebar" style="margin-top:10px;visibility: hidden;" id="fe_round">

                        </div>
                        <div class="li-blog-sidebar" style="margin-top:10px;visibility: hidden;" id="fe_round">

                        </div>
                        <div class="li-blog-sidebar" style="margin-top:10px;visibility: hidden;" id="fe_round">

                        </div>
                    </form>
                </div>
            </div>
            <!-- end filter area -->
            <div class="col-md-9">
                <div class="row">
                    <div><h5 style="color: seagreen;padding-left:50px;">Found {{$info->total()}} people</h5></div>
                </div>
                <div class="row hc_one_row">
                   
                    @foreach($info as $inf)
                    @if($inf->sex == "Male")
                        <div class="col-md-4 text-center hc_one_col hc_male" >
                            <img class="avatar" src="avatar/{{$inf->id}}.jpg" alt="">
                            <h3 class="user_name">{{$inf->name}}</h3>
                            <div class="hc_white"></div>
                            <h4 class="hc_address">{{$inf->address}}</h4>
                            <h4 class="hc_age ">{{$inf->date}}</h4>
                            <h4 class="hc_state">{{$inf->state}}</h4>
                            <div class="readmore" style="margin:-5px 0 5px 0;">
                                <a href="heart_choice_detail/{{$inf->id}}">Views more ... <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    @endif
                    @if($inf->sex == "Fe_Male")
                        <div class="col-md-4 text-center hc_one_col hc_fe_male">
                            <img class="avatar" src="avatar/{{$inf->id}}.jpg" alt="">
                            <h3 class="user_name">{{$inf->name}}</h3>
                            <div class="hc_white"></div>
                            <h4 class="hc_address">{{$inf->address}}</h4>
                            <h4 class="hc_age">{{$inf->date}}</h4>
                            <h4 class="hc_state">{{$inf->state}}</h4>
                            <div class="readmore" style="margin:-5px 0 5px 0;">
                                <a href="heart_choice_detail/{{$inf->id}}">Views more ... <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    @endif
                    @endforeach
                </div>
                <div class="row" style="text-align: center">{{$info->links()}}</div>
            </div>
            <!-- Result Area -->

            <!-- Li's Main Content Area End Here -->
        </div>
    </div>
</div>

@endsection
@section('script')
    <script type="text/javascript">
        {{--function filter() {--}}
        {{--    $.ajax({--}}
        {{--        url: "{{ URL::route('filter.data') }}",--}}
        {{--        type: 'get',--}}
        {{--        data: {--}}
        {{--           year : $('#hc_year').val(),--}}
        {{--        },--}}
        {{--        success: function () {--}}

        {{--        }--}}
        {{--    });--}}
        {{--}--}}
    </script>
@endsection



{{--@section('script')--}}
{{--    <script type="text/javascript">--}}
{{--        $(document).ready(function() {--}}
{{--            $('#hc_sex').change(function () {--}}
{{--                var sex = $(this).val();--}}
{{--                $.get("ajax/getSexFilter/"+sex, function (data) {--}}

{{--                });--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
{{--@endsection--}}
