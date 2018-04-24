var webBuilderHelpers = {
    
    getTitleModified: function (title) {
        var titleElements = title.split(".");
        return titleElements.join("");
    },

    getFileLang: function (title){
        var titleElements = title.split(".");
        return titleElements[titleElements.length-1];
    },
    
    callAce: function (element_id, language = 'html', theme = 'monokai', debugging = false){
        var editor = ace.edit(element_id);
        editor.setTheme("ace/theme/" + theme);
        editor.getSession().setMode("ace/mode/" + language);
    
        if(debugging){
            console.log(editor.getValue());
        }
    
        return editor;
    },
    
    decodeEntities: function (text){
        return $('<textarea/>').html(text).text();
    },
    
    getFileTitleFromLocation: function (fileLocation){
        var final = fileLocation.split("/");
        return final[final.length-1];
    },
    
    searchInString: function (array, string){
        for(var i in array){
            if(string.search(array[i]) != -1){
                return array[i];
            }
        }
        return "";
    },
    
    renderMustache: function (where, templateID, data = {}){
        var templateCall = where.find(templateID).html();
        return Mustache.render(templateCall, data);
    },
    
    closeTabAfterDeltete: function(fileLocation){
        var FileID = this.getFileIDFromLocation(fileLocation);
        
        if (FileID in editorsArr) {
            tabsArea.closeTab(FileID);
        }
    },
    
    getFileIDFromLocation: function (fileLocation) {
        var final = fileLocation.split("/");
        final = final[final.length-1].split(".");
        return final.join("");
    },
    
    reloadFancytree: function (fileMaptreeId) {
        var fileTree = fileMaptreeId.fancytree('getTree');
        fileTree.reload({
            url: "get_inside_menu",
            type: 'GET',
            dataType: "json"
        });
    },
    
    
};