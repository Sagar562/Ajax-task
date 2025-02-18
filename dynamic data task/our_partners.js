$(document).ready(function(){
    $.ajax({
        url: 'our_partners_backend.php',  // URL of your PHP backend
        method: 'GET',
        dataType: 'json',
        success: function(res){
            console.log(res);  

            // Ensure the response is not empty and is an array
            if (Array.isArray(res) && res.length > 0) {
                
                // Loop through each company in the response array using $.each()
                $.each(res, function(index, company) {
                    console.log("Company at index", index, company);  // Log the company object at each index
                    
                    // Build the card for each company using the provided template
                    var companyCard = `
                        <div class="card p-4 mb-4">
                            <div class="row">
                                <!-- img -->
                                <img src="${company.img_url.trim() ? company.img_url.trim() : 'path/to/default/image.jpg'}" 
                                    class="col-lg-5 object-fit-contain" id="company_image" height="300px" width="600px" 
                                    alt="${company.company_name}">
                                
                                <!-- about Us content -->
                                <div class="col-lg-7">
                                    <!-- company name -->
                                    <h5 id="company_name" class="text-lg-center text-md-center text-sm-center text-center mb-md-3 mb-sm-3 mb-3">
                                        ${company.company_name}
                                    </h5>

                                    <!-- company details -->
                                    <p id="company_details" class="text-lg-left">${company.company_details}</p>

                                    <!-- email -->
                                    <div class="d-flex gap-3">
                                        <label for="">Email : </label>
                                        <p id="company_email">${company.company_email}</p>
                                    </div>

                                    <!-- phone number -->
                                    <div class="d-flex gap-3">
                                        <label for="">Phone Number : </label>
                                        <p id="company_number">${company.company_number}</p>
                                    </div>

                                    <!-- contact btn -->
                                    <button class="btn btn-primary">
                                        <a href="contactUs.html" class="text-decoration-none text-white" target="_blank">
                                            Contact Us
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    `;

                    // Append the new company card to the container
                    $('#company-container').append(companyCard);
                });

            } else {
                // If the response is empty or not an array, display a message
                $('#company-container').append("<p>No companies found.</p>");
            }
        },
        error: function(xhr, status, error) {
            console.error("AJAX error: ", status, error);
            // Show an error message if the AJAX request fails
            $('#company-container').append("<p>Something went wrong. Please try again later.</p>");
        }
    });
});
