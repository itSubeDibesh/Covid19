var lang,
    age,
    gender,
    temperature,
    dry_cough = 0,
    loss_or_diminished_sense_of_smell = 0,
    sore_throat = 0,
    weakness = 0,
    change_in_appetite = 0,
    none_of_symptom = 0,

    moderate_to_severe_cough = 0,
    feeling_breathless = 0,
    difficulty_in_breathing = 0,
    drowsiness = 0,
    persistant_pain_and_pressure_in_chest = 0,
    severe_weakness = 0,
    none_of_additional_symptom = 0,

    no_travel_history = 0,
    no_contact_with_anyone_with_symptom = 0,
    history_of_travel_in_affected_geographical_area_in_last_14Days = 0,
    close_contact_With_Confirmed_covid_in_Last_14Days = 0,

    diabetes = 0,
    high_blood_pressure = 0,
    heart_disease = 0,
    kidney_disease = 0,
    lung_disease = 0,
    stroke = 0,
    reduced_immunity = 0,
    non_of_diseases = 0,

    phone = "",
    report_of = "",
    state = "",

    improved = 0,
    no_change = 0,
    worsened = 0,
    worsened_considerably = 0,
    lat = "",
    lng = "",
    gLocation,
    total_point = 0,
    score;

var dry_coughCount = 0,
    loss_or_diminished_sense_of_smellCount = 0,
    change_in_appetiteCount = 0,
    sore_throatCount = 0,
    weaknessCount = 0,
    none_of_symptomCount = 0,

    moderate_to_severe_coughCount = 0,
    feeling_breathlessCount = 0,
    difficulty_in_breathingCount = 0,
    drowsinessCount = 0,
    persistant_pain_and_pressure_in_chestCount = 0,
    severe_weaknessCount = 0,
    none_of_additional_symptomCount = 0,

    diabetesCount = 0,
    high_blood_pressureCount = 0,
    heart_diseaseCount = 0,
    kidney_diseaseCount = 0,
    lung_diseaseCount = 0,
    strokeCount = 0,
    reduced_immunityCount = 0,
    non_of_diseasesCount = 0;

var Symptoms = "",
    AdditionalSymptoms = "",
    Diseases = "";
var Details = {};
/*---------getLocation---------*/
window.onload = function() {
    getLocation();
}

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        console.log("Geolocation is not supported by this browser");
    }
}

function showPosition(position) {
    lat = position.coords.latitude;
    lng = position.coords.longitude;
}
/*---------scrollWin---------*/
function scrollWin(x, y, times) {
    var i;
    var num = 3;
    if (num == times) {
        for (i = 0; i < times; i++) {
            window.scrollBy(x, y);
        }
    } else {

    }

}
/*---------load---------*/
$(document).ready(function() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
        $('#Load0').show();
        $('#Load').remove();
    },
    setInterval(function() {
        $('#Load0').remove();
        $('#Sent1').show();
        $('#SentInput1').show();
    }, 1000)
);
/*---------reset---------*/
function reset() {
    location.reload();
}
/*---------setLang---------*/
function setLang(value) {
    lang = value;
    if (lang == "nepali") {
        document.getElementById("Language").innerHTML = "नेपाली";
        $('#SentInput1').remove();
        $('#Reply1').show();
        $('#LoadReportConfirmation').show();
        setInterval(function() {
            $('#LoadReportConfirmation').remove();
            $('#SentReportConfirmationNepali').show();
            $('#SentInputReportConfirmationNepali').show();
        }, 1000);
    } else {
        document.getElementById("Language").innerHTML = value;
        $('#SentInput1').remove();
        $('#Reply1').show();
        $('#LoadReportConfirmation').show();
        setInterval(function() {
            $('#LoadReportConfirmation').remove();
            $('#SentReportConfirmation').show();
            $('#SentInputReportConfirmation').show();
        }, 1000);
    }
}

/*---------setReportOption---English------*/
function setReportOption(val) {
    if (val == "self") {
        report_of = "self";
        document.getElementById("ReportConfirmation").innerHTML = "Myself";
    } else {
        report_of = "others";
        document.getElementById("ReportConfirmation").innerHTML = "Others";
    }

    $('#SentInputReportConfirmation').remove();
    $('#ReplyReportConfirmation').show();
    $('#LoadProvienceConfirmation').show();
    var Times = 3;
    setInterval(function() {
        $('#LoadProvienceConfirmation').remove();
        $('#SentProvienceConfirmation').show();
        $('#SentInputProvienceConfirmation').show();
        scrollWin(0, 1000, Times);
        Times++;
    }, 1000);
}

/*---------setReportOption---Nepali------*/
function setReportOptionNepali(val) {
    if (val == "self") {
        report_of = "self";
        document.getElementById("ReportConfirmation").innerHTML = "आफ्नो";
    } else {
        report_of = "others";
        document.getElementById("ReportConfirmation").innerHTML = "अरु कसैको ";
    }
    $('#SentInputReportConfirmationNepali').remove();
    $('#ReplyReportConfirmation').show();
    $('#LoadProvienceConfirmation').show();
    var Times = 3;
    setInterval(function() {
        $('#LoadProvienceConfirmation').remove();
        $('#SentProvienceConfirmationNepali').show();
        $('#SentInputProvienceConfirmationNepali').show();
        scrollWin(0, 1000, Times);
        Times++;
    }, 1000);
}

/*---------setProvienceOption---------*/
function setProvienceOption(val) {
    if (val == "province_1") {
        state = "province_1";
        document.getElementById("Provience").innerHTML = "Province No 1";
    } else if (val == "province_2") {
        state = "province_2";
        document.getElementById("Provience").innerHTML = "Province No 2";
    } else if (val == "province_3_bagmati") {
        state = "province_3_bagmati";
        document.getElementById("Provience").innerHTML = "Bagmati Pradesh";
    } else if (val == "province_4_gandaki") {
        state = "province_4_gandaki";
        document.getElementById("Provience").innerHTML = "Gandaki Pradesh";
    } else if (val == "province_5") {
        state = "province_5";
        document.getElementById("Provience").innerHTML = "Province No 5";
    } else if (val == "province_6_karnali") {
        state = "province_6_karnali";
        document.getElementById("Provience").innerHTML = "Karnali pradesh";
    } else if (val == "province_7_sudurpachim") {
        state = "province_7_sudurpachim";
        document.getElementById("Provience").innerHTML = "Sudurpashchim Pradesh";
    } else {
        state = "abroad";
        document.getElementById("Provience").innerHTML = "Abroad";
    }

    $('#SentInputProvienceConfirmation').remove();
    $('#ReplyProvienceConfirmation').show();
    $('#Load1').show();
    var Times = 3;
    setInterval(function() {
        $('#Load1').remove();
        $('#Sent2').show();
        $('#ReplyInput1').show();
        scrollWin(0, 1000, Times);
        Times++;
    }, 1000);
}

/*---------setProvienceOptionNepali---Nepali------*/
function setProvienceOptionNepali(val) {
    if (val == "province_1") {
        state = "province_1";
        document.getElementById("Provience").innerHTML = "प्रदेश नं० १";
    } else if (val == "province_2") {
        state = "province_2";
        document.getElementById("Provience").innerHTML = "प्रदेश नं० २";
    } else if (val == "province_3_bagmati") {
        state = "province_3_bagmati";
        document.getElementById("Provience").innerHTML = "बागमती प्रदेश";
    } else if (val == "province_4_gandaki") {
        state = "province_4_gandaki";
        document.getElementById("Provience").innerHTML = "गण्डकी प्रदेश";
    } else if (val == "province_5") {
        state = "province_5";
        document.getElementById("Provience").innerHTML = "प्रदेश नं० ५";
    } else if (val == "province_6_karnali") {
        state = "province_6_karnali";
        document.getElementById("Provience").innerHTML = "कर्नाली प्रदेश ";
    } else if (val == "province_7_sudurpachim") {
        state = "province_7_sudurpachim";
        document.getElementById("Provience").innerHTML = "सुदुरपश्चिम प्रदेश";
    } else {
        state = "abroad";
        document.getElementById("Provience").innerHTML = "विदेश";
    }

    $('#SentInputProvienceConfirmationNepali').remove();
    $('#ReplyProvienceConfirmation').show();
    $('#Load1').show();
    var Times = 3;
    setInterval(function() {
        $('#Load1').remove();
        $('#Sent2Nepali').show();
        $('#ReplyInput1Nepali').show();
        scrollWin(0, 1000, Times);
        Times++;
    }, 1000);
}

/*---------submitAge---------*/
function submitAge() {
    age = $("#ageInp").val();
    if (age!='' &&  age <= 100 && age > 0) {
        document.getElementById("age").innerHTML = age;
        $('#ReplyInput1').remove();
        $('#Reply2').show();
        $('#LoadPhoneOption').show();
        var Times = 3;
        setInterval(function() {
            $('#LoadPhoneOption').remove();
            $('#SentPhoneOption').show();
            $('#SentInputPhoneOption').show();
            scrollWin(0, 1000, Times);
            Times++;
        }, 1000);
        if (age <= 5 && age >= 50) {
            total_point += 3;
        } else if (age > 5 && age < 50) {
            total_point += 1;
        } else {
            total_point += 0;
        }
    } else {
        document.getElementById("age").innerHTML = age;
        $('#ReplyInput1').hide();
        $('#Sent2').show();
        $('#Load1').show();
        var Times = 3;
        setInterval(function() {
            $('#Load1').hide();
            $('#Sent2').show();
            $('#ReplyInput1').show();
            scrollWin(0, 1000, Times);
            Times++;
        }, 1000);
    }

}

