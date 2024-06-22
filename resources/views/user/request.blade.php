@extends('user.layouts.app')
@section('content')
<div class="container-fluid ">

<form action="{{route('request.store')}}" method="POST" id="multiStepForm">
    @csrf
    <style>
        .form-check {
            display: flex;
            align-items: center;
        }
        .form-check-label {
            margin-right: 30px;
        }
    </style>
    <div>
        <h5 class="mt-2">اطلاعات هویتی بیمار</h5>
        <hr>
        <div class="row">

        <div class="col-md-2 mt-2">
            <label for="first_name">نام</label>
            <input type="text" name="first_name" class="form-control" id="first_name" value="{{isset($patient) ? $patient->first_name : null}}">
        </div>
        <div class="col-md-2 mt-2">
            <label for="last_name">نام خانوادگی</label>
            <input type="text" name="last_name" class="form-control" id="last_name" value="{{isset($patient) ? $patient->last_name : null}}">
        </div>

        <div class="col-md-2 mt-2">
            <label for="age">سن</label>
            <input type="text" name="age" class="form-control" id="age" value="{{isset($patient) ? $patient->age : null}}">
        </div>
        <div class="col-md-2 mt-2">
            <label for="phone">شماره تلفن</label>
            <input type="text" name="phone" class="form-control" id="phone" value="{{isset($patient) ? $patient->phone : null}}">
        </div>
        <div class="col-md-2 mt-2">
            <label for="national_code">کد ملی</label>
            <input type="text" name="national_code" class="form-control" id="national_code" value="{{isset($patient) ? $patient->national_code : null}}">
        </div>
        <div class="col-md-2 mt-2">
            <label for="sex">جنسیت</label>
            <select class="form-control" name="sex" id="sex">
                <option value="1" selected>مرد</option>
                <option value="0">زن</option>
            </select>
        </div>
    </div>
    </div>
    <hr>
    <div class="bg-light p-3 rounded">

            <!-- Step 1 -->
            <div class="form-step">
                <div class="row px-5">
                    <div class="col-md-12 mt-2 mb-4">
                        <label for="BMI">BMI</label>
                        <div class="row">
                            <div class="col-md-5">
                                <input type="number" name="BMI" class="form-control" id="BMI" step="0.1"    >
                            </div>
                            <div class="col-md-7">
                                <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#bmiModal">محاسبه BMI</button>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="col-md-3 mt-2">
                        <label>دیابت</label>
                        <div class="form-check">
                            <input type="radio" name="Diabetes" id="DiabetesYes" value="1" class="form-check-input">
                            <label class="form-check-label" for="DiabetesYes">بله</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="Diabetes" id="DiabetesNo" value="0" class="form-check-input">
                            <label class="form-check-label" for="DiabetesNo">خیر</label>
                        </div>
                    </div>
                    <div class="col-md-2 mt-2">
                        <label>چربی خون بالا</label>
                        <div class="form-check">
                            <input type="radio" name="Hyperlipidemia" id="HyperlipidemiaYes" value="1" class="form-check-input">
                            <label class="form-check-label" for="HyperlipidemiaYes">بله</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="Hyperlipidemia" id="HyperlipidemiaNo" value="0" class="form-check-input">
                            <label class="form-check-label" for="HyperlipidemiaNo">خیر</label>
                        </div>
                    </div>

                    <div class="col-md-2 mt-2">
                        <label>فشار خون بالا</label>
                        <div class="form-check">
                            <input type="radio" name="Hypertension" id="HypertensionYes" value="1" class="form-check-input">
                            <label class="form-check-label" for="HypertensionYes">بله</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="Hypertension" id="HypertensionNo" value="0" class="form-check-input">
                            <label class="form-check-label" for="HypertensionNo">خیر</label>
                        </div>
                    </div>
                    <div class="col-md-3 mt-2">
                        <label>الکلی</label>
                        <div class="form-check">
                            <input type="radio" name="Alcoholic" id="AlcoholicYes" value="1" class="form-check-input">
                            <label class="form-check-label" for="AlcoholicYes">بله</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="Alcoholic" id="AlcoholicNo" value="0" class="form-check-input">
                            <label class="form-check-label" for="AlcoholicNo">خیر</label>
                        </div>
                    </div>
                    <div class="col-md-2 mt-2">
                        <label>سیگاری</label>
                        <div class="form-check">
                            <input type="radio" name="Smoker" id="SmokerYes" value="1" class="form-check-input">
                            <label class="form-check-label" for="SmokerYes">بله</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="Smoker" id="SmokerNo" value="0" class="form-check-input">
                            <label class="form-check-label" for="SmokerNo">خیر</label>
                        </div>
                    </div>
                </div>
                <div class="text-left">
                    <button type="button" class="btn btn-primary mt-5" onclick="nextStep()">بعدی</button>

                </div>
            </div>



            <!-- Step 2 -->
            <div class="form-step" style="display: none;">
                <div class="row">

                    <div class="col-md-2 mt-2">
                        <label for="AST">AST</label>
                        <input type="number" class="form-control" name="AST" id="AST" >
                    </div>

                    <div class="col-md-2 mt-2">
                        <label for="ALT">ALT</label>
                        <input type="number" class="form-control" name="ALT" id="ALT">
                    </div>

                    <div class="col-md-2 mt-2">
                        <label for="ALP">ALP</label>
                        <input type="number" class="form-control" name="ALP" id="ALP">
                    </div>

                    <div class="col-md-2 mt-2">
                        <label for="CHOLESTROL">کلسترول</label>
                        <input type="number" class="form-control" name="CHOLESTROL" id="CHOLESTROL">
                    </div>

                    <div class="col-md-2 mt-2">
                        <label for="TG">تری گلیسیرید</label>
                        <input type="number" class="form-control" name="TG" id="TG">
                    </div>

                    <div class="col-md-2 mt-2">
                        <label for="FBS">FBS</label>
                        <input type="number" class="form-control" name="FBS" id="FBS">
                    </div>
                    <div class="col-md-2 mt-2">
                        <label for="Hb">Hb</label>
                        <input type="number" class="form-control" name="Hb" id="Hb">
                    </div>

                    <div class="col-md-2 mt-2">
                        <label for="Hct">Hct</label>
                        <input type="number" class="form-control" name="Hct" id="Hct">
                    </div>
                    <div class="col-md-2 mt-2">
                        <label for="plt">plt</label>
                        <input type="number" class="form-control" name="Plt" id="Plt">
                    </div>

                    <div class="col-md-2 mt-2">
                        <label for="HDL">HDL</label>
                        <input type="number" class="form-control" name="HDL" id="HDL">
                    </div>
                    <div class="col-md-2 mt-2">
                        <label for="Urea">اوریا</label>
                        <input type="number" class="form-control" name="Urea" id="Urea">
                    </div>

                    <div class="col-md-2 mt-2">
                        <label for="Cr">Cr</label>
                        <input type="number" class="form-control" name="Cr" id="Cr" step="0.1">
                    </div>
                    <div class="col-md-2 mt-2">
                        <label for="URIC_ACID">اسید اوریک</label>
                        <input type="number" class="form-control" name="URIC_ACID" id="URIC_ACID" step="0.1">
                    </div>


                </div>
               <div class="text-left">
                <button type="button" class="btn btn-secondary mt-5" onclick="prevStep()">قبلی</button>
                <button type="button" class="btn btn-primary mt-5" onclick="nextStep()">بعدی</button>
               </div>
            </div>




            <div class="form-step" style="display: none">
                <div class="row">
                    <div class="col-md-2 mt-2">
                        <label for="IMTR">IMT – راست</label>
                        <input type="number" class="form-control" name="IMT_-_R" id="IMTR" step="0.1">
                    </div>

                    <div class="col-md-2 mt-2">
                        <label for="IMTL">IMT – چپ</label>
                        <input type="number" class="form-control" name="IMT_-_L" id="IMTL" step="0.1">
                    </div>
                    <div class="col-md-2 mt-2">
                        <label>گرید ۱ چربی</label>
                        <div class="form-check">
                            <input type="radio" name="Grade 1 fatty" id="grade1fatty" value="1" class="form-check-input">
                            <label class="form-check-label" for="grade1fatty">بله</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="Grade 1 fatty" id="grade1fattyNo" value="0" class="form-check-input">
                            <label class="form-check-label" for="grade1fattyNo">خیر</label>
                        </div>
                    </div>

                    <div class="col-md-2 mt-2">
                        <label>گرید ۲ چربی</label>
                        <div class="form-check">
                            <input type="radio" name="Grade 2 fatty" id="grade2fattyYes" value="1" class="form-check-input">
                            <label class="form-check-label" for="grade2fattyYes">بله</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="Grade 2 fatty" id="grade2fattyNo" value="0" class="form-check-input">
                            <label class="form-check-label" for="grade2fattyNo">خیر</label>
                        </div>
                    </div>

                    <div class="col-md-2 mt-2">
                        <label>گرید ۳ چربی</label>
                        <div class="form-check">
                            <input type="radio" name="Grade 3 fatty" id="grade3fattyYes" value="1" class="form-check-input">
                            <label class="form-check-label" for="grade3fattyYes">بله</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="Grade 3 fatty" id="grade3fattyNo" value="0" class="form-check-input">
                            <label class="form-check-label" for="grade3fattyNo">خیر</label>
                        </div>
                    </div>

                    <div class="col-md-2 mt-2">
                        <label>هپاتومگالی</label>
                        <div class="form-check">
                            <input type="radio" name="Hepatomegaly" id="hepatomegalyYes" value="1" class="form-check-input">
                            <label class="form-check-label" for="hepatomegalyYes">بله</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="Hepatomegaly" id="hepatomegalyNo" value="0" class="form-check-input">
                            <label class="form-check-label" for="hepatomegalyNo">خیر</label>
                        </div>
                    </div>

                    <div class="col-md-2 mt-2">
                        <label>اسپلنومگالی</label>
                        <div class="form-check">
                            <input type="radio" name="splenomegaly" id="splenomegalyYes" value="1" class="form-check-input">
                            <label class="form-check-label" for="splenomegalyYes">بله</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="splenomegaly" id="splenomegalyNo" value="0" class="form-check-input">
                            <label class="form-check-label" for="splenomegalyNo">خیر</label>
                        </div>
                    </div>

                    <div class="col-md-2 mt-2">
                        <label>علائم سیروز محیطی</label>
                        <div class="form-check">
                            <input type="radio" name="Cirrhosis_peripheral_symptoms" id="cirrhosisSymptomsYes" value="1" class="form-check-input">
                            <label class="form-check-label" for="cirrhosisSymptomsYes">بله</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="Cirrhosis_peripheral_symptoms" id="cirrhosisSymptomsNo" value="0" class="form-check-input">
                            <label class="form-check-label" for="cirrhosisSymptomsNo">خیر</label>
                        </div>
                    </div>
                    <div class="col-md-2 mt-2">
                        <label>یکنواخت</label>
                        <div class="form-check">
                            <input type="radio" name="Uniforms" id="UniformsYes" value="1" class="form-check-input">
                            <label class="form-check-label" for="UniformsYes">بله</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="Uniforms" id="UniformsNo" value="0" class="form-check-input">
                            <label class="form-check-label" for="UniformsNo">خیر</label>
                        </div>
                    </div>
                    <div class="col-md-2 mt-2">
                        <label>غیریکنواخت</label>
                        <div class="form-check">
                            <input type="radio" name="non_uniform" id="non-uniformYes" value="1" class="form-check-input">
                            <label class="form-check-label" for="non-uniformYes">بله</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="non_uniform" id="non-uniformNo" value="0" class="form-check-input">
                            <label class="form-check-label" for="non-uniformNo">خیر</label>
                        </div>
                    </div>

                    <div class="col-md-2 mt-2">
                        <label>درد در  ناحیه RUQ</label>
                        <div class="form-check">
                            <input type="radio" name="RUQ pain" id="RUQ painYes" value="1" class="form-check-input">
                            <label class="form-check-label" for="RUQ painYes">بله</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="RUQ pain" id="RUQ painNo" value="0" class="form-check-input">
                            <label class="form-check-label" for="RUQ painNo">خیر</label>
                        </div>
                    </div>
                    <div class="col-md-2 mt-2">
                        <label>ناراحتی مبهم در RUQ</label>
                        <div class="form-check">
                            <input type="radio" name="Vague_discomfort_RUQ" id="Vague discomfort RUQYes" value="1" class="form-check-input">
                            <label class="form-check-label" for="Vague discomfort RUQYes">بله</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="Vague_discomfort_RUQ" id="Vague discomfort RUQNo" value="0" class="form-check-input">
                            <label class="form-check-label" for="Vague discomfort RUQNo">خیر</label>
                        </div>
                    </div>
                </div>
                <div class="text-left">
                    <button type="button" class="btn btn-secondary mt-5" onclick="prevStep()">قبلی</button>
                    <button type="button" class="btn btn-primary mt-5" onclick="nextStep()">بعدی</button>
                   </div>
            </div>

            <!-- Step 3 -->
            <div class="form-step">
                <div class="row">
                    <div class="col-md-2 mt-2">
                        <label>میتوترکسات</label>
                        <div class="form-check">
                            <input type="radio" name="Methotrexate" id="MethotrexateYes" value="1" class="form-check-input">
                            <label class="form-check-label" for="MethotrexateYes">بله</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="Methotrexate" id="MethotrexateNo" value="0" class="form-check-input">
                            <label class="form-check-label" for="MethotrexateNo">خیر</label>
                        </div>
                    </div>

                    <div class="col-md-2 mt-2">
                        <label>آسپرین</label>
                        <div class="form-check">
                            <input type="radio" name="Aspirin" id="AspirinYes" value="1" class="form-check-input">
                            <label class="form-check-label" for="AspirinYes">بله</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="Aspirin" id="AspirinNo" value="0" class="form-check-input">
                            <label class="form-check-label" for="AspirinNo">خیر</label>
                        </div>
                    </div>

                    <div class="col-md-2 mt-2">
                        <label>گلوکوکورتیکوئیدها</label>
                        <div class="form-check">
                            <input type="radio" name="Glucocorticoids" id="GlucocorticoidsYes" value="1" class="form-check-input">
                            <label class="form-check-label" for="GlucocorticoidsYes">بله</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="Glucocorticoids" id="GlucocorticoidsNo" value="0" class="form-check-input">
                            <label class="form-check-label" for="GlucocorticoidsNo">خیر</label>
                        </div>
                    </div>

                    <div class="col-md-3 mt-2">
                        <label>مسدود کننده های کانال کلسیم</label>
                        <div class="form-check">
                            <input type="radio" name="Calcium channel blockers" id="CalciumChannelBlockersYes" value="1" class="form-check-input">
                            <label class="form-check-label" for="CalciumChannelBlockersYes">بله</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="Calcium channel blockers" id="CalciumChannelBlockersNo" value="0" class="form-check-input">
                            <label class="form-check-label" for="CalciumChannelBlockersNo">خیر</label>
                        </div>
                    </div>

                    <div class="col-md-3 mt-2">
                        <label>آنالوگ های نوکلئولیز</label>
                        <div class="form-check">
                            <input type="radio" name="Nucleolysis analogs" id="NucleolysisAnalogsYes" value="1" class="form-check-input">
                            <label class="form-check-label" for="NucleolysisAnalogsYes">بله</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="Nucleolysis analogs" id="NucleolysisAnalogsNo" value="0" class="form-check-input">
                            <label class="form-check-label" for="NucleolysisAnalogsNo">خیر</label>
                        </div>
                    </div>


                    <div class="col-md-2 mt-2">
                        <label>تتراسایکلین</label>
                        <div class="form-check">
                            <input type="radio" name="Tetracycline" id="TetracyclineYes" value="1" class="form-check-input">
                            <label class="form-check-label" for="TetracyclineYes">بله</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="Tetracycline" id="TetracyclineNo" value="0" class="form-check-input">
                            <label class="form-check-label" for="TetracyclineNo">خیر</label>
                        </div>
                    </div>
                    <div class="col-md-2 mt-2">
                        <label>استروژن</label>
                        <div class="form-check">
                            <input type="radio" name="Estrogen" id="EstrogenYes" value="1" class="form-check-input">
                            <label class="form-check-label" for="EstrogenYes">بله</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="Estrogen" id="EstrogenNo" value="0" class="form-check-input">
                            <label class="form-check-label" for="EstrogenNo">خیر</label>
                        </div>
                    </div>


                    <div class="col-md-2 mt-2">
                        <label>داروهای شیمی درمانی</label>
                        <div class="form-check">
                            <input type="radio" name="Chemotherapy drugs" id="ChemotherapyDrugsYes" value="1" class="form-check-input">
                            <label class="form-check-label" for="ChemotherapyDrugsYes">بله</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="Chemotherapy drugs" id="ChemotherapyDrugsNo" value="0" class="form-check-input">
                            <label class="form-check-label" for="ChemotherapyDrugsNo">خیر</label>
                        </div>
                    </div>

                    <div class="col-md-2 mt-2">
                        <label>تاموکسیفن</label>
                        <div class="form-check">
                            <input type="radio" name="Tamoxifen" id="TamoxifenYes" value="1" class="form-check-input">
                            <label class="form-check-label" for="TamoxifenYes">بله</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="Tamoxifen" id="TamoxifenNo" value="0" class="form-check-input">
                            <label class="form-check-label" for="TamoxifenNo">خیر</label>
                        </div>
                    </div>
                </div>
                <div class="text-left">
                    <button type="button" class="btn btn-secondary mt-5" onclick="prevStep()">قبلی</button>
                <button type="submit" class="btn btn-primary mt-5">ثبت اطلاعات</button>
                </div>
            </div>
    </div>

    <!-- BMI Modal -->
    <div class="modal fade" id="bmiModal" tabindex="-1" role="dialog" aria-labelledby="bmiModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bmiModalLabel">محاسبه BMI</h5>
                </div>
                <div class="modal-body">
                    <form id="bmiForm">
                        <div class="form-group">
                            <label for="height">قد ( سانتی متر)</label>
                            <input type="number" class="form-control" id="height">
                        </div>
                        <div class="form-group">
                            <label for="weight">وزن ( کیلو گرم)</label>
                            <input type="number" class="form-control" id="weight">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <span  class="btn btn-secondary" data-dismiss="modal">بستن</span>
                    <span  class="btn btn-primary" id="calculateBmi" data-dismiss="modal">محاسبه</span>
                </div>
            </div>
        </div>
    </div>

</form>
</div>
<script>
    document.getElementById('calculateBmi').addEventListener('click', function() {
        var height = document.getElementById('height').value;
        var weight = document.getElementById('weight').value;

        if(height > 0 && weight > 0) {
            var heightInMeters = height / 100;
            var bmi = (weight / (heightInMeters * heightInMeters)).toFixed(1);

            document.getElementById('BMI').value = bmi;

            $('#bmiModal').modal('hide');
        } else {
            alert("لطف قد و وزن بیمار را وارد نمایید");
        }
    });
</script>
<script>
    let currentStep = 0;
const formSteps = document.querySelectorAll('.form-step');

function showStep(step) {
    formSteps.forEach((formStep, index) => {
        formStep.style.display = (index === step) ? 'block' : 'none';
    });
}

function nextStep() {
    if (currentStep < formSteps.length - 1) {
        currentStep++;
        showStep(currentStep);
    }
}

function prevStep() {
    if (currentStep > 0) {
        currentStep--;
        showStep(currentStep);
    }
}

// Initially show the first step
showStep(currentStep);

</script>
@endsection
