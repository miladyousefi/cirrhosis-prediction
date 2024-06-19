@extends('user.layouts.app')
@section('content')
<form action="{{route('request.store')}}" method="POST">
    @csrf

    <h5 class="mb-1">اطلاعات بیمار</h5>
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
            <label for="file_code">کدپرونده</label>
            <input type="text" name="file_code" class="form-control" id="file_code" value="{{isset($patient) ? $patient->file_code : null}}">
        </div>
        <div class="col-md-1 mt-2">
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
        <div class="col-md-1 mt-2">
            <label for="sex">جنسیت</label>
            <select class="form-control" name="sex" id="sex">
                <option value="1" selected>مرد</option>
                <option value="0">زن</option>
            </select>
        </div>
    </div>
    <hr>
    <h5 class="mb-1">فرم اطلاعات پزشکی</h5>

    <div class="row">
       
        <div class="col-md-4 mt-2">
            <label for="BMI">BMI</label>
            <div class="row">
                <div class="col-md-7">
                    <input type="number" name="BMI" class="form-control" id="BMI" step="0.1" required>
                </div>
                <div class="col-md-5">
                    <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#bmiModal">محاسبه BMI</button>
                </div>
            </div>
        </div>

        <!-- Modal -->
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
                                <input type="number" class="form-control" id="height" required>
                            </div>
                            <div class="form-group">
                                <label for="weight">وزن ( کیلو گرم)</label>
                                <input type="number" class="form-control" id="weight" required>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                        <button type="button" class="btn btn-primary" id="calculateBmi" data-dismiss="modal">محاسبه</button>
                    </div>
                </div>
            </div>
        </div>



        <div class="col-md-2 mt-2">
            <label for="grade1fatty">گرید ۱ چربی</label>
            <select class="form-control" name="grade1fatty" id="grade1fatty">
                <option value="1" selected>بله</option>
                <option value="0">خیر</option>
            </select>
        </div>
        <div class="col-md-2 mt-2">
            <label for="grade2fatty">گرید ۲ چربی</label>
            <select class="form-control" name="grade2fatty" id="grade2fatty">
                <option value="1">بله</option>
                <option value="0" selected>خیر</option>
            </select>
        </div>
        <div class="col-md-2 mt-2">
            <label for="grade3fatty">گرید ۳ چربی</label>
            <select class="form-control" name="grade3fatty" id="grade3fatty">
                <option value="1">بله</option>
                <option value="0" selected>خیر</option>
            </select>
        </div>
        <div class="col-md-2 mt-2">
            <label for="hepatomegaly">هپاتومگالی</label>
            <select class="form-control" name="hepatomegaly" id="hepatomegaly">
                <option value="1" selected>بله</option>
                <option value="0">خیر</option>
            </select>
        </div>
        <div class="col-md-2 mt-2">
            <label for="splenomegaly">اسپلنومگالی</label>
            <select class="form-control" name="splenomegaly" id="splenomegaly">
                <option value="1">بله</option>
                <option value="0" selected>خیر</option>
            </select>
        </div>

        <div class="col-md-2 mt-2">
            <label for="cirrhosisSymptoms">علائم سیروز محیطی</label>
            <select class="form-control" name="cirrhosisSymptoms" id="cirrhosisSymptoms">
                <option value="1" selected>بله</option>
                <option value="0">خیر</option>
            </select>
        </div>
        <div class="col-md-2 mt-2">
            <label for="IMTR">IMT – راست</label>
            <input type="number" class="form-control" name="IMTR" id="IMTR" value="0.9" step="0.1">
        </div>

        <div class="col-md-2 mt-2">
            <label for="IMTL">IMT – چپ</label>
            <input type="number" class="form-control" name="IMTL" id="IMTL" value="0.8" step="0.1">
        </div>
        <div class="col-md-2 mt-2">
            <label for="AST">AST</label>
            <input type="number" class="form-control" name="AST" id="AST" value="50">
        </div>

        <div class="col-md-2 mt-2">
            <label for="ALT">ALT</label>
            <input type="number" class="form-control" name="ALT" id="ALT" value="40">
        </div>
        <div class="col-md-2 mt-2">
            <label for="ALP">ALP</label>
            <input type="number" class="form-control" name="ALP" id="ALP" value="80">
        </div>

        <div class="col-md-2 mt-2">
            <label for="CHOLESTROL">کلسترول</label>
            <input type="number" class="form-control" name="CHOLESTROL" id="CHOLESTROL" value="200">
        </div>
        <div class="col-md-2 mt-2">
            <label for="TG">تری گلیسیرید</label>
            <input type="number" class="form-control" name="TG" id="TG" value="150">
        </div>

        <div class="col-md-2 mt-2">
            <label for="FBS">FBS</label>
            <input type="number" class="form-control" name="FBS" id="FBS" value="90">
        </div>
        <div class="col-md-2 mt-2">
            <label for="Hb">Hb</label>
            <input type="number" class="form-control" name="Hb" id="Hb" value="14">
        </div>

        <div class="col-md-2 mt-2">
            <label for="Hct">Hct</label>
            <input type="number" class="form-control" name="Hct" id="Hct" value="42">
        </div>
        <div class="col-md-2 mt-2">
            <label for="plt">plt</label>
            <input type="number" class="form-control" name="plt" id="plt" value="250">
        </div>
        
        <div class="col-md-2 mt-2">
            <label for="HDL">HDL</label>
            <input type="number" class="form-control" name="HDL" id="HDL" value="45">
        </div>
        <div class="col-md-2 mt-2">
            <label for="Urea">اوریا</label>
            <input type="number" class="form-control" name="Urea" id="Urea" value="30">
        </div>
        
        <div class="col-md-2 mt-2">
            <label for="Cr">Cr</label>
            <input type="number" class="form-control" name="Cr" id="Cr" value="1.2" step="0.1">
        </div>
        <div class="col-md-2 mt-2">
            <label for="UricAcid">اسید اوریک</label>
            <input type="number" class="form-control" name="UricAcid" id="UricAcid" value="5.5" step="0.1">
        </div>
        
        <div class="col-md-2 mt-2">
            <label for="Diabetes">دیابت</label>
            <select class="form-control" name="Diabetes" id="Diabetes">
                <option value="1" selected>بله</option>
                <option value="0">خیر</option>
            </select>
        </div>
        <div class="col-md-2 mt-2">
            <label for="Hyperlipidemia">چربی خون بالا</label>
            <select class="form-control" name="Hyperlipidemia" id="Hyperlipidemia">
                <option value="1">بله</option>
                <option value="0" selected>خیر</option>
            </select>
        </div>
        
        <div class="col-md-2 mt-2">
            <label for="Hypertension">فشار خون بالا</label>
            <select class="form-control" name="Hypertension" id="Hypertension">
                <option value="1" selected>بله</option>
                <option value="0">خیر</option>
            </select>
        </div>
        <div class="col-md-2 mt-2">
            <label for="Alcoholic">الکلی</label>
            <select class="form-control" name="Alcoholic" id="Alcoholic">
                <option value="1">بله</option>
                <option value="0" selected>خیر</option>
            </select>
        </div>
        <div class="col-md-2 mt-2">
            <label for="Smoker">سیگاری</label>
            <select class="form-control" name="Smoker" id="Smoker">
                <option value="1">بله</option>
                <option value="0" selected>خیر</option>
            </select>
        </div>
        
        <!-- Methotrexate -->
        <div class="col-md-2 mt-2">
            <label for="Methotrexate">میتوترکسات</label>
            <select class="form-control" name="Methotrexate" id="Methotrexate">
                <option value="1">بله</option>
                <option value="0" selected>خیر</option>
            </select>
        </div>
        
        <!-- Aspirin -->
        <div class="col-md-2 mt-2">
            <label for="Aspirin">آسپرین</label>
            <select class="form-control" name="Aspirin" id="Aspirin">
                <option value="1">بله</option>
                <option value="0" selected>خیر</option>
            </select>
        </div>
        
        <!-- Glucocorticoids -->
        <div class="col-md-2 mt-2">
            <label for="Glucocorticoids">گلوکوکورتیکوئیدها</label>
            <select class="form-control" name="Glucocorticoids" id="Glucocorticoids">
                <option value="1">بله</option>
                <option value="0" selected>خیر</option>
            </select>
        </div>
        
        <!-- Calcium channel blockers -->
        <div class="col-md-3 mt-2">
            <label for="CalciumChannelBlockers">مسدود کننده های کانال کلسیم</label>
            <select class="form-control" name="CalciumChannelBlockers" id="CalciumChannelBlockers">
                <option value="1">بله</option>
                <option value="0" selected>خیر</option>
            </select>
        </div>
        
        <!-- Estrogen -->
        <div class="col-md-2 mt-2">
            <label for="Estrogen">استروژن</label>
            <select class="form-control" name="Estrogen" id="Estrogen">
                <option value="1">بله</option>
                <option value="0" selected>خیر</option>
            </select>
        </div>
        
        <!-- Tetracycline -->
        <div class="col-md-2 mt-2">
            <label for="Tetracycline">تتراسایکلین</label>
            <select class="form-control" name="Tetracycline" id="Tetracycline">
                <option value="1">بله</option>
                <option value="0" selected>خیر</option>
            </select>
        </div>
        
        <!-- Nucleolysis analogs -->
        <div class="col-md-3 mt-2">
            <label for="NucleolysisAnalogs">آنالوگ های نوکلئولیز</label>
            <select class="form-control" name="NucleolysisAnalogs" id="NucleolysisAnalogs">
                <option value="1">بله</option>
                <option value="0" selected>خیر</option>
            </select>
        </div>
        
        <!-- Chemotherapy drugs -->
        <div class="col-md-3 mt-2">
            <label for="ChemotherapyDrugs">داروهای شیمی درمانی</label>
            <select class="form-control" name="ChemotherapyDrugs" id="ChemotherapyDrugs">
                <option value="1">بله</option>
                <option value="0" selected>خیر</option>
            </select>
        </div>
        
        <!-- Tamoxifen -->
        <div class="col-md-2 mt-2">
            <label for="Tamoxifen">تاموکسیفن</label>
            <select class="form-control" name="Tamoxifen" id="Tamoxifen">
                <option value="1">بله</option>
                <option value="0" selected>خیر</option>
            </select>
        </div>
        
        <div class="col-md-12 mt-2">
            <button type="submit" class="btn btn-primary">ثبت</button>
        </div>
    </div>
</form>
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
            alert("Please enter valid height and weight!");
        }
    });
</script>
@endsection
