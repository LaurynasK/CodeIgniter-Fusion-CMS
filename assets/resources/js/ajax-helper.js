

function getData(url, callback) {
    $.ajax({
        type: "GET",
        url: url,
        dataType: "json",
        success: callback,
        error: function (request, status, error) {
            console.log(error);
        }
    });
}

function sendData(url, data, callback) {
    $('body').Wload({ text:'Loading' });
    $.ajax({
        type: "POST",
        url: url,
        dataType: "json",
        data: data,
        success: callback,
        error: function (request, status, error){
            console.log(request);
            console.log(error);
            console.log(status);
        }
    });
    $('body').Wload('hide', {time:400});
}