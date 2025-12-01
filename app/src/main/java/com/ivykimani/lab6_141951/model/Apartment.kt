package com.ivykimani.lab6_141951.model

class Apartment(
    var apartmentNumber: String,
    var tenants: MutableList<Tenant> = mutableListOf()
) {
    fun addTenant(tenant: Tenant) {
        tenants.add(tenant)
    }

    fun getTenants(): List<Tenant> {
        return tenants
    }
}