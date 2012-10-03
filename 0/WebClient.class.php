<?php
/**
 * WebSocketUser Class
 */
class WebClient {

    public $id = null;

    public $socket = null;

    public $do_handshake = false;//�Ƿ��Ѿ��������Э��

    public $ip = null;

    public $lastAction = null;

    public $data = array();

    public function __construct(&$socket) {
        $this->id = uniqid();
        $this->socket = $socket;

        socket_getpeername($socket, $ip);
        $this->ip = $ip;
    }
}