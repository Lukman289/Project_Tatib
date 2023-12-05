<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$data['title']?></title>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <link rel="stylesheet" href="http://localhost/Project_Tatib/public/css/admin.css">
    <link rel="stylesheet" href="<?= BASEURL?>/css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* CSS untuk styling */
        .profile {
            position: relative;
            display: inline-block;
            margin-right: 100px;
        }
        .profile-title {
            background: rgba(0, 0, 0, 0);
            color: #FFFFFF;
            cursor: pointer;
            text-decoration: none;
        }
        .profile-title:hover{
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<div class="container-header-admin">
    <div class="row-admin">
    <div class="header-container-admin">
        <div class="header-content-admin">
            <a class="header-title">
                <img src="<?= BASEURL?>/img/logo_polinema.png" alt="logo polinema" width="35px">
                POLITEKNIK NEGERI MALANG
            </a>
        </div>
        <div class="profile">
            <button class="btn profile-title" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?=$data['title']?>
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?=BASEURL?>/Authorization/logout">Log Out</a></li>
            </ul>
        </div>
    </div>
    </div>
</div>
