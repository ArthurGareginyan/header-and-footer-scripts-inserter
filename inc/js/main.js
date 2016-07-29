/*
 * Head and Footer Scripts Inserter
 * JS functions
 * @since 3.0
 * @agareginyan
 */


(function(){
    "use strict";

    jQuery(document).ready(function($) {

        // Find all textareas on page
        $('textarea').each(function(index, elements) {

            // Change textarea to CodeMirror editor
            var editor = CodeMirror.fromTextArea( elements , {
                                    lineNumbers: true,
                                    firstLineNumber: 1,
                                    matchBrackets: true,
                                    indentUnit: 4,
                                    mode: 'text/html',
                                    styleActiveLine: true
            });

            // Refresh CodeMirror editor after 1 second
            setTimeout(function() {
                    editor.refresh();
            },1);
        });

        // Remove the "successful" message after 3 seconds
        if (".updated") {
            setTimeout(function() {
                   $(".updated").fadeOut();
            }, 3000);
        }
    });

}());