<?php
//memulai sesi
session_start();

//class untuk menghitung jumlah pesanan 
class OrderCounter {
    private $orders;

    public function __construct($orders) {
        $this->orders = $orders;
    }

    public function countTotalOrders() {
        return count($this->orders);
    }

    public function countOrdersByType($type) {
        $count = 0;
        foreach ($this->orders as $order) {
            if ($order['jenis_pemesanan'] == $type) {
                $count++;
            }
        }
        return $count;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data Pesanan</title>

        <style>
            body {
                font-family: 'Arial', sans-serif;
                margin: 0;
                padding: 0;
            }

            header {
                background-color: #0085ad;
                color: #fff;
                padding: 15px 20px;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            header img {
                max-width: 80px;
                height: auto;
            }

            h1 {
                margin: 0;
                
            }

            header nav {
                display: flex;
                align-items: center;
            }

            nav a {
                color: #fff;
                text-decoration: none;
                margin: 0 15px;
                position: relative;
                transition: color 0.3s ease-in-out;
            }

            nav a::before {
                content: "";
                position: absolute;
                bottom: -5px;
                left: 0;
                width: 0;
                height: 2px;
                background-color: #fff;
                transition: width 0.3s ease-in-out;
            }

            nav a:hover {
                color: #ffcc00; 
            }

            nav a:hover::before {
                width: 100%;
            }

            h2 {
                font-size: 24px;
                color: #333;
                margin-top: 50px;
                text-align: center;
            }

            table {
                width: 90%;
                border-collapse: collapse;
                margin: 20px auto; 
            }

            th, td {
                border: 1px solid #ddd;
                padding: 8px;
                text-align: left;
            }

            th {
                background-color: #0085ad;
                color: #fff;
                text-align: center;
            }

            tr:nth-child(even) {
                background-color: #f2f2f2;
            }

            tr:hover {
                background-color: #f5f5f5;
            }


            h3 {
                margin-top: 20px;
            }

            p {
                margin-bottom: 10px;
            }


        </style>
    </head>
    <body>

        <header>
            <img src="./assets/logo.png" alt="Logo">
            <h1>Food's Store</h1>
            <nav>
                <a href="index.html">Pemesanan</a>
                <a href="tampilkan_data.php">Pesanan</a>
            </nav>
        </header>

        <h2>DATA PESANAN</h2>

        <?php
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "db_uaspemweb";

        // membuat koneksi ke database
        $conn = new mysqli($host, $username, $password, $dbname);

        // memeriksa koneksi
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM pemesanan";
        $result = $conn->query($sql);


        //tabel pesanan
        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>Nama</th><th>Makanan</th><th>Jenis Pemesanan</th><th>Pengiriman</th><th>Browser</th><th>IP Address</th></tr>";

            $orders = []; 

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["nama"] . "</td>";
                echo "<td>" . $row["makanan"] . "</td>";
                echo "<td>" . $row["jenis_pemesanan"] . "</td>";
                echo "<td>" . $row["pengiriman"] . "</td>";
                echo "<td>" . $row["browser"] . "</td>";
                echo "<td>" . $row["ip_address"] . "</td>";
                echo "</tr>";

                $orders[] = $row; 
            }

                // menggunakan class ordercounter 
                $orderCounter = new OrderCounter($orders);

                // Count total order
                $totalOrders = $orderCounter->countTotalOrders();
    
                // Count tipe order
                $totalTakehomeOrders = $orderCounter->countOrdersByType('take_home');
                $totalDineinOrders = $orderCounter->countOrdersByType('dine_in');
    
                // Display total orders online and offline in separate boxes
                echo '<div style="display: flex; justify-content: space-around; margin-top: 20px;">';
                echo '<div style="text-align: center; border: 1px solid #ddd; padding: 10px; background-color: #f2f2f2;">';
                echo "<p>Total Pesanan</p>";
                echo "<h3>$totalOrders</h3>";
                echo '</div>';
    
                echo '<div style="text-align: center; border: 1px solid #ddd; padding: 10px; background-color: #f2f2f2;">';
                echo "<p>Total Pesanan Take Home</p>";
                echo "<h3>$totalTakehomeOrders</h3>";
                echo '</div>';
    
                echo '<div style="text-align: center; border: 1px solid #ddd; padding: 10px; background-color: #f2f2f2;">';
                echo "<p>Total Pesanan Dine In</p>";
                echo "<h3>$totalDineinOrders</h3>";
                echo '</div>';
                echo '</div>';

            echo "</table>";

            

        } else {
            echo "0 results";
        }

        $conn->close();
        ?>

    </body>
</html>