@extends('layouts.frontend')

@section('title',  "聯絡我們 - " )

@section('meta')
    <meta name="description" content="聯絡我們"/>
    <meta name="title" content="聯絡我們 - "/>
    <meta property="og:title" content="聯絡我們"></meta>
    <meta property="og:url" content="{{url()->current()}}"/>
    <meta property="og:site_name" content="富磁特科技"></meta>
    <meta property="og:description" content="聯絡我們"></meta>
    <meta property="og:image" content="{{env('APP_URL')}}images/favicon.png"/></meta>
@endsection


@section('content')
<link rel="stylesheet" href="/css/home.css">
<link rel="stylesheet" href="/css/unitPage.css">
<link rel="stylesheet" href="/css/contact.css">
    <section class="pageBanner">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-6">
                    <h3 class="unitTitle pt-5 ">
                        <small>Contact Us</small>
                        <span>{{__('contacts.contact_me')}}</span>
                    </h3>
                </div>
                <div class="col-lg-6">
                    <div class="breadcrumbs-area">
                        <ul class="breadcrumbs-list">
                            <li><a href="/">{{ __("menu.index") }}</a></li>
                            <li><a href="/contact">{{ __("contacts.contact_me") }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page mainContact ">
        <div class="container bg-white">
            <div class="row  py-3">
                <div class="col-12 g-0">
                    <h3 class="titleBox font-MT pt-5 pb-3  mb-3 px-3">
                    @if (App::getLocale() == 'cn')
                         {{ __("contacts.contact_info") }}
                        <small class="h6 text-green">Contact Information</small>
                    @else
                         Contact Information
                        <small class="h6 text-green">聯絡資訊</small>
                    @endif
                    </h3>
                </div>
                <div class="col-12 ">
                    <ul class="contactInfo px-lg-5">
                        <li><b>{{ __("contacts.tel") }}</b><span>+886-3-6670300</span></li>
                        <li><b>{{ __("contacts.fex") }}</b><span>+886-3-5583011</span></li>
                        <!--
                        <li><b style="display:none;">{{ __("contacts.address") }}</b><span>{{ __("contacts.addr1") }}<a href="https://goo.gl/maps/aEtp6Wgx3WxXQbtd8"
                                    target="_blank">[MAP]</a></span>
                            <small style="display:none">No.2, Ln 327, Nanxin Rd. <br>
                                Nantou City, Nantou Country 54041 <br>
                                Taiwan(R.O.C)
                            </small>
                        </li>
                        -->
                        <li><b>{{ __("contacts.factroy") }}</b><span>{{ __("contacts.factory_add") }}<a href="https://goo.gl/maps/GPCCKCKJJqFEN2M98"
                                    target="_blank">[MAP]</a></span>
                            <small  style="display:none">
                                Jinlida, Stamping Park, <br>
                                Wuzhong Dist., Suzhou City, Jiangxian,<br>
                                China
                            </small>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col g-0">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3646.7524867754796!2d120.69078351545045!3d23.933817184499304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346931c65b704b43%3A0xf63c4662850b3a76!2zNTQw5Y2X5oqV57ij5Y2X5oqV5biC5paw6IiI6LevMzI36Jmf!5e0!3m2!1szh-TW!2stw!4v1669361743604!5m2!1szh-TW!2stw"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div id="section11">
            </div>
<br>
<br>
<br>
<br>
            <div class="row py-3">
                <div class="col-12 g-0">
                    <div class="titleBox font-MT pt-5 pb-3  mb-3 px-3">
                        <h3>{{ __("contacts.form") }}</h3>
                        <p>{{ __("contacts.txt") }}</p>
                    </div>
                </div>




                <div class="col-12" >
                <form class="p-lg-5 py-3" action='{{ route("handleContact") }}' enctype="multipart/form-data" method="POST">
                    @csrf
                        <div class="row g-3">
                            <div class="col-lg-6">
                                <label class="form-label">{{ __("contacts.gender") }} &nbsp;&nbsp;&nbsp;
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="contact_sex" id="inlineRadio1"
                                            value="Mr." checked="">
                                        <label class="form-check-label" for="inlineRadio1">{{ __("contacts.Mr") }}</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="contact_sex" id="inlineRadio2"
                                            value="Mrs.">
                                        <label class="form-check-label" for="inlineRadio2">{{ __("contacts.Mrs") }}</label>
                                    </div>
                                </label>
                                <input class="form-control" type="text" placeholder="First name"  name="firstname" required="required">
                            </div>
                            <div class="col-lg-6">
                                <label class="form-label">{{ __("contacts.surname") }}</label>
                                <input class="form-control" type="text" placeholder="Last name" name="lastname" required="required">
                            </div>
                            <div class="col-12">
                                <label class="form-label">{{ __("contacts.email") }}</label>
                                <input type="email" class="form-control" name="email">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>
                            <div class="col-12">
                                <label class="form-label">{{ __("contacts.ctel") }}</label>
                                <input class="form-control" type="text" placeholder="{{ __('contacts.ctel') }}" name="ctel" required="required">
                            </div>
                            <div class="col-12">
                                <label class="form-label">{{ __("contacts.msg") }}</label>
                                <textarea class="form-control" cols="1" rows="5" placeholder="{{ __('contacts.msg1') }}" name="msg"></textarea>
                            </div>
            <div class="col-12">
                          <input type="text" class="form-control {{$errors->has('captcha')?'parsley-error':''}}" name="captcha" placeholder="captcha">
                        </div>
                      <div class="col-md-4">
                          <img src="{{captcha_src()}}" style="cursor: pointer" onclick="this.src='{{captcha_src()}}'+Math.random()">
                        </div>
                      @if($errors->has('captcha'))
                        <div class="col-md-12">
                              <p class="text-danger text-left"><strong>{{$errors->first('captcha')}}</strong></p>
                            </div>
                      @endif
              </div>

                            <div class="col-12">
                                <input class="btn btn-primary btn-block px-5" type="submit" value="{{ __("contacts.msg") }}">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
