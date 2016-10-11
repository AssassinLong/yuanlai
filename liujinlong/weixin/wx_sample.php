<?php
/**
  * wechat php test
  */

//define your token
define("TOKEN", "weixin444");
$wechatObj = new wechatCallbackapiTest();
$wechatObj->valid();

class wechatCallbackapiTest
{
	public function valid()
    {
        $echoStr = $_GET["echostr"];

        //valid signature , option
        if($this->checkSignature()){
        	echo $echoStr;
            $this->responseMsg();
        	exit;
        }
    }

    public function responseMsg()
    {
		//get post data, May be due to the different environments
		$postStr = $GLOBALS["HTTP_RAW_POST_DATA"];

      	//extract post data
		if (!empty($postStr)){
                /* libxml_disable_entity_loader is to prevent XML eXternal Entity Injection,
                   the best way is to check the validity of xml by yourself */
                libxml_disable_entity_loader(true);
              	$postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
                $fromUsername = $postObj->FromUserName;
                $toUsername = $postObj->ToUserName;
                $keyword = trim($postObj->Content);
                $msgType=$postObj->MsgType;
                $time = time();
                $textTpl = "<xml>
							<ToUserName><![CDATA[%s]]></ToUserName>
							<FromUserName><![CDATA[%s]]></FromUserName>
							<CreateTime>%s</CreateTime>
							<MsgType><![CDATA[%s]]></MsgType>
							<Content><![CDATA[%s]]></Content>
							<FuncFlag>0</FuncFlag>
							</xml>";
            /*if ($msgType=='text'){
                $contentStr = "您发送的是文本类型";
                $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType,                                $contentStr);
                echo $resultStr;
            }else */if(!empty( $keyword ))
                {
                    if($keyword=="img"){
                    $imgTpl ="<xml>
                    <ToUserName><![CDATA[%s]]></ToUserName>
                    <FromUserName><![CDATA[%s]]></FromUserName>
                    <CreateTime>%s</CreateTime>
                    <MsgType><![CDATA[%s]]></MsgType>
                    <Image>
                    <MediaId><![CDATA[%s]]></MediaId>
                    </Image>
                    </xml>";
                        $msgType = "image";
                        $mediaId='qS7GKu_Mhkpt0y7-BEcTR_B2FrpuBZXFTZqCcszOOll9z8PWmBSaoYo7VpVBQlmc';
                        $resultStr = sprintf($imgTpl, $fromUsername, $toUsername, $time, $msgType,                                $mediaId);
                        echo $resultStr;
                    }else if($keyword=="hei"){
                        $imgTpl ="<xml>
                    <ToUserName><![CDATA[%s]]></ToUserName>
                    <FromUserName><![CDATA[%s]]></FromUserName>
                    <CreateTime>%s</CreateTime>
                    <MsgType><![CDATA[%s]]></MsgType>
                    <Content><![CDATA[$keyword]]></Content>
                    <MsgId><![CDATA[%s]]></MsgId>
                    </xml>";
                        $msgType = "text";
                        $mediaId='o74BVwTjZ4Rrg3LSATxbvbiopXx0';
                        $resultStr = sprintf($imgTpl, $fromUsername, $toUsername, $time, $msgType,                                $mediaId);
                        echo $resultStr;
                    }else{
                        $msgType = "text";
                        $contentStr = "阁下何不乘风起,随风直上九万里";
                        $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType,                                $contentStr);
                        echo $resultStr;
                    }
                }else{
                	echo "Input something...";
                }

        }else {
        	echo "";
        	exit;
        }
    }
		
	private function checkSignature()
	{
        // you must define TOKEN by yourself
        if (!defined("TOKEN")) {
            throw new Exception('TOKEN is not defined!');
        }
        
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];
        		
		$token = TOKEN;
		$tmpArr = array($token, $timestamp, $nonce);
        // use SORT_STRING rule
		sort($tmpArr, SORT_STRING);
		$tmpStr = implode( $tmpArr );
		$tmpStr = sha1( $tmpStr );
		//return true;
		if( $tmpStr == $signature ){
			return true;
		}else{
			return false;
		}
	}
}

?>