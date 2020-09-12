<div class="col-md-12">
    <div class="row">
        <div class="col-md-9 mx-auto">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card text-white bg-danger">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-uppercase mb-1">Meninggal</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-frown fa-2x text-gray-300"></i>
                                </div>
                            </div>
                            <h5 class="card-title"><?= $meninggal->value; ?></h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card text-white bg-warning">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-uppercase mb-1">Positif</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-head-side-cough fa-2x text-gray-300"></i>
                                </div>
                            </div>

                            <h5 class="card-title">
                                <?= $positif->value; ?>
                            </h5>

                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card text-white bg-success">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-uppercase mb-1">Sembuh</div>
                                </div>
                                <div class="col-auto">
                                    <i class="far fa-smile-beam fa-2x text-gray-300"></i></i>
                                </div>
                            </div>
                            <h5 class="card-title"><?= $sembuh->value ?></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>