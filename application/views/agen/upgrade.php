 <div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Upgrade Premium</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('agen') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Upgrade</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                        <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-account-card-details"></i></h1>
                                <h6 class="text-white"><?php echo $row->username ?></h6>
                                <button type="button" class="btn btn-default"><?php  echo '$url' ?></button>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="card card-hover">
                            <div class="box bg-danger text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-account-remove"></i></h1>
                                <h6 class="text-white">Status Anda : Agen Free</h6>
                                <a href="<?php echo base_url('agen/upgrade/checkout') ?>" class="btn btn-success">Dapatkan Premium</a>
                            </div>
                        </div>
                    </div>
                    
                    </div>
                    <h5 class="card-title">Keuntungan bergabung menjadi Agen Premium</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
    </div>
    
</div>            