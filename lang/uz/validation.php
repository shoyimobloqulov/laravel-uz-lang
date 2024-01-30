<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'accepted'        => ':attribute ni qabul qilishingiz kerak.',
    'active_url'      => ':attribute ga noto‘g‘ri URL kiritildi.',
    'after'           => ':attribute da sana :date dan keyin bo‘lishi kerak.',
    'after_or_equal'  => ':attribute da sana :date ga teng yoki undan keyin bo‘lishi kerak.',
    'alpha'           => ':attribute faqat harflarni qabul qilishi mumkin.',
    'alpha_dash'      => ':attribute faqat harflar, sonlar va chiziqchalarni qabul qilishi mumkin.',
    'alpha_num'       => ':attribute faqat harflar va sonlarni qabul qilishi mumkin.',
    'array'           => ':attribute qatordan iborat bo‘lishi kerak.',
    'before'          => ':attribute da sana :date gacha bo‘lishi kerak.',
    'before_or_equal' => ':attribute da sana :date ga teng yoki undan oldin bo‘lishi kerak.',
    'between'         => [
        'numeric' => ':attribute ning qiymati :min va :max orasida bo‘lishi kerak.',
        'file'    => ':attribute dagi faylning hajmi :min va :max kilobayt orasida bo‘lishi kerak.',
        'string'  => ':attribute dagi belgilar soni :min va :max orasida bo‘lishi kerak.',
        'array'   => ':attribute dagi elementlar soni :min va :max orasida bo‘lishi kerak.',
    ],
    'boolean'        => ':attribute maydoni faqat mantiqiy qiymatni qabul qiladi.',
    'confirmed'      => ':attribute tasdiqlangani bilan mos kelmadi.',
    'date'           => ':attribute sana emas.',
    'date_equals'    => ':attribute sana :date ga teng bo‘lishi kerak.',
    'date_format'    => ':attribute maydoni :format formatga mos kelmadi.',
    'different'      => ':attribute va :other maydonlari farqli bo‘lishi kerak.',
    'digits'         => ':attribute :digits raqamdan iborat bo‘lishi kerak.',
    'digits_between' => ':attribute uzunligi :min va :max orasida bo‘lishi kerak.',
    'dimensions'     => ':attribute noto‘g‘ri tasvir o‘lchamlarga ega.',
    'distinct'       => ':attribute maydoni takrorlanuvchi qiymatlardan iborat.',
    'email'          => ':attribute haqiqiy elektron pochta manzili bo‘lishi kerak.',
    'ends_with'      => ':attribute quyidagi qiymatlarning biri bilan tugashi kerak: :values.',
    'exists'         => ':attribute uchun tanlangan qiymat noto‘g‘ri.',
    'file'           => ':attribute fayl bo‘lishi kerak.',
    'filled'         => ':attribute maydoni to‘ldirilishi shart.',
    'gt'             => [
        'numeric' => ':attribute maydoni :value dan katta bo‘lishi kerak.',
        'file'    => ':attribute fayl hajmi :value kilobaytdan katta bo‘lishi kerak.',
        'string'  => ':attribute dagi belgilar soni :value dan katta bo‘lishi kerak.',
        'array'   => ':attribute dagi elementlar soni :value dan katta bo‘lishi kerak.',
    ],
    'gte' => [
        'numeric' => ':attribute maydoni :value dan katta yoki teng bo‘lishi kerak.',
        'file'    => ':attribute fayl hajmi :value kilobaytdan katta yoki teng bo‘lishi kerak.',
        'string'  => ':attribute dagi belgilar soni :value dan katta yoki teng bo‘lishi kerak.',
        'array'   => ':attribute dagi elementlar soni :value dan katta yoki teng bo‘lishi kerak.',
    ],
    'image'    => ':attribute tasvir (rasm) bo‘lishi kerak.',
    'in'       => ':attribute uchun tanlangan qiymat xato.',
    'in_array' => ':attribute maydonining qiymati :other da mavjud emas.',
    'integer'  => ':attribute butun son bo‘lishi kerak.',
    'ip'       => ':attribute haqiqiy IP manzil bo‘lishi kerak.',
    'ipv4'     => ':attribute haqiqiy IPv4 manzil bo‘lishi kerak.',
    'ipv6'     => ':attribute haqiqiy IPv6 manzil bo‘lishi kerak.',
    'json'     => ':attribute JSON qatori bo‘lishi kerak.',
    'lt'       => [
        'numeric' => ':attribute maydoni :value dan kichik bo‘lishi kerak.',
        'file'    => ':attribute dagi fayl hajmi :value kilobaytdan kichik bo‘lishi kerak.',
        'string'  => ':attribute dagi belgilar soni :value dan kichik bo‘lishi kerak.',
        'array'   => ':attribute dagi elementlar soni :value dan kichik bo‘lishi kerak.',
    ],
    'lte' => [
        'numeric' => ':attribute maydoni :value dan kichik yoki teng bo‘lishi kerak.',
        'file'    => ':attribute fayl hajmi :value kilobaytdan kichik yoki teng bo‘lishi kerak.',
        'string'  => ':attribute dagi belgilar soni :value dan kichik yoki teng bo‘lishi kerak.',
        'array'   => ':attribute dagi elementlar soni :value dan kichik yoki teng bo‘lishi kerak.',
    ],
    'max' => [
        'numeric' => ':attribute ning qiymati :max dan oshmasligi kerak.',
        'file'    => ':attribute dagi faylning hajmi :max kilobaytdan oshmasligi kerak.',
        'string'  => ':attribute ning belgilar soni :max tadan oshmasligi kerak.',
        'array'   => ':attribute ning elementlar soni :max tadan oshmasligi kerak.',
    ],
    'mimes'     => ':attribute dagi fayl quyidagi turlardan biri bo‘lishi kerak: :values.',
    'mimetypes' => ':attribute dagi fayl quyidagi turlardan biri bo‘lishi kerak: :values.',
    'min'       => [
        'numeric' => ':attribute ning qiymati :min dan kam bo‘lmasligi kerak.',
        'file'    => ':attribute dagi faylning hajmi :min kilobaytdan kam bo‘lmasligi kerak.',
        'string'  => ':attribute dagi belgilar soni :min tadan kam bo‘lmasligi kerak.',
        'array'   => ':attribute dagi elementlar soni :min tadan kam bo‘lmasligi kerak.',
    ],
    'multiple_of'          => 'The :attribute must be a multiple of :value',
    'not_in'               => ':attribute uchun tanlangan qiymat xato.',
    'not_regex'            => ':attribute uchun tanlangan format xato.',
    'numeric'              => ':attribute son bo‘lishi kerak.',
    'password'             => 'Noto‘g‘ri parol.',
    'present'              => ':attribute maydoni ko‘rsatilishi kerak.',
    'regex'                => ':attribute maydoni xato formatda.',
    'required'             => ':attribute maydoni to‘ldirilishi shart.',
    'required_if'          => ':other maydoni :value ga teng bo‘lsa, :attribute maydoni to‘ldirilishi shart.',
    'required_unless'      => ':other maydoni :values ga teng bo‘lmasa, :attribute maydoni to‘ldirilishi shart.',
    'required_with'        => ':values ko‘rsatilgan bo‘lsa, :attribute maydoni to‘ldirilishi shart.',
    'required_with_all'    => ':values ko‘rsatilgan bo‘lsa, :attribute maydoni to‘ldirilishi shart.',
    'required_without'     => ':values ko‘rsatilmagan bo‘lsa, :attribute maydoni to‘ldirilishi shart.',
    'required_without_all' => ':values lardan hech biri ko‘rsatilmagan bo‘lsa, :attribute maydoni to‘ldirilishi shart.',
    'same'                 => ':attribute ning qiymati :other bilan bir xil bo‘lishi kerak.',
    'size'                 => [
        'numeric' => ':attribute qiymati :size ga teng bo‘lishi kerak.',
        'file'    => ':attribute dagi faylning hajmi :size kilobaytga teng bo‘lishi kerak.',
        'string'  => ':attribute dagi belgilar soni :size ga teng bo‘lishi kerak.',
        'array'   => ':attribute dagi elementlar soni :size ga teng bo‘lishi kerak.',
    ],
    'starts_with' => ':attribute quyidagi qiymatlardan biri bilan boshlanishi kerak: :values.',
    'string'      => ':attribute qator bo‘lishi kerak.',
    'timezone'    => ':attribute ning qiymati mavjud vaqt mintaqasi bo‘lishi kerak.',
    'unique'      => ':attribute maydonining bunday qiymati mavjud. Iltimos boshqa qiymat kiriting.',
    'uploaded'    => ':attribute ni yuklash muvaffaqiyatli amalga oshmadi.',
    'url'         => ':attribute noto‘g‘ri formatga ega.',
    'uuid'        => ':attribute to‘g‘ri UUID qiymatga ega bo‘lishi kerak.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'name'                  => 'Ism',
        'username'              => 'Nickname',
        'email'                 => 'Elektron manzil',
        'first_name'            => 'Ism',
        'last_name'             => 'Familiya',
        'password'              => 'Parol',
        'password_confirmation' => 'Parolni tasdiqlash',
        'city'                  => 'Shahar',
        'country'               => 'Davlat',
        'address'               => 'Manzil',
        'phone'                 => 'Telefon',
        'mobile'                => 'Mobil telefon',
        'age'                   => 'Yosh',
        'sex'                   => 'Jins',
        'gender'                => 'Jins',
        'day'                   => 'Kun',
        'month'                 => 'Oy',
        'year'                  => 'Yil',
        'hour'                  => 'Soat',
        'minute'                => 'Daqiqa',
        'second'                => 'Soniya',
        'title'                 => 'Nomi',
        'content'               => 'Kontent',
        'description'           => 'Izoh',
        'excerpt'               => 'Parcha',
        'date'                  => 'Sana',
        'time'                  => 'Vaqt',
        'available'             => 'Mavjud',
        'size'                  => 'O‘lcham',
    ],
];
