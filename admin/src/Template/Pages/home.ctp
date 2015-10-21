<div class="row">
    <div class="col-md-3">
        <div class="mini-stat clearfix">
            <div class="mini-stat-icon orange"><i class="fa fa-building-o"></i></div>
            <div class="mini-stat-info">
                <span><?= $total['merchants'] ?></span>
                <?= __('Merchants') ?>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="mini-stat clearfix">
            <div class="mini-stat-icon tar"><i class="fa fa-tag"></i></div>
            <div class="mini-stat-info">
                <span><span><?= $total['offers'] ?></span></span>
                <?= __('Offers') ?>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="mini-stat clearfix">
            <div class="mini-stat-icon pink"><i class="fa fa-external-link"></i></div>
            <div class="mini-stat-info">
                <span><span><?= $total['redirections'] ?></span></span>
                <?= __('Redirections') ?>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="mini-stat clearfix">
            <div class="mini-stat-icon green"><i class="fa fa-user"></i></div>
            <div class="mini-stat-info">
                <span><span><?= $total['users'] ?></span></span>
                <?= __('Users') ?>
            </div>
        </div>
    </div>
</div>