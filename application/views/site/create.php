<div class="row justify-content-center mt-3">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">form</div>

            <div class="card-body">

                <form action="<?= base_url('site/submit') ?>" method="post" name="myForm">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" ng-model="name" required>
                        <h6 style="color: red" ng-show="myForm.name.$touched && myForm.name.$invalid">You must enter an name</h6>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">E-mail</label>
                        <input type="text" class="form-control" name="email" ng-model="emailInput" required>  
                        <h6 ng-show="myForm.email.$touched && myForm.email.$valid">valid</h6>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control" name="address">

                    </div>

                    <!--                    <div class="mb-3">
                                            <label class="form-label">Phone Number</label>
                                            <input type="tel" class="form-control" name="phone">
                                        </div>
                    
                                        <div class="mb-3">
                                            <label class="form-label">Age</label>
                                            <input type="number" class="form-control" name="age">
                                        </div>-->

                    <button type="submit" class="btn btn-primary" onclick="">Submit</button>

                </form>
            </div>
        </div>
    </div>

</div>
<!--<script>
    function validity() {
        alert('successful');
        return alert;
    }
</script>-->