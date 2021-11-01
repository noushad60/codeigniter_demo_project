<div class="row justify-content-center my-5">
    <div class="card" style="width: 30rem;">
        
        <form class="p-4" action="<?= base_url('login/login') ?>" method="post">
            <h6 class="mb-3" style="color: red"><?php echo $this->session->flashdata('msg'); ?></h6>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="username">
            </div>
            <div class="mb-3">
                <label  class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" onclick="passShow()">
                <label class="form-check-label" for="exampleCheck1">show Password</label>
            </div>
            <div class="mb-3 row justify-content-center">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
            <div class="row justify-content-center">
                <label><a href="<?= base_url('login/registration') ?>">Registration</a></label>
            </div>
        </form>
    </div>
</div>

<script>
    function passShow(){
        var x = document.getElementById('password');
        
        if(x.type === 'password'){
            x.type = 'text';
           
        }
        else{
            x.type = 'password';
        }
    }
</script>