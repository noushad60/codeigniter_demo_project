<div class="row justify-content-center my-5">
    <div class="card" style="width: 50rem;">

        <form class="p-5" action="<?= base_url('login/submit') ?>" method="post" name="myForm">
            <h6 class="mb-3" style="color: red"><?php
                echo $this->session->flashdata('msg');
                ?></h6>
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" name="name" ng-model="user" required>
                <span style="color: red" ng-show="myForm.name.$touched && myForm.name.$invalid">you must fill Name</span>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <div class="input-group" id="show_hide_password">
                    <input class="form-control" type="password" name="password">
                    <div>
                        <i class="fas fa-lock" ></i>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" ng-model="emailInput" required>
                <h6 ng-show="myForm.email.$touched && myForm.email.$valid">valid</h6>
            </div>
            <div class="mb-3">
                <label class="form-label">address</label>
                <input type="text" class="form-control" name="address">
            </div>
            <!--            <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label">show Password</label>
                        </div>-->
            <div class="mb-3 row justify-content-center">
                <button type="submit" class="btn btn-primary" onclick="formValidation">Register</button>
            </div>

        </form>
    </div>
</div>
    
    
<!--
<script>
function formValidation() {
    var email = document.getElementById('email').value;
    var mailFormate = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if(email.test(mailFormate)){
        document.getElementById('email').value = 'valid';
    }
    else {
        document.getElementById('email').value = 'Invalid Email';
    }
    
}</script>-->
