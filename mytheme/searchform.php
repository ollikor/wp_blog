<form 
    role="search" 
    method="get" 
    id="searchform"
    class="searchform" 
    action="<?php echo esc_url( home_url('/') ); ?>" 
 >
    <label>
        <input type="search" class="search-field"
            placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" 
        />
    </label>
    <button type="submit" id="searchsubmit"> 
        <i class="fas fa-search"></i>
    </button>
</form>