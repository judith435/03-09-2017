  var customersModule = function() {
                customerApiUrl =  'customers-api.php';
              

                return {
                    createCustomer: function() {
                       
                    
                        jQuery.post(customerApiUrl).always(function(data) {
                            console.log(data);
                        });
                    },
                    getCustomer: function() {
                        jQuery.get(customerApiUrl).always(function(data) {
                            console.log(data);
                        });
                    },
                    deleteCustomer: function() {
                        jQuery.ajax({
                            url: customerApiUrl,
                            type: 'DELETE',
                            success: function(result) {
                                console.log(result);
                            }
                        });
                    }
                }
            }