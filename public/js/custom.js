// Persian Data Picker Cart Page //
$("#birthdate").persianDatepicker({
    observer: true,
    initialValue: false,
    initialValueType: "persian",
    format: "YYYY/MM/DD",
    calendar: {
        persian: {
            locale: "en",
        },
    },
});

$(".diploma_study_start").persianDatepicker({
    observer: true,
    initialValue: false,
    initialValueType: "persian",
    format: "YYYY/MM/DD",
    calendar: {
        persian: {
            locale: "en",
        },
    },
});

$(".diploma_study_end").persianDatepicker({
    observer: true,
    initialValue: false,
    initialValueType: "persian",
    format: "YYYY/MM/DD",
    calendar: {
        persian: {
            locale: "en",
        },
    },
});

$(".associate_study_start").persianDatepicker({
    observer: true,
    initialValue: false,
    initialValueType: "persian",
    format: "YYYY/MM/DD",
    calendar: {
        persian: {
            locale: "en",
        },
    },
});

$(".associate_study_end").persianDatepicker({
    observer: true,
    initialValue: false,
    initialValueType: "persian",
    format: "YYYY/MM/DD",
    calendar: {
        persian: {
            locale: "en",
        },
    },
});

$(".bachelor_study_start").persianDatepicker({
    observer: true,
    initialValue: false,
    initialValueType: "persian",
    format: "YYYY/MM/DD",
    calendar: {
        persian: {
            locale: "en",
        },
    },
});

$(".bachelor_study_end").persianDatepicker({
    observer: true,
    initialValue: false,
    initialValueType: "persian",
    format: "YYYY/MM/DD",
    calendar: {
        persian: {
            locale: "en",
        },
    },
});

$(".ma_study_start").persianDatepicker({
    observer: true,
    initialValue: false,
    initialValueType: "persian",
    format: "YYYY/MM/DD",
    calendar: {
        persian: {
            locale: "en",
        },
    },
});

$(".ma_study_end").persianDatepicker({
    observer: true,
    initialValue: false,
    initialValueType: "persian",
    format: "YYYY/MM/DD",
    calendar: {
        persian: {
            locale: "en",
        },
    },
});

$(".phd_study_start").persianDatepicker({
    observer: true,
    initialValue: false,
    initialValueType: "persian",
    format: "YYYY/MM/DD",
    calendar: {
        persian: {
            locale: "en",
        },
    },
});

$(".phd_study_end").persianDatepicker({
    observer: true,
    initialValue: false,
    initialValueType: "persian",
    format: "YYYY/MM/DD",
    calendar: {
        persian: {
            locale: "en",
        },
    },
});
// Persian Data Picker Cart Page //

