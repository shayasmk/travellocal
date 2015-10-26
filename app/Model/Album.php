<?php namespace App\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class Album extends Model
{
    protected $table = 'album';
    
    
    public function insertData($data)
    {
            $data['created_at'] = $data['updated_at'] = date("Y-m-d H:i:s");
           return  $res = $this->insert($data);
    }
    
    public function getAllAlbums()
    {
        return $this->get();
    }
    
    public function getAllAlbumsAlbum()
    {
        return $this->get();
    }
    
    public function getAllAlbumsFloorPlan()
    {
        return $this->where('type', '=', 'floor_plans')->get();
    }
    
    public function getAllAlbumsFloorPlanAsList()
    {
        return $this->where('type', '=', 'floor_plans')->lists('name', 'id');
    }
    
    public function getAllAlbumsProjectStatus()
    {
        return $this->where('type', '=', 'project_status')->get();
    }
    
    public function getAllAlbumProjectStatusList()
    {
        return $this->where('type', '=', 'project_status')->lists('name', 'id');
    }
    
    public function deleteAlbum($id)
    {
        
        DB::beginTransaction();
            try
            {
                $albumImageTable = new AlbumImage();
                $albumImageTable->deleteAlbumImages($id);
                $this->where("id", "=", $id)->delete();
                
                DB::commit();
                
                return 1;
            }
            catch (Exception $e)
            {
                print_r($e);
                DB::rollBack();
                return 0;
            }
            
    }
        
    
    
    
}
    