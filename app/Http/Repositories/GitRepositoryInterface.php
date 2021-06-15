<?php 

namespace App\Http\Repositories;

interface GitRepositoryInterface{
 
	public function getTopRepository($length);
	public function getFilterByLanguageRepository($language,$length);
	public function getFilterByDateRepository($date,$length);

}