//Add Empty Khanevadeh
function khanevade(type) {
    if (k_i > 9) {
        alert("نمی توانید بیش از 10 نفر وارد کنید");
    } else {
        k_i++;
        var lastField = $("#emptykhanevadehform div:last");
        var intId =
            (lastField && lastField.length && lastField.data("idx") + 1) || 1;
        var fieldWrapper = $(
            '<div class="fieldwrapper" id="bastegankhanevadeh' + intId + '"/>'
        );
        fieldWrapper.data("idx", intId);
        var nesbat = $(
            "<div class='form-group row'><label for='relatives_relationship" +
                k_i +
                "' class='col-md-4 col-form-label text-md-right'><b class='text-danger'>*</b>نسبت:</label><div class='col-md-6'><select name='relatives_relationship" +
                k_i +
                "' id='relatives_relationship" +
                k_i +
                '\' class="form-control fieldtype"><option value="3">خواهر</option><option value="4">برادر</option></select></div></div>'
        );
        var Name = $(
            "<div class='form-group row'><label for='relatives_name" +
                k_i +
                "' class='col-md-4 col-form-label text-md-right'><b class='text-danger'>*</b>نام و نام خانوادگی:</label><div class='col-md-6'><input name=\"relatives_name" +
                k_i +
                '" id="relatives_name' +
                k_i +
                '" type="text" class="fieldname form-control" /></div></div>'
        );
        var father = $(
            "<div class='form-group row'><label for='relatives_father_name" +
                k_i +
                "' class='col-md-4 col-form-label text-md-right'><b class='text-danger'>*</b>نام پدر:</label><div class='col-md-6'><input name=\"relatives_father_name" +
                k_i +
                '" id="relatives_father_name' +
                k_i +
                '" type="text" class="fieldname form-control" /></div></div>'
        );
        var tahsilat = $(
            "<div class='form-group row'><label for='relatives_grade" +
                k_i +
                "' class='col-md-4 col-form-label text-md-right'><b class='text-danger'>*</b>تحصیلات:</label><div class='col-md-6'><select name='relatives_grade" +
                k_i +
                "' id='relatives_grade" +
                k_i +
                '\' class="form-control fieldtype"><option disabled selected>...</option><option value="100">زیردیپلم</option><option value="101">دیپلم</option><option value="1">کاردانی</option><option value="2">معادل کاردانی</option><option value="3">کارشناسی</option><option value="4">معادل کارشناسی</option><option value="5">کارشناسی ارشد</option><option value="6">کارشناسی ناپیوسته</option><option value="7">دکترای تخصصی</option><option value="8">دکترای حرفه ای</option><option value="9">دانشوری</option><option value="19">فوق تخصصی</option></select></div></div>'
        );
        var work_title = $(
            "<div class='form-group row'><label for='relatives_work_title" +
                k_i +
                "' class='col-md-4 col-form-label text-md-right'>شغل:</label><div class='col-md-6'><input name=\"relatives_work_title" +
                k_i +
                '" id="relatives_work_title' +
                k_i +
                '" type="text" class="fieldname form-control" /></div></div>'
        );
        var address = $(
            "<div class='form-group row'><label for='relatives_address" +
                k_i +
                "' class='col-md-4 col-form-label text-md-right'>آدرس محل کار:</label><div class='col-md-6'><input name=\"relatives_address" +
                k_i +
                '" id="relatives_address' +
                k_i +
                '" type="text" class="fieldname form-control" /></div></div>'
        );
        var phone = $(
            "<div class='form-group row'><label for='relatives_telephone" +
                k_i +
                "' class='col-md-4 col-form-label text-md-right'>شماره تلفن:</label><div class='col-md-6'><input name=\"relatives_telephone" +
                k_i +
                '" id="relatives_telephone' +
                k_i +
                '" type="text" class="fieldname form-control" /></div></div>'
        );
        var removeButton = $(
            '<div class=\'form-group row\'><input type="button" class="btn btn-primary remove" value="حذف" /></div>'
        );
        removeButton.click(function () {
            if (confirm("آیا از حذف این عضو خانواده مطمئن هستید؟", "بله")) {
                $(this).parent().remove();
                var khanevade_number =
                    parseInt($("#khanevade_number").val()) - 1;
                $("#khanevade_number").val(khanevade_number);
            }
        });
        fieldWrapper.append(nesbat);
        fieldWrapper.append(Name);
        fieldWrapper.append(father);
        fieldWrapper.append(tahsilat);
        fieldWrapper.append(work_title);
        fieldWrapper.append(address);
        fieldWrapper.append(phone);
        fieldWrapper.append(removeButton);
        fieldWrapper.append("<hr>");
        $("#emptykhanevadehform").append(fieldWrapper);

        if (type == "new") {
            var khanevade_number = parseInt($("#khanevade_number").val()) + 1;
            $("#khanevade_number").val(khanevade_number);
        }
    }
}
//Add Empty Khanevadeh

