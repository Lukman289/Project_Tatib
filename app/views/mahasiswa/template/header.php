<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?=$data['title']?></title>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <link rel="stylesheet" href="<?= BASEURL ?> /css/mahasiswa.css">
    <style>
        .logo-container {
        display: flex;
        align-items: center;
        }

        .logo-jenis-sanksi {
        width: 30px;
        height: auto;
        margin-right: 40px;
        font-size: 24px;
        margin-left: 40px;
        color: #363637;
        }

        .Text-judul-sanksi {
        color: #403737;
        text-align: center;
        font-family: Anek Telugu;
        font-size: 32px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
        margin-top: 30px;
        }

        table {
        width: 80%;
        border-collapse: collapse;
        margin: auto;
        }

        table,
        th,
        td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
        background-color: white;
        }

        th {
        background-color: #0D366B;
        color: white;
        }

        .box-sanksi {
        width: 125px;
        height: 39px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 15px;
        background-color: #2059A2;
        box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
        margin: auto;
        transition: background-color 0.3s;
        }

        .box-sanksi:hover {
        background-color: #0B2A53;
        }

        .text-sanksi {
        color: white;
        text-decoration: none;
        font-family: Anek Telugu;
        font-size: 20px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
        margin: auto;

        }

        .popup-container {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
        z-index: 1;
        }

        .popup-box {
        background: white;
        padding: 20px;
        border-radius: 10px;
        width: 60%;
        text-align: center;
        }

        .close-popup {
        cursor: pointer;
        color: #FF2121;
        font-weight: bold;
        }

        .logo-container {
        display: flex;
        align-items: center;

        }

        .logo-jenis-sanksi {
        width: 30px;
        /* Sesuaikan ukuran logo sesuai kebutuhan */
        height: auto;
        margin-right: 40px;
        font-size: 24px;
        margin-left: 40px;
        color: #363637;
        /* Sesuaikan jarak antara logo dan teks */
        }

        .Text-judul-sanksi {
        color: #403737;
        text-align: center;
        font-family: Anek Telugu;
        font-size: 32px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
        margin-top: 30px;
        /* Sesuaikan ukuran font sesuai kebutuhan */
        }

        table {

        width: 80%;

        border-collapse: collapse;
        margin: auto;
        }


        table,
        th,
        td {

        border: 1px solid black;

        padding: 8px;

        text-align: left;
        background-color: white;
        }


        th {

        background-color: #0D366B;
        color: white;
        }

        /* Style Dropdown Container */
        .dropdown {
            position: relative;
            display: inline-block;
            align-items: center;
            margin: 0 1rem;
            justify-content: flex-end;
            padding-right: 20px;
        }

        /* Style Dropdown Content (Hidden by Default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            border-radius: 10px;
            min-width: 160px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            right: 0;
        }

        /* Style Dropdown Links */
        .dropdown-content a {
            color: #333;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            border-radius: 10px;
        }

        /* Change color on hover */
        .dropdown-content a:hover {
            background-color: #ddd;
        }

        /* Show the dropdown menu on hover */
        .dropdown:focus-within .dropdown-content {
            display: block;
            opacity: 1;
        }

        .btn-logout {
            color: white;
            font-size: 1.1rem;
            background: transparent;
            border: none;
            cursor: pointer;
        }
    </style>

</head>

<!-- Header Section -->
<div class="container-header">
  <div class="row-header">
    <div class="header-container">
      <div class="header-content">
        <a class="header-title">POLITEKNIK NEGERI MALANG</a>
      </div>
        <div class="dropdown">
            <?php foreach ($data['mahasiswa'] as $mhs): ?>
            <button class="btn-logout"><?=$mhs['nama']?></button>
            <?php endforeach; ?>
            <div class="dropdown-content">
                <a class="profile-title" href="<?=BASEURL?>/Login/logout">Log Out</a>
            </div>
        </div>
    </div>
  </div>
</div>