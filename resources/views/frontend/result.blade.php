<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" media="screen" id="color">
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome-5/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/jquery-datatable/jquery.dataTables.min.css') }}">
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-datatable/jquery.dataTables.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            // scrollWin(0, -1000, 5);
            var i;
            for (i = 0; i <= 4; i++) {
                window.scrollTo({top: 0});
            }
        })
    </script>
</head>

<body class="bg-light">
<div class="card fixed-top d-md-none  d-lg-block  d-none col-sm-12" style="margin-top: -0.1%;">
    <div class="card-header bg-white">
            <span>
                <h2 class="text-center" style="color: #FE0000">
                    <img src="{{ asset('logo.png') }}"
                         style="max-width: 100px; height: auto; padding-right: 2%;"><strong>&nbsp;&nbsp;Corona Virus Risk Scan</strong></h2>

            </span>
        <h2 class="text-center mt-2" style="color: black">राष्ट्रीय युवा संघ </h2>
    </div>
</div>
<div class="card fixed-top d-sm-block d-md-block d-lg-none col-sm-12">
    <div class="card-header bg-white">
            <span>
                <h2 class="text-center text-danger"><img src="{{ asset('logo.png') }}"
                                                         style="max-width: 10%;height: auto; padding-right: 2%;"><strong>&nbsp;&nbsp;Corona Virus Risk Scan</strong></h2>
            </span>
        <span>
                <h2 class="text-center" style="color: black"><strong>&nbsp;&nbsp;राष्ट्रीय युवा संघ</strong></h2>
            </span>
    </div>
