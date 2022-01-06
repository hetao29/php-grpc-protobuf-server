<?php
namespace Test\Helloworld;
class A{}
class Greeter{
	/**
	 */
	public function SayHello(HelloRequest $request) : HelloReply{
		$reply = new HelloReply();
		$reply->setMessage("Hello, ".$request->getName()."!");
		return $reply;
	}
	public function NoOp(PBEmpty $argument){
		$reply = new PBEmpty();
		return $reply;
	}
	public function EchoAbort(HelloRequest $request){
		$reply = new HelloReply();
		$reply->setMessage("Hello, ".$request->getName()."!");
		return $reply;
	}
	public function ServerStreamingEcho(ServerStreamingEchoRequest $request){
		$reply = new ServerStreamingEchoResponse();
		$reply->setMessage("Hello, ".$request->getMessage().",".$request->getMessageCount()."!");
		return $reply;
	}
}
