@extends('user.layouts.app')
@section('content')
    <div class="container-fluid ">

        <form action="{{ route('request.store') }}" method="POST" id="multiStepForm">
            @csrf
            <style>
                .form-check {
                    display: flex;
                    align-items: center;
                }

                .form-check-label {
                    margin-right: 5px;
                }
            </style>
            <div>
                <h5 class="mt-2">اطلاعات هویتی بیمار</h5>
                <hr>
                <div class="row">

                    <div class="col-md-2 mt-2">
                        <label for="first_name">نام</label>
                        <input type="text" name="first_name" class="form-control" id="first_name"
                            value="{{ isset($patient) ? $patient->first_name : null }}">
                    </div>
                    <div class="col-md-2 mt-2">
                        <label for="last_name">نام خانوادگی</label>
                        <input type="text" name="last_name" class="form-control" id="last_name"
                            value="{{ isset($patient) ? $patient->last_name : null }}">
                    </div>

                    <div class="col-md-2 mt-2">
                        <label for="age">سن</label>
                        <input type="text" name="age" class="form-control" id="age"
                            value="{{ isset($patient) ? $patient->age : null }}">
                    </div>
                    <div class="col-md-2 mt-2">
                        <label for="phone">شماره تلفن</label>
                        <input type="text" name="phone" class="form-control" id="phone"
                            value="{{ isset($patient) ? $patient->phone : null }}">
                    </div>
                    <div class="col-md-2 mt-2">
                        <label for="national_code">کد ملی</label>
                        <input type="text" name="national_code" class="form-control" id="national_code"
                            value="{{ isset($patient) ? $patient->national_code : null }}">
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
                    <div class="border border-info p-2 px-5 text-center"
                        style="border-radius: 15px;margin-left: 20% !important;margin-right: 20% !important;">
                        <div class="row">
                            <div class="col-md-3 p-2 rounded" style="background-color: #ababff">
                                Hx
                            </div>
                            <div class="col-md-3 p-2 rounded">
                                Lab Result
                            </div>
                            <div class="col-md-3 p-2 rounded">
                                Para Clinic
                            </div>
                            <div class="col-md-3 p-2 rounded">
                                Medication
                            </div>
                        </div>
                    </div>
                    <div class="row px-5">

                        <div class="col-md-12 mt-2 mb-4">
                            <label for="BMI">BMI</label>
                            <div class="row">
                                <div class="col-md-5">
                                    <input type="number" name="BMI" class="form-control" id="BMI" step="0.1">
                                </div>
                                <div class="col-md-7">
                                    <button type="button" class="btn btn-success btn-block" data-toggle="modal"
                                        data-target="#bmiModal">محاسبه BMI</button>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="col-md-2 mt-2">
                            <div class="form-check d-inline-block">
                                <input type="checkbox" name="Diabetes" id="DiabetesYes" value="0"
                                    class="form-check-input" onchange="this.value=this.checked?1:0;">
                                <label></label>
                            </div>
                            <label class="form-check-label d-inline-block" for="DiabetesYes">دیابت</label>
                        </div>

                        <div class="col-md-2 mt-2">
                            <div class="form-check d-inline-block">
                                <input type="checkbox" name="Hyperlipidemia" id="HyperlipidemiaYes" value="0"
                                    class="form-check-input" onchange="this.value=this.checked?1:0;">
                                <label></label>
                            </div>
                            <label class="form-check-label d-inline-block" for="HyperlipidemiaYes">چربی خون بالا</label>
                        </div>

                        <div class="col-md-2 mt-2">
                            <div class="form-check d-inline-block">
                                <input type="checkbox" name="Hypertension" id="HypertensionYes" value="0"
                                    class="form-check-input" onchange="this.value=this.checked?1:0;">
                                <label></label>
                            </div>
                            <label class="form-check-label d-inline-block" for="HypertensionYes">فشار خون بالا</label>
                        </div>

                        <div class="col-md-2 mt-2">
                            <div class="form-check d-inline-block">
                                <input type="checkbox" name="Alcoholic" id="AlcoholicYes" value="0"
                                    class="form-check-input" onchange="this.value=this.checked?1:0;">
                                <label></label>
                            </div>
                            <label class="form-check-label d-inline-block" for="AlcoholicYes">الکلی</label>
                        </div>

                        <div class="col-md-2 mt-2">
                            <div class="form-check d-inline-block">
                                <input type="checkbox" name="Smoker" id="SmokerYes" value="0"
                                    class="form-check-input" onchange="this.value=this.checked?1:0;">
                                <label></label>
                            </div>
                            <label class="form-check-label d-inline-block" for="SmokerYes">سیگاری</label>
                        </div>

                    </div>
                    <div class="text-left">
                        <button type="button" class="btn btn-primary mt-5" onclick="nextStep()">بعدی</button>

                    </div>
                </div>



                <!-- Step 2 -->
                <div class="form-step" style="display: none;">
                    <div class="border border-info p-2 px-5 text-center"
                        style="border-radius: 15px;margin-left: 20% !important;margin-right: 20% !important;">
                        <div class="row">
                            <div class="col-md-3 p-2 rounded">
                                Hx
                            </div>
                            <div class="col-md-3 p-2 rounded" style="background-color: #ababff">
                                Lab Result
                            </div>
                            <div class="col-md-3 p-2 rounded">
                                Para Clinic
                            </div>
                            <div class="col-md-3 p-2 rounded">
                                Medication
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-2 mt-2">
                            <label for="AST">AST</label>
                            <input type="number" class="form-control" name="AST" id="AST">
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
                            <label for="CHOLESTROL">CHOLESTROL</label>
                            <input type="number" class="form-control" name="CHOLESTROL" id="CHOLESTROL">
                        </div>

                        <div class="col-md-2 mt-2">
                            <label for="TG">TG</label>
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
                            <label for="Urea">Urea</label>
                            <input type="number" class="form-control" name="Urea" id="Urea">
                        </div>

                        <div class="col-md-2 mt-2">
                            <label for="Cr">Cr</label>
                            <input type="number" class="form-control" name="Cr" id="Cr" step="0.1">
                        </div>
                        <div class="col-md-2 mt-2">
                            <label for="URIC_ACID">URIC ACID</label>
                            <input type="number" class="form-control" name="URIC_ACID" id="URIC_ACID" step="0.1">
                        </div>


                    </div>
                    <div class="text-left">
                        <button type="button" class="btn btn-secondary mt-5" onclick="prevStep()">قبلی</button>
                        <button type="button" class="btn btn-primary mt-5" onclick="nextStep()">بعدی</button>
                    </div>
                </div>




                <div class="form-step" style="display: none">
                    <div class="border border-info p-2 px-5 text-center"
                        style="border-radius: 15px;margin-left: 20% !important;margin-right: 20% !important;">
                        <div class="row">
                            <div class="col-md-3 p-2 rounded">
                                Hx
                            </div>
                            <div class="col-md-3 p-2 rounded">
                                Lab Result
                            </div>
                            <div class="col-md-3 p-2 rounded" style="background-color: #ababff">
                                Para Clinic
                            </div>
                            <div class="col-md-3 p-2 rounded">
                                Medication
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 mt-2">
                            <input type="number" placeholder="IMT – راست" class="form-control" name="IMT_-_R"
                                id="IMTR" step="0.1">
                        </div>

                        <div class="col-md-2 mt-2">
                            <input type="number" class="form-control" placeholder="IMT – چپ" name="IMT_-_L"
                                id="IMTL" step="0.1">
                        </div>
                        <div class="col-md-2 mt-2">
                            <div class="form-check d-inline-block">
                                <input type="checkbox" name="Grade 1 fatty" id="grade1fatty" value="0"
                                    class="form-check-input" onchange="this.value=this.checked?1:0;">
                                <label></label>
                            </div>
                            <label class="form-check-label d-inline-block" for="grade1fatty">کبدچرب گرید یک</label>
                        </div>

                        <div class="col-md-2 mt-2">
                            <div class="form-check d-inline-block">
                                <input type="checkbox" name="Grade 2 fatty" id="grade2fattyYes" value="0"
                                    class="form-check-input" onchange="this.value=this.checked?1:0;">
                                <label></label>
                            </div>
                            <label class="form-check-label d-inline-block" for="grade2fattyYes">کبد چربگرید دو</label>
                        </div>

                        <div class="col-md-2 mt-2">
                            <div class="form-check d-inline-block">
                                <input type="checkbox" name="Grade 3 fatty" id="grade3fattyYes" value="0"
                                    class="form-check-input" onchange="this.value=this.checked?1:0;">
                                <label></label>
                            </div>
                            <label class="form-check-label d-inline-block" for="grade3fattyYes">کبدچرب گریدسه</label>
                        </div>

                        <div class="col-md-2 mt-2">
                            <div class="form-check d-inline-block">
                                <input type="checkbox" name="Hepatomegaly" id="hepatomegalyYes" value="0"
                                    class="form-check-input" onchange="this.value=this.checked?1:0;">
                                <label></label>
                            </div>
                            <label class="form-check-label d-inline-block" for="hepatomegalyYes">هپاتومگالی</label>
                        </div>

                        <div class="col-md-2 mt-2">
                            <div class="form-check d-inline-block">
                                <input type="checkbox" name="splenomegaly" id="splenomegalyYes" value="0"
                                    class="form-check-input" onchange="this.value=this.checked?1:0;">
                                <label></label>
                            </div>
                            <label class="form-check-label d-inline-block" for="splenomegalyYes">اسپلنومگالی</label>
                        </div>

                        <div class="col-md-3 mt-2">
                            <div class="form-check d-inline-block">
                                <input type="checkbox" name="Cirrhosis_peripheral_symptoms" id="cirrhosisSymptomsYes"
                                    value="0" class="form-check-input" onchange="this.value=this.checked?1:0;">
                                <label></label>
                            </div>
                            <label class="form-check-label d-inline-block" for="cirrhosisSymptomsYes">علائم محیطی
                                سیروز</label>
                        </div>

                        <div class="col-md-2 mt-2">
                            <div class="form-check d-inline-block">
                                <input type="checkbox" name="Uniforms" id="UniformsYes" value="0"
                                    class="form-check-input" onchange="this.value=this.checked?1:0;">
                                <label></label>
                            </div>
                            <label class="form-check-label d-inline-block" for="UniformsYes">یکنواخت</label>
                        </div>

                        <div class="col-md-2 mt-2">
                            <div class="form-check d-inline-block">
                                <input type="checkbox" name="non_uniform" id="non-uniformYes" value="0"
                                    class="form-check-input" onchange="this.value=this.checked?1:0;">
                                <label></label>
                            </div>
                            <label class="form-check-label d-inline-block" for="non-uniformYes">غیریکنواخت</label>
                        </div>

                        <div class="col-md-2 mt-2">
                            <div class="form-check d-inline-block">
                                <input type="checkbox" name="RUQ pain" id="RUQpainYes" value="0"
                                    class="form-check-input" onchange="this.value=this.checked?1:0;">
                                <label></label>
                            </div>
                            <label class="form-check-label d-inline-block" for="RUQpainYes">درد ناحیه RUQ</label>
                        </div>

                        <div class="col-md-3 mt-2">
                            <div class="form-check d-inline-block">
                                <input type="checkbox" name="Vague_discomfort_RUQ" id="Vague_discomfort_RUQYes"
                                    value="0" class="form-check-input" onchange="this.value=this.checked?1:0;">
                                <label></label>
                            </div>
                            <label class="form-check-label d-inline-block" for="Vague_discomfort_RUQYes">ناراحتی مبهم
                                RUQ</label>
                        </div>

                    </div>
                    <div class="text-left">
                        <button type="button" class="btn btn-secondary mt-5" onclick="prevStep()">قبلی</button>
                        <button type="button" class="btn btn-primary mt-5" onclick="nextStep()">بعدی</button>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="form-step" style="display: none">
                    <div class="border border-info p-2 px-5 text-center"
                        style="border-radius: 15px;margin-left: 20% !important;margin-right: 20% !important;">
                        <div class="row">
                            <div class="col-md-3 p-2 rounded">
                                Hx
                            </div>
                            <div class="col-md-3 p-2 rounded">
                                Lab Result
                            </div>
                            <div class="col-md-3 p-2 rounded">
                                Para Clinic
                            </div>
                            <div class="col-md-3 p-2 rounded" style="background-color: #ababff">
                                Medication
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mt-2">
                            <div class="form-check d-inline-block">
                                <input type="checkbox" name="Methotrexate" id="MethotrexateYes" value="0"
                                    class="form-check-input" onchange="this.value=this.checked?1:0;">
                                <label></label>
                            </div>
                            <label class="form-check-label d-inline-block" for="MethotrexateYes">متوترکسات</label>
                        </div>

                        <div class="col-md-3 mt-2">
                            <div class="form-check d-inline-block">
                                <input type="checkbox" name="Aspirin" id="AspirinYes" value="0"
                                    class="form-check-input" onchange="this.value=this.checked?1:0;">
                                <label></label>
                            </div>
                            <label class="form-check-label d-inline-block" for="AspirinYes">آسپرین</label>
                        </div>

                        <div class="col-md-3 mt-2">
                            <div class="form-check d-inline-block">
                                <input type="checkbox" name="Glucocorticoids" id="GlucocorticoidsYes" value="0"
                                    class="form-check-input" onchange="this.value=this.checked?1:0;">
                                <label></label>
                            </div>
                            <label class="form-check-label d-inline-block"
                                for="GlucocorticoidsYes">گلوکوکورتیکوئیدها</label>
                        </div>
                        <div class="col-md-3 mt-2">
                            <div class="form-check d-inline-block">
                                <input type="checkbox" name="Estrogen" id="EstrogenYes" value="0"
                                    class="form-check-input" onchange="this.value=this.checked?1:0;">
                                <label></label>
                            </div>
                            <label class="form-check-label d-inline-block" for="EstrogenYes">استروژن</label>
                        </div>



                        <div class="col-md-3 mt-2">
                            <div class="form-check d-inline-block">
                                <input type="checkbox" name="Tetracycline" id="TetracyclineYes" value="0"
                                    class="form-check-input" onchange="this.value=this.checked?1:0;">
                                <label></label>
                            </div>
                            <label class="form-check-label d-inline-block" for="TetracyclineYes">تتراسایکلین</label>
                        </div>



                        <div class="col-md-3 mt-2">
                            <div class="form-check d-inline-block">
                                <input type="checkbox" name="Chemotherapy drugs" id="ChemotherapyDrugsYes"
                                    value="0" class="form-check-input" onchange="this.value=this.checked?1:0;">
                                <label></label>
                            </div>
                            <label class="form-check-label d-inline-block" for="ChemotherapyDrugsYes">داروهای شیمی
                                درمانی</label>
                        </div>

                        <div class="col-md-3 mt-2">
                            <div class="form-check d-inline-block">
                                <input type="checkbox" name="Tamoxifen" id="TamoxifenYes" value="0"
                                    class="form-check-input" onchange="this.value=this.checked?1:0;">
                                <label></label>
                            </div>
                            <label class="form-check-label d-inline-block" for="TamoxifenYes">تاموکسیفن</label>
                        </div>


                        <div class="col-md-3 mt-2">
                            <div class="form-check d-inline-block">
                                <input type="checkbox" name="Nucleolysis analogs" id="NucleolysisAnalogsYes"
                                    value="0" class="form-check-input" onchange="this.value=this.checked?1:0;">
                                <label></label>
                            </div>
                            <label class="form-check-label d-inline-block" for="NucleolysisAnalogsYes">آنالوگ های
                                نوکلئولیز</label>
                        </div>
                        <div class="col-md-4 mt-2">
                            <div class="form-check d-inline-block">
                                <input type="checkbox" name="Calcium channel blockers" id="CalciumChannelBlockersYes"
                                    value="0" class="form-check-input" onchange="this.value=this.checked?1:0;">
                                <label></label>
                            </div>
                            <label class="form-check-label d-inline-block" for="CalciumChannelBlockersYes">مسدود کننده های
                                کانال کلسیم</label>
                        </div>



                    </div>
                    <div class="text-left">
                        <button type="button" class="btn btn-secondary mt-5" onclick="prevStep()">قبلی</button>
                        <button type="submit" class="btn btn-primary mt-5" id="submitButton">
                            <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                            ثبت اطلاعات
                        </button>
                    </div>
                </div>
            </div>

            <!-- BMI Modal -->
            <div class="modal fade" id="bmiModal" tabindex="-1" role="dialog" aria-labelledby="bmiModalLabel"
                aria-hidden="true">
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
                            <span class="btn btn-secondary" data-dismiss="modal">بستن</span>
                            <span class="btn btn-primary" id="calculateBmi" data-dismiss="modal">محاسبه</span>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
    <script>
        // script.js
$(document).ready(function() {
    $('#submitButton').on('click', function() {
        var $button = $(this);
        var $spinner = $button.find('.spinner-border');

        // Show the spinner
        $spinner.removeClass('d-none');

        // Allow the form to submit
    });
});

    </script>
    <script>
        document.getElementById('calculateBmi').addEventListener('click', function() {
            var height = document.getElementById('height').value;
            var weight = document.getElementById('weight').value;

            if (height > 0 && weight > 0) {
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
