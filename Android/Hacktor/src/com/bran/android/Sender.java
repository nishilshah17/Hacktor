package com.bran.android;

import android.os.AsyncTask;

import org.apache.http.HttpResponse;
import org.apache.http.client.HttpClient;
import org.apache.http.client.methods.HttpPost;
import org.apache.http.entity.StringEntity;
import org.apache.http.impl.client.DefaultHttpClient;
import org.apache.http.message.BasicHeader;
import org.apache.http.params.HttpConnectionParams;
import org.apache.http.protocol.HTTP;
import org.json.JSONObject;

import java.io.IOException;
import java.io.InputStream;

// Facilitates Internet Communication
public class Sender {

    private SenderInterface gcm;

    // Internet Connection Information
    private String server;
    private String url;
    private JSONObject json;
    private ConnectionType type;
    
    private SenderTask senderTask;

    public Sender(String server) {

    	// Initialize Server Path
        this.server = server;

    }

    // Sends JSON Data to Specified Destination
    public void sendJSON(SenderInterface gcm, JSONObject json, String destination, ConnectionType type) {

        this.gcm = gcm;
        
        this.json = json;
        if (json == null)
        	this.json = new JSONObject();
        
        this.url = server+destination;
        this.type = type;

        senderTask = new SenderTask();
        senderTask.execute((Void) null);

    }

    // Asynchronous Task to Connect to Internet in Background
    public class SenderTask extends AsyncTask<Void, Void, String> {

        @Override
        protected String doInBackground(Void... params) {

            HttpClient client = new DefaultHttpClient();
            HttpConnectionParams.setConnectionTimeout(client.getParams(), 10000);
            HttpResponse response;
            try {
                HttpPost post = new HttpPost(url);
                post.setHeader("json", json.toString());
                StringEntity se = new StringEntity(json.toString());
                se.setContentEncoding(new BasicHeader(HTTP.CONTENT_TYPE,"application/json"));
                post.setEntity(se);
                response = client.execute(post);
                
                InputStream in = null;
                
                if (response != null)
                	in = response.getEntity().getContent();
                
                return JSONParser.convertStreamToString(in);

            } catch (Exception e) {
                e.printStackTrace();
            }

            return null;

        }

        @Override
        protected void onPostExecute(final String response) {
            
        	gcm.receiveResponse(response,type);
        	
        	senderTask = null;
            
        }

        @Override
        protected void onCancelled() {
            senderTask = null;
        }

    }

}