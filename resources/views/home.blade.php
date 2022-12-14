@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card" dir="rtl">
                    <div class="card-header">{{ __('  الرقابة الشرعية') }}</div>
                    <div class="card-body">
                        <h4>
                            مفهوم الرقابه الشرعيه :
                        </h4>
                        <p>
                            يقصد بالرقابه الشرعيه متابعه وفحص وتحليل كافه الاعمال والتصرفات والسلوكيات التي يقوم بها الافراد
                            والجمعات والمؤسسات والوحدات وغيرها، للتاكد من انها تتم وفقا لاحكام وقواعد الشريعه الاسلاميه،
                            وذلك باستخدام الوسائل والاساليب الملائمه المشروعه، وبيان المخالفات والاخطاء وتصويبها فورا،
                            وتقديم التقارير الى الجهات المعنة.
                            عرفت الراقبة الشرعيه ايضا بانها :التاكد من مدي مطابقة اعمال المؤسسة المالية الاسلامية لاحكامها
                            الشريعة الاسلامية حسب الفتاوي الصادرة والقرارات المعتمدة من جهة الفتوي .

                        </p>
                        <h4>
                            هيئة  الرقابة الشرعية :
                        </h4>
                        <p>
                            تقوم هيئه الرقابه الشرعيه بالبنوك الاسلاميه بمراجعه ودراسه كافه المنتجات والخدمات المصرفيه
                            الاسلاميه التي تتطلقها البنوك حيث تضم الهيئه في عضويتها علماء يتميزون بالمعرفه العميقه بالشريعه
                            الاسلاميه وبفقه المعاملات بصفه خاصه، ولايتم استثمار اية اموال خاصه بالبنوك الاسلاميه في معاملات
                            غير متوافقه مع احكام الشريعه الاسلاميه او الحصول علي اموال من مصدر غير شرعي .
                            تعمل هذه الهئية المكونة من ذوي الاختصاص في العلوم الشرعية وفقهاء القانون المقارن ولاسيما
                            المعاملات منها ، مع الالمام بالقضايا الاقتصادية المعاصرة علي مراقبة نشاط المصرف والتاكد من شرعية
                            عملياتة ومطابقتها للشريعة ولقوانين البلد حتي لايقع في الحرام، كالتعامل بالفايدة اول الاستثمار في
                            مشروعات غير مباحة كالخمر ، او الاحكتاار السلع وما ينتج منن ينتج عنه ضرر علي المجتمع ، اذن فهمة
                            الهئية الشرعية تتمثل في تقديم فتاوي شرعية في ما يحال اليها من مسائل ، لتقرر مطابقتها للاحكام
                            الشرعية ،

                        </p>

                        {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