// Add Empty faliatha field //
function faliat(type) {
    if (f_i > 9) {
        alert("نمی توانید بیش از 10 فعالیت وارد کنید");
    } else {
        f_i++;
        var lastField2 = $("#faliathaForm div:last");
        var intId2 =
            (lastField2 && lastField2.length && lastField2.data("idx") + 1) ||
            1;
        var fieldWrapper2 = $(
            '<div class="fieldwrapper2" id="faaliatha' + intId2 + '"/>'
        );
        fieldWrapper2.data("idx", intId2);

        var Name = $(
            "<div class='form-group row'><label for='activity_place_name" +
                f_i +
                "' class='col-md-4 col-form-label text-md-right'><b class='text-danger'>*</b>نام نهاد یا ارگان:</label><div class='col-md-6'><input name=\"activity_place_name" +
                f_i +
                '" id="activity_place_name' +
                f_i +
                '" type="text" class="fieldname form-control" /></div></div>'
        );
        var activity_type = $(
            "<div class='form-group row'><label for='activity_type" +
                f_i +
                "' class='col-md-4 col-form-label text-md-right'><b class='text-danger'>*</b>نوع فعالیت:</label><div class='col-md-6'><input name=\"activity_type" +
                f_i +
                '" id="activity_type' +
                f_i +
                '" type="text" class="fieldname form-control" /></div></div>'
        );
        var activity_section = $(
            "<div class='form-group row'><label for='activity_section" +
                f_i +
                "' class='col-md-4 col-form-label text-md-right'><b class='text-danger'>*</b>محل خدمت:</label><div class='col-md-6'><input name=\"activity_section" +
                f_i +
                '" id="activity_section' +
                f_i +
                '" type="text" class="fieldname form-control" /></div></div>'
        );
        var activity_start_date = $(
            "<div class='form-group row'><label for='activity_start_date" +
                f_i +
                "' class='col-md-4 col-form-label text-md-right'><b class='text-danger'>*</b>از تاریخ:</label><div class='col-md-6'><input name=\"activity_start_date" +
                f_i +
                '" id="activity_start_date' +
                f_i +
                '" type="text" class="text-center fieldname form-control activity_start_date' +
                f_i +
                '" /></div></div>'
        );
        var activity_end_date = $(
            "<div class='form-group row'><label for='activity_end_date" +
                f_i +
                "' class='col-md-4 col-form-label text-md-right'>تا تاریخ:</label><div class='col-md-6'><input name=\"activity_end_date" +
                f_i +
                '" id="activity_end_date' +
                f_i +
                '" type="text" class="text-center fieldname form-control activity_end_date' +
                f_i +
                '" /></div></div>'
        );
        var activity_leave_reason = $(
            "<div class='form-group row'><label for='activity_leave_reason" +
                f_i +
                "' class='col-md-4 col-form-label text-md-right'><b class='text-danger'>*</b>علت کناره گیری:</label><div class='col-md-6'><input name=\"activity_leave_reason" +
                f_i +
                '" id="activity_leave_reason' +
                f_i +
                '" type="text" class="fieldname form-control" /></div></div>'
        );
        var removeButton = $(
            '<div class=\'form-group row\'><input type="button" class="btn btn-primary remove" value="حذف" /></div>'
        );
        removeButton.click(function () {
            if (confirm("آیا از حذف این فعالیت مطمئن هستید؟", "بله")) {
                $(this).parent().remove();
                var faliat_number = parseInt($("#faliat_number").val()) - 1;
                $("#faliat_number").val(faliat_number);
            }
        });

        fieldWrapper2.append(Name);
        fieldWrapper2.append(activity_type);
        fieldWrapper2.append(activity_section);
        fieldWrapper2.append(activity_start_date);
        fieldWrapper2.append(activity_end_date);
        fieldWrapper2.append(activity_leave_reason);
        fieldWrapper2.append(removeButton);
        fieldWrapper2.append("<hr>");
        $("#faliathaForm").append(fieldWrapper2);

        var sc =
            "$('.activity_start_date" +
            f_i +
            "').persianDatepicker({observer: true, initialValue: false, initialValueType: 'persian', format: 'YYYY/MM/DD',calendar: {persian: {locale: 'en',},},});$('.activity_end_date" +
            f_i +
            "').persianDatepicker({observer: true, initialValue: false, initialValueType: 'persian', format: 'YYYY/MM/DD',calendar: {persian: {locale: 'en',},},});";

        var script = document.createElement("script");
        script.type = "text/javascript";
        script.innerHTML = sc;
        document.getElementById("headerjs").appendChild(script);
        if (type == "new") {
            var faliat_number = parseInt($("#faliat_number").val()) + 1;
            $("#faliat_number").val(faliat_number);
        }
        return false;
    }
}
// Add Empty khanevade field //

// confirm form submit
function checkForm(form) {
    if (!form.confirm_data.checked) {
        alert("جهت ادامه باید تیک تایید اطلاعات را انتخاب نمایید.");
        form.confirm_data.focus();
        return false;
    }
    return true;
}

// Check Blog URL
function checkURL(abc) {
    var string = abc.value;
    if (string != "") {
        if (!~string.indexOf("http")) {
            string = "http://" + string;
        }
        abc.value = string;
        return abc;
    }
}

// Disable/Enable Inputs
$("#religion").change(function () {
    religion_5();
    religion_1();
});

$("input:radio[name=marital_status]").change(function () {
    marital_status();
});

$("input:radio[name=financing]").change(function () {
    financing_other();
});

$("#military").change(function () {
    military();
});

$("#student_status").change(function () {
    origin_univercity();
});

$(document).ready(function () {
    religion_5();
    religion_1();
    marital_status();
    military();
    origin_univercity();
    military_gender();
    financing_other();
});

function religion_5() {
    var religion = $("#religion").val();
    if (religion == 5) {
        $("#religion_other").prop("disabled", false);
    } else {
        $("#religion_other").prop("disabled", true);
    }
}

