<?php
/*
** Name : Get Data From NID
*/

function nid_to_data($nID){

   $gov = [

     01 => 'القاهرة', 02 => 'الاسكندرية', 03 => 'بورسعيد', 04 => 'السويس',

     11 => 'دمياط', 12 => 'الدقهلية' , 13 => 'الشرقية', 14 => 'القليوبية',

     15 => 'كفر الشيخ', 16 => 'الغربية' , 17 => 'المنوفية', 18 => 'البحيرة',

     19 => 'الاسماعلية', 21 => 'الجيزة', 22 => 'بني سويف' , 23 => 'الفيوم',

     24 => 'المنيا', 25 => 'اسيوط', 26 => 'سوهاج' , 27 => 'قنا',

     28 => 'اسوان', 29 => 'الاقصر', 31 => 'البحر الاحمر' , 32 => 'الوادي الجديد',

     33 => 'مطروح', 34 => 'شمال سيناء', 35 => 'جنوب سيناء' , 88 => 'خارج الجمهورية'

    ]; //all egy gov

    if(strlen($nID) === 14):

        $gender_number = substr($nID, 12,1);

        if(in_array($gender_number,[1,3,5,7,9]))
        {
            $gender = 'ذكر';
        }
        elseif( in_array($gender_number,[2,4,6,8]) )
        {
            $gender = 'إنثي';
        }
        else {
            $gender = 'غير معروف';
        }

        $t = substr($nID,0,1); //century

        $yy = substr($nID,1,2); //year

        $mm = substr($nID,3,2); //month

        $dd = substr($nID,5,2); //day

        $cc = substr($nID,7,2); //gov Code

        $year = 1700 + 100 * $t + $yy;

        $result = [

        'birthday'=>$year.'-'.$mm.'-'.$dd,

        'governorate' => (isset($gov[$cc])) ? $gov[$cc] : 'غير معروف',

        'Gender' => $gender,

        ];



    else:

        $result = ['error'=>'ID Number Should Be 14'];

    endif;


    header('content-type: application/json');

    return json_encode($result);

}

