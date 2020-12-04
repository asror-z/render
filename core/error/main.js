window.onload = function () {
    var codeBlocks = document.getElementsByTagName('pre'),
        callStackItems = document.getElementsByClassName('call-stack-item');

    // highlight code blocks
    for (var i = 0, imax = codeBlocks.length; i < imax; ++i) {
        hljs.highlightBlock(codeBlocks[i], '    ');
    }

    var refreshCallStackItemCode = function (callStackItem) {
        if (!callStackItem.getElementsByTagName('pre')[0]) {
            return null;
        }
        var top = callStackItem.getElementsByClassName('code-wrap')[0].offsetTop - window.pageYOffset + 3,
            lines = callStackItem.getElementsByTagName('pre')[0].getClientRects(),
            lineNumbers = callStackItem.getElementsByClassName('lines-item'),
            errorLine = callStackItem.getElementsByClassName('error-line')[0],
            hoverLines = callStackItem.getElementsByClassName('hover-line');
        for (var i = 0, imax = lines.length; i < imax; ++i) {
            if (!lineNumbers[i]) {
                continue;
            }
            lineNumbers[i].style.top = parseInt(lines[i].top - top - 252) + 'px';
            hoverLines[i].style.top = parseInt(lines[i].top - top - 285) + 'px';
            hoverLines[i].style.height = parseInt(lines[i].bottom - lines[i].top + 6) + 'px';
            if (parseInt(callStackItem.getAttribute('data-line')) == i) {
                errorLine.style.top = parseInt(lines[i].top - top - 252) + 'px';
                errorLine.style.height = parseInt(lines[i].bottom - lines[i].top + 6) + 'px';
            }
        }
    };

    for (var i = 0, imax = callStackItems.length; i < imax; ++i) {
        refreshCallStackItemCode(callStackItems[i]);

        // toggle code block visibility
        callStackItems[i].getElementsByClassName('element-wrap')[0].addEventListener('click', function (event) {
            if (event.target.nodeName.toLowerCase() === 'a') {
                return null;
            }

            var callStackItem = this.parentNode,
                code = callStackItem.getElementsByClassName('code-wrap')[0];

            if (typeof code !== 'undefined') {
                code.style.display = window.getComputedStyle(code).display == 'block' ? 'none' : 'block';
                refreshCallStackItemCode(callStackItem);
            }
        });
    }

    // handle copy stacktrace action on clipboard button
    document.getElementById('copy-stacktrace').onclick = function (e) {
        e.preventDefault();
        var textarea = document.getElementById('clipboard');
        textarea.focus();
        textarea.select();
        try {
            succeeded = document.execCommand('copy');
        } catch (err) {
            succeeded = false;
        }
        if (succeeded) {
            document.getElementById('copied').style.display = 'block';
        } else {
            // fallback: show textarea if browser does not support copying directly
            textarea.style.top = 0;
        }
    }
};

// Highlight lines that have text in them but still support text selection:
document.onmousedown = function () {
    document.getElementsByTagName('body')[0].classList.add('mousedown');
}
document.onmouseup = function () {
    document.getElementsByTagName('body')[0].classList.remove('mousedown');
}
