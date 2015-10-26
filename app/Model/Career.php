<?php namespace App\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class Career extends Model
{
    protected $table = 'careers';
    
   
    
    public function insertData($data)
    {
            $data['created_at'] = $data['updated_at'] = date("Y-m-d H:i:s");
           return  $res = $this->insert($data);
    }
    
   
    public function getAllCareers()
    {
        return $this->orderBy('id','desc')->get();
    }
    
    
    
}
    