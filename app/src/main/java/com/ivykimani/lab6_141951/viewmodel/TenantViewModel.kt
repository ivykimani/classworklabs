package com.ivykimani.lab6_141951.viewmodel

import androidx.lifecycle.LiveData
import androidx.lifecycle.MutableLiveData
import androidx.lifecycle.ViewModel
import com.ivykimani.lab6_141951.model.Tenant

class TenantViewModel : ViewModel() {

    private val _tenant = MutableLiveData<Tenant>()
    val tenant: LiveData<Tenant> get() = _tenant
    fun addTenant(first: String, second: String, apartment: String) {
        val tenant = Tenant(first, second, apartment)
        _tenant.value?.add(tenant)
        _tenant.postValue(tenant)
    }

    fun payRent(index: Int) {
        _tenant.value?.get(index)?.let { tenant ->
            tenant.isPaid = true
            tenant.postValue(tenant.value)
        }
    }
    /*
    fun updateFirstName(newFirstName: String) {
        _tenant.value = _tenant.value?.copy(firstName = newFirstName)
    }
    fun updateSecondName(newSecondName: String) {
        _tenant.value = _tenant.value?.copy(secondName = newSecondName)
    }
    fun updateApartmentNumber(newApartment: String) {
        _tenant.value = _tenant.value?.copy(apartmentNumber = newApartment)
    }*/
}