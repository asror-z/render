/* The File Icon Library */

/*
	The File Icon Library is an open-souce broswer-rendered icon library
	developed, distributed, and maintained by The Redux Collective. You are free
	to use any or all of the File Icons library in your project, so long as you
	include this notice. This library is currently in ALPHA, use at your own risk!

	The File Icon Library is licensed under The MIT License:

		--------------------------- The MIT License (MIT) ---------------------------
		Copyright (c) 2014 The Redux Collective, LLC.

		Permission is hereby granted, free of charge, to any person obtaining a copy
		of this software and associated documentation files (the "Software"), to deal
		in the Software without restriction, including without limitation the rights
		to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
		copies of the Software, and to permit persons to whom the Software is
		furnished to do so, subject to the following conditions:

		The above copyright notice and this permission notice shall be included in
		all copies or substantial portions of the Software.

		THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
		IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
		FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
		AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
		LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
		OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
		THE SOFTWARE.
		-----------------------------------------------------------------------------
*/

var ﬁ = {};
var fi = ﬁ;
var fileicon = ﬁ;
ﬁ.version = 'a1.0.2';

ﬁ.boot = function(){ ﬁ.boot.done = 1; setTimeout(function(){ﬁ.scan();}, 100); };
ﬁ.boot.done = 0;

(function() {
    if (document.addEventListener) {
        document.addEventListener('DOMContentLoaded', function() { ﬁ.boot(); }, true);
    } else if (µ.doc.all && !window.opera){ // Crude test for IE.
        // Define a "blank" external JavaScript tag.
        document.write('<script type="text/javascript" id="contentloadtag" defer="defer" src="javascript:void(0)"><\/script>');
        var contentloadtag=µ.doc.GEBID("contentloadtag");
        contentloadtag.onreadystatechange = function(){
            if (this.readyState === "complete") {
                ﬁ.boot();
            }
        };
    }
})();

if (document.registerElement) {
    ﬁ.tag = document.registerElement('file-icon');
    ﬁ.regiseter = function(){if (ﬁ.boot.done) {document.body.appendChild(new ﬁ.tag()); console.log('ﬁ registered');} else { setTimeout(function(){ﬁ.regiseter();}, 10); }}; /* register the "file-icon" tag with HTML Parser */
    (function(){ﬁ.regiseter();})();
} else {
    console.log('element register not supported');
}
ﬁ.render = function() {
    /* renders all unrendered file-icon tags */
    var ﬁEles = document.getElementsByTagName('file-icon');
    if (ﬁEles) {
        for(var i=0; i<ﬁEles.length; i++) {
            var isRendered = parseInt(ﬁEles[i].getAttribute('data-rendered'));
            var parentEle = ﬁEles[i].parentNode;

            if ((isRendered === 0 || !isRendered) && parentEle.tagName.toLowerCase() !== 'code') {
                var icon = {};
                icon.type = ﬁEles[i].getAttribute('data-type');
                icon.grid = parseInt(ﬁEles[i].getAttribute('data-grid'));
                icon.size = ﬁEles[i].getAttribute('data-size');
                icon.label = ﬁEles[i].getAttribute('data-label');

                icon.code = ﬁ.render.icon(icon.type, icon.size, icon.label, icon.grid); /* retrieve the icon code for file type */

                if (icon.code !== 0) {
                    ﬁEles[i].innerHTML = icon.code; /* inserts icon code into file-icon tag */
                    ﬁEles[i].setAttribute('data-rendered', '1');
                } else {
                    /* Use the 'unknown' icon if the file type is not defined, do not set the rendered attribute as the file type could be added later */
                    icon.code = ﬁ.render.icon('file unknown', icon.size, '?', icon.grid);
                    ﬁEles[i].innerHTML = icon.code;
                    /* console.log('ﬁ type: "'+icon.type+'" not defined'); */
                }
            }
        }
    }
};
ﬁ.render.icon = function(type, size, label, grid) {
    /* contains basic icon elements */
    if (type) {
        var ic = {};
        ic.typeArray = type.split(' ');
        ic.typeResult = ic.typeArray.splice(0, 1);
        ic.typeResult.push(ic.typeArray.join(' '));
        ic.code = '';

        if (typeof ﬁ.code !== 'undefined' && typeof ﬁ.code[ic.typeResult[0]] !== 'undefined') {
            ic.code += '<div class="Fi_fileIcon '+size+'">';
            if (grid) {
                ic.code += '<div class="layout_grid"><div class="l h1"></div><div class="l h2"></div><div class="l v1"></div><div class="l v2"></div></div>';
            }
            ic.code += '<div class="icon_content '+type+'">';
            ic.code += ﬁ.code[ic.typeResult[0]](ic.typeResult[1], label); /* fetch additional code specific to icon subtype */
            ic.code += '</div>';
            ic.code += '</div>';

            return ic.code;
        } else {
            return 0;
        }
    }
};
ﬁ.scan = function() {
    /* scans document for unrendered file-icon tags, if any are found it runs the render function */
    var ﬁEles = document.getElementsByTagName('file-icon');
    if (ﬁEles) {
        for(var i=0; i<ﬁEles.length; i++) {
            var isRendered = parseInt(ﬁEles[i].getAttribute('data-rendered'));
            if (isRendered === 0 || !isRendered) {
                ﬁ.render();
            } else {
                /* console.log('ﬁ: rendered'); */
            }
        }
    }
};

