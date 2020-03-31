@extends('heart_choices.hc_master')

@section('content_one')
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
<div class="li-main-blog-page pt-60 pb-55" style="margin:auto;">
    <div class="container" style="background-color: beige;padding: 30px 20px">
        <div class="row">
            {{-- fileter area --}}
            <div class="col-md-5">
                <div class="img_to_show">
                  <img src="avatar/{{$info_personal->id}}.jpg" alt=""  >
                  <div class="gra"></div>
                </div>
            </div>
            <!-- end filter area -->
{{--            @foreach($info_personal as $info_per)--}}
                <div class="col-md-7">
                    <h2 class="text_right" style="margin-left:10%">Information</h2>
                    <table class="text-left"  style="margin-left: 10%;">
                        <tr>
                          <td style="width: 200px;">Full Name:</td>
                          <td style="padding:5px;">  {{$info_personal->name}}</td>
                        </tr>
                        <tr>
                          <td style="width: 200px;">Sex:</td>
                          <td style="padding:5px;">{{$info_personal->sex}}</td>
                        </tr>
                        <tr>
                          <td style="width: 200px;">Height: </td>
                          <td style="padding:5px;">{{$info_personal->height}} m</td>
                        </tr>
                        <tr>
                            <td style="width: 200px;">Weight: </td>
                            <td style="padding:5px;">{{$info_personal->weight}} kg</td>
                        </tr>
                        <tr>
                          <td style="width: 200px;">Age:</td>
                          <td style="padding:5px;">{{$info_personal->age}}</td>
                        </tr>
                        <tr>
                          <td style="width: 200px;">Hobby:</td>
                          <td style="padding:5px;">{{$info_personal->hobby}}</td>
                        </tr>
                        <tr>
                          <td style="width: 200px;">Adress:</td>
                          <td style="padding:5px;">{{$info_personal->address}}</td>
                        </tr>
                        <tr>
                          <td style="width: 200px;">State:</td>
                          <td style="padding:5px;">{{$info_personal->state}}</td>
                        </tr>
                    </table>
                </div>
{{--            @endforeach--}}
            <!-- Result Area -->

            <!-- Li's Main Content Area End Here -->
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6 text-center" style="margin-bottom:30px;">
          <a name="" id="Midnights" class="btn btn-success " href="{{route('hc_list.index')}}" role="button">BACK</a>
        </div>
        <div class="col-md-6 text-center" style="margin-bottom:30px;">
            @if($user_if->state == "Single")
            @if($info_personal->sex != $user_if->sex)
              <button type="button" id="Midnights" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Send request dating to {{$info_personal->name}}</button>
            @endif
            @endif
        </div>
    </div>
</div>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">New Request</h4>
      </div>
      <form method="post" action="{{route('sendMessage')}}">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="text" name="id" style="visibility: hidden;" value="{{$info_personal->id}}">
        <div class="modal-body">
            <h5>Send request dating to {{$info_personal->name}}</h5>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Message:</label>
              <textarea name="message" class="form-control" id="message-text" style="height: 100px"></textarea>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" id="Midnights" class="btn btn-primary" >Send message</button>
        </div>
        </form>
    </div>
  </div>
</div>
@endsection
