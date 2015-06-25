<?php
class Temp  extends Eloquent {
        public $table = 'temps';
protected $guarded = array('id');
public $timestamps = false;
protected $fillable = array('proj_name');

public function project()
{
return $this->belongsTo('Project');
}
}
