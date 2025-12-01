package com.ivykimani.lab6_141951.ui_

import android.os.Bundle
import android.content.Intent
import android.widget.Button
import android.widget.EditText
import androidx.appcompat.app.AppCompatActivity
import com.ivykimani.lab6_141951.R

class MainActivity : AppCompatActivity() {

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)

        val firstNameInput = findViewById<EditText>(R.id.editFirstName)
        val secondNameInput = findViewById<EditText>(R.id.editSecondName)
        val apartmentInput = findViewById<EditText>(R.id.editApartment)
        val buttonNext = findViewById<Button>(R.id.buttonNext)

        buttonNext.setOnClickListener {
            val intent = Intent(this, SecondActivity::class.java)
            intent.putExtra("FIRST_NAME", firstNameInput.text.toString())
            intent.putExtra("SECOND_NAME", secondNameInput.text.toString())
            intent.putExtra("APARTMENT_NUMBER", apartmentInput.text.toString())
            startActivity(intent)
        }
    }
}