
<form action=" <?= esc_url(home_url('/')); ?> " method="get" class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" name="s" type="search" id="search" value=" <?= get_search_query(); ?>" placeholder="Rechercher" aria-label="Rechercher">
    <button class="btn bg-success text-white my-2 my-sm-0" type="submit">Rechercher</button>
</form>
