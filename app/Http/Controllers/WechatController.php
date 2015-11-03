<?php

namespace App\Http\Controllers;

use Overtrue\Wechat\Server;
use Overtrue\Wechat\Message;

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
    return $this->server->serve();
  }
}

