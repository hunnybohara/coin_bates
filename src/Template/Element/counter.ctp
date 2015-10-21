<div class="count-down-main-container">
    <div class="count-down-wrapper">
        <div class="main-title-count">Wednesday is coming!</div>
        <div class="small-title-count">Countdown</div>
        <div class="count-down-watch">
            <div class="clock" style="margin:2em;"></div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<?php $this->append('script'); ?>
<script type="text/javascript">
jQuery().ready(function(){
    var currentDate = new Date();  
    var futureDate  = new Date(currentDate.getFullYear() + 1, 0, 1);
    //var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000;
    var cur_day = currentDate.getDay();
    if(cur_day < 4)
    {
        var nxtwednesday = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate() - currentDate.getDay()+3);
        var diff = nxtwednesday.getTime() / 1000 - currentDate.getTime() / 1000;
    }    
    else
    {
        var nxtwednesday = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate() - currentDate.getDay()+10);
        var diff = nxtwednesday.getTime() / 1000 - currentDate.getTime() / 1000;
    }   
    clock = jQuery('.clock').FlipClock(diff, {
        clockFace: 'DailyCounter',
        countdown: true,
        showSeconds: false
    });
});
</script>
<?php $this->end(); ?>