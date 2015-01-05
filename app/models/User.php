<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Laracasts\Commander\Events\EventGenerator;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait, EventGenerator;


	protected $fillable = ['username','name','email','password'];

	protected $remember_token;

	public $errors;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	/**
	 * @return mixed
     */
	public function cites()
	{
		return $this->hasMany('Cite');
	}

	/**
	 * @return mixed
     */
	public function comunicacions()
	{
		return $this->hasMany('Comunicacion');
	}

	/**
	 * @return mixed
     */
	public function consums()
	{
		return $this->hasMany('Consum');
	}

	/**
	 * @return mixed
     */
	public function incidencies()
	{
		return $this->hasMany('Incidencie');
	}

	/**
	 * @return mixed
     */
	public function observacions()
	{
		return $this->hasMany('Observacion');
	}

	/**
	 * @param $password
     */
	public function setPasswordAttribute($password)
	{

		$this->attributes['password'] = Hash::make($password);
	}

	/**
	 * @return mixed
     */
	public function profile()
	{
		return $this->hasOne('Profile');
	}

	/**
	 * @return bool
     */
	public function isCurrent()
	{

		if (Auth::guest()) return false;

		return Auth::user()->id == $this->id;
	
	}

	/**
	 * @return mixed
     */
	public function roles()
	{
		return $this->belongsToMany('Role')->withTimestamps();
	}

	/**
	 * @param $name
	 * @return bool
     */
	public function hasRole($name)
	{
		foreach ($this->roles as $role) {

			if ($role->name == $name) return true;

		}

		return false;
	}

	/**
	 * @param $role
	 * @return mixed
     */
	public function assignRole($role)
	{

		return $this->roles()->attach($role);

	}

	/**
	 * @param $role
	 * @return mixed
     */
	public function removeRole($role)
	{

		return $this->roles()->detach($role);

	}

	/**
	 * @param $query
	 * @param $search
	 * @return mixed
     */
	public function scopeSearch($query, $search)
	{
		return $query->where(function($query) use ($search)
		{
			$query->where('name', 'LIKE', "%$search%")
					->orWhere('contact_name', 'LIKE', "%$search%")
					->orWhere('contact_familyname', 'LIKE', "%$search%");
		});
	}


}
