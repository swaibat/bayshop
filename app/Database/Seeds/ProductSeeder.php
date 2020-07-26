<?php namespace App\Database\Seeds;

class ProductSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'sku' => 'SDL730883102',
                'title' => 'Intex LED-3216 80 cm (32) HD Ready (HDR) LED Television',
                'slug' => 'intex-led-3216-80-cm-(32)-hd-ready-(hdr)-led-television',
                'price' => 23999,
                'description' => '',
                'discount' => 48,
                'discount_type' => '',
                'views' => 6,
                'user_id' => 2,
                'collection_id' => '1',
                'category_id' => 2,
                'status' => '',
                'seo_description' => '',
                'seo_title' => '',
                'social_title' => '',
                'social_description' => '',
                'colors' => '',
                'materials' => '',
                'sizes' => '',
                'weight' => ''],
            [
                'id' => 1,
                'sku' => 'SDL730883102',
                'title' => 'Intex LED-3216 80 cm (32) HD Ready (HDR) LED Television',
                'slug' => 'intex-led-3216-80-cm-(32)-hd-ready-(hdr)-led-television',
                'price' => 23999,
                'description' => '',
                'discount' => 48,
                'discount_type' => '',
                'views' => 6,
                'user_id' => 2,
                'collection_id' => '1',
                'category_id' => 2,
                'status' => '',
                'seo_description' => '',
                'seo_title' => '',
                'social_title' => '',
                'social_description' => '',
                'colors' => '',
                'materials' => '',
                'sizes' => '',
                'weight' => ''],
            [
                'id' => 1,
                'sku' => 'SDL730883102',
                'title' => 'Intex LED-3216 80 cm (32) HD Ready (HDR) LED Television',
                'slug' => 'intex-led-3216-80-cm-(32)-hd-ready-(hdr)-led-television',
                'price' => 23999,
                'description' => '',
                'discount' => 48,
                'discount_type' => '',
                'views' => 6,
                'user_id' => 2,
                'collection_id' => '1',
                'category_id' => 2,
                'status' => '',
                'seo_description' => '',
                'seo_title' => '',
                'social_title' => '',
                'social_description' => '',
                'colors' => '',
                'materials' => '',
                'sizes' => '',
                'weight' => '']
        ];
        // Using Query Builder
        $this->db->table('products')->insertBatch($data);
    }
}
