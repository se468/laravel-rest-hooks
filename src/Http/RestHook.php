<?php
namespace se468\RestHooks;

use Illuminate\Database\Eloquent\Model;

class RestHook extends Model
{
    protected $table = 'resthooks';
    public $fillable = ['id', 'url', 'event', 'tenant_id'];

    public function fire($data)
    {
        $client = new Client();

        $response = "";

        try {
            $response = $client->request('POST', $this->url, [
                'json' => $data
            ]);
        } catch (Exception $e) {
            Log::info($e->getMessage());
        }
        return $response;
    }
}
