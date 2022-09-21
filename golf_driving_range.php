<?php
require_once("data.php");
class Golf_driving_range
{
    private $image;
    private $name;
    private $max_distance;
    private $capacity;
    private $fee;
    private $rental;
    private $address;
    private $access;
    private $business_times;
    private $official_site;
    private $other_infomation;
    private $city;
    private $tell;
    private $allyoucan;
    private static $counter_ranges_each_city = array(
        '江戸川区' => 0,
        '葛飾区' => 0,
        '墨田区' => 0,
        '江東区' => 0,
        '足立区' => 0,
        '荒川区' => 0,
        '北区' => 0,
        '豊島区' => 0,
        '板橋区' => 0,
        '文京区' => 0,
        '台東区' => 0,
        '中央区' => 0,
        '千代田区' => 0,
        '港区' => 0,
        '品川区' => 0,
        '大田区' => 0,
        '新宿区' => 0,
        '渋谷区' => 0,
        '目黒区' => 0,
        '世田谷区' => 0,
        '中野区' => 0,
        '杉並区' => 0,
        '練馬区' => 0
    );

    public function __construct(
        $image,
        $name,
        $max_distance,
        $capacity,
        $fee,
        $allyoucan,
        $rental,
        $address,
        $access,
        $business_times,
        $official_site,
        $other_infomation,
        $city,
        $tell
    ) {
        $this->image = $image;
        $this->name = $name;
        $this->max_distance = $max_distance;
        $this->capacity = $capacity;
        $this->fee = $fee;
        $this->rental = $rental;
        $this->address = $address;
        $this->access = $access;
        $this->business_times = $business_times;
        $this->official_site = $official_site;
        $this->other_infomation = $other_infomation;
        $this->city = $city;
        $this->tell = $tell;
        $this->allyoucan = $allyoucan;
        self::$counter_ranges_each_city[$city] += 1;
    }

    public function getImage()
    {
        return $this->image;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getMaxdistance()
    {
        return $this->max_distance;
    }
    public function getCapacity()
    {
        return $this->capacity;
    }
    public function getFee()
    {
        return $this->fee;
    }
    public function getRental()
    {
        return $this->rental;
    }
    public function getAddress()
    {
        return $this->address;
    }
    public function getAccess()
    {
        return $this->access;
    }
    public function getBusinesstimes()
    {
        return $this->business_times;
    }
    public function getOfficialsite()
    {
        return $this->official_site;
    }
    public function getOtherinfomation()
    {
        return $this->other_infomation;
    }
    public function getCity()
    {
        return $this->city;
    }
    public function getTell()
    {
        return $this->tell;
    }
    public function getAllyoucan()
    {
        return $this->allyoucan;
    }
    public static function getNumber_ranges_in_city($city_name)
    {
        return self::$counter_ranges_each_city[$city_name];
    }
}