/* Icon Definitions */
ﬁ.code = {};

/* Adobe Icons */
ﬁ.code.adobe = function(subtype, label) {
    var ic = {};
    ic.code = '';
    /*ic.code += '';*/
    if (typeof subtype !== 'undefined' && typeof ﬁ.code.adobe.label[subtype] !== 'undefined') {
        ic.code += '<div class="icon_label">'+ﬁ.code.adobe.label[subtype]+'</div>';
    } else if (typeof label !== 'undefined' && label !== null) {
        ic.code += '<div class="icon_label">'+label+'</div>';
    } else {
        ic.code += '<div class="icon_label">Adobe</div>';
    }

    return ic.code;
};
ﬁ.code.adobe.label = {'aep':'Ae','ai':'Ai','fla':'Fl','indd':'Id','prproj':'Pr','psd':'Ps'};
/* END Adobe Icons */

/* Archive Icons */
ﬁ.code.archive = function(subtype, label) {
    var ic = {};
    ic.code = '';
    ic.code += '<div class="box"><div class="tl"></div><div class="tr"></div><div class="tpl"></div><div class="tpr"></div><div class="cl"></div><div class="front"><div class="arrow">&#8613;</div><div class="tpc"></div>';
    if (typeof subtype !== 'undefined' && typeof ﬁ.code.archive.label[subtype] !== 'undefined') {
        ic.code += '<div class="icon_label">'+ﬁ.code.archive.label[subtype]+'</div>';
    } else if (typeof label !== 'undefined' && label !== null) {
        ic.code += '<div class="icon_label">'+label+'</div>';
    } else {
        ic.code += '<div class="icon_label">archive</div>';
    }
    ic.code += '</div></div>';
    return ic.code;
};
ﬁ.code.archive.label = {'air':'air','tar':'tar','zip':'zip'};
/* END Archive Icons */

/* Audio Icons */
ﬁ.code.audio = function(subtype, label) {
    var ic = {};
    ic.code = '';
    ic.code += '<div class="r1"></div><div class="t1"></div><div class="c1 circ"><div class="tp1"></div><div class="tp2"></div></div><div class="c2 circ"><div class="tp1"></div><div class="tp2"></div></div><div class="c3 circ"><div class="tp1"></div><div class="tp2"></div></div>';
    if (typeof subtype !== 'undefined' && typeof ﬁ.code.audio.label[subtype] !== 'undefined') {
        ic.code += '<div class="icon_label">'+ﬁ.code.audio.label[subtype]+'</div>';
    } else if (typeof label !== 'undefined' && label !== null) {
        ic.code += '<div class="icon_label">'+label+'</div>';
    } else {
        ic.code += '<div class="icon_label">audio</div>';
    }

    return ic.code;
};
ﬁ.code.audio.label = {'aac':'aac','aif':'aif','aiff':'aiff','alac':'alac','ape':'ape','flac':'flac','m4a':'m4a','mp2':'mp2','mp3':'mp3','mp4':'mp4','mxf':'mxf','ogg':'ogg','omf':'omf','pcm':'pcm','raw':'raw','r3d':'r3d','wav':'wav','webm':'webm'};
/* END Audio Icons */

