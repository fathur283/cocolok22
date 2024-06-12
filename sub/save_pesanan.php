<?php
    include "koneksi.php"; // Make sure this file path is correct
    session_start();

    $id_barang = "SMRT01";

    if(isset($_POST['kirim'])){
        // Retrieve form data and sanitize them
        $id_barang = "SMRT01";
        $nama = mysqli_real_escape_string($koneksi_data, $_POST['nama']);
        $no_hp = mysqli_real_escape_string($koneksi_data, $_POST['no_hp']);
        $email = mysqli_real_escape_string($koneksi_data, $_POST['email']);
        $kota = mysqli_real_escape_string($koneksi_data, $_POST['kota']);
        $provinsi = mysqli_real_escape_string($koneksi_data, $_POST['provinsi']);
        $kelurahan = mysqli_real_escape_string($koneksi_data, $_POST['kelurahan']);
        $alamat = mysqli_real_escape_string($koneksi_data, $_POST['alamat']);
        $pesan = mysqli_real_escape_string($koneksi_data, $_POST['pesan']);
    
        // Generate automatic order ID
       //ambil data terbesar 
        $char = 'ORD';
        $query = mysqli_query ($koneksi_data,"SELECT max(id_pesanan) as max_kode FROM pesanan WHERE id_pesanan LIKE '{$char}%' ORDER BY id_pesanan DESC LIMIT 1");
        $data = mysqli_fetch_array($query);
        $kodeBarang = $data['max_kode'];

        //mengambil data menggunakan fungsi subtr, 
        //misal data BRG001 akan diambil 001 
        $no = substr($kodeBarang, -3, 3);

        //setelah substring bilangan diambil lantas dicasting menjadi integer
        $no = (int) $no;

        //bilangan yang diambil akan ditambah 1 untuk menentukan nomor urut berikutnya
        $no += 1;

        //perintah sprintf("%03s", $no) berguna untuk membuat string menjadi 3 karakter
        $id_pesanan = $char . sprintf("%03s", $no);
        
        // Retrieve barang data and its stock
        $barang_query = mysqli_query($koneksi_data, "SELECT stok FROM barang WHERE id_barang = '$id_barang'");
        $barang_data = mysqli_fetch_array($barang_query);
        $stok_barang = $barang_data['stok'];
        
        // Check if there is enough stock
        if ($stok_barang > 0) {
            // Insert data into pesanan table
            $insert_pesanan_query = "INSERT INTO pesanan (id_pesanan, id_barang, nama, no_hp, email, kota, provinsi, kelurahan, alamat, pesan) VALUES ('$id_pesanan', '$id_barang', '$nama', '$no_hp', '$email', '$kota', '$provinsi', '$kelurahan', '$alamat', '$pesan')";
            if(mysqli_query($koneksi_data, $insert_pesanan_query)){
                echo "Data pesanan berhasil disimpan.";
                
                // Reduce stock in barang table
                $new_stok_barang = $stok_barang - 1; // assuming 1 item per order
                $update_stok_query = "UPDATE barang SET stok = $new_stok_barang WHERE id_barang = '$id_barang'";
                if(mysqli_query($koneksi_data, $update_stok_query)){
                    $_SESSION['status'] = "Pesanan telah dibuat";
                    $_SESSION['status_code'] = "success";
                    header('location:get-a-quote.php');
                } else {
                    $_SESSION['status'] = "Tidak dapat memperbarui stok barang" . mysqli_error($koneksi_data);
                    $_SESSION['status_code'] = "warning";
                    header('location:get-a-quote.php');
                } 
            } else{
                $_SESSION['status'] = "Gagal membuat pesanan" . mysqli_error($koneksi_data);
                $_SESSION['status_code'] = "error";
                header('location:get-a-quote.php');
            }
        } else {
            $_SESSION['status'] = "Maaf, Stok barang tidak mencukupi" . mysqli_error($koneksi_data);
            $_SESSION['status_code'] = "info";
            header('location:get-a-quote.php');
        }
    }    
    
?>