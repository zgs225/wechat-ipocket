<?php

namespace App\Http\Controllers;

use Overtrue\Wechat\Server;

class WechatController extends Controller
{
  /**
   * @var Overtrue\Wechat\Server
   **/
  protected $server;

  public function __construct(Server $server)
  {
    $this->server = $server;
  }

  public function server()
  {
    return $this->server->server();
  }
}

