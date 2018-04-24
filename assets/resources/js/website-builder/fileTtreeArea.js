var fileTtreeArea = (function () {
    var $el = $("#file-map");
    initFileMap();
    
    initFileRename();
    
    initFileMapDoubleClick();
    initFileMapSingleClick();
    
    
    
    function initFileMap () {
        $el.fancytree({
            extensions: ["edit"],
            source: $.ajax({
                url: "get_inside_menu",
                dataType: "json"
            }),
            
        });
    }
    
    function initFileMapDoubleClick () {
        $el.fancytree({
            dblclick: function(event, data){
                var path = getPath(data); 
                var title = data.node.title;
                
                if(data.node.children == null){
                    tabsArea.openTab(title, path);
                }
            }
        });
    }
    
    function initFileMapSingleClick() {
        $el.fancytree({
            focus: function(event, data) {
                if(data.node.folder){
                    uploadPath = getPath(data);
                    $("#uploadPath").text(uploadPath);
                    $("#new-file-dialog").find('input[name="location"]').val(uploadPath);
                    $("#make-dir-dialog").find('input[name="mk-dir-location"]').val(uploadPath);
                    $("#rm-dir-dialog").find('input[name="rm-dir-location"]').val(uploadPath);
                } else {
                    if(!selectedFile.includes(getPath(data))){
                        selectedFile = selectedFile + " " + getPath(data);
                    }
                    $("#delete-file-dialog").find('input[name="del-location"]').val(selectedFile);
                }
            }
        });
        
    }
    
    function initFileRename () {
        var locationBefore;
        var locationAfter;
        
        $el.fancytree({
            edit: {
              triggerStart: ["clickActive", "shift+click"],
              beforeEdit: function(event, data){},
              edit: function(event, data){
                locationBefore = getPath(data);
              },
              beforeClose: function(event, data){},
              save: function(event, data){
                var locationAfter = locationBefore.replace(data.node.title, data.input.val());

                renameFile(locationBefore, locationAfter);
              },
              close: function(event, data){}
            }
        });
    }
    
    function renameFile(locationBefore, locationAfter){
        sendData('rename_file', ({locationBefore: locationBefore, locationAfter: locationAfter}), function (response) {
            console.log(response);
            return response;
        });
    }
    
    function getPath(data){
        var tempData = data.node;
        var filePath = '';
        
        while(tempData.parent.title !== "root"){
            filePath = tempData.parent.title + filePath;
            tempData = tempData.parent;
        }
        
        filePath = filePath + data.node.title;
        //console.log(filePath);
        return filePath;
    }
})();