/*---------submitAgeNepali---Nepali------*/
function submitAgeNepali() {
    age = $("#ageInpNepali").val();
    if (age <= 100 && age >= 0) {
        document.getElementById("age").innerHTML = age;
        $('#ReplyInput1Nepali').remove();
        $('#Reply2').show();
        $('#LoadPhoneOption').show();
        var Times = 3;
        setInterval(function() {
            $('#LoadPhoneOption').remove();
            $('#SentPhoneOptionNepali').show();
            $('#SentInputPhoneOptionNepali').show();
            scrollWin(0, 1000, Times);
            Times++;
        }, 1000);
        if (age <= 5 && age >= 50) {
            total_point += 3;
        } else if (age > 5 && age < 50) {
            total_point += 1;
        } else {
            total_point += 0;
        }
    } else {
        document.getElementById("age").innerHTML = age;
        $('#ReplyInput1Nepali').hide();
        $('#Sent2Nepali').show();
        $('#LoadPhoneOption').show();
        var Times = 3;
        setInterval(function() {
            $('#LoadPhoneOption').hide();
            $('#Sent2Nepali').show();
            $('#ReplyInput1Nepali').show();
            scrollWin(0, 1000, Times);
            Times++;
        }, 1000);
    }

}

/*---------setPhoneOption---------*/
function setPhoneOption(val) {
    if (val == 1) {
        setPhoneOptionCount = 1;
        document.getElementById("PhoneOption").innerHTML = "Yes";
    } else {
        phone = "";
        setPhoneOptionCount = 2;
        document.getElementById("PhoneOption").innerHTML = "No";
    }

    $('#SentInputPhoneOption').remove();
    $('#ReplyPhoneOption').show();
    var Times = 3;
    if (setPhoneOptionCount == 1) {
        setInterval(function() {
            $('#SentInputPhone').show();
            scrollWin(0, 1000, Times);
            Times++;
        }, 1000);

    } else {
        $('#Load2').show();
        setInterval(function() {
            $('#Load2').remove();
            $('#Sent3').show();
            $('#SentInput2').show();
            scrollWin(0, 1000, Times);
            Times++;
        }, 1000);
    }
}

/*---------setPhoneOptionNepali------Nepali---*/
function setPhoneOptionNepali(val) {
    if (val == 1) {
        setPhoneOptionCount = 1;
        document.getElementById("PhoneOption").innerHTML = "हुन्छ";
    } else {
        phone = "";
        setPhoneOptionCount = 2;
        document.getElementById("PhoneOption").innerHTML = "हुदैन";
    }

    $('#SentInputPhoneOptionNepali').remove();
    $('#ReplyPhoneOption').show();
    var Times = 3;
    if (setPhoneOptionCount == 1) {
        setInterval(function() {
            $('#SentInputPhoneNepali').show();
            scrollWin(0, 1000, Times);
            Times++;
        }, 1000);

    } else {
        $('#Load2').show();
        setInterval(function() {
            $('#Load2').remove();
            $('#Sent3Nepali').show();
            $('#SentInput2Nepali').show();
            scrollWin(0, 1000, Times);
            Times++;
        }, 1000);
    }
}

/*---------submitPhone---------*/
function submitPhone() {
    phone = $("#phoneNo").val();
    var search = phone.substring(0, 1);
    if (search == 9 && phone.length == 10) {
        document.getElementById("Phone").innerHTML = phone.toString();
        $('#SentInputPhone').remove();
        $('#ReplyPhone').show();
        var Times = 3;
        setInterval(function() {
            $('#Load2').remove();
            $('#Sent3').show();
            $('#SentInput2').show();
            scrollWin(0, 1000, Times);
            Times++;
        }, 1000);
    } else {
        document.getElementById("Phone").innerHTML = phone;
        $('#SentInputPhone').hide();
        var Times = 3;
        setInterval(function() {
            $('#SentInputPhone').show();
            scrollWin(0, 1000, Times);
            Times++;
        }, 1000);
    }
}

/*---------submitPhoneNepali-----Nepali----*/
function submitPhoneNepali() {
    phone = $("#phoneNoNepali").val();
    var search = phone.substring(0, 1);
    if (search == 9 && phone.length == 10) {
        document.getElementById("Phone").innerHTML = phone.toString();
        $('#SentInputPhoneNepali').remove();
        $('#ReplyPhone').show();
        var Times = 3;
        setInterval(function() {
            $('#Load2').remove();
            $('#Sent3Nepali').show();
            $('#SentInput2Nepali').show();
            scrollWin(0, 1000, Times);
            Times++;
        }, 1000);
    } else {
        document.getElementById("Phone").innerHTML = phone;
        $('#SentInputPhoneNepali').hide();
        var Times = 3;
        setInterval(function() {
            $('#SentInputPhoneNepali').show();
            scrollWin(0, 1000, Times);
            Times++;
        }, 1000);
    }
}

/*---------setGender---------*/
function setGender(val) {
    gender = val;
    document.getElementById("gender").innerHTML = gender;
    $('#SentInput2').remove();
    $('#Reply3').show();
    $('#Load3').show();
    var Times = 3;
    setInterval(function() {
        $('#Load3').remove();
        $('#Sent4').show();
        $('#SentInput3').show();
        scrollWin(0, 1000, Times);
        Times++;
    }, 1000);
}

/*---------setGenderNepali---Nepali------*/
function setGenderNepali(val) {
    gender = val;
    if (gender = "male") {
        document.getElementById("gender").innerHTML = "पुरुष ";
    } else if (gender = "female") {
        document.getElementById("gender").innerHTML = "महिला";
    } else {
        document.getElementById("gender").innerHTML = "अन्य";
    }
    $('#SentInput2Nepali').remove();
    $('#Reply3').show();
    $('#Load3').show();
    var Times = 3;
    setInterval(function() {
        $('#Load3').remove();
        $('#Sent4Nepali').show();
        $('#SentInput3Nepali').show();
        scrollWin(0, 1000, Times);
        Times++;
    }, 1000);
}

/*---------setTemp---------*/
function setTemp(val) {
    temperature = val;
    if (temperature == "normal") {
        total_point += 1;
        document.getElementById("temperature").innerHTML = "Normal (96<sup>o</sup>F-98.6<sup>o</sup>)";
    } else if (temperature == "fever") {
        total_point += 2;
        document.getElementById("temperature").innerHTML = "Fever (98.6<sup>o</sup>F-102<sup>o</sup>F)";
    } else if (temperature == "high_fever") {
        total_point += 3;
        document.getElementById("temperature").innerHTML = "High Fever (>102<sup>o</sup>F)";
    } else {
        total_point += 0;
        document.getElementById("temperature").innerHTML = "Don't Know";
    }
    $('#SentInput3').remove();
    $('#Reply4').show();
    $('#Load4').show();
    var Times = 3;
    setInterval(function() {
        $('#Load4').remove();
        $('#Sent5').show();
        $('#SentInput4').show();
        scrollWin(0, 1000, Times);
        Times++;
    }, 1000);
}

/*---------setTempNepali----Nepali-----*/
function setTempNepali(val) {
    temperature = val;
    if (temperature == "normal") {
        total_point += 1;
        document.getElementById("temperature").innerHTML = "सामान्य (९६<sup>o</sup>F-९८.६<sup>o</sup>F)";
    } else if (temperature == "fever") {
        total_point += 2;
        document.getElementById("temperature").innerHTML = "ज्वरो (९८.६<sup>o</sup>F-१०२<sup>o</sup>F)";
    } else if (temperature == "high_fever") {
        total_point += 3;
        document.getElementById("temperature").innerHTML = "उच्च ज्वरो (>१०२<sup>o</sup>F)";
    } else {
        total_point += 0;
        document.getElementById("temperature").innerHTML = "थाहा छैन";
    }
    $('#SentInput3Nepali').remove();
    $('#Reply4').show();
    $('#Load4').show();
    var Times = 3;
    setInterval(function() {
        $('#Load4').remove();
        $('#Sent5Nepali').show();
        $('#SentInput4Nepali').show();
        scrollWin(0, 1000, Times);
        Times++;
    }, 1000);
}


