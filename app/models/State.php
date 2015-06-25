<?php
class State extends Eloquent{
        public $table = 'states';
        protected $guarded = array('id');
protected $fillable = array('state_name');
public $timestamps = false;
public function projects()
{
return $this->hasMany('Project');
}
}

