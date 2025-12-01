package com.ivykimani.lab6_141951.ui_

import android.os.Bundle
import androidx.activity.viewModels
import androidx.appcompat.app.AppCompatActivity
import androidx.databinding.DataBindingUtil
import com.ivykimani.lab6_141951.R
import com.ivykimani.lab6_141951.databinding.ActivitySecondBinding
import com.ivykimani.lab6_141951.viewmodel.TenantViewModel

class SecondActivity : AppCompatActivity() {

    private lateinit var binding: ActivitySecondBinding
    private val viewModel: TenantViewModel by viewModels()

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)

        binding = DataBindingUtil.setContentView(this, R.layout.activity_second)
        binding.viewModel = viewModel
        binding.lifecycleOwner = this

        val first = intent.getStringExtra("FIRST_NAME") ?: "N/A"
        val second = intent.getStringExtra("SECOND_NAME") ?: "N/A"
        val apartment = intent.getStringExtra("APARTMENT_NUMBER") ?: "N/A"

        viewModel.setTenant(first, second, apartment)
    }
}
