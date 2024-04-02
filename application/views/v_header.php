<!DOCTYPE html> 
<html> 
<head> 
    <meta charset="utf-8">
    <title>Web Prog II | Merancang Template sederhana dengan Codeigniter</title> 
    <link rel="stylesheet" type="text/css" 
href="http://localhost/pustaka-booking/assets/css/stylebuku.css">
</head> 
<body> 
    <div id="wrapper">
        <header> 
            <hgroup> 
                <h1>RentalBuku.net</h1> 
                <h3>Membuat Template Sederhana dengan CodeIgniter</h3> 
            </hgroup> 
            <nav> 
                <ul> 
                    <li><a href="<?php echo base_url().'index.php/web' ?>">Home</a></li>
                    <li><a href="<?php echo base_url().'index.php/web/about' ?>">About</a></li>
                </ul> 
            </nav> 
            <div class="clear"></div> 
        </header>
        <!-- Isi halaman -->
    </div> <!-- Tutup div#wrapper -->
    <footer>
        <p>&copy; 2024 RentalBuku.net</p>
    </footer>
</body> 
</html>