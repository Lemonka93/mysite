<?php

class Sector extends Eloquent {

    protected $fillable = array(
        'name',
        'description',

    );




    public static function getValidationRules() {
        $validation = array(
            'name'     => 'required',
//
        );
        return $validation;
    }

    /**
     * return star
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stars()
    {
        return $this->hasMany('Star');
    }

    /**
     * Return planets
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function planets()
    {
        return $this->hasManyThrough('Planet', 'Star');
    }


}
