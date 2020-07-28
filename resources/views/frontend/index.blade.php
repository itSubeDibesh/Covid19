<!DOCTYPE html>
<html lang="en">
<head>
    <title>कोविड-१९ | {{ config('app.name') }}</title>
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

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style-main.css') }}">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>

<body>
<!-- Mobile Menu Start Here -->
<div class="mobile-menu">
    <nav class="mobile-header">
        <div class="header-logo">
            <a href="{{ route('form.main') }}"><img src="{{ asset('images/logo/02.png') }}" alt="logo"></a>
        </div>
        <div class="header-bar">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
    <nav class="mobile-menu">
        <div class="mobile-menu-area">
            <div class="mobile-menu-area-inner">
                <ul class="lab-ul">
                    <li class="active"><a href="{{ route('form.main') }}">गृहपृष्ठ</a>
                    </li>
                    <li><a href="#symptoms">लक्षण</a>
                    </li>
                    <li><a href="#prvention-lts">रोकथाम</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<!-- Mobile Menu Ending Here -->


<!-- desktop menu start here -->
<header class="header-section">
    <div class="header-area">
        <div class="container">
            <div class="primary-menu">
                <div class="logo">
                    <a href="{{ route('form.main') }}"><img src="{{ asset('images/logo/02.png') }}" alt="logo"></a>
                </div>
                <div class="main-area">
                    <div class="main-menu">
                        <ul class="lab-ul">
                            <li class="active"><a href="{{ route('form.main') }}">गृहपृष्ठ</a>
                            </li>
                            <li><a href="#symptoms">लक्षण</a>
                            </li>
                            <li><a href="#prvention-lts">रोकथाम</a></li>
                        </ul>
                    </div>
                    <div class="header-btn">
                        <a href="{{ route('form.form') }}" class="lab-btn"><span>जोखिम मूल्यांकन गर्नु होस्</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- desktop menu ending here -->

<!-- Banner Section start here -->
<section class="banner-section pb-0">
    <div class="banner-area">
        <div class="container">
            <div class="row no-gutters align-items-center justify-content-center">
                <div class="col-12">
                    <div class="content-part text-center">
                        <div class="section-header">
                            <h2>कोविड-१९ ट्रैकर</h2>
                            <h3>कुल संसार भरी पुष्टि भएको कोरोना केसहरू</h3>
                            <h2 id="totalConfirmedGlobal" class="count-people" >0</h2>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="section-wrapper">
                        <div class="banner-thumb">
                            <img src="{{ asset('images/banner/01.png') }}" alt="lab-banner">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section ending here -->

<!-- corona count section start here -->
<section class="corona-count-section bg-corona padding-tb pt-0">
    <div class="container">
        <div class="corona-wrap">
            <div class="corona-count-top">
                <div class="row justify-content-center align-items-center">
                    <div class="col-xl-3 col-md-6 col-12">
                        <h5>कुल कोरोना तथ्याड़क (नेपाल अपडेट):</h5>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="corona-item">
                            <div class="corona-inner">
                                <div class="corona-thumb">
                                    <img src="{{ asset('images/corona/01.png') }}" alt="corona">
                                </div>
                                <div class="corona-content">
                                    <h3 id="totalConfirmed_Nepal">0</h3>
                                    <p>कुल पुष्टि भएको</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="corona-item">
                            <div class="corona-inner">
                                <div class="corona-thumb">
                                    <img src="{{ asset('images/corona/02.png') }}" alt="corona">
                                </div>
                                <div class="corona-content">
                                    <h3 id="totalRecovered_Nepal">0</h3>
                                    <p>निको भएको</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="corona-item">
                            <div class="corona-inner">
                                <div class="corona-thumb">
                                    <img src="{{ asset('images/corona/03.png') }}" alt="corona">
                                </div>
                                <div class="corona-content">
                                    <h3 id="totalDeaths_Nepal">0</h3>
                                    <p>कुल मृत्यु</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="corona-count-bottom">
                <div class="row justify-content-center align-items-center     flex-row-reverse">
                    <div class="col-lg-6 col-12">
                        <div class="ccb-thumb">
                            <a href="https://www.youtube.com/embed/fMENSEDpU_I" data-rel="lightcase" class="ccb-video"><i class="icofont-ui-play"></i><span class="pluse_1"></span><span class="pluse_2"></span></a>
                            <img src="{{ asset('images/corona/01.jpg') }}" alt="corona">
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="ccb-content">
                            <h2>कोरोना भाइरस भनेको के हो?</h2>
                            <p id="cvpara">चीनको हुवेई प्रदेशको उहान सहरमा पहिलो पटक देखिएको  रहस्यमयी नोबेल कोरोना (कोविड १९)
                                भाइरसको प्रकोप सन् २०१९ को मध्य डिसेम्बरमा देखिएको थियो र उक्त भाइरसको सङ्क्रमण नेपाल,भारत,स्पेन, जापान,
                                अमेरिकासहित अन्य थुप्रै देशमा फैलिसकेको हालसम्मको तथ्याङ्ककले देखाएको छ।
                                यस भाइरसको सङ्क्रमणलाई लिएर विश्वव्यापि रूपमा त्रास र चिन्ताको विषय बढिरहेको छ</p>
                            <ul class="lab-ul">
                                <li><i class="icofont-tick-mark"></i>कोविड-१९ डिसेम्बर २०२० मा चीनमा देखा परेको कोरोना भाइरसबाट हुने एक रोग हो।</li>
                                <li><i class="icofont-tick-mark"></i>कोविड-१९ का लक्षणहरुमा खोकी, ज्वरो र सासको दुखाइ समावेश छ. कोविड १९ गम्भीर हुन सक्छ, र केहि केसहरुमा मृत्यु पनि हुन सक्छ।</li>
                                <li><i class="icofont-tick-mark"></i>नयाँ कोरोना भाईरस अर्को व्यक्तिमा फैलिन्छ। यो प्रयोगशाला परीक्षणसँग निदान गरिन्छ।</li>
                            </ul>
                            <a href="{{ route('form.form') }}" class="lab-btn style-2"><span>जोखिम मूल्यांकन गर्नु होस्।</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- corona count section ending here -->

