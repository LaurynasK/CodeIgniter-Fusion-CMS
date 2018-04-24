

function JsArrayCleanerByItemName(arr, name) {
    for (var i = 0; i < arr.length; i++) {
        if (arr[i] == name) {
            arr.splice(i, 1);
            break;
        }
    }
}

$( "#publishDate" ).datepicker({
  format: 'yyyy-mm-dd',
  startDate: 'today',
  autoHide: true,
  date: publishDate,
});

//$("#article-section option[id='" + sectionID + "']").attr("selected", "selected");

tinymce.init({
  selector: '#text-container',
  height: 500,
  theme: 'modern',
  plugins: 'autoresize print preview searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools contextmenu colorpicker textpattern help',
  toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]
});

$('#keywords').tagify()
    .on('add', function(e, tagName){
        //console.log(tagName.value);
        tags.push(tagName.value);
    })
    .on('remove', function(e, tagName){
        //console.log(tagName.value);
        JsArrayCleanerByItemName(tags, tagName.value)
    })

$("#article-section option[id='" + sectionID + "']").attr("selected", "selected");
$("#article-gallery option[id='" + galleryID + "']").attr("selected", "selected");