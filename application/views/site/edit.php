<div class="row justify-content-center mt-3">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">form</div>

            <div class="card-body">
         
                <form action="<?= base_url('site/update') ?>" method="post">
                    <input type="hidden" name="id" value="<?= $info['id']?>">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" value="<?= $info['name']?>">  
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">E-mail</label>
                        <input type="text" class="form-control" name="email" value="<?= $info['email']?>">  
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" value="<?= $info['address']?>">

                    </div>

<!--                    <div class="mb-3">
                        <label class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" name="phone">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Age</label>
                        <input type="number" class="form-control" name="age">
                    </div>-->

                    <button type="submit" class="btn btn-primary">update</button>
                   
                </form>
            </div>
        </div>
    </div>

</div>