  <?php
 
class Section_model_user extends MY_Model
{
    public $table = 'article_section';
    public $primary_key = 'id';
    public $fillable = array(
        'name',  'prefix', 'created_by', 'created_at', 'updated_at', 'deleted_at', 'restored_at'
    );

    public function __construct()
    {
        parent::__construct();
        
        $this->timestamps = TRUE;
        $this->return_as = 'array';
        $this->soft_deletes = TRUE;
        
    }
    
    public function get_section($prefix){
        return $this->as_array()->where('prefix', $prefix)->get();
    }
}
 
