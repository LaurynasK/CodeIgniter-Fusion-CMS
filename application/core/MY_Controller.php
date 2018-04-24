<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        
        $this->load->library('template');
        $this->load->library('ion_auth');
        
        if ($this->ion_auth->logged_in()){
            $user['user_info'] = $this->ion_auth->user()->row_array(); 
        } else {
            $user = null;
        }
        
        $this->template->set_platform('themes/default_back_end/main_platform');
        $this->template->add_menu("themes/default_back_end/main_menu", $user, false);
        
        $main_css = array(
           "assets/vendors/bootstrap/bootstrap.min.css",
            "assets/vendors/font-awesome/css/font-awesome.min.css",
            "assets/vendors/wload/jquery.Wload.css",
            
            "assets/resources/css/default-theme/sb-admin.css",
            );
        $this->template->set_CSS($main_css);
        
        $main_js = array(
            "assets/vendors/jquery/jquery-3.2.1.min.js",
            "assets/vendors/bootstrap/bootstrap.min.js",
            "assets/vendors/wload/jquery.Wload.js",
            "assets/resources/js/ajax-helper.js",
            
            );
        $this->template->set_JS($main_js);

        $this->template->add_footer('themes/default_back_end/footer', null, false);
    }
    
    public function load_webbuilder_assets(){
        $wb_css_arr = array(
            "assets/resources/css/ace-editor-custom/editor.css",
            "assets/vendors/jquery/jquery-ui.min.css",
            "assets/vendors/fancytree/skin-lion/ui.fancytree.min.css",
            "assets/vendors/dropzone/dropzone.min.css"
            );
        $this->template->set_CSS($wb_css_arr);
        
        $wb_js_arr = array(
            "assets/vendors/ace/ace.js",
            "assets/vendors/jquery/jquery-ui.min.js",
            "assets/vendors/fancytree/jquery.fancytree-all-deps.min.js",
            "assets/vendors/mustache/mustache.min.js",
            "assets/vendors/dropzone/dropzone.min.js",
            "assets/resources/js/website-builder/webbuilder-helpers.js",
            "assets/resources/js/website-builder/webbuilder-dynamic-elements.js",
            "assets/resources/js/website-builder/main.js",
            "assets/resources/js/website-builder/fileTtreeArea.js",
            "assets/resources/js/website-builder/tabsArea.js",
            "assets/resources/js/website-builder/filesActionsArea.js",
            );
        $this->template->set_JS($wb_js_arr);
    }
    
    public function load_media_assets(){
        $noscripts = array("noscripts" => 
                array(base_url("assets/vendors/css/jquery-files-upload/jquery.fileupload-noscript.css"),
                      base_url("assets/vendors/css/jquery-files-upload/jquery.fileupload-ui-noscript.css")
                    )
                );
        $this->template->set_area('noscript', "themes/default_back_end/media/area_noscript", $noscripts, false);
        
        $media_css_arr = array(
            "assets/vendors/jquery-files-upload/css/style.css",
            "assets/vendors/blueimp-gallery/blueimp-gallery.min.css"
        );
        $this->template->set_CSS($media_css_arr);
        
        $media_js_arr = array(
            "assets/vendors/jquery-files-upload/js/vendor/jquery.ui.widget.js",
            "assets/vendors/tmpl/tmpl.min.js",
            "assets/vendors/JavaScript-Load-Image/load-image.all.min.js",
            "assets/vendors/JavaScript-Canvas-to-Blob/canvas-to-blob.min.js",
            "assets/vendors/blueimp-gallery/jquery.blueimp-gallery.min.js",
            "assets/vendors/jquery-files-upload/js/jquery.iframe-transport.js",
            "assets/vendors/jquery-files-upload/js/jquery.fileupload.js",
            "assets/vendors/jquery-files-upload/js/jquery.fileupload-process.js",
            "assets/vendors/jquery-files-upload/js/jquery.fileupload-image.js",
            "assets/vendors/jquery-files-upload/js/jquery.fileupload-audio.js",
            "assets/vendors/jquery-files-upload/js/jquery.fileupload-validate.js",
            "assets/vendors/jquery-files-upload/js/jquery.fileupload-ui.js",
            
            "assets/resources/js/media/main.js"
        );
        $this->template->set_JS($media_js_arr);
    }
    
    public function load_article_edit_assets(){
        
        $blog_js_arr = array(
            "assets/vendors/tiny-mce/tinymce.min.js",
            "assets/vendors/tagify/jQuery.tagify.min.js",
            "assets/vendors/datepicker/datepicker.min.js",
            "assets/resources/js/blog/article-edit-create-caller.js",
            "assets/resources/js/blog/article-helper.js"
            );
        $this->template->set_JS($blog_js_arr);
        
        $blog_css_arr = array(
            "assets/vendors/datepicker/datepicker.min.css",
            "assets/vendors/tagify/tagify.css"
            );
        $this->template->set_CSS($blog_css_arr);

    }
    
    public function load_section_edit_assets(){
        $this->template->set_JS("assets/resources/js/blog/article-helper.js");
    }

    public function load_gallery_assets(){
        $gallery_js = array(
            "assets/vendors/image-picker/image-picker.min.js",
            "assets/resources/js/blog/article-gallery-picker.js"
            );
        $this->template->set_JS($gallery_js);
        $this->template->set_CSS("assets/vendors/image-picker/image-picker.css");
    }
}