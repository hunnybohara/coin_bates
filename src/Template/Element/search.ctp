<div class="search-container-main">                
    <div class="search-container-wrapper">
        <form class="search-home" action="<?php echo $this->Url->build(["controller" => "Search", "action" => "result"]);?>">
            <label>Search</label>
            <div class="search-input-main-container">
                <input type="text" name='q' class="search-input-main"/>
                <div class="search-btn-absol">
                    <input type="submit" name="submit" value="submit" class="search-btn-home"/>
                    <!-- <a href="<?php //echo $this->Url->build(["controller" => "Search", "action" => "result"]);?>"><span class='search-lbl-atoz'>A-Z</span></a> -->
                    <input type="submit" name="submit" value="A-Z" class="atozsearch"/>
                </div>                                
            </div>
            <div class="clearfix"></div>
        </form>
    </div>                
</div>