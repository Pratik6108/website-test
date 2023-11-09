<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="pop-up-form-bg">
        <div class="pop-up-form">
            <div class="close-logo-wrap form-close-wrap">
                <div class="close-logo form-close">
                    <svg width="28" height="27" viewBox="0 0 28 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="1.35355" y1="0.646443" x2="27.3538" y2="26.6462" stroke="black" />
                        <line y1="-0.5" x2="36.7696" y2="-0.5" transform="matrix(-0.707114 0.7071 0.7071 0.707114 27.0005 1)" stroke="black" />
                    </svg>
                </div>
            </div>
            <form id="myform" action="" method="post">

                <fieldset>
                    <div class="input-group">
                        <label for="name">Your name</label>
                        <input type="text" name="name" id="name" />
                        <span id="name-val" class="error">Your name is required</span>

                    </div>
                    <div class="input-group">
                        <label for="mobile-no">Mobile no.</label>
                        <input type="text" name="mobile-no" id="mobile-no" />
                        <span id="mob-val" class="error">Your mobile no. is required</span>
                    </div>
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" />
                        <span id="email-val" class="error">Your Email is required</span>
                    </div>
                    <div class="inquiry">
                    <h3>Courses</h3>
                    <div class="inquiry-options ">
                        <div class="inquiry-group">
                            <label>
                                <input type="checkbox" name="inquiry[]" class="checkbox" value="Web Design"><span>Web Design</span>
                            </label>
                        </div>
                        <div class="inquiry-group">
                            <label>
                                <input type="checkbox" name="inquiry[]" class="checkbox" value="UX/UI Design"><span>UX/UI Design</span>
                            </label>
                        </div>
                        <!-- <div class="inquiry-group">
                            <label>
                                <input type="checkbox" name="inquiry[]" class="checkbox" value="Digital marketing"><span>Digital marketing</span>
                            </label>
                        </div>
                        <div class="inquiry-group">
                            <label>
                                <input type="checkbox" name="inquiry[]" class="checkbox" value="Branding"><span>Branding</span>
                            </label>
                        </div>
                        <div class="inquiry-group">
                            <label>
                                <input type="checkbox" name="inquiry[]" class="checkbox" value="Logo design"><span>Logo
                                    design</span>
                            </label>
                        </div>
                        <div class="inquiry-group">
                            <label>
                                <input type="checkbox" name="inquiry[]" class="checkbox" value="Video editing"><span>Video editing</span>
                            </label>
                        </div> -->
                        <span id="inquiry-val" class="error">Please select Inquiry</span>
                    </div>
                </div>

                    <input type="submit" class="btn-submit" id="submitBtn" value="Submit" />
            </form>
        </div>
    </div>
    <div id="loading">
        <div class="lds-spinner">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <div class="thank-you-pop-up">
        <div class="thank-close">
            <svg width="28" height="27" viewBox="0 0 28 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                <line x1="1.35355" y1="0.646443" x2="27.3538" y2="26.6462" stroke="black" />
                <line y1="-0.5" x2="36.7696" y2="-0.5" transform="matrix(-0.707114 0.7071 0.7071 0.707114 27.0005 1)" stroke="black" />
            </svg>
        </div>
        <h1>Thank you!</h1>
        <h3>We will connect with you shortly to discuss this further.</h3>
    </div>

    <script>
        $(document).ready(function() {
            // Hide the loading spinner initially
            $("#loading").hide();
            // JavaScript for form validation
            const form = document.getElementById("myform");

            form.addEventListener("submit", function(event) {
                event.preventDefault(); // Prevent the default form submission behavior
                let valid = true;

                // Name validation
                const name = document.getElementById("name");
                const nameVal = document.getElementById("name-val");
                if (name.value.trim() === "") {
                    valid = false;
                    nameVal.style.display = "block";
                } else {
                    nameVal.style.display = "none";
                }

                // Mobile number validation
                const mobileNo = document.getElementById("mobile-no");
                const mobileNoVal = document.getElementById("mob-val");
                const mobileNoPattern = /^[0-9+]+$/; // Numeric and plus symbol only
                if (!mobileNoPattern.test(mobileNo.value)) {
                    valid = false;
                    mobileNoVal.style.display = "block";
                } else {
                    mobileNoVal.style.display = "none";
                }

                // Email validation
                const email = document.getElementById("email");
                const emailVal = document.getElementById("email-val");
                const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
                if (email.value.trim() === "" || !emailPattern.test(email.value)) {
                    valid = false;
                    emailVal.style.display = "block";
                } else {
                    emailVal.style.display = "none";
                }

                // Inquiry checkboxes validation
                const inquiries = document.querySelectorAll('input[name="inquiry[]"]:checked');
                const inquiryVal = document.getElementById("inquiry-val");
                if (inquiries.length === 0) {
                    valid = false;
                    inquiryVal.style.display = "block";
                } else {
                    inquiryVal.style.display = "none";
                }

                if (valid) {
                    // Form is valid, proceed with AJAX form submission
                    // Show the loading spinner
                    $("#loading").show();
                    $("body").css("overflow-y", "hidden");

                    $.ajax({
                        type: 'post',
                        url: 'submit-form.php',
                        data: $(this).serialize(),
                        success: function() {

                            $("#loading").hide();
                            $(".thank-you-pop-up").css("display", "flex");

                            // Reset the form
                            form.reset();

                            // Close the pop-up
                            $(".pop-up-form-bg").hide();
                            $("body").css("overflow-y", "auto");
                        }
                    });
                }
            });
        });
    </script>
    <script>
        //disable submit button till all fields fieled or selected and change border bottom color when input is filled
        // Get references to the form elements
        const nameInput = document.getElementById('name');
        const mobileInput = document.getElementById('mobile-no');
        const emailInput = document.getElementById('email');
        // const inquiryCheckboxes = document.querySelectorAll('input[name="inquiry[]"]');
        const submitBtn = document.getElementById('submitBtn');

        // Function to check if the form is complete
        function isFormComplete() {
            const isNameFilled = nameInput.value.trim() !== '';
            const isMobileFilled = mobileInput.value.trim() !== '';
            const isEmailFilled = emailInput.value.trim() !== '';
            const isAnyCheckboxChecked = Array.from(inquiryCheckboxes).some(checkbox => checkbox.checked);

            return isNameFilled && isMobileFilled && isEmailFilled && isAnyCheckboxChecked;
        }

        // Disable the submit button initially
        submitBtn.disabled = true;

        // Add event listeners to form fields
        nameInput.addEventListener('input', () => {
            submitBtn.disabled = !isFormComplete();
        });

        mobileInput.addEventListener('input', () => {
            submitBtn.disabled = !isFormComplete();
        });

        emailInput.addEventListener('input', () => {
            submitBtn.disabled = !isFormComplete();
        });

        inquiryCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('input', () => {
                submitBtn.disabled = !isFormComplete();
            });
        });
        nameInput.addEventListener('input', () => {
            toggleBorder(nameInput);
            validateForm();
        });

        mobileInput.addEventListener('input', () => {
            toggleBorder(mobileInput);
            validateForm();
        });

        emailInput.addEventListener('input', () => {
            toggleBorder(emailInput);
            validateForm();
        });

        // Function to toggle the border style when input is filled
        function toggleBorder(inputField) {
            if (inputField.value.trim() !== '') {
                inputField.style.borderBottom = '1px solid #BFBFBF'; // Change the border style when filled
            } else {
                inputField.style.borderBottom = ''; // Reset the border style when empty
            }
        }

        // Your existing validation function
        function validateForm() {
            // ...
        }
    </script>


    <script type="text/javascript">
        $(document).ready(function() {
            //pop-up-form and thank-you-pop-up

            var popUpForm = $('.pop-up-form-bg');
            var thankPopUp = $('.thank-you-pop-up');

            // When the "get-in-touch-btn" element is clicked, show the pop-up form
            $('.register-btn').click(function(e) {
                e.stopPropagation(); // Prevent the click event from propagating to the document
                popUpForm.show();
                $("label").removeClass("animate-label");

            });

            //The work section When the "product-get-in-touch-link" element is clicked, show the pop-up form 
            // $('.product-get-in-touch-link').click(function(e) {
            //     e.stopPropagation(); // Prevent the click event from propagating to the document
            //     popUpForm.show();
            //     $("label").removeClass("animate-label");

            // });

            // When the "form-close" element is clicked, hide the pop-up form
            //reset the form when closing pop up
            $('.form-close').click(function() {
                popUpForm.hide();
                //reset the form when closing pop up
                const form = document.getElementById("myform");
                form.reset();
                $('.inquiry-group').css("border", "1px solid #000");

            });

            // Clicking anywhere on the screen will hide the pop-up form if it is visible
            //reset the form when closing pop up
            $(document).click(function(e) {
                if (!popUpForm.is(e.target) && popUpForm.has(e.target).length === 0) {
                    popUpForm.hide();
                    //reset the form when closing pop up
                    const form = document.getElementById("myform");
                    form.reset();
                    $('.inquiry-group').css("border", "1px solid #000");


                }
            });

            //on click close button close thank-you-pop-up
            $('.thank-close').click(function() {
                thankPopUp.hide();
            });
            // Clicking anywhere on the screen will hide the thank-you-pop-up if it is visible
            $(document).click(function(e) {
                if (!thankPopUp.is(e.target) && thankPopUp.has(e.target).length === 0) {
                    thankPopUp.hide();
                }
            });
        });

        //after checkbox checked remove border 
        document.addEventListener("DOMContentLoaded", function() {
            const checkboxes = document.querySelectorAll(".checkbox");

            checkboxes.forEach(function(checkbox) {
                checkbox.addEventListener("change", function() {
                    const parentGroup = this.closest(".inquiry-group");

                    if (this.checked) {
                        parentGroup.classList.add("checked");
                        parentGroup.style.border = "0";

                    } else {
                        parentGroup.classList.remove("checked");
                        parentGroup.style.border = "1px solid #000";
                    }
                });
            });
        });


        // for form input fields
        $(document).ready(function() {
            $('#checkbox').change(function() {
                if (this.checked) {
                    $('.inquiry-group').addClass('checked');
                    $('.inquiry-group').css("border", "1px solid black");
                } else {
                    $('.inquiry-group').removeClass('checked');

                }
            });

            //animate label= label move upside when clicked on input and after delete the words from input get down
            $('.input-group input').focus(function() {
                me = $(this);
                $("label[for='" + me.attr('id') + "']").addClass("animate-label");
            });
            $('.input-group input').blur(function() {
                me = $(this);
                if (me.val() == "") {
                    $("label[for='" + me.attr('id') + "']").removeClass("animate-label");
                }
            });

            //after form submit success show thank-you-pop-up
            $('#test-form').submit(function(e) {
                e.preventDefault();
                $(".thank-you-pop-up").css("display", "flex");
            })
        })
    </script>
</body>

</html>