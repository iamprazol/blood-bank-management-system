@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-10 mr-auto">
                <div class="card">
                    <div class="card-header">{{ __(' Who Can Donate') }}</div>

                    <div class="card-body">
                        <ul class="list-group">
                            <li>Accident & Injury:– Can donate if otherwise healthy.</li>
                            <li> Accupunture:– Postpone donation for one year.</li>
                            <li> Aids:– Cannot donate.</li>
                            <li> Allergies– Can donate if mild and require no treatment.</li>
                            <li>    Cancer– Cannot donate.</li>
                            <li>    Bronchitis– Postpone donation till 4 weeks after recovery.</li>
                            <li>    Blood Pressure– Acceptable range is 160/90 to 110/70. Not to donate if on medication.</li>
                            <li>    Asthama– Can donate if mild. Those with severe asthama requiring regular treatment cannot donate.</li>
                            <li>    Arthiritis– Can donate if mild and not on medication.</li>
                            <li>    Anaemia– Postpone donation.</li>
                            <li>    Alcohol– Postpone donation if consumed alcohol in last 12 hours.</li>
                            <li>    Cold and Sore Throat– May not donate for first 24 hours into the condition. Can donate after 24 hours if feeling well enough to donate.</li>
                            <li>    Chicken Pox– Postpone donation till 4 weeks after recovery.</li>
                            <li>    Cholesterol– Can donate if on diet control. Not to donate if under treatment.</li>
                            <li>    Colitis– Cannot donate.</li>
                            <li>    Colostomy– Cannot donate</li>
                            <li>    Dementia– Cannot donate</li>
                            <li>    Dental Work– Can donate even if recent case of minor dental work like dental cleaning, fillings and extractions. Postpone donation for 72 hours if undergone oral surgery.</li>
                            <li>    Dengue– Postpone donation till 4 weeks after recovery.</li>
                            <li>    Dermatitis– Can donate if mild. Postpone donation if severe.</li>
                            <li>    Diabetes– Can donate if treating by diet control. Postpone donation if under medication.</li>
                            <li>    Diarrhoea– Postpone donation till 3 weeks after recovery.</li>
                            <li>    Drug Abuse– Cannot donate.</li>
                            <li>    Ear Piercing– Can donate if done by physician or using ear piercing gun with sterile supplies. Else postpone for one year.</li>
                            <li>    Eczema– Can donate if mild. Postpone donation if severe.</li>
                            <li>    Electrolysis– Postpone donation for one year.</li>
                            <li>    Emphysema– Can not donate.</li>
                            <li>    Filariasis– Cannot donate.</li>
                            <li>    Food Poisoning– Postpone donation for one week after recovery.</li>
                            <li>    Gastroenteritis– Postpone donation for one week after recovery.</li>
                            <li>    Gall Stone– Can donate if not on treatment.</li>
                            <li>    Genital Herpes– Postpone donation for 4 weeks after recovery.</li>
                            <li>    Gonorrhoea/Syphillis– Postpone donation for 1 year after recovery.</li>
                            <li>    Gout Cannot donate.</li>
                            <li>    Hepatitis– Can not donate if having history of viral hepatitis after 11 years of age. However can donate if history of hepatitis pertaining to mononucleosis or CMV infection.</li>
                            <li>    Leprosy– Cannot donate.</li>
                            <li>    Malaria– Postpone donation for 3 years after recovery.</li>
                            <li>    Mensuration– Can donate.</li>
                            <li>    Postrate– Cannot donate.</li>
                            <li>    Pregnancy– Can donate after 6 weeks of full term normal delivery. Can donate 6 weeks after termination in third trimester. Those with first or second trimester miscarriage can donate.</li>
                            <li>    Sickle Cell Trait– Cannot donate.</li>
                            <li>    Smoker– Can Donate.</li>
                            <li>    Spondylosis– Can donate if feeling fit and not under treatment.</li>
                            <li>    Stroke– Cannot donate.</li>
                            <li>    Syphilis– Cannot donate.</li>
                            <li>    Tattoo– Postpone donation for one year.</li>
                            <li>    Thyroid– For Hypothyroid can donate if feeling well and euthyroid on thyroxine for six months. For Hyperthyroid cannot donate until euthyroid for six months.</li>
                            <li>    Transfusion– Postpone donation by one year if undergone transfusion with blood products. However can donate if undergone autologous transfusion.</li>
                            <li>    Tuberculosis– Cannot donate till 2 years after complete cure.</li>
                            <li>    Viral Infection– Can donate after cure and off treatment.</li>
                            <li>    Worms– Can donate after cure.</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mr-auto">
                <div class="card">
                    <div class="card-header">{{ __('  Who Can/Cannot Donate? ') }}</div>

                    <div class="card-body">
                        <ul class="list-group">
                           <li>Normally there is a common thinking that anyone can donate blood except children but medicos have developed some guidelines and thus explained some guidelines and criteria for donation of blood.</li>
                            <li>A person of any sex from the age from seventeen to sixty can donate blood.</li>
                            <li>Blood donors should be of more than 45 kg.</li>
                            <li>The amount of hemoglobin in the blood should be more than 12 gm.</li>
                            <li>People who donate blood should be in good health and should not suffer or have suffered from any serious illness . Heart, lungs, liver must be in good condition and any person with past or present illness like (Jaundice, malaria, typhoid, AIDS, hepatitis ) is contradicted. If the donor is using any drugs/medicines, s/he must consult the doctor before donating blood.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mr-auto">
                <div class="card">
                    <div class="card-header">{{ __('  Period & Quantity ') }}</div>

                    <div class="card-body">

                        <p>One can not donate blood more than four times a year and for females it is recommended to donate blood only two times a year. It is also recommended that one should not donate more than 400ml of blood at one time. After each withdrawal of blood, it takes 36 hours for the body to reconstitute the fluid volume and 21 days for the blood cell count to return to normal level.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mr-auto">
                <div class="card">
                    <div class="card-header">{{ __('  Who Cannot Donate? ') }}</div>

                    <div class="card-body">
                        <ul class="list-group">

                            <li>Blood donation is prohibited for persons with following health problems. Tuberculosis, Sexually Transferable diseases, Diabetes, Asthma, High Blood pressure, Kidney problems, Heart diseases, Jaundice, Fever, AIDS.</li>

                            <li>Also if the person is taking medicine for long time or addicted to any drugs, s/he is prohibited for donating blood. Incase of females, one can not donate during her periods, pregnancy and also during breast feeding.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection