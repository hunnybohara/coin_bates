<?php 
if($isEdit && is_int($index)){
    $from_year          = $this->request->data['PlanCommissionRate']['from_year'];
    $to_year            = $this->request->data['PlanCommissionRate']['to_year'];
    $first_year         = $this->request->data['PlanCommissionRate']['first_year'];
    $second_thired_year = $this->request->data['PlanCommissionRate']['second_thired_year'];
    $sub_year           = $this->request->data['PlanCommissionRate']['sub_year'];
    $bonus              = $this->request->data['PlanCommissionRate']['bonus'];
}else{
    $from_year          = '';
    $to_year            = '';
    $first_year         = '';
    $second_thired_year = '';
    $sub_year           = '';
    $bonus              = '';    
}
?>
<div class="row form-group commission-row">
    <div class="col-lg-10 col-lg-offset-1">
        <div class="row">
            <div class="col-lg-2">
                <?php 
                    echo $this->form->text('PlanCommissionRate.from_year.',array(
                        'class' => 'form-control',
                        'id'    => "PlanCommissionRateFromYear_{$index}",
                        'value' => $from_year,
                    ))
                ?>
            </div>
            <div class="col-lg-2">
                <?php 
                    echo $this->form->text('PlanCommissionRate.to_year.',array(
                        'class' => 'form-control',
                        'id'    => "PlanCommissionRateToYear_{$index}",    
                        'value' => $to_year,
                    ))
                ?>
            </div>
            <div class="col-lg-2">
                <?php 
                    echo $this->form->text('PlanCommissionRate.first_year.',array(
                        'class' => 'form-control',
                        'id'    => "PlanCommissionRateFirstYear_{$index}",
                        'value' => $first_year,
                    ))
                ?>
            </div>
            <div class="col-lg-2">
                <?php 
                    echo $this->form->text('PlanCommissionRate.second_thired_year.',array(
                        'class' => 'form-control',
                        'id'    => "PlanCommissionRateSecondThiredYear_{$index}",
                        'value' => $second_thired_year,
                    ))
                ?>
            </div>
            <div class="col-lg-2">
                <?php 
                    echo $this->form->text('PlanCommissionRate.sub_year.',array(
                        'class' => 'form-control',
                        'id'    => "PlanCommissionRateSubYear_{$index}",
                        'value' => $sub_year,
                    ))
                ?>
            </div>
            <div class="col-lg-2">
                <?php 
                    echo $this->form->text('PlanCommissionRate.bonus.',array(
                        'class' => 'form-control',
                        'id'    => "PlanCommissionRateBonus_{$index}",
                        'value' => $bonus,
                    ))
                ?>
            </div>
        </div>
    </div>
    <div class="col-lg-1 control-label commission-row-btn">
        <a href="javascript:;" class="add-btn btn-minus"><i class="fa fa-minus"></i></a>
        <a href="javascript:;" class="add-btn btn-plus"><i class="fa fa-plus"></i></a>
    </div>
    <div class="clearfix"></div>
</div>