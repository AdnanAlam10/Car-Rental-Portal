<?php 

class Cars extends Controller {
    
    public function __construct() {
        $this->carModel = $this->model('Car');
    }

    public function index() {
        $cars = $this->carModel->findAllCars();
        $data = [
            'cars' => $cars
        ];
        
        $this->view('cars/index', $data);
    }

    public function cart() {

        $this->initializeCartSession();

        $data = [
            'id' => '',
            'price' => '',
            'dateFrom' => '',
            'dateTo' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            $data = [
                'id' => $_POST['id'],
                'price' => $_POST['price'],
                'dateFrom' => $_POST['date_from'],
                'dateTo' => $_POST['date_to']
            ];

            $this->addItemsToCart($data);
        }

        $this->view('cars/cart', $data);
    }

    public function initializeCartSession() {
        if (isCartEmpty()) {
            $_SESSION['cart-items'] = array();
        }
    }

    public function addItemsToCart($data) {
        $dateFrom = new DateTime($data['dateFrom']);
        $dateTo = new DateTime($data['dateTo']);

        $days = $dateTo->diff($dateFrom)->format("%a");
        $days = (int)$days;

        $totalCost = $data['price'] * $days;

        $row= $this->carModel->getCarName($data['id']);
        $brand = $row->brand;
        $model = $row->model;
        

        $_SESSION['cart-items'][$data['id']] = [
            'dateFrom' => $data['dateFrom'],
            'dateTo' => $data['dateTo'],
            'total' => $totalCost,
            'days' => $days,
            'brand' => $brand,
            'model' => $model,
            'price' => $data['price'],
            'id' => $data['id']
        ];
    }

    public function delete() {
        $id = $_POST['id'];

        deleteCar($id);
        header('Location: ' . URLROOT . '/cars/cart');
    }    

}