function religion_1() {
    var religion = $("#religion").val();
    if (religion == 1) {
        $("#faith").prop("disabled", false);
    } else {
        $("#faith").prop("disabled", true);
        $("#faith option").eq(0).prop("selected", true);
    }
}

function marital_status() {
    var val = $("input[name='marital_status']:checked").val();
    if (val == 1) {
        document.getElementById("child_number").disabled = false;
        document.getElementById("spouse_name").disabled = false;
        document.getElementById("spouse_family").disabled = false;
        document.getElementById("spouse_grade").disabled = false;
        document.getElementById("spouse_work_title").disabled = false;
        document.getElementById("spouse_mobilephone").disabled = false;
    } else if (val == 2) {
        document.getElementById("child_number").disabled = true;
        document.getElementById("child_number").value = "";
        document.getElementById("spouse_name").disabled = true;
        document.getElementById("spouse_name").value = "";
        document.getElementById("spouse_family").disabled = true;
        document.getElementById("spouse_family").value = "";
        document.getElementById("spouse_grade").disabled = true;
        document.getElementById("spouse_grade").value = "";
        document.getElementById("spouse_work_title").disabled = true;
        document.getElementById("spouse_work_title").value = "";
        document.getElementById("spouse_mobilephone").disabled = true;
        document.getElementById("spouse_mobilephone").value = "";
    }
}

function military() {
    var military = $("#military").val();
    if (military == 4) {
        $("#military_other").prop("disabled", false);
    } else {
        $("#military_other").prop("disabled", true);
    }
}

function origin_univercity() {
    var student_status = $("#student_status").val();
    if (student_status == 2 || student_status == 3) {
        $("#origin_univercity").prop("disabled", false);
    } else {
        $("#origin_univercity").prop("disabled", true);
    }
}

function military_gender() {
    var gender = $("input[name='student_gender']:checked").val();
    if (gender == 1) {
        $("#military").prop("disabled", true);
    }
}

function financing_other() {
    var financing = $("input[name='financing']:checked").val();
    if (financing == 3) {
        $("#financing_other").prop("disabled", false);
    } else {
        $("#financing_other").prop("disabled", true);
    }
}

function PrintElem() {
    var mywindow = window.open("", "PRINT");

    mywindow.document.write(
        "<html><head>" +
            "<link href='/css/custom.css' rel='stylesheet'>" +
            "<title>" +
            "سامانه صدور کارت دانشجویی دانشگاه تبریز" +
            "</title>"
    );
    mywindow.document.write("</head><body dir='rtl'>");
    mywindow.document.write(
        '<div style="text-align:center"><img src="/images/logo.png"><br><h1>' +
            "رسید صدور کارت دانشجویی" +
            "</h1></div>"
    );
    mywindow.document.write(
        '<p style="text-align:right">' +
            document.getElementById("name").innerHTML +
            "</p>"
    );
    mywindow.document.write(
        '<p style="text-align:right">' +
            document.getElementById("family").innerHTML +
            "</p>"
    );
    mywindow.document.write(
        '<p style="text-align:right">' +
            document.getElementById("number").innerHTML +
            "</p>"
    );
    mywindow.document.write(
        '<p style="text-align:right">' +
            document.getElementById("studyname").innerHTML +
            "</p>"
    );
    mywindow.document.write(
        '<p style="text-align:right">' +
            document.getElementById("college").innerHTML +
            "</p>"
    );
    mywindow.document.write(
        '<p style="text-align:right">' +
            document.getElementById("code").innerHTML +
            "</p>"
    );
    mywindow.document.write(
        '<p style="text-align:right">' +
            document.getElementById("time").innerHTML +
            "</p><hr>"
    );
    mywindow.document.write(
        '<p style="text-align:right">' +
            "دانشجوی گرامی اطلاعات شما با موفقیت ثبت شده است، کد پیگیری و رسید مبلغ واریزی هزینه صدور کارت را نزد خود نگه دارید تا در صورت بروز هرگونه مشکل قابل پیگیری  باشد." +
            "جهت دریافت کارت دانشجویی به صورت حضوری طبق زمانبندی اعلامی پس از ثبت نام مراجعه فرمایید."+
            "</p>"
    );
    mywindow.document.write("</body></html>");

    mywindow.document.close(); // necessary for IE >= 10
    mywindow.focus(); // necessary for IE >= 10*/

    mywindow.print();
    mywindow.close();

    return true;
}

// File Upload Chenge Lable Name
$(".custom-file-input").on("change", function () {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});


