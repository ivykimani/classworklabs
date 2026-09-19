package com.ivykimani.fragmentnavigationlab

import android.os.Bundle
import android.view.View
import android.widget.Button
import androidx.fragment.app.Fragment
import androidx.navigation.fragment.findNavController

class BookDetailsFragment : Fragment(R.layout.fragment_book_details) {
    override fun onViewCreated(view: View, savedInstanceState: Bundle?) {
        super.onViewCreated(view, savedInstanceState)

        view.findViewById<Button>(R.id.buttonToAddReview).setOnClickListener {
            findNavController().navigate(R.id.action_details_to_addReview)
        }
    }
}