<!-- Service Section Start Here -->
<section class="service-section bg-service padding-tb">
    <div class="service-shape">
        <div class="shape shape-1">
            <img src="{{ asset('images/service/shape/01.png') }}" alt="service-shape">
        </div>
        <div class="shape shape-2">
            <img src="{{ asset('images/service/shape/01.png') }}" alt="service-shape">
        </div>
    </div>
    <div id="symptoms">
        <div class="container">
            <div class="section-header">
                <h2>कोरोनाका लक्षणहरु</h2>
                <p>तल देखिएका लक्षणहरु देखिएमा तपाईंलाई कोरोना लगेको हुन सक्छ।</p>
            </div>
            <div class="section-wrapper">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="service-item text-center">
                            <div class="service-inner">
                                <div class="service-thumb">
                                    <img src="{{ asset('images/service/01.jpg') }}" alt="service">
                                </div>
                                <div class="service-content">
                                    <h4>सुख्खा खोकी</h4>
                                    <p>सुख्खा खोकी कोविड-१९ को महत्वपूर्ण लक्षण मध्ये एक हो।</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="service-item text-center">
                            <div class="service-inner">
                                <div class="service-thumb">
                                    <img src="{{ asset('images/service/02.jpg') }}" alt="service">
                                </div>
                                <div class="service-content">
                                    <h4>उच्च ज्वरो</h4>
                                    <p>उच्च ज्वरो कोविड-१९ को महत्वपूर्ण लक्षण मध्ये एक हो।</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="service-item text-center">
                            <div class="service-inner">
                                <div class="prevention-thumb">
                                    <img src="{{ asset('images/service/03.jpg') }}" alt="service">
                                </div>
                                <div class="service-content">
                                    <h4>टाउको दुखाई</h4>
                                    <p>टाउको दुखाई कोविड-१९ को महत्वपूर्ण लक्षण मध्ये एक हो।</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="service-item text-center">
                            <div class="service-inner">
                                <div class="service-thumb">
                                    <img src="{{ asset('images/service/04.jpg') }}" alt="service">
                                </div>
                                <div class="service-content">
                                    <h4>सासको कमी</h4>
                                    <p>सासको कमी कोविड-१९ को महत्वपूर्ण लक्षण मध्ये एक हो।</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="service-item text-center">
                            <div class="service-inner">
                                <div class="service-thumb">
                                    <img src="{{ asset('images/service/05.jpg') }}" alt="service">
                                </div>
                                <div class="service-content">
                                    <h4>थकान</h4>
                                    <p>थकान कोविड-१९ को महत्वपूर्ण लक्षण मध्ये एक हो।</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="service-item text-center">
                            <div class="service-inner">
                                <div class="service-thumb">
                                    <img src="{{ asset('images/service/06.jpg') }}" alt="service">
                                </div>
                                <div class="service-content">
                                    <h4>घाँटी दुख्नु</h4>
                                    <p>घाँटी दुख्नु कोविड-१९ को महत्वपूर्ण लक्षण मध्ये एक हो।</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Service Section Ending Here -->


<!-- Team Member Section Start here -->

<!-- Team Member Section Ending here -->


