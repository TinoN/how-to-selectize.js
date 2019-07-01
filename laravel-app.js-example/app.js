// For Tagsystem
window.$ = window.jQuery = require('jquery')
require('selectize');
var bootstrap = require('bootstrap-sass');

var tagItems = [];

$( document ).ready(function() {

    $('#tags').selectize({
        plugins: ['remove_button'],
        delimiter: ',',
        persist: true,

        options: tagItems,
        valueField: 'tag',
        labelField: 'tag',
        searchField: 'tag',
        placeholder: 'Write tag here',

        create: function(input) {
            return {
                tag: input
            }
        }

    });

});
