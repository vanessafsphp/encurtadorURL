<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $table = 'links';

    protected $fillable = ['url', 'code'];

    /*public function queryLink(string $url, string $columns = "*"): ?Link
    {
        $find = $this->find("url = :url", "url={$url}", $columns);
        return $find->fetch();
    }*/
}
