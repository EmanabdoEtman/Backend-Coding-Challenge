<?php 
namespace App\Http\Repositories;

use GuzzleHttp\Client as GuzzleClient;
use App\Http\Resources\GetDataResource;

class GitRepository implements GitRepositoryInterface
{
    protected $client;

	public function __construct(GuzzleClient $client)
	{
        $this->client = $client;
    }

    private function fetchDataApi($data){
        return GetDataResource::collection(
            json_decode($data->getBody()->getContents())
            ->items
        );
    }
 
    public function getTopRepository($length)
    {
        return $this->fetchDataApi($this->client->request('GET', '?q=stars:>1&sort=stars&per_page='.$length));
    }

    public function getFilterByLanguageRepository($language,$length)
    {
        return $this->fetchDataApi($this->client->request('GET', '?q=language:'.$language.'&sort=stars&order=desc&per_page='.$length));
    }
    
    public function getFilterByDateRepository($date,$length)
    {
        return $this->fetchDataApi($this->client->request('GET', '?q=created:'.$date.'&sort=stars&order=desc&per_page='.$length));
    }

}