<?php 

class Admins extends Controller {

    public function __construct() {
        $this->userModel = $this->model('User');
        $this->carModel = $this->model('Car');
    }


    public function index() {
        $data = [
            'title' => 'Login page',
            'username' => '',
            'password' => '',
            'usernameError' => '',
            'passwordError' => ''
        ];
        
        //Check for post
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'usernameError' => '', 
                'passwordError' => ''
            ];

            //Validate username
            if (empty($data['username'])) {
                $data['usernameError'] = 'Please enter a username.';
            }

            //Validate password
            if (empty($data['password'])) {
                $data['passwordError'] = 'Please enter a password.';
            }

            //Check if all errors are empty
            if (empty($data['usernameError']) && empty($data['passwordError'])) {
                if ($data['username'] == 'admin' && $data['password'] == 'test1234') {
                    header('location:' . URLROOT . '/admins/users');
                } else {
                    $data['passwordError'] = 'Username or password is incorrect. Please try again.';

                    $this->view('admins/index', $data);
                }
            }
        }
        $this->view('admins/index', $data);
    }

    public function users() {
        $users = $this->userModel->findAllUsers();

        $data = [
            'users' => $users
        ];  

        $this->view('admins/users', $data);
    }

    public function deleteUser() {
        $id = $_POST['id'];

        $this->userModel->deleteUser($id);
        header('Location: ' . URLROOT . '/admins/users');
    }

    public function cars() {
        $cars = $this->carModel->findAllCars();

        $data = [
            'cars' => $cars
        ];

        $this->view('admins/cars', $data);
    }

    public function deleteCar() {
        $id = $_POST['id'];

        $this->carModel->deleteCar($id);
        header('Location: ' . URLROOT . '/admins/cars');
    }

    public function addcar() {
        $data = [
            'brand' => '',
            'model' => '',
            'type' => '',
            'transmission' => '',
            'numberOfSeats' => '',
            'price' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'brand' => trim($_POST['brand']),
                'model' => trim($_POST['model']),
                'type' => trim($_POST['type']),
                'transmission' => trim($_POST['transmission']),
                'numberOfSeats' => trim($_POST['numberOfSeats']),
                'price' => trim($_POST['price']),
            ];

            if ($this->carModel->addCar($data)) {
                    header('location: ' . URLROOT . '/admins/cars');
                } else {
                    die('Something went wrong.');
                }
        }

        $this->view('/admins/addcar');
    }
}