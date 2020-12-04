


    <form action="{route}" method="get">
    <div class="input-group">
        <span class="hint--bottom" aria-label="Поиск">
        <input type="search"  id="searchbar" name="q" class="rounded-0 form-control search-bar" placeholder="Поиск" aria-label="Searchbar">
        </span>
        <div class=" input-group-append  bg-transparent">
            <button type="submit" class="rounded-0 input-group-text bg-transparent"><i class="green-text fa fa-search"></i></button>
        </div>
    </div>
    </form>


<script type="application/javascript">
    var searchBar = $('#searchbar.form-control');
    var elX = searchBar.parent().next('div').find('button');
    function setOnCss(){
        searchBar.css({'border-color': '#10b410'});
        elX.css({'border-color': '#10b410'});
    }
    function setOffCss(){
        searchBar.css({'border-color': '#ced4da'})
        elX.css({'border-color': '#ced4da'})
    }

    searchBar.on('click', function () {
        setOnCss();
    })
    searchBar.keydown(function () {
        setOnCss();
    })
    function clearOut() {
           setOffCss();
    }
    elX.on('click', clearOut);
</script>

