<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Activity\Itinerary::class, function (Faker $faker) {
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
    return [
        'location' => $faker->randomElement($vn_city),
        'title' => $faker->sentence(6, true),
        'subtitle' => $faker->sentence(9, true),
        'body' => $faker->paragraph(3, true),
        'img' => $faker->randomNumber(4, false)
    ];
});
