

$("select").imagepicker();


function saveGallery(galleryID = "new"){
    sendData( base_url + '/dashboard/save_gallery', ({
        ID: galleryID,
        name: $('#name').val(),
        pic_list: JSON.stringify(getPickerValues()),
    }), function(response){
        console.log(response);
    });
}

function getPickerValues() {
    var picker = $("select").data('picker').picker;
    var pic_list = [];
    picker.find(".thumbnail.selected img").each(function(){
        //console.log($(this).val());
        pic_list.push(getFileName($(this).attr('src')));
    });
    return pic_list;
}

function getFileName(fullPath){
    var final;
    fullPath = fullPath.split('/');
    final = fullPath[fullPath.length-1]
    return final;
}