<!-- safe actions section start here -->
<section id="prvention-lts">
    <section class="safe-actions padding-tb bg-action">
        <div class="action-shape">
            <img src="{{ asset('images/safe/shape/01.png') }}" alt="action-shape">
        </div>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="sa-thumb-part">
                        <div class="safe-thumb">
                            <img src="{{ asset('images/safe/01.jpg') }}" alt="safe-actions">
                            <div class="shape-icon">
                                <div class="sa-icon sa-green saicon-1">
                                    <img src="{{ asset('images/safe/shape/green/01.png') }}" alt="green-signal">
                                    <div class="saicon-content">
                                        <p>घरमै बस्नुहोस्।</p>
                                    </div>
                                </div>
                                <div class="sa-icon sa-green saicon-2">
                                    <img src="{{ asset('images/safe/shape/green/02.png') }}" alt="green-signal">
                                    <div class="saicon-content">
                                        <p>मास्क लगाउनुहोस्।</p>
                                    </div>
                                </div>
                                <div class="sa-icon sa-green saicon-3">
                                    <img src="{{ asset('images/safe/shape/green/03.png') }}" alt="green-signal">
                                    <div class="saicon-content">
                                        <p>आफ्नो हात धुनुहोस्।</p>
                                    </div>
                                </div>
                                <div class="sa-icon sa-green saicon-4">
                                    <img src="{{ asset('images/safe/shape/green/04.png') }}" alt="green-signal">
                                    <div class="saicon-content">
                                        <p>खानु भन्दा पहिले राम्रो सँग पकाउनुहोस्।</p>
                                    </div>
                                </div>
                                <div class="sa-icon sa-green saicon-5">
                                    <img src="{{ asset('images/safe/shape/green/05.png') }}" alt="green-signal">
                                    <div class="saicon-content">
                                        <p>आवश्यक परेमा डाक्टरको खोजी गर्नुहोस्।</p>
                                    </div>
                                </div>
                                <div class="sa-icon sa-red saicon-6">
                                    <img src="{{ asset('images/safe/shape/red/01.png') }}" alt="red-signal">
                                    <div class="saicon-content">
                                        <p>जंक फूड नखानुहोस्</p>
                                    </div>
                                </div>
                                <div class="sa-icon sa-red saicon-7">
                                    <img src="{{ asset('images/safe/shape/red/02.png') }}" alt="red-signal">
                                    <div class="saicon-content">
                                        <p>भीडमा नजानुहोस्</p>
                                    </div>
                                </div>
                                <div class="sa-icon sa-red saicon-8">
                                    <img src="{{ asset('images/safe/shape/red/03.png') }}" alt="red-signal">
                                    <div class="saicon-content">
                                        <p>जनावरबाट टाढा बस्नुहोस्</p>
                                    </div>
                                </div>
                                <div class="sa-icon sa-red saicon-9">
                                    <img src="{{ asset('images/safe/shape/red/04.png') }}" alt="red-signal">
                                    <div class="saicon-content">
                                        <p>हात मिलाउनुहुन्न </p>
                                    </div>
                                </div>
                                <div class="sa-icon sa-red saicon-10">
                                    <img src="{{ asset('images/safe/shape/red/05.png') }}" alt="red-signal">
                                    <div class="saicon-content">
                                        <p> जहाँसुकै खोकी नराख्ने</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="sa-content-part">
                        <h2>कसरी सुरक्षित रहने?</h2>
                        <p>कोविड-१९ बाट सुरक्षित रहन तल दिएका पोइन्टहरू पढ्नुहोस् </p>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="sa-title">
                                    <h6><i class="icofont-checked"></i>गर्न हुने काम हरु</h6>
                                </div>
                                <ul class="lab-ul">
                                    <li><i class="icofont-check-circled"></i>घरमै बस्नुहोस्</li>
                                    <li><i class="icofont-check-circled"></i>मास्क लगाउनुहोस्</li>
                                    <li><i class="icofont-check-circled"></i>आफ्नो हात धुनुहोस्</li>
                                    <li><i class="icofont-check-circled"></i>खानु भन्दा पहिले राम्रो सँग पकाउनुहोस्</li>
                                    <li><i class="icofont-check-circled"></i>भीडबाट बच्नुहोस्</li>
                                    <li><i class="icofont-check-circled"></i>आवश्यक परेमा डाक्टरको खोजी गर्नुहोस्</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="sa-title">
                                    <h6><i class="icofont-not-allowed"></i>गर्न नहुने काम हरु</h6>
                                </div>
                                <ul class="lab-ul">
                                    <li><i class="icofont-close-circled"></i>जंक फूड नखानुहोस्</li>
                                    <li><i class="icofont-close-circled"></i>भीडमा नजानुहोस्</li>
                                    <li><i class="icofont-close-circled"></i>जनावरबाट टाढा बस्नुहोस्</li>
                                    <li><i class="icofont-close-circled"></i>हात मिलाउनुहुन्</li>
                                    <li><i class="icofont-close-circled"></i>जहाँसुकै खोकी नराख्न</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<!-- safe actions section ending here -->


