<?php namespace App\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class ProjectFloorPlans extends Model
{
    protected $table = 'project_floor_plans';
    
    public function insertData($data, $projectID)
    {
        $floor = array();
        $floor['created_at'] = $floor['updated_at'] = date("Y-m-d H:i:s");
        foreach($data AS $key => $value)
        {
            $floor['image'] = $value['image'];
            $floor['image_title'] = $value['image_title'];;
            $floor['project_id'] = $projectID;
            $res = $this->insert($floor);
        }
        return 1;
    }
    
    public function deleteData($id)
    {
        return $this->where("id","=",$id)
                    ->delete();
    }
    
    public function selectCurrentProjectFloorPlans($projectID)
    {
        return $this->where("project_id", "=", $projectID)->get();
    }
    
}