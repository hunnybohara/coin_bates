var RS;
jQuery(document).ready(function(){
    
    
    
    jQuery(".sel2").select2({
        'width' : '100%',
    });
    
    jQuery('.panel .tools .fa.gl-toogle').click(function () {
        var el = jQuery(this).parents(".panel").children(".panel-body");
        if (jQuery(this).hasClass("fa-chevron-down")) {
            jQuery(this).removeClass("fa-chevron-down").addClass("fa-chevron-up");
            el.slideUp(200);
        } else {
            jQuery(this).removeClass("fa-chevron-up").addClass("fa-chevron-down");
            el.slideDown(200); 
        }
    });
    
    /*jQuery('.datepicker').datepicker({
        format: 'mm-dd-yyyy'
    });*/
    
    /**
     * Sidebar JS 
     */
    jQuery('#nav-accordion').dcAccordion({
        eventType: 'click',
        autoClose: true,
        saveState: true,
        disableLink: true,
        speed: 'slow',
        showCount: false,
        autoExpand: true,
        classExpand: 'dcjq-current-parent'
    });
    
    
    jQuery('.square input,.icheck input').iCheck({
        checkboxClass   : 'icheckbox_square',
        radioClass      : 'iradio_square',
        increaseArea    : '10%' // optional
    });
    
    // Generalize Ajax Call for fetching the States 
    jQuery('body').delegate('.country_sel','change',function(){
        if(jQuery(this).val().length == 0)
            return ;
        
        $this       = jQuery(this);
        stateSel    = $this.closest('.location-selection-ct').find('.state_sel');
        
        jQuery.ajax({
            url         : GEOLIC.URL.getStates,
            data        : {country_id:jQuery(this).val()},
            dataType    : 'json',
            beforeSend  : function(){
                // Show Loading Image
            },
            complete    : function(){
                // Hide Loading Image
            },
            success     : function(response){
                stateSel.empty(); 
                if(response.status == 'error'){
                    return '';
                }
                stateSel.append('<option value=""></option>');
                jQuery.each(response.data,function(key,value){
                    html = "<option value=\""  + key + "\">" + value + "</option>";
                    stateSel.append(html);
                });
            }
        });
    });
    
    // Generalize Ajax Call for fetching the States 
    jQuery('body').delegate('.state_sel','change',function(){
        if(jQuery(this).val().length == 0)
            return ;
        
        $this       = jQuery(this);
        citySel     = $this.closest('.location-selection-ct').find('.city_sel');
        
        jQuery.ajax({
            url         : GEOLIC.URL.getCities,
            data        : {state_id:jQuery(this).val()},
            dataType    : 'json',
            beforeSend  : function(){
                // Show Loading Image
            },
            complete    : function(){
                // Hide Loading Image
            },
            success     : function(response){
                citySel.empty(); 
                if(response.status == 'error'){
                    return '';
                }
                citySel.append('<option value=""></option>');
                jQuery.each(response.data,function(key,value){
                    html = "<option value=\""  + key + "\">" + value + "</option>";
                    citySel.append(html);
                });
                
            }
        });
    });
    
    // Generalize Ajax Call for fetching the Areas 
    jQuery('body').delegate('.city_sel','change',function(){
        if(jQuery(this).val().length == 0)
            return ;
        
        $this       = jQuery(this);
        areaSel     = $this.closest('.location-selection-ct').find('.area_sel');
        
        if(typeof areaSel === 'undefined')
            return ;
        
        jQuery.ajax({
            url         : GEOLIC.URL.getAreas,
            data        : {city_id:jQuery(this).val()},
            dataType    : 'json',
            beforeSend  : function(){
                // Show Loading Image
            },
            complete    : function(){
                // Hide Loading Image
            },
            success     : function(response){
                areaSel.empty(); 
                if(response.status == 'error'){
                    return '';
                }
                areaSel.append('<option value=""></option>');
                jQuery.each(response.data,function(key,value){
                    html = "<option value=\""  + key + "\">" + value + "</option>";
                    areaSel.append(html);
                });
                
            }
        });
    });
});