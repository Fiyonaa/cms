<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Caraousel extends CI_Controller {
    function update_views($content_id) {
        global $servername, $username, $password, $dbname;
    
        // Koneksi ke database
        $conn = new mysqli($servername, $username, $password, $dbname);
    
        // Cek koneksi
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
        // Update jumlah views
        $sql = "INSERT INTO content_views (content_id, views) VALUES (?, 1)
                ON DUPLICATE KEY UPDATE views = views + 1";
    
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $content_id);
        $stmt->execute();
    
        $stmt->close();
        $conn->close();
    }
    
    function get_total_views($content_id) {
        global $servername, $username, $password, $dbname;
    
        // Koneksi ke database
        $conn = new mysqli($servername, $username, $password, $dbname);
    
        // Cek koneksi
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
        // Ambil jumlah views
        $sql = "SELECT views FROM content_views WHERE content_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $content_id);
        $stmt->execute();
        $stmt->bind_result($views);
        $stmt->fetch();
    
        $stmt->close();
        $conn->close();
    
        return $views !== null ? $views : 0;
    }
    
    // Contoh penggunaan
    $content_id = 1; // Ganti dengan ID konten yang sesuai
    
    // Update views saat konten ditonton
    update_views($content_id);
    
    // Ambil dan tampilkan total views
    $total_views = get_total_views($content_id);
    echo "Total views untuk konten ID $content_id: $total_views";
}   
?>