/* Image Icons */
ﬁ.code.image = function(subtype, label) {
    var ic = {};
    ic.code = '';
    ic.code += '<div class="c1 fill"></div><div class="t1"></div><div class="r1 fill"></div>';
    if (typeof subtype !== 'undefined' && typeof ﬁ.code.image.label[subtype] !== 'undefined') {
        ic.code += '<div class="icon_label">'+ﬁ.code.image.label[subtype]+'</div>';
    } else if (typeof label !== 'undefined' && label !== null) {
        ic.code += '<div class="icon_label">'+label+'</div>';
    } else {
        ic.code += '<div class="icon_label">image</div>';
    }

    return ic.code;
};
ﬁ.code.image.label = {'bmp':'bmp','dcm':'dcm','gif':'gif','iff':'iff','jpf':'jpf','jpg':'jpg','jps':'jps','mpo':'mpo','pbm':'pbm','pcx':'pcx','png':'png','pxr':'pxr','raw':'raw','sct':'sct','tga':'tga','tif':'tif','tiff':'tiff'};
/* END Image Icons */

/* File Icons */
ﬁ.code.file = function(subtype, label) {
    var rootType = '';
    var labelType = '';
    if (typeof subtype !== 'undefined') {
        var stArray = subtype.split(' ');
        if (stArray.length > 1) {
            rootType = stArray[0];
            labelType = stArray[1];
        } else {
            rootType = subtype;
            labelType = null;
        }
        /* console.log(rootType+':'+labelType); */
    } else {
        rootType = subtype;
        labelType = null;
    }

    var ic = {};
    ic.code = '';
    if (typeof subtype !== 'undefined' && typeof ﬁ.code.file[rootType] !== 'undefined' && typeof ﬁ.code.file.inset[rootType] === 'undefined') {
        ic.code += ﬁ.code.file[rootType];
    }
    ic.code += '<div class="file"><div class="s1"></div><div class="r1"></div><div class="r2"></div><div class="t1"></div>';
    if (typeof subtype !== 'undefined' && typeof ﬁ.code.file[rootType] !== 'undefined' && typeof ﬁ.code.file.inset[rootType] !== 'undefined') {
        ic.code += ﬁ.code.file[rootType];
    }

    if (typeof ﬁ.code.file.label[rootType] === 'undefined' || ﬁ.code.file.label[rootType] !== 0) {
        if (typeof subtype !== 'undefined' && typeof ﬁ.code.file.label[rootType] !== 'undefined') {
            if (typeof ﬁ.code.file.label[rootType] == 'object') {
                if (typeof ﬁ.code.file.label[rootType][labelType] !== 'undefined') {
                    ic.code += '<div class="icon_label">'+ﬁ.code.file.label[rootType][labelType]+'</div>';
                } else {
                    ic.code += '<div class="icon_label">'+ﬁ.code.file.label[rootType][rootType]+'</div>';
                }
            } else {
                ic.code += '<div class="icon_label">'+ﬁ.code.file.label[rootType]+'</div>';
            }
        } else if (typeof label !== 'undefined' && label !== null) {
            ic.code += '<div class="icon_label">'+label+'</div>';
        } else {
            ic.code += '<div class="icon_label">file</div>';
        }
    }
    ic.code += '</div>';

    return ic.code;
};
ﬁ.code.file.label = {'cad':{'3ds':'3ds','cad':'cad','cel':'cel','dfwx':'dfwx','dgn':'dgn','dwf':'dwf','dwg':'dwg','dxf':'dxf','mdl':'mdl','mdx':'mdx','off':'off','ply':'ply','prc':'prc','skp':'skp','stl':'stl','vwx':'vwx'},'docx':'W','keynote':'keynote','numbers':'numbers','pages':0,'pdf':'pdf','pptx':'P','qlab':'QLab','torrent':'torrent','vector':{'drw':'drw','dxf':'dxf','eps':'eps','pat':'pat','svg':'svg','vector':'vector','vsd':'vsd'},'xlsx':'E'}; /* defualt label */
ﬁ.code.file.inset = {'pages':1}; /* inset icon content within layout of base icon */
ﬁ.code.file.cad = '<div class="face top"></div><div class="face right"></div><div class="face left"></div>';
ﬁ.code.file.keynote = '<div class="ico_bx"><div class="c1"></div><div class="r1"></div><div class="r2"><div class="p1"></div><div class="p2"></div></div></div>';
ﬁ.code.file.numbers = '<div class="g1"><div class="r1"></div><div class="r2"></div><div class="r3"></div></div>';
ﬁ.code.file.pages = '<div class="pgh1">pages</div><div class="pgh2"></div><div class="tb1">`Twas brillig, and the slithy toves did gyre and gimble in the wabe:<div class="pic1"></div> all mimsy were the borogoves, and the mome raths outgrabe. &ldquo;Beware the Jabberwock, my son! The jaws that bite, the claws that catch! Beware the Jubjub bird, and shun the frumious Bandersnatch!&rdquo;</div>';
ﬁ.code.file.qlab = '<div class="q1"><div class="q2"></div><div class="qt1"></div></div>';
ﬁ.code.file.torrent = '<div class="c0"><div class="l c1"></div><div class="l c2"></div><div class="l c3"></div><div class="l c4"></div></div>';
ﬁ.code.file.vector = '<div class="v1"><div class="c1 l"></div><div class="c2 l"></div><div class="h1 l"></div></div>';
/* END File Icons */

