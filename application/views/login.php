<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Login</h1>
   
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="<?=base_url()?>">Home</a></li>
        <li class="breadcrumb-item "><a href="#">Login</a></li>
    </ol>
    </div>
    
    <div class="row mb-3">
         <div class="col-xl-12 col-md-6 mb-4">
            <div class="card h-100">
                <br>
                <form class="form-horizontal" action="<?=base_url()?>loginadmin/proses" method="POST" role="form">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Nama Admin :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="adminName" placeholder="masukkan Nama Admin" require>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Password :</label>
                        <div class="col-sm-4">
                            <input type="password" class="form-control" name="adminPass" placeholder="masukkan password" require>
                        </div>
                    </div>
                    <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </div>
                </form>
            </div>
            
        </div>       
    </div>
</div>
<!---Container Fluid-->