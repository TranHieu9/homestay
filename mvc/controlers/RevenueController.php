<?php
class RevenueController {
    private $model;
    private $view;

    public function __construct($model, $view) {
        $this->model = $model;
        $this->view = $view;
    }

    public function showRevenueChart() {
        $data = $this->model->getRevenueData();
        $this->view->displayChart($data);
    }
}
?>