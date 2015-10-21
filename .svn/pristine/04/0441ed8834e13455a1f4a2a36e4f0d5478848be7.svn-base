<?php
if(count($breadcrumbs) == 0)
    return ;
?>
<div class="row">
    <div class="col-lg-12">
        <!--breadcrumbs start -->
        <ul class="breadcrumb">
            <?php
            foreach($breadcrumbs as $breadcrumb){
                $link = (isset($breadcrumb['link']))?$this->Url->build($breadcrumb['link']):NULL;
                if(is_null($link)){
                    ?>
                    <li class="current"><?php echo $breadcrumb['label']; ?></li>
                    <?php
                }else{
                    ?>
                    <li>
                        <a href="<?php echo $link; ?>">
                            <?php
                                if(isset($breadcrumb['class'])){
                                    echo "<i class='{$breadcrumb['class']}'></i>";
                                }
                            ?>
                            <?php echo $breadcrumb['label']; ?>
                        </a>
                    </li>
                    <?php
                }
            }
            ?>
        </ul>
        <!--breadcrumbs end -->
    </div>
</div>