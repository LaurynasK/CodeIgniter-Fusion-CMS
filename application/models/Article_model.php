<?php

class Article_model extends MY_Model
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
        $this->has_one['article_gallery'] = array('foreign_model'=>'Gallery_model','foreign_table'=>'article_gallery','foreign_key'=>'id','local_key'=>'article_gallery');
        $this->has_one['article_section'] = array('foreign_model'=>'Section_model','foreign_table'=>'article_section','foreign_key'=>'id','local_key'=>'section_id' );
    }
    
}