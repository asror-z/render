$('selector').elfinder({
    // options ...
    handlers : {
        select : function(event, elfinderInstance) {
            console.log(event.data);
            console.log(event.data.selected); // selected files hashes list
        },
        init: function(event, elfinderInstance) {
            console.log(event.data);
            console.log(event.data.initialized);
        },

        load:  function(event, elfinderInstance) {
            console.log(event.data);
            console.log(event.data.loaded);
        },
        api : function(event, elfinderInstance) {
            console.log(event.data);

        },
        enable : function(event, elfinderInstance) {
            console.log(event.data);
            console.log(event.data.enabled);
        },
        disable : function(event, elfinderInstance) {
            console.log(event.data);
            console.log(event.data.disabled);
        },
        open : function(event, elfinderInstance) {
            console.log(event.data);
            console.log(event.data.opened);
        },
        dblclick : function(event, elfinderInstance) {
            console.log(event.data);
            console.log(event.data.dblclicked);
        },
        add : function(event, elfinderInstance) {
            console.log(event.data);
            console.log(event.data.added);
        },
        remove : function(event, elfinderInstance) {
            console.log(event.data);
            console.log(event.data.removed);
        },
        change : function(event, elfinderInstance) {
            console.log(event.data);
            console.log(event.data.changed);
        },
        upload : function(event, elfinderInstance) {
            console.log(event.data);
            console.log(event.data.uploaded);
        },
        sync : function(event, elfinderInstance) {
            console.log(event.data);
            console.log(event.data.reloaded);
        },
        changeclipboard : function(event, elfinderInstance) {
            console.log(event.data);
            console.log(event.data.copied);
        },
        paste : function(event, elfinderInstance) {
            console.log(event.data);
            console.log(event.data.pasted);
        },
        rename : function(event, elfinderInstance) {
            console.log(event.data);
            console.log(event.data.renamed);
        },
        duplicate : function(event, elfinderInstance) {
            console.log(event.data);
            console.log(event.data.duplicated);
        },
        download : function(event, elfinderInstance) {
            console.log(event.data);
            console.log(event.data.downloaded);
        },
        get : function(event, elfinderInstance) {
            console.log(event.data);
            console.log(event.data.got);
        },
        resize : function(event, elfinderInstance) {
            console.log(event.data);
            console.log(event.data.resized);
        },
        archive : function(event, elfinderInstance) {
            console.log(event.data);
            console.log(event.data.archived);
        },
        extract : function(event, elfinderInstance) {
            console.log(event.data);
            console.log(event.data.extracted);
        },
        contextmenu : function(event, elfinderInstance) {
            console.log(event.data);
            console.log(event.data.loaded);
        },
        hover : function(event, elfinderInstance) {
            console.log(event.data);
            console.log(event.data);
        },
        viewchange : function(event, elfinderInstance) {
            console.log(event.data);
            console.log(event.data.viewchanged);
        },
        sortchange : function(event, elfinderInstance) {
            console.log(event.data);
            console.log(event.data.sortchanged);
        },
        searchstart : function(event, elfinderInstance) {
            console.log(event.data);
            console.log(event.data.searchstarted);
        },
        search : function(event, elfinderInstance) {
            console.log(event.data);
            console.log(event.data.searched);
        },
        searchend : function(event, elfinderInstance) {
            console.log(event.data);
            console.log(event.data.searchended);
        },
        destroy : function(event, elfinderInstance) {
            console.log(event.data);
            console.log(event.data.destroyed);
        },
}
});