/*---------buttonClicked---for Symptoms------*/
function buttonClicked(val) {
    if (val == 1) {
        dry_coughCount++;
        if (dry_coughCount % 2 == 1) {
            dry_cough = 1;
            none_of_symptom = 0;
            total_point += 1;
            var btn = $("<button type='button' id='dry_coughBtn' onclick='buttonClicked(1);' class='btn btn-sm btn-primary'>Dry Cough</button>");
            $("#dry_coughBtn").replaceWith(btn);
        } else {
            dry_cough = 0;
            total_point -= 1;
            var btn1 = $("<button type='button' id='dry_coughBtn' onclick='buttonClicked(1);' class='btn btn-sm btn-outline-primary'>Dry Cough</button>");
            $("#dry_coughBtn").replaceWith(btn1);
        }
        if (dry_cough == 1) {
            Symptoms += "Dry Cough, ";
        } else {
            Symptoms = Symptoms.replace("Dry Cough, ", "");
        }

        $("#ConfirmSymptoms").show();
        $("#NonSymptoms").hide();

    } else if (val == 2) {
        loss_or_diminished_sense_of_smellCount++;
        if (loss_or_diminished_sense_of_smellCount % 2 == 1) {
            loss_or_diminished_sense_of_smell = 1;
            none_of_symptom = 0;
            total_point += 1;
            var btn = $("<button type='button' id='loss_or_diminished_sense_of_smellBtn' onclick='buttonClicked(2);' class='btn btn-sm btn-primary'>Loss or diminished sense of smell</button>");
            $("#loss_or_diminished_sense_of_smellBtn").replaceWith(btn);
        } else {
            loss_or_diminished_sense_of_smell = 0;
            total_point -= 1;
            var btn1 = $("<button type='button' id='loss_or_diminished_sense_of_smellBtn' onclick='buttonClicked(2);' class='btn btn-sm btn-outline-primary'>Loss or diminished sense of smell</button>");
            $("#loss_or_diminished_sense_of_smellBtn").replaceWith(btn1);
        }
        if (loss_or_diminished_sense_of_smell == 1) {
            Symptoms += "Loss or diminished sense of smell, ";
        } else {
            Symptoms = Symptoms.replace("Loss or diminished sense of smell, ", "");
        }

        $("#ConfirmSymptoms").show();
        $("#NonSymptoms").hide();

    } else if (val == 3) {
        sore_throatCount++;
        if (sore_throatCount % 2 == 1) {
            sore_throat = 1;
            none_of_symptom = 0;
            total_point += 1;
            var btn = $("<button type='button' id='sore_throatBtn' onclick='buttonClicked(3);' class='btn btn-sm btn-primary'>Sore throat</button>");
            $("#sore_throatBtn").replaceWith(btn);
        } else {
            sore_throat = 0;
            total_point -= 1;
            var btn1 = $("<button type='button' id='sore_throatBtn' onclick='buttonClicked(3);' class='btn btn-sm btn-outline-primary'>Sore throat</button>");
            $("#sore_throatBtn").replaceWith(btn1);
        }
        if (sore_throat == 1) {
            Symptoms += "Sore throat, ";
        } else {
            Symptoms = Symptoms.replace("Sore throat, ", "");
        }

        $("#ConfirmSymptoms").show();
        $("#NonSymptoms").hide();

    } else if (val == 4) {
        weaknessCount++;
        if (weaknessCount % 2 == 1) {
            weakness = 1;
            none_of_symptom = 0;
            total_point += 2;
            var btn = $("<button type='button' id='weaknessBtn' onclick='buttonClicked(4);' class='btn btn-sm btn-primary'>Weakness</button>");
            $("#weaknessBtn").replaceWith(btn);
        } else {
            weakness = 0;
            total_point -= 2;
            var btn1 = $("<button type='button' id='weaknessBtn' onclick='buttonClicked(4);' class='btn btn-sm btn-outline-primary'>Weakness</button>");
            $("#weaknessBtn").replaceWith(btn1);
        }
        if (weakness == 1) {
            Symptoms += "Weakness, ";
        } else {
            Symptoms = Symptoms.replace("Weakness, ", "");
        }

        $("#ConfirmSymptoms").show();
        $("#NonSymptoms").hide();

    } else if (val == 5) {
        change_in_appetiteCount++;
        if (change_in_appetiteCount % 2 == 1) {
            change_in_appetite = 1;
            none_of_symptom = 0;
            total_point += 1;
            var btn = $("<button type='button' id='change_in_appetiteBtn' onclick='buttonClicked(5);' class='btn btn-sm btn-primary'>Change in appetite</button>");
            $("#change_in_appetiteBtn").replaceWith(btn);
        } else {
            change_in_appetite = 0;
            total_point -= 1;
            var btn1 = $("<button type='button' id='change_in_appetiteBtn' onclick='buttonClicked(5);' class='btn btn-sm btn-outline-primary'>Change in appetite</button>");
            $("#change_in_appetiteBtn").replaceWith(btn1);
        }
        if (change_in_appetite == 1) {
            Symptoms += "Change in appetite, ";
        } else {
            Symptoms = Symptoms.replace("Change in appetite, ", "");
        }

        $("#ConfirmSymptoms").show();
        $("#NonSymptoms").hide();

    } else if (val == 6) {
        none_of_symptomCount++;
        if (none_of_symptomCount % 2 == 1) {
            none_of_symptom = 1;
            dry_cough = 0;
            loss_or_diminished_sense_of_smell = 0;
            change_in_appetiteCount = 0;
            sore_throatCount = 0
            weaknessCount = 0;
        }
        if (none_of_symptom == 1) {
            Symptoms += "None of these.";
        }

        document.getElementById("Symptoms").innerHTML = Symptoms;
        $('#SentInput4').remove();
        $('#Reply5').show();
        $('#Load5').show();
        var Times = 3;
        setInterval(function() {
            $('#Load5').remove();
            $('#Sent6').show();
            $('#SentInput5').show();
            scrollWin(0, 1000, Times);
            Times++;
        }, 1000);

    } else {
        $("#ConfirmSymptoms").hide();
        $("#NonSymptoms").show();
        Symptoms = "";
    }
    if ((isNaN(dry_cough) || dry_cough == 0) && (isNaN(loss_or_diminished_sense_of_smell) || loss_or_diminished_sense_of_smell == 0) && (isNaN(sore_throat) || sore_throat == 0) && (isNaN(change_in_appetite) || change_in_appetite == 0) && (isNaN(weakness) || weakness == 0)) {
        $("#ConfirmSymptoms").hide();
        $("#NonSymptoms").show();
    } else {
        $("#ConfirmSymptoms").show();
        $("#NonSymptoms").hide();
    }
}

/*---------buttonClickedNepali---for Symptoms---Nepali---*/
function buttonClickedNepali(val) {
    if (val == 1) {
        dry_coughCount++;
        if (dry_coughCount % 2 == 1) {
            dry_cough = 1;
            none_of_symptom = 0;
            total_point += 1;
            var btn = $("<button type='button' id='dry_coughBtnNepali' onclick='buttonClickedNepali(1);' class='btn btn-sm btn-primary'>सुख्खा खोकी</button>");
            $("#dry_coughBtnNepali").replaceWith(btn);
        } else {
            dry_cough = 0;
            total_point -= 1;
            var btn1 = $("<button type='button' id='dry_coughBtnNepali' onclick='buttonClickedNepali(1);' class='btn btn-sm btn-outline-primary'>सुख्खा खोकी</button>");
            $("#dry_coughBtnNepali").replaceWith(btn1);
        }
        if (dry_cough == 1) {
            Symptoms += "सुख्खा खोकी, ";
        } else {
            Symptoms = Symptoms.replace("सुख्खा खोकी, ", "");
        }

        $("#ConfirmSymptomsNepali").show();
        $("#NonSymptomsNepali").hide();

    } else if (val == 2) {
        loss_or_diminished_sense_of_smellCount++;
        if (loss_or_diminished_sense_of_smellCount % 2 == 1) {
            loss_or_diminished_sense_of_smell = 1;
            none_of_symptom = 0;
            total_point += 1;
            var btn = $("<button type='button' id='loss_or_diminished_sense_of_smellBtnNepali' onclick='buttonClickedNepali(2);' class='btn btn-sm btn-primary'>गन्धको भावना नभएको</button>");
            $("#loss_or_diminished_sense_of_smellBtnNepali").replaceWith(btn);
        } else {
            loss_or_diminished_sense_of_smell = 0;
            total_point -= 1;
            var btn1 = $("<button type='button' id='loss_or_diminished_sense_of_smellBtnNepali' onclick='buttonClickedNepali(2);' class='btn btn-sm btn-outline-primary'>गन्धको भावना नभएको</button>");
            $("#loss_or_diminished_sense_of_smellBtnNepali").replaceWith(btn1);
        }
        if (loss_or_diminished_sense_of_smell == 1) {
            Symptoms += "गन्धको भावना नभएको, ";
        } else {
            Symptoms = Symptoms.replace("गन्धको भावना नभएको, ", "");
        }

        $("#ConfirmSymptomsNepali").show();
        $("#NonSymptomsNepali").hide();

    } else if (val == 3) {
        sore_throatCount++;
        if (sore_throatCount % 2 == 1) {
            sore_throat = 1;
            none_of_symptom = 0;
            total_point += 1;
            var btn = $("<button type='button' id='sore_throatBtnNepali' onclick='buttonClickedNepali(3);' class='btn btn-sm btn-primary'>घाँटी दुखेको</button>");
            $("#sore_throatBtnNepali").replaceWith(btn);
        } else {
            sore_throat = 0;
            total_point -= 1;
            var btn1 = $("<button type='button' id='sore_throatBtnNepali' onclick='buttonClickedNepali(3);' class='btn btn-sm btn-outline-primary'>घाँटी दुखेको</button>");
            $("#sore_throatBtnNepali").replaceWith(btn1);
        }
        if (sore_throat == 1) {
            Symptoms += "घाँटी दुखेको, ";
        } else {
            Symptoms = Symptoms.replace("घाँटी दुखेको, ", "");
        }

        $("#ConfirmSymptomsNepali").show();
        $("#NonSymptomsNepali").hide();

    } else if (val == 4) {
        weaknessCount++;
        if (weaknessCount % 2 == 1) {
            weakness = 1;
            none_of_symptom = 0;
            total_point += 2;
            var btn = $("<button type='button' id='weaknessBtnNepali' onclick='buttonClickedNepali(4);' class='btn btn-sm btn-primary'>कमजोरी</button>");
            $("#weaknessBtnNepali").replaceWith(btn);
        } else {
            weakness = 0;
            total_point -= 2;
            var btn1 = $("<button type='button' id='weaknessBtnNepali' onclick='buttonClickedNepali(4);' class='btn btn-sm btn-outline-primary'>कमजोरी</button>");
            $("#weaknessBtnNepali").replaceWith(btn1);
        }
        if (weakness == 1) {
            Symptoms += "कमजोरी, ";
        } else {
            Symptoms = Symptoms.replace("कमजोरी, ", "");
        }

        $("#ConfirmSymptomsNepali").show();
        $("#NonSymptomsNepali").hide();

    } else if (val == 5) {
        change_in_appetiteCount++;
        if (change_in_appetiteCount % 2 == 1) {
            change_in_appetite = 1;
            none_of_symptom = 0;
            total_point += 1;
            var btn = $("<button type='button' id='change_in_appetiteBtnNepali' onclick='buttonClickedNepali(5);' class='btn btn-sm btn-primary'>भोक मा परिवर्तन</button>");
            $("#change_in_appetiteBtnNepali").replaceWith(btn);
        } else {
            change_in_appetite = 0;
            total_point -= 1;
            var btn1 = $("<button type='button' id='change_in_appetiteBtnNepali' onclick='buttonClickedNepali(5);' class='btn btn-sm btn-outline-primary'>भोक मा परिवर्तन</button>");
            $("#change_in_appetiteBtnNepali").replaceWith(btn1);
        }
        if (change_in_appetite == 1) {
            Symptoms += "भोक मा परिवर्तन, ";
        } else {
            Symptoms = Symptoms.replace("भोक मा परिवर्तन, ", "");
        }

        $("#ConfirmSymptomsNepali").show();
        $("#NonSymptomsNepali").hide();

    } else if (val == 6) {
        none_of_symptomCount++;
        if (none_of_symptomCount % 2 == 1) {
            none_of_symptom = 1;
            dry_cough = 0;
            loss_or_diminished_sense_of_smell = 0;
            change_in_appetiteCount = 0;
            sore_throatCount = 0
            weaknessCount = 0;
        }
        if (none_of_symptom == 1) {
            Symptoms += "कुनै पनि होईन";
        }

        document.getElementById("Symptoms").innerHTML = Symptoms;
        $('#SentInput4Nepali').remove();
        $('#Reply5').show();
        $('#Load5').show();
        var Times = 3;
        setInterval(function() {
            $('#Load5').remove();
            $('#Sent6Nepali').show();
            $('#SentInput5Nepali').show();
            scrollWin(0, 1000, Times);
            Times++;
        }, 1000);

    } else {
        $("#ConfirmSymptomsNepali").hide();
        $("#NonSymptomsNepali").show();
        Symptoms = "";
    }
    if ((isNaN(dry_cough) || dry_cough == 0) && (isNaN(loss_or_diminished_sense_of_smell) || loss_or_diminished_sense_of_smell == 0) && (isNaN(sore_throat) || sore_throat == 0) && (isNaN(change_in_appetite) || change_in_appetite == 0) && (isNaN(weakness) || weakness == 0)) {
        $("#ConfirmSymptomsNepali").hide();
        $("#NonSymptomsNepali").show();
    } else {
        $("#ConfirmSymptomsNepali").show();
        $("#NonSymptomsNepali").hide();
    }
}


