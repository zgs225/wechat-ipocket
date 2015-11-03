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
    $this->server->on('event', 'subscribe', function($event) {
      return Message::make('text')->content('感谢您关注');
    });

    return $this->server->serve();
  }
}

