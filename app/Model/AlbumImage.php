<?php namespace App\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class AlbumImage extends Model
{
    protected $table = 'album_image';
    
    public function insertData($data)
    {
            $data['created_at'] = $data['updated_at'] = date("Y-m-d H:i:s");
           return  $res = $this->insert($data);
    }
    
    public function getAllAlbums()
    {
        return $this->get();
    }
    
    public function getAllimagesForAlbum($id)
    {
        return $this->where('album_id', '=', $id)->get();
    }
    
    public function getAllImages()
    {
        return $this->get();
    }
    
    public function deleteAlbumImages($id)
    {
        return $this->where('album_id', '=', $id)->delete();
    }
    
    public function deleteData($id)
    {
        return $this->where('id', '=', $id)->delete();
    }
    
//    public function getAllImagesForAlbum($id)
//    {
//        return $this->where('album_id', '=', $id)->get();
//    }
    
}
    