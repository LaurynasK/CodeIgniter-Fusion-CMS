var filesActionsArea = (function () {
    
    //cache DOM
    //new file dialog 
    var $newFileButton = $('#new-file');
    
    var $newFileDialog = $("#new-file-dialog");
    var $buttonCreate = $('#create-new-file');
    
    //delete file dialog 
    var $deleteFileButton = $('#delete');
    
    var $deleteFileDialog = $("#delete-file-dialog");
    var $deleteFileActionButton = $('#delete-file');

    //make directory
    var $mkDirButton = $('#mk-dir');
    
    var $makeDirectoryDialog = $("#make-dir-dialog");
    var $makeDirectoryActionButton = $('#create-directory');
    
    //remove directory
    var $rmDirButton = $('#rm-dir');
    
    var $removeDirectoryDialog = $("#rm-dir-dialog");
    var $removeDirActionButton = $('#delete-directory');
    
    //upload file
    var $uploadButton = $('#upload-file');
    
    var $uploadDialog = $("#upload-file-dialog");
    //var $uploadDivElement = $("");
    
    //save file
    var $saveButton = $('#save');
    
    //reload file tree
    var $reloadButton = $('#reload');
    
    //rename file 
    var $renameButton = $("#rename-file");
    
    var $renameDialog = $("#rename-file-dialog");
    
    //bind events
    //new file
    $newFileButton.on("click", function(){
        
        var dialogTemplate = webBuilderHelpers.renderMustache($newFileDialog, '#newFileDialog');
        
        $newFileDialog.dialog();
        if($buttonCreate.length == 0){
            
            $newFileDialog.append(dialogTemplate);
            $buttonCreate = $('#create-new-file');
            $buttonCreate.on('click', function(){
                var newFileLocation = $newFileDialog.find('input[name="location"]').val();
                newFile(newFileLocation);
                
                webBuilderHelpers.reloadFancytree($("#file-map"));
                
                if ($('#openCheckbox').is(":checked")){
                    openAfterCreate(newFileLocation);        
                }
                
            });
        }
    });
    
    //delete file
    $deleteFileButton.on('click', function(){
        selectedFile = "";
        $deleteFileDialog.dialog();
        if($deleteFileActionButton.length == 0){
            
            var dialogTemplate = webBuilderHelpers.renderMustache($deleteFileDialog, '#deleteFileDialog');
            
            $deleteFileDialog.append(dialogTemplate);
            $deleteFileActionButton = $("#delete-file");
            $deleteFileActionButton.on('click', function(){
                var deleteFileLocation = $deleteFileDialog.find('input[name="del-location"]').val();
                var deleteFileID = '';
                var deleteArr = deleteFileLocation.split(' ');
                var arrayLength = deleteArr.length;
                
                for (var i=1; i<arrayLength; i++) {
                    delFile(deleteArr[i]);
                    deleteFileID = webBuilderHelpers.getFileIDFromLocation(deleteArr[i]);
                    if (deleteFileID in editorsArr){
                        webBuilderHelpers.closeTabAfterDeltete(deleteFileID);
                    }
                }
    
                webBuilderHelpers.reloadFancytree($("#file-map"));
            });
            
        }
    });
    
    //make directory
    $mkDirButton.on('click', function() {
        $makeDirectoryDialog.dialog();
        if($makeDirectoryActionButton.length == 0){
            
            var dialogTemplate = webBuilderHelpers.renderMustache($makeDirectoryDialog, '#makeDirDialog');
            
            $makeDirectoryDialog.append(dialogTemplate);
            $makeDirectoryActionButton = $('#create-directory');
            $makeDirectoryActionButton.on('click', function(){
                var mkDirLocation = $makeDirectoryDialog.find('input[name="mk-dir-location"]').val();
                mkDir(mkDirLocation);
                webBuilderHelpers.reloadFancytree($("#file-map"));
            });
        }
    });
    
    //remove directory
    $rmDirButton.on('click', function(){
        $removeDirectoryDialog.dialog();
        if($removeDirActionButton.length == 0){
            
            var dialogTemplate = webBuilderHelpers.renderMustache($removeDirectoryDialog, '#removeDirDialog');
            
            $removeDirectoryDialog.append(dialogTemplate);
            $removeDirActionButton = $('#delete-directory');
            $removeDirActionButton.on('click', function(){
                var rmDirLocation = $removeDirectoryDialog.find('input[name="rm-dir-location"]').val();
                delDir(rmDirLocation);
                webBuilderHelpers.reloadFancytree($("#file-map"));
            });
        }
    });
    
    //upload file
    $uploadButton.on('click', function(){
        $uploadDialog.dialog();
        $uploadDialog.removeClass('hidden');
        
        var file= new Dropzone(".dropzone",{
            url: 'upload/post',
    		maxFilesize: 4096,  
    		method:"post",
    		paramName:"userfile",
    		uploadMultiple: true,
    		complete: function() {
                console.log("All files have been uploaded to " + uploadPath);
                webBuilderHelpers.reloadFancytree($("#file-map"));
            },
        });
        
        file.on('sending', function(file, xhr, formData){
            formData.append('location', uploadPath);
        });
        
        file.on("success", function(file, responseText) {
            console.log(responseText);
        });
        
    });
    
    //save
    $saveButton.on('click', function(){
        saveAction();
    });
    // this function is here because and keyboard event calling that.
    function saveAction() {
        var activeTab = eval("editorsArr." + $("#tabs .ui-tabs-panel:visible").attr("id"));
        var content = activeTab[1].getSession().getValue();
        var location = activeTab[0];
        
        saveFile(location, content);
    }
    
    //reload file tree
    $reloadButton.on('click', function(){
        webBuilderHelpers.reloadFancytree($("#file-map"));
    });
    
    //rename file 
    $renameButton.on('click', function(){
        $renameDialog.dialog();
        $renameDialog.removeClass('hidden');
    });
    
    function newFile(newFileLocation = null, template = true) {
        
        if(newFileLocation == null){
            return 'cant get location ' + newFileLocation;
        } 
        
        if(template){
            var templateFile = getTemplateFileName(newFileLocation);
        }
        sendData('create_file', ({template: templateFile, location: newFileLocation}), function (response) {
            console.log(response);
            return response;
        });
            
    }
    
    function delFile(delFileLocation = null) {
        if(delFileLocation == null){
            return 'cant get location ' + delFileLocation;
        }
        sendData('delete_file', ({location: delFileLocation}), function (response) {
            console.log(response);
            return response;
        });
    }
    
    function mkDir(dirLocation = null) {
        if(dirLocation == null){
            return 'cant get location ' + dirLocation;
        }
        sendData('create_foder', ({location: dirLocation}), function (response) {
            console.log(response);
            return response;
        });
    }
    
    function delDir(dirLocation = null) {
        if(dirLocation == null){
            return 'cant get location ' + dirLocation
        }
        sendData('delete_folder', {location: dirLocation}, function (response) {
            console.log(response);
            return response;
        });
        
    } 
    
    function saveFile(location, content, return_request = "true") {
        sendData('save', ({location: location, content: content, return_request: return_request}), function(response){
            console.log(response);
            return response;
        });
    }
    
    function openAfterCreate(newFileLocation){
        var fileTitle = webBuilderHelpers.getFileTitleFromLocation(newFileLocation);
        tabsArea.openTab(fileTitle, newFileLocation);
    }
    
    //todo move this to helper functions and add extra in template 
    function getTemplateFileName(newFileLocation) {
        newFileLocation = newFileLocation.toString().toLowerCase();
        var templateFile = "template_";
        templateFile += webBuilderHelpers.searchInString(newFileRole, newFileLocation);
        templateFile += ".";
        templateFile += webBuilderHelpers.searchInString(newFileFormats, newFileLocation);
        
        return templateFile;
    }
    
    return {
        newFile: newFile,
        delFile: delFile,
        mkDir: mkDir,
        delDir: delDir,
        saveFile: saveFile,
        
        saveAction: saveAction
    };
    
})();