<?php
include_once("data.php");
class Database extends Connect
{
    public $con;
    function __construct()
    {
        date_default_timezone_set("asia/phnom_penh");
        $this->con = new mysqli("$this->host", "$this->username", "$this->pass", "$this->db");
        $this->con->set_charset("utf-8");
        if (!$this->con) {
            echo "Error Connection";
        }
    }
    function getProductByCode($con = false)
    {
        $sql = "SELECT cus_products.*,cus_categories.name as cate_name,cus_product_variants.name as var_name FROM cus_products LEFT JOIN cus_categories ON cus_categories.id = cus_products.category_id LEFT JOIN cus_product_variants ON cus_product_variants.product_id = cus_products.id WHERE $con LIMIT 0,1";
        $result = $this->con->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_array();
            return $row;
        } else {
            return false;
        }
    }

    public function date_format($sdate)
    {
        if ($sdate) {
            return date("d/m/Y", strtotime($sdate));
        } else {
            return '0000-00-00';
        }
    }

    function url()
    {
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
        $base_url = $protocol . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
        return $base_url;
    }
}
