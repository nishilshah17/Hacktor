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
import android.widget.AdapterView;
import android.widget.AdapterView.OnItemClickListener;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.ListView;

public class TractorListActivity extends Activity {

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_tractor_list);
		
		/*exerciseList = new ArrayList<ExerciseType>();
		ArrayList<String> exerciseListNames = new ArrayList<String>();
		for (ExerciseType exercise : exerciseList)
			exerciseListNames.add(ExerciseManager.getName(exercise));*/
		
		ArrayList<String> tractorListIDs = new ArrayList<String>();
		tractorListIDs.add("tractor 1");
		tractorListIDs.add("tractor 2");
		
		ListView tractorSeq = (ListView) this.findViewById(R.id.tractorlistview);
		
        // specify an adapter (see also next example)
		ArrayAdapter<String> adapter = new ArrayAdapter<String>(this, android.R.layout.simple_list_item_1, android.R.id.text1,tractorListIDs);
        tractorSeq.setAdapter(adapter);
		
		// Exercises in Workout
		//exerciseSelections = new ArrayList<ExerciseType>();
		
		//tractorSeq.performItemClick(View view, int position, long id);
		tractorSeq.setOnItemClickListener(new OnItemClickListener() {

			@Override
			public void onItemClick(AdapterView<?> parent, View view,
					int position, long id) {
				// TODO Auto-generated method stub
				Intent intent = new Intent(TractorListActivity.this, TractorListActivity.class);
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
