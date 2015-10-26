<?php namespace App\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class Projects extends Model
{
    protected $table = 'projects';
    
    public function insertData($data, $floor, $status)
    {
        
        DB::beginTransaction();
            try
            {
                $data['created_at'] = $data['updated_at'] = date("Y-m-d H:i:s");
                $projectID = $this->insertGetId($data);
                if(count($floor)>0)
                {
                    $projectFloorPlansTable = new ProjectFloorPlans();
                    $projectFloorPlansTable->insertData($floor, $projectID);
                }
                if(count($status)>0)
                {
                    $projectStatusTable = new ProjectStatus();
                    $projectStatusTable->insertData($status, $projectID);
                }
                
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
    
    public function updateData($data, $floor,$status, $id)
    {
        DB::beginTransaction();
            try
            {
                
                $data['updated_at'] = date("Y-m-d H:i:s");
                $res = $this->where("id","=",$id)->update($data);
                if(count($floor)>0)
                {
                    $projectFloorPlansTable = new ProjectFloorPlans();
                    $projectFloorPlansTable->insertData($floor, $id);
                }
                if(count($status)>0)
                {
                    $projectStatusTable = new ProjectStatus();
                    $projectStatusTable->insertData($status, $id);
                }
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
    
    public function getAllAlbums()
    {
        return $this->get();
    }
    
    public function getAllProject()
    {
        return $this->get();
    }
    
    public function getOngoingProjects()
    {
        return $this->where('project_status', '=', 'ongoing')->get();
    }
    
    public function getReadyToOccupyProjects()
    {
        return $this->where('project_status', '=', 'ready_to_occupy')->get();
    }
    
    public function getCompletedProjects()
    {
        return $this->where('project_status', '=', 'completed')->get();
    }
    
    public function deleteData($id)
    {
        return $this->where('id', '=', $id)->delete();
    }
    
    public function selectCurrentProjectDet($id)
    {
        return $this->leftJoin('project_floor_plans', 'projects.id', '=', 'project_floor_plans.project_id')
                    ->where('projects.id', '=', $id)
                    ->select('projects.*','project_floor_plans.image AS floor_plan_image', 'project_floor_plans.id AS floor_id')
                    ->get();
    }
    
    
}
    