/*---------setSymptoms---------*/
function setSymptoms() {
    Symptoms = Symptoms.slice(0, -2) + '.';
    document.getElementById("Symptoms").innerHTML = Symptoms;
    $('#SentInput4').remove();
    $('#Reply5').show();
    $('#Load5').show();
    var Times = 3;
    setInterval(function() {
        $('#Load5').remove();
        $('#Sent6').show();
        $('#SentInput5').show();
        scrollWin(0, 1000, Times);
        Times++;
    }, 1000);
}

/*---------setSymptomsNepali-----Nepali----*/
function setSymptomsNepali() {
    Symptoms = Symptoms.slice(0, -2) + '.';
    document.getElementById("Symptoms").innerHTML = Symptoms;
    $('#SentInput4Nepali').remove();
    $('#Reply5').show();
    $('#Load5').show();
    var Times = 3;
    setInterval(function() {
        $('#Load5').remove();
        $('#Sent6Nepali').show();
        $('#SentInput5Nepali').show();
        scrollWin(0, 1000, Times);
        Times++;
    }, 1000);
}

/*---------buttonClickedAdditional----for Additional symptoms-----*/
function buttonClickedAdditional(val) {
    if (val == 1) {
        moderate_to_severe_coughCount++;
        if (moderate_to_severe_coughCount % 2 == 1) {
            moderate_to_severe_cough = 1;
            none_of_additional_symptom = 0;
            total_point += 2;
            var btn = $("<button type='button' id='moderate_to_severe_coughBtn' onclick='buttonClickedAdditional(1);' class='btn btn-sm btn-primary'>Moderate to severe cough</button>");
            $("#moderate_to_severe_coughBtn").replaceWith(btn);
        } else {
            moderate_to_severe_cough = 0;
            total_point -= 2;
            var btn1 = $("<button type='button' id='moderate_to_severe_coughBtn' onclick='buttonClickedAdditional(1);' class='btn btn-sm btn-outline-primary'>Moderate to severe cough</button>");
            $("#moderate_to_severe_coughBtn").replaceWith(btn1);
        }
        if (moderate_to_severe_cough == 1) {
            AdditionalSymptoms += "Moderate to severe cough, ";
        } else {
            AdditionalSymptoms = AdditionalSymptoms.replace("Moderate to severe cough, ", "");
        }

        $("#ConfirmAdditionalSymptoms").show();
        $("#NonOfAdditionalSymptoms").hide();

    } else if (val == 2) {
        feeling_breathlessCount++;
        if (feeling_breathlessCount % 2 == 1) {
            feeling_breathless = 1;
            none_of_additional_symptom = 0;
            total_point += 3;
            var btn = $("<button type='button' id='feeling_breathlessBtn' onclick='buttonClickedAdditional(2);' class='btn btn-sm btn-primary'>Feeling breathless</button>");
            $("#feeling_breathlessBtn").replaceWith(btn);
        } else {
            feeling_breathless = 0;
            total_point -= 3;
            var btn1 = $("<button type='button' id='feeling_breathlessBtn' onclick='buttonClickedAdditional(2);' class='btn btn-sm btn-outline-primary'>Feeling breathless</button>");
            $("#feeling_breathlessBtn").replaceWith(btn1);
        }
        if (feeling_breathless == 1) {
            AdditionalSymptoms += "Feeling breathless, ";
        } else {
            AdditionalSymptoms = AdditionalSymptoms.replace("Feeling breathless, ", "");
        }

        $("#ConfirmAdditionalSymptoms").show();
        $("#NonOfAdditionalSymptoms").hide();

    } else if (val == 3) {
        difficulty_in_breathingCount++;
        if (difficulty_in_breathingCount % 2 == 1) {
            difficulty_in_breathing = 1;
            none_of_symnone_of_additional_symptomptom = 0;
            total_point += 2;
            var btn = $("<button type='button' id='difficulty_in_breathingBtn' onclick='buttonClickedAdditional(3);' class='btn btn-sm btn-primary'>Difficulty in breathing</button>");
            $("#difficulty_in_breathingBtn").replaceWith(btn);
        } else {
            difficulty_in_breathing = 0;
            total_point -= 2;
            var btn1 = $("<button type='button' id='difficulty_in_breathingBtn' onclick='buttonClickedAdditional(3);' class='btn btn-sm btn-outline-primary'>Difficulty in breathing</button>");
            $("#difficulty_in_breathingBtn").replaceWith(btn1);
        }
        if (difficulty_in_breathing == 1) {
            AdditionalSymptoms += "Difficulty in breathing, ";
        } else {
            AdditionalSymptoms = AdditionalSymptoms.replace("Difficulty in breathing, ", "");
        }

        $("#ConfirmAdditionalSymptoms").show();
        $("#NonOfAdditionalSymptoms").hide();

    } else if (val == 4) {
        drowsinessCount++;
        if (drowsinessCount % 2 == 1) {
            drowsiness = 1;
            none_of_symnone_of_additional_symptomptom = 0;
            total_point += 1;
            var btn = $("<button type='button' id='drowsinessBtn' onclick='buttonClickedAdditional(4);' class='btn btn-sm btn-primary'>Drowsyness</button>");
            $("#drowsinessBtn").replaceWith(btn);
        } else {
            drowsiness = 0;
            total_point -= 1;
            var btn1 = $("<button type='button' id='drowsinessBtn' onclick='buttonClickedAdditional(4);' class='btn btn-sm btn-outline-primary'>Drowsyness</button>");
            $("#drowsinessBtn").replaceWith(btn1);
        }
        if (drowsiness == 1) {
            AdditionalSymptoms += "Drowsyness, ";
        } else {
            AdditionalSymptoms = AdditionalSymptoms.replace("Drowsyness, ", "");
        }

        $("#ConfirmAdditionalSymptoms").show();
        $("#NonOfAdditionalSymptoms").hide();

    } else if (val == 5) {
        persistant_pain_and_pressure_in_chestCount++;
        if (persistant_pain_and_pressure_in_chestCount % 2 == 1) {
            persistant_pain_and_pressure_in_chest = 1;
            none_of_symnone_of_additional_symptomptom = 0;
            total_point += 2;
            var btn = $("<button type='button' id='persistant_pain_and_pressure_in_chestBtn' onclick='buttonClickedAdditional(5);' class='btn btn-sm btn-primary'>Persistant pain and pressure in chest</button>");
            $("#persistant_pain_and_pressure_in_chestBtn").replaceWith(btn);
        } else {
            persistant_pain_and_pressure_in_chest = 0;
            total_point -= 2;
            var btn1 = $("<button type='button' id='persistant_pain_and_pressure_in_chestBtn' onclick='buttonClickedAdditional(5);' class='btn btn-sm btn-outline-primary'>Persistant pain and pressure in chest</button>");
            $("#persistant_pain_and_pressure_in_chestBtn").replaceWith(btn1);
        }
        if (persistant_pain_and_pressure_in_chest == 1) {
            AdditionalSymptoms += "Persistant pain and pressure in chest, ";
        } else {
            AdditionalSymptoms = AdditionalSymptoms.replace("Persistant pain and pressure in chest, ", "");
        }

        $("#ConfirmAdditionalSymptoms").show();
        $("#NonOfAdditionalSymptoms").hide();

    } else if (val == 6) {
        severe_weaknessCount++;
        if (severe_weaknessCount % 2 == 1) {
            severe_weakness = 1;
            none_of_additional_symptom = 0;
            total_point += 3;
            var btn = $("<button type='button' id='severe_weaknessBtn' onclick='buttonClickedAdditional(6);' class='btn btn-sm btn-primary'>Sever weakness</button>");
            $("#severe_weaknessBtn").replaceWith(btn);
        } else {
            severe_weakness = 0;
            total_point -= 3;
            var btn1 = $("<button type='button' id='severe_weaknessBtn' onclick='buttonClickedAdditional(6);' class='btn btn-sm btn-outline-primary'>Sever weakness</button>");
            $("#severe_weaknessBtn").replaceWith(btn1);
        }
        if (severe_weakness == 1) {
            AdditionalSymptoms += "Sever weakness, ";
        } else {
            AdditionalSymptoms = AdditionalSymptoms.replace("Sever weakness, ", "");
        }

        $("#ConfirmAdditionalSymptoms").show();
        $("#NonOfAdditionalSymptoms").hide();

    } else if (val == 7) {
        none_of_additional_symptomCount++;
        if (none_of_additional_symptomCount % 2 == 1) {
            none_of_additional_symptom = 1;
            moderate_to_severe_cough = 0;
            feeling_breathless = 0;
            difficulty_in_breathing = 0;
            drowsiness = 0;
            persistant_pain_and_pressure_in_chest = 0;
            severe_weakness = 0;
        }
        if (none_of_additional_symptom == 1) {
            AdditionalSymptoms += "None of these.";
        }

        document.getElementById("AdditionalSymptoms").innerHTML = AdditionalSymptoms;
        $('#SentInput5').remove();
        $('#Reply6').show();
        $('#Load6').show();
        var Times = 3;
        setInterval(function() {
            $('#Load6').remove();
            $('#Sent7').show();
            $('#SentInput6').show();
            scrollWin(0, 1000, Times);
            Times++;
        }, 1000);

    } else {
        $("#ConfirmAdditionalSymptoms").hide();
        $("#NonOfAdditionalSymptoms").show();
        AdditionalSymptoms = "";
    }
    if ((isNaN(moderate_to_severe_cough) || moderate_to_severe_cough == 0) && (isNaN(feeling_breathless) || feeling_breathless == 0) && (isNaN(difficulty_in_breathing) || difficulty_in_breathing == 0) && (isNaN(drowsiness) || drowsiness == 0) && (isNaN(persistant_pain_and_pressure_in_chest) || persistant_pain_and_pressure_in_chest == 0) && (isNaN(severe_weakness) || severe_weakness == 0)) {
        $("#ConfirmAdditionalSymptoms").hide();
        $("#NonOfAdditionalSymptoms").show();
    } else {
        $("#ConfirmAdditionalSymptoms").show();
        $("#NonOfAdditionalSymptoms").hide();
    }
}

