

function deleteArticle(articleID, action){
    sendData( base_url + '/dashboard/' + action, ({articleID: articleID}), function(response){
        console.log(response);
        $( "#" + articleID ).fadeOut( "slow", function() {
        
        });
    });
}

function articleActions(articleID, action, mode = "none"){
    sendData( base_url + '/dashboard/' + action, ({articleID: articleID, mode: mode}), function(response){
        console.log(response);
        $( "#" + articleID ).fadeOut( "slow", function() {
        
        });
    });
}

function saveArticleSection(sectionID, mode = "none"){
    sendData( base_url + '/dashboard/save_section', ({
        ID: sectionID, 
        mode: mode,
        section_name: $('#name').val(),
        prefix: $('#prefix').val(),
    }), function(response){
        console.log(response);
    });
}

function saveGalery(galeryID, mode = "none"){
    sendData( base_url + '/dashboard/save_gallery', ({
        ID: galleryID,
        mode: mode,
        //call functions from immage picker...
    }), function(response){
        console.log(response);
    });
}

function saveArticle(articleID, mode = "none"){
    sendData( base_url + '/dashboard/save_article', ({
        ID: articleID, 
        mode: mode,
        section: $("#article-section option:selected").attr('id'),
        article_text: tinymce.activeEditor.getContent(), 
        gallery: $("#article-gallery option:selected").attr('id'),
        full_gallery: $("#article-gallery option:selected").attr('data'),
        section_id: $("input[name=section_id]").val(), 
        id: $("input[name=id]").val(),
        article_title: $('#title').val(),
        article_keywords: JSON.stringify(tags),
        publish_date: $('#publishDate').val(),
    }), function(response){
        console.log(response);
    });
}

