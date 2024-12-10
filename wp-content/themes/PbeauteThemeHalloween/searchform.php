<form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
    <div class="input-group">
        <input type="search" class="search-field form-control" placeholder="Recherche…" value="<?php echo get_search_query(); ?>" name="s" />
        <button type="submit" class="search-submit">
            <i class="bi bi-search"></i>
        </button>
    </div>
</form>