/*---------buttonClickedAdditionalNepali----for Additional symptoms--Nepali---*/
function buttonClickedAdditionalNepali(val) {
    if (val == 1) {
        moderate_to_severe_coughCount++;
        if (moderate_to_severe_coughCount % 2 == 1) {
            moderate_to_severe_cough = 1;
            none_of_additional_symptom = 0;
            total_point += 2;
            var btn = $("<button type='button' id='moderate_to_severe_coughBtnNepali' onclick='buttonClickedAdditionalNepali(1);' class='btn btn-sm btn-primary'>मध्यम देखी गम्भीर खोकी</button>");
            $("#moderate_to_severe_coughBtnNepali").replaceWith(btn);
        } else {
            moderate_to_severe_cough = 0;
            total_point -= 2;
            var btn1 = $("<button type='button' id='moderate_to_severe_coughBtnNepali' onclick='buttonClickedAdditionalNepali(1);' class='btn btn-sm btn-outline-primary'>मध्यम देखी गम्भीर खोकी</button>");
            $("#moderate_to_severe_coughBtnNepali").replaceWith(btn1);
        }
        if (moderate_to_severe_cough == 1) {
            AdditionalSymptoms += "मध्यम देखी गम्भीर खोकी, ";
        } else {
            AdditionalSymptoms = AdditionalSymptoms.replace("मध्यम देखी गम्भीर खोकी, ", "");
        }

        $("#ConfirmAdditionalSymptomsNepali").show();
        $("#NonOfAdditionalSymptomsNepali").hide();

    } else if (val == 2) {
        feeling_breathlessCount++;
        if (feeling_breathlessCount % 2 == 1) {
            feeling_breathless = 1;
            none_of_additional_symptom = 0;
            total_point += 3;
            var btn = $("<button type='button' id='feeling_breathlessBtnNepali' onclick='buttonClickedAdditionalNepali(2);' class='btn btn-sm btn-primary'>सासमा कमी महसुस हुनु</button>");
            $("#feeling_breathlessBtnNepali").replaceWith(btn);
        } else {
            feeling_breathless = 0;
            total_point -= 3;
            var btn1 = $("<button type='button' id='feeling_breathlessBtnNepali' onclick='buttonClickedAdditionalNepali(2);' class='btn btn-sm btn-outline-primary'>सासमा कमी महसुस हुनु</button>");
            $("#feeling_breathlessBtnNepali").replaceWith(btn1);
        }
        if (feeling_breathless == 1) {
            AdditionalSymptoms += "सासमा कमी महसुस हुनु, ";
        } else {
            AdditionalSymptoms = AdditionalSymptoms.replace("सासमा कमी महसुस हुनु, ", "");
        }

        $("#ConfirmAdditionalSymptomsNepali").show();
        $("#NonOfAdditionalSymptomsNepali").hide();

    } else if (val == 3) {
        difficulty_in_breathingCount++;
        if (difficulty_in_breathingCount % 2 == 1) {
            difficulty_in_breathing = 1;
            none_of_symnone_of_additional_symptomptom = 0;
            total_point += 2;
            var btn = $("<button type='button' id='difficulty_in_breathingBtnNepali' onclick='buttonClickedAdditionalNepali(3);' class='btn btn-sm btn-primary'>सास फेर्न कठिनाई</button>");
            $("#difficulty_in_breathingBtnNepali").replaceWith(btn);
        } else {
            difficulty_in_breathing = 0;
            total_point -= 2;
            var btn1 = $("<button type='button' id='difficulty_in_breathingBtnNepali' onclick='buttonClickedAdditionalNepali(3);' class='btn btn-sm btn-outline-primary'>सास फेर्न कठिनाई</button>");
            $("#difficulty_in_breathingBtnNepali").replaceWith(btn1);
        }
        if (difficulty_in_breathing == 1) {
            AdditionalSymptoms += "सास फेर्न कठिनाई, ";
        } else {
            AdditionalSymptoms = AdditionalSymptoms.replace("सास फेर्न कठिनाई, ", "");
        }

        $("#ConfirmAdditionalSymptomsNepali").show();
        $("#NonOfAdditionalSymptomsNepali").hide();

    } else if (val == 4) {
        drowsinessCount++;
        if (drowsinessCount % 2 == 1) {
            drowsiness = 1;
            none_of_symnone_of_additional_symptomptom = 0;
            total_point += 1;
            var btn = $("<button type='button' id='drowsinessBtnNepali' onclick='buttonClickedAdditionalNepali(4);' class='btn btn-sm btn-primary'>निदाउरोपन</button>");
            $("#drowsinessBtnNepali").replaceWith(btn);
        } else {
            drowsiness = 0;
            total_point -= 1;
            var btn1 = $("<button type='button' id='drowsinessBtnNepali' onclick='buttonClickedAdditionalNepali(4);' class='btn btn-sm btn-outline-primary'>निदाउरोपन</button>");
            $("#drowsinessBtnNepali").replaceWith(btn1);
        }
        if (drowsiness == 1) {
            AdditionalSymptoms += "निदाउरोपन, ";
        } else {
            AdditionalSymptoms = AdditionalSymptoms.replace("निदाउरोपन, ", "");
        }

        $("#ConfirmAdditionalSymptomsNepali").show();
        $("#NonOfAdditionalSymptomsNepali").hide();

    } else if (val == 5) {
        persistant_pain_and_pressure_in_chestCount++;
        if (persistant_pain_and_pressure_in_chestCount % 2 == 1) {
            persistant_pain_and_pressure_in_chest = 1;
            none_of_symnone_of_additional_symptomptom = 0;
            total_point += 2;
            var btn = $("<button type='button' id='persistant_pain_and_pressure_in_chestBtnNepali' onclick='buttonClickedAdditionalNepali(5);' class='btn btn-sm btn-primary'>लगातार पीडा र छातीमा दबाब</button>");
            $("#persistant_pain_and_pressure_in_chestBtnNepali").replaceWith(btn);
        } else {
            persistant_pain_and_pressure_in_chest = 0;
            total_point -= 2;
            var btn1 = $("<button type='button' id='persistant_pain_and_pressure_in_chestBtnNepali' onclick='buttonClickedAdditionalNepali(5);' class='btn btn-sm btn-outline-primary'>लगातार पीडा र छातीमा दबाब</button>");
            $("#persistant_pain_and_pressure_in_chestBtnNepali").replaceWith(btn1);
        }
        if (persistant_pain_and_pressure_in_chest == 1) {
            AdditionalSymptoms += "लगातार पीडा र छातीमा दबाब, ";
        } else {
            AdditionalSymptoms = AdditionalSymptoms.replace("लगातार पीडा र छातीमा दबाब, ", "");
        }

        $("#ConfirmAdditionalSymptomsNepali").show();
        $("#NonOfAdditionalSymptomsNepali").hide();

    } else if (val == 6) {
        severe_weaknessCount++;
        if (severe_weaknessCount % 2 == 1) {
            severe_weakness = 1;
            none_of_additional_symptom = 0;
            total_point += 3;
            var btn = $("<button type='button' id='severe_weaknessBtnNepali' onclick='buttonClickedAdditionalNepali(6);' class='btn btn-sm btn-primary'>गम्भीर कमजोरी</button>");
            $("#severe_weaknessBtnNepali").replaceWith(btn);
        } else {
            severe_weakness = 0;
            total_point -= 3;
            var btn1 = $("<button type='button' id='severe_weaknessBtnNepali' onclick='buttonClickedAdditionalNepali(6);' class='btn btn-sm btn-outline-primary'>गम्भीर कमजोरी</button>");
            $("#severe_weaknessBtnNepali").replaceWith(btn1);
        }
        if (severe_weakness == 1) {
            AdditionalSymptoms += "गम्भीर कमजोरी, ";
        } else {
            AdditionalSymptoms = AdditionalSymptoms.replace("गम्भीर कमजोरी, ", "");
        }

        $("#ConfirmAdditionalSymptomsNepali").show();
        $("#NonOfAdditionalSymptomsNepali").hide();

    } else if (val == 7) {
        none_of_additional_symptomCount++;
        if (none_of_additional_symptomCount % 2 == 1) {
            none_of_additional_symptom = 1;
            moderate_to_severe_cough = 0;
            feeling_breathless = 0;
            difficulty_in_breathing = 0;
            drowsiness = 0;
            persistant_pain_and_pressure_in_chest = 0;
            severe_weakness = 0;
        }
        if (none_of_additional_symptom == 1) {
            AdditionalSymptoms += "कुनै पनि होईन ।";
        }

        document.getElementById("AdditionalSymptoms").innerHTML = AdditionalSymptoms;
        $('#SentInput5Nepali').remove();
        $('#Reply6').show();
        $('#Load6').show();
        var Times = 3;
        setInterval(function() {
            $('#Load6').remove();
            $('#Sent7Nepali').show();
            $('#SentInput6Nepali').show();
            scrollWin(0, 1000, Times);
            Times++;
        }, 1000);

    } else {
        $("#ConfirmAdditionalSymptomsNepali").hide();
        $("#NonOfAdditionalSymptomsNepali").show();
        AdditionalSymptoms = "";
    }
    if ((isNaN(moderate_to_severe_cough) || moderate_to_severe_cough == 0) && (isNaN(feeling_breathless) || feeling_breathless == 0) && (isNaN(difficulty_in_breathing) || difficulty_in_breathing == 0) && (isNaN(drowsiness) || drowsiness == 0) && (isNaN(persistant_pain_and_pressure_in_chest) || persistant_pain_and_pressure_in_chest == 0) && (isNaN(severe_weakness) || severe_weakness == 0)) {
        $("#ConfirmAdditionalSymptomsNepali").hide();
        $("#NonOfAdditionalSymptomsNepali").show();
    } else {
        $("#ConfirmAdditionalSymptomsNepali").show();
        $("#NonOfAdditionalSymptomsNepali").hide();
    }
}

