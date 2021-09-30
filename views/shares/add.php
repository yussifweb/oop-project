<div class="row">
    <div class="col-12 col-md-10">
        <div class="card">
            <div class="card-header">
                Share Something
            </div>
            <div class="card-body">
                <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                    <div class="form-group">
                        <label class="font-weight-bold">Share Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Your Title">
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Body</label>
                        <textarea name="body" class="form-control" placeholder="Input text here....."></textarea>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Link</label>
                        <input type="text" name="link" class="form-control">
                    </div>
                    <button type="submit" value="submit" name="submit" class="btn btn-primary">Submit</button>
                    <a href="<?php echo ROOT_PATH; ?>shares" class="btn btn-danger">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>