<div class="row">
    <div class="col-md-10 col-12">
        <?php if (isset($_SESSION['is_logged_in'])) : ?>
            <a class="btn btn-success btn-share mb-5" href="<?php echo ROOT_PATH; ?>shares/add">Share Something</a>
        <?php endif; ?>
        <?php foreach ($viewmodel as $item) : ?>
            <div class="card mb-5">
                <div class="card-header">
                    <h3><?php echo $item['title']; ?></h3>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $item['create_date']; ?></h6>
                    <p class="card-text"><?php echo $item['body']; ?></p>
                </div>
                <div class="card-footer text-muted">
                    <a class="btn btn-light" href="<?php echo $item['link']; ?>" target="_blank">Go To Website</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>