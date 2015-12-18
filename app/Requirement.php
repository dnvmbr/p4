<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    protected $table = 'requirements';

    public function getRequirementsForCheckboxes() {
        $requirements = $this->orderBy('requirement_name','ASC')->get();
        $requirementsForCheckboxes = [];
        foreach($requirements as $requirement) {
            $requirementsForCheckboxes[$requirement['id']] = $requirement;
        }
        return $requirementsForCheckboxes;
    }

    public function courses() {
        return $this->belongsToMany('\App\Course');
    }
    public function degrees() {
        return $this->belongsToMany('\App\Requirement');
    }

}
