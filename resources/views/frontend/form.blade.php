<!DOCTYPE html>
<html lang="en">
<noscript>
    <meta http-equiv="refresh" content="0;" url="/error/401">
</noscript>

<head>
    <title>Corona Virus Risk Scan | {{ config('app.name') }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="You can check your covid-19 probability here.">
    <meta name="keywords" content="{{  config('app.name') }},COVID,COVID-19,'virus'">
    <meta name="author" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://covid19.nyfnepal.org/">
    <meta property="og:title" content="Corona Virus Risk Scan | {{  config('app.name') }}">
    <meta property="og:description" content="You can check your covid-19 probability here.">
    <meta property="og:image" content="{{ asset('images').'/'.'og_image.jpg' }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://covid19.nyfnepal.org/">
    <meta property="twitter:title" content="Corona Virus Risk Scan | {{  config('app.name') }}">
    <meta property="twitter:description" content="You can check your covid-19 probability here.">
    <meta property="twitter:image" content="{{ asset('images').'/'.'og_image.jpg' }}">


    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" media="screen" id="color">
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome-5/css/fontawesome-all.min.css') }}">
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</head>

<body class="bg-light" id="resultchange">
<div class="card fixed-top d-md-none  d-lg-block  d-none " style="margin-top: -0.1%;">
    <div class="card-header bg-white">
            <span>
                <h2 class="text-center" style="color: #FE0000">
                    <img src="{{ asset('logo.png') }}"
                         style="max-width: 100px; height: auto; padding-right: 2%;"><strong>&nbsp;&nbsp;Corona Virus Risk Scan</strong></h2>

            </span>
        <h2 class="text-center mt-2" style="color: black">राष्ट्रीय युवा संघ </h2>
    </div>
</div>
<div class="card fixed-top d-sm-block d-md-block d-lg-none">
    <div class="card-header bg-white">
            <span>
                <h2 class="text-center text-danger"><img src="{{ asset('logo.png') }}"
                                                         style="max-width: 10%;height: auto; padding-right: 2%;"><strong>&nbsp;&nbsp;Corona Virus Risk Scan</strong></h2>
            </span>
        <br>
        <span>
                <h2 class="text-center" style="color: black"><strong>&nbsp;&nbsp;राष्ट्रीय युवा संघ</strong></h2>
            </span>
    </div>
</div>
<div class="container">
    <div class="chat-content">
        <div class="messages custom-scroll" style="margin-bottom: 10%;">
            <div class="contact-chat">
                <ul class="chatappend mt-4">
                    <!-- First Loader -->
                    <li class="sent" id="Load0" style="display: none;">
                        <div class="media">
                            <div class="contact-name">
                                <ul class="msg-box">
                                    <li>
                                        <h5>
                                            <div class="type">
                                                <div class="typing-loader"></div>
                                            </div>
                                        </h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <!-- Welcome Message -->
                    <li class="sent" id="Sent1" style="display: none;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <li class="msg-setting-main">
                                            <h5>Hello, Please tell us which language you'd like to take this test in :
                                            </h5>
                                        </li>
                                        <li class="msg-setting-main">
                                            <h5>नमस्कार, कृपया परीक्षा दिनका लागि भाषा चयन गर्नुहोस् :</h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- Set language -->
                    <li class="sent" id="SentInput1" style="display: none;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <li class="msg-setting-main">
                                            <button type="button" onclick="scrollWin(0,1000,3);setLang('english')"
                                                    class="btn btn-sm btn-outline-primary">English
                                            </button> &nbsp;
                                            <button type="button" onclick="scrollWin(0,1000,3);setLang('nepali')"
                                                    class="btn btn-sm btn-outline-primary">नेपाली
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- Language Reply -->
                    <li class="replies" id="Reply1" style="display: none;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <li class="msg-setting-main">
                                            <h5 id="Language" style=" text-transform: capitalize;"></h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- ReportConfirmation Loader -->
                    <li class="sent" id="LoadReportConfirmation" style="display: none;">
                        <div class="media">
                            <div class="contact-name">
                                <ul class="msg-box">
                                    <li>
                                        <h5>
                                            <div class="type">
                                                <div class="typing-loader"></div>
                                            </div>
                                        </h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <!-- Set ReportConfirmation input option -->
                    <li class="sent" id="SentReportConfirmation" style="display: none;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <li class="msg-setting-main">
                                            <h5>Hi! Our coronavirus disease self assessment scan has been developed on
                                                the basis of guidelines from the WHO and MHFW, Government of Nepal. This
                                                interaction should not be taken as expert medical advice. Any
                                                information you share with us will be kept strictly confidential.
                                            </h5>
                                        </li>
                                        <li class="msg-setting-main">
                                            <h5>Whose status do you want to know about? </h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="sent mb-5" id="SentInputReportConfirmation" style="display: none;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <div class="row">
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-6 col-md-4">
                                                        <button type="button"
                                                                onclick="scrollWin(0,1000,3);setReportOption('self');"
                                                                class="btn btn-sm btn-outline-primary">Myself
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <button type="button"
                                                            onclick="scrollWin(0,1000,3);setReportOption('others');"
                                                            class="btn btn-sm btn-outline-primary">Other
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Set ReportConfirmation input option Nepali -->
                    <li class="sent" id="SentReportConfirmationNepali" style="display: none;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <li class="msg-setting-main">
                                            <h5>
                                                नमस्कार ! हामीले कोरोना भाइरस सेल्फ अस्सेस्स्मेन्ट स्क्यान WHO, MHFW र
                                                नेपाल सरकारको गाइडलाईनका आधारमा बनएका छौ | यो स्क्यानलाई चिकित्सा
                                                विशेषज्ञले जाचेको नसोच्नुहोला र हामीलाई दिहिएको सबै जानकारी गोप्य
                                                राखिनेछ |
                                            </h5>
                                        </li>
                                        <li class="msg-setting-main">
                                            <h5>तपाईं कसको स्थिति जान्न चाहिरहनु भएको छ ? </h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="sent mb-5" id="SentInputReportConfirmationNepali" style="display: none;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <div class="row">
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-6 col-md-4">
                                                        <button type="button"
                                                                onclick="scrollWin(0,1000,3);setReportOptionNepali('self');"
                                                                class="btn btn-sm btn-outline-primary">
                                                            आफ्नो
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <button type="button"
                                                            onclick="scrollWin(0,1000,3);setReportOptionNepali('others');"
                                                            class="btn btn-sm btn-outline-primary">
                                                        अरु कसैको
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- ReportConfirmation option Reply-->
                    <li class="replies" id="ReplyReportConfirmation" style="display: none;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <li class="msg-setting-main">
                                            <h5 id="ReportConfirmation"></h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- ProvienceConfirmation Loader -->
                    <li class="sent" id="LoadProvienceConfirmation" style="display: none;">
                        <div class="media">
                            <div class="contact-name">
                                <ul class="msg-box">
                                    <li>
                                        <h5>
                                            <div class="type">
                                                <div class="typing-loader"></div>
                                            </div>
                                        </h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <!-- Set ProvienceConfirmation input option -->
                    <li class="sent" id="SentProvienceConfirmation" style="display: none;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <li class="msg-setting-main">
                                            <h5>Which province are you currently in? </h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="sent mb-5" id="SentInputProvienceConfirmation" style="display: none;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <div class="row">
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <button type="button"
                                                                onclick="setProvienceOption('province_1');"
                                                                class="btn btn-sm btn-outline-primary">Province No 1
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <button type="button"
                                                                onclick="setProvienceOption('province_2');"
                                                                class="btn btn-sm btn-outline-primary">Province No 2
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <button type="button"
                                                                onclick="setProvienceOption('province_3_bagmati');"
                                                                class="btn btn-sm btn-outline-primary">Bagmati Pradesh
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <button type="button"
                                                                onclick="setProvienceOption('province_4_gandaki');"
                                                                class="btn btn-sm btn-outline-primary">Gandaki Pradesh
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <button type="button"
                                                                onclick="setProvienceOption('province_5');"
                                                                class="btn btn-sm btn-outline-primary">Province No 5
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <button type="button"
                                                                onclick="setProvienceOption('province_6_karnali');"
                                                                class="btn btn-sm btn-outline-primary">Karnali pradesh
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <button type="button"
                                                                onclick="setProvienceOption('province_7_sudurpachim');"
                                                                class="btn btn-sm btn-outline-primary">Sudurpashchim
                                                            Pradesh
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <button type="button" onclick="setProvienceOption('abroad');"
                                                                class="btn btn-sm btn-outline-primary">Abroad
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Set ProvienceConfirmation input option Nepali -->
                    <li class="sent" id="SentProvienceConfirmationNepali" style="display: none;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <li class="msg-setting-main">
                                            <h5>अहिले कुन प्रदेशमा हुनुहुन्छ ? </h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="sent mb-5" id="SentInputProvienceConfirmationNepali" style="display: none;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <div class="row">

                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <button type="button"
                                                                onclick="setProvienceOptionNepali('province_1');"
                                                                class="btn btn-sm btn-outline-primary">प्रदेश नं० १
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <button type="button"
                                                                onclick="setProvienceOptionNepali('province_2');"
                                                                class="btn btn-sm btn-outline-primary">प्रदेश नं० २
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <button type="button"
                                                                onclick="setProvienceOptionNepali('province_3_bagmati');"
                                                                class="btn btn-sm btn-outline-primary">बागमती प्रदेश
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <button type="button"
                                                                onclick="setProvienceOptionNepali('province_4_gandaki');"
                                                                class="btn btn-sm btn-outline-primary">गण्डकी प्रदेश
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <button type="button"
                                                                onclick="setProvienceOptionNepali('province_5');"
                                                                class="btn btn-sm btn-outline-primary">प्रदेश नं० ५
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <button type="button"
                                                                onclick="setProvienceOptionNepali('province_6_karnali');"
                                                                class="btn btn-sm btn-outline-primary">कर्नाली प्रदेश
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <button type="button"
                                                                onclick="setProvienceOptionNepali('province_7_sudurpachim');"
                                                                class="btn btn-sm btn-outline-primary">सुदुरपश्चिम
                                                            प्रदेश
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <button type="button"
                                                                onclick="setProvienceOptionNepali('abroad');"
                                                                class="btn btn-sm btn-outline-primary">विदेश
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>


                    <!-- ProvienceConfirmation option Reply-->
                    <li class="replies" id="ReplyProvienceConfirmation" style="display: none;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <li class="msg-setting-main">
                                            <h5 id="Provience"></h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>


                    <!-- Second Loader -->
                    <li class="sent" id="Load1" style="display: none;">
                        <div class="media">
                            <div class="contact-name">
                                <ul class="msg-box">
                                    <li>
                                        <h5>
                                            <div class="type">
                                                <div class="typing-loader"></div>
                                            </div>
                                        </h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <!-- Set Age -->
                    <li class="sent" id="Sent2" style="display: none;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <li class="msg-setting-main">
                                            <h5>How old are you? </h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="replies" id="ReplyInput1" style="display: none; margin-bottom:15%;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <li class="input-container">
                                            <h5>Your age in years : <input type="number" min="1" max="100"
                                                                           required="required" name="ageInp" id="ageInp"
                                                                           style="color: black; background: white;width: 95%;"
                                                                           class="form-control form-control-sm"></h5>
                                        </li>
                                        <li class="msg-setting-main mt-3">
                                            <button onclick="submitAge()" class="btn btn-sm btn-success">Done</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>


                    <!-- Set Age Nepali---->
                    <li class="sent" id="Sent2Nepali" style="display: none;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <li class="msg-setting-main">
                                            <h5>कती बर्ष हुनुभयो ? </h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="replies" id="ReplyInput1Nepali" style="display: none; margin-bottom:15%;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <li class="input-container">
                                            <h5>उमेर संख्यामा: <input type="number" min="1" max="100"
                                                                      required="required" name="ageInpNepali"
                                                                      id="ageInpNepali"
                                                                      style="color: black; background: white;width: 95%;"
                                                                      class="form-control form-control-sm"></h5>
                                        </li>
                                        <li class="msg-setting-main mt-3">
                                            <button onclick="submitAgeNepali()" class="btn btn-sm btn-success">अर्को
                                                प्रश्न
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!--Age Reply -->
                    <li class="replies" id="Reply2" style="display: none;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <li class="msg-setting-main">
                                            <h5 id="age"></h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>


                    <!-- PhoneOption Loader -->
                    <li class="sent" id="LoadPhoneOption" style="display: none;margin-bottom:20%;">
                        <div class="media">
                            <div class="contact-name">
                                <ul class="msg-box">
                                    <li>
                                        <h5>
                                            <div class="type">
                                                <div class="typing-loader"></div>
                                            </div>
                                        </h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <!-- Set Phone input option -->
                    <li class="sent" id="SentPhoneOption" style="display: none;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <li class="msg-setting-main">
                                            <h5>Would you like to share your number? </h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="sent mb-5" id="SentInputPhoneOption" style="display: none;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <div class="row">
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-6 col-md-4">
                                                        <button type="button" onclick="setPhoneOption(2);"
                                                                class="btn btn-sm btn-outline-primary">No
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <button type="button" onclick="setPhoneOption(1);"
                                                            class="btn btn-sm btn-outline-primary">Yes
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Set Phone input optionNepali -->
                    <li class="sent" id="SentPhoneOptionNepali" style="display: none;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <li class="msg-setting-main">
                                            <h5>आफ्नो सम्पर्क नं दिन चाहनु हुन्छ ? </h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="sent mb-5" id="SentInputPhoneOptionNepali" style="display: none;margin-bottom:15%;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <div class="row">
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-6 col-md-4">
                                                        <button type="button" onclick="setPhoneOptionNepali(2);"
                                                                class="btn btn-sm btn-outline-primary">हुदैन
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <button type="button" onclick="setPhoneOptionNepali(1);"
                                                            class="btn btn-sm btn-outline-primary">हुन्छ
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Phone input option Reply-->
                    <li class="replies" id="ReplyPhoneOption" style="display: none;margin-bottom:10%;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <li class="msg-setting-main">
                                            <h5 id="PhoneOption"></h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Set Phone input  -->
                    <li class="replies mb-5" id="SentInputPhone" style="display: none;margin-bottom:15%;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <li class="input-container">
                                            <h5>Your phone number : <input type="tel" maxlength="10" minlength="10"
                                                                           placeholder="9865102345" name="phoneNo"
                                                                           id="phoneNo"
                                                                           style="color: black; background: white;width: 95%;"
                                                                           class="form-control form-control-sm"></h5>
                                        </li>
                                        <li class="msg-setting-main mt-3">
                                            <button onclick="submitPhone()" class="btn btn-sm btn-success">Done</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Set Phone input Nepali  -->
                    <li class="replies mb-5" id="SentInputPhoneNepali" style="display: none;margin-bottom:15%;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <li class="input-container">
                                            <h5>मोबाइल नम्बर: <input type="tel" maxlength="10" minlength="10"
                                                                     placeholder="9865102345" name="phoneNoNepali"
                                                                     id="phoneNoNepali"
                                                                     style="color: black; background: white;width: 95%;"
                                                                     class="form-control form-control-sm"></h5>
                                        </li>
                                        <li class="msg-setting-main mt-3">
                                            <button onclick="submitPhoneNepali()" class="btn btn-sm btn-success">अर्को
                                                प्रश्न
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Phone input  Reply-->
                    <li class="replies" id="ReplyPhone" style="display: none;margin-bottom:15%;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <li class="msg-setting-main">
                                            <h5 id="Phone"></h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>


                    <!-- Third Loader -->
                    <li class="sent" id="Load2" style="display: none;">
                        <div class="media">
                            <div class="contact-name">
                                <ul class="msg-box">
                                    <li>
                                        <h5>
                                            <div class="type">
                                                <div class="typing-loader"></div>
                                            </div>
                                        </h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <!-- Set gender -->
                    <li class="sent" id="Sent3" style="display: none;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <li class="msg-setting-main">
                                            <h5>Please select your gender</h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="sent" id="SentInput2" style="display: none; margin-bottom:10%;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <li class="msg-setting-main">
                                            <button type="button" onclick="setGender('male')"
                                                    class="btn btn-sm btn-outline-primary">Male
                                            </button> &nbsp;
                                            <button type="button" onclick="setGender('female')"
                                                    class="btn btn-sm btn-outline-primary">Female
                                            </button>
                                        </li>
                                        <li class="msg-setting-main">
                                            <button type="button" onclick="setGender('others')"
                                                    class="btn btn-sm btn-outline-primary">Other
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Set genderNepali -->
                    <li class="sent" id="Sent3Nepali" style="display: none; margin-bottom:10%;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <li class="msg-setting-main">
                                            <h5>कृपया लिङ्ग छनौट गर्नुहोस्:</h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="sent" id="SentInput2Nepali" style="display: none; margin-bottom:10%;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <li class="msg-setting-main">
                                            <button type="button" onclick="setGenderNepali('male')"
                                                    class="btn btn-sm btn-outline-primary">पुरुष
                                            </button> &nbsp;
                                            <button type="button" onclick="setGenderNepali('female')"
                                                    class="btn btn-sm btn-outline-primary">महिला
                                            </button>
                                        </li>
                                        <li class="msg-setting-main">
                                            <button type="button" onclick="setGenderNepali('others')"
                                                    class="btn btn-sm btn-outline-primary">अन्य
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Gender Reply-->
                    <li class="replies" id="Reply3" style="display: none; margin-bottom:15%;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <li class="msg-setting-main">
                                            <h5 id="gender" style=" text-transform: capitalize;"></h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Set temperature -->
                    <li class="sent" id="Sent4" style="display: none;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <li class="msg-setting-main">
                                            <h5>Please let us know your current body temperature in degree Fahrenheit
                                                (Normal body temperature is 98.6°F):</h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="sent" id="SentInput3" style="display: none;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <div class="row">
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6">
                                                        <button type="button" onclick="setTemp('normal')"
                                                                class="btn btn-sm btn-outline-primary">
                                                            Normal(96<sup>o</sup>F-98.6<sup>o</sup>)
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6">
                                                        <button type="button" onclick="setTemp('fever')"
                                                                class="btn btn-sm btn-outline-primary">
                                                            Fever(98.6<sup>o</sup>F-102<sup>o</sup>F)
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6">
                                                        <button type="button" onclick="setTemp('high_fever')"
                                                                class="btn btn-sm btn-outline-primary">High
                                                            Fever(>102<sup>o</sup>F)
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6">
                                                        <button type="button" onclick="setTemp('others')"
                                                                class="btn btn-sm btn-outline-primary">Don't Know
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Set temperatureNepali  -->
                    <li class="sent" id="Sent4Nepali" style="display: none;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <li class="msg-setting-main">
                                            <h5>अहिलेको शरीरको तापमान कति छ ? (सामान्य शरीर तापमान ९८.६°F):</h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="sent" id="SentInput3Nepali" style="display: none;margin-bottom:10%">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <div class="row">
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6">
                                                        <button type="button" onclick="setTempNepali('normal')"
                                                                class="btn btn-sm btn-outline-primary">सामान्य
                                                            (९६<sup>o</sup>F-९८.६<sup>o</sup>F)
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6">
                                                        <button type="button" onclick="setTempNepali('fever')"
                                                                class="btn btn-sm btn-outline-primary">ज्वरो
                                                            (९८.६<sup>o</sup>F-१०२<sup>o</sup>F)
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6">
                                                        <button type="button" onclick="setTempNepali('high_fever')"
                                                                class="btn btn-sm btn-outline-primary">उच्च ज्वरो
                                                            (>१०२<sup>o</sup>F)
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6">
                                                        <button type="button" onclick="setTempNepali('others')"
                                                                class="btn btn-sm btn-outline-primary">थाहा छैन
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Temperature Reply-->
                    <li class="replies" id="Reply4" style="display: none;margin-bottom:10%;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <li class="msg-setting-main">
                                            <h5 id="temperature" style=" text-transform: capitalize;"></h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- Fifth Loader -->
                    <li class="sent" id="Load4" style="display: none;">
                        <div class="media">
                            <div class="contact-name">
                                <ul class="msg-box">
                                    <li>
                                        <h5>
                                            <div class="type">
                                                <div class="typing-loader"></div>
                                            </div>
                                        </h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <!-- Set Symptoms -->
                    <li class="sent" id="Sent5" style="display: none;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <li class="msg-setting-main">
                                            <h5>Are you experiencing any of the symptoms below (mark all those
                                                applicable)
                                            </h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="sent" id="SentInput4" style="display: none;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <div class="row">
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-4">
                                                        <button type="button" id="dry_coughBtn"
                                                                onclick="buttonClicked(1);"
                                                                class="btn btn-sm btn-outline-primary">Dry Cough
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6">
                                                        <button type="button" id="loss_or_diminished_sense_of_smellBtn"
                                                                onclick="buttonClicked(2);"
                                                                class="btn btn-sm btn-outline-primary">Loss or
                                                            diminished sense of smell
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6">
                                                        <button type="button" id="sore_throatBtn"
                                                                onclick="buttonClicked(3);"
                                                                class="btn btn-sm btn-outline-primary">Sore throat
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6">
                                                        <button type="button" id="weaknessBtn"
                                                                onclick="buttonClicked(4);"
                                                                class="btn btn-sm btn-outline-primary">Weakness
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6">
                                                        <button type="button" id="change_in_appetiteBtn"
                                                                onclick="buttonClicked(5);"
                                                                class="btn btn-sm btn-outline-primary">Change in
                                                            appetite
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main" id="NonSymptoms">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6">
                                                        <button type="button" id="none_of_symptomBtn"
                                                                onclick="buttonClicked(6);"
                                                                class="btn btn-sm btn-success">None of these
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main" id="ConfirmSymptoms"
                                                 style="display: none;">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6">
                                                        <button type="button" onclick="setSymptoms();"
                                                                class="btn btn-sm btn-success">Confirm
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>


                    <!-- Set Symptoms Nepali -->
                    <li class="sent" id="Sent5Nepali" style="display: none;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <li class="msg-setting-main">
                                            <h5>के तपाईलाई तल दिहिएको लक्षण देखिएको छ ? ( मिल्ने जति सबै छान्नु होस्
                                                )</h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="sent" id="SentInput4Nepali" style="display: none;margin-bottom:10%;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <div class="row">
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-4">
                                                        <button type="button" id="dry_coughBtnNepali"
                                                                onclick="buttonClickedNepali(1);"
                                                                class="btn btn-sm btn-outline-primary">सुख्खा खोकी
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6">
                                                        <button type="button"
                                                                id="loss_or_diminished_sense_of_smellBtnNepali"
                                                                onclick="buttonClickedNepali(2);"
                                                                class="btn btn-sm btn-outline-primary">गन्धको भावना
                                                            नभएको
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6">
                                                        <button type="button" id="sore_throatBtnNepali"
                                                                onclick="buttonClickedNepali(3);"
                                                                class="btn btn-sm btn-outline-primary">घाँटी दुखेको
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6">
                                                        <button type="button" id="weaknessBtnNepali"
                                                                onclick="buttonClickedNepali(4);"
                                                                class="btn btn-sm btn-outline-primary">कमजोरी
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6">
                                                        <button type="button" id="change_in_appetiteBtnNepali"
                                                                onclick="buttonClickedNepali(5);"
                                                                class="btn btn-sm btn-outline-primary">भोक मा परिवर्तन
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main" id="NonSymptomsNepali">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6">
                                                        <button type="button" id="none_of_symptomBtnNepali"
                                                                onclick="buttonClickedNepali(6);"
                                                                class="btn btn-sm btn-success">कुनै पनि होईन
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main" id="ConfirmSymptomsNepali"
                                                 style="display: none;">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6">
                                                        <button type="button" onclick="setSymptomsNepali();"
                                                                class="btn btn-sm btn-success">अर्को प्रश्न
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Symptoms Reply-->
                    <li class="replies" id="Reply5" style="display: none;margin-bottom:10%;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <li class="msg-setting-main">
                                            <h5 id="Symptoms"></h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- Sixth Loader -->
                    <li class="sent" id="Load5" style="display: none;">
                        <div class="media">
                            <div class="contact-name">
                                <ul class="msg-box">
                                    <li>
                                        <h5>
                                            <div class="type">
                                                <div class="typing-loader"></div>
                                            </div>
                                        </h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <!-- Set Additional Symptoms -->
                    <li class="sent" id="Sent6" style="display: none;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <li class="msg-setting-main">
                                            <h5>Additionally, please verify if you are experiencing any of the symptoms
                                                below (mark all those applicable)</h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="sent" id="SentInput5" style="display: none;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <div class="row">
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6">
                                                        <button type="button" id="moderate_to_severe_coughBtn"
                                                                onclick="buttonClickedAdditional(1);"
                                                                class="btn btn-sm btn-outline-primary">Moderate to
                                                            severe cough
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6">
                                                        <button type="button" id="feeling_breathlessBtn"
                                                                onclick="buttonClickedAdditional(2);"
                                                                class="btn btn-sm btn-outline-primary">Feeling
                                                            breathless
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6">
                                                        <button type="button" id="difficulty_in_breathingBtn"
                                                                onclick="buttonClickedAdditional(3);"
                                                                class="btn btn-sm btn-outline-primary">Difficulty in
                                                            breathing
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6">
                                                        <button type="button" id="drowsinessBtn"
                                                                onclick="buttonClickedAdditional(4);"
                                                                class="btn btn-sm btn-outline-primary">Drowsyness
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-12">
                                                        <button type="button"
                                                                id="persistant_pain_and_pressure_in_chestBtn"
                                                                onclick="buttonClickedAdditional(5);"
                                                                class="btn btn-sm btn-outline-primary">Persistant pain
                                                            and <br>pressure in chest
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6">
                                                        <button type="button" id="severe_weaknessBtn"
                                                                onclick="buttonClickedAdditional(6);"
                                                                class="btn btn-sm btn-outline-primary">Sever weakness
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main" id="NonOfAdditionalSymptoms">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6">
                                                        <button type="button" id="none_of_additional_symptomBtn"
                                                                onclick="buttonClickedAdditional(7);"
                                                                class="btn btn-sm btn-success">None of these
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main" id="ConfirmAdditionalSymptoms"
                                                 style="display: none;">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6">
                                                        <button type="button" onclick="setAdditionalSymptoms();"
                                                                class="btn btn-sm btn-success">Confirm
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>


                    <!-- Set Additional Symptoms Nepali -->
                    <li class="sent" id="Sent6Nepali" style="display: none;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <li class="msg-setting-main">
                                            <h5>थप रूपमा तल दिहिएको लक्षण देखिएको छ ? ( मिल्ने जति सबै छान्नु
                                                होस् )</h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="sent" id="SentInput5Nepali" style="display: none;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">


                                        <div class="row">
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6">
                                                        <button type="button" id="moderate_to_severe_coughBtnNepali"
                                                                onclick="buttonClickedAdditionalNepali(1);"
                                                                class="btn btn-sm btn-outline-primary">मध्यम देखी गम्भीर
                                                            खोकी
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6">
                                                        <button type="button" id="feeling_breathlessBtnNepali"
                                                                onclick="buttonClickedAdditionalNepali(2);"
                                                                class="btn btn-sm btn-outline-primary">
                                                            सासमा कमी महसुस हुनु
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6">
                                                        <button type="button" id="difficulty_in_breathingBtnNepali"
                                                                onclick="buttonClickedAdditionalNepali(3);"
                                                                class="btn btn-sm btn-outline-primary">
                                                            सास फेर्न कठिनाई
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6">
                                                        <button type="button" id="drowsinessBtnNepali"
                                                                onclick="buttonClickedAdditionalNepali(4);"
                                                                class="btn btn-sm btn-outline-primary">निदाउरोपन
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6">
                                                        <button type="button"
                                                                id="persistant_pain_and_pressure_in_chestBtnNepali"
                                                                onclick="buttonClickedAdditionalNepali(5);"
                                                                class="btn btn-sm btn-outline-primary">लगातार पीडा र
                                                            छातीमा दबाब
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6">
                                                        <button type="button" id="severe_weaknessBtnNepali"
                                                                onclick="buttonClickedAdditionalNepali(6);"
                                                                class="btn btn-sm btn-outline-primary">गम्भीर कमजोरी
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-12 msg-setting-main" id="NonOfAdditionalSymptomsNepali">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6">
                                                        <button type="button" id="none_of_additional_symptomBtnNepali"
                                                                onclick="buttonClickedAdditionalNepali(7);"
                                                                class="btn btn-sm btn-success">कुनै पनि होईन
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-12 msg-setting-main" id="ConfirmAdditionalSymptomsNepali"
                                                 style="display: none;">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6">
                                                        <button type="button" id="none_of_additional_symptomBtnNepali"
                                                                onclick="setAdditionalSymptomsNepali();"
                                                                class="btn btn-sm btn-success">अर्को प्रश्न
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>


                    <!-- Additional Symptoms Reply-->
                    <li class="replies" id="Reply6" style="display: none;margin-bottom:10%;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <li class="msg-setting-main">
                                            <h5 id="AdditionalSymptoms"></h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </li>

                    <!-- Seventh Loader -->
                    <li class="sent" id="Load6" style="display: none;">
                        <div class="media">
                            <div class="contact-name">
                                <ul class="msg-box">
                                    <li>
                                        <h5>
                                            <div class="type">
                                                <div class="typing-loader"></div>
                                            </div>
                                        </h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <!-- Set Travel -->
                    <li class="sent" id="Sent7" style="display: none;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <li class="msg-setting-main">
                                            <h5>Please select your travel and exposure details</h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="sent" id="SentInput6" style="display: none; margin-bottom:15%;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <div class="row">
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-12">
                                                        <button type="button"
                                                                onclick="setTransport('no_travel_history');"
                                                                class="btn btn-sm btn-outline-primary"
                                                                style="display: block">No Travel History
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-12">
                                                        <button type="button"
                                                                onclick="setTransport('no_contact_with_anyone_with_symptom');"
                                                                class="btn btn-sm btn-outline-primary"
                                                                style="display: block">No contact with
                                                            anyone with <br>symptoms
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-12">
                                                        <button type="button"
                                                                onclick="setTransport('history_of_travel_in_affected_geographical_area_in_last_14Days');"
                                                                class="btn btn-sm btn-outline-primary"
                                                                style="display: block">History of travel in affected
                                                            area
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-12">
                                                        <button type="button"
                                                                onclick="setTransport('close_contact_With_Confirmed_covid_in_Last_14Days');"
                                                                class="btn btn-sm btn-outline-primary"
                                                                style="display: block">Close contact
                                                            with confirmed <br>COVID
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>


                    <!-- Set Travel Nepali -->
                    <li class="sent" id="Sent7Nepali" style="display: none;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <li class="msg-setting-main">
                                            <h5>कृपया यात्रा र एक्सपोजर विवरणहरू चयन गर्नुहोस्:</h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="sent" id="SentInput6Nepali" style="display: none;margin-bottom:10%;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <div class="row">
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-12">
                                                        <button type="button"
                                                                onclick="setTransportNepali('no_travel_history');"
                                                                class="btn btn-sm btn-outline-primary"
                                                                style="display: block">कुनै यात्राको
                                                            ईतिहास छैन
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-12">
                                                        <button type="button"
                                                                onclick="setTransportNepali('no_contact_with_anyone_with_symptom');"
                                                                class="btn btn-sm btn-outline-primary"
                                                                style="display: block">लक्षण भएको
                                                            विरामीसँग सम्पर्क छैन
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-12">
                                                        <button type="button"
                                                                onclick="setTransportNepali('history_of_travel_in_affected_geographical_area_in_last_14Days');"
                                                                class="btn btn-sm btn-outline-primary"
                                                                style="display: block">पछील्लो १४ दिनमा
                                                            प्रभावित<br> क्षेत्रमा यात्रा भएको छ
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-12">
                                                        <button type="button"
                                                                onclick="setTransportNepali('close_contact_With_Confirmed_covid_in_Last_14Days');"
                                                                class="btn btn-sm btn-outline-primary"
                                                                style="display: block">कोभिड-१९ पुष्टि
                                                            भएको व्यक्तिको साथ<br> पछिल्लो १४ दिनमा नजिकबाट<br> सम्पर्क
                                                            भएको छ
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>


                    <!-- Travel Reply-->
                    <li class="replies" id="Reply7" style="display: none;margin-bottom:10%;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <li class="msg-setting-main">
                                            <h5 id=Traveling></h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Eight Loader -->
                    <li class="sent" id="Load7" style="display: none;">
                        <div class="media">
                            <div class="contact-name">
                                <ul class="msg-box">
                                    <li>
                                        <h5>
                                            <div class="type">
                                                <div class="typing-loader"></div>
                                            </div>
                                        </h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <!-- Set Diseases -->
                    <li class="sent" id="Sent8" style="display: none;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <li class="msg-setting-main">
                                            <h5>Do you have a history of any of these conditions (mark all those
                                                applicable)
                                            </h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="sent" id="SentInput7" style="display: none;margin-bottom:10%">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <div class="row">
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-3">
                                                        <button type="button" id="diabetesBtn"
                                                                onclick="buttonClickedDisease(1);"
                                                                class="btn btn-sm btn-outline-primary">Diabetes
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-5">
                                                        <button type="button" id="high_blood_pressureBtn"
                                                                onclick="buttonClickedDisease(2);"
                                                                class="btn btn-sm btn-outline-primary">High blood
                                                            Pressure
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-4">
                                                        <button type="button" id="heart_diseaseBtn"
                                                                onclick="buttonClickedDisease(3);"
                                                                class="btn btn-sm btn-outline-primary">Heart Disease
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-4">
                                                        <button type="button" id="kidney_diseaseBtn"
                                                                onclick="buttonClickedDisease(4);"
                                                                class="btn btn-sm btn-outline-primary">Kidney Disease
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-4">
                                                        <button type="button" id="lung_diseaseBtn"
                                                                onclick="buttonClickedDisease(5);"
                                                                class="btn btn-sm btn-outline-primary">lung Disease
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-4">
                                                        <button type="button" id="strokeBtn"
                                                                onclick="buttonClickedDisease(6);"
                                                                class="btn btn-sm btn-outline-primary">Stroke
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6">
                                                        <button type="button" id="reduced_immunityBtn"
                                                                onclick="buttonClickedDisease(7);"
                                                                class="btn btn-sm btn-outline-primary">Reduced Immunity
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main" id="NonOfDiseases">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6">
                                                        <button type="button" id="non_of_diseasesBtn"
                                                                onclick="buttonClickedDisease(8);"
                                                                class="btn btn-sm btn-success">None of these
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main" id="ConfirmDiseases"
                                                 style="display: none;">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6">
                                                        <button type="button" onclick="setDisease();"
                                                                class="btn btn-sm btn-success">Confirm
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>


                    <!-- Set Diseases Nepali -->
                    <li class="sent" id="Sent8Nepali" style="display: none;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <li class="msg-setting-main">
                                            <h5>यी कुनै पनि सर्तहरूको इतिहास छ ?</h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="sent" id="SentInput7Nepali" style="display: none;margin-bottom:10%">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <div class="row">
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-3">
                                                        <button type="button" id="diabetesBtnNepali"
                                                                onclick="buttonClickedDiseaseNepali(1);"
                                                                class="btn btn-sm btn-outline-primary">मधुमेह
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-5">
                                                        <button type="button" id="high_blood_pressureBtnNepali"
                                                                onclick="buttonClickedDiseaseNepali(2);"
                                                                class="btn btn-sm btn-outline-primary">उच्च रक्तचाप
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-4">
                                                        <button type="button" id="heart_diseaseBtnNepali"
                                                                onclick="buttonClickedDiseaseNepali(3);"
                                                                class="btn btn-sm btn-outline-primary">मुटु रोग
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-4">
                                                        <button type="button" id="kidney_diseaseBtnNepali"
                                                                onclick="buttonClickedDiseaseNepali(4);"
                                                                class="btn btn-sm btn-outline-primary">मृगौला रोग
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-4">
                                                        <button type="button" id="lung_diseaseBtnNepali"
                                                                onclick="buttonClickedDiseaseNepali(5);"
                                                                class="btn btn-sm btn-outline-primary">फोक्सोको रोग
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-4">
                                                        <button type="button" id="strokeBtnNepali"
                                                                onclick="buttonClickedDiseaseNepali(6);"
                                                                class="btn btn-sm btn-outline-primary">झड्का
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6">
                                                        <button type="button" id="reduced_immunityBtnNepali"
                                                                onclick="buttonClickedDiseaseNepali(7);"
                                                                class="btn btn-sm btn-outline-primary">प्रतिरक्षाको कमी
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main" id="NonOfDiseasesNepali">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6">
                                                        <button type="button" id="non_of_diseasesBtnNepali"
                                                                onclick="buttonClickedDiseaseNepali(8);"
                                                                class="btn btn-sm btn-success">कुनै पनि होईन
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main" id="ConfirmDiseasesNepali"
                                                 style="display: none;">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-6">
                                                        <button type="button" onclick="setDiseaseNepali();"
                                                                class="btn btn-sm btn-success">अर्को प्रश्न
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Diseases Reply-->
                    <li class="replies" id="Reply8" style="display: none;margin-bottom:10%;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <li class="msg-setting-main">
                                            <h5 id="Diseases"></h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- Nineth Loader -->
                    <li class="sent" id="Load8" style="display: none;">
                        <div class="media">
                            <div class="contact-name">
                                <ul class="msg-box">
                                    <li>
                                        <h5>
                                            <div class="type">
                                                <div class="typing-loader"></div>
                                            </div>
                                        </h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <!-- Set Progress -->
                    <li class="sent" id="Sent9" style="display: none;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <li class="msg-setting-main">
                                            <h5>How have your symptoms progressed over the last 48 hrs? </h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="sent mb-5" id="SentInput8" style="display: none;margin-bottom:10%">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <div class="row">
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-4">
                                                        <button type="button" onclick="setProgress('improved');"
                                                                class="btn btn-sm btn-outline-primary">Improved
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-4">
                                                        <button type="button" onclick="setProgress('no_change');"
                                                                class="btn btn-sm btn-outline-primary">No change
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-4 col-md-4">
                                                        <button type="button" onclick="setProgress('worsened');"
                                                                class="btn btn-sm btn-outline-primary">Worsened
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-4">
                                                        <button type="button"
                                                                onclick="setProgress('worsened_considerably');"
                                                                class="btn btn-sm btn-outline-primary">Worsened
                                                            Considerably
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Set Progress Nepali -->
                    <li class="sent" id="Sent9Nepali" style="display: none;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <li class="msg-setting-main">
                                            <h5>पछिल्लो ४८ घण्टामा लक्षण कस्तो छ? </h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="sent mb-5" id="SentInput8Nepali" style="display: none;margin-bottom:10%">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <div class="row">
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-4">
                                                        <button type="button" onclick="setProgressNepali('improved');"
                                                                class="btn btn-sm btn-outline-primary">सुधारिएको
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-4">
                                                        <button type="button" onclick="setProgressNepali('no_change');"
                                                                class="btn btn-sm btn-outline-primary">परिवर्तन छैन
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-4 col-md-4">
                                                        <button type="button" onclick="setProgressNepali('worsened');"
                                                                class="btn btn-sm btn-outline-primary">बिग्रियो
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 msg-setting-main">
                                                <div class="row pb-1">
                                                    <div class="col-sm-12 col-md-4">
                                                        <button type="button"
                                                                onclick="setProgressNepali('worsened_considerably');"
                                                                class="btn btn-sm btn-outline-primary">गम्विररुपले
                                                            विग्रियो
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Progress Reply-->
                    <li class="replies" id="Reply9" style="display: none;margin-bottom:10%;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <li class="msg-setting-main">
                                            <h5 id="Progress"></h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Eleventh Loader -->
                    <li class="sent" id="Load10" style="display: none;">
                        <div class="media">
                            <div class="contact-name">
                                <ul class="msg-box">
                                    <li>
                                        <h5>
                                            <div class="type">
                                                <div class="typing-loader"></div>
                                            </div>
                                        </h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>

                    <!-- Showing generate result -->
                    <li class="sent" id="GeneratingResult" style="display: none;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <li class="msg-setting-main">
                                            <h5>Generating report, thanks your.</h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Showing generate result Nepali -->
                    <li class="sent" id="GeneratingResultNepali" style="display: none;">
                        <div class="media">
                            <div class="media-body">
                                <div class="contact-name">
                                    <ul class="msg-box">
                                        <li class="msg-setting-main">
                                            <h5>तपाइँको लागी रिपोर्ट उत्पन्न गर्दै धन्यवाद।</h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

                <div class="media mt-3">
                    <button class="reset" onclick="reset()" data-toggle="tooltip" data-placement="top" title="Refresh">
                        <i class="fas fa-undo"></i></button>
                </div>
                <div class="media mt-3">
                    <a class="home_Page" href="{{ route('form.main') }}" data-toggle="tooltip" data-placement="top"
                       title="Go to home"><i class="fas fa-home"></i></a>
                </div>

            </div>
            <div id="devtool-status"></div>
        </div>
    </div>
</div>
<div>
    <footer class="footer">
        <div class="container">
            निर्माण तथा प्रचारप्रसार : राष्ट्रीय युवा संघ ,नेपाल कोरोना रोकथाम तथा सचेतना अभियान
        </div>
    </footer>
</div>
</body>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    /*---------getResult---------*/
    function getResult() {
        score = (total_point / 66) * 100;
        Details.lat = lat;
        Details.lng = lng;
        Details.lang = lang;
        Details.age = age;
        Details.gender = gender;
        Details.temperature = temperature;
        Details.dry_cough = dry_cough;
        Details.loss_or_diminished_sense_of_smell = loss_or_diminished_sense_of_smell;
        Details.sore_throat = sore_throat;
        Details.weakness = weakness;
        Details.change_in_appetite = change_in_appetite;
        Details.none_of_symptom = none_of_symptom;
        Details.moderate_to_severe_cough = moderate_to_severe_cough;
        Details.feeling_breathless = feeling_breathless;
        Details.difficulty_in_breathing = difficulty_in_breathing;
        Details.drowsiness = drowsiness;
        Details.severe_weakness = severe_weakness;
        Details.none_of_additional_symptom = none_of_additional_symptom;
        Details.no_travel_history = no_travel_history;
        Details.no_contact_with_anyone_with_symptom = no_contact_with_anyone_with_symptom;
        Details.history_of_travel_in_affected_geographical_area_in_last_14Days = history_of_travel_in_affected_geographical_area_in_last_14Days;
        Details.close_contact_With_Confirmed_covid_in_Last_14Days = close_contact_With_Confirmed_covid_in_Last_14Days;
        Details.diabetes = diabetes;
        Details.high_blood_pressure = high_blood_pressure;
        Details.heart_disease = heart_disease;
        Details.kidney_disease = kidney_disease;
        Details.lung_disease = lung_disease;
        Details.stroke = stroke;
        Details.reduced_immunity = reduced_immunity;
        Details.non_of_diseases = non_of_diseases;
        Details.improved = improved;
        Details.no_change = no_change;
        Details.worsened = worsened;
        Details.worsened_considerably = worsened_considerably;
        Details.score = score;
        Details.total_point = total_point;
        Details.phone = phone;
        Details.report_of = report_of;
        Details.state = state;

        $.ajax({
            type: "POST",
            url: "{{ route('form.store') }}",
            data: JSON.stringify(Details),
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            success: function (data) {
                $('#resultchange').html(data.html);
                $.ajax({
                    type: "get",
                    url: "/api",
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    success: function (Response) {
                        if (typeof (Response) != 'object') {
                            Response = $.parseJSON(Response);
                        }
                        // console.log(Response);

                        // console.log(ListData.Lislength);
                        // console.log(ListData.ListData.total_cases);
                        for (var i = 0; i < Response.ListData.length; i++) {
                            document.getElementById('NTCC').innerHTML = Response.ListData[i].total_cases;
                            document.getElementById('NTR').innerHTML = Response.ListData[i].total_recovered;
                            document.getElementById('NCD').innerHTML = Response.ListData[i].total_deaths == '' ? '0' : Response.ListData[i].total_deaths;
                        }

                            document.getElementById('WTCC').innerHTML = Response.WorldData.total_cases;
                            document.getElementById('WTR').innerHTML = Response.WorldData.total_recovered;
                            document.getElementById('WCD').innerHTML = Response.WorldData.total_deaths;
                    },
                    error: function (r) {
                        console.log("error" + r);
                    },
                    failure: function (r) {
                        console.log("failure" + r);
                    }
                });
            },
            error: function (r) {
                console.log("error" + r);
            },
            failure: function (r) {
                console.log("error" + r);
            }
        });
    }
</script>

</html>