/* Folder Icon */
ﬁ.code.folder = function() {
    var ic = {};
    ic.code = '<div class="tab"><div class="t1"></div></div><div class="back"><div class="paper"></div><div class="cover"></div></div>';
    return ic.code;
};
/* END Folder Icon */

/* DMG Icon */
ﬁ.code.dmg = function(subtype, label) {
    var ic = {};
    ic.code = '';
    ic.code += '<div class="s1 s"></div><div class="s2 s"></div><div class="s3 s"></div><div class="s4 s"></div><div class="r1"></div><div class="c1"><div class="t1"></div><div class="c2"><div class="shine"></div><div class="c3"></div></div></div><div class="top">';
    if (typeof subtype !== 'undefined' && typeof ﬁ.code.dmg.label[subtype] !== 'undefined') {
        ic.code += '<div class="icon_label">'+ﬁ.code.dmg.label[subtype]+'</div>';
    } else if (typeof label !== 'undefined' && label !== null) {
        ic.code += '<div class="icon_label">'+label+'</div>';
    } else {
        ic.code += '<div class="icon_label">dmg</div>';
    }
    ic.code += '</div>';
    return ic.code;
};
ﬁ.code.dmg.label = {'dmg':'dmg','iso':'iso'};
/* END DMG Icon */

/* Video Icons */
ﬁ.code.video = function(subtype, label) {
    var ic = {};
    ic.code = '';
    ic.code += '<div class="file"><div class="leftEdge"></div><div class="rightEdge"></div><div class="bottomEdge"></div><div class="topEdge"></div><div class="middle"></div><div class="c1 cutout left"></div><div class="f1 fill left"></div><div class="c2 cutout left"></div><div class="f2 fill left"></div><div class="c3 cutout left"></div><div class="f3 fill left"></div><div class="c4 cutout left"></div><div class="f4 fill left"></div><div class="c5 cutout left"></div><div class="f5 fill left"></div><div class="c6 cutout left"></div><div class="f6 fill left"></div><div class="c7 cutout left"></div><div class="c1 cutout right"></div><div class="f1 fill right"></div><div class="c2 cutout right"></div><div class="f2 fill right"></div><div class="c3 cutout right"></div><div class="f3 fill right"></div><div class="c4 cutout right"></div><div class="f4 fill right"></div><div class="c5 cutout right"></div><div class="f5 fill right"></div><div class="c6 cutout right"></div><div class="f6 fill right"></div><div class="c7 cutout right"></div></div>';
    if (typeof subtype !== 'undefined' && typeof ﬁ.code.video.label[subtype] !== 'undefined') {
        ic.code += '<div class="icon_label">'+ﬁ.code.video.label[subtype]+'</div>';
    } else if (typeof label !== 'undefined' && label !== null) {
        ic.code += '<div class="icon_label">'+label+'</div>';
    } else {
        ic.code += '<div class="icon_label">video</div>';
    }
    return ic.code;
};
ﬁ.code.video.label = {'avi':'avi','flv':'flv','m4v':'m4v','mkv':'mkv','mov':'mov','mp4':'mp4','mts':'mts','ogg':'ogg','webm':'webm','wmv':'wmv','veg':'veg','vf':'vf'};
/* END Video Icons */

/* END Icon Definitions */

/* END The File Icon Library */