/*---------setAdditionalSymptoms---------*/
function setAdditionalSymptoms() {
    AdditionalSymptoms = AdditionalSymptoms.slice(0, -2) + '.';
    document.getElementById("AdditionalSymptoms").innerHTML = AdditionalSymptoms;
    $('#SentInput5').remove();
    $('#Reply6').show();
    $('#Load6').show();
    var Times = 3;
    setInterval(function() {
        $('#Load6').remove();
        $('#Sent7').show();
        $('#SentInput6').show();
        scrollWin(0, 1000, Times);
        Times++;
    }, 1000);
}

/*---------setAdditionalSymptomsNepali----Nepali-----*/
function setAdditionalSymptomsNepali() {
    AdditionalSymptoms = AdditionalSymptoms.slice(0, -2) + '।';
    document.getElementById("AdditionalSymptoms").innerHTML = AdditionalSymptoms;
    $('#SentInput5Nepali').remove();
    $('#Reply6').show();
    $('#Load6').show();
    var Times = 3;
    setInterval(function() {
        $('#Load6').remove();
        $('#Sent7Nepali').show();
        $('#SentInput6Nepali').show();
        scrollWin(0, 1000, Times);
        Times++;
    }, 1000);
}

/*---------setTransport---------*/
function setTransport(val) {
    if (val == "no_travel_history") {
        no_travel_history = 1;
        no_contact_with_anyone_with_symptom = 0;
        history_of_travel_in_affected_geographical_area_in_last_14Days = 0;
        close_contact_With_Confirmed_covid_in_Last_14Days = 0;
        total_point += 2;
        document.getElementById("Traveling").innerHTML = "No Travel History";
    } else if (val == "no_contact_with_anyone_with_symptom") {
        no_travel_history = 0;
        no_contact_with_anyone_with_symptom = 1;
        history_of_travel_in_affected_geographical_area_in_last_14Days = 0;
        close_contact_With_Confirmed_covid_in_Last_14Days = 0;
        total_point += 1;
        document.getElementById("Traveling").innerHTML = "No contact with anyone with symptoms";
    } else if (val == "history_of_travel_in_affected_geographical_area_in_last_14Days") {
        no_travel_history = 0;
        no_contact_with_anyone_with_symptom = 0;
        history_of_travel_in_affected_geographical_area_in_last_14Days = 1;
        close_contact_With_Confirmed_covid_in_Last_14Days = 0;
        total_point += 2;
        document.getElementById("Traveling").innerHTML = "History of travel or meeting in affected geographical area in last 14 days";
    } else {
        no_travel_history = 0;
        no_contact_with_anyone_with_symptom = 0;
        history_of_travel_in_affected_geographical_area_in_last_14Days = 0;
        close_contact_With_Confirmed_covid_in_Last_14Days = 1;
        total_point += 3;
        document.getElementById("Traveling").innerHTML = "Close contact with confirmed COVID in last 14 days";
    }
    $('#SentInput6').remove();
    $('#Reply7').show();
    $('#Load7').show();
    var Times = 3;
    setInterval(function() {
        $('#Load7').remove();
        $('#Sent8').show();
        $('#SentInput7').show();
        scrollWin(0, 1000, Times);
        Times++;
    }, 1000);
}

/*---------setTransportNepali------Nepali---*/
function setTransportNepali(val) {
    if (val == "no_travel_history") {
        no_travel_history = 1;
        no_contact_with_anyone_with_symptom = 0;
        history_of_travel_in_affected_geographical_area_in_last_14Days = 0;
        close_contact_With_Confirmed_covid_in_Last_14Days = 0;
        total_point += 2;
        document.getElementById("Traveling").innerHTML = "कुनै यात्राको ईतिहास छैन";
    } else if (val == "no_contact_with_anyone_with_symptom") {
        no_travel_history = 0;
        no_contact_with_anyone_with_symptom = 1;
        history_of_travel_in_affected_geographical_area_in_last_14Days = 0;
        close_contact_With_Confirmed_covid_in_Last_14Days = 0;
        total_point += 1;
        document.getElementById("Traveling").innerHTML = "लक्षण भएको विरामीसँग सम्पर्क छैन";
    } else if (val == "history_of_travel_in_affected_geographical_area_in_last_14Days") {
        no_travel_history = 0;
        no_contact_with_anyone_with_symptom = 0;
        history_of_travel_in_affected_geographical_area_in_last_14Days = 1;
        close_contact_With_Confirmed_covid_in_Last_14Days = 0;
        total_point += 2;
        document.getElementById("Traveling").innerHTML = "पछील्लो १४ दिनमा प्रभावित भौगोलिक क्षेत्रमा यात्रा वा बैठकको भएको छ";
    } else {
        no_travel_history = 0;
        no_contact_with_anyone_with_symptom = 0;
        history_of_travel_in_affected_geographical_area_in_last_14Days = 0;
        close_contact_With_Confirmed_covid_in_Last_14Days = 1;
        total_point += 3;
        document.getElementById("Traveling").innerHTML = "कोभिड-१९ पुष्टि भएको व्यक्तिको साथ पछिल्लो १४ दिनमा नजिकबाट सम्पर्क भएको छ";
    }
    $('#SentInput6Nepali').remove();
    $('#Reply7').show();
    $('#Load7').show();
    var Times = 3;
    setInterval(function() {
        $('#Load7').remove();
        $('#Sent8Nepali').show();
        $('#SentInput7Nepali').show();
        scrollWin(0, 1000, Times);
        Times++;
    }, 1000);
}

