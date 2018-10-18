<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Activity\Activity::class, function (Faker $faker) {
    $vn_city = ['Ha Noi', 'Bac Can', 'Bac Kan', 'Bac Ninh',
        'Cao Bang', 'Dien Bien', 'Ha Giang', 'Ha Nam',
        'Ha Noi', 'Hoa Binh', 'Hung Yen', 'Lai Chau',
        'Lao Cai', 'Nam Dinh', 'Ninh Binh', 'Phu Tho',
        'Quang Binh', 'Quang Tri', 'Son La', 'Tuyen Quang',
        'Thai Binh', 'Thai Nguyen', 'Thua Thien Hue', 'Vinh Phuc',
        'Yen Bai', 'An Giang', 'Ba Ria - Vung Tau', 'Ben Tre',
        'Binh Phuoc', 'Binh Thuan', 'Can Tho', 'Da Nang',
        'Dac Lac', 'Dac Nong', 'Dak Lak', 'Dak Nong',
        'Dong Nai', 'Dong Thap', 'Hau Giang', 'Ho Chi Minh',
        'Kon Tum', 'Long An', 'Ninh Thuan', 'Quang Nam',
        'Quang Ngai', 'Soc Trang', 'Tay Ninh', 'Tien Giang',
        'Tra Vinh', 'Thua Thien Hue', 'Tra Vinh', 'Vinh Long',
        'Bac Giang', 'Ha Tinh', 'Hai Duong', 'Hai Phong',
        'Lang Son', 'Nghe An', 'Quang Ninh', 'Thanh Hoa',
        'Bac Lieu', 'Binh Dinh', 'Binh Duong', 'Ca Mau',
        'Da Nang', 'Gia Lai', 'Kien Giang', 'Khanh Hoa',
        'Lam Dong', 'Phu Yen',
    ];
    $category = \App\Models\Activity\Category::pluck('id')->toArray();
    $city = $faker->randomElement($vn_city);
    $name = $city . ' D' .rand(1,10).'N'.rand(1,9);
    return [
        'name' => $name,
        'subtitle' =>$faker->text(rand(10,40)),
        'description' => $faker->text(rand(50,180)),
        'departureLocation' => $city,
        'cutoffTime' => $faker->numberBetween(0,24),
        'slug' => str_slug($name,'-'),
        'categories_id' => $faker->randomElement($category),
        'isActive' => $faker->boolean,
    ];
});
