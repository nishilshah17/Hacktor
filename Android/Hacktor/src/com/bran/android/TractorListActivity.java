package com.bran.android;

import java.util.ArrayList;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import com.bran.android.R;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.view.Window;
import android.widget.AdapterView;
import android.widget.AdapterView.OnItemClickListener;
import android.widget.ArrayAdapter;
import android.widget.ListView;
import android.widget.ProgressBar;
import android.widget.TextView;

public class TractorListActivity extends Activity implements SenderInterface {
	
	private static final String serverURL = "http://ramvellanki.com/jd/php/";
	private static final String script = "get_john_deere_data.php";
	
	TextView farmname;
	
	ArrayList<String> tractorListIDs;
	ArrayList<String> tractorListNames;

	ListView tractorSeq;
	
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		requestWindowFeature(Window.FEATURE_NO_TITLE);
		setContentView(R.layout.activity_tractor_list);
		
		farmname = (TextView) findViewById(R.id.farmnameview);

		Sender sender = new Sender(serverURL);
		sender.sendJSON(this, null, script, ConnectionType.INIT);
		
		tractorListIDs = new ArrayList<String>();
		
		tractorListNames = new ArrayList<String>();

		tractorSeq = (ListView) this.findViewById(R.id.tractorlistview);

	}

	@Override
	public void receiveResponse(String response, ConnectionType type) {
		
		if (type.equals(ConnectionType.INIT)) {
			
			((ProgressBar) findViewById(R.id.progressBar)).setVisibility(View.INVISIBLE);
			
			try {
				
				JSONObject json = new JSONObject(response);				
				json = (JSONObject) json.get("jd_data");
				json = (JSONObject) json.get("clients");
				JSONArray jsonArray = (JSONArray) json.get("values");
				farmname.setText((String) ((JSONObject) jsonArray.get(0)).get("name"));
			
				json = new JSONObject(response);
				json = (JSONObject) json.get("jd_data");
				json = (JSONObject) json.get("machines");
				jsonArray = (JSONArray) json.get("values");
				for (int i = 0; i < jsonArray.length(); i++) {
					json = (JSONObject) jsonArray.get(i);
					tractorListNames.add((String) json.get("name"));
					tractorListIDs.add((String) json.get("id"));
				}
				
			} catch (JSONException e) {
				e.printStackTrace();
			}
			
			ArrayAdapter<String> adapter = new ArrayAdapter<String>(this, android.R.layout.simple_list_item_1, android.R.id.text1,tractorListNames);
			tractorSeq.setAdapter(adapter);
			
			tractorSeq.setOnItemClickListener(new OnItemClickListener() {

				@Override
				public void onItemClick(AdapterView<?> parent, View view,
						int position, long id) {
					Intent intent = new Intent(TractorListActivity.this, TractorInfoActivity.class);
					intent.putExtra("TractorID", tractorListIDs.get(position));
					startActivity(intent);
				}
			});
			
		}
		
	}
	
}
