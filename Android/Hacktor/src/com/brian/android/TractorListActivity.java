package com.brian.android;

import java.util.ArrayList;

import android.app.Activity;
import android.content.Intent;
import android.graphics.Color;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.view.View.OnClickListener;
import android.view.Window;
import android.widget.AdapterView;
import android.widget.AdapterView.OnItemClickListener;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.ListView;
import android.widget.SimpleAdapter;
import android.widget.TextView;

public class TractorListActivity extends Activity {
	
	ArrayList<String> tractorListIDs;
	ArrayList<String> tractorListNames;

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		requestWindowFeature(Window.FEATURE_NO_TITLE);
		setContentView(R.layout.activity_tractor_list);
		
		/*exerciseList = new ArrayList<ExerciseType>();
		ArrayList<String> exerciseListNames = new ArrayList<String>();
		for (ExerciseType exercise : exerciseList)
			exerciseListNames.add(ExerciseManager.getName(exercise));*/
		
		TextView farmname = (TextView) findViewById(R.id.farmnameview);
		//TODO get the fucking json in here
		farmname.setText("temp farm name bro");
		
		tractorListIDs = new ArrayList<String>();
		//TODO retrieve the motherfucking IDs
		tractorListIDs.add("tractor 1");
		tractorListIDs.add("tractor 2");
		
		tractorListNames = new ArrayList<String>();
		tractorListNames.add("id 1");
		tractorListNames.add("id 2");
		
		ListView tractorSeq = (ListView) this.findViewById(R.id.tractorlistview);
		
        // specify an adapter (see also next example)
		ArrayAdapter<String> adapter = new ArrayAdapter<String>(this, android.R.layout.simple_list_item_1, android.R.id.text1,tractorListIDs);
        //ArrayAdapter<String> subAdapter = new ArrayAdapter<String>(this, android.R.layout.simple_list_item_2, android.R.id.text2,tractorListNames);
		
		/*SimpleAdapter adapter = new SimpleAdapter(this, data,
                android.R.layout.simple_list_item_2,
                new String[] {"title", "subtitle"},
                new int[] {android.R.id.text1,
                           android.R.id.text2});*/
		tractorSeq.setAdapter(adapter);
		//tractorSeq.setAdapter(subAdapter);
		
		tractorSeq.setOnItemClickListener(new OnItemClickListener() {

			@Override
			public void onItemClick(AdapterView<?> parent, View view,
					int position, long id) {
				Intent intent = new Intent(TractorListActivity.this, TractorListActivity.class);
				intent.putExtra("TractorID", tractorListIDs.get(position));
				startActivity(intent);
			}
		});
	}

	@Override
	public boolean onCreateOptionsMenu(Menu menu) {
		// Inflate the menu; this adds items to the action bar if it is present.
		getMenuInflater().inflate(R.menu.tractor_list, menu);
		return true;
	}

	@Override
	public boolean onOptionsItemSelected(MenuItem item) {
		// Handle action bar item clicks here. The action bar will
		// automatically handle clicks on the Home/Up button, so long
		// as you specify a parent activity in AndroidManifest.xml.
		int id = item.getItemId();
		if (id == R.id.action_settings) {
			return true;
		}
		return super.onOptionsItemSelected(item);
	}
}
