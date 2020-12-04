

// FUNCTIONS FOR COMPONENT:ADD EVENTS

var arrayAssets = [];

function getAssets(model, response) {

    model.attributes.content = response;

    const responseDom = $.parseHTML(response, document, true);
    const canvasHead = editor.Canvas.getDocument().head;

    $(responseDom).each(function(i , el) {

        const src = $(el).attr("src");
        const href = $(el).attr("href");

        if (src && !arrayAssets.includes(src)) {
            const script = document.createElement("script");
            script.src = src;
            script.type = "text/javascript";
            canvasHead.append(script);
            arrayAssets.push(src);
        }

        if (href && !arrayAssets.includes(href)) {
            const link = document.createElement("link");
            link.href = href;
            link.rel = "stylesheet";
            canvasHead.append(link);
            arrayAssets.push(href);
        }

    });
}
