<form class="multi-range-field my-5 pb-5">
    <input id="multi" class="multi-range" type="range" />
</form>


<style>
    $('#multi').mdbRange({
    single: {
    active: true,
    multi: {
        active: true,
        rangeLength: 1
    },
    }
    });
</style>
