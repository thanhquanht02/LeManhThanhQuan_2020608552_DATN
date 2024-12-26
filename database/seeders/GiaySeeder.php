<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GiaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // giày id = 1
        DB::table('giay')->insert([
            'ten_giay' => 'Adidas NMD R2',
            'ten_loai_giay' => 'Sneaker',
            'ten_thuong_hieu' => 'Adidas',
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '1200000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay1.png',
            'hinh_anh_2' => 'giay1.png',
            'hinh_anh_3' => 'giay1.png',
            'hinh_anh_4' => 'giay1.png',
            'ten_khuyen_mai' => 'Ngày lễ',
            'so_luong_mua' => '4',
            'created_at' => '2024-10-29 07:59:26',
            'updated_at' => '2024-11-03 21:33:01',
        ]);

        // giày id = 2
        DB::table('giay')->insert([
            'ten_giay' => 'Adidas Superstar',
            'ten_loai_giay' => 'Sneaker',
            'ten_thuong_hieu' => 'Adidas',
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '999000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay2.png',
            'hinh_anh_2' => 'giay2.png',
            'hinh_anh_3' => 'giay2.png',
            'hinh_anh_4' => 'giay2.png',
            'ten_khuyen_mai' => 'Ngày lễ',
            'so_luong_mua' => '5',
            'created_at' => '2024-10-29 07:59:26',
            'updated_at' => '2024-11-03 21:33:01',
        ]);

        // giày id = 3
        DB::table('giay')->insert([
            'ten_giay' => 'Adidas Yeezy Boost 350 V2',
            'ten_loai_giay' => 'Sneaker',
            'ten_thuong_hieu' => 'Adidas',
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '1500000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay3.png',
            'hinh_anh_2' => 'giay3.png',
            'hinh_anh_3' => 'giay3.png',
            'hinh_anh_4' => 'giay3.png',
            'ten_khuyen_mai' => 'Ngày lễ',
            'so_luong_mua' => '6',
            'created_at' => '2024-10-29 07:59:26',
            'updated_at' => '2024-11-03 21:33:01',
        ]);

        // giày id = 4
        DB::table('giay')->insert([
            'ten_giay' => 'Adidas Ultraboost 21',
            'ten_loai_giay' => 'Sneaker',
            'ten_thuong_hieu' => 'Adidas',
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '1800000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay4.png',
            'hinh_anh_2' => 'giay4.png',
            'hinh_anh_3' => 'giay4.png',
            'hinh_anh_4' => 'giay4.png',
            'ten_khuyen_mai' => 'Ngày lễ',
            'so_luong_mua' => '7',
            'created_at' => '2024-10-29 07:59:26',
            'updated_at' => '2024-11-03 21:33:01',
        ]);

        // giày id = 5
        DB::table('giay')->insert([
            'ten_giay' => 'Adidas Yeezy Boost 350 V2',
            'ten_loai_giay' => 'Sneaker',
            'ten_thuong_hieu' => 'Adidas',
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '1500000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay5.png',
            'hinh_anh_2' => 'giay5.png',
            'hinh_anh_3' => 'giay5.png',
            'hinh_anh_4' => 'giay5.png',
            'ten_khuyen_mai' => 'Ngày lễ',
            'so_luong_mua' => '8',
            'created_at' => '2024-10-29 07:59:26',
            'updated_at' => '2024-11-03 21:33:01',
        ]);

        // giày id = 6
        DB::table('giay')->insert([
            'ten_giay' => 'Adidas Yeezy Boost 350 V2',
            'ten_loai_giay' => 'Sneaker',
            'ten_thuong_hieu' => 'Adidas',
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '1500000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay6.png',
            'hinh_anh_2' => 'giay6.png',
            'hinh_anh_3' => 'giay6.png',
            'hinh_anh_4' => 'giay6.png',
            'ten_khuyen_mai' => 'Ngày lễ',
            'so_luong_mua' => '9',
            'created_at' => '2024-10-29 07:59:26',
            'updated_at' => '2024-11-03 21:33:01',
        ]);

        // giày id = 7
        DB::table('giay')->insert([
            'ten_giay' => 'Adidas Yeezy Boost 350 V2',
            'ten_loai_giay' => 'Sneaker',
            'ten_thuong_hieu' => 'Adidas',
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '1500000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay7.png',
            'hinh_anh_2' => 'giay7.png',
            'hinh_anh_3' => 'giay7.png',
            'hinh_anh_4' => 'giay7.png',
            'ten_khuyen_mai' => 'Ngày lễ',
            'so_luong_mua' => '10',
            'created_at' => '2024-10-29 07:59:26',
            'updated_at' => '2024-11-03 21:33:01',
        ]);

        // giày id = 8
        DB::table('giay')->insert([
            'ten_giay' => 'Adidas Yeezy Boost 350 V2',
            'ten_loai_giay' => 'Sneaker',
            'ten_thuong_hieu' => 'Adidas',
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '1500000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay8.png',
            'hinh_anh_2' => 'giay8.png',
            'hinh_anh_3' => 'giay8.png',
            'hinh_anh_4' => 'giay8.png',
            'ten_khuyen_mai' => 'Ngày lễ',
            'so_luong_mua' => '11',
            'created_at' => '2024-10-29 07:59:26',
            'updated_at' => '2024-11-03 21:33:01',
        ]);

        // giày id = 9
        DB::table('giay')->insert([
            'ten_giay' => 'Adidas Yeezy Boost 350 V2',
            'ten_loai_giay' => 'Sneaker',
            'ten_thuong_hieu' => 'Adidas',
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '1500000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay9.png',
            'hinh_anh_2' => 'giay9.png',
            'hinh_anh_3' => 'giay9.png',
            'hinh_anh_4' => 'giay9.png',
            'ten_khuyen_mai' => 'Ngày lễ',
            'so_luong_mua' => '12',
            'created_at' => '2024-10-29 07:59:26',
            'updated_at' => '2024-11-03 21:33:01',
        ]);

        // giày id = 10
        DB::table('giay')->insert([
            'ten_giay' => 'Adidas Yeezy Boost 350 V2',
            'ten_loai_giay' => 'Sneaker',
            'ten_thuong_hieu' => 'Adidas',
            'mo_ta' => '<p>✔️ Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.&nbsp;</p><p>✔️ Kiểu dáng hottrend của năm nay.&nbsp;</p><p>✔️ Giày đẹp, nhẹ, bền. Có thể làm giày cặp, giày nhóm. Thích hợp đi chơi, chạy bộ, gym, đi học, đi làm...&nbsp;</p><p>✔️ Đế cao su bền chắc, có độ bám cao.</p><p>✔️ Mẫu mới nhất hiện nay mang êm chân thời trang cá tính.&nbsp;</p><p>✔️ Dễ dàng kết hợp với hầu hết các phong cách thời trang như: đi học, đi chơi, đi du lịch. Giày đôi, giày nhóm...</p><p>✔️ Có thể kết hợp với váy, jeans, sooc…. Đều phù hợp!!&nbsp;</p>',
            'don_gia' => '1500000',
            'so_luong' => '100',
            'hinh_anh_1' => 'giay10.png',
            'hinh_anh_2' => 'giay10.png',
            'hinh_anh_3' => 'giay10.png',
            'hinh_anh_4' => 'giay10.png',
            'ten_khuyen_mai' => 'Ngày lễ',
            'so_luong_mua' => '13',
            'created_at' => '2024-10-29 07:59:26',
            'updated_at' => '2024-11-03 21:33:01',
        ]);
    }
}