/*---------buttonClickedDisease----for Diseases-----*/
function buttonClickedDisease(val) {
    if (val == 1) {
        diabetesCount++;
        if (diabetesCount % 2 == 1) {
            diabetes = 1;
            non_of_diseases = 0;
            total_point += 3;
            var btn = $("<button type='button' id='diabetesBtn' onclick='buttonClickedDisease(1);' class='btn btn-sm btn-primary'>Diabetes</button>");
            $("#diabetesBtn").replaceWith(btn);
        } else {
            diabetes = 0;
            total_point -= 3;
            var btn1 = $("<button type='button' id='diabetesBtn' onclick='buttonClickedDisease(1);' class='btn btn-sm btn-outline-primary'>Diabetes</button>");
            $("#diabetesBtn").replaceWith(btn1);
        }
        if (diabetes == 1) {
            Diseases += "Diabetes, ";
        } else {
            Diseases = Diseases.replace("Diabetes, ", "");
        }

        $("#ConfirmDiseases").show();
        $("#NonOfDiseases").hide();

    } else if (val == 2) {
        high_blood_pressureCount++;
        if (high_blood_pressureCount % 2 == 1) {
            high_blood_pressure = 1;
            non_of_diseases = 0;
            total_point += 2;
            var btn = $("<button type='button' id='high_blood_pressureBtn' onclick='buttonClickedDisease(2);' class='btn btn-sm btn-primary'>High blood Pressure</button>");
            $("#high_blood_pressureBtn").replaceWith(btn);
        } else {
            high_blood_pressure = 0;
            total_point -= 2;
            var btn1 = $("<button type='button' id='high_blood_pressureBtn' onclick='buttonClickedDisease(2);' class='btn btn-sm btn-outline-primary'>High blood Pressure</button>");
            $("#high_blood_pressureBtn").replaceWith(btn1);
        }
        if (high_blood_pressure == 1) {
            Diseases += "High blood Pressure, ";
        } else {
            Diseases = Diseases.replace("High blood Pressure, ", "");
        }

        $("#ConfirmDiseases").show();
        $("#NonOfDiseases").hide();

    } else if (val == 3) {
        heart_diseaseCount++;
        if (heart_diseaseCount % 2 == 1) {
            heart_disease = 1;
            non_of_diseases = 0;
            total_point += 2;
            var btn = $("<button type='button' id='heart_diseaseBtn' onclick='buttonClickedDisease(3);' class='btn btn-sm btn-primary'>Heart Disease</button>");
            $("#heart_diseaseBtn").replaceWith(btn);
        } else {
            heart_disease = 0;
            total_point -= 2;
            var btn1 = $("<button type='button' id='heart_diseaseBtn' onclick='buttonClickedDisease(3);' class='btn btn-sm btn-outline-primary'>Heart Disease</button>");
            $("#heart_diseaseBtn").replaceWith(btn1);
        }
        if (heart_disease == 1) {
            Diseases += "Heart Disease, ";
        } else {
            Diseases = Diseases.replace("Heart Disease, ", "");
        }

        $("#ConfirmDiseases").show();
        $("#NonOfDiseases").hide();

    } else if (val == 4) {
        kidney_diseaseCount++;
        if (kidney_diseaseCount % 2 == 1) {
            kidney_disease = 1;
            non_of_diseases = 0;
            total_point += 2;
            var btn = $("<button type='button' id='kidney_diseaseBtn' onclick='buttonClickedDisease(4);' class='btn btn-sm btn-primary'>Kidney Disease</button>");
            $("#kidney_diseaseBtn").replaceWith(btn);
        } else {
            kidney_disease = 0;
            total_point -= 2;
            var btn1 = $("<button type='button' id='kidney_diseaseBtn' onclick='buttonClickedDisease(4);' class='btn btn-sm btn-outline-primary'>Kidney Disease</button>");
            $("#kidney_diseaseBtn").replaceWith(btn1);
        }
        if (kidney_disease == 1) {
            Diseases += "Kidney Disease, ";
        } else {
            Diseases = Diseases.replace("Kidney Disease, ", "");
        }

        $("#ConfirmDiseases").show();
        $("#NonOfDiseases").hide();

    } else if (val == 5) {
        lung_diseaseCount++;
        if (lung_diseaseCount % 2 == 1) {
            lung_disease = 1;
            non_of_diseases = 0;
            total_point += 2;
            var btn = $("<button type='button' id='lung_diseaseBtn' onclick='buttonClickedDisease(5);' class='btn btn-sm btn-primary'>lung Disease</button>");
            $("#lung_diseaseBtn").replaceWith(btn);
        } else {
            lung_disease = 0;
            total_point -= 2;
            var btn1 = $("<button type='button' id='lung_diseaseBtn' onclick='buttonClickedDisease(5);' class='btn btn-sm btn-outline-primary'>lung Disease</button>");
            $("#lung_diseaseBtn").replaceWith(btn1);
        }
        if (lung_disease == 1) {
            Diseases += "lung Disease, ";
        } else {
            Diseases = Diseases.replace("lung Disease, ", "");
        }

        $("#ConfirmDiseases").show();
        $("#NonOfDiseases").hide();

    } else if (val == 6) {
        strokeCount++;
        if (strokeCount % 2 == 1) {
            stroke = 1;
            non_of_diseases = 0;
            total_point += 2;
            var btn = $("<button type='button' id='strokeBtn' onclick='buttonClickedDisease(6);' class='btn btn-sm btn-primary'>Stroke</button>");
            $("#strokeBtn").replaceWith(btn);
        } else {
            stroke = 0;
            total_point -= 2;
            var btn1 = $("<button type='button' id='strokeBtn' onclick='buttonClickedDisease(6);' class='btn btn-sm btn-outline-primary'>Stroke</button>");
            $("#strokeBtn").replaceWith(btn1);
        }
        if (stroke == 1) {
            Diseases += "Stroke, ";
        } else {
            Diseases = Diseases.replace("Stroke, ", "");
        }

        $("#ConfirmDiseases").show();
        $("#NonOfDiseases").hide();

    } else if (val == 7) {
        reduced_immunityCount++;
        if (reduced_immunityCount % 2 == 1) {
            reduced_immunity = 1;
            non_of_diseases = 0;
            total_point += 3;
            var btn = $("<button type='button' id='reduced_immunityBtn' onclick='buttonClickedDisease(7);' class='btn btn-sm btn-primary'>Reduced Immunity</button>");
            $("#reduced_immunityBtn").replaceWith(btn);
        } else {
            reduced_immunity = 0;
            total_point -= 3;
            var btn1 = $("<button type='button' id='reduced_immunityBtn' onclick='buttonClickedDisease(7);' class='btn btn-sm btn-outline-primary'>Reduced Immunity</button>");
            $("#reduced_immunityBtn").replaceWith(btn1);
        }
        if (reduced_immunity == 1) {
            Diseases += "Reduced Immunity, ";
        } else {
            Diseases = Diseases.replace("Reduced Immunity, ", "");
        }

        $("#ConfirmDiseases").show();
        $("#NonOfDiseases").hide();

    } else if (val == 8) {
        non_of_diseasesCount++;
        if (non_of_diseasesCount % 2 == 1) {
            non_of_diseases = 1;

            diabetes = 0;
            high_blood_pressure = 0;
            heart_disease = 0;
            kidney_disease = 0;
            lung_disease = 0;
            stroke = 0;
            reduced_immunity = 0;
        }
        if (non_of_diseases == 1) {
            Diseases += "None of these.";
        }

        document.getElementById("Diseases").innerHTML = Diseases;
        $('#SentInput7').remove();
        $('#Reply8').show();
        $('#Load8').show();
        var Times = 3;
        setInterval(function() {
            $('#Load8').remove();
            $('#Sent9').show();
            $('#SentInput8').show();
            scrollWin(0, 1000, Times);
            Times++;
        }, 1000);

    } else {
        $("#ConfirmDiseases").hide();
        $("#NonOfDiseases").show();
        Diseases = "";
    }
    if ((isNaN(diabetes) || diabetes == 0) && (isNaN(high_blood_pressure) || high_blood_pressure == 0) && (isNaN(heart_disease) || heart_disease == 0) && (isNaN(kidney_disease) || kidney_disease == 0) && (isNaN(lung_disease) || lung_disease == 0) && (isNaN(stroke) || stroke == 0) && (isNaN(reduced_immunity) || reduced_immunity == 0)) {
        $("#ConfirmDiseases").hide();
        $("#NonOfDiseases").show();
    } else {
        $("#ConfirmDiseases").show();
        $("#NonOfDiseases").hide();
    }
}