</div>
<div class="container col-sm-12" style="margin-top: 7rem; margin-bottom: 7rem">
    <div class="card">
        <h5 class="card-header preview-textfield">{{ number_format((float)$data['score'], 2) .'%' }}</h5>
        <div class="card-body container">
            <div class="preview-textfield">
                <canvas width=380 height=150 id="canvas-preview"></canvas>
            </div>
            <div>
                <div class="container-fluid">
                    <div class="row mb-3">
                        <div class="container">
                            <div class="preview-textfield">
                                @if($data['lang'] == 'english')
                                    <h4 class="preview-textfield"
                                        style="font-size: 1em;">{{ $data['score']<=33.99 ? 'Normal' : ($data['score']>=34 && $data['score']<=66.99 ? 'Medium' : 'High') }}</h4>
                                @else
                                    <h4 class="preview-textfield"
                                        style="font-size: 1em;">{{ $data['score']<=33.99 ? 'सामान्य' : ($data['score']>=34 && $data['score']<=66.99 ? 'मध्यम' : 'उच्च') }}</h4>
                                @endif

                                @if($data['lang'] == 'english')
                                    <h4 class="mt-4">{{ $data['score']<=33.99 ? 'Maintain social distance to stop spreading corona virus. Stay away from crowd and maintain 6 feet distance if need to go out ' : ($data['score']>=34 && $data['score']<=66.99 ? 'According to your answers your health is normal. We suggest you to be in self quarantine. Maintain social distance at your home. If possible stay in separate room and use separate bathroom.This prevents spreading corona virus to your near.' : 'According to your answers your health is critical. You might got infected with COVID-19. Please consult with doctor you may require COVID-19 test.') }}
                                    </h4>
                                @else
                                    <h4 class="mt-4">{{ $data['score']<=33.99 ? 'भौतिक दुरी कायम गर्ने गर्नुहोस , भाइरस फैलनबाट रोक्नुहोस । अत्यावश्यक काममा घरबाट निस्केको बेलामा कम्तीमा ६ फुटको दुरी कायम गर्नुहोस र भिडभाडबाट टाढा रहनुहोस' : ($data['score']>=34 && $data['score']<=66.99 ? 'यहाँले दिनु भएको जवाफ अनुसार यहाँलाइ कोभीड-१९ को जोखिम सामान्य छ । तपाई आफै क्वारेन्टाइनमा बस्नुहोस । तपाई घरमै अरुबाट दुरि कायम गरेर कम्तीमा १४ दिनसम्म अलग्गै बस्नु पर्ने देखियो । यदी सकिन्छ भने आफ्नो अलग्गै कोठा र अलग्गै ट्वाइलेटको ब्यबस्था गर्नुहोस यसले तपाईको वर-परका व्यक्तिहरुकाे सुरक्षा गर्छ ।' : 'यहाँले दिनु भएको जवाफ अनुसार यहाँलाइ कोभीड-१९ को जोखिम छ । तपाईं कोभीड-१९ संक्रमित हुनसक्नुहुन्छ । कृपया डाक्टर संग परामर्श लिएर कोभीड-१९ परीक्षण गर्नुहोस्।') }}
                                    </h4>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="container-fluid" style="margin-top: 1.5rem">
            <div class="ml-5 container card-body">
                <div class="row">
                    @if($data['lang'] == 'english')
                        <div class="col-md-6 col-sm-12">
                            <h2>Nepal's Update</h2>
                            <p>Total Confirmed Cases: <span id="NTCC"></span></p>
                            <p>Total Recovered: <span id="NTR"></span></p>
                            <p>Confirmed Deaths: <span id="NCD"></span></p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <h2>World's Update</h2>
                            <p>Total Confirmed Cases: <span id="WTCC"></span></p>
                            <p>Total Recovered: <span id="WTR"></span></p>
                            <p>Confirmed Deaths: <span id="WCD"></span></p>
                        </div>
                    @else
                        <div class="col-md-6 col-sm-12">
                            <h2>नेपालको ताजा अपडेट</h2>
                            <p>कुल संक्रमित: <span id="NTCC"></span></p>
                            <p>निको भएको: <span id="NTR"></span></p>
                            <p>मृत्यु भएको: <span id="NCD"></span></p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <h2>विश्वको ताजा अपडेट</h2>
                            <p>कुल संक्रमित: <span id="WTCC"></span></p>
                            <p>निको भएको: <span id="WTR"></span></p>
                            <p>मृत्यु भएको: <span id="WCD"></span></p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body precaution container-fluid">
            @if($data['lang'] == 'english')
                <ul style="margin-top: 2em;">
                    <h2>Basic Prevention and Precautions</h2>
                    <p>
                        Be aware or Educate yourself with the latest updates on the following websites : <a
                            href="https://www.who.int/health-topics/coronavirus" target="_blank">WHO</a> &amp; <a
                            href="https://www.mohfw.gov.in/" target="_blank">MoHFW</a>
                    </p>
                    <p>
                        Most people who become infected experience mild illness and recover, but it can be more
                        severe
                        for
                        others. Take care of your health and protect others by doing the following:
                    </p>
                    <li>
                        <h4>Wash your hands frequently</h4>
                        <p>
                            Regularly and thoroughly clean your hands with an alcohol-based hand rub or wash them
                            with
                            soap
                            and water.
                        </p>
                    </li>
                    <li>
                        <h4>Maintain social distancing</h4>
                        <p>
                            Maintain at least 2 metre (6 feet) distance between yourself and anyone who is coughing
                            or
                            sneezing.
                        </p>
                    </li>
                    <li>
                        <h4>Avoid touching eyes, nose and mouth</h4>
                        <p>
                            Our hands touch many surfaces and can pick up viruses. Once contaminated, hands can
                            transfer
                            the
                            virus to your eyes, nose or mouth.
                        </p>
                    </li>
                    <li>
                        <h4>Practice respiratory hygiene</h4>
                        <p>
                            Make sure you and the people around you, follow good respiratory hygiene. This means
                            covering
                            your mouth and nose with your bent elbow or tissue when you cough or sneeze. Then
                            dispose of
                            the
                            used tissue immediately.
                        </p>
                    </li>
                    <li>
                        <h4>If you have fever, cough and difficulty in breathing, seek medical care early</h4>
                        <p>
                            Stay home if you feel unwell. If you have a high fever, moderate to severe cough and
                            difficulty
                            in breathing and it is worsening in short period of time, seek medical asistance and
                            call in
                            advance.
                        </p>
                    </li>
                </ul>
            @else
                <ul style="margin-top: 2em;">
                    <h2>आधारभूत रोकथाम र सावधानीहरू</h2>
                    <p>
                        <a
                            href="https://www.who.int/health-topics/coronavirus" target="_blank">WHO</a> र <a
                            href="https://www.mohfw.gov.in/" target="_blank">MoHFW</a> को वेबसाइटबाट आफुलाई सचेत वा
                        शिक्षित रहनुहोस् |
                    </p>
                    <p>
                        धेरै व्यक्तिहरू जो संक्रमित हुन्छन् हल्का बिमारीको अनुभव गर्दछन् र निको हुन्छन्, तर अरूहरूको
                        लागि यो अधिक गम्भीर हुन सक्छ | तपाईंको स्वास्थ्यको ख्याल राख्नुहोस् र अरूलाई निम्न कार्य
                        गरेर
                        सुरक्षित गर्नुहोस्:
                    </p>
                    <li>
                        <h4>आफ्ना हातहरू बारम्बार धुनुहोस्</h4>
                        <p>
                            नियमित रूपमा राम्ररी आफ्ना हात साबुन पानीले धुनुहोस।
                        </p>
                    </li>
                    <li>
                        <h4>सामाजिक दूरी राख्नुहोस्</h4>
                        <p>
                            कम्तिमा २ मिटर (६ फिट) दूरी आफु र जो कोही खोक्ने वा छींकनेको बीचमा राख्नुहोस् ।
                        </p>
                    </li>
                    <li>
                        <h4>आँखा, नाक र मुख नछुनुस </h4>
                        <p>
                            हाम्रो हातले धेरै सतहहरु लाई छुन्छ र भाइरसहरु लिन सक्छ। एक पटक दूषित भएपछि, हातहरूले
                            भाइरसलाई तपाईंको आँखा, नाक वा मुखमा सार्न सक्छ ।
                        </p>
                    </li>
                    <li>
                        <h4>श्वसन स्वच्छता अभ्यास गर्नुहोस्</h4>
                        <p>
                            निश्चित गर्नुहोस् कि तपाईं र वरपरका व्यक्तिहरू, राम्रो श्वसन स्वच्छताको पालना गर्नुहोस्।
                            यसको मतलब तपाईको मुख र नाकलाई तपाईको कुमिएको कुहिनो वा टिश्युले ढाकिरहेको छ जब तपाईं
                            खान्की
                            वा छींक गर्नुहुन्छ। त्यसोभए तुरुन्त प्रयोग गरिएको टिशूको डिस्पोजल गर्नुहोस्।
                        </p>
                    </li>
                    <li>
                        <h4>यदि तपाईंलाई ज्वरो, खोकी र सास फेर्न गाह्रो छ भने, चाँडै नै मेडिकल हेरचाह गर्नुहोस्
                            । </h4>
                        <p>
                            यदि तपाई अस्वस्थ महसुस गर्नुहुन्छ भने घरमै बस्नुहोस्। यदि तपाईलाई उच्च ज्वरो छ, मध्यम
                            देखि
                            गम्भीर खोकी र सास फेर्न कठिनाई छ र यो छोटो अवधिमा बढ्दो छ भने, चिकित्सा सहायता
                            खोज्नुहोस् र
                            अग्रिम कल गर्नुहोस्।
                        </p>
                    </li>
                </ul>
            @endif
            <div class="media mt-3">
                <button class="reset" onclick="reset()" data-toggle="tooltip" data-placement="top" title="Refresh"><i
                        class="fas fa-undo"></i></button>
            </div>
            <div class="media mt-3">
                <a class="home_Page" href="{{ route('form.main') }}" data-toggle="tooltip" data-placement="top"
                   title="Go to home"><i class="fas fa-home"></i></a>
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

