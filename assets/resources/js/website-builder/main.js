var editorsArr = {};

var ulItemArr = [];

var uploadPath = 'main/';
var selectedFile = '';
var nonFreshLoad = false;

Dropzone.autoDiscover = false;

$(document).ready(function() {
    if(!nonFreshLoad){
        $( "#tabs" ).tabs();
        nonFreshLoad = true;
    }
   
});

//Jqury keydown events call 
$(document).keydown(function(event) {
    // ctrl + s save call 
    if((event.ctrlKey || event.metaKey) && event.which == 83) {
        event.preventDefault();
        console.log('ctrl + s was pressed');
        filesActionsArea.saveAction();
    }
    
});

