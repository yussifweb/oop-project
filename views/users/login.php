<div class="row">
    <div class="col-12 col-md-10">
        <div class="card">
            <div class="card-header">
                User login
            </div>
            <div class="card-body">
                <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                    <div class="form-group">
                        <label class="font-weight-bold">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Your Email Here">
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Your Password Here">
                    </div>
                    <button type="submit" value="submit" name="submit" class="btn btn-primary">Submit</button>
                    <a href="<?php echo ROOT_PATH; ?>users/register" class="btn btn-info">Register</a>
                </form>
            </div>
        </div>
    </div>
</div>