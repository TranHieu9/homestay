<?php
class RevenueModel {
    private $db;

    public function __construct() {
        $this->db = new mysqli("localhost", "root", "", "btl");
        if ($this->db->connect_error) {
            die("Kết nối thất bại: " . $this->db->connect_error);
        }
    }

    public function getRevenueData() {
        $sql = "SELECT thang, doanh_thu FROM doanh_thu";
        $result = $this->db->query($sql);

        $data = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[$row['thang']] = $row['doanh_thu'];
            }
        }
        return $data;
    }
}
?>