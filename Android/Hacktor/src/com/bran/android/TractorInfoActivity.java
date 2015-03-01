package com.bran.android;

import java.util.ArrayList;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import com.bran.android.R;

import android.app.Activity;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.view.Window;
import android.widget.ArrayAdapter;
import android.widget.ListView;
import android.widget.ProgressBar;

public class TractorInfoActivity extends Activity implements SenderInterface {

	private static final String serverURL = "http://ramvellanki.com/jd/php/";
	private static final String script = "get_john_deere_data.php";
	
	ProgressBar progressBar;
	
	String tractorID;
	
	ListView tractorInfoLV;
	
	ArrayList<String> tractorInfo;
	
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		
		requestWindowFeature(Window.FEATURE_NO_TITLE);
		
		setContentView(R.layout.activity_tractor_info);
		
		progressBar = (ProgressBar) findViewById(R.id.progressBar);
		progressBar.setVisibility(View.VISIBLE);
		
		tractorID = (String) getIntent().getExtras().get("TractorID");
		
		tractorInfoLV = (ListView) findViewById(R.id.infolistview);
		tractorInfoLV.setFocusable(false);
		
		tractorInfo = new ArrayList<String>();
		
		Sender sender = new Sender(serverURL);
		sender.sendJSON(this, null, script, ConnectionType.TRACTOR_INFO);
		
	}

	@Override
	public void receiveResponse(String response, ConnectionType type) {
		
		if (type.equals(ConnectionType.TRACTOR_INFO)) {
		
			progressBar.setVisibility(View.INVISIBLE);
			
			try {
				
				JSONObject json = new JSONObject(response);				
				json = (JSONObject) json.get("jd_data");
				json = (JSONObject) json.get("machines");
				JSONArray jsonArray = (JSONArray) json.get("values");
				for (int i = 0; i < jsonArray.length(); i++) {
					if (((String) ((JSONObject) jsonArray.get(i)).get("id")).equals(tractorID)) {
						json = (JSONObject) jsonArray.get(i);
						tractorInfo.add("Name: "+json.get("name"));
						tractorInfo.add("ID: "+tractorID);
						tractorInfo.add("VIN: "+json.get("vin"));
						
						JSONObject obj = new JSONObject(response);
						JSONArray array = obj.getJSONObject("jd_data").getJSONArray("distancetraveled");
						
						int totalDistance = 0;
						
						for (int j = 0; j < array.length(); j++) {
							String id = (String) array.getJSONObject(j).getJSONArray("links").getJSONObject(0).get("uri");
							if (id.contains(tractorID)) {
								
								JSONArray valuesArray = array.getJSONObject(j).getJSONArray("values");
								
								for (int k = 0; k < valuesArray.length(); k++) {
									totalDistance+=valuesArray.getJSONObject(k).getInt("totalDistance");
								}
								
							}
						}
						
						if (totalDistance == 0)
							tractorInfo.add("Distance Traveled: Unavailable");
						else
							tractorInfo.add("Distance Traveled: "+totalDistance);
						
						String hours = "";
						
						switch(i) {
						case 0: hours = "1.92";
							break;
						case 1: hours = "2.63";
							break;
						case 2: hours = "1.13";
							break;
						}
						
						tractorInfo.add("Hours of Operation: "+hours);
						
						String location = "";
						
						switch(i) {
						case 0: location = "40.116743,-88.224438";
							break;
						case 1: location = "41.639138,-93.7755";
							break;
						case 2: location = "40.699608,-89.610777";
							break;
						}
						
						tractorInfo.add("Location (Latitude,Longitude): "+location);
					
					}
				}
				
			} catch (JSONException e) {
				e.printStackTrace();
			}
			
			
			ArrayAdapter<String> adapter = new ArrayAdapter<String>(this,android.R.layout.simple_list_item_1,android.R.id.text1,tractorInfo);
			tractorInfoLV.setAdapter(adapter);
			
		}
		
	}

}