<!-- faq section start here -->
<section class="faq-section bg-faq padding-tb">
    <div class="faq-shape">
        <img src="{{ asset('images/faq/shape/01.png') }}" alt="action-shape">
    </div>
    <section class="container">
        <div class="section-header">
            <h2>अस्पताल क्षमता डेटा</h2>
        </div>
        <div class="section-wrapper">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-sm-8 col-12">
                    <select onchange="onChangeFunc()" id="select-p" class="select-css">
                        <option>कृपया प्रदेश छन्नुहोस्</option>
                        <option value="p1">प्रदेश १</option>
                        <option value="p2">प्रदेश २</option>
                        <option value="p3">प्रदेश ३</option>
                        <option value="p4">प्रदेश ४</option>
                        <option value="p5">प्रदेश ५</option>
                        <option value="p6">प्रदेश ६ </option>
                        <option value="p7">प्रदेश ७ </option>
                    </select>
                </div>
                <div class="col-lg-6 col-sm-8 col-12"></div>
                <table id="prov-table" border="1">
                    <thead>
                    <tr>
                        <th>ठेगाना</th>
                        <th>अस्पतालको नाम</th>
                        <th>सम्पर्क नम्बर</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </section>
    </div>
    </div>
</section>

<!-- faq section ending here -->

<!-- Blog Section Start Here -->

<!-- Blog Section Ending Here -->

<!-- Sponsor Section Start Here -->

<!-- Sponsor Section Ending Here -->

<!-- Footer Section Start Here -->
<footer style="background-image: url('/public/css/bg-image/footer-bg.jpg');">
    <div class="footer-top padding-tb">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="footer-item first-set">
                        <div class="footer-inner">
                            <div class="footer-content">
                                <div class="title">
                                    <h6>निर्माण तथा प्रचारप्रसार: राष्ट्रीय युवा संघ ,नेपाल कोरोना रोकथाम तथा सचेतना अभियान</h6>
                                </div>
                                <div class="content">

                                    <h6>मुख्यालय:</h6>
                                    <p>राष्ट्रीय युवा संघ
                                        पेरिसडाडा, कोटेश्वोर, काठमाडौँ, नेपाल</p>
                                    <ul class="lab-ul">
                                        <li>
                                            <p><span>सम्पर्क नम्बर:</span>०१-४६०२४१७</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="footer-item">
                        <div class="footer-inner">
                            <div class="footer-content">
                                <div class="title">
                                    <h6>नेभिगेट गर्नुहोस्</h6>
                                </div>
                                <div class="content">
                                    <ul class="lab-ul">
                                        <li><a href="#"><i class="icofont-caret-right"></i>विज्ञापनदाताहरू</a></li>
                                        <li><a href="#"><i class="icofont-caret-right"></i>विकासकर्ताहरू</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="footer-item">
                        <div class="footer-inner">
                            <div class="footer-content">
                                <div class="title">
                                    <h6>सामाजिक सम्पर्क</h6>
                                </div>
                                <div class="content">
                                    <ul class="lab-ul">
                                        <li><a href="https://www.facebook.com/yfnepal.org" target="_blank"><i class="icofont-facebook"></i>फेसबुक</a></li>
                                        <li><a href="#"><i class="icofont-twitter"></i>ट्विटर</a></li>
                                        <li><a href="#"><i class="icofont-youtube"></i>यूट्यूब</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="footer-item">
                        <div class="footer-inner">
                            <div class="footer-content">
                                <div class="title">
                                    <h6>गोपनीयता</h6>
                                </div>
                                <div class="content">
                                    <ul class="lab-ul">
                                        <li><a href="#"><i class="icofont-caret-right"></i>विज्ञापनदाता सँग सम्झौता</a></li>
                                        <li><a href="#"><i class="icofont-caret-right"></i>गोपनीयता नीति</a></li>
                                        <li><a href="#"><i class="icofont-caret-right"></i>टेक्नोलोजी गोपनीयता</a></li>
                                        <li><a href="#"><i class="icofont-caret-right"></i>डिभेलपर  सम्झौता </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="section-wrapper">
                <p>Powred By <a href="https://codeappstore.com" target="_blank" class="text-light">CodeAppStore</a> &copy; {{ date('Y') }}</p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section Ending Here -->

<!-- scrollToTop start here -->
<a href="#" class="scrollToTop"><i class="icofont-swoosh-up"></i><span class="pluse_1"></span><span class="pluse_2"></span></a>
<!-- scrollToTop ending here -->

<script src="{{ asset('js/apiconnection.js') }}"></script>
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/waypoints.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/lightcase.js') }}"></script>
<script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('js/swiper.min.js') }}"></script>
<script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('js/functions.js') }}"></script>
<script src="{{ asset('js/tabledata.js') }}"></script>

</body>
</html>
