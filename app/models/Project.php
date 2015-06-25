<?php
class Project extends Eloquent{
	public $table = 'projects';
        protected $guarded = array('id');
protected $fillable = array('proj_name','proj_location');
public $timestamps = false;
public function state()
{
return $this->belongsTo('State');
}
}