/*---------buttonClickedDiseaseNepali----for Diseases--Nepali---*/
function buttonClickedDiseaseNepali(val) {
    if (val == 1) {
        diabetesCount++;
        if (diabetesCount % 2 == 1) {
            diabetes = 1;
            non_of_diseases = 0;
            total_point += 3;
            var btn = $("<button type='button' id='diabetesBtnNepali' onclick='buttonClickedDiseaseNepali(1);' class='btn btn-sm btn-primary'>मधुमेह</button>");
            $("#diabetesBtnNepali").replaceWith(btn);
        } else {
            diabetes = 0;
            total_point -= 3;
            var btn1 = $("<button type='button' id='diabetesBtnNepali' onclick='buttonClickedDiseaseNepali(1);' class='btn btn-sm btn-outline-primary'>मधुमेह</button>");
            $("#diabetesBtnNepali").replaceWith(btn1);
        }
        if (diabetes == 1) {
            Diseases += "मधुमेह, ";
        } else {
            Diseases = Diseases.replace("मधुमेह, ", "");
        }

        $("#ConfirmDiseasesNepali").show();
        $("#NonOfDiseasesNepali").hide();

    } else if (val == 2) {
        high_blood_pressureCount++;
        if (high_blood_pressureCount % 2 == 1) {
            high_blood_pressure = 1;
            non_of_diseases = 0;
            total_point += 2;
            var btn = $("<button type='button' id='high_blood_pressureBtnNepali' onclick='buttonClickedDiseaseNepali(2);' class='btn btn-sm btn-primary'>Nउच्च रक्तचाप</button>");
            $("#high_blood_pressureBtnNepali").replaceWith(btn);
        } else {
            high_blood_pressure = 0;
            total_point -= 2;
            var btn1 = $("<button type='button' id='high_blood_pressureBtnNepali' onclick='buttonClickedDiseaseNepali(2);' class='btn btn-sm btn-outline-primary'>Nउच्च रक्तचाप</button>");
            $("#high_blood_pressureBtnNepali").replaceWith(btn1);
        }
        if (high_blood_pressure == 1) {
            Diseases += "Nउच्च रक्तचाप, ";
        } else {
            Diseases = Diseases.replace("Nउच्च रक्तचाप, ", "");
        }

        $("#ConfirmDiseasesNepali").show();
        $("#NonOfDiseasesNepali").hide();

    } else if (val == 3) {
        heart_diseaseCount++;
        if (heart_diseaseCount % 2 == 1) {
            heart_disease = 1;
            non_of_diseases = 0;
            total_point += 2;
            var btn = $("<button type='button' id='heart_diseaseBtnNepali' onclick='buttonClickedDiseaseNepali(3);' class='btn btn-sm btn-primary'>मुटु रोग</button>");
            $("#heart_diseaseBtnNepali").replaceWith(btn);
        } else {
            heart_disease = 0;
            total_point -= 2;
            var btn1 = $("<button type='button' id='heart_diseaseBtnNepali' onclick='buttonClickedDiseaseNepali(3);' class='btn btn-sm btn-outline-primary'>मुटु रोग</button>");
            $("#heart_diseaseBtnNepali").replaceWith(btn1);
        }
        if (heart_disease == 1) {
            Diseases += "मुटु रोग, ";
        } else {
            Diseases = Diseases.replace("मुटु रोग, ", "");
        }

        $("#ConfirmDiseasesNepali").show();
        $("#NonOfDiseasesNepali").hide();

    } else if (val == 4) {
        kidney_diseaseCount++;
        if (kidney_diseaseCount % 2 == 1) {
            kidney_disease = 1;
            non_of_diseases = 0;
            total_point += 2;
            var btn = $("<button type='button' id='kidney_diseaseBtnNepali' onclick='buttonClickedDiseaseNepali(4);' class='btn btn-sm btn-primary'>मृगौला रोग</button>");
            $("#kidney_diseaseBtnNepali").replaceWith(btn);
        } else {
            kidney_disease = 0;
            total_point -= 2;
            var btn1 = $("<button type='button' id='kidney_diseaseBtnNepali' onclick='buttonClickedDiseaseNepali(4);' class='btn btn-sm btn-outline-primary'>मृगौला रोग</button>");
            $("#kidney_diseaseBtnNepali").replaceWith(btn1);
        }
        if (kidney_disease == 1) {
            Diseases += "मृगौला रोग, ";
        } else {
            Diseases = Diseases.replace("मृगौला रोग, ", "");
        }

        $("#ConfirmDiseasesNepali").show();
        $("#NonOfDiseasesNepali").hide();

    } else if (val == 5) {
        lung_diseaseCount++;
        if (lung_diseaseCount % 2 == 1) {
            lung_disease = 1;
            non_of_diseases = 0;
            total_point += 2;
            var btn = $("<button type='button' id='lung_diseaseBtnNepali' onclick='buttonClickedDiseaseNepali(5);' class='btn btn-sm btn-primary'>फेफड़ों रोग</button>");
            $("#lung_diseaseBtnNepali").replaceWith(btn);
        } else {
            lung_disease = 0;
            total_point -= 2;
            var btn1 = $("<button type='button' id='lung_diseaseBtnNepali' onclick='buttonClickedDiseaseNepali(5);' class='btn btn-sm btn-outline-primary'>फेफड़ों रोग</button>");
            $("#lung_diseaseBtnNepali").replaceWith(btn1);
        }
        if (lung_disease == 1) {
            Diseases += "फेफड़ों रोग, ";
        } else {
            Diseases = Diseases.replace("फेफड़ों रोग, ", "");
        }

        $("#ConfirmDiseasesNepali").show();
        $("#NonOfDiseasesNepali").hide();

    } else if (val == 6) {
        strokeCount++;
        if (strokeCount % 2 == 1) {
            stroke = 1;
            non_of_diseases = 0;
            total_point += 2;
            var btn = $("<button type='button' id='strokeBtnNepali' onclick='buttonClickedDiseaseNepali(6);' class='btn btn-sm btn-primary'>झड्का</button>");
            $("#strokeBtnNepali").replaceWith(btn);
        } else {
            stroke = 0;
            total_point -= 2;
            var btn1 = $("<button type='button' id='strokeBtnNepali' onclick='buttonClickedDiseaseNepali(6);' class='btn btn-sm btn-outline-primary'>झड्का</button>");
            $("#strokeBtnNepali").replaceWith(btn1);
        }
        if (stroke == 1) {
            Diseases += "झड्का, ";
        } else {
            Diseases = Diseases.replace("झड्का, ", "");
        }

        $("#ConfirmDiseasesNepali").show();
        $("#NonOfDiseasesNepali").hide();

    } else if (val == 7) {
        reduced_immunityCount++;
        if (reduced_immunityCount % 2 == 1) {
            reduced_immunity = 1;
            non_of_diseases = 0;
            total_point += 3;
            var btn = $("<button type='button' id='reduced_immunityBtnNepali' onclick='buttonClickedDiseaseNepali(7);' class='btn btn-sm btn-primary'>प्रतिरक्षाको कमी</button>");
            $("#reduced_immunityBtnNepali").replaceWith(btn);
        } else {
            reduced_immunity = 0;
            total_point -= 3;
            var btn1 = $("<button type='button' id='reduced_immunityBtnNepali' onclick='buttonClickedDiseaseNepali(7);' class='btn btn-sm btn-outline-primary'>प्रतिरक्षाको कमी</button>");
            $("#reduced_immunityBtnNepali").replaceWith(btn1);
        }
        if (reduced_immunity == 1) {
            Diseases += "प्रतिरक्षाको कमी, ";
        } else {
            Diseases = Diseases.replace("प्रतिरक्षाको कमी, ", "");
        }

        $("#ConfirmDiseasesNepali").show();
        $("#NonOfDiseasesNepali").hide();

    } else if (val == 8) {
        non_of_diseasesCount++;
        if (non_of_diseasesCount % 2 == 1) {
            non_of_diseases = 1;

            diabetes = 0;
            high_blood_pressure = 0;
            heart_disease = 0;
            kidney_disease = 0;
            lung_disease = 0;
            stroke = 0;
            reduced_immunity = 0;
        }
        if (non_of_diseases == 1) {
            Diseases += "कुनै पनि होईन ।";
        }

        document.getElementById("Diseases").innerHTML = Diseases;
        $('#SentInput7Nepali').remove();
        $('#Reply8').show();
        $('#Load8').show();
        var Times = 3;
        setInterval(function() {
            $('#Load8').remove();
            $('#Sent9Nepali').show();
            $('#SentInput8Nepali').show();
            scrollWin(0, 1000, Times);
            Times++;
        }, 1000);

    } else {
        $("#ConfirmDiseasesNepali").hide();
        $("#NonOfDiseasesNepali").show();
        Diseases = "";
    }
    if ((isNaN(diabetes) || diabetes == 0) && (isNaN(high_blood_pressure) || high_blood_pressure == 0) && (isNaN(heart_disease) || heart_disease == 0) && (isNaN(kidney_disease) || kidney_disease == 0) && (isNaN(lung_disease) || lung_disease == 0) && (isNaN(stroke) || stroke == 0) && (isNaN(reduced_immunity) || reduced_immunity == 0)) {
        $("#ConfirmDiseasesNepali").hide();
        $("#NonOfDiseasesNepali").show();
    } else {
        $("#ConfirmDiseasesNepali").show();
        $("#NonOfDiseasesNepali").hide();
    }
}

/*---------setDisease---------*/
function setDisease() {
    Diseases = Diseases.slice(0, -2) + '.';
    document.getElementById("Diseases").innerHTML = Diseases;
    $('#SentInput7').remove();
    $('#Reply8').show();
    $('#Load8').show();
    var Times = 3;
    setInterval(function() {
        $('#Load8').remove();
        $('#Sent9').show();
        $('#SentInput8').show();
        scrollWin(0, 1000, Times);
        Times++;
    }, 1000);
}

/*---------setDiseaseNepali----Nepali-----*/
function setDiseaseNepali() {
    Diseases = Diseases.slice(0, -2) + '।';
    document.getElementById("Diseases").innerHTML = Diseases;
    $('#SentInput7Nepali').remove();
    $('#Reply8').show();
    $('#Load8').show();
    var Times = 3;
    setInterval(function() {
        $('#Load8').remove();
        $('#Sent9Nepali').show();
        $('#SentInput8Nepali').show();
        scrollWin(0, 1000, Times);
        Times++;
    }, 1000);
}

/*---------setProgress---------*/
function setProgress(val) {
    if (val == "improved") {
        improved = 1,
            no_change = 0;
        worsened = 0;
        worsened_considerably = 0;
        total_point -= 3;
        document.getElementById("Progress").innerHTML = "Improved";
    } else if (val == "no_change") {
        improved = 0,
            no_change = 1;
        worsened = 0;
        worsened_considerably = 0;
        document.getElementById("Progress").innerHTML = "No change";
    } else if (val == "worsened") {
        improved = 0,
            no_change = 0;
        worsened = 1;
        worsened_considerably = 0;
        total_point += 2;
        document.getElementById("Progress").innerHTML = "Worsened";
    } else {
        improved = 0,
            no_change = 0;
        worsened = 0;
        worsened_considerably = 1;
        total_point += 3;
        document.getElementById("Progress").innerHTML = "Worsened Considerably";
    }
    $('#SentInput8').remove();
    $('#Reply9').show();
    $('#Load10').show();
    var Times = 3;
    setInterval(function() {
        $('#Load10').remove();
        $('#GeneratingResult').show();
        scrollWin(0, 1000, Times);
        Times++;
    }, 1000);
    getResult();
}


/*---------setProgressNepali---------*/
function setProgressNepali(val) {
    if (val == "improved") {
        improved = 1,
            no_change = 0;
        worsened = 0;
        worsened_considerably = 0;
        total_point -= 3;
        document.getElementById("Progress").innerHTML = "सुधारिएको";
    } else if (val == "no_change") {
        improved = 0,
            no_change = 1;
        worsened = 0;
        worsened_considerably = 0;
        document.getElementById("Progress").innerHTML = "परिवर्तन छैन";
    } else if (val == "worsened") {
        improved = 0,
            no_change = 0;
        worsened = 1;
        worsened_considerably = 0;
        total_point += 2;
        document.getElementById("Progress").innerHTML = "बिग्रियो";
    } else {
        improved = 0,
            no_change = 0;
        worsened = 0;
        worsened_considerably = 1;
        total_point += 3;
        document.getElementById("Progress").innerHTML = "ध्यानपूर्वक बिगार्‍यो";
    }
    $('#SentInput8Nepali').remove();
    $('#Reply9').show();
    $('#Load10').show();
    var Times = 3;
    setInterval(function() {
        $('#Load10').remove();
        $('#GeneratingResultNepali').show();
        scrollWin(0, 1000, Times);
        Times++;
    }, 1000);
    getResult();
}

/*---------getResult---------*/
function getResult() {
    score = (total_point / 45) * 100;
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
}

document.addEventListener('contextmenu', event => event.preventDefault());
document.onkeypress = function(event) {
    event = (event || window.event);
    if (event.keyCode == 123) {
        return false;
    }
}
document.onmousedown = function(event) {
    event = (event || window.event);
    if (event.keyCode == 123) {
        return false;
    }
}
document.onkeydown = function(event) {
    event = (event || window.event);
    if (event.keyCode == 123) {
        return false;
    } else if (event.ctrlKey && event.keyCode == 85) {
        return false;
    } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) {
        return false;
    } else if (event.ctrlKey && event.shiftKey && event.keyCode == 74) {
        return false;
    } else if (event.ctrlKey && event.shiftKey && event.keyCode == 67) {
        return false;
    }
}
var checkStatus;

var element = new Image();
element.__defineGetter__('id', function() {
    checkStatus = 'on';
});

setInterval(function() {
    checkStatus = 'off';
    console.log(element);
    console.clear();
    if (checkStatus == "on") {
        /*window.location = "/Error/E401";*/
        location.reload();
    }
}, 1000);
