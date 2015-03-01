package com.bran.android;

import com.bran.android.R;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.view.Window;
import android.view.View.OnClickListener;
import android.widget.Button;
import android.widget.EditText;

public class HacktorActivity extends Activity {

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);

		requestWindowFeature(Window.FEATURE_NO_TITLE);
		
		setContentView(R.layout.activity_hacktor);

		Button login = (Button) this.findViewById(R.id.loginButton);
		
		login.setOnClickListener(new OnClickListener()
		{
			@Override
			public void onClick(View v)
			{
				if (checkValidity()) {
					Intent intent = new Intent(HacktorActivity.this, TractorListActivity.class);
					startActivity(intent);
				}
			}
		});	
		
	}

	public boolean checkValidity() {
		
		boolean valid = true;
		
		EditText et_username = (EditText) findViewById(R.id.usernameField);
		
		if (et_username.getText().toString().isEmpty()) {
			et_username.setError("Username is Required");
			valid = false;
		}
		
		EditText et_password = (EditText) findViewById(R.id.passwordField);
		
		if (et_password.getText().toString().isEmpty()) {
			et_password.setError("Password is Incorrect");
			valid = false;
		}
		
		return valid;
		
	}
	
}
