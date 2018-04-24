var tabsArea = (function () {
        
    var $tabsUl = $("div#tabs ul");
    var $tabs = $("div#tabs");
    var $closeIcon = ".ui-icon-circle-close";
    
    var tabLiTemplate = $tabsUl.find('#tab-Li-Template').html();
    var tabDivTemplate = $tabs.find('#tab-Div-Template').html();
    
    $(document).on("click", $closeIcon , function(){
        var panelId = $(this).closest( "li" ).attr("aria-controls");
        closeTab(panelId);
    });
    
    function openTab(title, filePath) {
        var titleModified = webBuilderHelpers.getTitleModified(title);
        var fileLang = webBuilderHelpers.getFileLang(title);
        
        sendData('get_file_content', ({location: filePath}), function (response) {
            if(jQuery.inArray(titleModified, ulItemArr) == -1) {
                var decodedFile = webBuilderHelpers.decodeEntities(response['file']);
                
                $tabsUl.append(Mustache.render(tabLiTemplate, {titleModified: titleModified, title: title}));
                $tabs.append(Mustache.render(tabDivTemplate, {titleModified: titleModified, fileContent: decodedFile}));
                
                if(nonFreshLoad){
                    $tabs.tabs("refresh");
                }
                
                $("div#"+titleModified).css(tabCSS);
        
                callCodeEditor(titleModified, filePath, fileLang);
    
                addToTabsList(titleModified);
            }else{
                console.log(title + ' is already opened');
            }
        });
    }
    
    function closeTab(tabID) {
        $('.ui-tabs-nav li:has(a[href="#' + tabID +'"])').remove();
        $( "#" + tabID  ).remove();
        
        //console.log("tabID >> " + tabID);
        tabID = String(tabID);
        
        if(tabID in editorsArr){
            delete editorsArr[tabID];
        }
        
        $tabs.tabs("refresh");
    
        delteFromTabsList(tabID);
    }
    
    function addToTabsList(tabName){
        ulItemArr.push(tabName);
    }
    
    function callCodeEditor(title, filePath, fileLang, theme = 'monokai'){
        var session = webBuilderHelpers.callAce(title, fileLang, theme, false);
        editorsArr[title] = [filePath , session];
    }
    
    function delteFromTabsList(tabName){
        if(jQuery.inArray(tabName, ulItemArr) != -1) {
            ulItemArr.splice(jQuery.inArray(tabName, ulItemArr), 1);
        }
    }
    
    return {
        openTab: openTab,
        closeTab: closeTab
    };
})();