 <?php

class Article_model_user extends MY_Model
{
    public $table = 'artickle_artickle';
    public $primary_key = 'id';
    public $fillable = array(
        'created_by', 'section_id', 'title', 'main_image', 'article_text', 'article_gallery', 'created_at', 'updated_at', 'deleted_at', 'restored_at', 'publish_date', 'keywords'
    );

    public function __construct()
    {
        parent::__construct();
        
        $this->timestamps = TRUE;
        $this->return_as = 'array';
        $this->soft_deletes = TRUE;
        $this->has_one['article_gallery'] = array('foreign_model'=>'Gallery_model_user','foreign_table'=>'article_gallery','foreign_key'=>'id','local_key'=>'article_gallery');
        $this->has_one['article_section'] = array('foreign_model'=>'Section_model_user','foreign_table'=>'article_section','foreign_key'=>'id','local_key'=>'section_id' );
    }
    
    public function get_published($date = null, $category_id = null){
        if($date == null) $date = date("Y-m-d h:i:sa");
        
        $date = strtotime($date);
        if($category_id == null){
            $articles = $this->as_array()->with_article_section(array('fields' =>'prefix'))->order_by('id', 'DESC')->get_all();
        } else {
            $articles =  $this->as_array()->where('section_id', $category_id)
                ->with_article_section(array('fields' =>'prefix'))->order_by('id', 'DESC')
                ->get_all();
        }
        $final = array();
        
        foreach ($articles as $article){
            $second_date = strtotime($article['publish_date']);
            if ($second_date <= $date){
                $article['segment'] = strtolower(url_title($article['title']));
                if($article['main_image'] == null){
                    $article['main_image'] = 'default.jpg';
                }
                array_push($final, $article);
            }
        }
        return $final;
    }
    
    public function get_single($id, $date=null){
        if($date == null) $date = date("Y-m-d h:i:sa");
        $date = strtotime($date);
        $data = $this->with_article_gallery(array('fields' =>'pic_list'))->
            with_article_section(array('fields' =>'prefix'))
            ->get($id);
        $publish_date = strtotime($data['publish_date']);
        
        if($publish_date <= $date){
            $data['segment'] = strtolower(url_title($data['title']));
            $data['category_segment'] = $data['article_section']['prefix'];
            $data['article_gallery'] = json_decode($data['article_gallery']['pic_list']);
            return $data;
        } else {
            return false;
        }
    }
    
}
 
