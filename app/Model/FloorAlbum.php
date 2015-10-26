<?php namespace App\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class FloorAlbum extends Model
{
    protected $table = 'floor_album';
    public function insertData($data)
    {
            $data['created_at'] = $data['updated_at'] = date("Y-m-d H:i:s");
           return  $res = $this->insert($data);
    }
    
    public function getAllimagesForAlbum($id)
    {
        return $this->where('floor_album_id', '=', $id)->get();
    }
    
    
    
    
}
?>