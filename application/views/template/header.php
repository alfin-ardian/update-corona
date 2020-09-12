<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update corona</title>
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info sticky-top">
        <a class="navbar-brand" href="#">Update Corona</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url(); ?>home">Home <i class="fas fa-home"></i><span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>provinsi/">Kasus Provinsi <i class="fas fa-journal-whills"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>peta">Peta Sebaran <i class="fas fa-map-marked-alt"></i></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>lapor">Lapor Sigap <i class="fas fa-file-upload"></i></a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-9 mx-auto mt-4">
                <div class="jumbotron">
                    <h2 style="text-align: center;">
                        Selamat Datang !
                    </h2>
                    <p style="text-align: center;">
                        di situs live data covid-19, selalu pakai masker bila keluar rumah, sering cuci tangan, makan makanan bergizi dan istirahat yang cukup.
                    </p>
                    <p style="text-align: center;">
                        <b>"COVID-19 severity
                            Most people infected with COVID-19 will only have mild symptoms and fully recover. Yet, some people are more at risk."</b>
                        <i>- World Health Organization -</i>
                    </p>
                </div>
            </div>
        </div>
    </div>