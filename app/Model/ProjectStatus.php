<?php namespace App\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class ProjectStatus extends Model
{
    protected $table = 'project_status';
    
    public function insertData($data, $projectID)
    {
        $status = array();
        $status['created_at'] = $status['updated_at'] = date("Y-m-d H:i:s");
        foreach($data AS $key => $value)
        {
            
            $status['image'] = $value['image'];
            $status['image_title'] = $value['image_title'];
            $status['project_id'] = $projectID;
            $res = $this->insert($status);
        }
        return 1;
    }
    
    public function selectCurrentProjectStatusImages($projectID)
    {
        return $this->where("project_id", "=", $projectID)->get();
    }
    
    public function deleteData($id)
    {
        return $this->where("id","=",$id)
                    ->delete();
    }
}