</div>
</body>
<style>
    .preview-textfield {
        top: 0px;
        left: 0;
        right: 0;
        text-align: center;
        font-size: 3em;
        font-weight: bold;
        color: black;
    }

    #result {
        margin-top: 3em;
    }

    .precaution h4 {
        font-weight: bold;
        color: black;
    }
</style>
<script src="{{ asset('js/gauge.min.js') }}"></script>
<script>
    scrollWin(0, 0, 3);
    var opts = {
        angle: 0, // The span of the gauge arc
        lineWidth: 0.32, // The line thickness
        radiusScale: 0.6, // Relative radius
        pointer: {
            length: 0.48, // // Relative to gauge radius
            strokeWidth: 0.057, // The thickness
            color: '#000000' // Fill color
        },
        limitMax: false, // If false, max value increases automatically if value > maxValue
        limitMin: false, // If true, the min value of the gauge will be fixed
        colorStart: '#6FADCF', // Colors
        colorStop: '#8FC0DA', // just experiment with them
        strokeColor: '#E0E0E0', // to see which ones work best for you
        generateGradient: true,
        highDpiSupport: true, // High resolution support
        // renderTicks is Optional
        renderTicks: {
            divisions: 0,
            divWidth: 1.1,
            divLength: 0.15,
            divColor: '#333333',
            subDivisions: 2,
            subLength: 0.5,
            subWidth: 4.5,
            subColor: '#666666'
        },

        staticZones: [{
            strokeStyle: "#30B32D",
            min: 0,
            max: 33
        }, // Green
            {
                strokeStyle: "#FFDD00",
                min: 34,
                max: 66
            }, // Yellow
            {
                strokeStyle: "#F03E3E",
                min: 67,
                max: 100
            } // Red
        ]

    };
    var target = document.getElementById('canvas-preview'); // your canvas element
    var gauge = new Gauge(target).setOptions(opts); // create sexy gauge!
    gauge.maxValue = 100; // set max gauge value
    gauge.setMinValue(0); // Prefer setter over gauge.minValue = 0
    gauge.animationSpeed = 40; // set animation speed (32 is default value)
    gauge.set({{ $data['score'] }}); // set actual value
</script>
<script>
    $(document).ready(function () {
        $('.hospitalTable').DataTable();
    });
</script>
</html>
