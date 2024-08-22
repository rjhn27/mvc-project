<?php
require_once __DIR__ . '/../Models/User.php';

class HomeController {
    public function index() {
        // Contoh data yang biasanya diambil dari database
        $user = new User("John Doe", "johndoe@example.com");

        // Panggil view dengan data user
        require_once __DIR__ . '/../Views/Home.php';
    }
}
?>
