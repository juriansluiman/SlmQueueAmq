<?php

namespace SlmQueueAmq\Service;

interface StompClientInterface
{
    public function connect($username = '', $password = '');
    public function isConnected();
    public function send($destination, $message, $properties = [], $sync = null);
    public function subscribe($destination, $properties = [], $sync = null);
    public function unsubscribe($destination, $properties = [], $sync = null);
    public function begin($transactionId = null, $sync = null);
    public function commit($commit = null, $sync = null);
    public function abort($transactionId = null, $sync = null);
    public function ack($message, $transactionId = null);
    public function disconnect();
    public function readFrame();
    public function hasFrameToRead();
}