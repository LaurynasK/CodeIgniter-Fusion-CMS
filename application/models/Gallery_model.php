<?php

class Gallery_model extends MY_Model
{
    public $table = 'article_gallery';
    public $primary_key = 'id';
    public $fillable = array(
        'name',  'pic_list', 'created_by', 'created_at', 'updated_at', 'deleted_at', 'restored_at'
    );

    public function __construct()
    {
        parent::__construct();
        
        $this->timestamps = TRUE;
        $this->return_as = 'array';
        $this->soft_deletes = TRUE;
        
        $this->has_many['articles'] = array('foreign_model'=>'Article_model','foreign_table'=>'artickle_artickle','foreign_key'=>'article_gallery','local_key'=>'id');

    }
}