  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller_2 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('template');
        $config = [
            'functions' => ['current_url'],
            'paths' => [FCPATH . "modules/main/views"]];
        $this->load->library('twig', $config);
        
        $this->template->set_platform('default-demo/main_platform');
        $this->template->add_menu("default-demo/menu");
        
        $demo_page_css = array(
            "assets/vendors/bootstrap/bootstrap.min.css",
            "modules/assets/src/css/demo-page-style.css",
            "https://fonts.googleapis.com/css?family=Oswald:100,400,300,700",
            "https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,300italic"
            );
        $this->template->set_CSS($demo_page_css);
        
        $demo_page_js = array(
            "assets/vendors/jquery/jquery-3.2.1.min.js",
            "assets/vendors/bootstrap/bootstrap.min.js",
            "modules/assets/src/js/demo-page-main.js",
            "assets/vendors/demo-page/move-top.js",
            "assets/vendors/demo-page/easing.js",
            );
        $this->template->set_JS($demo_page_js);
        
        $this->template->add_footer('default-demo/footer');
    }
    
    public function load_single_page_assets(){
        
        $single_JS = array(
            "modules/assets/src/js/demo-page-main.js",
            "assets/vendors/blueimp-gallery/jquery.blueimp-gallery.min.js"
            );
        $this->template->set_JS($single_JS);
        
        $single_CSS = array(
            "assets/vendors/blueimp-gallery/blueimp-gallery.min.css",
            "modules/assets/src/css/gallery-preview.css",
            );
        $this->template->set_CSS($single_CSS);
        
    }

}
 
 
 
 
