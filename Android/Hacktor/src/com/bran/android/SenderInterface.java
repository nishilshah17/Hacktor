package com.bran.android;

//Enables Activities to Receive Responses from Http Requests by the Sender
public interface SenderInterface {
 public void receiveResponse(String response, ConnectionType type);
}
