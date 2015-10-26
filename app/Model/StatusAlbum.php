<?php namespace App\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class StatusAlbum extends Model
{
    protected $table = 'status_album';
    public function insertData($data)
    {
            $data['created_at'] = $data['updated_at'] = date("Y-m-d H:i:s");
           return  $res = $this->insert($data);
    }
    public function getAllimagesForAlbum($id)
    {
        return $this->where('status_album_id', '=', $id)->get();
    }
}
?>